<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Modules\Common\Entities\Cron;
use Modules\Post\Entities\Post;
use Modules\Post\Entities\RssFeed;
use Sentinel;

class RssImportCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rssImport:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for rss post importing';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $rssFeeds      = RssFeed::where('auto_update' , 1)->get();
            foreach ($rssFeeds as $feed) {
                $invalidUrl = false;
                if(@simplexml_load_file($feed->feed_url)):
                    $feeds = simplexml_load_file($feed->feed_url, null, LIBXML_NOCDATA);
                    $namespaces = $feeds->getNamespaces(true);

                    if(!empty($feeds)):
                        $language = $feeds->channel->language;

                        $i=0;
                        foreach ($feeds->channel->item as $key => $item) :
                            $post = new Post();
                            $hasAlready = Post::where('title',$item->title)->orwhere('slug', ((new \Modules\Post\Http\Controllers\RssController)->make_slug($item->title)))->first();

                            if (!empty($hasAlready)){
                                continue;
                            }

                            if($feed->post_limit == $i):
                                break;
                            endif;

                            $post->title        = $item->title;
                            $post->slug         = (new \Modules\Post\Http\Controllers\RssController)->make_slug($item->title) ;

//                    $link           = $item->link;
                            $post->content      = $item->description;

                            if($feed->keep_date):
                                $post->created_at       = Carbon::parse($item->pubDate);
                            endif;

                            if($feed->show_read_more):
                                $post->read_more_link   = $item->link;
                            endif;

                            $post->language         = $feed->language;
                            $post->category_id      = $feed->category_id;
                            $post->sub_category_id  = $feed->sub_category_id ;
                            $post->layout           = $feed->layout ;

                            if($feed->status == 2) :
                                $post->status           = 0;
                                $post->scheduled        = 1;
                                $post->scheduled_date   = $feed->scheduled_date;
                                $post->visibility       = 1;
                            elseif($feed->status == 0):
                                $post->status     = $feed->status;
                            else :
                                $post->status           = $feed->status;
                                $post->visibility       = 1;
                            endif;

                            $post->user_id          = Sentinel::getUser()->id;
                            $post->tags             = $feed->tags ;
                            $post->meta_keywords    = $feed->meta_keywords ;
                            $post->meta_description = $feed->meta_description ;

                            if(!empty((new \Modules\Post\Http\Controllers\RssController)->getImg($item , $namespaces))):
                                if(preg_match('/\.(jpg|png|jpeg|PNG|JPEG|JPG)$/', (new \Modules\Post\Http\Controllers\RssController)->getImg($item , $namespaces))):
                                    $post->post_type        = 'article' ;
                                    $post->image_id = (new \Modules\Post\Http\Controllers\RssController)->imageUpload((new \Modules\Post\Http\Controllers\RssController)->character_convert((new \Modules\Post\Http\Controllers\RssController)->getImg($item , $namespaces)));
                                elseif(preg_match('/\.(mp4|3gp|webm)$/', (new \Modules\Post\Http\Controllers\RssController)->getImg($item , $namespaces))):
                                    $post->post_type        = 'video' ;
                                    $post->video_url_type   = 'mp4_url' ;
                                    $post->video_url = (new \Modules\Post\Http\Controllers\RssController)->character_convert((new \Modules\Post\Http\Controllers\RssController)->getImg($item , $namespaces));
                                else:
                                    $post->post_type        = 'article' ;
                                endif;
                            endif;

                            $post->save();
                            $i++;
                        endforeach;
                    endif;
                else:
                    $invalidurl = true;
                    continue;
                endif;
        }
    }

}

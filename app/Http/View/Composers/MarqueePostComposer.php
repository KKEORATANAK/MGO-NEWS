<?php


namespace App\Http\View\Composers;


use Illuminate\View\View;
use LaravelLocalization;
use Modules\Post\Entities\Post;

class MarqueePostComposer
{
    public function __construct()
    {

    }
    public function compose(View $view)
    {
        // $marqueePost = Post::orderBy('created_at', 'desc')
        //                     ->where('status', 1)
        //                     ->where('visibility', 1)
        //                     ->where('language', LaravelLocalization::setLocale() ?? settingHelper('default_language'))
        //                     ->first();
        $marqueePost = Post::where('status', 1)
                    ->where('visibility', 1)
                    ->orderBy('created_at', 'desc')
                    ->where('language', LaravelLocalization::setLocale() ?? settingHelper('default_language'))
                    ->inRandomOrder()->limit(10)->get();
        $view->with('marqueePost', $marqueePost);
    }
}

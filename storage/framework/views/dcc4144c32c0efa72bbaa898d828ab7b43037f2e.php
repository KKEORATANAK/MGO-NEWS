<header class="sg-header">
    <div class="sg-topbar" id="topbar">
        <div class="container">
            <div class="d-md-flex justify-content-md-between">
                
                <div class="left-contennt">
                    <ul class="global-list">
                        
                        <li>
                            
                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i><?php echo e(date('l, d F Y')); ?>

                            </li>
                    </ul>
                    <!-- weather widget start --><a target="_blank" href="https://www.booked.net/weather/phnom-penh-7977"><img src="https://w.bookcdn.com/weather/picture/21_7977_1_1_3658db_250_2a48ba_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=w209&anc_id=73252"  alt="booked.net"/></a><!-- weather widget end -->
                </div>
                <div class="right-content d-flex">
                    <div class="d-flex">
                        <?php if(settingHelper('submit_news_status')==1): ?>
                            <div class="submit-news d-none d-md-block">
                                <a href="<?php echo e(route('submit.news.form')); ?>"><?php echo e(__('submit_now')); ?></a>
                            </div>
                        <?php endif; ?>
                        <input type="hidden" id="url" value="<?php echo e(url('')); ?>">
                        <div class="sg-language">
                            <select name="code" id="languges-changer">
                                <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option data-class="<?php echo e($lang->icon_class); ?>" value="<?php echo e($lang->code); ?>" <?php echo e(LaravelLocalization::setLocale() == ""? ( settingHelper('default_language') == $lang->code? 'selected':'' ) : (LaravelLocalization::setLocale() == $lang->code ? 'selected':'')); ?>><?php echo e($lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="sg-social d-none d-xl-block mr-md-5">
                            <ul class="global-list">
                                <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($socialMedia->url); ?>" target="_blank"><i class="<?php echo e($socialMedia->icon); ?>" aria-hidden="true"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('feed')); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="sg-user">
                            <?php if(Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()): ?>
                                <div class="dropdown">
                                    <a class="nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if(Sentinel::getUser()->profile_image != null): ?>
                                            <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" data-original="<?php echo e(static_asset(Sentinel::getUser()->profile_image)); ?>"  class="profile">
                                        <?php else: ?>
                                            <i class="fa fa-user-circle mr-2"></i>
                                        <?php endif; ?>
                                            <?php echo e(Sentinel::getUser()->first_name); ?><i class="fa fa-angle-down  ml-2" aria-hidden="true"></i></a>

                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown site-setting-area" aria-labelledby="navbarDropdownMenuLink2">

                                        <?php if(Sentinel::getUser()->roles[0]->id != 4 && Sentinel::getUser()->roles[0]->id != 5): ?>
                                            <a class="" href="<?php echo e(route('dashboard')); ?> " target="_blank"><i class="fa fa-tachometer mr-2" aria-hidden="true"></i><?php echo e(__('dashboard')); ?></a>
                                        <?php endif; ?>
                                        <a class=""  href="<?php echo e(route('site.profile')); ?>"><i class="fa fa-user mr-2"></i><?php echo e(__('profile')); ?></a>

                                        <a class=""  href="<?php echo e(route('site.profile.form')); ?>"><i class="fa fa-cog mr-2"></i><?php echo e(__('edit_profile')); ?></a>

                                        <a class="" href="<?php echo e(route('site.logout')); ?>"><i class="fa fa-power-off mr-2"></i><?php echo e(__('logout')); ?></a>

                                    </div>
                                </div>
                            <?php else: ?>
                                <span>
                                    <i class="fa fa-user-circle mr-2" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('site.login.form')); ?>"><?php echo e(__('login')); ?></a> <span class="d-none-small">/ <a href="<?php echo e(route('site.register.form')); ?>"> <?php echo e(__('sign_up')); ?></a></span>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navbar_top" class="sg-menu header-style-5" style="margin-bottom: 0 !important;">
        <?php echo $__env->make('site.partials.ads', ['ads' => $headerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="menu-content">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(static_asset(settingHelper('logo'))); ?>" alt="Logo" class="img-fluid">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">

                            <?php $__currentLoopData = $primaryMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($mainMenu->is_mega_menu == 'no'): ?>
                                    <li class="nav-item sg-dropdown">
                                        <a href="<?php echo e(menuUrl($mainMenu)); ?>" target="<?php echo e($mainMenu->new_teb == 1? '_blank':''); ?>"><?php echo e($mainMenu->label == 'gallery'? __('gallery'):$mainMenu->label); ?> <?php if(!blank($mainMenu->children)): ?><span><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php endif; ?> </a>
                                        <ul class="sg-dropdown-menu">
                                            <?php $__currentLoopData = $mainMenu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class=""><a href="<?php echo e(menuUrl($child)); ?>" target="<?php echo e($child->new_teb == 1? '_blank':''); ?>"><?php echo e(@$child->label); ?> <?php if(!blank($child->children)): ?> <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span><?php endif; ?></a>
                                                    <ul class="sg-dropdown-menu-menu">
                                                        <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class=""><a href="<?php echo e(menuUrl($subChild)); ?>" target="<?php echo e($subChild->new_teb == 1? '_blank':''); ?>"><?php echo e(@$subChild->label); ?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                <?php endif; ?>

                                <?php if($mainMenu->is_mega_menu == 'tab'): ?>

                                    <li class="sg-dropdown mega-dropdown">
                                        <a href="<?php echo e(menuUrl($mainMenu)); ?>"><?php echo e($mainMenu->label == 'gallery'? __('gallery'):$mainMenu->label); ?><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                        <div class="sg-dropdown-menu mega-dropdown-menu">
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <?php $__currentLoopData = $mainMenu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php $key = 0 ?>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link <?php echo e($mainMenu->children[$key]->id == $child->id? 'active':''); ?>" id="<?php echo e($child->label); ?>-tab" data-toggle="tab" href="#<?php echo e($child->category->slug); ?>" role="tab" aria-controls="<?php echo e($child->label); ?>" aria-selected="<?php echo e($mainMenu->children[$key]->id == $child->id? 'true':'false'); ?>"><?php echo e($child->label == 'gallery'? __('gallery'):$child->label); ?></a>
                                                                    </li>
                                                                <?php $key++ ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="tab-content" id="myTabContent">
                                                            <?php $__currentLoopData = $mainMenu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="tab-pane fade <?php echo e($mainMenu->children[0]->id == $child->id? 'show active':''); ?>" id="<?php echo e($child->category->slug); ?>" role="tabpanel" aria-labelledby="<?php echo e($child->label); ?>-tab">
                                                                    <div class="row">
                                                                        <?php $__currentLoopData = $child->postByCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <div class="col-md-6 col-lg-3">
                                                                                <div class="sg-post">
                                                                                    <div class="entry-header">
                                                                                        <div class="entry-thumbnail">
                                                                                            <a href="<?php echo e(route('article.detail', ['id' => $item->slug])); ?>">
                                                                                                <?php if(isFileExist(@$item->image, $result = @$item->image->medium_image_three)): ?>
                                                                                                    <img class="img-fluid" src="<?php echo e(safari_check() ? basePath(@$item->image).'/'.$result : static_asset('default-image/default-240x160.png')); ?>" data-original="<?php echo e(basePath(@$item->image)); ?>/<?php echo e($result); ?>" alt="<?php echo $item->title; ?>">
                                                                                                <?php else: ?>
                                                                                                    <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-240x160.png')); ?>"  alt="<?php echo $item->title; ?>">
                                                                                                <?php endif; ?>
                                                                                            </a>
                                                                                        </div>
                                                                                        <?php if($item->post_type=="video"): ?>
                                                                                            <div class="video-icon block">
                                                                                                <img src="<?php echo e(static_asset('default-image/video-icon.svg')); ?> " alt="video-icon">
                                                                                            </div>
                                                                                        <?php elseif($item->post_type=="audio"): ?>
                                                                                            <div class="video-icon block">
                                                                                                <img src="<?php echo e(static_asset('default-image/audio-icon.svg')); ?> " alt="audio-icon">
                                                                                            </div>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                    <div class="entry-content">
                                                                                        <a href="<?php echo e(route('article.detail', ['id' => $item->slug])); ?>"><p><?php echo Str::limit($item->content, 35); ?></p></a>
                                                                                        <div class="entry-meta">
                                                                                            <ul class="global-list">
                                                                                               <li><?php echo e(__('post_by')); ?> <a href="<?php echo e(route('site.author',['id' => $item->user->id])); ?>"><?php echo e($item->user->first_name); ?> </a> <a href="<?php echo e(route('article.date', date('Y-m-d', strtotime($item->updated_at)))); ?>"> <?php echo e(date('d F Y', strtotime($item->created_at))); ?></a></li>
                                                                                            </ul>
                                                                                        </div><!-- /.entry-meta -->
                                                                                    </div><!-- /.entry-content -->
                                                                                </div><!-- /.sg-post -->
                                                                            </div>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.tab-pane -->
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div><!-- /.tab-content -->
                                                    </div>
                                                </div><!-- /.row -->
                                            </div><!-- /.mega-menu-content -->
                                        </div>
                                    </li>
                                <?php endif; ?>

                                <?php if($mainMenu->is_mega_menu == 'category'): ?>
                                    <li class="sg-dropdown mega-dropdown">
                                        <a href="<?php echo e(menuUrl($mainMenu)); ?>" target="<?php echo e($mainMenu->new_teb == 1? '_blank':''); ?>"><?php echo e($mainMenu->label == 'gallery'? __('gallery'):$mainMenu->label); ?> <?php if(!blank($mainMenu->children)): ?><span><i class="fa fa-angle-down" aria-hidden="true"></i></span><?php endif; ?></a>
                                        <div class="sg-dropdown-menu mega-dropdown-menu">
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <?php $__currentLoopData = $mainMenu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-3">
                                                            <h3><?php echo e($child->label == 'gallery'? __('gallery'):$child->label); ?></h3>
                                                            <ul class="global-list">
                                                                 <?php $__currentLoopData = $child->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li><a href="<?php echo e(menuUrl($subChild)); ?>" target="<?php echo e($subChild->new_teb == 1? '_blank':''); ?>"><?php echo e($subChild->label == 'gallery'? __('gallery'):$subChild->label); ?></a></li>
                                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div><!-- /.row -->
                                            </div><!-- /.mega-menu-content -->
                                        </div>
                                    </li>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="sg-search">
                        <div class="search-form">
                            <form action="<?php echo e(route('article.search')); ?>" id="search" method="GET">
                                <input class="form-control" name="search" type="text" placeholder="<?php echo e(__('search')); ?>">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container" >
    <div class="row ">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <marquee onmouseover="this.stop();" onmouseout="this.start();"
                     style="border: 1px solid black; background-color: #0a3c93; color: white;padding: 10px;">
                <span style="font-size: 18px;">
                    <?php $__currentLoopData = $marqueePost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        *<?php echo e($post->title); ?>&nbsp;
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
            </marquee>

        </div>
    </div>
</div>

<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/layouts/header/style_5.blade.php ENDPATH**/ ?>
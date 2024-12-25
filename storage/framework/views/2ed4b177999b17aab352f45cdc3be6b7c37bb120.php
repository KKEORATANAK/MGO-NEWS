<div class="sg-widget">
    <h3 class="widget-title"><?php echo e(__('archive')); ?></h3>
    <div class="widget-archive text-center">
        <div class="mb-2 splash-description alert-box failure">
            <span class=""><?php echo e(__('please_select_a_date')); ?></span>
        </div>
        <div class="form-group">
            <div class="input-group">
                <div class="container-calender">
                    <div class="calendar">
                        <div class="calendar-footer">
                            <div class="btns">
                                <div class="next-prev">
                                    <div class="btn prev-btn"><i class="fa fa-angle-left"></i></div>
                                    <div class="btn next-btn"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div>
                                    <div class="btn ok-btn"><?php echo e(__('submit')); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('script'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/calendar.css')); ?>">
    <script src="<?php echo e(static_asset('site/js/calendar.js')); ?>"></script>
    <script>
        let c = $('.calendar');
        let calendar = new Calendar(c);
        c.find('.ok-btn').on('click', function(event) {
            event.preventDefault();
            if(calendar.getSelectedDate().day !== undefined){
                var baseUrl = "<?php echo e(url('date')); ?>" + '/' + calendar.getSelectedDate().fullDate;
                // console.log(baseUrl);
                // return false;
                
                window.location.href = baseUrl;
            }
            else{
                $( ".splash-description" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
            }
        });
    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /home/u378727991/domains/mangomedia.net/public_html/resources/views/site/widgets/archive.blade.php ENDPATH**/ ?>
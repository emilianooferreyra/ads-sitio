<script type="text/javascript" src="/js/jquery.js"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="/js/scroll-desktop.js"></script>
<script type="text/javascript" src="/js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/js/jquery.themepunch.tools.min.js"></script>


<!-- Date Picker and input hover -->
<!--<script type="text/javascript" src="/js/classie.js"></script>-->
<!--<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.js"></script>-->


<!-- Welcome Tabs -->
<script type="text/javascript" src="/js/tabs.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="/js/jquery.mmenu.min.all.js"></script>

<!-- All Carousel-->
<script type="text/javascript" src="/js/owl.carousel.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="/js/custom.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {


        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 16000,
            startwidth: 1170,
            startheight: 600,
            hideThumbs: 200,

            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,

            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "preview4",

            touchenabled: "on",
            onHoverStop: "on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

            keyboardNavigation: "off",

            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",

            spinner: "spinner4",

            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: "off",

            autoHeight: "off",
            forceFullWidth: "off",


            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });


    }); //ready
</script>
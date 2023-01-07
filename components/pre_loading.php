<style>
    .slideshow-image,.slideshow-image-body{animation-play-state: paused }
    body {
        animation-play-state: paused
    }

    .no-js #loader {
        display: none;
    }

    .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
    }
    
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        
        background: url(gif/3dgifmaker32407.gif) center no-repeat #fff9f1;
        background-size: 100px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<script>
    $(window).load(function() {
        $(".se-pre-con").fadeOut("fast");
        bannerImg=document.getElementsByClassName('slideshow-image')
        bannerText=document.getElementsByClassName('slideshow-image-body')
        for (var i = 0; i < bannerImg.length; i++) {
            var element = bannerImg[i].style.animationPlayState  = 'running';
        }
        for (var i = 0; i < bannerText.length; i++) {
            var bannerText = bannerText[i].style.animationPlayState  = 'running';
        }
    });
</script>
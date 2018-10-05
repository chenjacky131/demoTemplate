
<link rel="stylesheet" type="text/css" href="content/skin/<?=getConfig('file_path')?>/css/banner.css">
<div id="slider" class="slider" data-slick='{"autoplay":true,"slidesToShow": 1, "slidesToScroll": 1,"dots":true,"appendDots":".slick-d","dotsClass":"slick-dotss","slide":".slide"}'>
  <div class="slide s1"></div>
  <div class="slide s2"></div>
  <div class="slide s3"></div>
  <div class="slide s4"></div>
  <div class="slide s5"></div>
  <div class="slide s6"></div>
    <div class="slick-dots">
        <div class="wrapper slick-d"></div>
    </div>
</div>

<script src="content/scripts/slick.min.js"></script>
<script>
    $(function(){
        // 轮播图
        $("#slider").slick({
            infinite: true
        });
        $("#slider .slick-arrow.slick-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
        $("#slider .slick-arrow.slick-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    });
</script>
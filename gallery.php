    <!--================INCLUDE HEAD START PHP=================-->
    <?php include_once 'components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->

    <!--  EXTRA PLUGINS -->
    <link href="css/modal-video.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--================INCLUDE HEAD END PHP=================-->
    <?php include_once 'components/head_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->


    <!--================INCLUDE HEADER NAV PHP=================-->
    <?php include_once 'components/header.php' ?>
    <!--================END INCLUDE HEADER NAV PHP=================-->

    <!--================Banner Area =================-->
    <section class="callToAct-sec overlay-dblue">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-9">
            <a href="index.html">Home /</a>
            <a class="active" href="gallery.html">Gallery</a>
            <p class="wow fadeInUp" data-wow-delay="500ms">GALLERY </p>
          </div>

        </div>
      </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================MAGNIFIC POPUP AREA =================-->
    <div class="col-lg-12">
      <div class="section-head">
        <h3 class="section-title">Gallery</h3>
        <p class="section-subtitle">"Express agency has been very reliable. Every time we book something through them, I know when it's going to be there." </p>
      </div>
    </div>

    <div class="row no-gutter gallerys">
      <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12" style=" margin-top: 20px;">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12" style="margin-top: 20px;">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-12" style="margin-top: 20px;">
        <a href="images/a1.jpg" target="_blan"><img src="images/a1.jpg" class="img-fluid"> </a>
      </div>
    </div>

    <!--================END MAGNIFIC POPUP AREA =================-->

    <!--================Express Video Area =================-->
    <section class="express_video_area">
      <div class="row m0 video_row ">
        <div class="overlay" id="video_overlay">
          <div class="overlay_bg"></div>
          <div class="play_pause row m0">
            <div class="video_content">
              <button class="video-play" data-video-id="RJ7r6Iws7Nk" style="border: none;"><i class="fa-solid fa-play"></i></button>
              <P>
              <h2>video</h2>
              </P>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--================End Express Video Area =================-->

    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->

    <!--================INCLUDE SCRIPT START PHP=================-->
    <?php include_once 'components/script_start.php' ?>
    <!--================END INCLUDE SCRIPT START PHP=================-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      $(document).ready(function() {
        $('.gallerys').magnificPopup({
          type: 'image',
          delegate: 'a',
          gallery: {
            enabled: true
          }
        });
      });
    </script>

    <script>
      $(".video-play").modalVideo();
    </script>

    <!--================INCLUDE SCRIPT END PHP=================-->
    <?php include_once 'components/script_end.php' ?>
    <!--================END INCLUDE SCRIPT END PHP=================-->
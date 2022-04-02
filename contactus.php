    <!--================INCLUDE HEAD START PHP=================-->
    <?php include_once 'components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->

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
            <a class="active" href="contactus.html">Contact us</a>
            <p class="wow fadeInUp" data-wow-delay="500ms">CONTACT US</p>
          </div>
        </div>
      </div>
    </section>
    <!--================End Banner Area =================-->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding" data-stellar-background-ratio="0.6" style=" margin-top: 100px; margin-bottom: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-head">
              <h3 class="section-title">contact us</h3>
              <p class="section-subtitle">"Express agency has been very reliable. Every time we book something through them, I know when it's going to be there. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="single-contact wow fadeInUp" data-wow-delay=".2s">
              <div class="contact-icon">
                <i class="fa fa-map"></i>
              </div>
              <h2> full name:</h2>
              <p> kaushal sahni</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-contact wow fadeInUp" data-wow-delay=".4s">
              <div class="contact-icon">
                <i class="fa fa-phone"></i>
              </div>
              <h2>contact number:</h2>
              <p><a href="callto:someone@example.com">+234567890</a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single-contact wow fadeInUp" data-wow-delay=".6s">
              <div class="contact-icon">
                <i class="fa fa-envelope"></i>
              </div>
              <h2>Email us:</h2>
              <p><a href="mailto:someone@example.com">xyz@gmail.com</a></p>
            </div>
          </div>
        </div>
        <div class="row contact-form-design-area">
          <div class="col-lg12 col-md-12 col-xxl">
            <!-- START CONTACT FORM DESIGN AREA -->
            <div class="contact-form">
              <form id="connect" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-4">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    <span class="text-danger" id="name_error"></span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    <span class="text-danger" id="email_error"></span>
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                    <span class="text-danger" id="phone_error"></span>
                  </div>
                  <div class="form-group col-md-12">
                    <input rows="6" type="text" name="subject" class="form-control" id="subject" placeholder="Your subject"></input>
                    <span class="text-danger" id="subject_error"></span>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea rows="6" name="message" class="form-control" id="message" placeholder="Your Message"></textarea>
                    <span class="text-danger" id="message_error"></span>
                  </div>
                  <div class="col-md-12 text-center">
                    <div class="actions wow fadeInUp" data-wow-delay=".4s">
                      <input type="submit" value="send message" name="submit" id="submit" class="" title="Submit Your Message!">
                      <div id="loader" class="spinner-grow text-danger " role="status">
                        <span class="visually-hidden ">Loading...</span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- / ENd CONTACT FORM DESIGN AREA -->
          </div>
        </div>
      </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->

    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/ajax/contact.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/ajax/common.js"></script>

    <!--================INCLUDE SCRIPT START PHP=================-->
    <?php include_once 'components/script_start.php' ?>
    <!--================END INCLUDE SCRIPT START PHP=================-->

    <!--================INCLUDE SCRIPT END PHP=================-->
    <?php include_once 'components/script_end.php' ?>
    <!--================END INCLUDE SCRIPT END PHP=================-->
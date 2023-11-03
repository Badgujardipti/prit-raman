<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <title>Aloha</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- css group start -->
  <?php include_once 'view/include_css.html'; ?>
  <!-- css group end -->
</head>

<body>
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <!-- header start -->
  <?php include_once 'view/header.html'; ?>
  <!-- header end -->
  <main class="home">
    <section class="lyt-section bg-blk-light ">
      <div class="container">
        <div class="row py-5">
          <div class="col-lg-12 pt-5 pb-2 mt-4">
            <h1 class="wow fadeInUp height-normal txt-white fnt-bold f-48" data-wow-delay="0.3s">
              Contact
            </h1>
          </div>
        </div>
      </div>
    </section>

    <section class="lyt-section bg-blk">
      <div class=" contact-form-sec">
        <div class="container bg-blk-light p-4 radius-15">
          <div class="bs-form">
            <form id="contactForm" name="contactForm">
              <h1 class="text-center txt-white f-32 fnt-bold mt-3 mb-4" id="contact-formLabel">Get in <span class="txt-red">touch</span></h1>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-field">
                    <label>
                      <input placeholder="First name*" name="fname" id="fname">
                      <!-- <span class="f-14">First name*</span> -->
                    </label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-field">
                    <label>
                      <input placeholder="Last name*" name="lname" id="lname">
                      <!-- <span class="f-14">Last name*</span> -->
                    </label>


                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-field">
                    <label>
                      <input placeholder="Email address*" name="email" id="email">
                      <!-- <span class="f-14">Email address*</span> -->
                    </label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-field">
                    <label>
                      <input placeholder="Phone number" name="contact" id="contact">
                      <!-- <span class="f-14">Phone number</span> -->
                    </label>
                  </div>
                </div>



                <div class="col-md-12">
                  <div class="form-field">

                    <i class="icn icn-menu-option icon-Vector"></i>
                    <select class="form-select" aria-label="Default select example">

                      <option selected>How can we help you?</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-field">
                    <label for="">
                      <textarea placeholder="Message" class="full-width bg-blk-light" rows="3"></textarea>
                      <!-- <span class="f-14">Message</span> -->
                    </label>
                  </div>
                </div>
              </div>
              <div class="text-right">
                <input type="submit" value="Submit" class="btn sub-btn btn-red">
              </div>
            </form>

          </div>
        </div>
      </div>


    </section>

    <section class="lyt-section typ-value bg-blk-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center title f-32 height-normal txt-white fnt-bold pb-4 mb-0">My <span class="txt-red">Values</span></h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="value-sec bg-light-red radius-10 f-16 txt-white p-4">
              <p class="f-50 txt-white mb-0"><i class="icn icon-phone_in_talk_FILL0_wght400_GRAD0_opsz48-1"></i></p>
              <p class="">Expert call</p>
              <p>Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="value-sec bg-light-red radius-10 f-16 txt-white p-4">
              <p class="f-50 txt-white mb-0"><i class="icn icon-sync_saved_locally_FILL0_wght400_GRAD0_opsz48-1"></i></p>
              <p class="">Expert call</p>
              <p>Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="value-sec bg-light-red radius-10 f-16 txt-white p-4">
              <p class="f-50 txt-white mb-0"><i class="icn icon-verified_FILL0_wght400_GRAD0_opsz48-1"></i></p>
              <p class="">Expert call</p>
              <p>Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
   
  </main>
  <!-- footer start -->
  <?php include_once 'view/footer.html' ?>
  <!-- footer end -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
  <!-- js group start -->
  <?php include_once 'view/include_js.html' ?>
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
  <!-- js group end -->
</body>

</html>
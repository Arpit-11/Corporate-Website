<?php
//Template Name:Home
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<?php get_header(); ?>
<section class="banner">
<section class="hero-section">
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php bloginfo('template_directory'); ?>/hero-img.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 custom-heading">Better Solutions For Your Business</h1>
        <p class="lead custom-subheading">We are team of talented designers making websites with Bootstrap</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn  custom-button rounded-pill btn-lg px-4 me-md-2">Get Started</button>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
<!-- about -->
<section class="about">
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold custom-about">About us</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p class="lead mb-4">
      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
       
        <button type="button" class="btn  custom-about-button btn-lg px-4">Read More-></button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container ">
        <img src="<?php bloginfo('template_directory'); ?>/aboutus.png" class="img-fluid border rounded-3 shadow-lg mb-4 about-img" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>
</section>



<!-- about1 -->
 <section class="about1">
<div class="container col-xxl-8 ">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
      <img src="<?php bloginfo('template_directory'); ?>/why-us.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
      <h1 class="display-4 fw-bold custom-about1">Eum ipsam laborum deleniti velit pariatur architecto aut nihil</h1>
      <div class="container-about">
          <div class="important">
        <h2> Non consectetur a erat nam at lectus urna duis?</h2>
      </div>
        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
      </div>

      <div class="container-about">
          <div class="important">
        <h2> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h2>
      </div>
        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
      </div>

      <div class="container-about">
          <div class="important">
        <h2> Non consectetur a erat nam at lectus urna duis?</h2>
      </div>
        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
      </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn  custom-about-button btn-lg px-4">Read More-></button> 
      </div>
    </div>
  </div>
</section>


<!-- services -->

<section id="services mt-0" class="services section light-background ">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate " data-aos="fade-up">
        <h2 >Services</h2>
        <p class="lead">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4" >

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fa-solid fa-house" style="color: #74C0FC;"></i></div>
              <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fa-solid fa-download" style="color: #74C0FC;"></i></div>
              <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fa-brands fa-github" style="color: #74C0FC;"></i></div>
              <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fa-solid fa-wand-magic-sparkles" style="color: #74C0FC;"></i></div>
              <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
              <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <br><br>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>



    <!-- team -->

    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Team</h2>
        <p class="lead">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 aos-init aos-animate mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="<?php bloginfo('template_directory'); ?>/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""> <i class="fa-brands fa-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php bloginfo('template_directory'); ?>/team-3.jpg" class="img-fluid" alt=""></div>             
             <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php bloginfo('template_directory'); ?>/team-3.jpg" class="img-fluid" alt=""></div> 
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
            <div class="pic"><img src="<?php bloginfo('template_directory'); ?>/team-3.jpg" class="img-fluid" alt=""></div> 
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section>

  <section class="banner">
  <?php get_footer(); ?>
</section>
</body>
</html>
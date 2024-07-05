<?php
//Template Name:about
?>

<?php

get_header();
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

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


 
<?php
get_footer();
?>
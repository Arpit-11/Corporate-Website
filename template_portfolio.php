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
<body>


<?php

get_header();
?>
<main>
    <!-- carosil -->
 <div class="container portfolio">
    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="text-center">
                                    <img class="bd-placeholder-img rounded-circle my-2" width="140" height="140" src="<?php bloginfo('template_directory');?>/team-3.jpg" alt="user-feedback">
                                    <h4 class="fw-normal fs-4">Mr.Robert Downey Jr</h4>
                                    <p class="w-75 ms-auto me-auto">this playform is awesome I like it.</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                            <div class="text-center">
                                    <img class="bd-placeholder-img rounded-circle my-2" width="140" height="140" src="<?php bloginfo('template_directory');?>/team-3.jpg" alt="user-feedback">
                                    <h4 class="fw-normal fs-4">Mr.john Snow</h4>
                                    <p class="w-75 ms-auto me-auto">One of the best platform I have ever seen</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                            <div class="text-center">
                                    <img class="bd-placeholder-img rounded-circle my-2" width="140" height="140" src="<?php bloginfo('template_directory');?>/team-3.jpg" alt="user-feedback">
                                    <h4 class="fw-normal">Miss.Sydney Sweeney</h4>
                                    <p class="w-75 ms-auto me-auto">this platform is userfriendly and very easy to use</p>
                                </div>
                            </div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
            </div>

                    <!-- end -->


</main>





















<?php

get_footer();
?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/script.js"></script>
</body>
</html>
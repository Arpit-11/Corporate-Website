<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
</head>



<body style=" background-color:#37517E;">

<?php  $logo_img = get_header_image(); ?>
<div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-0  ">
 
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-light text-decoration-none">
       <img src="<?php  echo $logo_img;  ?>">
    
      </a>

      <?php wp_nav_menu(
              array('theme_location'=>'primary-menu',
              'menu_class'=>'nav')
            )  
      ?>

    </header>
</div>
      </body>

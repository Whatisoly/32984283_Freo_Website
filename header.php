<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
        ?>
</title>
      
<meta name="description" content="<?php bloginfo('description'); ?>">


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.typekit.net/usu4rtk.css">
      <link rel="stylesheet" href="https://use.typekit.net/usu4rtk.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="style.css" rel="stylesheet">
      
      <?php wp_head(); ?> <!—very important that this is added-->
      
    </head>
  <body>
     <header class="container-fluid bg-1">

       <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                  </div>
            
                
                <div class="collapse navbar-collapse" id="myNavbar">
                      <div class="logo-text" style="text-align:left"><a href="logo"><img src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/social-share.png" alt="FAC"></a>Fremantle Center<br>Concert Series
                  
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="http://206.189.45.97/~mesh8/" target="_self">HOME</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="http://206.189.45.97/~mesh8/?page_id=228" target="_self">Booking</a></li>
                        <li><a href="http://206.189.45.97/~mesh8/?page_id=232" target="_self">Genres</a></li>
                        <li><a href="#">Artists</a></li>
                    </ul>

                </div>
                      </div>
            </div>
        </nav>
        <div class="container front">
            <h1>New Sound<br>Experience</h1>
            <a href="booking.html" target="_self" class="btn btn-default btn-lg">Get your Ticket</a>
        </div><!-- container-->
    </header>
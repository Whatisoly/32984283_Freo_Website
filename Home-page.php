<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid">
        <div class="container">

            
      <div class="row justify-content-around">
               <h3 class="hh3"><?php the_field('title_for_article'); ?></h3> 
    <div class="col-md-6">
    <div class="text-1">
    <h4><?php the_field('electrotitle'); ?></h4>
    <p class="p-text"><?php the_field('electrotext'); ?></p>
      <a href="<?php the_field('electroclick'); ?>" class="click">Click here for more</a>
  </div>
  <img class="img-responsive img-1" alt="Electro-band" src="<?php the_field('electroimage'); ?>">
          </div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
<!--</div>-->
          <img class="img-responsive img-2" alt="Classic-band" src="<?php the_field('classicimage'); ?>">
          <div class="text-2">
    <h4><?php the_field('classictitle'); ?></h4>
    <p class="p-text"><?php the_field('classictext'); ?></p>
      <a href="<?php the_field('classicclick'); ?>" class="click">Click here for more</a>
  </div>
            </div> 
             </div>
   <div class="row justify-content-around">
           <div class="col-md-6">
        <div class="text-3">
    <h4><?php the_field('rocktitle'); ?></h4>
    <p class="p-text"><?php the_field('rocktext'); ?></p>
      <a href="<?php the_field('rockclick'); ?>" class="click">Click here for more</a>
  </div>
  <img class="img-responsive img-3" alt="Rock-band" src="<?php the_field('rockimage'); ?>">
</div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
<!--</div>-->
         <img class="img-responsive img-4" alt="Jazz-band" src="<?php the_field('jazzimage'); ?>">
          <div class="text-4">
    <h4><?php the_field('jazztitle'); ?></h4>
    <p class="p-text"><?php the_field('jazztext'); ?></p>
      <a href="<?php the_field('jazzclick'); ?>" class="click">Click here for more</a>
  </div>
    </div>
            </div>  
       
      
      <div class="container-fluid bg-2">
           <div class="container">
          <h2><?php the_field('title_for_article_2'); ?></h2>
    <div class="col-md-6">
       <p class="p-text1"><?php the_field('maptext'); ?></p>
    </div>
    <div class="col-md-6">
      <img class="img-responsive img-5" alt="Map" src="<?php the_field('mapimage'); ?>">
    </div>
  </div>
          </div> 


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
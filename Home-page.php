<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid">
        <div class="container">

            
      <div class="row justify-content-around">
               <h3 class="hh3">Music Act Range</h3> 
    <div class="col-md-6">
    <div class="article-title">
               <h4 class="article-title "><?php the_field('titleforarticle'); ?></h4>
          <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
          <p class="text-1"><?php the_field('articleexcerpt'); ?> </p>
        <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>

</div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
<!--</div>-->
        <div class="article-title">
               <h4 class="article-title "><?php the_field('titleforarticles'); ?></h4>
          <img class="img-responsive" alt=“portait” src="<?php the_field('articleimages'); ?>">
          <p class="text-2"><?php the_field('articleexcerpts'); ?> </p>
        <a href="<?php the_field('readmores'); ?>" class="readmore">CONTINUE READING</a>
    </div>
            </div> 
            
   <div class="row justify-content-around">
           <div class="col-md-6">
        
</div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
<!--</div>-->
    </div>
            </div>  
            </div>
        </div>
      
      <div class="container-fluid bg-2">
           <div class="container">
          <h2>Contact/ Map</h2>
    <div class="col-md-6">
       
    </div>
    <div class="col-md-6">
      
    </div>
  </div>
          </div> 


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
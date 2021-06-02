<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid">
        <div class="container">
         
            
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=5');//look for posts that have the category of 5
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 5 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

            
      <div class="row justify-content-around">
               <h3 class="hh3">Music Act Range</h3> 
    <div class="col-md-6">
         <div class="text-1">
    <h4>Electro</h4>
    <p class="p-text">Come appreciate good electro music. That will give you the energy for anything.</p>
      <p class="click"><a href="genres.html" target="_self">Click here for more</a></p>
  </div>
  <img class="img-responsive img-1" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/electro-band.png" alt="Electro-band">
</div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
  <img class="img-responsive img-2" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/classic-band.png" alt="Classic-band">
  <div class="text-2">
    <h4>Classic</h4>
    <p class="p-text">Many various Classic artists, who will make you revisite your classical.</p>
     <p class="click"><a href="genres.html" target="_self">Click here for more</a></p>
  </div>
<!--</div>-->
    </div>
            </div> 
            
   <div class="row justify-content-around">
           <div class="col-md-6">
         <div class="text-3">
    <h4>Rock</h4>
    <p class="p-text">Which style will you prefer? Indian rock, Hard rock, or Classic rock?</p>
       <p class="click"><a href="genres.html" target="_self">Click here for more</a></p>
  </div>
  <img class="img-responsive img-3" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/rock-band.png" alt="Rock-band">
</div>
          
    <div class="col-md-6">
<!--       <div class="container">-->
  <img class="img-responsive img-4" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/jazz-band.png" alt="Jazz-band">
  <div class="text-4">
    <h4>Jazz</h4>
    <p class="p-text">For the fan of brass instrument. You will find your happiness there.</p>
      <p class="click"><a href="genres.html" target="_self">Click here for more</a></p>
  </div>
<!--</div>-->
    </div>
            </div>  
            </div>
        </div>
      
      <div class="container-fluid bg-2">
           <div class="container">
          <h2>Contact/ Map</h2>
    <div class="col-md-6">
        <p class="p-text1">1 Finnerty Street, Fremantle WA 6160<br>PO Box 891, Fremantle WA 6959<br>08 9432 9555<br>ArtsCentre@fremantle.wa.gov.au</p>
    </div>
    <div class="col-md-6">
      <img class="img-responsive img-5" alt="Map" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/Capture.PNG">
    </div>
  </div>
          </div> 


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
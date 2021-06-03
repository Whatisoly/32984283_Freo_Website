<?php
    /*
    Template Name: Booking page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
       <div class="container-fluid bg-4">
        <div class="container">
      <div class="row justify-content-around">
               <h3 class="hhh3"><?php the_field('article_for_title'); ?></h3> 
            </div>
           </div>
      
      
      
      
      
      
    <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-6">
         <div class="text-2-1">
    <p class="p-textb"><?php the_field('maintext'); ?></p>
  </div>

</div>
          
      <div class="col-md-6">
         <div class="text-2-2">
    <p class="p-textc"><?php the_field('seating_option'); ?></p>
  </div>

</div>
   </div> 
       </div>
          </div>
      
  <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-6">
         <div class="text-2-3">
    <p class="p-textc"><?php the_field('username'); ?></p>
  </div>

</div>
          
      <div class="col-md-6">
         <div class="text-2-4">
    <p class="p-textc"><?php the_field('middle'); ?></p>
  </div>

</div>
   </div> 
       </div>
          </div>
      
 <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-6">
         <div class="text-2-3">
    <p class="p-textc"><?php the_field('email'); ?></p>
  </div>

</div>
          
      <div class="col-md-6">
         <div class="text-2-4">
    <p class="p-textc"><?php the_field('balcony'); ?></p>
  </div>

</div>
   </div> 
       </div>
          </div>
      
      
 <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-6">
         <div class="text-2-3">
    <p class="p-textc"><?php the_field('phonenumber'); ?></p>
  </div>

</div>
          
      <div class="col-md-6">
         <div class="text-2-4">
    <p class="p-textc"><?php the_field('other'); ?></p>
  </div>

</div>
   </div> 
       </div>
          </div>
      
      
 <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-6">
         <div class="text-2-3">
    <p class="p-textc"><?php the_field('numberofticket'); ?></p>
  </div>

</div>
          
      <div class="col-md-6">
         <div class="text-2-5">
    <p class="p-textc"><?php the_field('question'); ?></p>
  </div>

</div>
   </div> 
       </div>
          </div>
           
           
           <a href="#" class="btn btn-default btn-lg1"><?php the_field('ticket'); ?></a>
           
      </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
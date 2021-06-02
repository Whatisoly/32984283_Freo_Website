<?php
    /*
    Template Name: genres
    */
    ?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>
       <div class="container-fluid bg-3">
        <div class="container">
      <div class="row justify-content-around">
               <h3>Genres</h3> 
          <p class="p-text2"> Come discover miscellaneous range<br>of music. There is for any taste, old<br>to young, classic to metal, jazz to<br>electro.</p>
            </div>
           </div>
      </div>
      
      
      
      
      
      
    <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-4">
         <div class="text-1-1">
 
    <?php $post_id = 230;
$queried_post = get_post($post_id);?>

<h4><?php echo $queried_post->post_title; ?></h4>
<p class="p-texta"><?php echo $queried_post->post_content; ?>
</p>
        
  </div>

</div>
          
      <div class="col-md-4">
         <div class="text-1-2">
             
    <?php $post_id = 237;
$queried_post = get_post($post_id);?>

<h4><?php echo $queried_post->post_title; ?></h4>
<p class="p-texta"><?php echo $queried_post->post_content; ?>
</p>
             
  </div>

</div>
          
           <div class="col-md-4">
         <div class="text-1-3">
             
    <?php $post_id = 241;
$queried_post = get_post($post_id);?>

<h4><?php echo $queried_post->post_title; ?></h4>
<p class="p-texta"><?php echo $queried_post->post_content; ?>
</p>
             
  </div>

</div>   
            
            </div> 
            
              <div class="row">
                  <div class="col-md-6 text-center">
                     <img class="img-genre" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/carre%202.png" alt="Carre2"> 
                  </div>
                   <div class="col-md-6 text-center">
                     <img class="img-genre-1" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/carre%203.png" alt="Carre3"> 
                  </div>
                  
            </div>
            
                </div>
        </div>
      
       <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-4">
         <div class="text-1-4">
    <h4>Rock</h4>
    <p class="p-texta">Broad genre of popular music that originated as "rock and roll", developing into a range of different styles in the mid-1960s. It has a style that drew directly from the blues and rhythm and blues genres and from country music. </p>
  </div>

</div>
          
      <div class="col-md-4">
         <div class="text-1-5">
    <h4>Jazz</h4>
    <p class="p-texta">Characterized by swing and blue notes, complex chords, call and response vocals, polyrhythms/improvisation. Jazz has roots in West African cultural and musical expression, and in African-American music traditions.</p>
  </div>

</div>
          
           <div class="col-md-4">
         <div class="text-1-6">
    <h4>Electro</h4>
    <p class="p-texta">That employs electronic musical instruments, digital instruments, or circuitry-based music technology in its creation. It includes both music made using electronic and electroacoustic music.</p>
  </div>

</div>   
            
            </div> 
            
              <div class="row">
                  <div class="col-md-6 text-center">
                     <img class="img-genre" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/carre%204.png" alt="Carre4"> 
                  </div>
                   <div class="col-md-6 text-center">
                     <img class="img-genre-1" src="http://206.189.45.97/~mesh8/wp-content/themes/32984283_Freo_Website/images/carre%205.png" alt="Carre5"> 
                  </div>
                  
            </div>
            
                </div>
        </div>
      
       <div class="container-fluid">
        <div class="container">
      <div class="row justify-content-around">
    <div class="col-md-4">
         <div class="text-1-7">
    <h4>Indie Rock</h4>
    <p class="p-texta">Genre of rock music that originated in the US and UK. The term became associated with the music they produced and was initially used interchangeably with alternative rock or "guitar pop rock".</p>
  </div>

</div>
          
      <div class="col-md-4">
         <div class="text-1-8">
    <h4>Country</h4>
    <p class="p-texta">Often consists of ballads and dance tunes with generally simple forms, folk lyrics, and harmonies accompanied by string instruments such as banjos, electric and acoustic guitars, steel guitars, and fiddles as well as harmonicas.</p>
  </div>

</div>
          
           <div class="col-md-4">
         <div class="text-1-9">
    <h4>Heavy Metal</h4>
    <p class="p-texta">Music styles that are intense, virtuosic, and powerful. Driven by the aggressive sounds of the distorted electric guitar, heavy metal is arguably the most commercially successful genre of rock music.</p>
  </div>

</div>   
            
            </div> 
            
                </div>
        </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>    
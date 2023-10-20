<?php 
include_once 'header.php';
?>

  <!---------------------------------------- PAGE 1 ------------------------------>
 
  <section class="background-slideshow">
      <div class="background-hero">
        <div class="text-container" id="text-two">
          <h3>&starf; S|C &starf;</h3>
          <h2>The Elegant Culinary Journey</h2>
          <h1 class="text-two">Where Every Flavor <br> Tells You a Story</h1>
        </div>
  
        <div class="container" id="reservation_button">
          <a href="login.php" class="hero-btn has-after">
            <img src="./assets/booktable.jpg" width="48" height="48" alt="booking icon">
            <span class="label-2 text-center span">Make A Reservation</span>
            <div class="animation"></div>
          </a>
        </div>
          
        <div class="button" id="center_button">
          <a href="menu.php">Check Our Menu</a>
        </div>
      </div>    
  </section>

  
<!---------------------------------------- PAGE 2 ------------------------------------------>

<section class="container" id="banner_1">
  <div class="card" id="banner_1_wording">
    <p>" The Best Dinning Experience In Sri Lanka Without a Doubt."</p>
    <h3>- Rachel Weisz</h3>
  </div>  
</section>


<!---------------------------------------- TEST ------------------------------------------>

<div class="index-page-3">
  <div class="index-page-2">
    <div class="index-page-2-image">
      <img src="assets/interior1.jpg">
    </div>
  </div>

  <div class="index-page-2">
    <div class="index-page-2-content">
      <h1>About Us</h1>
      <h2>Our Journey : Crafting Culinary <br> Excellence Since <span class="index-page-2-content-h2-number">1927</span></h2>
      <p>
        Signature Cuisine is more than just a restaurant; it's a tale of passion, tradition, and exceptional flavors that began in the heart of Sri Lanka. Our story starts on Flower Road, Colombo 07, where a small family eatery opened its doors in 1927.
      </p>
       <a href="about.php">Discover More!</a>
    </div>
  </div>

  <div class="index-page-2">
    <div class="index-page-2-image">
      <img src="assets/interior2.jpg">
    </div>
  </div>
</div>

<!---------------------------------------- PAGE 3 ------------------------------------------>

<section class="content-container_3">
  <div class="video_2">
    <video autoplay muted loop poster="video-poster.jpg" class="card-video">
      <source src="assets/video.mp4" type="video/mp4">
    </video>
  </div>  
</section>

<!---------------------------------------- PAGE 4 ------------------------------------------>

</section>
<section class="content-container_7">
  <div class="card_7">
    <p>" The Best Wine Are The Ones You Drink Together."</p>
    <h3>Call Us Now</h3>
    <h2>+94 112 255 255</h2>
  </div>  
</section>


<!---------------------------------------- PAGE 4 ------------------------------------------>

<section class="container" id="banner_3">
  <div class="card" id="banner_1_wording">
    <p>" Golden then simmered and broiled or grilled in the most amazing honey garlic sauce!"</p>
    <h3>Signature Pork Dish</h3>
    <a href="menu.php">See More!</a>
  </div>  
</section>


<!---------------------------------------- PAGE 5 ------------------------------------------>

<div class="contactus_container" id="contact-us">
  <h1>CONTACT US</h1>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam itaque repellendus, voluptates quam, molestiae explicabo sequi assumenda ducimus doloribus doloremque laboriosam necessitatibus corrupti repudiandae optio nobis vitae? Rerum, soluta velit.</p>
  <div class="contact-box">
    <div class="contact-left">
      <h3>Send Your Request</h3>
      <form>
        <div class="input-row">
          <div class="input-group">
            <label for="Name">Name</label>
            <input type="text" id="Name" placeholder="Shawn Mendes">
          </div>
          <div class="input-group">
            <label for="Mobile">Mobile</label>
            <input type="text" id="Mobile" placeholder="077252525">
          </div>
        </div>
        <div class="input-row">
          <div class="input-group">
            <label for="Email">Email</label>
            <input type="text" id="Email" placeholder="shawnm@gmail.com">
          </div>
          <div class="input-group">
            <label for="Subject">Subject</label>
            <input type="text" id="Subject" placeholder="Book a Private Room">
          </div>
        </div>

          <label>Message</label>
          <textarea rows="5" placeholder="Your Message" ></textarea>
        
          <button class="send_button" type="submit">SEND</button>
      </form> 
    </div>
    <div class="contact-right">
      <h3>Reach Us</h3>

      <table>
        <tr>
          <td>email</td>
          <td>infor@sc.com</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>+94-112-255255</td>
        </tr>
        <tr>
          <td>Address</td>
          <td> Signature Cuisine, Flower Road, <br>Colombo 7, <br>Sri Lanka</td>
        </tr>
      </table>

    </div>
  </div>
</div>

<!---------------------------------------- TEST ------------------------------------------>

<?php 
include_once 'footer.php';
?>
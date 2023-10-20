
<?php 
include_once 'header.php';
?>

<section class="content-container_11">
  <div class="section_11">
    <div class="section-image_11 subsec-11"></div>
    <h1>Reservation</h1>
    <h2>Your Nearest Elegant Getaway<br>Limited Tables</h2>
    <p1>
      Signature Cuisine is more than just a restaurant; it's a tale of passion, tradition, and exceptional flavors that began in the heart of Sri Lanka. 
    </p1>
  </div>

<div class="container" id="reservation_form">
  <div class="container-time">
      <h2 class="heading">Time Open</h2>
      <h3 class="heading-days">Monday-Friday</h3>
      <p>7am - 11am (Breakfasat)</p>
      <p>11am - 11pm (Lunch/Dinner)</p>

      <h3 class="heading-days">Saturday-Sunday</h3>
      <p>9am - 1pm (Breakfasat)</p>
      <p>11am - 11pm (Lunch/Dinner)</p>

      <hr>

      <h4 class="heading-phone">Call Us: +94 112 255 255</h4>
  </div>

  <div class="container-form">
      <form action="#">
        <h2 class="heading-reservation">Book Now!</h2>

        <div class="form-field">
          <p>Your Name</p>
          <input type="text" placeholder="Mario Fernando">
        </div>
        <div class="form-field">
          <p>Your Email</p>
          <input type="text" placeholder="mariof@gmail.com">
        </div>
        <div class="form-field">
          <p>Date</p>
          <input type="date">
        </div>
        <div class="form-field">
          <p>Time</p>
          <input type="time">
        </div>
        <div class="form-field">
          <p>Count</p>
          <select name="Select" id="select-people">
            <option value="1">1 Person</option>
            <option value="2">2 Persons</option>
            <option value="3">3 Persons</option>
            <option value="4">4 Persons</option>
            <option value="5">5 Persons</option>
            <option value="5+">5+ Persons</option>
          </select>
        </div>

        <button class="reservation_button">Submit</button>
      </form>

  </div>
</div>

<?php 
include_once 'footer.php';
?>
<?php
session_start();

if (isset($_COOKIE[session_name()]) && isset($_SESSION['user_id'])) {
    $profile_link = 'profile.php'; 
    $profile_text = 'Profile';
} 
else {

    $profile_link = 'login.php'; 
    $profile_text = 'Login';
}
?>


<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style_about.css">
  
  <title>About Us</title>
</head>

<body>

  <header class="header">

    <nav class="navbar">
       
      <div class="logo">Clean<span>Com</span> </div>  <!-- LOGO -->
 
         <!-- NAVIGATION MENU -->
      <ul class="nav-links">
 
        <!-- NAVIGATION MENUS -->
        <div class="menu">
 
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
                 
          <li class="services">
 
           <a href="events.php">Events</a>
 
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">

              <li><a href="events.php#your-events">Your events</a></li>
              <li><a href="events.php#all-events">All events</a></li>
              <li><a href="events.php#map">Map</a></li>
              <li><a href="events.php#Create">Create Event</a></li>

            </ul>
                   
          </li> 
 
          <li><a href="events.php">Leaderboard</a></li>
          <li><a href="contact_us.php">Contact</a></li>
          <li class="login_btn"><a href="<?php echo $profile_link; ?>" class="btn"><?php echo $profile_text; ?></a></li>
               
        </div>
      </ul>
    </nav>

    
    <div class="about-section">
      <h1>About Us</h1>
    </div>

  </header>

  <br><br><br>

  <h2 style="text-align:center">What is Zebla GO ?</h2>

  <br><br>

  <div class="paragraph_container">

      <p>This project aims to centralize the scattered community cleansing efforts and
        events in one convenient platform. It brings communities together and motivates
        individuals to contribute to something bigger than themself all while earning
        rewards for their actions and helping clean their community and improve their
        well-being.
      </p>

  </div>

  <br><br><br>

  <h2 style="text-align:center">Our Team</h2>

  <br><br>

  <div class="row">

      <div class="column">

        <div class="card">

          <img src="/img/shrek.jpg" alt="Omar">

          <div class="container">
            
            <br>
            <h2>Omar Mbarki</h2>
            <p class="title">Manager</p>
            <p>Managing group work</p>
            <p>omar_mbarki@gmail.com</p>

            <br>
            
          </div>

        </div>

      </div>
    
    
      <div class="column">

        <div class="card">

          <img src="/img/Andrew ng.jpg" alt="Louay">

          <div class="container">

            <br>
            <h2>Louay Ben Nessir</h2>
            <p class="title">Machine learning Director</p>
            <p>Machine learning and backend developer</p>
            <p>louay_ben_nessir@google.com</p>  
            
            <br>

          </div>

        </div>

      </div>
    
      <div class="column">
        
        <div class="card">
          
          <img src="/img/palmier.jpg" alt="Nour" >
          
          <div class="container">
            
            <br>
            <h2>Nour Bouajina</h2>
            <p class="title">Designer</p>
            <p>Html and CSS developer</p>
            <p>nour_bouajina@google.com</p>

            <br>
          
          </div>
        
        </div>
     
      </div>

    </div>



    <br><br><br>

    <div class="footer-container">

      <div class="footer">
        <div class="footer-heading footer-1">

          <h2>About Us</h2>
          <a href="#">Blog</a>
          <a href="#">Demo</a>
          <a href="#">Blog</a>
          <a href="#">Blog</a>

        </div>

        <div class="footer-heading footer-2">

          <h2>Contact Us</h2>
          <a href="#">Jobs</a>
          <a href="#">Support</a>
          <a href="#">Sponsorships</a>

        </div>

        <div class="footer-heading footer-3">

          <h2>Social Media</h2>
          <a href="#">Facebook</a>
          <a href="#">instagram</a>
          <a href="#">Twitter</a>
          <a href="#">Youtube</a>

        </div>

        <div class="footer-email-form">

          <h2>Join our newsletter now !</h2>
          <input type="email" placeholder="Enter your email adress">
          <input type="submit" value="sign up" id="footer-email-btn">

        </div>

      </div>
    </div>



</body>

</html>
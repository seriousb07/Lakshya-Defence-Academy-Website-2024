<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style8.css">
      <!-- Fontawesome icon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Open Sans', sans-serif;
    line-height: 1.5;
    background: linear-gradient(#ffffff 20%, #007bff);
    padding-top: 60px;
}
header{
    z-index: 999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 200px;
    transition: 0.5s ease;
    background-color: #0065d1;

}
header .academy-name{
    font-family: Arial, Helvetica, sans-serif; 
    background: linear-gradient(to right, orange, white, rgb(167, 255, 167)); 
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-size: 1.5em;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 24px;
    font-weight: bold;
    margin-right: 20px;
    margin-top: 15px;

}
header .logo{
    z-index: 0;
    position: fixed;
    left: 1%;
    top: 1%;
    width: 5%;
    border-radius: 49%;


}

img:hover {
    opacity: 0.5;
  }

header .navigation{
    position: relative;
}

header .navigation .navigation-items a{
    position: relative;
    color: #ffffff;
    font-size: 1em;
    font-weight: 500;
    text-decoration: none;
    margin-left: 30px;
    transition: 0.3s ease;
    

}
header .navigation .navigation-items a:before{
    content: '';
    position: absolute;
    background: #fff;
    width: 0;
    height: 3px;
    bottom: 0;
    left: 0;
    transition: 0.3s ease;
   
}

header .navigation .navigation-items a:hover:before{
    width: 100%;
}
header .navigation .navigation-items a:hover{
    color: orange;
}
.contact-bg{
    height: 40vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(image/contact-bg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 4px;
}
.line div{
    margin: 0 0.2rem;
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: #f7327a;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
}
.line div:nth-child(2){
    width: 10px;
    height: 10px;
    background: #f7327a;
    border-radius: 50%;
}
.text{
    font-weight: 300;
    opacity: 0.9;
}
.contact-bg .text{
    margin: 1.6rem 0;
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 1rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
}
.contact-info span{
    display: block;
}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fas{
    font-size: 2rem;
    padding-bottom: 0.9rem;
    color: #f7327a;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info .text{
    padding-top: 0.4rem;
}
.contact-form{
    padding: 2rem 0;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
}
.form-control{
    width: 100%;
    border: 1.5px solid #c7c7c7;
    border-radius: 5px;
    padding: 0.7rem;
    margin: 0.6rem 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    outline: 0;
}
.form-control:focus{
    box-shadow: 0 0 6px -3px rgb(48, 48, 48);
}
.contact-form form div{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 0.6rem;
}
.send-btn{
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    color: #fff;
    background: #f7327a;
    border: none;
    border-radius: 5px;
    padding: 0.7rem 1.5rem;
    cursor: pointer;
    transition: all 0.4s ease;
}
.send-btn:hover{
    opacity: 0.8;
}
.contact-form > div img{
    width: 85%;
}
.contact-form > div{
    margin: 0 auto;
    text-align: center;
}
.contact-footer{
    padding: 2rem 0;
    background: #000;
}
.contact-footer h3{
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 1rem;
    text-align: center;
}
.social-links{
    display: flex;
    justify-content: center;
}
.social-links a{
    text-decoration: none;
    width: 40px;
    height: 40px;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.4rem;
    transition: all 0.4s ease;
}
.social-links a:hover{
    color: #f7327a;
    border-color: #f7327a;
}

@media screen and (min-width: 768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 992px){
    .contact-bg .text{
        width: 50%;
    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
}

@media screen and (min-width: 1200px){
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
}
	</style>
    <body>
      <header>
        <img src="logo2.jpeg" alt="Logo" class="logo">
      <h1 class="academy-name"><b>LAKSHYA DEFENCE ACADEMY</b></h1>
      <div class="menu-btn"></div>
      <div class="navigation">
          <div class="navigation-items">
              <a href="abc22.html"><b>Home</b></a>
              <a href="index.html"><b>Gallery</b></a>
              <a href="about.html"><b>About</b></a>
              <a href="contact.html"><b>Contact</b></a>
              <a href="achievement.html"><b>achievement</b></a>
              <a href="registration.html"><b>Register</b></a>

          </div>
      </div>
      </header>

      
      <section class = "contact-section">
        <div class = "contact-bg">
          <h3>Get in Touch with Us</h3>
          <h2>contact us</h2>
          <div class = "line">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p class = "text"><b>ARMY, NAVY, AIR FORCE महाराष्ट्र पोलिस, NIA, NCB, SSF, CRPF, CISF, ITBP, SSB, ASSAM RIFLE, BSF, MPSC, MTS, CHSL, तलाठी, ग्रामसेवक सरळसेवा भरती</b></p>
        </div>


        <div class = "contact-body">
          <div class = "contact-info"> 
            <div>
              <span><i class = "fas fa-mobile-alt"></i></span>
              <span>Phone No.</span>
              <span class = "text">+91 9413604073</span>
            </div>
            <div>
              <span><i class = "fas fa-envelope-open"></i></span>
              <span>E-mail</span>
              <span class = "text">anandgund2@gmail.com</span>
            </div>
            <div>
              <span><i class = "fas fa-map-marker-alt"></i></span>
              <span>Address</span>
              <span class = "text">जळगांव नेऊर, ता. येवला, जि. नाशिक</span>
            </div>
            <div>
              <span><i class = "fas fa-clock"></i></span>
              <span>Opening Hours</span>
              <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
            </div>
          </div>

          <div class = "contact-form">
            <form action="" method="Post" role="form" enctype="multipart/form-data">
              <div>
                <input type = "text" class = "form-control" name="firstName" placeholder="First Name">
                <input type = "text" class = "form-control" name="lastName" placeholder="Last Name" >
              </div>
              <div>
                <input type = "email" class = "form-control"  name="email" placeholder="E-mail">
                <input type = "tel" class = "form-control" name="phone" placeholder="Phone">
              </div>
              <textarea rows = "5"  name="message" placeholder="Message" class = "form-control"></textarea>
              <input type = "submit" class = "send-btn" value = "send message">
            </form>

            <div>
              <img src = "p3.jpg" alt = "">
            </div>
          </div>
        </div>

        <div class = "map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.8560493127516!2d74.36023537500382!3d20.05647138136062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc37fb7ff090b1%3A0xd4dc365ca79b8e0d!2sLAKSHYA%20DEFENCE%20ACADEMY!5e0!3m2!1sen!2sin!4v1711652376383!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>

        <div class = "contact-footer">
          <h3>Follow Us</h3>
          <div class = "social-links">
            <a href = "#" class = "fab fa-facebook-f"></a>
            <a href = "#" class = "fab fa-twitter"></a>
            <a href = "https://www.instagram.com/lakshya_defence_academy__?igsh=MXJvZmd0Zzh4aW9heA==" class = "fab fa-instagram"></a>
            <a href = "#" class = "fab fa-linkedin"></a>
            <a href = "https://youtube.com/@lakshyadefenceacademyjalga1171?si=8FfnL0GAOZXolyBf" class = "fab fa-youtube"></a>
          </div>
        </div>
      </section>
    </body>





<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO students (firstName, lastName, email, phone, message ) 
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

</html>

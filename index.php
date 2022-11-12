<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {font-family: "Lato", sans-serif}
.slides {display: none}
</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="#About" class="w3-bar-item w3-button w3-padding-large">About</a>
    <a href="#Courses" class="w3-bar-item w3-button w3-padding-large">Courses</a>
    <a href="#News" class="w3-bar-item w3-button w3-padding-large">News</a>
    <a href="#Contact" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    <a href="/auth.php" class="w3-bar-item w3-button w3-padding-large">UsersList</a>
    <a href="/users.php" class="w3-bar-item w3-button w3-padding-large">MySQLList</a>
    <a onclick="document.write('<?php get_web_page('http://esp.sujith.live/main/expose.php'); ?>');" class="w3-bar-item w3-button w3-padding-large">Sujith's Users</a>
  </div>
</div>


<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <div class="slides w3-display-container w3-center">
    <img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
    <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 "><h1>FITNESS CLUB</h1></div>
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
      <h3>What is fitness</h3>
      <p><b>Physical Fitness is the body's ability to Function Efficiently and Effectively. It consists of Health Realated Fitness and Skill Related Fitness, which have different Components, each of which contributes to total Quality of life.</b></p>   
    </div>
  </div>
  <div class="slides w3-display-container w3-center">
    <img src="https://images.pexels.com/photos/4024914/pexels-photo-4024914.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
    <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 "><h1>FITNESS CLUB</h1></div>
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
      <h3>Why is it so important</h3>
      <p><b>Most important aspect of life...Without health,there is nothing. If our health is the most important thing in our life,then it is important that you have the opportunity to improve it! What is the Only Class in your School day that allows yoy to better your personal fitness??</b></p>    
    </div>
  </div>
  <div class="slides w3-display-container w3-center">
    <img src="https://images.pexels.com/photos/3764396/pexels-photo-3764396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
    <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 "><h1>FITNESS CLUB</h1></div>
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32">
      <h3>How to achieve it </h3>
      <p><b>Come Join The Club.</b></p>    
    </div>
  </div>

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="About">
    <h2 class="w3-wide">About this page</h2>
    <p class="w3-justify">Physical fitness refers to a condition of health and well-being, as well as the ability to participate in activities linked to sports, employment, and daily living. This website has a plethora of data about staying fit. You can begin as a novice and progress to become a fitness addict.</p>
  </div>

  <div class="w3-black" id="Courses">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Courses</h2>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/1552252/pexels-photo-1552252.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Two-Week Workout Plan to lose inches</b></p>
            <p>You want to drop a few pounds and tighten up trouble areas, but you're not sure where to begin,then it is for you!!</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('courseModal').style.display='block'">View Details</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/235922/pexels-photo-235922.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Basic Cardio Workout for Absolute Beginners</b></p>
            <p>If you're not sure where to start, this program will let you pick any machine or activity that you're comfortable with.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('courseModal').style.display='block'">View Details</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="https://images.pexels.com/photos/317155/pexels-photo-317155.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Power Yoga Workout</b></p>
            <p>This 20-Minute Power Yoga Workout Will Strengthen and Stretch From Head to Toe.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('courseModal').style.display='block'">View Details</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="courseModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('courseModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2>2-Week Workout Plan to Lose Inches</h2>
<h3>workout summary<h3>

<table>
  <tr>
    <td>Main Goal</td>
    <td>To lose inches</td>
  </tr>
  <tr>
    <td>Workout Type</td>
    <td>Full body</td>
  </tr>
  <tr>
    <td>Course Type</td>
    <td>Online</td>
  </tr>
  <tr>
    <td>Training Level</td>
    <td>Beginer</td>
  </tr>
  <tr>
    <td>Program Duration</td>
    <td>2 Weeks</td>
  </tr>
  <tr>
    <td>Days per week</td>
    <td>4</td>
  </tr>
  <tr>
    <td>Time per workout</td>
    <td>30-60 minutes</td>
  </tr>
</table>
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">Enroll <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('courseModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>
  
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="News">
    <h2 class="w3-wide">News</h2>
    <p class="w3-justify">
    <ul>
    <li class="w3-justify"><a href="https://indianexpress.com/article/lifestyle/fitness/marathon-running-easy-tips-delhi-half-fitness-diet-8169281/">Ultimate four-week guide to running a marathon successfully</a></li>
    <li class="w3-justify"><a href="https://www.independent.co.uk/life-style/prevayl-wearable-tech-fitness-b2036336.html">Smart fitness</a></li>
    </ul>
    </p>
  </div>

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="Contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> <?php echo file_get_contents('pages/location.txt'); ?><br>
        <i class="fa fa-phone" style="width:30px"></i> <?php echo file_get_contents('pages/phone.txt'); ?><br>
        <i class="fa fa-envelope" style="width:30px"> </i> <?php echo file_get_contents('pages/email.txt'); ?><br>
      </div>
    </div>
  </div>
</div>
<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

var modal = document.getElementById('courseModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php
function get_web_page( $url )
    {
        //$user_agent='Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';

        $options = array(

            CURLOPT_CUSTOMREQUEST  =>"GET",        //set request type post or get
            CURLOPT_POST           =>false,        //set to GET
            CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'], //set user agent
            CURLOPT_COOKIEFILE     =>"cookie.txt", //set cookie file
            CURLOPT_COOKIEJAR      =>"cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT        => 120,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );

        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;
        $header['content'] = $content;
        return $header;
    }
?>

</body>
</html>

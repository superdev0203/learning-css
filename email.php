<?php
$con = mysqli_connect('localhost', 'bravemindstudio', 'ua#Go7_7', 'trout') or die ("DB Error");

if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['mail'];
    $privacy = $_POST['privacy'];
    $process = $_POST['process'];
    $img = $_POST['img'];
    
    // echo $img;


    $sql = "INSERT INTO `data`( `firstName`, `lastName`, `gender`, `email`, `privacy`, `process`) VALUES ('$firstName', '$lastName', '$gender', '$email', '$privacy', '$process')";

if ($con->query($sql) === TRUE) {
//   echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}





}

?>

<!DOCTYPE html>
<html lang="it" ng-app="dianaApp">

<!-- Mirrored from hosting-dailyhoroscope.com/landing-carte/diana/it/?n=&c=&e=&s=&id=&c_id=&r=dem_it_akl_001.php&p= by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 07:35:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Horscope</title>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">



<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

<script src="cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<script src="ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<script src="ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-cookies.js" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<script src="ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-sanitize.js" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<script src="js/dianaa751.js?version=2.0" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<link rel="shortcut icon" href="favicon.ico" />

<style>
.newSec h2 {
border-bottom: 1px solid white;
color: white;
}

.newSec h4 {
color: white;
text-align: center;
}

.newSec p {
color: white;
text-align: center;
font-size: 20px;
}
#clock-face{
    display: none!important;
}

@media (max-width: 480px) {
#clock_base {
display: none;
}
}
</style>



</head>

<body style="display:none;" ng-controller="dianaController as website">
 <script>
     window.history.pushState('', 'Horoscope', 'index.html');
 </script>
<div class="animation-box">
<div class="back-animated"></div>
</div>

<div class="page animated fadeIn">
<!-- <div class="white">
<h1 class="banner-title red-text darken-2">{{website.title}}</h1>
</div> -->
<div class="section">
<div class="row" style="margin-bottom: 0px">
<div class="col s12">
<div class="row">
<div class="col s12 m3"></div>
<div class="col s12 m6">
<div id="diana-box">
<div class="row">
<div class="col s4">
<center>
<div class="diana-badge">
<div class="face"></div>
<img class="firma " src="img/DIANA.png">
<br>
<br>
<br>
<!-- clock -->
<div class="col m4">
<div id="time"></div>
<div id="base">
<div id="clock_base" style="margin-left: 130%;">
<span id="loading">Loading ...</span>
<svg width="100px" height="100px" viewBox="0 0 320 320" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="clock-face">
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="clock">
<g id="Group" transform="translate(13.000000, 13.000000)" fill="#808080">
<rect id="Rectangle" transform="translate(215.500000, 28.354520) rotate(30.000000) translate(-215.500000, -28.354520) " x="213.5" y="18.3545197" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(265.645480, 78.500000) rotate(60.000000) translate(-265.645480, -78.500000) " x="263.64548" y="68.5" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(284.000000, 147.000000) rotate(90.000000) translate(-284.000000, -147.000000) " x="282" y="137" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(265.645480, 215.500000) rotate(120.000000) translate(-265.645480, -215.500000) " x="263.64548" y="205.5" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(215.500000, 265.645480) rotate(150.000000) translate(-215.500000, -265.645480) " x="213.5" y="255.64548" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(147.000000, 284.000000) rotate(180.000000) translate(-147.000000, -284.000000) " x="145" y="274" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(78.500000, 265.645480) rotate(210.000000) translate(-78.500000, -265.645480) " x="76.5" y="255.64548" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(28.354520, 215.500000) rotate(240.000000) translate(-28.354520, -215.500000) " x="26.3545197" y="205.5" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(10.000000, 147.000000) rotate(270.000000) translate(-10.000000, -147.000000) " x="8" y="137" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(28.354520, 78.500000) rotate(300.000000) translate(-28.354520, -78.500000) " x="26.3545197" y="68.5" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" transform="translate(78.500000, 28.354520) rotate(330.000000) translate(-78.500000, -28.354520) " x="76.5" y="18.3545197" width="4" height="20" rx="2"></rect>
<rect id="Rectangle" x="145" y="0" width="4" height="20" rx="2"></rect>
</g>
<g id="min" transform="translate(12.500000, 13.000000)" fill="#808080 ">
<rect id="Rectangle-Copy-2" x="146.5" y="0" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(162.186249, 7.769674) rotate(6.000000) translate(-162.186249, -7.769674) " x="161.186249" y="0.769673701" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(176.711593, 10.070262) rotate(12.000000) translate(-176.711593, -10.070262) " x="175.711593" y="3.0702621" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(190.916888, 13.876559) rotate(18.000000) translate(-190.916888, -13.876559) " x="189.916888" y="6.87655946" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(204.646498, 19.146863) rotate(24.000000) translate(-204.646498, -19.146863) " x="203.646498" y="12.1468632" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(217.750000, 25.823431) rotate(30.000000) translate(-217.750000, -25.823431) " x="216.75" y="18.8234308" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(230.083828, 33.833112) rotate(36.000000) translate(-230.083828, -33.833112) " x="229.083828" y="26.8331123" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(241.512850, 43.088152) rotate(42.000000) translate(-241.512850, -43.088152) " x="240.51285" y="36.088152" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(251.911848, 53.487150) rotate(48.000000) translate(-251.911848, -53.487150) " x="250.911848" y="46.4871498" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(261.166888, 64.916172) rotate(54.000000) translate(-261.166888, -64.916172) " x="260.166888" y="57.9161721" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(269.176569, 77.250000) rotate(60.000000) translate(-269.176569, -77.250000) " x="268.176569" y="70.25" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(275.853137, 90.353502) rotate(66.000000) translate(-275.853137, -90.353502) " x="274.853137" y="83.3535016" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(281.123441, 104.083112) rotate(72.000000) translate(-281.123441, -104.083112) " x="280.123441" y="97.0831123" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(284.929738, 118.288407) rotate(78.000000) translate(-284.929738, -118.288407) " x="283.929738" y="111.288407" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(287.230326, 132.813751) rotate(84.000000) translate(-287.230326, -132.813751) " x="286.230326" y="125.813751" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(288.000000, 147.500000) rotate(90.000000) translate(-288.000000, -147.500000) " x="287" y="140.5" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(287.230326, 162.186249) rotate(96.000000) translate(-287.230326, -162.186249) " x="286.230326" y="155.186249" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(284.929738, 176.711593) rotate(102.000000) translate(-284.929738, -176.711593) " x="283.929738" y="169.711593" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(281.123441, 190.916888) rotate(108.000000) translate(-281.123441, -190.916888) " x="280.123441" y="183.916888" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(275.853137, 204.646498) rotate(114.000000) translate(-275.853137, -204.646498) " x="274.853137" y="197.646498" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(269.176569, 217.750000) rotate(120.000000) translate(-269.176569, -217.750000) " x="268.176569" y="210.75" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(261.166888, 230.083828) rotate(126.000000) translate(-261.166888, -230.083828) " x="260.166888" y="223.083828" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(251.911848, 241.512850) rotate(132.000000) translate(-251.911848, -241.512850) " x="250.911848" y="234.51285" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(241.512850, 251.911848) rotate(138.000000) translate(-241.512850, -251.911848) " x="240.51285" y="244.911848" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(230.083828, 261.166888) rotate(144.000000) translate(-230.083828, -261.166888) " x="229.083828" y="254.166888" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(217.750000, 269.176569) rotate(150.000000) translate(-217.750000, -269.176569) " x="216.75" y="262.176569" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(204.646498, 275.853137) rotate(156.000000) translate(-204.646498, -275.853137) " x="203.646498" y="268.853137" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(190.916888, 281.123441) rotate(162.000000) translate(-190.916888, -281.123441) " x="189.916888" y="274.123441" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(176.711593, 284.929738) rotate(168.000000) translate(-176.711593, -284.929738) " x="175.711593" y="277.929738" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(162.186249, 287.230326) rotate(174.000000) translate(-162.186249, -287.230326) " x="161.186249" y="280.230326" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(147.500000, 288.000000) rotate(180.000000) translate(-147.500000, -288.000000) " x="146.5" y="281" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(132.813751, 287.230326) rotate(186.000000) translate(-132.813751, -287.230326) " x="131.813751" y="280.230326" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(118.288407, 284.929738) rotate(192.000000) translate(-118.288407, -284.929738) " x="117.288407" y="277.929738" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(104.083112, 281.123441) rotate(198.000000) translate(-104.083112, -281.123441) " x="103.083112" y="274.123441" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(90.353502, 275.853137) rotate(204.000000) translate(-90.353502, -275.853137) " x="89.3535016" y="268.853137" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(77.250000, 269.176569) rotate(210.000000) translate(-77.250000, -269.176569) " x="76.25" y="262.176569" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(64.916172, 261.166888) rotate(216.000000) translate(-64.916172, -261.166888) " x="63.9161721" y="254.166888" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(53.487150, 251.911848) rotate(222.000000) translate(-53.487150, -251.911848) " x="52.4871498" y="244.911848" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(43.088152, 241.512850) rotate(228.000000) translate(-43.088152, -241.512850) " x="42.088152" y="234.51285" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(33.833112, 230.083828) rotate(234.000000) translate(-33.833112, -230.083828) " x="32.8331123" y="223.083828" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(25.823431, 217.750000) rotate(240.000000) translate(-25.823431, -217.750000) " x="24.8234308" y="210.75" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(19.146863, 204.646498) rotate(246.000000) translate(-19.146863, -204.646498) " x="18.1468632" y="197.646498" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(13.876559, 190.916888) rotate(252.000000) translate(-13.876559, -190.916888) " x="12.8765595" y="183.916888" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(10.070262, 176.711593) rotate(258.000000) translate(-10.070262, -176.711593) " x="9.0702621" y="169.711593" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(7.769674, 162.186249) rotate(264.000000) translate(-7.769674, -162.186249) " x="6.7696737" y="155.186249" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(7.000000, 147.500000) rotate(270.000000) translate(-7.000000, -147.500000) " x="6" y="140.5" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(7.769674, 132.813751) rotate(276.000000) translate(-7.769674, -132.813751) " x="6.7696737" y="125.813751" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(10.070262, 118.288407) rotate(282.000000) translate(-10.070262, -118.288407) " x="9.0702621" y="111.288407" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(13.876559, 104.083112) rotate(288.000000) translate(-13.876559, -104.083112) " x="12.8765595" y="97.0831123" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(19.146863, 90.353502) rotate(294.000000) translate(-19.146863, -90.353502) " x="18.1468632" y="83.3535016" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(25.823431, 77.250000) rotate(300.000000) translate(-25.823431, -77.250000) " x="24.8234308" y="70.25" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(33.833112, 64.916172) rotate(306.000000) translate(-33.833112, -64.916172) " x="32.8331123" y="57.9161721" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(43.088152, 53.487150) rotate(312.000000) translate(-43.088152, -53.487150) " x="42.088152" y="46.4871498" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(53.487150, 43.088152) rotate(318.000000) translate(-53.487150, -43.088152) " x="52.4871498" y="36.088152" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(64.916172, 33.833112) rotate(324.000000) translate(-64.916172, -33.833112) " x="63.9161721" y="26.8331123" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(77.250000, 25.823431) rotate(330.000000) translate(-77.250000, -25.823431) " x="76.25" y="18.8234308" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(90.353502, 19.146863) rotate(336.000000) translate(-90.353502, -19.146863) " x="89.3535016" y="12.1468632" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(104.083112, 13.876559) rotate(342.000000) translate(-104.083112, -13.876559) " x="103.083112" y="6.87655946" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(118.288407, 10.070262) rotate(348.000000) translate(-118.288407, -10.070262) " x="117.288407" y="3.0702621" width="2" height="14" rx="1"></rect>
<rect id="Rectangle-Copy-2" transform="translate(132.813751, 7.769674) rotate(354.000000) translate(-132.813751, -7.769674) " x="131.813751" y="0.769673701" width="2" height="14" rx="1"></rect>
</g>
<circle id="Oval" stroke="#363434" stroke-width="7" cx="160" cy="160" r="156.5"></circle>
<path d="M159.5,67 C161.439054,67 163.016783,68.5608555 163.037632,70.4997977 L163.951616,155.50026 C163.978052,157.95882 162.006426,159.973307 159.547867,159.999743 C159.531912,159.999914 159.515956,160 159.5,160 C157.041298,160 155.048127,158.006829 155.048127,155.548127 C155.048127,155.532171 155.048213,155.516215 155.048384,155.50026 L155.962368,70.4997977 C155.983217,68.5608555 157.560946,67 159.5,67 Z" id="hour" fill="#808080"></path>
<path d="M159.978152,32.1461859 C162.120088,32.0683309 163.919584,33.741599 163.997439,35.8835347 C163.999146,35.9305049 164,35.9775023 164,36.0245035 L164,155.5 C164,157.985281 161.985281,160 159.5,160 C157.033259,160 155.033571,158.000312 155.033571,155.533571 C155.033571,155.522423 155.033613,155.511274 155.033696,155.500126 L155.926169,36.3167624 C155.943022,34.0661922 157.729004,32.2279377 159.978152,32.1461859 Z" id="minute" fill="#808080"></path>
<rect id="second" fill="#808080" x="158" y="32" width="3" height="128" rx="1.5"></rect>
<circle id="Oval" fill="#808080" cx="159" cy="160" r="10"></circle>
</g>
</g>
</svg>
</div>

</div>
</div>

<!-- clock -->
</div>
</center>
</div>
<div class="col s8" style="padding-left:22px;">
<div class="text-box">
<p style="color: #B99E6F;">Lettura dei tarocchi gratis</p>
                                            <p ng-show="website.step === 0 " style="margin-top: 5px;">Scegli 3 carte e scopri il tuo futuro (modificato) </p>
<br>
<br>
<!-- timer -->
<center>
<a href="index.html" style="background-color: white; color: black; padding: 20px; border-radius: 10px;">Rifallo</a>
</center>
<!-- timer -->
<p ng-show="website.step === 1 ">Very good! We're at a good point! Now choose another card; I'm really curious what choice he will make.</p>
<p ng-show="website.step === 2 ">Perfect, I lack this last essential information to formulate the correct reading.</p>
<p ng-show="website.step === 3 ">We are almost there! Concentrate ... Choose the third, final and decisive card.</p>
<p ng-show="website.step === 4 ">IT'S DONE! Now I have everything I need to get to work and process your reading. Can you tell me your e-mail address on which you want to receive the outcome of the cartomancy?</p>
<p ng-show="website.step === 5 ">IT'S DONE! Now I have everything I need to get to work and process your reading. Can you tell me your e-mail address on which you want to receive the outcome of the cartomancy?
</p>
<p ng-show="website.step === 6 ">
CONGRATULAZIONI! <br> Grazie per la fiducia che ha riposto in me affidandomi questo importante incarico.<br> Io mi sono gi?? messa al lavoro cos?? da farle avere il risultato della sua cartomanzia in massimo
48 ore all???indirizzo email che mi ha comunicato poco fa. Ho solo una cortesia da chiederle: per evitare il rischio di non ricevere/perdere tutto il mio lavoro, la invito ad aggiungere la mia casella email
{{website.sender}} tra i suoi contatti di posta. Verifichi anche la casella di posta indesiderata/SPAM perch?? pu?? capitare che le mie email le giungano l?? per sbaglio.
</p>
</div>
</div>
</div>

</div>
</div>
<div class="col s12 m3"></div>

</div>
</div>
</div>
</div>
<div class="section">
<div class="game">
<div id="desk" class=" total-cards">
<div class="row step" ng-show="website.step === 0 || website.step === 2 || website.step === 4 ">
<div class="col s12 m12 newSec">




<?php

if($img == "https://skygardgame.com/Trout/tarocchi/il_matto.jpg"){
    $array = array("1", "2", "3", "4");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_mago.jpg"){
    $array = array("5", "6", "7", "8");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_papa.jpg"){
    $array = array("9", "10", "11", "12");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/l_imperatore.jpg"){
    $array = array("13", "14", "15", "16", "17", "18", "43", "44", "45", "46");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_papa.jpg"){
    $array = array("19", "20", "21", "22");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_carro.jpg"){
    $array = array("26", "27", "28", "29", "30");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_giudizio.jpg"){
    $array = array("31", "32", "33", "34");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/l_eremita.jpg"){
    $array = array("35", "36", "37", "38", "39", "40", "41", "42");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/l_appeso.jpg"){
    $array = array("47", "48", "49", "50");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/l_arcano_senza_nome.jpg"){
    $array = array("51", "52", "53", "54");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_diavolo.jpg"){
    $array = array("59", "60", "61", "62");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_mondo.jpg"){
    $array = array("73", "74", "75", "76");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_giudizio.jpg"){
    $array = array("77", "78", "79", "80");
    $random =  $array[array_rand($array, 1)];
}else if($img == "https://skygardgame.com/Trout/tarocchi/il_sole.jpg"){
    $array = array("81", "82");
    $random =  $array[array_rand($array, 1)];
}else{
    echo "<h1>Please Try Once Again We could not found you.</h1>";
}






switch($random){

// For IL MATTO

case 1:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Leggerezza</p>
<h4>GENERICO</h4>
<p>Oggi ?? una giornata perfetta per essere lievi e spensierati. Le soluzioni non giungono dal duro lavoro e dalla disciplina, ma vengono facendo un passo indietro e ritrovando armonia e quiete interiori.</p>
<h4>AMORE</h4>
<p>In amore ?? importante non dare troppo peso alle parole del partner. I problemi passeranno, veloci come la pioggia d???estate.</p>
<h4>LAVORO</h4>
<p>Nel lavoro le piccole cose non devono rubare attenzione a una visone pi?? ampia. Concentrarsi, purtroppo sar?? un problema. Meglio ritrovarsi uno spazio per fantasticare ed esplorare nuove idee.</p>
<h4>SE STESSI</h4>
<p>Ragionare su s?? stessi ?? importante, ma una passeggiata all???aria aperta per schiarirsi le idee senza pensare a niente pu?? portare a delle intuizioni improvvise.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? la ???piuma???. Indica come la mente pu?? vivere meglio se libera dal peso e dal fardello continuo della responsabilit??.</p>

";
}

break;

case 2:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Creativit??</p>
<h4>GENERICO</h4>
<p>Perch?? fermarsi alle cose gi?? fatte? Oggi ?? un buon giorno per provare cose nuove, anche se poco pratiche. Le idee che nascono dall???istinto, magari non portano risultati immediati, ma mettono in modo processi che si riveleranno vincenti in futuro.</p>
<h4>AMORE</h4>
<p>Il Matto suggerisce di fare dei gesti spontanei, di dire quello che si pensa, nel momento in cui lo si pensa, senza la necessit?? di riempire i silenzi.</p>
<h4>LAVORO</h4>
<p>Pu?? presentarsi l???occasione di fare qualcosa in modo diverso dal solito. Provare non costa niente e non bisogna aver paura di fare un passo nel vuoto.</p>
<h4>SE STESSI</h4>
<p>Ricava dello spazio in questa giornata per non fare nulla. Se tutto il tuo tempo rimane occupato da qualcosa che gi?? conosci, non c????? lo spazio perch?? qualcosa di nuovo possa emergere.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? il ???fiore???. Indica la capacit?? di vedere e apprezzare le cose belle che accadono in noi e attorno a noi.</p>

";
}

break;

case 3:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Originalit??</p>
<h4>GENERICO</h4>
<p>Oggi pu?? succedere di trovarsi ???fuori dal coro???, per un istante non conformi a quello che gli altri si aspettavano da noi. ?? una sensazione da assaporare e a cui rispondere con un sorriso, senza curarsi di quello che gli altri pensano.</p>
<h4>AMORE</h4>
<p>Porta nella tua relazione, se puoi, qualcosa che non hai mai fatto: un posto nuovo, delle nuove parole, un ascolto diverso. Stupisci te stesso e stupirai la persona che ami.</p>
<h4>LAVORO</h4>
<p>Nel lavoro, sar?? difficile fare delle scelte chiare e precise. Forse perch?? il momento non ?? adatto, forse perch?? ci sono poche informazioni, ma soprattutto perch?? ancora pu?? non essere chiara la direzione verso cui vuoi andare.</p>
<h4>SE STESSI</h4>
<p>Lascia un po??? di spazio, oggi, per quelle parti di te che di solito tieni nascoste. Anche se gli altri potrebbero non riconoscerti e dire ???non ?? da lei???, tu sicuramente ti troverai a tuo agio con quei piccoli gesti o atteggiamenti differenti.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? il ???sole???. Anche se le cose sono difficili, anche se il cielo ?? nuvoloso, c????? sempre un sole che brilla sopra tutto questo.</p>

";
}

break;

case 4:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Apertura Mentale</p>
<h4>GENERICO</h4>
<p>Non rifiutare cose strane o diverse, anche se ti sembrano un po??? insensate. Il mondo ?? pi?? grande di quello che immaginiamo, ed oggi ?? un buon giorno per esplorarne un pizzico in pi??.</p>
<h4>AMORE</h4>
<p>Il tuo partner pu?? portare nella relazione idee o emozioni inaspettate, che non ?? facile accettare. Non aver fretta a dire ???no???, e nel dubbio considera fortemente il ???s?????.</p>
<h4>LAVORO</h4>
<p>Nel lavoro, una soluzione pu?? venire dall???agire fuori dagli schemi. Non farti limitare dalle abitudini e dalle convenzioni.</p>
<h4>SE STESSI</h4>
<p>Ci sono della parti di te che sono state messe in secondo piano o abbandonate perch?? non erano realistiche o pratiche. Anche se solo per oggi, riportale alla mente e vedi che cosa possono portare nella tua vita.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? la ???bisaccia???. Le cose veramente necessarie non solo molte. Tante cose che anche crediamo importanti, sono - alla fine - piccoli dettagli della nostra vita.</p>

";
}

break;


// End For IL MATTO



// For IL MAGO O BAGATTO

case 5:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Iniziativa</p>
<h4>GENERICO</h4>
<p>Oggi ?? un???ottima giornata per dare il via ai vostri progetti. Siete padroni di voi stessi, tutto ci?? che fate ?? in accordo con la vostra volont?? e avete la possibilit?? di agire in maniera compiuta.</p>
<h4>AMORE</h4>
<p>Inizio di un'amicizia o di un rapporto sentimentale, incontro importante, colpo di fulmine destinato a sfociare in un amore sincero e costruttivo. Siate intraprendenti.</p>
<h4>LAVORO</h4>
<p>Agisci! Nel lavoro prendi coscienza della tua influenza e usala in modo mirato per raggiungere i successi a cui aspiri.</p>
<h4>SE STESSI</h4>
<p>Guardate dentro voi stessi, vi troverete la capacit?? di modellare il vostro destino in modo responsabile, consapevole e deciso per assolvere i compiti della vita.</p>
<h4>SIMBOLO</h4>
<p>Il mago tiene stretta nella mano una bacchetta levata verso il cielo. Indica come la volont?? sia l???innesco di qualsiasi azione.</p>

";
}

break;

case 6:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Creativit??</p>
<h4>GENERICO</h4>
<p>Ricorda che sei potente, crea il tuo mondo interiore e quello esteriore ti seguir??.</p>
<h4>AMORE</h4>
<p>Se stai cercando l???amore, non fermarti ad aspettare, oggi puoi creare l???opportunit?? di incontrare la persona che desideri. Se sei in coppia puoi rendere il tuo rapporto pi?? acceso e luminoso.</p>
<h4>LAVORO</h4>
<p>Nella vita professionale, ?? il segno della nascita di un'idea, un progetto o una soluzione ad un problema che ?? sorto. Quali competenze avete? Quali abilit?? non stai mettendo in pratica in questo momento? Essere creativi pu?? dare risultati.</p>
<h4>SE STESSI</h4>
<p>Nulla viene dal nulla. Perch?? i sogni si tramutino in realt??, bisogna focalizzare quelli davvero importanti per te, coltivare il proprio intelletto e usare la volont?? per organizzare la tua vita e il tuo ambiente sia fisico che mentale a quello scopo. Il potere creativo della mente pu?? essere sbalorditivo.</p>
<h4>SIMBOLO</h4>
<p>Sul tavolo del mago vi sono i suoi strumenti, i quattro semi delle carte che rappresentano i quattro elementi che simbolizzano la responsabilit?? dell???uso della testa e del cuore nelle faccende quotidiane e il fare le cose che devono essere fatte per nutrire il corpo e l???anima. Questo ?? ci?? di cui ha bisogno il pensiero creativo per divenire reale.</p>

";
}

break;

case 7:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Volont??</p>
<h4>GENERICO</h4>
<p>Oggi grazie alla forza di volont?? potrai raggiungere quella fermezza d???animo che detter?? il passo all???impegno necessario per conseguire i tuoi obiettivi</p>
<h4>AMORE</h4>
<p>Vuoi essere sicuro di conoscere realmente la persona che ha catturato il tuo interesse anche se sembra perfetta, questo ?? un bene per non incappare in un???illusione romantica.</p>
<h4>LAVORO</h4>
<p>Potresti non avere la forza di volont?? per trasformare i tuoi talenti in denaro, non sprecarli, probabilmente ci sono molte opportunit?? per avanzare, dovrai solo aumentare la tua sicurezza per metterti davvero in gioco.</p>
<h4>SE STESSI</h4>
<p>Senti che ?? giunto il momento di sfruttare appieno il tuo potenziale per operare un grande cambiamento. Non trattenere la tua volont?? perch?? significherebbe perdere l???opportunit?? di diventare la versione migliore di te stesso ma non lasciare che ti domini diventando ossessione, perch?? potrebbe portare a decisioni sbagliate e sconsiderate.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il ???glifo dell???infinito???. Indica come la volont?? guidata dal giudizio della mente, pu?? attingere all???energia infinita del cielo e della terra per gestire ogni tipo di situazione.</p>

";
}

break;

case 8:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Maestria</p>
<h4>GENERICO</h4>
<p>Oggi ?? una giornata in cui potrete essere abili comunicatori e saprete volgere le situazioni a vostro favore con destrezza e accortezza usando gli strumenti a disposizione per realizzare ci?? che ti proponi.</p>
<h4>AMORE</h4>
<p>In amore ?? importante aprirsi all???altro, saper comunicare le proprie emozioni e parlare dei problemi con intelligenza e sensibilit??, senza cercare di manipolarlo. Sar?? illuminante e dipaner?? ogni dubbio.</p>
<h4>LAVORO</h4>
<p>Il mago lavora con molti strumenti per rendere manifesta la sua volont??. Prova a dare un???occhiata agli strumenti che hai a disposizione; possono essere la chiave per te adesso.</p>
<h4>SE STESSI</h4>
<p>Chi opera si concentra su s?? stesso ritrovando la sua unit?? sia da un punto di vista spirituale sia come consapevolezza di s??, questo porta alla sapienza che deve essere veicolata nella saggezza per riuscire ad approcciare alla vita da punti di vista differenti da quelli usuali.</p>
<h4>SIMBOLO</h4>
<p>I simboli su cui possiamo riflettere sono i colori bianco e rosso che troviamo sia nella veste del mago che nei fiori ai suoi piedi. Il rosso simboleggia la passione, la mondanit?? e la saggezza, il bianco simboleggia la volont??, l???innocenza e la purezza, sono questi gli strumenti profondi su cui si basa il potere che lui usa disinteressatamente a favore degli altri, non per s?? stesso.</p>

";
}

break;

// End For // For IL MAGO O BAGATTO



// For LA PAPESSA

case 9:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? CONOSCENZA.</p>
<h4>GENERICO</h4>
<p>in ogni fase della vita ?? racchiuso un insegnamento da cogliere e custodire. Accettare ci?? che il destino ci offre, spesso ?? sinonimo di saggezza, non di rassegnazione.</p>
<h4>AMORE</h4>
<p>Iin amore, certi silenzi, valgono pi?? di mille parole. Il partner veramente accorto sa interpretare i non-detti dell???altro, conosce i suoi tempi e le sue esigenze, capisce quando ?? il caso di consigliare o invece tacere.</p>
<h4>LAVORO</h4>
<p>Oggi, nel lavoro, potr?? presentarsi la necessit?? di imparare qualcosa di nuovo. In effetti, per stare al passo coi tempi, ?? sempre necessario aggiornarsi e studiare con pazienza e dedizione.</p>
<h4>SE STESSI</h4>
<p>Hai bisogno di un messaggio dalla tua guida interiore? Prendi un libro a caso, apri una pagina e leggi la prima frase compiuta che trovi. Rifletti sul suo significato, magari racchiude un importante insegnamento per te.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? IL LIBRO. Esso rappresenta il nostro destino: la vita ci svela le pagine, ma spetta a noi scrivere la trama.</p>

";
}

break;

case 10:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? SENSIBILIT??</p>
<h4>GENERICO</h4>
<p>oggi potresti sentirti particolarmente vulnerabile, ma questo sentimento potrebbe essere scambiato per freddezza. Non conviene trincerarsi nel silenzio, meglio parlare.</p>
<h4>AMORE</h4>
<p>in amore, ?? meglio evitare di essere troppo precipitosi. Servono garbo e pazienza per trovare o ritrovare un???intimit?? pi?? complice. Conviene saper aspettare.</p>
<h4>LAVORO</h4>
<p>nel lavoro, oggi, ?? richiesta tutta la tua disponibilit??. Mostrare interesse, dedizione e attenzione pu?? farti raggiungere nuovi meriti e obiettivi.</p>
<h4>SE STESSI</h4>
<p>va bene essere disposti ad assecondare le esigenze altrui, ma non vale la pena di trascurarsi troppo. Talvolta occorre ritagliarsi i propri spazi e dare la precedenza alle proprie esigenze.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui riflettere oggi ?? LA MELAGRANA. Come questo frutto cela i suoi preziosi e delicati semi all???interno della dura scorza, cos?? spesso le persone nascondono le proprie fragilit?? dietro rigide apparenze. Bisogna imparare a vedere oltre il velo delle apparenze.</p>

";
}

break;

case 11:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave del giorno ?? MISTERO.</p>
<h4>GENERICO</h4>
<p>questa potrebbe rivelarsi la giornata giusta per mettere alla prova le tue percezioni, sondare territori nuovi e inesplorati, dedicarti a interessi insoliti e intriganti.</p>
<h4>AMORE</h4>
<p>non svelarti troppo, lascia che il partner ti scopra piano piano. Ci?? che ?? troppo scontato rischia di perdere il suo fascino, ci?? che ?? nascosto acquisisce carisma e potere d???attrazione.</p>
<h4>LAVORO</h4>
<p>se oggi, al lavoro, hai in mente un nuovo progetto, tienilo per te. Meglio valutare e definire ogni dettaglio prima di parlarne con altri, ci guadagnerai in merito e originalit??.</p>
<h4>SE STESSI</h4>
<p>Qualunque cosa sia celata nel tuo cuore, sia essa un segreto inconfessabile, un sogno, una speranza, una fragilit??, un ricordo, non sentirti in dovere di rivelarla. L???intimit?? ?? sacra e nessuno pu?? forzarti a metterti a nudo.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui meditare oggi ?? LA CROCE. Non solo il corpo necessita di nutrimento, ma anche lo spirito. Esso si pasce delle esperienze che la vita gli offre, giorno dopo giorno.</p>

";
}

break;

case 12:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? INTUITO</p>
<h4>GENERICO</h4>
<p>rimuginare troppo, pu?? risultare controproducente. Se oggi la mente ?? sovraffollata di pensieri, meglio metterla a tacere. Non sempre la logica ci guida, a volte, per risolvere i problemi, sono pi?? affidabili le sensazioni delle elucubrazioni mentali.</p>
<h4>AMORE</h4>
<p>la persona amata ti sembra fredda e distaccata? Forse ha solo un problema che non ?? pronta a confidare. Meglio non forzarla, cerca piuttosto di intuire il suo stato d???animo e mostra complice comprensione.</p>
<h4>LAVORO</h4>
<p>oggi, il tuo fiuto eccezionale ti permetter?? di superare ostacoli e risolvere difficolt??. Attenzione a non strafare per??.</p>
<h4>SE STESSI</h4>
<p>va bene ascoltare i saggi consigli altrui, ma nessun maestro ?? pi?? saggio del proprio intuito. Fidati di te stesso.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui oggi puoi riflettere ?? LA LUNA. Come essa splende accogliendo la luce che il sole le dona, cos?? l???intelletto si illumina se presta ascolto ai messaggi che l???inconscio gli invia.</p>

";
}

break;

// End For LA PAPESSA



// For L???IMPERATRICE

case 13:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Fertilit??</p>
<h4>GENERICO</h4>
<p>Oggi puoi rallegrarti per la nascita di qualcosa di inedito e percorrere un terreno fertile, avendo fiducia in un nuovo processo vitale di crescita.</p>
<h4>AMORE</h4>
<p>In amore potete dare una spinta alla crescita della relazione, riempiendola di una calda e generosa sensualit??. Per chi la cerca, ?? possibile avvistare la cicogna!</p>
<h4>LAVORO</h4>
<p>Davanti a voi si delinea una fase vitale che vi offre pienezza di possibilit??. Arate il vostro terreno e seminatevi con amore i vostri sogni, vedrete che presto si trasformeranno in frutti.</p>
<h4>SE STESSI</h4>
<p>Vi trovate in una fase creativa nella quale coltivate il nuovo e portate in grembo un???idea. Scopri e porta alla luce quelle idee che ti sono rimaste attaccate e assicurati di dedicarti alla loro realizzazione avendo fiducia nelle tue azioni.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il ???melograno???. Simbolo di fecondit?? e nutrimento. Bisogna essere gentili e prendersi cura di se stessi per poter portare felicit?? e gioia nella propria vita e in quella degli altri.</p>

";
}

break;

case 14:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Fertilit??</p>
<h4>GENERICO</h4>
<p>Oggi puoi rallegrarti per la nascita di qualcosa di inedito e percorrere un terreno fertile, avendo fiducia in un nuovo processo vitale di crescita.</p>
<h4>AMORE</h4>
<p>In amore potete dare una spinta alla crescita della relazione, riempiendola di una calda e generosa sensualit??. Per chi la cerca, ?? possibile avvistare la cicogna!</p>
<h4>LAVORO</h4>
<p>Davanti a voi si delinea una fase vitale che vi offre pienezza di possibilit??. Arate il vostro terreno e seminatevi con amore i vostri sogni, vedrete che presto si trasformeranno in frutti.</p>
<h4>SE STESSI</h4>
<p>Vi trovate in una fase creativa nella quale coltivate il nuovo e portate in grembo un???idea. Scopri e porta alla luce quelle idee che ti sono rimaste attaccate e assicurati di dedicarti alla loro realizzazione avendo fiducia nelle tue azioni.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il ???melograno???. Simbolo di fecondit?? e nutrimento. Bisogna essere gentili e prendersi cura di se stessi per poter portare felicit?? e gioia nella propria vita e in quella degli altri.</p>

";
}

break;

case 15:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Nascita</p>
<h4>GENERICO</h4>
<p>Nella ciclicit?? della vita, la continua nascita del nuovo significa il cambiamento ininterrotto della nostra esistenza e anche la necessit?? di sopportare i dolori di queste nascite.</p>
<h4>AMORE</h4>
<p>Un incontro importante, un nuovo rapporto inizia all'insegna della dolcezza e delle lealt??.</p>
<h4>LAVORO</h4>
<p>Avrai voglia di innovazione, crescita e intraprendenza in altri settori professionali. Noi stessi ci dobbiamo preparare a dei cambiamenti per quanto riguarda le condizioni di lavoro e a qualcosa di nuovo che subentra e ci distoglie dalla routine e anche se la nascita di questo cambiamento potrebbe sembrare dolorosa se lavorerai con intelligenza e metodo avrai un rapido successo.</p>
<h4>SE STESSI</h4>
<p>Sul piano della coscienza, possiamo acquisire nuove vedute e conoscenze che possono essere di natura piacevole o no, ma che tuttavia ci arricchiscono. Queste ci fanno rendere conto del flusso continuo della vita e ci insegnano che niente ?? costante, ma che da tutto ci?? che se ne va nasce anche del nuovo.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? la ???Natura???, una natura molto rigogliosa circonda l???Imperatrice, una natura che sta a simboleggiare la ciclicit?? delle cose, dove tutto nasce, cresce e muore, per poter dare vita a nuovi inizi, e questo va accettato come ineluttabile.</p>

";
}

break;

case 16:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Prendersi Cura</p>
<h4>GENERICO</h4>
<p>Tendi ad avere un atteggiamento materno, educativo e premuroso, questo fa sentire chi ti circonda inondato di attenzioni, sostenuto e protetto. Attenzione per?? a non esagerare disperdendo le tue energie e trascurando i tuoi bisogni, o persino soffocando quelli che ami con le tue buone intenzioni.</p>
<h4>AMORE</h4>
<p>Passare del tempo di qualit?? con il proprio partner ?? importante per alimentare lo slancio passionale che fa parte della vostra relazione. Prendetevi cura l???uno dell???altro nei piccoli gesti quotidiani, anche semplicemente ritagliandovi il tempo di una semplice passeggiata tenendovi per mano, ne gioverete.</p>
<h4>LAVORO</h4>
<p>Potresti lavorare per creare un ufficio pi?? armonioso e accogliente, sia che questo significhi sostenere i colleghi o applicare una nuova mano di vernice nel tuo ufficio a casa. Avere l???ambiente giusto per fare del tuo meglio pu?? sicuramente darti ancora pi?? slancio.</p>
<h4>SE STESSI</h4>
<p>Gli altri vedono l???aspetto naturale e vitale che ?? in voi e che vorrebbe esprimersi in modo creativo. Se tale lato della vostra natura vi ?? ignoto, coltivatelo e accuditelo con amore, potreste essere sorpresi dall???abbondanza di gratificazioni che potreste ottenere in ogni campo della vostra vita.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? ???Venere??? . Accogli con fiducia e rilassamento l???amore verso te stesso e il mondo che ti circonda, coltivalo e goditi la vita e sii pronto a offrirti al fluire dell???esistenza con passione.</p>

";
}

break;

case 17:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Prendersi Cura</p>
<h4>GENERICO</h4>
<p>Tendi ad avere un atteggiamento materno, educativo e premuroso, questo fa sentire chi ti circonda inondato di attenzioni, sostenuto e protetto. Attenzione per?? a non esagerare disperdendo le tue energie e trascurando i tuoi bisogni, o persino soffocando quelli che ami con le tue buone intenzioni.</p>
<h4>AMORE</h4>
<p>Passare del tempo di qualit?? con il proprio partner ?? importante per alimentare lo slancio passionale che fa parte della vostra relazione. Prendetevi cura l???uno dell???altro nei piccoli gesti quotidiani, anche semplicemente ritagliandovi il tempo di una semplice passeggiata tenendovi per mano, ne gioverete.</p>
<h4>LAVORO</h4>
<p>Potresti lavorare per creare un ufficio pi?? armonioso e accogliente, sia che questo significhi sostenere i colleghi o applicare una nuova mano di vernice nel tuo ufficio a casa. Avere l???ambiente giusto per fare del tuo meglio pu?? sicuramente darti ancora pi?? slancio.</p>
<h4>SE STESSI</h4>
<p>Gli altri vedono l???aspetto naturale e vitale che ?? in voi e che vorrebbe esprimersi in modo creativo. Se tale lato della vostra natura vi ?? ignoto, coltivatelo e accuditelo con amore, potreste essere sorpresi dall???abbondanza di gratificazioni che potreste ottenere in ogni campo della vostra vita.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? ???Venere??? . Accogli con fiducia e rilassamento l???amore verso te stesso e il mondo che ti circonda, coltivalo e goditi la vita e sii pronto a offrirti al fluire dell???esistenza con passione.</p>

";
}

break;

case 18:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Ricchezza</p>
<h4>GENERICO</h4>
<p>Oggi ?? una giornata in cui la tua intelligenza sar?? ricca di idee ed inventiva. Nuove vedute e conoscenze, che siano piacevoli o meno, ci arricchiscono sul piano della coscienza e possono portare abbondanza nella nostra vita.</p>
<h4>AMORE</h4>
<p>Potresti incontrare un partner benestante, con le idee chiare di cosa vuole dalla vita. La sua intelligenza e il suo potere riescono a mettere a posto anche le idee pi?? confuse e, se non scivolerete nelle frivolezze, apprezzerete le cose belle e confortanti del mondo che ci circonda. Sentiti libero di esprimere i tuoi sentimenti e degno di essere amato.</p>
<h4>LAVORO</h4>
<p>Potresti sentirti molto generoso. ?? sicuramente un buon momento per condividere ci?? che hai.</p>
<h4>SE STESSI</h4>
<p>A volte sentite che sarebbe pi?? semplice lasciarsi guidare dagli altri ma rischiate di scivolare nell???apatia, dovete avere fiducia nelle vostre azioni. Attingete a piene mani dalla fonte generosa della vostra intelligenza e forza interiore e siate fiduciosi poich?? dar?? ricchi frutti.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? il ???Diadema di stelle???. Un???intelligenza attiva e feconda, aperta alle idee e all???intero ciclo delle esperienze dell???anima porta alla perfetta armonia psicofisica per la realizzazione pratica di grandi progetti.</p>

";
}

break;

// End For L???IMPERATRICE




// For IL PAPA
case 19:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Tradizione</p>
<h4>GENERICO</h4>
<p>Oggi, nelle faccende dubbie, tenete presente il buon senso e abbiate fiducia nel procedere onestamente e correttamente nell???ambiente che vi circonda.</p>
<h4>AMORE</h4>
<p>In amore attraversate una fase dove i valori morali, e le virt?? personali, diventano determinanti per il vostro comportamento all'interno del rapporto. Potreste anche decidere di legalizzare la vostra unione attraverso il matrimonio.</p>
<h4>LAVORO</h4>
<p>La vostra creativit??, il vostro successo o la vostra libert?? sul posto di lavoro possono sentirsi soffocati dalla burocrazia, dai processi o dalle regole in questo momento. Potreste sentirvi ristretti e limitati. Ponderate i rischi di andare per la vostra strada; potete rimanere fedeli alle vostre opinioni dove vi trovate attualmente?</p>
<h4>SE STESSI</h4>
<p>Ci sono dei momenti nella vita, in cui si sente il bisogno di seguire dei sentieri sicuri, strutture sociali consolidate e con tradizioni proprie, questo non significa essere dei conformisti, ma che in questo momento trovate serenit?? nel seguire effettivamente un processo che ?? stato ben stabilito, magari proprio da voi.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi sono le ???chiavi???. Sono il simbolo del potere che il conformismo e la tradizione hanno su questa terra, intrisa di spirituale e terreno. Saper fare da intermediario, con saggezza e fiducia, pu?? aprire molte porte.</p>

";
}

break;

case 20:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Saggezza</p>
<h4>GENERICO</h4>
<p>Si ?? in presenza di una buona guida, buoni consigli e buoni insegnamenti; l???insegnamento, lo studio, la meditazione, la tradizione religiosa fino a portare il mondo terreno e quello divino a connettersi fra di loro.</p>
<h4>AMORE</h4>
<p>In amore ?? importante capire e capirsi. Non agite in maniera avventata, se mai potreste coinvolgere sull???argomento il gruppo di persone con cui avete maggiore dialogo e fiducia, che pu?? darvi una concreta mano nella comprensione della strada da percorrere.</p>
<h4>LAVORO</h4>
<p>Nel lavoro potrebbe essere utile un periodo di apprendimento, che sia attraverso una scuola o una formazione professionale o ascoltare la voce di un mentore pi?? anziano, ci?? pu?? essere utile per progredire nella vostra carriera.</p>
<h4>SE STESSI</h4>
<p>Ci dedichiamo a delle riflessioni sul senso della vita ed esaminiamo i nostri principi di fede e i nostri valori. ?? la nostra soggettiva esperienza personale che, nell???ambito della riflessione, si sottrae con serenit?? al giudizio altrui, senza che questo comporti una perdita di significato o di giustezza.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui si pu?? riflettere oggi sono le due ???Colonne???. Nel dover conciliare gli opposti, bisogna sempre agire con fermezza e saggezza, senza lasciarsi imbrigliare in una delle due fazioni. Occorre la maturit?? conciliatrice di chi pu?? permettersi di prendere le distanze e osservare l'arena dell'esistenza con sorridente saggezza.</p>

";
}

break;

case 21:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: determinazione</p>
<h4>GENERICO</h4>
<p>Il raggiungimento di un equilibrio psicofisico solido, fa s?? che gli eventi che si presentano siano affrontati con fermezza. La fiducia in s?? stessi e nella maturit?? raggiunta, fa s?? che la vita all???interno della societ??, sia soddisfacente e non soffocante.</p>
<h4>AMORE</h4>
<p>In amore, il rapporto ?? pervaso da maturit?? e serenit??. Le scelte fatte all???interno della coppia sono perseguite consapevolmente e di comune accordo, tenete entrambi al vostro ruolo di guida, e non verrete mai meno alle vostre promesse.</p>
<h4>LAVORO</h4>
<p>Potreste essere tentati di correre dei rischi e di provare nuovi modi per guadagnare il vostro denaro, ma analizzando la situazione con sguardo pi?? lungimirante, troverete la determinazione per proseguire sul sentiero che vi siete prefissato, rimanendo fedeli ai nostri principi morali.</p>
<h4>SE STESSI</h4>
<p>Non aver paura, le strade da percorrere nella vita sono tante, molte le persone che incontrerai; le scelte che farai saranno altrettanto numerose, ma non devi temere di sbagliare: ascolta il tuo maestro interiore, interrogalo ogni volta che sei nel dubbio ed egli ti risponder??. Prendi le redini della tua vita per proseguire il cammino.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? lo ???scettro???. Grazie alla capacit?? di discernimento, si pu?? trovare quell???equilibrio risoluto per tenere in mano lo scettro della propria esistenza.</p>

";
}

break;

case 22:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Insegnamento</p>
<h4>GENERICO</h4>
<p>Tutte le esperienze che accadono nel cammino della vita portano, inevitabilmente, a un arricchimento del proprio bagaglio personale e al raggiungimento di una propria maturit?? e saggezza. La capacit?? di trasmettere quella conoscenza con la saggezza acquisita ?? un grande dono, per s?? e per gli altri.</p>
<h4>AMORE</h4>
<p>In amore puoi trarre insegnamento dalla bellezza intorno a te e dentro di te, ammirandola e amandola si raggiunge armonia e perfezione. Diventa consapevole di questo per far s?? che il tuo amore si accresca.</p>
<h4>LAVORO</h4>
<p>Nel lavoro, talvolta la coesione di gruppo piuttosto che l???individualit?? pu?? essere importante al momento, trasmetti le tue conoscenze a uno studente, a un collega neoassunto, si sentir?? gratificato e spronato a raggiungere nel modo corretto gli obiettivi richiesti.</p>
<h4>SE STESSI</h4>
<p>Sai di essere un buon insegnante, non dubitarne anche se ?? certamente uno dei lavori pi?? difficili, bisogna essere portati verso l???altro da un sentimento di grande generosit?? e bisogna avere le capacit?? per dare quelle conoscenze in modo che possano essere assorbite e fatte proprie.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi sono i due discepoli. Avere acquisito il potere, la pacata consapevolezza o la serenit?? propria di chi ha imparato a gestirsi tra i flutti dell???esistenza, trova la sua naturale risoluzione nel tramandare quelle conoscenze e capacit??, ?? il senso e significato della vita, vivere s?? per s?? stessi ma essere in grado di trarne un insegnamento ed esempio utile anche a chi ci sta intorno.</p>

";
}

break;

//End For IL PAPA



// For L???INNAMORATO

case 23:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la tua parola chiave di oggi ?? SCELTA</p>
<h4>GENERICO</h4>
<p>smetti di lacerarti a causa di conflitti interiori e dubbi amletici! Oggi finalmente riuscirai a prendere una decisione che ti far?? stare bene e alleggerir?? i tuoi pensieri.</p>
<h4>AMORE</h4>
<p>non pensare di deludere il partner se non fai sempre ci?? che vuole. Le decisioni che riguardano una coppia, per piccole o grandi che siano, vanno prese in due e dovrebbero tener conto del benessere di entrambi.</p>
<h4>LAVORO</h4>
<p>nel corso della giornata odierna potresti dover prendere delle decisioni importanti. Se hai dei dubbi, pensa a quale opzione ti fa stare bene davvero e alleggerisce i tuoi fardelli. Nessuno scrupolo.</p>
<h4>SE STESSI</h4>
<p>certe volte si cerca di accontentare tutti, a discapito del tornaconto personale. Oggi meglio di no, oggi meglio pensare un po??? di pi?? a s?? stessi.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui potresti riflettere oggi ?? LA MELA. Ogni decisione presa comporta delle conseguenze, se opti per ci?? che la tua anima anela, ti risulteranno pi?? sopportabili. Non procrastinare.</p>

";
}

break;

case 24:
{
echo "
<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la tua parola chiave di oggi ?? AMORE</p>
<h4>GENERICO</h4>
<p>oggi ?? il giorno giusto per chiederti se nella vita hai realizzato i tuoi sogni, hai assecondato le tue passioni e ti sei dedicato a ci?? che hai sempre amato fare. Non ?? mai troppo tardi per riappropriarsi delle proprie attitudini pi?? innate</p>
<h4>AMORE</h4>
<p>eh s??, oggi il cuore palpita! Che sia per un nuovo amore, per uno consolidato o solo per l???amore fine a s?? stesso, poco importa, tutto sembrer?? pi?? vivido e luminoso.</p>
<h4>LAVORO</h4>
<p>nella giornata odierna, al lavoro, si respirer?? un clima particolarmente sereno e collaborativo. ?? il giorno adatto per coinvolgere gli altri in attivit?? piacevoli e non troppo pesanti.</p>
<h4>SE STESSI</h4>
<p>oggi ?? un buon giorno per dedicarti alle tue passioni. Va bene il dovere, ma anche il piacere vuole la sua parte, la mente ne godr?? e anche il corpo ne trarr?? beneficio.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? l???ANGELO. Quando l???amore chiama, puoi scappare, ignorarlo, negarlo, ma prima o poi dovrai ascoltarlo e rassegnarti al suo potere, che ?? immenso.</p>

";
}

break;

case 25:
{
    echo "
    <center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave del giorno ?? TENTAZIONE</p>
<h4>GENERICO</h4>
<p>oggi sarebbe meglio evitare di essere imprudenti o commettere infrazioni. Anche solo un piccolo strappo alle regole potrebbe non passare inosservato. Attento a multe e sanzioni.</p>
<h4>AMORE</h4>
<p>vale davvero la pena mettere a repentaglio la fiducia del partner solo perch?? qualcun altro stuzzica la tua vanit??? Se non vuoi compromettere la tua stabilit?? di coppia rivedi i tuoi principi morali.</p>
<h4>LAVORO</h4>
<p>oggi ti senti particolarmente sovversivo e hai voglia di infrangere le regole? Asseconda questo istinto se pensi che possa dare una scossa alla monotonia, ma ricorda che potresti essere richiamato all???ordine.</p>
<h4>SE STESSI</h4>
<p>ogni tanto, concedersi uno strappo alla regola, non fa crollare il mondo. Prima di uscire dai binari, per??, valuta bene tutte le conseguenze a cui puoi andare incontro, evita di fare qualcosa di cui poi potresti pentirti amaramente.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui riflettere oggi ?? IL SERPENTE. Questo animale rappresenta la tentazione: ci ricorda che nell???animo umano, anche in quello delle persone pi?? controllate, soggiorna una parte istintiva, che mira a soddisfare ogni tipo di pulsione.</p>
    
    ";
}

break;

//End For L???INNAMORATO



// For IL CARRO
case 26:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Movimento.</p>
<h4>GENERICO</h4>
<p>Oggi ?? un giorno in cui aggredire i problemi come se dovessi concentrare tutte le proprie energie per sferrare un singolo colpo decisivo all???avversario. Non farti intimidire, l'importante non ?? quello che lasci dietro di te, ma dove vuoi arrivare.</p>
<h4>AMORE</h4>
<p>I rapporti stagnanti sono destinati a sfiorire. Oggi potrebbe essere un buon giorno per pianificare una diversione, magari un viaggio o una gita, o per ???mettere in movimento??? qualcosa nel vostro rapporto. ?? anche un momento propizio per iniziare una relazione a distanza.</p>
<h4>LAVORO</h4>
<p>Nulla arriva dal nulla. ?? il momento di mettersi in moto e puntare con slancio verso i propri obiettivi di carriera. Conosci la tua destinazione e puoi essere molto concentrato per arrivarci.</p>
<h4>SE STESSI</h4>
<p>Vi sentite alla vigilia di una nuova, importante partenza verso nuove sfide e nuovi stimoli, siete insofferenti a qualsiasi situazione di stallo e sentite di avere le energie per portare una ventata di novit?? nella vostra vita.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? ???la strada???. Non preoccuparti di lasciarti alle spalle la tua zona di confort, potrai sempre tornarci successivamente, se necessario.</p>
        
        ";
    }

    
case 27:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Autodisciplina</p>
<h4>GENERICO</h4>
<p>Sei pieno di buoni propositi, voglia di fare e obiettivi da raggiungere, per????? per un ???per????? potresti perderti in curve e deviazioni, divagando senza raggiungere lo scopo prefissato. Resta concentrato e determinato!</p>
<h4>AMORE</h4>
<p>In amore potresti avere la necessit?? di bilanciare due pulsioni ugualmente forti e opposte che potrebbero trascinarti in due direzioni differenti. Mantieni strette le redini in modo che tu rimanga sulla tua strada, ricorda: sei il solo comandante della tua anima.</p>
<h4>LAVORO</h4>
<p>Rimanete liberi da distrazioni, sia che vengano dalle politiche aziendali o da rivalit?? tra colleghi, perseverate con impegno.</p>
<h4>SE STESSI</h4>
<p>Hai una personalit?? volitiva, trainata da una forte componente razionale e un altrettanto forte componente emotiva. Trovando il giusto equilibrio tra queste due parti con volont?? e perseveranza potete raggiungere qualsiasi meta.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi sono le due ???sfingi??? che rappresentano le due pulsioni, razionalit?? ed emotivit??, che devono essere bilanciate e tenute entrambe sotto controllo.</p>
        
        ";
    }

break;

case 28:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? ???Azione???.</p>
<h4>GENERICO</h4>
<p>?? il tempo per agire con rapidit?? e decisione. La preparazione ?? stata portata a termine, le mosse sono state pianificate, non ?? pi?? il momento di tergiversare.</p>
<h4>AMORE</h4>
<p>Assicurarti di avere una chiara comprensione di ci?? che stai cercando nell???amore e nel romanticismo e, una volta focalizzato ci??, agisci. Potrebbe essere un momento propizio per cominciare a costruirsi un???esistenza a due o rimettersi in gioco con fiducia nelle novit??.</p>
<h4>LAVORO</h4>
<p>Una scadenza si avvicina? Una data importante sta per arrivare? Non ?? pi?? il tempo di prepararsi, bisogna agire senza indugio per non perdere un???occasione che ?? l??, a portata di mano!</p>
<h4>SE STESSI</h4>
<p>Non ti riesce proprio di rimanere fermo, oggi. Un???inquietudine ti spinge a tenerti in movimento, a fare a tutti i costi qualcosa. Pu?? essere una valida valvola di sfogo ma, tra una corsa e l???altra, interrogati sui motivi di questa irrequietezza.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? il ???condottiero??? del Carro: si pu?? agire in modo efficace solo dopo che si ?? decisa una direzione e una linea d???azione, a quel punto non ?? necessario agire con affanno e foga, ma si potr?? misurare e incanalare la nostra azione verso il bersaglio, come una freccia.</p>
        
        ";
    }

break;

case 30:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave oggi ??: Trionfo</p>
<h4>GENERICO</h4>
<p>Una questione aperta potrebbe oggi concludersi nel modo migliore, se saprete dire o fare la cosa giusta nel momento opportuno. E??? un???occasione che sar?? meglio non lasciarsi sfuggire!</p>
<h4>AMORE</h4>
<p>I vostri sogni stanno per essere coronati, il vostro obiettivo sta per essere raggiunto. Fate in modo che ogni successo sia soltanto il punto di partenza di un viaggio insieme.</p>
<h4>LAVORO</h4>
<p>Sul lavoro poche cose sono gratificanti come il riconoscimento dei propri meriti. Oggi ?? il giorno giusto in cui chiedere una promozione o semplicemente veder riconosciuta la correttezza delle proprie argomentazioni. Che la vittoria di oggi sia marginale o di quelle che lasciano il segno, non lasciare che l???appagamento ti freni, questo deve essere solo un passo in avanti, non il traguardo.</p>
<h4>SE STESSI</h4>
<p>Il Carro ti invita ad avere fiducia nei tuoi mezzi, a credere in un esito positivo del tuo percorso. Magari non sar?? oggi, ma hai tutto quello che serve per acquisire consapevolezza, autocontrollo e stabilit?? emozionale.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi ?? lo ???scettro??? impugnato con naturalezza dall???auriga. Rappresenta il controllo sulle proprie pulsioni che, esercitato con naturalezza, ci conduce alla vittoria, prima di tutto su noi stessi, preludio indispensabile per i successi nel mondo esteriore.</p>
        
        ";
    }

break;

//End For IL CARRO





// For LA GIUSTIZIA
case 31:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? EQUIT??.</p>
<h4>GENERICO</h4>
<p>dice il detto: ?? nel mezzo che risiede la virt??. Oggi, pi?? che mai, fai tesoro di questo insegnamento, non eccedere in estremismi.</p>
<h4>AMORE</h4>
<p>prova a riflettere sugli equilibri che caratterizzano la tua relazione. Diritti e doveri sono bilanciati? Gli scambi di parole e gli slanci d???affetto provengono da entrambi i partner o da uno solo? C????? uno dei due, nella coppia, che sente di dare di pi?? e ricevere meno? Pensa eventualmente a come riportare equilibrio.</p>
<h4>LAVORO</h4>
<p>oggi non guadagnerai nulla di pi?? di quel che meriti, ma neanche meno. Sii pi?? critico e obiettivo che puoi.</p>
<h4>SE STESSI</h4>
<p>sul lavoro, il comportamento di qualcuno potrebbe sembrarti scorretto. D?? quel che pensi, rivendica un giusto comportamento, fatti valere senza remore.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui oggi puoi riflettere ?? LA SPADA. Ci ricorda che occorre eliminare tutto ci?? che nuoce per portare ordine e equilibrio nella propria vita.</p>
        
        ";
    }

break;

case 32:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? RESPONSABILIT??</p>
<h4>GENERICO</h4>
<p>oggi pu?? essere saggio prendere decisioni da tempo lasciate in sospeso, usando senso critico e determinazione. Cerca per?? di non pensare solo al tuo tornaconto, ricorda che chi semina, raccoglie.</p>
<h4>AMORE</h4>
<p>se durante il giorno dovesse sorgere un piccolo conflitto tra te e il partner, evita di soffiare sulle braci. Assumiti le tue responsabilit?? e la fiamma presto si spegner??.</p>
<h4>LAVORO</h4>
<p>sul lavoro oggi si far?? molto affidamento sulle tue capacit??. Ci?? richiede molto impegno e dedizione, ma i tuoi sforzi saranno riconosciuti e ricompensati.</p>
<h4>SE STESSI</h4>
<p>oggi valuta bene qualsiasi conseguenza a cui puoi andare incontro, prima di parlare o agire. Non ?? corretto, n?? maturo scaricare le proprie responsabilit?? sugli altri, sei tu l???unico artefice del tuo destino.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? LA BILANCIA. Ci ricorda che ognuno di noi ?? responsabile delle proprie azioni e che ognuna di esse comporta conseguenze commisurate.</p>
        
        ";
    }

break;

case 33:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? GIUDIZIO.</p>
<h4>GENERICO</h4>
<p>nel mondo, purtroppo, non sempre domina la Giustizia. Oggi potresti avvertire un particolare slancio per temi che riguardano i diritti umani, la salvaguardia dell???ambiente o importanti problemi sociali.</p>
<h4>AMORE</h4>
<p>ok, magari oggi il partner ti sembra particolarmente riservato, ma la sua non ?? ostilit??. Chiedigli senza riserve cosa pensa, ti risponder?? con sincerit??.</p>
<h4>LAVORO</h4>
<p>nella giornata odierna, sul lavoro, ?? richiesto tutto il tuo spirito critico. Non essere troppo severo per??, n?? con te stesso, n?? con sottoposti o colleghi, in fin dei conti errare ?? umano.</p>
<h4>SE STESSI</h4>
<p>spesso conviene fregarsene del giudizio altrui, nessuno conosce la tua vita e i tuoi problemi come te. Allo stesso modo per?? non ?? giusto criticare le scelte degli altri.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? LA CORONA. La corona della Giustizia ricorda le mura di una citt?? fortificata. Rappresenta il libero arbitrio, quella qualit?? tipica degli esseri umani che li rende esseri liberi di scegliere e agire.</p>
        
        ";
    }

break;

case 34:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? PERFEZIONE</p>
<h4>GENERICO</h4>
<p>oggi potresti provare la sensazione di voler mettere tutto in ordine, far quadrare i conti, terminare cose lasciate in sospeso, chiarire dubbi e sedare conflitti. Va bene assecondare questo anelito, ma cerca di non stressarti troppo, che tanto la perfezione non esiste.</p>
<h4>AMORE</h4>
<p>un rapporto ?? definibile sereno quando entrambi i partner possono esprimersi liberamente, mettendo a nudo anche le proprie fragilit??. Non temere di non essere all???altezza, quelli che hai sempre ritenuto essere difetti, potrebbero rivelarsi sorprendenti qualit??.</p>
<h4>LAVORO</h4>
<p>dopo un duro e impegnativo lavoro, otterrai un riconoscimento che ti far?? sentire particolarmente realizzato. Goditi i tuoi meriti, ma non allentare la presa, continua a essere rigoroso e metodico.</p>
<h4>SE STESSI</h4>
<p>oggi cerca di non essere troppo inflessibile con te stesso, datti anche la possibilit?? di sbagliare e fare qualcosa di imperfetto, pu?? rivelarsi costruttivo e pu?? farti conoscere dei nuovi aspetti di te che non conoscevi.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? LO SGUARDO (dritto avanti a s??). Rappresenta la capacit?? di fissare i propri obiettivi, soppesare le priorit??, decidere con neutralit??, senza farsi influenzare da niente e da nessuno.</p>
        
        ";
    }

break;

//End For LA GIUSTIZIA





// For L???EREMITA
case 35:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? ISOLAMENTO</p>
<h4>GENERICO</h4>
<p>hai tanti amici, molti impegni, una vita sociale invidiabile, ma certe volte non sei soddisfatto. Forse ti sembra di aver perso di vista i tuoi obiettivi? Quello che ti serve ?? trascorrere una giornata da solo. Prenditi il tempo che serve, spegni il cellulare e riscopri le tue necessit?? pi?? vere e intime.</p>
<h4>AMORE</h4>
<p>la carta dell???eremita pu?? indicare che hai bisogno di trascorrere un po??? di tempo da solo. Se non hai una relazione, l???amore per ora pu?? attendere, se ce l???hai tranquillizza il partner: oggi va cos??, domani sarai pi?? empatico.</p>
<h4>LAVORO</h4>
<p>oggi potrebbe mancarti la pazienza di accontentare colleghi e clienti. Delega ad altri il rapporto col pubblico e, se puoi, svolgi compiti che ti permettano di non esporti troppo.</p>
<h4>SE STESSI</h4>
<p>un percorso spirituale degno di tale nome comporta capacit?? di introspezione, riflessione, distacco. Tutte cose che non si possono fare stando tra la folla e nel caos. Se vuoi intraprendere un cammino di profonda conoscenza del s??, valuta di trascorrere un periodo di ritiro dalla societ??.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? IL MANTELLO. Esso simboleggia la protezione divina e la capacit?? di trovare le risposte dentro di s??.</p>
        
        ";
    }

break;

case 36:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? RICERCA.</p>
<h4>GENERICO</h4>
<p>se puoi, oggi ritagliati una pausa dagli impegni e trascorri un po??? di tempo fuori citt??, in mezzo alla natura, magari in un bosco. Ti sentirai rigenerato per molto tempo.</p>
<h4>AMORE</h4>
<p>se sei single, oggi non crucciarti alla ricerca dell???amore, piuttosto impiega le tue energie per realizzare i tuoi sogni e l???anima gemella arriver?? di conseguenza. Se sei in una relazione, lascia un po??? di spazio al tuo partner, cerca di non assillarlo.</p>
<h4>LAVORO</h4>
<p>ti sei mai chiesto se il tuo lavoro riflette veramente la tua vocazione? O lo svolgi solo per una questione economica? A volte dona pi?? felicit?? una realt?? professionale modesta ma serena, piuttosto che una carriera strepitosa, ma snervante.</p>
<h4>SE STESSI</h4>
<p>un buon esercizio per placare la mente e focalizzare l???attenzione dentro di s??? Siediti in un luogo silenzioso e buio, fissa una candela accesa per un po???, senza pensare a nulla, poi trascrivi le immagini che ti vengono in mente come sogni.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui riflettere oggi ?? LA LANTERNA. Questo strumento, che fa luce nel buio e proietta dall???interno immagini oniriche, rappresenta la necessit?? di ognuno di realizzare il vero scopo dell???esistenza.</p>
        
        ";
    }

break;

case 37:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? SUPERAMENTO DELLA CRISI.</p>
<h4>GENERICO</h4>
<p>ricorda: rimuginare sul passato e isolarti dal mondo non ti aiuter?? a uscire da un periodo buio. A volte bastano due chiacchiere con un amico sincero per poter vedere la luce in fondo al tunnel.</p>
<h4>AMORE</h4>
<p>come un unico scoglio non pu?? arginare il mare, cos?? non sar?? certo una piccola crisi a far naufragare una relazione consolidata. Un breve periodo di solitudine pu?? servire a schiarire le idee in amore.</p>
<h4>LAVORO</h4>
<p>?? arrivato il momento di rallentare il ritmo di lavoro, fare il punto della situazione e pensare al futuro. Hai gi?? messo qualcosa da parte per la pensione? Quel che oggi semini, domani raccoglierai.</p>
<h4>SE STESSI</h4>
<p>in ogni fase della vita si pu?? andare incontro a una crisi esistenziale. ?? proprio in quei momenti, apparentemente bui, che si pu?? mettere a fuoco cosa ?? veramente importante per la nostra evoluzione e cosa no.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? IL BASTONE. Il bastone, che pu?? essere l???umile sostegno di un mendicante o il prezioso simbolo di potere di un re, ci dice che spetta a ognuno di noi decidere come sfruttare le opportunit?? che il destino ci offre.</p>
        
        ";
    }

break;

case 38:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? RICCHEZZA INTERIORE.</p>
<h4>GENERICO</h4>
<p>oggi, se non lo fai spesso, vai a trovare un nonno, un genitore, una persona anziana. Non avere fretta, ascolta quello che ha da dirti. Tu imparerai qualcosa di importante e lui/ lei sar?? lieto di condividere le sue esperienze. Ripeti l???esperienza pi?? spesso che puoi.</p>
<h4>AMORE</h4>
<p>oggi, se gli impegni quotidiani lo consentono, cerca di ritagliarti un po??? di tempo solo per il tuo partner. Riscopri cos????? che rende unica e speciale la vostra relazione.</p>
<h4>LAVORO</h4>
<p>se oggi devi prendere una decisione importante per la tua professione, non decidere d???impulso. Prenditi il tempo di riflettere, non ascoltare troppe campane e chiarisci bene, tra te e te, quali risultati vuoi ottenere. Solo dopo passa all???azione.</p>
<h4>SE STESSI</h4>
<p>per diventare saggi non bisogna necessariamente essere avanti con gli anni, basta saper fare tesoro delle esperienze passate e imparare ad affrontare i momenti di crisi con resilienza e dignit??.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? IL BASTONE. Il bastone, che pu?? essere l???umile sostegno di un mendicante o il prezioso simbolo di potere di un re, ci dice che spetta a ognuno di noi decidere come sfruttare le opportunit?? che il destino ci offre.</p>
        
        ";
    }

break;

// End For L???EREMITA




// For LA RUOTA DI FORTUNA
case 39:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? CAMBIAMENTO</p>
<h4>GENERICO</h4>
<p>oggi concediti un cambiamento. Non importa che sia eclatante o drastico, basta anche che sia piccolo e percepibile solo da te. Magari vai a piedi anzich?? in auto, cambia tragitto, oppure vestiti di un colore insolito, che in genere non indossi mai. Ti servir?? per capire che puoi fare a meno dell???abitudine e che uscirne ?? vivificante.</p>
<h4>AMORE</h4>
<p>la routine ?? invisa all???amore, oggi ?? il giorno ideale per spezzarla. Sorprendi il partner, fai qualcosa di inusuale, dimostra che non senti il peso della quotidianit?? e del tempo che passa.</p>
<h4>LAVORO</h4>
<p>sul lavoro oggi potresti dover svolgere una nuova mansione. Non farti prendere dal panico e non sottovalutare la tua capacit?? di adattamento, datti il tempo di imparare e procedi, avrai pi?? competenze in futuro.</p>
<h4>SE STESSI</h4>
<p>oggi guardati allo specchio senza giudicare il tuo aspetto, ma solo per prendere coscienza di te. Osservati come se fossi un???altra persona, un amico. Osserva con indulgenza i cambiamenti che il tempo ha registrato sul tuo volto, non giudicarli, ma ringraziali, senza di loro non saresti la persona che sei.</p>
<h4>SIMBOLO</h4>
<p>I simboli su cui riflettere oggi sono l???aquila, l???angelo, il toro e il leone. Rappresentano, a livello astrologico, le quattro stagioni. Cos?? come la Natura ?? soggetta a mutamenti ciclici, cos?? l???esistenza umana attraversa le sue fasi: giovinezza, maturit?? e vecchiaia.</p>
        
        ";
    }

break;

case 40:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? ARRESTO</p>
<h4>GENERICO</h4>
<p>hai bisogno di fare il punto della situazione? Se puoi, oggi fermati, non proseguire in ci?? che stai facendo e non iniziare un nuovo progetto. Concediti una pausa prima di decidere con obiettivit?? su come procedere.</p>
<h4>AMORE</h4>
<p>in amore ?? arrivato il momento di fare un passo importante, lo sai. Sia che si tratti di interrompere, sia che si tratti di procedere e far evolvere la relazione. Non ha pi?? senso procrastinare, fallo oggi.</p>
<h4>LAVORO</h4>
<p>oggi si rivela da subito una giornata poco produttiva, quando invece tu saresti smanioso di concludere. Ma c????? una forza di causa maggiore che lo impedisce, non puoi farci nulla. Tanto vale che ti rilassi, domani andr?? meglio.</p>
<h4>SE STESSI</h4>
<p>a volte sembra che la sorte ti metta alla prova e dissemini di ostacoli il tuo cammino, vero? Non arrenderti, quegli ostacoli sono prove utili alla tua evoluzione, senza di essi non potresti maturare, una volta superati diventerai completamente padrone della tua vita.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? LA RUOTA. Rappresenta lo scorrere ciclico del tempo, che talora fluisce inarrestabile, talaltra subisce delle soste necessarie.</p>
        
        ";
    }

break;

case 41:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? FORTUNA.</p>
<h4>GENERICO</h4>
<p>oggi, senza che tu lo provochi, potrebbe accaderti un piccolo evento fortunato, gradito e inatteso. Accoglilo con gioia, anche se non ti cambier?? la vita, probabilmente ti far?? stare bene per un attimo. Ringrazia la Sorte.</p>
<h4>AMORE</h4>
<p>se un rapporto c????? gi??, l???intesa tra te e il partner oggi sar?? perfetta, se non c????? ancora, potrebbe delinearsi un futuro roseo all???orizzonte. C????? da essere allegri e speranzosi.</p>
<h4>LAVORO</h4>
<p>esperienza, conoscenza e perizia sono gi?? in tuo possesso, ma potrebbero non bastare. Per avere successo occorre anche un pizzico di fortuna. Oggi osa.</p>
<h4>SE STESSI</h4>
<p>riflettere sulla fugacit?? del destino ?? senza dubbio un passatempo filosofico, ma non ti aiuter?? a voltare pagina. ?? ora di non pensare pi?? al passato, bisogna guardare avanti: quel che deve accadere, accadr??.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere sono SET e ANUBI. Ai lati della ruota appaiono due esseri: un serpente col muso rivolto verso il basso e un personaggio cinocefalo, che guarda verso l???alto. Rappresentano le direzioni che il corso della vita pi?? prendere: a volte in discesa, altre in salita.</p>
        
        ";
    }

break;

case 42:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? CONTROLLO.</p>
<h4>GENERICO</h4>
<p>?? tempo di risparmiare, mettere da parte e organizzarsi in previsione di tempi un po??? pi?? difficili. Comincia da oggi, non procrastinare.</p>
<h4>AMORE</h4>
<p>puoi controllare le tue azioni, ma non il tuo cuore. Nulla ?? pi?? irrazionale dell???amore, quando arriva non puoi far altro che soggiacere alle sue sacre e incomprensibili leggi e accettare che ti travolga.</p>
<h4>LAVORO</h4>
<p>nella vita lavorativa possono presentarsi cambiamenti radicali, rapidi e sconvolgenti. Conviene adattarsi e restare al passo per non rimanere travolti o venire tagliati fuori.</p>
<h4>SE STESSI</h4>
<p>nel corso di una esistenza, momenti belli e momenti brutti si alternano incessantemente. Cercare di controllare questo processo pu?? risultare frustrante e inutile, conviene piuttosto accettarlo e trarne insegnamento.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui riflettere oggi ?? LA SFINGE. Per gli antichi egizi, questo essere mitologico, rappresenta il guardiano che controlla e protegge la soglia dell???aldil??, ovvero il regno delle anime meritevoli e degli Dei.</p>
        
        ";
    }

break;

// End For LA RUOTA DI FORTUNA




// For LA FORZA
case 43:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Leadership</p>
<h4>GENERICO</h4>
<p>Oggi puoi contare sul magnetismo che sai di emanare, la forza interiore, la capacit?? di importi, l'intelligenza in grado di dominare gli eventi e di influire sugli altri.</p>
<h4>AMORE</h4>
<p>In una maggiore unione te e il tuo partner</p>
<h4>LAVORO</h4>
<p>Sul lavoro hai la capacit?? non solo di affrontare gli eventi, ma anche di governarli, senza lasciarti sopraffare da loro. Il tuo magnetismo attrae al tuo fianco ottimi collaboratori</p>
<h4>SE STESSI</h4>
<p>I fatti ti stanno facendo riflettere sul fatto che avere carattere non significa essere aggressivi verso il proprio ambiente, imponendosi schiacciando gli altri, avere carattere ?? l???apertura di chi non teme di mostrarsi per ci?? che ??, forte di una solidit?? emotiva e psichica</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il ???Cielo???. Rappresentare l'intelletto in azione, a rafforzare proprio l'idea che la Forza, quella vera, quella che serve, ?? una attitudine che viene dal profondo di s??, non certo manifestazione esteriore.</p>
        
        ";
    }

break;

case 44:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Passione</p>
<h4>GENERICO</h4>
<p>Non nascondere la tua natura istintiva dietro una maschera di pallida virt??, non ne hai bisogno. Apriti alle forze istintuali dominandole gradualmente e incanalandole con amore, facendo cos?? disporrai sia della tua forza primordiale che di tutte quelle riserve che hai consumato per soffocarla anzich?? guidarla.</p>
<h4>AMORE</h4>
<p>Potresti trovarti in una storia d???amore appassionata e focosa. I sentimenti intensi suggeriti da questa carta possono indicare sia una relazione forte, sia una che pu?? essere incline alla rabbia, alla gelosia o ad altre esplosioni emotive.</p>
<h4>LAVORO</h4>
<p>Se poteste imbrigliare i vostri istinti animaleschi, la vostra rabbia, la vostra spinta e la vostra passione, potreste fare grandi passi nella vostra carriera. Non lasciate, quindi, che questi istinti prendano il sopravvento, ma piuttosto lavorate in armonia con essi, incanalandoli in un uso produttivo.</p>
<h4>SE STESSI</h4>
<p>Il nostro compito ?? quello di non condannare o rinnegare le energie catalogate come bassi istinti ma di neutralizzare il dissidio tra la nostra coscienza e la nostra natura animalesca in tre modi diversi: sconfiggendo il dissidio, conservando queste energie per tenerle vive e alzando il livello su quale queste non si contrastano bens?? si uniscono in unica forza imbattibile.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il ???Leone???. Rappresenta l'istinto animale, il desiderio, la passione, ma anche la gelosia, la rabbia che monta incontrollabile in certe situazioni della vita. Tuttavia, guardandolo attentamente, sembra essere addomesticato; ci?? significa che la Forza ha saputo vincere i suoi istinti, rappresentati dal leone, senza distruggerli, e da essi ha attinto una certa energia.</p>
        
        ";
    }

break;

case 45:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Coraggio</p>
<h4>GENERICO</h4>
<p>Oggi il tuo coraggio e la tua resilienza ti aiuteranno molto, e la tua impavidit?? significa che non dovresti avere problemi a dire quello che pensi.</p>
<h4>AMORE</h4>
<p>La tenacia dei vostri sentimenti ?? ripagata: non hai nulla da temere sulla fedelt?? e sulla sincerit?? del partner.  Le difficolt?? vengono superate grazie alla propria capacit?? e determinazione.</p>
<h4>LAVORO</h4>
<p>Raccogli la tua forza d???animo per fare grandi passi. Se stai cercando una promozione, fai qualcosa per farti notare. Se stai cercando di cambiare la tua intera carriera, fallo. Se stai sognando di avviare un???attivit?? in proprio, spingiti a fare i prossimi passi e inizia.</p>
<h4>SE STESSI</h4>
<p>Hai in te il coraggio per affrontare le tue paure e dominarle senza lasciarti sopraffare da loro.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? ???La Fanciulla???. Indica che il coraggio ?? soprattutto una forza interiore, non certo fisica, visto che una giovinetta esile e minuta non pu?? avvalersi di questo tipo di forza materiale. La fanciulla, infatti, cercando di aprire le fauci del leone mostra evidentemente questa sua calma interiore, la fiducia in se stessa ed un coraggio fuori dal comune.</p>
        
        ";
    }

break;

case 46:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Gentilezza</p>
<h4>GENERICO</h4>
<p>Solitamente trovi sempre il tempo per le altre persone anche se ?? a tue spese. Oggi l???imperativo da seguire sar?? difendere la giusta causa e aiutare il prossimo in difficolt??, attenendosi all'ideale di generosit??, fedelt?? ai principi, massima franchezza.</p>
<h4>AMORE</h4>
<p>Quante piccoli gesti si fanno per l???altra persona? Trova il tempo di notare quelli che il partner ti dedica, e assicurati di fare altrettanto.</p>
<h4>LAVORO</h4>
<p>?? noto che con un cucchiaino di miele si possono attirare pi?? mosche rispetto??? ad altri incentivi. Colleghi e collaboratori sono spesso pi?? sensibili a un piccolo gesto gentile nei loro confronti rispetto a rimbrotti e lamentele.</p>
<h4>SE STESSI</h4>
<p>Oggi trova il tempo per coccolarti un po???. Non si tratta di essere indulgenti, ma semplicemente di riconoscere che ci meritiamo a volte una piccola gentilezza da noi stessi, perch?? senza l???amore per se stessi ?? difficile averne da donare agli altri.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi sono le ???ghirlande di fiori??? che adornano la figura della fanciulla, ad indicare la capacit?? della gentilezza di ???aprire le fauci??? ai leoni che avrebbero la capacit?? o l???intenzione di aggredirci.</p>
        
        ";
    }

break;

// End For LA FORZA





//For L???APPESO
case 47:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? CAPOVOLGIMENTO</p>
<h4>GENERICO</h4>
<p>Oggi tutto sembra andare al contrario di come dovrebbe. ?? il mondo intorno a te a remare contro corrente o sei tu? Non conviene lottare: fermati, osserva, rifletti e aspetta che il momento passi senza stressarti troppo.</p>
<h4>AMORE</h4>
<p>Oggi, in amore, tenere il broncio e fare la vittima non sbloccher?? la situazione. La soluzione pi?? semplice e matura ?? cambiare atteggiamento e rinunciare a eccessive aspettative.</p>
<h4>LAVORO</h4>
<p>Sul lavoro, oggi le vostre idee potrebbero essere ritenute controcorrente. Sprecare fiato e fatica sarebbe inutile. Rimanete irremovibili se volete, ma conviene ascoltare il parere degli altri.</p>
<h4>SE STESSI</h4>
<p>Oggi ?? il giorno perfetto per praticare attivit?? fisica meditativa, tipo yoga o tai chi. Quando avrai finito non starai solo meglio fisicamente, ma vedrai le cose da tutt???altro punto di vista.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? LA POSIZIONE A TESTA IN GIU???. La posa di questo personaggio ci ricorda che ogni tanto ?? utile, se non addirittura necessario, vedere le cose diversamente da come le vedono gli altri. Solo cos?? possiamo conoscere la nostra vera personalit??.</p>
        
        ";
    }

break;

case 48:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave del giorno ?? RINASCITA.</p>
<h4>GENERICO</h4>
<p>nel corso di una vita si attraversano tante fasi, si chiudono cicli, se ne aprono altri. ?? come se si alternassero tante piccole morti e rinascite. L???appeso suggerisce che da oggi, se sei pronto, puoi rinascere.</p>
<h4>AMORE</h4>
<p>in amore, non rinunciare a fare un piccolo sacrificio, se necessario. Ammettere le colpe e assumersi le proprie responsabilit?? pu?? evitare che piccole crisi degenerino. Non controbattere, ascolta.</p>
<h4>LAVORO</h4>
<p>al lavoro pare sia giunto il momento di volgere lo sguardo verso nuove soluzioni. Ti senti pronto a andare oltre gli schemi precostituiti, ma ti sembra che gli altri non ti capiscano?  Non prendertela, pensa che ci sono nuove prospettive all???orizzonte.</p>
<h4>SE STESSI</h4>
<p>a volte, per cambiare una situazione, non occorrono gesti estremi, potrebbe semplicemente servire cambiare le proprie dinamiche interne. Adottare un nuovo punto di vista pu?? aiutare a rialzarsi.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? LA CORDA. La corda annodata alla caviglia che sostiene l???Appeso simboleggia una sorta di cordone ombelicale: perch?? avvenga una rinascita, a volte, occorre tagliare legami vincolanti.</p>
        
        ";
    }

break;

case 49:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? ARRESTO</p>
<h4>GENERICO</h4>
<p>se ti senti bloccato, non forzare le cose, aspetta. Quando sar?? il momento tornerai ad agire con pi?? determinazione di prima.</p>
<h4>AMORE</h4>
<p>oggi c????? qualcosa che ti trattiene e ti impedisce di rivelare al partner le tue esigenze. Forse temi di tirare troppo la corda della sua pazienza? Ricorda che una storia d???amore non pu?? diventare una gabbia dorata.</p>
<h4>LAVORO</h4>
<p>oggi, al lavoro, approfitta di una eventuale situazione statica per sistemare ci?? di cui non ti occupi da tempo. Liberati degli orpelli, ma fai attenzione a non perdere qualcosa che pu?? servirti.</p>
<h4>SE STESSI</h4>
<p>cercando di cambiare l???opinione del prossimo non otterrai ci?? che vuoi. Prova a assumere il punto di vista altrui per farti capire, supera i tuoi preconcetti. Se ci riesci, preparati a cambiamenti.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? l???ALBERO. Come l???albero con radici sane, sopravvive al rigido inverno e fruttifica in estate, cos?? puoi superare ogni stagione della vita se rimani radicato ai tuoi obiettivi.</p>
        
        ";
    }

break;

case 50:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? ILLUMINAZIONE</p>
<h4>GENERICO</h4>
<p>se oggi senti la necessit?? di una ricarica, tieniti alla larga dalla folla e dai rumori per tutto il tempo che ritieni necessario. Ritagliati uno spazio solo tuo per riflettere, a volte una transizione ?? necessaria.</p>
<h4>AMORE</h4>
<p>l???amore pu?? diventare uno strumento di crescita e un???esperienza mistica se si condividono gli stessi ideali e si perseguono gli stessi obiettivi. Chiediti cosa ti accomuna al tuo partner.</p>
<h4>LAVORO</h4>
<p>se sul lavoro non riesci a risolvere un problema, non insistere, momentaneamente passa oltre, la soluzione sopraggiunger?? quando meno te lo aspetti.</p>
<h4>SE STESSI</h4>
<p>nei momenti in cui non si pu?? agire, ci si sente spesso frustrati. Per propiziare i cambiamenti in arrivo, puoi compiere un piccolo atto augurale: guarda fuori dalla finestra e ringrazia l???Universo. ?? un piccolo gesto, ma porta buone vibrazioni.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? L???AUREOLA. Osserva bene, il volto del personaggio capovolto ?? sereno, il suo capo ?? circonfuso da un???aura luminosa! Non ?? scomodo come sembra, dimostra piuttosto fiduciosa attesa. A volte ?? pi?? saggio attendere e riflettere bene, prima di agire.</p>
        
        ";
    }

break;

// End For L???APPESO



//For ARCANO SENZA NOME
case 51:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? CAMBIAMENTO RADICALE.</p>
<h4>GENERICO</h4>
<p>d???accordo, percorrere strade gi?? battute ti fa sentire pi?? sicuro, ma non pensi sia giunto il momento di intraprendere un nuovo cammino o cambiare rotta? La novit?? potrebbe sorprenderti positivamente</p>
<h4>AMORE</h4>
<p>inutile, certe dinamiche nella coppia non funzionano pi??. Se tu e il partner volete far s?? che la relazione prosegua, ?? necessario che entrambi siate disposti a cambiare, altrimenti ?? meglio chiudere e voltare pagina.</p>
<h4>LAVORO</h4>
<p>ti capita spesso di lamentarti del tuo lavoro? Ritieni che il rapporto coi colleghi, le tue mansioni o lo stipendio non ti soddisfino pi??? Forse ?? il caso di apportare modifiche sostanziali alla tua attivit?? prima di prendere decisioni drastiche.</p>
<h4>SE STESSI</h4>
<p>se vuoi cambiare il corso del tuo destino, parti da te. Tutt???ora che imparerai a uscire dalla tua zona comfort, ti accorgerai che c????? un mondo intero che ti aspetta e molte porte che attendono di essere aperte.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? LA CORAZZA.  La vita non ?? sempre facile, spesso dobbiamo affrontare problemi, metabolizzare traumi, elaborare lutti. Ciascun cambiamento che viviamo ci forgia e rafforza.</p>
        
        ";
    }

break;

case 52:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? FINE NECESSARIA</p>
<h4>GENERICO</h4>
<p>Vorresti vederti con occhi nuovi e ti piacerebbe che la gente apprezzasse la tua immagine? Prova un cambio di look. Un taglio di capelli drastico pu?? essere quello che ci vuole.</p>
<h4>AMORE</h4>
<p>cercare di mantenere in piedi una relazione insoddisfacente ?? logorante per entrambi i partner. Meglio lasciarsi: per ogni porta che si chiude si apre un portone.</p>
<h4>LAVORO</h4>
<p>oggi, al lavoro, le tue decisioni potrebbero sembrare troppo drastiche per alcuni. Non cedere, sostienile fino in fondo, tanto prima o poi qualcuno doveva prenderle, era solo questione di tempo.</p>
<h4>SE STESSI</h4>
<p>Una fase della tua vita ?? terminata e il futuro ti spaventa? ?? normale, tutti temono l???ignoto, ma pensa che non pu?? esistere un nuovo inizio se prima non c????? stata una fine.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere oggi ?? IL FIORE BIANCO SULLA BANDIERA NERA. Il vessillo di questo arcano ricorda un candido loto in mezzo a un oscuro stagno. Come dalla melma pu?? nascere un fiore puro, cos?? dagli errori passati scaturisce un prezioso insegnamento.</p>
        
        ";
    }

break;

case 53:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? LASCIARE ANDARE</p>
<h4>GENERICO</h4>
<p>ti rendi conto che il tuo armadio ?? strapieno? Inutile che tieni tutti quegli abiti che non ti stanno pi?? o non hai mai indossato, regalali a qualcun altro, fai spazio per un guardaroba nuovo.</p>
<h4>AMORE</h4>
<p>lascia andare il passato. Rimpianti, rancori e rimorsi nuocciono all???amore e bloccano l???evoluzione della coppia. Perdona se riesci, cambia se puoi, sciogli l???impegno se vuoi.</p>
<h4>LAVORO</h4>
<p>se nel lavoro hai dato il massimo e ti sei spremuto fino all???osso, oggi prenditi una pausa, stacca la spina e delega ad altri le tue mansioni. Domani tornerai pi?? riposato e produttivo che mai.</p>
<h4>SE STESSI</h4>
<p>accumulare cose, pensieri e emozioni non permette all???energia di circolare come dovrebbe. Liberati di ci?? che hai in eccesso e preparati a ricevere una sferzata di nuova vitalit??.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? IL CAVALLO. Presso molte culture antiche questo animale ?? simbolo di potenza e trascendenza. Rappresenta la capacit?? di affrontare e superare le battaglie della vita con dignit?? e coraggio.</p>
        
        ";
    }

break;

case 54:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? PURIFICAZIONE</p>
<h4>GENERICO</h4>
<p>questa potrebbe essere la giornata ideale per purificare l???organismo. Se il tuo stato di salute lo consente, prova a osservare, solo per oggi, una dieta a base di frutta, verdura e acqua.</p>
<h4>AMORE</h4>
<p>l???amore ?? puro quando non viene contaminato da ansie, timori e dubbi. Se lo stai cercando evita storie troppo complicate, se c????? gi?? riscopri cosa ti ha fatto innamorare del partner.</p>
<h4>LAVORO</h4>
<p>al lavoro cerca di toglierti di mezzo le incombenze pi?? pesanti oggi stesso. Domani potrai cominciare nuovi incarichi con mente sgombra e cuore leggero.</p>
<h4>SE STESSI</h4>
<p>come una buona alimentazione permette di purificare il corpo, cos?? la meditazione monda la psiche da fardelli emotivi e inutili elucubrazioni. Oggi cerca di meditare per dieci minuti almeno.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? LO SCHELETRO. Lo scheletro, simbolo di ci?? che rimane dopo la morte, ci ricorda che ?? inutile attaccarsi troppo a beni effimeri e materiali, dato che tutto ?? destinato a finire. l???essenza, ci?? che rimane, ?? invisibile agli occhi.</p>
        
        ";
    }

break;


//End For ARCANO SENZA NOME



//For LA TEMPERANZA
case 55:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? DIPLOMAZIA</p>
<h4>GENERICO</h4>
<p>oggi, ?? consigliabile mantenere la calma e se necessario, accettare anche qualche piccolo compromesso. La tua pacatezza potrebbe essere contagiosa e creare un???atmosfera serena e pacifica nell???ambiente che ti circonda.</p>
<h4>AMORE</h4>
<p>se ti apri al dialogo, oggi nel tuo rapporto regneranno calma e tolleranza. Se il clima ?? tendente al gelido, aspetta che sia il partner a fare la prima mossa.</p>
<h4>LAVORO</h4>
<p>oggi, sul lavoro, ?? sconsigliabile prendere posizioni estreme. Se i compiti che ti spettano sono lunghi o ripetitivi, cerca di non strafare, prendila con filosofia.</p>
<h4>SE STESSI</h4>
<p>non ?? il momento per indulgere in stravizi, ma nemmeno in rinunce estreme. I latini dicevano ???in media stat virtus???, ovvero il giusto si trova nella via di mezzo.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? LE COPPE. Se l???angelo che travasa il liquido si muove in fretta, rovescia tutto. Significa che per stare bene, e armonizzare corpo e psiche, ?? consigliabile abbandonare gli atteggiamenti estremi e moderare le passioni.</p>
        
        ";
    }

break;

case 56:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? GUARIGIONE</p>
<h4>GENERICO</h4>
<p>oggi lasciate andare il pi?? possibile ansie, giudizi e pensieri negativi. Molto spesso valutiamo le cose con un filtro sbagliato e vediamo ombre dove non ce ne sono.</p>
<h4>AMORE</h4>
<p>se il partner ?? stressato non allontanarti, cerca di dedicargli qualche piccola attenzione, compi qualcosa lo faccia sentire amato. Tipo un massaggio, una tisana, un gesto che dica: mi piace prendermi cura di te.</p>
<h4>LAVORO</h4>
<p>se sul lavoro nascessero conflitti, potrebbe spettare a te sedarli. La tua presenza sar?? indispensabile e la tua capacit?? di mediazione potrebbe farti apprezzare e avanzare di carriera.</p>
<h4>SE STESSI</h4>
<p>oggi ?? il giorno perfetto per una bella purificazione. Bevi tisane depurative, mangia cibi leggeri, fatti una maschera all???argilla mentre svolgi un???attivit?? rilassante o meditativa. Corpo e mente troveranno nuova luce.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? L???ANGELO. Gli angeli, in tutte le tradizioni spirituali, sono ritenuti messaggeri e custodi celesti. Questo arcano ci ricorda che dentro ognuno di noi c????? una guida superiore che, se sappiamo ascoltarla, ?? capace di guidarci e mostrarci il cammino.</p>
        
        ";
    }

break;

case 57:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? ARMONIA.</p>
<h4>GENERICO</h4>
<p>oggi sembrano tutti pi?? cordiali e percepisci pi?? pace intorno a te? Non stupirti, ?? quello che succede se inizi la giornata con un sorriso. L???esito degli eventi dipende spesso dal modo in cui ci si approccia con essi.</p>
<h4>AMORE</h4>
<p>chi l???ha detto che in amore vincano solo i gesti plateali e grandiosi? Ci sono momenti in cui, anche nelle storie pi?? passionali, ?? preferibile essere solo presenti, pazienti e comprensivi, senza dover dimostrare o pretendere nulla.</p>
<h4>LAVORO</h4>
<p>sul lavoro, oggi ?? inutile farsi prendere dalla fretta. Ci?? che serve ?? calma e pignoleria. Scoprirai di avere perizia e capacit?? di concentrazione da vendere. Pu?? essere che non riuscirai a concludere ci?? che hai iniziato. Pazienza, se non altro ?? fatto bene.</p>
<h4>SE STESSI</h4>
<p>evita, se puoi, di importi ritmi troppo serrati. Potrebbero esaurire le tue energie e anche il fisico ne risentirebbe. Prenditi tutto il tempo che ti serve, rivolgiti a un bravo erborista.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui riflettere ?? IL TRIANGOLO NEL QUADRATO. Questo antichissimo simbolo alchemico rappresenta la presenza dell???essenza divina nella materia. Se ami il tuo corpo, lo curi e lo tratti bene, anche la tua anima ne trarr?? giovamento.</p>
        
        ";
    }

break;

case 58:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? PRUDENZA</p>
<h4>GENERICO</h4>
<p>oggi, prima di agire, ?? meglio pensarci due volte. Un passo falso potrebbe compromettere un progetto a cui tieni molto. Se ?? il caso, prova a procrastinare.</p>
<h4>AMORE</h4>
<p>oggi, in amore, cerca di essere pi?? comprensivo possibile col partner. Un tuo consiglio, sincero e spassionato, potrebbe farlo stare decisamente meglio e portare serenit?? nella coppia.</p>
<h4>LAVORO</h4>
<p>sul lavoro, mantieni un atteggiamento pi?? diplomatico possibile. Per evitare di fare passi falsi o essere frainteso ?? meglio tastare il terreno e capire cosa si aspettano gli altri da te. Conviene evitare l???impulsivit??.</p>
<h4>SE STESSI</h4>
<p>non c????? niente di meglio, per far chiarezza nei propri pensieri, che trascorrere una giornata in solitudine. A volte, ascoltare troppe campane ?? fuorviante, meglio fare il punto della situazione ascoltando musica rilassante e svolgendo un???attivit?? manuale piacevole.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? il GIGLIO. Come questo fiore, delicato e puro, riceve la sua forza vitale dalla luce del sole, cos?? la nostra coscienza pu?? ricevere l???illuminazione se si rende recettiva ai messaggi dell???universo.</p>
        
        ";
    }

break;

// End For LA TEMPERANZA




//For DIAVOLO
case 59:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Dipendenza</p>
<h4>GENERICO</h4>
<p>Piccole o grandi, abbiamo tutti le nostre dipendenze: abitudini e piccoli o grandi vizi. Le dipendenze affettive sono per?? quelle da cui ?? pi?? complicato liberarsi. Oggi non ?? il giorno per spezzare le catene, ma forse puoi iniziare ad allentare qualche anello.</p>
<h4>AMORE</h4>
<p>?? facile scivolare dall???amore alla dipendenza dal partner. Dimostra al tuo partner che sai di poter contare sulla sua presenza, ma che sei in grado di sopravvivere alla sua assenza: il vostro rapporto ne giover??. Anche la ricerca ossessiva di iniziare una relazione ?? una dipendenza da cui ?? bene affrancarsi, per evitare di incorrere in scelte errate.</p>
<h4>LAVORO</h4>
<p>Nel lavoro oggi non ci vengono dati troppi spazi di manovra: qualche volta ?? necessario fare quello che ci viene chiesto. Il tempo dell???originalit?? o della ribellione arriver??, ma non ?? questo.</p>
<h4>SE STESSI</h4>
<p>Interroghiamoci su quale abitudine o pensiero negativo sono talmente radicati in noi che non sapremmo farne a meno: da dove nasce questa dipendenza? Come possiamo recidere questo legame?</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi sono le catene che vincolano l???uomo e la donna in primo piano. Simboleggiano tutto ci?? che ci impedisce di essere quello che siamo chiamati ad essere. Gli anelli non sono cos?? stretti da impedire loro di liberarsi, a simboleggiare</p>
        
        ";
    }

break;

case 60:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Ostacolo</p>
<h4>GENERICO</h4>
<p>Non sono i nostri successi a darci la misura di noi stessi, ma gli ostacoli che abbiamo dovuto superare per ottenerli. La vita non ?? sempre facile, ma la determinazione con cui affrontiamo le difficolt?? pu?? fare la differenza.</p>
<h4>AMORE</h4>
<p>Qualcuno o qualcosa si intromette tra voi e un rapporto di coppia felice. Prima individuate di cosa o di chi si tratta e meglio sar??.</p>
<h4>LAVORO</h4>
<p>A volte, per quanto possiamo fare del nostro meglio, ci pu?? essere un concorrente, un rivale che ha la meglio, magari con qualche scorrettezza. Ci sono giorni in cui tutto quello che possiamo fare ?? farci forza e prepararci per la prossima sfida, sicuri che andr?? meglio.</p>
<h4>SE STESSI</h4>
<p>Gli ostacoli che pi?? ci rallentano sono quelli interiori. Cosa ci sta frenando? Cosa ci impedisce di essere pienamente noi stessi, pienamente realizzati?</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi ?? il bastone infuocato. Senza un???opposizione, i nostri successi non avrebbero valore, senza avversari, le vittorie non significherebbero nulla. Siamo grati alla vita anche per gli ostacoli che pone sul nostro cammino, perch?? sono quelli che ci permettono di crescere.</p>
        
        ";
    }

break;

case 61:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Materialismo</p>
<h4>GENERICO</h4>
<p>Il mondo a volte cerca di trascinarci gi??: battute di dubbio gusto, immagini violente, povert?? di spirito, degrado. Oggi in particolare devi saper tenere la testa fuor dal fango, non abbassarti al livello, talora pessimo, delle persone che potresti incrociare.</p>
<h4>AMORE</h4>
<p>Il sesso non pu?? e non deve essere l???unico perno su cui ruota una relazione. Se ci sono problemi in questa sfera ?? giusto cercare di porvi il rimedio, ma l???aspetto materiale di una relazione non pu?? mai essere l???unica soluzione.</p>
<h4>LAVORO</h4>
<p>Oggi un progetto troppo ambizioso rischia di essere ridimensionato, un obiettivo potrebbe non essere raggiunto. Non lasciarti scoraggiare, anche saper incassare con grazia i fallimenti o i rifiuti ?? una virt??.</p>
<h4>SE STESSI</h4>
<p>Quanto tempo e quante energie disperdiamo per cercare di soddisfare i nostri bisogni pi?? basilari? Sono certamente importanti, ma la vita non pu?? essere vissuta senza mai alzare gli occhi al cielo. Oggi ricordati di riservare un po??? di tempo ad interessi che non siano puramente materiali.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere sono le corna, che rappresentano l???istintivit?? che domina la ragione.</p>
        
        ";
    }

break;

case 62:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Ribellione</p>
<h4>GENERICO</h4>
<p>Non importa quanto pesanti possano sembrare le nostre catene, gravose le imposizioni, ingiusti gli ordini a cui dobbiamo obbedire: c????? sempre la possibilit?? di opporci, di sovvertire l???ordine costituito, di non fare ci?? che ci si aspetta da noi.</p>
<h4>AMORE</h4>
<p>Non si ?? obbligati ad accettare tutte le richieste di chi ci sta vicino. Chi tiene veramente a noi sa fino a che punto ci vogliamo spingere e cosa ci mette a disagio o ci costa un sacrificio eccessivo. Dire ???no??? non ?? solo liberatorio, pu?? aprire gli occhi anche al partner.</p>
<h4>LAVORO</h4>
<p>Gli ordini dei superiori o le richieste dei clienti non devono per forza essere seguite alla lettera. Oggi prenditi lo spazio per fare le cose a modo tuo, almeno un po???.</p>
<h4>SE STESSI</h4>
<p>Le tentazioni esistono, ma si possono vincere. Non sempre si esce vincitori da questa sfida, pertanto ?? bene scegliere con attenzione le proprie battaglie.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo per oggi ?? la stella a cinque punte rovesciata, simbolo del sovvertimento dell???ordine naturale delle cose, della ribellione all???ordine costituito, dell???istanza di vedere le cose da una diversa prospettiva.</p>
        
        ";
    }

break;


//End For DIAVOLO





//For LA TORRE
case 63:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? AVVERTIMENTO</p>
<h4>GENERICO</h4>
<p>Un evento improvviso, come un fulmine a ciel sereno, potrebbe sconvolgerti la vita e mandare all???aria i progetti quotidiani. Accetta e accogli la novit?? con meraviglia e curiosit?? anzich?? con timore.</p>
<h4>AMORE</h4>
<p>Che botta! ?? stato un colpo di fulmine o era nell???aria? Se oggi ricevi uno scossone, puoi scappare o lasciarti travolgere, in ogni caso le cose non torneranno pi?? come prima.</p>
<h4>LAVORO</h4>
<p>Un lampo di genio potrebbe risultare assai propizio. Se ti viene un???idea non tenerla per te: scrivila, condividila, proponila, mettila in pratica. Ti torner?? utile per il tuo lavoro.</p>
<h4>SE STESSI</h4>
<p>Ascolta i segnali che il tuo corpo ti invia. Spesso, i sintomi fisici, rivelano i messaggi della psiche. Se la mente ?? sgombra anche il corpo sta meglio.</p>
<h4>SIMBOLO</h4>
<p>IIl simbolo su cui puoi riflettere ?? IL FULMINE. Quella folgore che cade dall???alto e scoperchia la torre ci ricorda che certe volte ci servono degli scossoni per farci tornare coi piedi per terra.</p>
        
        ";
    }

break;

case 64:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? LIBERAZIONE</p>
<h4>GENERICO</h4>
<p>?? tempo di fare piazza pulita, mettere tutto sottosopra, buttare ci?? che non serve pi??. Se hai tempo fai un bel restyling, nella tua persona e/o nella tua casa.</p>
<h4>AMORE</h4>
<p>se oggi proprio non ce la fai a tenere dentro ci?? che provi, svuota il sacco, fai emergere tutto ci?? che hai tenuto rinchiuso. Fai solo attenzione a non ferire chi ti ama.</p>
<h4>LAVORO</h4>
<p>Oggi, sul lavoro, prova a uscire dagli schemi. Correre un piccolo rischio pu?? aiutarti a raggiungere un obiettivo che ti sei prefissato da tempo. Chi non risica, non rosica.</p>
<h4>SE STESSI</h4>
<p>Oggi, vecchi schemi mentali e dinamiche comportamentali obsolete potrebbero andarti stretti. Non sforzarti di accettarli se ti fanno stare male e ostacolano i tuoi progetti.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? l???ESPLOSIONE. Quando si accumula troppo, l???energia non scorre e la vita si complica. Questo accade sia per gli oggetti, che per i pensieri e le emozioni.</p>
        
        ";
    }

break;

case 65:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? RISOLUZIONE</p>
<h4>GENERICO</h4>
<p>Una situazione da tempo stagnante, oggi potrebbe sbloccarsi, provocando un certo scombussolamento nella routine. Quando torner?? la calma, i benefici saranno evidenti.</p>
<h4>AMORE</h4>
<p>Una crisi non ?? necessariamente un evento catastrofico. Se c????? insoddisfazione da parte di un partner o di entrambi, meglio chiarire una volta per tutte o rompere. A volte ?? necessario mettere tutto in gioco.</p>
<h4>LAVORO</h4>
<p>Sul posto di lavoro, oggi potresti venire considerato un rivoluzionario. C????? chi apprezzer?? i tuoi sforzi e chi far?? fatica a accettare i cambiamenti. Non lasciarti condizionare, segui il tuo impulso.</p>
<h4>SE STESSI</h4>
<p>Se proprio non riesci a risolvere un problema, valuta se non sia il caso di rifare tutto da capo. Subito pu?? sembrarti un???impresa faticosa, ma poi ti accorgerai che ne ?? valsa la pena e festeggerai.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? LA CORONA. Affrontare l???ignoto fa sempre paura, ma ?? l???unico modo per emanciparsi e trovare la propria strada.</p>
        
        ";
    }

break;

case 66:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? MURO</p>
<h4>GENERICO</h4>
<p>Va bene che hai fatto tanta fatica a arrivare dove sei arrivato, ma oggi fai attenzione a non erigere barriere invalicabili intorno a te, potresti allontanare chi ?? disposto ad ascoltarti.</p>
<h4>AMORE</h4>
<p>In amore, la Torre suggerisce di lasciare cadere il timore di essere giudicato. Chi, pi?? del partner, pu?? essere in grado di risollevarti il morale e farti capire quanto vali? Non c????? niente di male a mostrare le proprie fragilit?? e i lati vulnerabili del proprio carattere.</p>
<h4>LAVORO</h4>
<p>Oggi sul lavoro, sforzati di essere pi?? umile. Non vantarti dei tuoi traguardi, non snobbare chi non ?? ancora arrivato al tuo livello: il destino ?? ironico coi superbi, quando meno te lo aspetti potresti dover ripartire dal basso.</p>
<h4>SE STESSI</h4>
<p>Non esagerare con festeggiamenti e stravizi. Il fisico prima o poi ne risente, e quando meno te lo aspetti potrebbe presentarti il conto di una condotta dissipata.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? LA TORRE. Gli uomini che innalzarono la torre di Babele furono puniti per la loro tracotanza. Voler superare i propri limiti ?? sintomo di presunzione, la tracotanza spesso ci si ritorce contro.</p>
        
        ";
    }

break;


//End For LA TORRE





//For LE STELLE
case 67:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Novit??</p>
<h4>GENERICO</h4>
<p>Le Stelle ci portano novit??, l???acqua che la fanciulla versa ci parla di rinnovamento. Oggi ?? un buon giorno per accettare con entusiasmo un cambiamento alle porte.</p>
<h4>AMORE</h4>
<p>Non bisogna essere refrattari alle novit??, spesso un cambiamento ?? proprio quello che ci vuole per sbloccare una situazione lavorativa stagnante.</p>
<h4>LAVORO</h4>
<p>Non bisogna essere refrattari alle novit??, spesso un cambiamento ?? proprio quello che ci vuole per sbloccare una situazione lavorativa stagnante.</p>
<h4>SE STESSI</h4>
<p>Accogli con serenit?? i cambiamenti, rendili parte di te. Le Stelle oggi ti chiedono di fidarti di loro e di quello che il destino ha in serbo per te.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi ?? la stella a otto punte: Sirio. Cos?? come annunciava l???inondazione del Nilo, ora ci spinge a prepararci per le belle novit?? in arrivo e ad accogliere con fiducia e serenit?? ci?? che ci attende.</p>
        
        ";
    }

break;

case 68:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Possibilit??</p>
<h4>GENERICO</h4>
<p>Molteplici percorsi sono tracciati per noi tra le stelle, dobbiamo avere fiducia nella nostra capacit?? di trovare quello giusto. Nulla ci ?? precluso, se sappiamo verso dove rivolgere lo sguardo.</p>
<h4>AMORE</h4>
<p>Non accontentatevi. Mirate a quello che per voi ?? il meglio, seguite la stella polare dei vostri ideali.</p>
<h4>LAVORO</h4>
<p>Sul lavoro, i problemi non hanno necessariamente un???unica soluzione. Vagliate attentamente diverse strade prima di procedere. Non agite con impulsivit??, ma tracciate una mappa che vi aiuti a non smarrire direzione.</p>
<h4>SE STESSI</h4>
<p>Possiamo essere molteplici versioni di noi stessi: in questo giorno quale ???tu??? hai deciso di essere? Quel che siamo stati ieri non limita in alcun modo chi possiamo essere oggi e come saremo domani.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo di oggi ?? l???ibis, simbolo di preveggenza, che con il suo collo flessibile pu?? volgere lo sguardo in tutte le direzioni e conoscere le possibilit??, lasciando poi all???intuizione il compito di scegliere.</p>
        
        ";
    }

break;

case 69:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Serenit??</p>
<h4>GENERICO</h4>
<p>Il cielo ?? sereno e illuminato da stelle, gli auspici sono favorevoli, i problemi stanno per trovare una soluzione. Tutto quello che dobbiamo fare ?? non farci dominare dall???ansia, e lasciare che tutto vada come deve andare.</p>
<h4>AMORE</h4>
<p>Se una scelta vi porta ansia, evitatela. Scegliete il percorso che sentite dentro come quello pi?? giusto per voi.</p>
<h4>LAVORO</h4>
<p>Sul lavoro, la fretta ?? spesso cattiva consigliera. Prendetevi un momento di pausa, per analizzare serenamente la situazione. Se avete tenuto fede agli impegni e fatto ci?? che vi era stato richiesto, non avete motivo per preoccuparvi.</p>
<h4>SE STESSI</h4>
<p>Scaccia le preoccupazioni, porta il sereno nel cielo dei tuoi pensieri. La serenit?? deve essere la base da cui partire per impostare le tue giornate nel modo migliore.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere ?? la fanciulla che versa l???acqua, con la sua espressione serena ci mostra che con la protezione delle stelle non abbiamo nulla da temere.</p>
        
        ";
    }

break;

case 70:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Vocazione</p>
<h4>GENERICO</h4>
<p>Siamo tutti destinati a qualcosa di speciale. Dobbiamo saper abbracciare ci?? che ?? scritto nelle nostre Stelle personali, l???Universo ci chiama, spetta a noi rispondere.</p>
<h4>AMORE</h4>
<p>Le Stelle ci mandano segnali che indicano qual ?? il nostro destino in amore. Si tratta solo di fermarsi, cogliere ci?? che ci viene suggerito, senza lasciarci condizionare dai nostri desideri e dalle nostre consuetudini.</p>
<h4>LAVORO</h4>
<p>???Trova un lavoro che ti appassioni e non dovrai mai lavorare un giorno in vita tua???. Non ?? esattamente cos??, il lavoro porta con s?? i suoi pesi e i suoi carichi anche se coincide con la nostra pi?? grande passione, ma il consiglio rimane valido: solo dedicandoci a qualcosa che veramente ci appassiona abbiamo la speranza di realizzare qualcosa di buono.</p>
<h4>SE STESSI</h4>
<p>Non ?? sempre facile guardarsi dentro e capire qual ?? la giusta direzione da prendere. Abbiamo tutti una chiamata interiore, una visione che ci spinge, un sogno pi?? fondamentale degli altri.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo per oggi ?? ???il cielo stellato??? che ci ispira e ci protegge. Le stelle ci indicano il punto di arrivo del percorso a cui siamo chiamati.</p>
        
        ";
    }

break;


//End For LE STELLE



//For LA LUNA
case 71:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave di oggi ?? EMOTIVIT??</p>
<h4>GENERICO</h4>
<p>Oggi potresti essere particolarmente ricettivo e impressionabile. Meglio evitare situazioni ansiogene e tutto ci?? che ritieni possa urtare la tua sensibilit??.</p>
<h4>AMORE</h4>
<p>Se pensi che oggi il tuo partner sia diverso dal solito, prova a approfondire e chiedi spiegazioni. Forse, a incupirlo, ?? una preoccupazione, un timore, o magari ha fatto solo un brutto sogno. Il dialogo pu?? far tornare il sereno.</p>
<h4>LAVORO</h4>
<p>Sul lavoro, per oggi, ?? meglio non contare troppo sull???aiuto degli altri. Potrebbe bastare anche solo una piccola incomprensione per cambiare radicalmente il tuo umore e fomentare incomprensioni.</p>
<h4>SE STESSI</h4>
<p>Oggi tutti si confidano con te e ti chiedono consigli? Questo accade perch?? la tua forte ricettivit?? viene percepita anche dal prossimo. Mostrati comprensivo e accogliente, un giorno anche tu potresti aver bisogno di sfogarti con qualcuno.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? il GRANCHIO. Questo animaletto, cos?? indifeso dentro il suo esoscheletro, ci ricorda che dietro le apparenze pi?? forti e altere, pu?? nascondersi un???anima sensibile e delicata.</p>
        
        ";
    }

break;

case 72:
    {
        echo "
        <center>
    <h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? INDECISIONE.</p>
<h4>GENERICO</h4>
<p>Per trovare la soluzione a un problema, non fermarti a ci?? che appare in superficie, scava a fondo e cerca le ragioni nascoste che l???hanno causato, solo cos?? potrai fare definitivamente luce sulla questione.</p>
<h4>AMORE</h4>
<p>Prima di prendere decisioni affrettate, parla col partner e chiarisci, a volte bastano un fraintendimento o un???omissione per innescare timori spesso infondati.</p>
<h4>LAVORO</h4>
<p>Oggi al lavoro, pianifica scrupolosamente le tue strategie d???azione prima di iniziare a svolgere qualsiasi mansione. Risparmierai tempo e fatica.</p>
<h4>SE STESSI</h4>
<p>Ci sono parti di te che non mostri a nessuno perch?? temi che ti farebbero apparire fragile? E se fossero invece, proprio le parti migliori del tuo carattere, quelle cio?? che ti permetterebbero di risplendere se solo le palesassi? Prova a rifletterci su.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi meditare ?? LA LUNA. Come tutti sanno, il satellite ha due facce, una che palesa, e una che non mostra mai a nessuno. Ci ricorda che in tutti, anche nelle persone apparentemente pi?? limpide, ?? nascosta una duplice natura, una luminosa e accettabile, l???altra oscura e temibile.</p>
        
        ";
    }

break;


case 83:
    {
    echo "<center>
    <h2>Your Result Is</h2>
    </center>
    <h4>PAROLA CHIAVE</h4>
    <p>la parola chiave di oggi ?? OSCURIT??</p>
    <h4>GENERICO</h4>
    <p>Certe volte ?? consigliabile tenere il proprio parere per s??. Dice il detto: chi si fa i fatti suoi campa cent???anni.</p>
    <h4>AMORE</h4>
    <p>Oggi in amore, il clima ti sembra piuttosto freddo e distaccato? Non trarre conclusioni affrettate, aspetta con fiducia che il giorno volga al termine. Col calar delle tenebre la passione si riaccender??.</p>
    <h4>LAVORO</h4>
    <p>Oggi i tuoi progetti potrebbero non andare come dalle tue aspettative. Cerca di capire se c????? qualcuno che li ha deliberatamente ostacolati o se sei tu che devi rivedere il tuo modo di agire.</p>
    <h4>SE STESSI</h4>
    <p>Oggi potresti sentirti particolarmente attratto dal mistero e dalla magia. Approfondisci, potresti scoprire di avere una particolare predisposizione per le dottrine esoteriche e una certa dose di sensitivit??.</p>
    <h4>SIMBOLO</h4>
    <p>Il simbolo su cui puoi riflettere ?? IL MARE. Esso rappresenta la complessit?? della nostra mente: le onde in superficie sono i pensieri coscienti, mentre gli abissi simboleggiano le profondit?? dell???inconscio.</p>
    ";
    }
    
    break;
    
    // Missing cases  
    
    case 29:
    {
        echo "<center>
        <h2>Your Result Is</h2>
    </center>
    <h4>PAROLA CHIAVE</h4>
    <p>la parola chiave del giorno ?? IMMAGINAZIONE.</p>
    <h4>GENERICO</h4>
    <p>Se oggi proprio non ce la fai a uscire, non forzarti. Potrebbe essere terapeutico dormire un po??? di pi??, goderti la tua abitazione, sfogliare album pieni di ricordi.</p>
    <h4>AMORE</h4>
    <p>Il tuo rapporto di coppia potrebbe essere rivitalizzato da un progetto, come un viaggio, per esempio. Prenota adesso quella crociera romantica che tu e il partner avete sempre sognato, coraggio, che aspetti?</p>
    <h4>LAVORO</h4>
    <p>Sul lavoro, se puoi, lascia spazio alla tua creativit??, libera la fantasia, metti in pratica tutto ci?? che hai sempre desiderato e mai osato fare: potrebbe fruttarti e divertirti.</p>
    <h4>SE STESSI</h4>
    <p>Un sogno stanotte ti ?? rimasto particolarmente impresso? Non lasciare che la tua mente lo scordi, scrivilo, annota pi?? dettagli che puoi e cerca di capire quale messaggio vuole portare alla coscienza. Potrebbe celare soluzioni importanti.</p>
    <h4>SIMBOLO</h4>
    <p>Il simbolo su cui puoi riflettere oggi ?? I DUE LUPI. Rappresentano le parti pi?? istintive e selvagge della nostra personalit??. In genere cerchiamo di addomesticarle ma se impariamo ad ascoltarle e nutrirle possono guidarci e talora proteggerci.</p>";
    }
    
    break;

//End For LA LUNA



// Written By Sunny Bhai




//For IL MONDO
case 73:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Rinascita</p>
<h4>GENERICO</h4>
<p>Oggi ?? il giorno giusto per lasciarsi alle spalle i fardelli del passato. Il giorno in cui dare chiusura ad un pensiero, ad un progetto, ad un ciclo, per prepararsi a ripartire liberi da ci?? che ci ha appesantito il cammino finora.</p>
<h4>AMORE</h4>
<p>?? finalmente il momento per mettere la parola fine ad una discussione, per abbandonare un rancore, per concedere o per chiedere un perdono. Le colpe sono state ammesse e i peccati espiati, l???alba di un nuovo giorno sta per sorgere.</p>
<h4>LAVORO</h4>
<p>Potrebbe presentarsi l???occasione per porre finalmente rimedio a un errore, per riscattarsi da una mancanza, per chiudere un capitolo serenamente e prepararsi ad aprirne uno nuovo.</p>
<h4>SE STESSI</h4>
<p>Lasciarsi alle spalle i propri difetti per creare una nuova e migliore versione di noi stessi, questo ?? il processo di purificazione dell???anima a cui siamo chiamati. Lasciate andare le scorie e tutto ci?? che vi appesantisce: ?? indispensabile per rigenerarsi.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo che il Mondo ci offre per la riflessione ?? ???la forma ellittica della corona di alloro???, l???ogiva da cui nasce o rinasce l???anima del mondo. Indica la forza dell???energia creatrice.</p>";

}

break;

case 74:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Pienezza</p>
<h4>GENERICO</h4>
<p>Oggi non ?? un giorno per lasciare le cose a met??. Gli impegni devono essere rispettati, se inizi qualcosa arriva fino in fondo senza interruzioni.</p>
<h4>AMORE</h4>
<p>Il Mondo di una relazione ?? fatto da due persone che si completano a vicenda. Rifletti: come ti completa l???altra persona? Qual ?? invece il tuo contributo speciale alla coppia?</p>
<h4>LAVORO</h4>
<p>Il Mondo ti chiede di valutare ogni problema nella sua globalit??, senza necessariamente perdersi nei dettagli. A volte ?? necessario sollevarsi per guardare le cose da un punto di vista pi?? ampio e distaccato.</p>
<h4>SE STESSI</h4>
<p>Cosa ci fa sentire davvero completi? Cosa manca nella nostra vita per sentirci davvero noi? Da qualche parte dentro di noi c????? la consapevolezza di quello che davvero ci abbisogna, ma ?? necessario saper ascoltare questa voce interiore per non smarrirci
alla ricerca di cose che non ci appartengono veramente.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi sono ???i quattro elementi???, indicano la necessit?? di bilanciare armonicamente tutti gli aspetti della nostra vita, senza tralasciarne alcuno ma dando ad ogni cosa il giusto peso.</p>";
}

break;

case 75:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Traguardo</p>
<h4>GENERICO</h4>
<p>Il viaggio ?? importante, ma anche la destinazione conta. Oggi ?? il momento di dare la giusta conclusione ad un percorso.</p>
<h4>AMORE</h4>
<p>Una meta ?? stata raggiunta, un cammino ?? arrivato alla sua destinazione. Prendetevi un momento per riflettere, prima di scegliere un nuovo traguardo e ripartire.</p>
<h4>LAVORO</h4>
<p>?? facile crollare sotto il peso delle critiche, ma non si dovrebbe mai scordare i risultati raggiunti. Oggi focalizzatevi su quello che avete ottenuto, su tutto ci?? che siete riusciti a compiere e non su ci?? che ?? ancora da fare o che ci si aspetta da
voi.
</p>
<h4>SE STESSI</h4>
<p>La strada da percorrere per migliorarsi non ha mai un termine, ma oggi ?? il momento di pensare con soddisfazione alle tappe gi?? raggiunte, agli ostacoli superati, ai successi ottenuti.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? ???la corona di alloro???, indica il giusto riconoscimento per il coronamento delle proprie fatiche, l???avveramento di un desiderio, l???immortalit?? della gloria.</p>";
}

break;

case 76:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ??: Gioia</p>
<h4>GENERICO</h4>
<p>Piccoli o grandi, ogni giorno ci pu?? riservare attimi di gioia. L???importante ?? saperli cogliere, assaporarli, non lasciare che il peso della quotidianit?? ci impedisca di godere di un sorriso, di un tramonto o di un gesto gentile.</p>
<h4>AMORE</h4>
<p>C????? sempre qualcosa da celebrare: la prima volta in cui vi siete davvero sentiti vicini, l???ultimo traguardo tagliato insieme, la realizzazione di un desiderio comune. Non scordatevi di gioire insieme!</p>
<h4>LAVORO</h4>
<p>Magari non ve ne state rendendo conto, ma siete esattamente nel posto dove dovreste essere in questo momento.
</p>
<h4>SE STESSI</h4>
<p>Celebra qualcosa che sai fare alla perfezione, qualcosa per cui poter andare davvero orgogliosi.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? il ???movimento della danza???, indica la necessit?? di esprimere all???esterno la nostra gioia interiore, cos?? che tutto il nostro mondo possa esserne parte.</p>";
}

break;

//End For IL MONDO



//For IL GIUDIZIO
case 77:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? CONSAPEVOLEZZA.</p>
<h4>GENERICO</h4>
<p>?? la giornata perfetta per svolgere attivit?? di gruppo. Che ne dici di iscriverti in palestra, entrare in un coro o seguire un corso che ti interessa e diverte? Potresti farti nuovi amici e mettere alla prova le tue capacit??.</p>
<h4>AMORE</h4>
<p>Vivere con consapevolezza la propria relazione significa vederne i pregi e i difetti con oggettivit??, senza mistificazioni o idealizzazioni. Solo in tal modo entrambi i partner possono comprendersi e cercare di migliorarsi per l???altro.</p>
<h4>LAVORO</h4>
<p>Oggi il tuo lavoro potrebbe venire valutato e preso in esame. Se hai dato il meglio di te e fatto tutto quello che potevi fare, non avere ripensamenti e rimorsi: qualunque sia l???esito del giudizio, hai motivo di essere fiero di te.
</p>
<h4>SE STESSI</h4>
<p>Qualcuno oggi ti risulta insopportabile? Diventa consapevole del fatto che i difetti che vedi negli altri, spesso sono le parti del tuo carattere che non accetti e tendi a proiettare. Evita di giudicare il prossimo.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? IL CORPO. Prendere coscienza di esso, percepire ogni suo ritmo e funzione, permette di mantenerlo sano e in armonia col mondo circostante.</p>";
}

break;

case 78:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? MIGLIORAMENTO</p>
<h4>GENERICO</h4>
<p>Oggi, un sogno che hai sempre bramato, ma mai sperato si potesse realizzare, potrebbe diventare realt??. Se arriva una proposta, conviene cogliere la palla al balzo e accettarla.</p>
<h4>AMORE</h4>
<p>La giornata odierna ?? particolarmente favorevole per l???amore: i malintesi si appianano, le coppie si riscoprono, nuovi incontri si delineano all???orizzonte per chi ancora ?? in cerca dell???anima gemella.</p>
<h4>LAVORO</h4>
<p>Sul lavoro, ?? il momento di fare bilanci, apportare modifiche, eliminare ci?? che non serve pi?? e potenziare ci?? che ti permette di progredire. Ci sono possibilit?? di un avanzamento di carriera.
</p>
<h4>SE STESSI</h4>
<p>se certi vecchi schemi non fanno pi?? per te, non temere di cambiarli o liberartene. Anche se alcune persone potrebbero non comprendere il tuo cambiamento, vai avanti per la tua strada e fidati del tuo giudizio.</p>
<h4>SIMBOLO</h4>
<p>il simbolo su cui puoi riflettere ?? IL VESSILLO. La bandiera ?? considerata un simbolo di identit?? e appartenenza a una nazione o a un ideale. A livello psicologico rappresenta la profonda identificazione coi propri principi morali e valori.</p>";
}

break; 

case 79:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>la parola chiave di oggi ?? CHIAMATA.</p>
<h4>GENERICO</h4>
<p>Oggi ?? possibile che ti arrivi un messaggio che attendevi da tempo o una notizia che potrebbe cambiarti la vita futura. Controlla la posta, il telefono o la mail.</p>
<h4>AMORE</h4>
<p>Approfitta di una forte complicit?? col partner per vivere qualcosa di entusiasmante e vivificante insieme a lui nella giornata odierna. Potreste andare a un concerto, a ballare o in un locale in cui c????? musica dal vivo.</p>
<h4>LAVORO</h4>
<p>Sul lavoro potrebbero verificarsi cambiamenti sostanziali, sia per te che per i colleghi, se ne hai. ?? giunto il momento di dimostrare quanto vali.
</p>
<h4>SE STESSI</h4>
<p>?? giunta l???ora di prendere una decisione importante, anzi fondamentale. Non si pu?? pi?? procrastinare. Non sar?? facile forse, le responsabilit?? non sono poche, ma la tua capacit?? di giudizio ti far?? intraprendere la strada giusta.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere oggi ?? LA TROMBA. Rappresenta la vocazione, ovvero l???invito a manifestare la nostra vera essenza, i talenti o la missione di vita.</p>";
}

break;

case 80:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La parola chiave su cui puoi riflettere oggi ?? REDENZIONE</p>
<h4>GENERICO</h4>
<p>Oggi potrebbe essere la giornata ideale per sistemare la cantina o la soffitta. Chiss??, magari potresti trovare qualcosa che ritenevi di aver smarrito o addirittura un cimelio di famiglia.</p>
<h4>AMORE</h4>
<p>Se ultimamente la tua serenit?? di coppia era offuscata da ombre, oggi spariranno e ci?? che un tempo ti rendeva felice torner?? alla luce. La giornata si prefigura serena.</p>
<h4>LAVORO</h4>
<p>Finalmente, come per miracolo, puoi riprendere fiato. Oggi, sul lavoro, riuscirai a risolvere in un battibaleno questioni complicate, magari proprio le stesse che per molto tempo ti avevano rallentato o complicato la vita.
</p>
<h4>SE STESSI</h4>
<p>Oggi, se vuoi, contatta una persona che non sentivi da tempo. Se nutri dei sensi di colpa nei suoi confronti, ?? giunto il momento di chiedere scusa e fare ammenda. Non ?? facile, ma dopo ti sentirai pi?? leggero e fiero di te.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui puoi riflettere ?? I SEPOLCRI. Le tombe scoperchiate che compaiono in questo arcano ci dicono che, molto spesso, le questioni dimenticate, se non sono realmente chiuse e sepolte, trovano il modo di riaffiorare per essere definitivamente
comprese e risolte.</p>
";
}

break;


// End For IL GIUDIZIO




// For IL SOLE
case 81:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Purezza</p>
<h4>GENERICO</h4>
<p>Il Sole ?? una carta che ci parla di innocenza, di trasparenza, di mostrare le cose per quello che sono e di mostrarsi per ci?? che si ??.</p>
<h4>AMORE</h4>
<p>Tutto ?? puro per i puri di cuore. Non cercate di vedere ombre dove non ve ne sono.</p>
<h4>LAVORO</h4>
<p>Anche se i compromessi sono qualche volta necessari, ci sono principi di base su cui ?? giusto essere fermi. Talvolta, non ?? solo opportuno ma indispensabile rimanere fermi sulle proprie posizioni, specialmente quando si tratta di principi morali.</p>
<h4>SE STESSI</h4>
<p>CI portiamo dietro tante scorie emotive. Il Sole ci invita a scrollarsi di dosso i fardelli che ci appesantiscono l???anima, a ritrovare la purezza primigenia che ?? in tutti noi.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? ???il cavallo bianco???, il cui manto candido come la neve ci riporta alla necessit?? di ritrovare la nostra purezza interiore per completare il processo di illuminazione.</p>";
}

break;

case 82:
{
echo "<center>
<h2>Your Result Is</h2>
</center>
<h4>PAROLA CHIAVE</h4>
<p>La tua parola chiave per oggi ?? Successo</p>
<h4>GENERICO</h4>
<p>Il Sole ci dice che oggi ci sono tutti i presupposti perch?? qualcosa vada per il meglio, per noi o per qualcuno che ci ?? caro. Se c????? un giorno per osare, ?? proprio questo.</p>
<h4>AMORE</h4>
<p>?? un giorno propizio per pianificare qualcosa con il partner, per chiedere alla persona che vi interessa di uscire, per sentirsi appagati della propria situazione sentimentale.</p>
<h4>LAVORO</h4>
<p>Le soddisfazioni migliori sul lavoro non necessariamente passano per il portafoglio. La gratificazione del lavoro ben fatto, la stima di un collega o lo sguardo riconoscente di un cliente possono valere pi?? di qualsiasi aumento di stipendio??? in ogni caso,
oggi ?? un buon giorno per sfruttare un???occasione che si presenter??!</p>
<h4>SE STESSI</h4>
<p>La fiducia in s?? stessi ?? la chiave per raggiungere il successo nei propri progetti. Abbi fiducia in ci?? che sei e in quello che stai facendo: ?? il primo passo verso la vittoria.</p>
<h4>SIMBOLO</h4>
<p>Il simbolo su cui riflettere oggi ?? ???i girasoli???, che incarnano l???ottimismo che conduce al successo.</p>";
}

break;


//End For IL SOLE



//For LA LUNA




//End For LA LUNA




}

?>

</div>
</div>
<div class="row step" ng-show="website.step === 1">
<div class="col s12 m4 l4">
<h2 class="date-title">Day</h2>

<div class="input-box no-top-radius">
<p ng-repeat="day in website.days" class="input-radio">
<label style="width: 100%">
<input name="day" type="radio" id="{{day}}" value="{{day.day}}" ng-model="website.day" ng-change="website.checkDate()" />
<span>{{day.day}}</span>
</label>
</p>
</div>
</div>
<div class="col s12 m4 l4">
<h2 class="date-title">Month</h2>

<div class="input-box no-top-radius">
<p ng-repeat="month in website.months" class="input-radio">
<label>
<input name="month" type="radio" id="{{month}}" value="{{month.month}}" ng-model="website.month" ng-change="website.checkDate()" />
<span>{{month.month}}</span>
</label>
</p>
</div>
</div>
<div class="col s12 m4 l4">
<h2 class="date-title">Year</h2>

<div class="input-box no-top-radius">
<p ng-repeat="year in website.yearsRange(1920,2002)" class="input-radio">
<label>
<input name="year" type="radio" id="year{{year}}" value="{{year}}" ng-model="website.year" ng-change="website.checkDate()" />
<span>{{year}}</span>
</label>
</p>
</div>
</div>
</div>
<div class="row step" ng-show="website.step === 3">
<div class="col s12 m4">
<h2 class="date-title">First Name</h2>
<div class="input-box">
<input name="firstName" placeholder="Enter First Name" autocomplete="off" type="text" ng-init="website.firstName=''" ng-model="website.firstName" style="border-bottom: 1px solid #B99E6F!important;" />
</div>
<p class="error" ng-if="website.nameWarning === true">
{{website.nameWarningMessage}}
</p>
</div>
<div class="col s12 m4">
<h2 class="date-title">Last Name</h2>
<div class="input-box">
<input name="secondName" placeholder="Enter Last Name" autocomplete="off" type="text" ng-init="website.secondName=''" ng-model="website.secondName" style="border-bottom: 1px solid #B99E6F!important;" />
</div>
<p class="error" ng-if="website.surnameWarning === true">
{{website.surnameWarningMessage}}
</p>
</div>
<div class="col s12 m4">
<h2 class="date-title">Type</h2>
<div class="input-box">
<p class="input-radio">
<label>
<input name="genere" type="radio" id="donna" value="f" ng-model="website.genere" ng-init="website.genere=''" />
<span>Women</span>
</label>
</p>
<p class="input-radio">
<label>
<input name="genere" type="radio" id="uomo" value="m" ng-model="website.genere" ng-init="website.genere=''" />
<span>Men</span>
</label>
</p>
</div>
<p class="error" ng-if="website.genderWarning === true">{{website.genderWarningMessage}}</p>
</div>
<div class="col s12 m4"></div>
<div class="col s12 m4">
<a href="#" class="btn conferma" ng-class="{'pulsed':website.error === false}" ng-click="website.checkName()">CONTINUES</a>
</div>
<div class="col s12 m4"></div>
</div>
<div class="row step" ng-show="website.step === 5">
<div class="col s12">
<h2 class="date-title"> Email Address</h2>
<div class="input-box">
<input name="mail" placeholder="Enter Email" autocomplete="off" type="text" ng-model="website.mail" ng-init="website.mail=''" />
</div>
<p class="error" ng-if="website.error === true">{{website.errorMSG}}</p>
</div>
<div class="col s12">
<div class="input-box">
<p>
<label>
<input type="checkbox" ng-model="website.c_privacy" />
<span style="color: #484848;">*I have read the  <a href="privacy.html">privacy privacy </a></span>
</label>
</p>
<div class="divider"></div>
<p>
<label>
<input type="checkbox" ng-model="website.c_marketing" />
<span style="color: #484848;">I expersly consent to the processing of my data for  marketing process.</span>
</label>
</p>
</div>
</div>
<div class="col s12">
<a href="#" class="btn conferma" ng-class="{'pulsed':website.error === false}" ng-click="website.validationConfirm()">Confirm And Recive The Fortune Telling</a>
</div>
</div>
<div class="row step" ng-show="website.step === 6">
<div class="col s12">
<div class="request-error" ng-if="website.requestError">

</div>
<div class="pixel" ng-bind-html="website.pixel"></div>
<div class="message-box">
{{website.messageActive}}
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
<!-- <p>
The buyer or visitor is made aware that the owner of the domain will keep the information entered by the latter on the homepage of the site, and therefore gives his consent, after registering with www.dianaveggenza.com to welcome new ones from the latter.
proposals. This situation can be resolved by the visitor at any time and when he deems it appropriate by simply clicking on the link in each e-mail sent to him.
</p> -->
<p>
<a href="condizioni_vendita.html">General Conditions of Sale</a> -
<a href="privacy.html">Protection of personal data </a> -
<a href="cookie.html">Cookie policy</a>
</p>
</div>
</div>
<div class="cookie-box animated fadeInUp" ng-class="{'fadeOutDown': website.hideCookieBar == true}" on-scroll="website.acceptCookie()" style="background-color: rgba(42, 42, 42, 0.5)">
<p style="color: white;">This site uses cookies, including third parties, to send you advertising and services in line with your preferences. If you want to learn more or opt out of all or some cookies click here.</p>
<div class="btn" ng-click="website.acceptCookie()" style="background: linear-gradient(144.61deg, #FFFFFF -19.16%, #7C3F06 50.02%);
">I Accept</div>
</div>
<script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="985c3c2ab03b479baf3b7f32-|49" defer=""></script>
</body>
<script src="js/diana.js" type="985c3c2ab03b479baf3b7f32-text/javascript"></script>
<script type="985c3c2ab03b479baf3b7f32-text/javascript">
document.addEventListener('DOMContentLoaded', (event) => {
document.getElementsByTagName("body")[0].removeAttribute("style");
});
</script>

<!-- Mirrored from hosting-dailyhoroscope.com/landing-carte/diana/it/?n=&c=&e=&s=&id=&c_id=&r=dem_it_akl_001.php&p= by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 07:35:24 GMT -->
<!-- clock script -->
<script>
const clock = () => {
let date = new Date();
let clockface = document.getElementById("clock-face");
let loading = document.getElementById("loading");

if (date) {
clockface.style.display = "flex";
loading.style.display = "none";
} else {
clockface.style.display = "none";
loading.style.display = "flex";
}

let H = date.getHours();
let M = date.getMinutes();
let S = date.getSeconds();
animate(H, M, S);
};

const animate = (H, M, S) => {
let hour = document.getElementById("hour");
let minute = document.getElementById("minute");
let second = document.getElementById("second");

hour.style.transform = `rotate(${(H / 12) * 360}deg)`;
minute.style.transform = `rotate(${(M / 60) * 360}deg)`;

second.style.transform = `rotate(${(S / 60) * 360}deg)`;

if (S === 0) {
second.style.transitionDuration = "0s";
ticking();
} else {
second.style.transitionDuration = "0.2s";
}
};

setInterval(clock, 1000);
</script>


<!-- <script>
    $(window).unload(function() {
     var currentURL = window.location.href;
     var index = currentURL.indexOf("email.php");
     if(index > -1) {
         window.location.href = currentURL.substring(0, index);
     }
});
    </script> -->

   


</html>
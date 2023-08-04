<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vatavaran</title>
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css?family=DM+Sans:400,500|Jost:400,500,600&display=swap");

    html {
      height: auto;
      font-family: "Jost", sans-serif;
    }


    body {
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin: 0;
    }

    .blur {
      position: absolute;
      right: 0%;
      width: 35%;
      height: 100%;
      filter: blur(50px);
      backdrop-filter: blur(10px);
    }

    .temp {
      width: 10%;
      height: 20%;
      position: absolute;
      bottom: 10%;
      left: 10%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 9rem;
      font-weight: 600;
      color: white;
    }

    .place-info {
      width: 25%;
      height: 14%;
      position: absolute;
      display: flex;
      border: 10px solid white;
      border-style: none none none solid;
      border-left-width: 2px;
      bottom: 13%;
      left: 25%;
    }

    .place-mahiti {
      width: 70%;
      height: 100%;
      position: absolute;
      display: flex;
      flex-direction: column;
      margin-left: 1rem;
    }

    .place {
      position: relative;
      width: 100%;
      font-size: 2vw;
      white-space: nowrap;
      color: white;
      height: 60%;
    }

    .date {
      position: relative;
      color: white;
      width: 60%;
      font-size: larger;
      height: 40%;
      align-items: center;
      display: flex;
    }

    .status {
      position: absolute;
      display: flex;
      flex-direction: column;
      width: 30%;
      height: 100%;
      right: 0;
      justify-content: center;
      align-items: center;
    }

    .logo {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60%;
      width: 100%;
    }

    .condition {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 40%;
      width: 100%;
      color: white;
      font-size: large;
    }

    .search-box {
      position: absolute;
      display: flex;
      width: 28%;
      height: 10%;
      right: 3%;
      top: 8%;
      justify-content: center;
      align-items: center;
    }

    .search-icon {
      position: relative;
      width: 10%;
      height: 100%;

    }

    .common {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .search-line {
      position: relative;
      width: 100%;
      height: 100%;
      border: 1px;
      display: flex;
      align-items: flex-start;
      justify-content: flex-start;
    }

    .search-line input[type="text"] {
      display: flex;
      position: absolute;
      align-items: flex-start;
      justify-content: flex-start;
      width: 60%;
      left: 0;
      top: 0;
      height: 80%;
      font-family: "Jost", sans-serif;
      font-size: large;
      outline: none;
      background: none;
      border: 1px solid rgb(255, 255, 255);
      border-style: none none solid none;
      color: black;
    }


    .search-line input[type="text"]::placeholder {
      font-size: x-large;
      font-weight: 400;
      color: var(--black);
    }

    .search {
      position: absolute;
      width: 30%;
      height: 80%;
      right: 0;
      top: 0;
      bottom: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid black;
    }

    .search input:hover {
      cursor: pointer;
      color: white;
      letter-spacing: 2px;
    }

    .search input {
      width: 100%;
      height: 100%;
      background: none;
      color: rgb(0, 0, 0);
      border: none;
      font-size: x-large;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: 500ms;
    }

    .search-box svg {
      width: 40%;
      height: 40%;
      fill: rgb(255, 0, 0);
    }

    .line {
      position: absolute;
      width: 28%;
      height: 1%;
      right: 3%;
      top: 23%;
      border: 2px solid rgba(0, 0, 0);
      border-style: none none solid none;
      display: block;
    }

    .weather-details {
      position: absolute;
      display: block;
      width: 28%;
      height: 60%;
      right: 3%;
      top: 30%;
    }

    .name {
      position: relative;
      display: flex;
      font-size: x-large;
      font-weight: 400;
      color: var(--black);
      width: 100%;
      height: 20%;
    }

    .weather-info {
      position: absolute;
      display: flex;
      top: 10%;
      flex-direction: column;
      justify-content: space-around;
      align-items: left;
      width: 100%;
      height: 80%;
    }

    .weather-info div {
      position: relative;
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      width: 100%;
      height: 10%;
    }

    .weather-info div span {
      display: inline-block;
      position: absolute;
      right: 0;
      font-weight: 500;
    }

    .weather-info div span:after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: black;
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }

    .weather-info div span:hover:after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }

    .forcast {
      display: block;
    }

    .more {
      display: none;
    }

    .show-less {
      display: none;
    }

    .loading {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .loader {
      width: 120px;
      height: 75px;
      display: flex;
      flex-wrap: wrap;
      align-items: flex-end;
      justify-content: space-between;
    }

    .loader span {
      font-size: 22px;
      text-transform: uppercase;
      margin: auto;
    }

    .ball {
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background-color: rgb(14, 4, 4);
      animation: bounce .5s alternate;
      animation-iteration-count: infinite;
    }

    .ball:nth-child(2) {
      animation-delay: .16s;
    }

    .ball:nth-child(3) {
      animation-delay: .32s;
    }

    @keyframes bounce {
      from {
        transform: scaleX(1.25);
      }

      to {
        transform:
          translateY(-50px) scaleX(1);
      }
    }

    .try {
      display: none;
    }

    .container {
      width: 50%;
      height: 50%;
      border: 1px solid red;
    }

    .linee {
      position: absolute;
      width: 28%;
      height: 1%;
      right: 0;
      border: 2px solid rgba(0, 0, 0);
      border-style: none none solid none;
    }

    @media screen and (max-width: 700px) {
      html {
        font-family: "Jost", sans-serif;
      }

      body {
        -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin: 0;
      }

      .search-box {
        width: 90%;
      }

      .search {
        height: 60%;
        top: 1rem;
      }

      .search-line input {
        height: 60%;
        font-size: x-large;
      }

      .temp {
        position: fixed;
        left: 5rem;
        bottom: 20%;
        font-size: 7rem;
      }

      .place-info {
        bottom: 2rem;
        left: 10%;
        width: 90%;
        left: 5%;
        border-left-width: 3px;
        height: 9rem;
      }

      .place-mahiti {
        width: 90%;
        border-left-width: 10px;
        margin-left: 0.5rem;
        height: 100%;
      }

      .weather-details {
        display: none;
        top: 24%;
        width: 92%;
      }

      .date {
        width: 10rem;
        margin-left: 0;
        text-align: left;
        line-height: 37px;
        height: fit-content;
      }


      .place {
        margin-left: 0;
        font-size: 2rem;
        height: 43%;
      }

      .status img {
        width: 4rem;
        height: 4rem;
      }

      .condition {
        font-size: 1.3rem;
      }

      .status {
        height: 65%;
      }

      .blur {
        display: none;
        top: 19%;
        height: 72%;
        width: 100%;
      }

      .line {
        display: none;
        top: 20%;
        width: 92%;
      }

      .more {
        position: absolute;
        display: flex;
        width: 5rem;
        justify-content: center;
        align-items: center;
        font-size: 1.3rem;
        color: white;
        height: 24%;
        border: 1px solid black;
        right: 1rem;
        bottom: 0;
      }

      .show-less {
        display: flex;
        position: absolute;
        justify-content: center;
        align-items: center;
        bottom: 0;
        width: 100%;
        height: 15%;
      }

      .less {
        border: 1px solid black;
        text-align: center;
        width: 30%;
        height: 50%;
        display: flex;
        font-size: 1rem;
        justify-content: center;
        align-items: center;
        font-weight: 500;
      }

      .about {
        width: 100%;
        height: 80% !important;
      }

      .about-button {
        position: relative;
        width: 25%;
        font-size: 1rem !important;
        height: 8%;
      }

      .contactme {
        position: absolute;
        right: 0;
        width: 35%;
        height: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        opacity: 0;
        z-index: -9999;
      }

      .back-button {
        width: 25% !important;
        height: 35% !important;
        font-size: 1rem !important;
        font-weight: 500 !important;
      }

      .about-info {
        height: 85% !important;
        top: 0 !important;
        left: 5% !important;
      }

      .contact-buttons {
        bottom: 5% !important;
        overflow: auto !important;
      }

      .about-data {
        top: 5% !important;
    height: 65% !important;
      }
    }

    @media only screen and (max-width: 380px) {
      body{
        -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin: 0;
      }
      .about-info {
        height: 100% !important;
      }

      .about-data {
        top: 3% !important;
      }

      .contact-buttons {
        bottom: 13% !important;
      }
    }

    @media only screen and (max-width: 700px) and (min-width: 450px) {
      body{
        -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin: 0;
      }
      .temp {
        left: 5rem;
      }

      .date {
        width: 35%;
        align-items: baseline
      }

      .place-info {
        bottom: 2rem;
        height: 15%;
      }

      .about-info {
        animation: changeee 1.5s 1;
      }

      @keyframes changeee {
        0% {
          top: 50%;
        }

        100% {
          top: 5%;
        }
      }

    }

    .contactme {
      position: absolute;
      right: 0;
      width: 35%;
      height: 100%;
      justify-content: center;
      align-items: center;
      display: flex;
      opacity: 0;
      z-index: -9999;
    }

    .about-button {
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: larger;
      width: 20%;
      height: 10%;
      border: 1px solid black;
      background: none;
      bottom: 0;
      left: 0;
      font-weight: 500;
    }

    .about-button:hover {
      cursor: pointer;
    }

    .hover-underline-animation {
      display: inline-block;
      position: relative;
      text-decoration: underline;
    }

    .about-data a:after {
      background: none repeat scroll 0 0 transparent;
      bottom: 0;
      content: "";
      display: block;
      height: 2px;
      left: 50%;
      position: absolute;
      background: #fff;
      transition: width 0.3s ease 0s, left 0.3s ease 0s;
      width: 0;
    }

    .about-data a:hover:after {
      width: 100%;
      left: 0;
    }

    .about {
      position: absolute;
      right: 0%;
      width: 35%;
      height: 100%;
      display: none;
    }

    .about-info {
      position: absolute;
      right: 5%;
      top: 20%;
      width: 90%;
      height: 70%;

    }

    .about-data {
      position: absolute;
      right: 5%;
      top: 0;
      width: 90%;
      font-size: 1rem;
      height: 55%;
      overflow: auto;
      border: 2px solid black;
      border-style: none none solid none;
      animation: show 1.5s 1;
    }

    @keyframes show {
      from {
        top: 50%
      }

      to {
        top: 0%;
      }
    }

    .back-button {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 20%;
      height: 40%;
      border: 1px solid black;
      font-size: larger;
    }

    .back-button:hover {
      cursor: pointer;
    }

    .contact-buttons {
      position: absolute;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      flex-direction: column;
      bottom: 0;
      width: 100%;
      height: 20%;
      font-size: larger;
    }

    .contactform {
      position: absolute;
      width: 90%;
      height: 100%;
    }


    .socialmedia {
      position: relative;
      width: 100%;
      height: 10%;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
    }

    .media-icon {
      width: 10%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 60%;
      border: 1px solid black;
      border-radius: 50%;
    }

    .media-icon:hover {
      cursor: pointer;
    }

    .media-icon:hover .fab {
      background: linear-gradient();
      transform: rotate(360deg);
      box-shadow: 0px 2px 0px #fff;
    }

    .fab {
      transition: all .4s;
    }

    .fab:hover {
      opacity: .9;
      transform: rotate(360deg);
      box-shadow: 0px 0px 0px #fff;
    }

    .fab:hover .media-icon {
      border: none;
    }

    .media-icon a {
      color: white;
      text-decoration: none;
    }

    .formm{
      position: relative;
      top: 0;
      width: 100%;
      height: 80%;
    }
    .form{
      position: relative;
      top: 5%;
      width: 100%;
      justify-content: center;
      display: flex;
      height: 75%;
    }
    form{
      display: flex;
      width: 100%;
      flex-direction: column;
      justify-content: space-evenly;

    }
    .form input[type=text],
    input[type=tel]{
      width: 100%;
      height: 3rem;
      background: none;
      border: 1px solid white;
      border-style: none none solid none;
      font-family: "Jost", sans-serif;
      font-size: large;
      color: white;
      outline: none;
    }
    .form input[type=text]::placeholder,input[type=tel]::placeholder,textarea::placeholder{
      color: white;
    }

    textarea {
      width: 100%;
      outline: none;
      background: none;
      border: 1px solid white;
      border-style: none none solid none;
      overflow: auto;
      max-width: 100%;
      min-width: 100%;
      min-height: 7rem;
      max-height: 10rem;
      font-family: "Jost", sans-serif;
      font-size: large;
      color: white;
    }
    
    .user-name {
      width: 90%;
      display: flex;
      justify-content: center;
      height: 10%;
      position: relative;
      left: 5%;
    }
    .send{
      position: relative;
      top: 25%;
      display: flex;
    flex-direction: column;
    align-items: center;
    height: 25%;
    justify-content: space-evenly;
    }
    #sub{
      padding: 0px 0px ;
      margin: 0;
      outline: none;
      background: none;
    }
    @media only screen and (max-height: 500px) {
      .search {
    height: 85%;}
    .temp{
      bottom: 48%;
    font-size: 6rem;
    }
    }
  </style>
</head>

<body onload="javascript:myFunction()">

  <script>
    function myFunction() {

      <?php
      date_default_timezone_set("Asia/Kolkata");
      $apiKey = "ffcc2d148268fa34fa86195805e69345";


      if (isset($_POST['submit'])) {
        $cityname = ucfirst($_POST['name']);
      } else {
        $cityname = "Delhi";
      }


      $googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $cityname . "&lang=en&units=metric&APPID=" .  $apiKey;

      $ch = curl_init();

      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_VERBOSE, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $responce = curl_exec($ch);

      curl_close($ch);
      $data = json_decode($responce);
      $currenttime = time();
      $temp = $data->main->temp;
      $windspeed = $data->wind->speed * 3.6;
      $icon = $data->weather[0]->icon;
      $rain = "1h";
      $imageurl = "http://openweathermap.org/img/wn/" . $icon . "@2x.png";
      $pressure = $data->main->pressure;
      $time = $data->timezone / 3600;
      ?>

      timezone = '<?php echo $time; ?>';
      d = new Date();
      utc = d.getTime() + (d.getTimezoneOffset() * 60000);
      nd = new Date(utc + (3600000 * timezone));
      time = nd.toLocaleString();
      temperature = '<?php echo $temp; ?>';
      temp = parseInt(temperature);
      pressure = '<?php echo $data->main->pressure; ?>';
      windspeed = '<?php echo $windspeed; ?>';
      wind = parseInt(windspeed);
      check = '<?php echo $data->main->temp; ?>';




      tapman = Math.round(temp);
      const options = {
        weekday: "long",
        month: "short",
        day: "numeric",
      };
      
      date = nd.toLocaleString("en-US", options);
      date = date.concat(" ");
      vel = nd.toLocaleTimeString("en-US", {
        hour: "2-digit",
        minute: "2-digit"
      });
      vell = nd.toLocaleTimeString("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        hour12: false
      });
      hours = vell.substring(0, 2);

      hour = parseInt(hours);
      time = date.concat(vel);
      vaar = Math.round(wind);
      vaar = vaar + "Km/h";

      document.getElementById("temp").innerHTML = tapman;
      document.getElementById("wind").innerHTML = vaar;
      document.getElementById("time").innerHTML = time;


      <?php


      $weathercondition = $data->weather[0]->main;
      $weatherdescription = $data->weather[0]->description; ?>
      weathercondition = '<?php echo $weathercondition; ?>';
      weatherdescription = '<?php echo $weatherdescription; ?>';



      if (hour >= 18 || hour <= 6) {
        const collection = document.getElementsByClassName("display-data");
        collection[0].style.color = "white";
        const color = document.getElementsByClassName("weather-info");
        color[0].style.color = "white";

        const formrang = document.getElementsByClassName("form-color");
        formrang[0].style.color = "white";
        formrang[1].style.color = "white";
        formrang[2].style.color = "white";
        formrang[3].style.color = "white";
        formrang[4].style.color = "white";
        formrang[4].style.borderColor = "white";
        formrang[5].style.color = "white";
        formrang[5].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[6].style.color = "white";
        formrang[6].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[7].style.color = "white";
        formrang[7].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[8].style.color = "white";
        formrang[8].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[9].style.color = "white";
        formrang[9].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[10].style.color = "white";
        formrang[10].style.boxShadow = "0 0 20px 1px #ffffff12";
        formrang[11].style.color = "white";
        formrang[11].style.boxShadow = "0 0 20px 1px #ffffff12";
        document.getElementById("ba").style.borderColor = "white";

        document.getElementById("m").style.color = "white";
        document.getElementById("li").style.borderColor = "#e4ff00";
        document.getElementById("linee").style.borderColor = "#e4ff00";
        document.getElementById("about-info").style.borderColor = "#e4ff00";
        document.getElementById("weather-info").style.color = "white";
        document.getElementById("mm").style.color = "white";
        document.getElementById("back-button").style.borderColor = "white";
        document.getElementById("back-button").style.color = "white";
        document.getElementById("about-button").style.borderColor = "white";
        document.getElementById("contact-button").style.color = "white";
        document.getElementById("contact-button").style.borderColor = "white";
        document.getElementById("search").style.borderColor = "white";
        document.getElementById("less").style.borderColor = "white";
        document.getElementById("more").style.borderColor = "white";
        document.getElementById("about-info").style.color = "white";
        document.getElementById("hover-underline-animation").style.color = "white";

        if (weathercondition == 'Clear') {
          document.body.style.backgroundImage = "url('clear-night.jpg')";
        } else if (weathercondition == 'Haze') {
          document.body.style.backgroundImage = "url('haze-night.jpg')";
        } else if (weathercondition == 'Smoke') {
          document.body.style.backgroundImage = "url('smoke-night.png')";
        } else if (weathercondition == 'Mist') {
          document.body.style.backgroundImage = "url('mist-night.jpg')";
        } else if (weathercondition == 'Dust') {
          document.body.style.backgroundImage = "url('dust-night.jpg')";
        } else if (weathercondition == 'Fog') {
          document.body.style.backgroundImage = "url('fog-night.jpg')";
        } else if (weathercondition == 'Ash') {
          document.body.style.backgroundImage = "url('ash-night.jpg')";
        } else if (weathercondition == 'Squall') {
          document.body.style.backgroundImage = "url('squall-night.jpg')";
        } else if (weathercondition == 'Tornado') {
          document.body.style.backgroundImage = "url('tornado-night.jpg')";
        } else if (weathercondition == 'sand') {
          document.body.style.backgroundImage = "url('sand-night.jpg')";
        } else if (weathercondition == 'Thunderstorm') {
          document.body.style.backgroundImage = "url('Thunderstorm-night.jpg')";
        } else if (weathercondition == 'Drizzle') {
          document.body.style.backgroundImage = "url('drizzle-night.jpg')";
        } else if (weathercondition == 'Rain') {
          document.body.style.backgroundImage = "url('rain-night.jpg')";
        } else if (weathercondition == 'Snow') {
          document.body.style.backgroundImage = "url('snow-night.jpg')";
        } else if (weatherdescription == 'few clouds') {
          document.body.style.backgroundImage = "url('few clouds-night.jpg')";
        } else if (weatherdescription == 'scattered clouds') {
          document.body.style.backgroundImage = "url('few clouds-night.jpg')";
        } else if (weatherdescription == 'overcast clouds') {
          document.body.style.backgroundImage = "url('overcast clouds-night.jpg')";
        } else if (weatherdescription == 'broken clouds') {
          document.body.style.backgroundImage = "url('overcast clouds-night.jpg')";
        } else {
          document.body.style.backgroundImage = "url('sunny.jpg')";
        }
      } else {
        if (weathercondition == 'Clear') {
          document.body.style.backgroundImage = "url('Clear.jpg')";
        } else if (weathercondition == 'Haze') {
          document.body.style.backgroundImage = "url('haze.jpg')";
        } else if (weathercondition == 'Smoke') {
          document.body.style.backgroundImage = "url('smoke.jpg')";
        } else if (weathercondition == 'Mist') {
          document.body.style.backgroundImage = "url('mist.jpg')";
        } else if (weathercondition == 'Dust') {
          document.body.style.backgroundImage = "url('dust.jpg')";
        } else if (weathercondition == 'Fog') {
          document.body.style.backgroundImage = "url('fog.jpg')";
        } else if (weathercondition == 'Ash') {
          document.body.style.backgroundImage = "url('ash.jpg')";
        } else if (weathercondition == 'Squall') {
          document.body.style.backgroundImage = "url('Squall.jpg')";
        } else if (weathercondition == 'Tornado') {
          document.body.style.backgroundImage = "url('tornado.jpg')";
        } else if (weathercondition == 'sand') {
          document.body.style.backgroundImage = "url('sand.jpg')";
        } else if (weathercondition == 'Thunderstorm') {
          document.body.style.backgroundImage = "url('thunderstorm.jpg')";
        } else if (weathercondition == 'Drizzle') {
          document.body.style.backgroundImage = "url('Drizzle.jpg')";
        } else if (weathercondition == 'Rain') {
          document.body.style.backgroundImage = "url('Rain.jpg')";
        } else if (weathercondition == 'Snow') {
          document.body.style.backgroundImage = "url('Snow.jpg')";
        } else if (weatherdescription == 'few clouds') {
          document.body.style.backgroundImage = "url('few clouds.jpg')";
        } else if (weatherdescription == 'scattered clouds') {
          document.body.style.backgroundImage = "url('few clouds.jpg')";
        } else if (weatherdescription == 'overcast clouds') {
          document.body.style.backgroundImage = "url('overcast clouds.jpg')";
        } else if (weatherdescription == 'broken clouds') {
          document.body.style.backgroundImage = "url('overcast clouds.jpg')";
        } else {
          document.body.style.backgroundImage = "url('sunny.jpg')";
        }
      }



    }
  </script>

  <?php
  if ($pressure == true) {
    echo '<script>const res = "success"; </script>';
  } else {
    echo '<script>const yes = "no success";window.location.href="error.html";</script>';
  }


  if ($data->sys->country == true) {
    $country = $data->sys->country;
  } else {
    $country = "Undefined";
  }
  ?>
  <section class="forcast" id="forcast">
    <div class="temp" id="tapman"><span id="temp"></span><span>°</span></div>
    <div class="place-info" id="place-info">
      <div class="place-mahiti">
        <div class="place bavara"><?php echo $cityname; ?><span> ,<?php echo $country; ?></span></div>
        <div class="date bavara"><span>
            <div id="time"></div>
          </span></div>
      </div>
      <div class="status">
        <div class="logo">
          <img src="<?php echo $imageurl; ?> " alt="">
        </div>
        <div class="condition" id="weather-condition"><?php echo $data->weather[0]->main; ?></div>
      </div>
      <div class="more" id="more" onclick="jast()">More</div>
    </div>
    <div class="blur" id="blur"></div>
    <section class="display-data">
      <div class="search-box" id="search-box">
        <div class="search-line common">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" placeholder="Search a City" name="name" id="m">
        </div>
        <div class="search " id="search">
          <div><input type="submit" name="submit" value="Search" id="mm"></div>
          </form>
        </div>
      </div>

      <div class="line" id="li"></div>
      <div class="weather-details" id="weather-details">
        <div class="name">
          Weather Details</div>
        <div class="weather-info" id="weather-info">
          <div>Sky <span><?php echo $data->weather[0]->description; ?></span></div>

          <div>Humidity <span><?php echo $data->main->humidity; ?>%</span></div>
          <div>Wind <span id="wind"></span></div>
          <div>Visibility <span><?php echo $data->visibility / 1000; ?>Km</span></div>
          <div>Pressure <span><?php echo $data->main->pressure; ?>mb</span></div>
          <div>
            <div class="linee" id="linee"></div>
          </div>

        </div>
        <div class="show-less">
          <div class="less" onclick="less()" id="less"> Show Less</div>
        </div>
        <div class="about-button" id="about-button" onclick="showabout()">About
        </div>
      </div>
    </section>


  </section>

  <section class="loading">
    <div class="loader">
      <div class="ball"></div>
      <div class="ball"></div>
      <div class="ball"></div>
      <span>Loading...</span>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about-info" id="about-info">
      <div class="about-data">
        Hello everyone, <br> My name is Sairatna Kamble and I am a Front End Developer, also can do little bit of backend and trying to do it better. <br><br> This is a simple weather details showing website which take input city name as search query . The data on the website is being fetched from <a href="https://openweathermap.org/" class="hover-underline-animation" id="hover-underline-animation" style="text-decoration:none; color: black;"> openweathermap API </a>. This Website is created using HTML , CSS , JS and for backend I fetched the data using PHP . <br><br> If there are any queries related to website please contact . Thank You !
      </div>
      <div class="contact-buttons">
        <div class="contact-button back-button" id="contact-button" onclick="displaycontact()">Contact</div>
        <div class="back-button color-black" id="back-button" onclick="hideabout()">Back</div>
      </div>
    </div>
  </section>


  <section class="contactme" id="contactme">
    <div class="contactform" id="contactform">
      <div class="formm">
        <div class="form">
          <form>
            <div class="user-name">
              <input type="text" class="form-color" name="hehe" placeholder="Name" id="naav" title="Please Enter Your Name" required="">
            </div>
            <div class="email user-name">
              <input type="text" class="form-color" placeholder="Email" id="mail" title="Please Enter Your Email" required="">
            </div>
            <div class="phonenumber user-name">
              <input type="tel" class="form-color" placeholder="Phone No." pattern="[0-9]{10}" title="10 digit phone number" required="">
            </div>
            <div class="message user-name">
              <textarea required="" class="form-color" placeholder="Message" id="textarea" title="Please Enter Your Message"></textarea>
            </div>
            <div class="send user-name">
              <input type="submit" value="Submit" id="sub" class="form-color back-button" onclick="sendmsg()">
              <div class="back ba form-color back-button" id="ba" onclick="backfromcontact()">Back</div>
            </div>
          </form>
        </div>
      </div>
      <div class="socialmedia">
        <div class="whatsapp media-icon"><a href="https://api.whatsapp.com/send?phone=917498304051&amp;text=Hello%20%F0%9F%91%8B" class="form-color"><i class="fab fa-whatsapp"></i></a></div>
        <div class="twitter media-icon"><a href="https://twitter.com/ksairatna_37" class="form-color"><i class="fab fa-twitter"></i></a></div>
        <div class="facebook media-icon"> <a href="https://www.facebook.com/sairatna.kamble.77" class="form-color"><i class="fab fa-facebook-f"></i></a></div>
        <div class="linkdln media-icon"> <a href="https://www.linkedin.com/in/sairatna-kamble-95b546237/" class="form-color"><i class="fab fa-linkedin-in"></i></a></div>
        <div class="insta media-icon"><a href="https://www.instagram.com/ksairatna_37/?hl=en" class="form-color"><i class="fab fa-instagram"></i></a></div>
        <div class="mail media-icon"><a href="mailto:ksairatna37@gmail.com" class="form-color"><i class="fab fa fa-envelope"></i></a></div>
      </div>
    </div>
  </section>
  <script>
    function Searchfunction() {
      var searchin = document.getElementById("m").value;
      <?php
      $cityname = '<script type="text/javascript>
      document.write(searchin);
      </script>';

      ?>
      window.location.reload();
    }

    document.onreadystatechange = function() {
      if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector(".loading").style.visibility = "visible";
      } else {
        document.querySelector(".loading").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
      }
    };

    function showabout() {
      const collection = document.getElementsByClassName("display-data");
      collection[0].style.display = "none";
      document.getElementById("about").style.display = "block";
    }

    function hideabout() {
      const collection = document.getElementsByClassName("display-data");
      collection[0].style.display = "block";
      document.getElementById("about").style.display = "none";
    }

    function displaycontact() {
      document.getElementById("contactme").style.opacity = "1";
      document.getElementById("contactme").style.zIndex = "10000";
      document.getElementById("about").style.display = "none";
    }



    function sendmsg() {
      let text = document.getElementById("naav").value;
      let msg = document.getElementById("textarea").value;
      let mail = document.getElementById("mail").value;
      var win = window.open(`https://api.whatsapp.com/send?phone=917498304051&text=Hello%20%2C%20I%20am%20${text}.%20${msg}.%20This%20is%20my%20Email%20:%20${mail}.%20`, '_blank');
    }

    function backfromcontact() {
      document.getElementById("contactme").style.opacity = "0";
      document.getElementById("contactme").style.zIndex = "-9999";
      document.getElementById("about").style.display = "block";
    }
  </script>

  <script>
    if (window.screen.width <= 700) {
      document.getElementById("about").style.width = "100%";
      document.getElementById("contactme").style.width = "100%";
      document.getElementById("contactme").style.height = "72%";
      document.getElementById("contactme").style.top = "19%";
      document.getElementById("about").style.height = "72%";
      document.getElementById("about").style.top = "20%";
      document.getElementById("about-info").style.height = "63%";
      document.getElementById("about-button").style.width = "25%";
      document.getElementById("about-button").style.height = "8%";
      document.getElementById("about-button").style.left = "37%";
      document.getElementById("about-button").style.bottom = "-8%";
      document.getElementById("sub").style.width = "25%";

      function jast() {
        document.getElementById("place-info").style.display = "none";
        document.getElementById("tapman").style.display = "none";
        document.getElementById("weather-details").style.display = "block";
        document.getElementById("li").style.display = "block";
        document.getElementById("blur").style.display = "block";
      }

      function less() {
        document.getElementById("place-info").style.display = "block";
        document.getElementById("tapman").style.display = "flex";
        document.getElementById("weather-details").style.display = "none";
        document.getElementById("li").style.display = "none";
        document.getElementById("blur").style.display = "none";
      }
    }
    if (window.screen.width <= 380) {
      document.getElementById("about-info").style.top = "10%";
      document.getElementById("about-info").style.left = "4%";
      document.getElementById("about").style.height = "95%";
      document.getElementById("contactme").style.top = "10%";
      document.getElementById("contactme").style.height = "78%";
      document.getElementById("contactform").style.height = "90%";
      document.getElementById("contactform").style.top = "10%";
      document.getElementById("contactform").style.left = "3%";
      document.getElementById("about-info").style.left = "9%";
      document.getElementById("about-data").style.height = "70%";
      document.getElementById("contact-buttons").style.bottom = "5%";
      document.getElementById("contactform").style.width = "98%";
      document.getElementById("contactme").style.width = "107%";
      document.getElementById("contactme").style.right = "unset";
      document.getElementById("contactme").style.right = "none";

    }
  </script>

</body>

</html>
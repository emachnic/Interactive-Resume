<?php
  $active[$current] = "class=active";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="verify-v1" content="WUBoMtBhoxFhPnIX9DO1znqFtyyFmMc4pHnyaU99myE=" />
    <title>Evan Machnic - <?= ucwords($title); ?></title>
    <link rel="stylesheet" type="text/css" href="css/html5.css" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <script type="text/javascript">
      <!--
        var xmlhttp=false;
        try {
          xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(e){
          try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }catch(e){
            xmlhttp = false;
          }
        }
        if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
          xmlhttp = new XMLHttpRequest();
        }
        function makerequest(serverPage, objID){
          var obj = document.getElementById(objID);
          xmlhttp.open("GET", serverPage);
          xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              obj.innerHTML = xmlhttp.responseText;
            }
          }
          xmlhttp.send(null);
        }
      -->
    </script>

  </head>
  <body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"> </script>
    <div id="containerWrapper">
      <header>
        <p>
          <a href="http://tungle.me/emachnic" target="_blank">
            <img src="http://www.tungle.com/public/emachnic/busyicon" alt="Tungle Me" />
          </a>
        </p>
      </header>
      <div id="container">
        <nav>
          <ul>
            <li <?= $active[1]; ?>>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="http://broadmac.net/blog/blogs/about_me.php">About Me</a>
            </li>
            <li <?= $active[3]; ?>>
              <a href="education.php">Education</a>
            </li>
            <li <?= $active[4]; ?>>
              <a href="experience.php">Experience</a>
            <li <?= $active[5]; ?>>
              <a href="resume.php">Resume</a>
            </li>
            <li <?= $active[6]; ?>>
              <a href="portfolio.php">Portfolio</a>
            </li>
            <li <?= $active[7]; ?>>
              <a href="project.php">IT Project</a>
            </li>
            <li <?= $active[8]; ?>>
              <a href="organizations.php">Organizations</a>
            </li>
            <li <?= $active[9]; ?>>
              <a href="twitter.php">Twitter</a>
            </li>
            <li <?= $active[10]; ?>>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
          <p>
            <a href="http://www.linkedin.com/in/evanmachnic">
              <img src="images/btn_in_20x15.gif" alt="View Evan Machnic's profile on LinkedIn" />
            </a>
            <a href="http://www.facebook.com/emachnic">
              <img style="padding-right: 5px;" src="images/facebook-icon.png" alt="View Evan Machnic's profile on Facebook" />
            </a>
            <a href="http://twitter.com/emachnic">
              <img src="images/TwitterIcon.png" alt="Follow Evan Machnic on Twitter" />
            </a>
          </p>
        </nav>
        <article>

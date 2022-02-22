<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .slider {
    width: 500px;
    height: 300px;
    background-color: yellow;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0px;
    text-align: center;
    overflow: hidden;
  }
  .image-container {
    width: 1500px;
    background-color: pink;
    height: 300px;
    clear: both;
    position: relative;
    -webkit-transition: left 2s;
    -moz-transition: left 2s;
    -o-transition: left 2s;
    transition: left 2s;
  }
  .slide {
    float: left;
    margin: 0px;
    padding: 0px;
    position: relative;
  }
  #slide-1:target ~ .image-container {
    left: 0px;
  }
  #slide-2:target ~ .image-container {
    left: -500px;
  }
  #slide-3:target ~ .image-container {
    left: -1000px;
  }
  .buttons {
    position: relative;
    top: -80px;
  }
  .buttons a {
    display: inline-block;
    height: 15px;
    width: 15px;
    border-radius: 70px;
    background-color: lightgreen;
  }
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>
  <h2>--- Hotel Blue ---</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="meeting_events.php">Meetings and Events</a></li>
      <li><a href="login.php">Guest Login</a></li>
      <li><a href="search.php">Search hotel branch</a></li>
      <li><a href="about_us.php">About us!</a></li>
      <li><a href="ask_us.php">Any Questions ?</a></li>
      <li><a href="employee_login.php">Employee Login</a></li>
    </ul>
  </nav>

  <article>
  <img src="image/hotel_blue.jpg"width="100%" height="450px"/>

  </article>
</section>


</body>
<?php
  include("footer.php");
  ?>
  </html>

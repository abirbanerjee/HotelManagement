<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
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
    article {
      float: left;
      padding: 20px;
      width: 50%;
      background-color: #f1f1f1;
      height: 500px; /* only for demonstration, should be removed */
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }
    body {
      font-family: Arial, Helvetica, sans-serif;
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
          <li><a href="allguests.php">View all registered guest's contact information</a></li>
          <li><a href="addemployee.php">Go to employee management</a></li>
          <li><a href="booking.php">See all the bookings</a></li>
          <li><a href="readmessage.php">Queries</a></li>
        </ul>
      </nav>

      <article>
      <img src="image/admin.jpg"width="100%" height="450px"/>

      </article>
    </section>
  </body>
  <?php
    include("footer.php");
    ?>
</html>

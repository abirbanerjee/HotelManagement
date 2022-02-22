<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search hotel branches</title>
    <style>
    article {
      float: left;
      padding: 20px;
      width: 65%;
      background-color: #f1f1f1;
      height: 500px; /* only for demonstration, should be removed */
    }
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
    form {border: 3px solid #f1f1f1; align-content: center;}
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
        <form method="post" id="reg" name="reg" action="searchresult.php">
          <h2>Enter city or place to search:<input type="text" name="search" placeholder="City or place"></h2>
          <input type="submit" value="search">
        </form>
        <form method="post" id="reg" name="reg" action="attsearchresult.php">
          <h2>Enter a monument you want to visit:<input type="text" name="search" placeholder="Name of attraction"></h2>
          <input type="submit" value="search">
        </form>
      </article>
    </section>

  </body>
  <?php
    include("footer.php");
    ?>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CheapoMail</title>
    <link rel="stylesheet" href="styles.css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="loggedin.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="wrapper" class="container">
      <header>
        <h1>CheapoMail</h1>
        <p>
          Where we pay you to use our mail! :p 
        </p>
      </header>
      <nav>
        <ul>
          <li><a id="nav-home" href="home2.php">Home</a></li>
          <li><a id="nav-about" href="compose.php">Send Message</a></li>
          <li><a id="nav-logout" href="intermediate.php">Logout</a></li>
          <!--<li><a id="nav-msg" href="inbox.php?message"></a> </li>-->
        </ul>
      </nav>
      <main>
        <?php include 'home2.php'; ?>
      </main>
    </div>
  </body>
</html>
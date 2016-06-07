<?php
include("connect.php");

$game_id = intval($_REQUEST['game_id']);

$result = mysqli_query($db_conn, "SELECT * FROM games WHERE game_id='".$game_id."';");
if ($result->num_rows == 1) {
	$game = mysqli_fetch_array($result);
}
else {
	echo "That game was not found.";
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>RIC'S FLASH GAMES</title/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Richard's flash games</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Richard's Flash Games</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
	  
	  
	  <object width=800 height=400>
      <param name="movie" value="<?php echo $game['swf_url']; ?>" />
      <param name="menu" value="false" />
      <param name="quality" value="high" />
      <embed src="<?php echo $game['swf_url']; ?>" width=400 height=300  menu="false" quality="high" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
      </object>
	
	  

	  </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

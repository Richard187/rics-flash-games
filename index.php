<?php
include("connect.php");
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
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        
		<h1>Welcome to Richardz Flash Games</h1>
		<?php
		$result = mysqli_query($db_conn, "SELECT * FROM games;");
		while ($game = mysqli_fetch_array($result)) {
			echo '
			<div class="flash_game_link">
				<a href="game.php?game_id='.$game['game_id'].'">
				  '.$game['name'].'<br/>
				  <img src="'.$game['thumbnail'].'" class="flash_game_link_image" />
				</a>
			</div>';
		}
		?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
	
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>love calculator</title>
</head>
<body>
	<style type="">
		body{
			background-image: url(img/bg.jpg);
			background-repeat: no-repeat;
			font-family: sans-serif;
			font-size: 12px;
		}
		#one{
			font-family: verdana;
			font-size: 20px;
			color:     black;
			width:     800px;
			align-items: center;
			text-align: center;
			margin-left: 230px;
			margin-top: 50px;
		}
		#p{
			font-size: 40px;
		}

		.container {
			position: relative;
			text-align: center;
			color: white;
		}

		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 30px;
		}

		
	</style>

	<div id="one">

		<form action ="" method="post">
			<div id="man"><img src="img/man.png">
				Boy Name <input type="text" name="boyname" required>
			</div> 
			<br>
			<div id="woman"><img src="img/woman.png">
				Girl Name <input type="text" name="girlname" required>
			</div> <br>

			<button name="sub" type="submit" value="bar" > <img src="img/calculate.png"> </button>
			<br>

		</form>
		<div class="container">
			<br><img src="img/heart.png">
						<?php
			if (isset($_POST['sub']))

			{
				$boy=$_POST['boyname'];
				$girl=$_POST['girlname'];

				$rand=rand(40,100);

				echo  " <div class='centered'>$rand</div> ";

				$boyname=$_POST['boyname'];
				$girlname=$_POST['girlname'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp,  "$boyname  $girlname $rand ".PHP_EOL  );
				
				fclose($fp);
			}

			?>
		</div>
		
	</div>

	

	
	
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        //write your do-while loop below
            do {
            $roll1 = rand(1,6);
            $roll2 = rand(1,6);
            $rollT = $roll1+$roll2;
            if ($rollT !=7) {
              echo "Roll is $rollT <br>";
          }
          else {
              echo "roll is $rollT craps";
          }
        }
        while ($rollT != 7);
        
    ?>
    </body>
</html>
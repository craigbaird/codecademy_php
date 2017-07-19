<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
	//Add while loop below
    $pizzas = 0;
    while ($pizzas < 18){
        $pizzas ++;
        echo "<div class=\"pizza\"></div>";
    }
    ?>
    </body>
</html>
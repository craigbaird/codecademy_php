<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        //write your do-while loop below
        $theCount = 0;
        do {
            echo '<p>the loop loops</p>';
            $theCount ++;
        } while ($theCount < 5);    
    ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
        $height = 12;
        $width = 3;

        if ($height + $width < 10) {
            echo "medium";
        }
        elseif ($height + $width < 0) {
            echo "very small";
        }
        else {
            echo "big";
        }
    ?>
    </body>
</html>

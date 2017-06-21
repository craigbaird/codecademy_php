<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
      $pizzas = 5;
      switch($pizzas):
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
          echo "still hungry";
          break;
        case 5:
          echo "full";
          break;
        case 6:
        case 7:
        case 8:
          echo "stuffed";
          break;
        default:
          echo "too much pizza!";
      endswitch;
    ?>
	</body>
</html>

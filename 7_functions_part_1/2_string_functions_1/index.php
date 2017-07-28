<html>
  <p>
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myName = "Craig";
    $partial = substr($myName, 0, 3);
    print $partial;
    ?>
  </p>
  <p>
    <?php
    // Make your name upper case and print it to the screen:
    print strtoupper($partial);
    ?>
  </p>
  <p>
    <?php
    // Make your name lower case and print it to the screen:
    print strtolower($partial);
    ?>
  </p>
</html>
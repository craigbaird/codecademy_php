<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    $myName = "Craig";
    print strpos($myName, "a");
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos($myName, "q") === false) {
        print "Sorry, no 'q in 'Craig'";
    }
    ?>
    </p>
</html>
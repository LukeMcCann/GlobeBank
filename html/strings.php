<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <title>Untitled</title>
    </head>
    <body>
        <?php 
            echo("Hello world <br />");

            $greeting = "Hello ";
            $target = "World";
            $phrase = $greeting . " " . $target;

            echo($phrase);
        ?>
        <br />
        <?php
            echo "{$phrase} Again<br />";
            echo "{\$phrase} Again<br />"
        ?>
        <br />
        <br />
        <?php 
            echo "Functions: <br /><br />";
            echo "Initial string: ";
            $first = "The quick brown fox";
            $second = " jumped over the lazy dog.";

            $third = $first;
            # concatenate and assign
            $third .= $second;
            echo $third;
        ?>
        <br />
        Lowercase: <?php echo strtolower($third);?>
        <br />
        Uppercase: <?php echo strtoupper($third);?>
        <br />
        Uppercase first: <?php echo ucfirst($third);?>
        <br />
        Uppercase words:  <?php echo ucwords($third);?>
        <br />
    </body>
</html>
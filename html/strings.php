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
            echo "$phrase Again<br />";
        ?>
    </body>
</html>
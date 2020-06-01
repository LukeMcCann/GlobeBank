<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <title>Untitled</title>
    </head>
    <body>
        <?php 
            echo "Arrays <br /><br />";
            $numbers = array(1,2,3,4,5);
            echo $numbers[0];

            echo "<br />";

            $numbers[5] = 20;
            print_r($numbers);

            echo "<br /><br />";
            echo "Multidimensional Mixed Array: ";
            "<br />";
            $mixed = array(2, "meow", array("woof", 12, array("dimension3")));

            echo $mixed[2][2][0];

            echo "<br /><br />";

            # Array short notation (only usable after 5.4)
            $array = [1, 2, 3, ["dog", "cat", "mouse"]];

            print_r($array);
        ?> 
        <pre>
            <?php print_r($mixed); ?>
        </pre>

        <?php 
            echo "Associative Arrays: <br /><br />";
            $assoc = [
                "first_name"=> "Luke", 
                "last_name" => "McCann"
            ];

            $firstName = $assoc["first_name"];
            $lastName = $assoc["last_name"];
            echo $firstName . " " . $lastName;
            
            echo "<br /";

            $assoc["first_name"] = "Ben";
            print_r($assoc);

            echo $assoc[0]; # undefined 

            echo "<br />";
            $assocNumbers = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5];
            print_r($assocNumbers);
        ?>

    </body>
</html>
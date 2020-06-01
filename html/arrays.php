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

        <?php echo "<br /><br />Array Functions: <br /><br />";?>
        Count: <?= count($numbers); ?><br />
        Max: <?= max($numbers);?><br />
        Min: <?= min($numbers); ?><br />
        Sort: <?php rsort($numbers); print_r($numbers) ?>;<br />
        Reverse Sort: <?php rsort($numbers); print_r($numbers); ?><br />
        Implode: <?php echo $num_string = implode(" @ ", $numbers); ?><br />
        Explode: <?php print_r(explode(" @ ", $num_string)); ?><br />
        InArray-True: <?= in_array(20, $numbers); ?> <br />
        InArray-False: <?= in_array(100, $numbers); ?>
    </body>
</html>
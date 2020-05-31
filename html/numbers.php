<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <title>Untitled</title>
    </head>
    <body>
        <?php echo "Numbers <br />";?>
        <br />
        <?php 
            $var1 = 2;
            $var2 = 5;
        ?>
        Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - $var1; ?>
        <br />
        Ansolute value: <?php echo abs(0 - 3000); ?> 
        <br />
        Exponential: <?php echo pow(2, 8); ?> 
        <br />
        Square root: <?php echo sqrt(100);?>
        <br />
        Modulo: <?php echo fmod(20, 7); ?>
        <br />
        Random: <?php echo rand(); ?>
        <br />
        Random (min, max): 
        <?= 
            # <?= can be used for instant output instead of using 'echo', be wary when using this.
            rand(2, 30); 
        ?>
    </body>
</html>
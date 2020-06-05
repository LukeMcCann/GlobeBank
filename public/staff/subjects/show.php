<?php 
    # ternary conjunction (if isset id = id else id = 1)
    // $id = isset($_GET['id']) ? $_GET['id'] : '1';
    # php7 can do this even simpler using the null coalescing operator
    # check if val there, if it is use it else use second value instead
    $id = $_GET['id'] ?? '1';
    echo $id;
?>

<a href="show.php?name=<?php echo urlencode('John Doe');?>">Link</a><br />
<a href="show.php?company=<?php echo urlencode('Widgets&More');?>">Link</a><br />
<a href="show.php?query=<?php echo urlencode('!#*?');?>">Link</a><br />
<?php require_once('../../../private/initialize.php'); ?>

<?php 

    # ternary conjunction (if isset id = id else id = 1)
    // $id = isset($_GET['id']) ? $_GET['id'] : '1';
    # php7 can do this even simpler using the null coalescing operator
    # check if val there, if it is use it else use second value instead
    $id = $_GET['id'] ?? '1';

    # Anytime data is output we need to compensate for HTML special chars.
    # Cross-site scripting is where JS or other code is injected via the browser
    # if we don't protect against special chars or reserved characters the browser will read
    # this as valid code and execute it.
    echo htmlspecialchars($id);
?>

<a href="show.php?name=<?php echo urlencode('John Doe');?>">Link</a><br />
<a href="show.php?company=<?php echo urlencode('Widgets&More');?>">Link</a><br />
<a href="show.php?query=<?php echo urlencode('!#*?');?>">Link</a><br />
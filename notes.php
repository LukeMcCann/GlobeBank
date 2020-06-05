<<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>URL Parameters</h1>
        <p>
            URL parameters are passed after the "?" symbol in  a url. 

                somepage.php?page=2

            in this example page=2 is the parameter being passed. 
            Multiple parameters may also be separated out using "&"
                
                somepage.php?category=7&page=3

            URL parameters allow us to pass data between pages via links.
            When a new page request is received PHP automatically places 
            all parameters sent into an associative array where they are 
            accessible.

            This array is known as a "Super Global Variable" all super globals 
            contain an underscore at the beginning and consist of all caps. 
            
                e.g. $_GET

            Super globals are always available in all variable scopes.
            PHP sets the values of these super globals before processing
            the page code. 

            these can be accessed in the same manner you may access any other array:

            <code><?php echo "<?php \$page = \$_GET['page']; ?>"?></code>

            This asssigns the variable "page" to the value of "page" from our super global
            associative array, the vlaue attained from super globals are always strings. 
        </p>
        
        <script src="" async defer></script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $page = filter_input(INPUT_GET, 'page');
        $view = filter_input(INPUT_GET, 'view');
        
        echo '<h1>', $view, ' - ', $page, '</h1>';
        
        ?>
        
        
        <a href="?page=1&view=images">View Images</a>
        
        
    </body>
</html>

<?php
require 'connection.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Edit searched table data</title>
        <link rel='stylesheet' href='../../css/tables.css'>
    </head>
    <body>
        <form action='editData.php' method='GET'>
        <input type="text" name="item_value" placeholder="enter new value for item"/>
        <input type='hidden' name='item_id' value="<?php echo $_GET['item_id'];?>">
        <input type='submit' value='Change'/>
        </form>
    </body>
</html>

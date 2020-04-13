<?php
require 'connection.php';
if(empty($_GET['item_value'])){
    echo "
    No value in input<br/>
    <a style='text-decoration: none;' href='#'onclick='history.go(-2)'>Back to results</a>";
}
else
{
$itemValue = mysqli_real_escape_string($conn, $_GET['item_value']);
$id = $_GET['item_id'];
$query = mysqli_query($conn, "UPDATE list_values
                              SET value = '$itemValue'
                              WHERE item_id = $id");
if($query)
{
    echo "Value changed";
    echo "<a style='text-decoration: none;' href='#'onclick='history.go(-2)'>Back to results</a>";
}
else
{
    echo "Value can't be changed";
}

}

?>

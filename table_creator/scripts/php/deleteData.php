<?php

echo "<link rel='stylesheet' href='../../css/tables.css'>";
require 'connection.php';
if(isset($_GET['item_id']))
{
   $id = $_GET['item_id'];
   $query = mysqli_query($conn, "DELETE FROM list_values
                                 WHERE item_id = $id");
if($query)
{
  echo "record deleted";
  echo "<a href='list_view.php'>Go to ul view</a>";
}

else
{
  echo "Value can't be deleted";
}
}

?>

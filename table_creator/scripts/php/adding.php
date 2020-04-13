<?php
if(!isset($_POST['liValues'], $_POST['listHeader']))
{
  echo "You didn't entered values";
}
else
{
    require 'connection.php';
    $liName = mysqli_real_escape_string($conn, $_POST['listHeader']);
    $liData = $_POST['liValues'];
    $sql1 = mysqli_query($conn, "INSERT INTO list_headers (title) VALUES('$liName')");
    if(!$sql1)
    {
      echo "error - can't add header to db";
    }
    else
    {
        echo "Header list: ". $liName;
        echo "<br/>";
    }

    $lastid = mysqli_insert_id($conn);
    foreach($liData as $value)
    {
        $value = mysqli_real_escape_string($conn, $value);
        $sql2 = mysqli_query($conn, "INSERT INTO list_values(list_id, value) VALUES($lastid, '{$value}')");
        if(!$sql2)
        {
            echo "We can't add li values for your db";
        }
        else
        {
            echo "<br/>";
            echo "Value for that list added to db: ". $value;
            echo "<br/>";
        }
    }
    echo "
    <br/>
    <link rel='stylesheet' href='../../css/tables.css'>
    <a href='list_view.php'>Go to ul view</a>";
}
exit;
?>

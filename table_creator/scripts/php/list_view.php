<?php
require 'connection.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>List view</title>
        <link rel='stylesheet' href='../../styles/tables.css'>
    </head>
    <body>
        <form action='showSearchDetails.php' method='GET'>
        <input type='text' name='search'/><br/>
        <input type='submit' value='Search data'/>
        </form>
        <br>
    </body>
</html>
<?php
$checkRows = mysqli_query($conn, "SELECT title, list_id from list_headers");
if($checkRows){

    echo "<table class='list-view-table'>
    <thead>
     <tr>
      <th>TITLE</th>
      <th>LIST ID</th>
     </tr>
    </thead>";

    echo "<tbody>";
  while($row = mysqli_fetch_assoc($checkRows))
  {
      echo "<tr>";
      echo "<td>" . $row["title"] . "</td>";
      echo "<td>" . $row["list_id"] . "</td>";
      echo "</tr>";
  }
    echo "</tbody>";
    echo "</table>";

  mysqli_free_result($checkRows);
}
else {
    echo "Nie ma takich rekordow";
}

mysqli_close($conn);
echo "<br/>"."<br/>";
echo "<a href='../../index.html'>Back to table creator</a>";
?>

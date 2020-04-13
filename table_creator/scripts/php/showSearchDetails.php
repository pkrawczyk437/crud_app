<?php
require 'connection.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Search input result page</title>
        <link rel='stylesheet' href='../../styles/search_result.css'>
    </head>
    <body>
        <a class='hiperlink1' href='list_view.php'>Back to searching</a>
        <a class='hiperlink2' href='../../index.html'>Table creator</a>
    </body>
</html>

<?php
if(!isset($_GET['search'])){
    echo "Please add some value to search";
}
else {
    $searchValue = (int)$_GET['search'];
    $sql = mysqli_query($conn, "SELECT list_values.item_id, list_values.value, list_headers.list_id
                                FROM list_values
                                LEFT JOIN list_headers
                                ON list_values.list_id = list_headers.list_id
                                WHERE list_values.list_id = $searchValue");
    if(mysqli_num_rows($sql) > 0) {
        echo "<div class='table-container'>
        <table>
            <thead>
              <tr>
                <th style='white-space: nowrap;'>ITEM ID</th>
                <th>VALUE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            </thead>
        </div>";

        "<tbody>";

    while($row = mysqli_fetch_assoc($sql)){
        echo "<tr>";
        echo "<td>" . $row["item_id"] . "</td>";
        echo "<td>" . $row["value"] . "</td>";
        echo '<td><a class="edit_delete" href="editForm.php?item_id=' . $row['item_id'] . '">Edit</a></td>';
        echo '<td><a class="edit_delete" href="deleteData.php?item_id=' . $row['item_id'] . '">Delete</a></td>';
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    }
    else
    {
        echo "<br/>"."<br/>";
        echo "No data finded with that pattern";
    }
}
?>

<!DOCTYPE HTML><?php
$conn = mysqli_connect("localhost", "root", "", "lists_db");
if(!$conn) {
    echo "Connection with database failed";
}
mysqli_set_charset($conn, "utf8mb4");
?>

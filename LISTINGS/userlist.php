<?php

require_once("connectDB.php");

$query = "SELECT * FROM users";

$result = $conn->query($query);

//var_dump($result);
//var_dump($conn);

while ($row = $result->fetch_row()) {
    echo "<p>";
    foreach($row as $field) {
        echo $field." - ";
    }
    echo "</p>";
}

$result->data_seek(0);

while ($row = $result->fetch_object()) {
    echo "<p>";
    echo $row->nome." ".$row->apelido;
    echo "</p>";
}

?>
<?php 

$conn = mysqli_connect('localhost', 'root');

mysqli_select_db($conn, 'virtual');

if ($conn) {
    echo "conencted";
}else{
    echo "Not Connected";
}


?>
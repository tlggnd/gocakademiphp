<?php

try {
    $db=new PDO("mysql:host=localhost;dbname=db_gocakademi", "root", "");
    // echo "bağlantı başarılı";
}
catch (PDOExpception $e) {
    echo $e->getMessage();
}


?>
<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT doc.*,dep.name As depname FROM tbl_doctor As doc 
        INNER JOIN tbl_department As dep
        ON doc.department_id = dep.id
");

$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($doctorList);



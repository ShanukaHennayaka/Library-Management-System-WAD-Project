<?php
require './classes/DbConnector.php';
use classes\DbConnector;
$dbcon = new DbConnector();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET["id"];
        try {
                $con = $dbcon->getConnection();
                $query = "DELETE FROM book WHERE Book_Id=?";
                $pstmt = $con->prepare($query);
                $pstmt->bindValue(1, $id);
                $pstmt->execute();
                if($pstmt->rowCount() > 0){
                    header("Location: Dashboard.php");
                }
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }

        ?>
    </body>
</html>



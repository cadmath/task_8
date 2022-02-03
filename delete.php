<?php
require_once 'db.php';

    $id = $_GET['id'];
    $sql_ins = 'DELETE FROM `task` WHERE id=:id';
    $pre = $db->prepare($sql_ins);
    $alert = $pre->execute(['id'=>$id]);
    
    if($alert){
        header('Location: task_8.php');
    }else{
        echo '<script>alert(\'Ошибка при удалении\')</script>';
    }
?>
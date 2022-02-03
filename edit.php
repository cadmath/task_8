<?php
require_once 'db.php';


$id = $_GET['id'];
$sql = 'SELECT * FROM task WHERE id = :id';
$prepare = $db->prepare($sql);
$prepare->execute(['id' => $id]);
$arr_user = $prepare->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Список дел</title>
	<style>
	.container{
        margin-top: 50px;
        width: 25%!important;
    }
    .ot{
        margin-top: 10px;
    }
	</style>
</head>
<body>    
<div class="container">
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$arr_user['id']?>">
    <div class="form-group">
        <label for="formGroupExampleInput">First Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name='fname' value="<?=$arr_user['First_Name']?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Last Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name='lname' value="<?=$arr_user['Last_Name']?>">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Username</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" name='uname' value="<?=$arr_user['Username']?>">
    </div>
    <button type="submit" name="sendTask" class="btn btn-success ot">Отправить</button>
    </form>
</div>


</body>
</html>
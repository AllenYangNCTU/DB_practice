<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        label{
            display: block;
            padding: 4px;
        }

        label input{
            padding:3px;
            font-size:1.2rem;
        }
    </style>
</head>
<body>
    <h1>Edit</h1>
    <?php
    $id = $_GET['id'];
    $dsn = "mysql:host=localhost;charset=utf8;dbnmae=school";
    $pdo = new PDO($dsn, "root", "root");
    $sql = "select * from `students` where `id` = '$id'";
    $student = $pdo->query($sql)->fetch();
    ?>
    <form action="update.php" method="post">
        <label for="">StudentID         <input type="text" name="uni_id" id="" value="<?=$student['uni_id'];?>"></label>
        <label for="">SeatNO            <input type="text" name="seat_num" id="" value="<?=$student['seat_num'];?>"></label>
        <label for="">Name              <input type="text" name="name" id="" value="<?=$student['name'];?>"></label>
        <label for="">Birthday          <input type="text" name="birthday" id="" value="<?=$student['birthday'];?>"></label>
        <label for="">Identification    <input type="text" name="national_id" id="" value="<?=$student['national_id'];?>"></label>
        <label for="">Address           <input type="text" name="address" id="" value="<?=$student['address'];?>"></label>
        <label for="">parents           <input type="text" name="parent" id="" value="<?=$student['parent'];?>"></label>
        <label for="">Phone             <input type="text" name="telefone" id="" value="<?=$student['telefone'];?>"></label>
        <label for="">Major             <input type="text" name="major" id="" value="<?=$student['major'];?>"></label>
        <input type="hidden" name="id" value = "<?=$id;?>">
        <input type="submit" value="Update">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
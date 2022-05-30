<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add.php</title>
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
    <h1>add new data</h1>
    <form action="store.php" method="post">
        <label for="">StudentID         <input type="text" name="uni_id" id=""></label>
        <label for="">SeatNO            <input type="text" name="seat_num" id=""></label>
        <label for="">Name              <input type="text" name="name" id=""></label>
        <label for="">Birthday          <input type="text" name="birthday" id=""></label>
        <label for="">Identification    <input type="text" name="national_id" id=""></label>
        <label for="">Address           <input type="text" name="address" id=""></label>
        <label for="">parents           <input type="text" name="parent" id=""></label>
        <label for="">Phone             <input type="text" name="telefone" id=""></label>
        <label for="">Major             <input type="text" name="major" id=""></label>
        <label for="">Junior high school<input type="text" name="secondary" id=""></label>
        <input type="submit" value="New">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
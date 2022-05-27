<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school2";
    $pdo = new PDO($dsn,'root','root');
    $sql = "SELECT * FROM `students`,`dept` where `dept`.`id` = `students`.`dept`";
    $rows = $pdo->query($sql)->fetchAll((PDO::FETCH_BOTH));
    // print($rows[0][3]);
    // print("<br>");
    // print($rows[0]['id']);
    print("<pre");
    print_r($rows);
    print("</pre>");
    ?>
</body>
</html>
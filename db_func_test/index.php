<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <style>
        h1,h2,h3,h4{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            border:3px solid blue;
            margin: auto;
        }
        table td{
            padding:0.5rem;
            border:1px solid #aaa;
        }
        table tr:nth-child(odd){
            background: lightgreen;
        }
        table tr:nth-child(even){
            background: lightcyan;
        }
        table tr:hover{
            background: lightcoral;
        }

    </style>
</head>
<body>
    <h1>homepage</h1>
    <?php
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn,"root","root");
    $sql = "select * from `students`";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h3><button><a href="add.php">Add new data</a></button></h3>
    <h3><form action="add.php" method="get"><button>Add new data</button></form></h3>
    <h3><button onclick="location.href='add.php'">Add new data</button></h3>
    <table>
        <tr>
            <td>序號</td>
            <td>學號</td>
            <td>學生姓名</td>
            <td>科系</td>
            <td>父母</td>
            <td>畢業國中</td>
            <td>操作</td>
        </tr>
        <?php
        foreach($rows as $key => $row){
            print("<tr>");
                print("<td>{$row['id']}</td>");
                print("<td>{$row['uni_id']}</td>");
                print("<td>{$row['name']}</td>");
                print("<td>{$row['major']}</td>");
                print("<td>{$row['parent']}</td>");
                print("<td>{$row['secondary']}</td>");
                print("<td>");
                print("<button><a href='edit.php?id={$row['id']}'>edit</a></button>");
                print("<button><a href='delete.php?id={$row['id']}'>delete</a></button>");
                print("</td>");
            print("</tr>");
        }
        print("</table>");
        ?>
    </table>
</body>
</html>
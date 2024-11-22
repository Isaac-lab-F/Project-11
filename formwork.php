<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <style>
        a {
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $volume=$_POST["volume"];
        $gender = $_POST["sex"];
        $age = $_POST["age"];
        $lang = $_POST["Ki"];
        $level = $_POST["level"];

    }
    ?>
    <table border="2px" cellspacing="0px" cellpadding="6px">
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Password
        </th>
        <th>Volume</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Laguage</th>
        <th>Level</th>
    </tr>
        <tr>
        <td><?php echo $firstName ?></td>
        <td><?php echo $lastName ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $password ?></td>
        <td><?php echo $volume ?></td>
        <td><?php echo $gender ?></td>
        <td><?php echo $age ?></td>
        <td><?php echo implode(", ",$lang) ?></td>
        <td><?php echo $level ?></td>
        

    
    
    </table>
    <pre>
    <a href="formwork.html">Previous Page</a>
    
   <a href="docs.html">Next Page..</a>
   </pre>
</body>
</html>

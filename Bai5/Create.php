<?php
include_once "Employee.php";
include_once "Data.php";
$data = new Data();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="surname">
    <input type="text" name="name">
    <input type="text" name="dob">
    <input type="text" name="address">
    <input type="text" name="position">
    <button>Create</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $surname = $_REQUEST["surname"];
    $name = $_REQUEST["name"];
    $dob = $_REQUEST["dob"];
    $address = $_REQUEST["address"];
    $position = $_REQUEST["position"];
    $employee1 = new Employee($surname,$name,$dob,$address,$position);
    $data->addNewEmployee($employee1);
    header("location:index.php");
}

?>
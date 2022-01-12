<?php
include_once "Data.php";
include_once "Employee.php";

$data = new Data();
$employees = $data->loadData();
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
    <table border="1px" style="border-collapse: collapse" width="100%">
        <thead>
        <tr>
            <th>Họ</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Vị trí công việc</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo $employee->surname ?></td>
                <td><?php echo $employee->name ?></td>
                <td><?php echo $employee->dob ?></td>
                <td><?php echo $employee->address ?></td>
                <td><?php echo $employee->position ?></td>
                <td><a href="Create.php">tao employee</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </body>
    </html>
<?php

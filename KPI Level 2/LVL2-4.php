<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php
$tabel = [
    [
        "employee" => "E001",
        "name" => "John Doe",
        "26-12-2022" => "Hadir",
        "27-12-2022" => "Hadir",
        "28-12-2022" => "Hadir",
        "29-12-2022" => "Hadir",
        "30-12-2022" => "Hadir",
        "31-12-2022" => "Hadir"
    ],
    [
        "employee" => "E002",
        "name" => "Lyra",
        "26-12-2022" => "Hadir",
        "27-12-2022" => "Hadir",
        "28-12-2022" => "Sakit",
        "29-12-2022" => "Hadir",
        "30-12-2022" => "Hadir",
        "31-12-2022" => "Hadir"
    ],
    [
        "employee" => "E003",
        "name" => "Grace",
        "26-12-2022" => "Sakit",
        "27-12-2022" => "Sakit",
        "28-12-2022" => "Kabur",
        "29-12-2022" => "Hadir",
        "30-12-2022" => "Hadir",
        "31-12-2022" => "Cuti"
    ],
    [
        "employee" => "E004",
        "name" => "Idris",
        "26-12-2022" => "Hadir",
        "27-12-2022" => "Hadir",
        "28-12-2022" => "Hadir",
        "29-12-2022" => "Sakit",
        "30-12-2022" => "Cuti",
        "31-12-2022" => "Cuti"
    ],
    [
        "employee" => "E005",
        "name" => "Gwen",
        "26-12-2022" => "Sakit",
        "27-12-2022" => "Hadir",
        "28-12-2022" => "Hadir",
        "29-12-2022" => "Hadir",
        "30-12-2022" => "Cuti",
        "31-12-2022" => "Kabur"
    ],
];
?>
    <table border>
            <thead>
              <tr>
                <td>Employee ID</td>
                <td>Name</td>
                <td>26-12-2022</td>
                <td>27-12-2022</td>
                <td>28-12-2022</td>
                <td>29-12-2022</td>
                <td>30-12-2022</td>
                <td>31-12-2022</td>
              </tr>
            </thead>
            <tbody>
              <thead>
              <?php foreach ($tabel as $data) { ?>
            <tr>
                <td><?= $data['employee'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['26-12-2022'] ?></td>
                <td><?= $data['27-12-2022'] ?></td>
                <td><?= $data['28-12-2022'] ?></td>
                <td><?= $data['29-12-2022'] ?></td>
                <td><?= $data['30-12-2022'] ?></td>
                <td><?= $data['31-12-2022'] ?></td>
            </tr> 
        <?php } ?>
              </thead>
            </tbody>
        </table>
</body>
</html>
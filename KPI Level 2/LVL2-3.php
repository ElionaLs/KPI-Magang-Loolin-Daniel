<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        table, td, th {  
        border: 1px solid #ddd;
        text-align: left;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 15px;
        }
    </style>
</head>
<body>
<?php
    $tabel = [
        [
            "employee" => "E001",
            "name" => "John Doe",
            "birthdate" => "05-11-1998",
            "gender" => "M",
            "salary" => "8000000",
            "hobi" => [
                "H001", 
                "H003"
            ]
        ],
        [
            "employee" => "E002",
            "name" => "Lyra",
            "birthdate" => "13-01-1998",
            "gender" => "F",
            "salary" => "10650000",
            "hobi" => [
                "H004", 
                "H002",
                "H003"
            ]
        ],
        [
            "employee" => "E003",
            "name" => "Grace",
            "birthdate" => "21-08-1995",
            "gender" => "F",
            "salary" => "3450000",
            "hobi" => [
                "H003", 
                "H002"
            ]
        ],
        [
            "employee" => "E004",
            "name" => "Idris",
            "birthdate" => "21-07-1993",
            "gender" => "M",
            "salary" => "12300000",
            "hobi" => "H001"
        ],
        [
            "employee" => "E005",
            "name" => "Gwen",
            "birthdate" => "05-09-2000",
            "gender" => "F",
            "salary" => "1500000",
            "hobi" => "H005"
        ],
    ];

    $hobi= [
            "H001" => "Reading",
            "H002" => "Yoga",
            "H003" => "Shopping",
            "H004" => "Fishing",
            "H005" => "Sleeping"
    ];
?>

    <table border>
            <thead>
                <tr style = "text-align : center;">
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Gender</th>
                    <th>Salary Type</th>
                    <th>Hobby</th>
                </tr>
            </thead>
        <tbody>
            <thead>
                <?php foreach ($tabel as $data) : ?>
                <?php
                    $rupiah = "Rp" . number_format($data['salary'], 0, ',', '.');
                    $genderBaru = $data['gender'] == "M" ? "Male" : "Female";
                ?>
                <tr>
                    <td><?= $data['employee'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= date('d F Y', strtotime($data['birthdate'])) ?></td>
                    <td><?= $genderBaru ?></td>
                    <td style="text-align : right;"><?= $rupiah ?></td>
                    <td>
                    <?php
                    if (is_array($data['hobi'])) {
                        $i = 0;
                        foreach ($data['hobi'] as $nama) {
                            echo $hobi[$nama];  
                            if ($i < count($data['hobi'])-1) {
                            echo ", ";
                            }
                            $i++;    
                        }
                    } else {
                        echo $hobi[$data['hobi']];
                    }
                    ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </thead>
        </tbody>
    </table>
</body>
</html>
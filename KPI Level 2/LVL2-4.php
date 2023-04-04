<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
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
        ],
        [
            "employee" => "E002",
            "name" => "Lyra",
            "birthdate" => "13-01-1998",
            "gender" => "F",
            "salary" => "10650000",
        ],
        [
            "employee" => "E003",
            "name" => "Grace",
            "birthdate" => "21-08-1995",
            "gender" => "F",
            "salary" => "3450000",
        ],
        [
            "employee" => "E004",
            "name" => "Idris",
            "birthdate" => "21-07-1993",
            "gender" => "M",
            "salary" => "12300000",
        ],
        [
            "employee" => "E005",
            "name" => "Gwen",
            "birthdate" => "05-09-2000",
            "gender" => "F",
            "salary" => "1500000",
        ],
    ];

    $absen = [
        "26-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Hadir", 
            "E003" => "Sakit", 
            "E004" => "Hadir", 
            "E005" => "Sakit"
        ],
        "27-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Hadir", 
            "E003" => "Sakit", 
            "E004" => "Hadir", 
            "E005" => "Hadir"
        ],
        "28-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Sakit", 
            "E003" => "Kabur", 
            "E004" => "Hadir", 
            "E005" => "Hadir"
        ],
        "29-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Hadir", 
            "E003" => "Hadir", 
            "E004" => "Sakit", 
            "E005" => "Hadir"
        ],
        "30-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Hadir", 
            "E003" => "Hadir", 
            "E004" => "Cuti", 
            "E005" => "Cuti"
        ],
        "31-12-2022" => [
            "E001" => "Hadir", 
            "E002" => "Hadir", 
            "E003" => "Cuti", 
            "E004" => "Cuti", 
            "E005" => "Hadir"
        ]
    ];
?>
    <table>
        <thead>
            <tr style="text-align : center;">
                <th>Employee ID</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Salary Type</th>
                <?php foreach ($absen as $tanggal => $keterangan) { ?>
                <th><?= $tanggal ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <thead>
                <?php foreach ($tabel as $data) { ?>
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
                    <?php foreach ($absen as $tanggal => $keterangan) { ?>
                    <td><?= $keterangan[$data['employee']] ?></td>
                    <?php } ?>
                </tr>
            </thead>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
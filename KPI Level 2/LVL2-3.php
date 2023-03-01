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
        "birthdate" => "05-11-1998",
        "gender" => "M",
        "salary" => "8000000",
        "hobi" => array('H001', 'H003')
    ],
    [
        "employee" => "E002",
        "name" => "Lyra",
        "birthdate" => "13-01-1998",
        "gender" => "F",
        "salary" => "10650000",
        "hobi" => array('H004', 'H002', 'H003')
    ],
    [
        "employee" => "E003",
        "name" => "Grace",
        "birthdate" => "21-08-1995",
        "gender" => "F",
        "salary" => "3450000",
        "hobi" => array('H003', 'H002')
    ],
    [
        "employee" => "E004",
        "name" => "Idris",
        "birthdate" => "21-07-1993",
        "gender" => "M",
        "salary" => "12300000",
        "hobi" => array('H001')
    ],
    [
        "employee" => "E005",
        "name" => "Gwen",
        "birthdate" => "05-09-2000",
        "gender" => "F",
        "salary" => "1500000",
        "hobi" => array('H005')
    ],
];

$hobi_id = array(
    'H001' => 'Reading',
    'H002' => 'Yoga',
    'H003' => 'Shopping',
    'H004' => 'Fishing',
    'H005' => 'Sleeping'
);      

$nama_hobi = array(
    array("hobi" => array('H001', 'H003')),
    array("hobi" => array('H004', 'H002', 'H003')),
    array("hobi" => array('H003', 'H002')),
    array("hobi" => array('H001')),
    array("hobi" => array('H005'))
);



?>
    <table border>
        <thead>
            <tr>
                <td>Employee ID</td>
                <td>Name</td>
                <td>Birthdate</td>
                <td>Gender</td>
                <td>Salary Type</td>
                <td>Hobby</td>
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
                    <td><?= $rupiah ?></td>

                    <?php } ?>
                    <?php for($i=0; $i<count($nama_hobi); $i++) {?>
                    <td>
                        <?php for($j=0; $j<count($nama_hobi[$i]["hobi"]); $j++){ ?>
                        <?php echo $hobi_id[$nama_hobi[$i]["hobi"][$j]] . ", "; ?>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </thead>
        </tbody>
    </table>
</body>

</html>
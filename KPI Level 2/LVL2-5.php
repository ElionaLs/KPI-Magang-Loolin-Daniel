<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = [
            [
                'employee' => 'E001',
                'name' => 'John Doe',
                'absensi' => [
                    ['tanggal' => '26-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '27-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '28-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '29-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '30-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '31-12-2022', 'keterangan' => 'Hadir']
                ]
            ],
            [
                'employee' => 'E002',
                'name' => 'Lyra',
                'absensi' => [
                    ['tanggal' => '26-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '27-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '28-12-2022', 'keterangan' => 'Sakit'],
                    ['tanggal' => '29-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '30-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '31-12-2022', 'keterangan' => 'Hadir']
                ]
            ],
            [
                'employee' => 'E003',
                'name' => 'Grace',
                'absensi' => [
                    ['tanggal' => '26-12-2022', 'keterangan' => 'Sakit'],
                    ['tanggal' => '27-12-2022', 'keterangan' => 'Sakit'],
                    ['tanggal' => '28-12-2022', 'keterangan' => 'Kabur'],
                    ['tanggal' => '29-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '30-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '31-12-2022', 'keterangan' => 'Cuti']
                ]
            ],
            [
                'employee' => 'E004',
                'name' => 'Idris',
                'absensi' => [
                    ['tanggal' => '26-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '27-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '28-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '29-12-2022', 'keterangan' => 'Sakit'],
                    ['tanggal' => '30-12-2022', 'keterangan' => 'Cuti'],
                    ['tanggal' => '31-12-2022', 'keterangan' => 'Cuti']
                ]
            ],
            [
                'employee' => 'E005',
                'name' => 'Gwen',
                'absensi' => [
                    ['tanggal' => '26-12-2022', 'keterangan' => 'Sakit'],
                    ['tanggal' => '27-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '28-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '29-12-2022', 'keterangan' => 'Hadir'],
                    ['tanggal' => '30-12-2022', 'keterangan' => 'Cuti'],
                    ['tanggal' => '31-12-2022', 'keterangan' => 'Hadir']
                ]
            ]
        ];

        $totals = [];

        foreach ($data as $anggota) {
            $employee = $anggota['employee'];
            $name = $anggota['name'];
            $total_hadir = 0;
            $total_cuti = 0;
            $total_sakit = 0;
            $total_kabur = 0;
            foreach ($anggota['absensi'] as $absen) {
                if ($absen['keterangan'] == 'Hadir') {
                    $total_hadir++;
                } elseif ($absen['keterangan'] == 'Cuti') {
                    $total_cuti++;
                } elseif ($absen['keterangan'] == 'Sakit') {
                    $total_sakit++;
                } elseif ($absen['keterangan'] == 'Kabur') {
                    $total_kabur++;
                }
            }
            $totals[$employee] = [
                'name' => $name,
                'Hadir' => $total_hadir,
                'Cuti' => $total_cuti,
                'Sakit' => $total_sakit,
                'Kabur' => $total_kabur
            ];
        }
        ?>
        <table border>
                    <thead>
                        <tr class = "tr1">
                            <td>Employee ID</td>
                            <td>Name</td>
                            <td>Hadir</td>
                            <td>Cuti</td>
                            <td>Sakit</td>
                            <td>Kabur</td>
                        </tr>
                    </thead>
                <tbody>
                    <thead>
                        <?php foreach ($totals as $employee => $total) { ?>
                        <tr>
                            <td><?= $employee ?></td>
                            <td><?= $total['name'] ?></td>
                            <td><?= $total['Hadir'] ?></td>
                            <td><?= $total['Cuti'] ?></td>
                            <td><?= $total['Sakit'] ?></td>
                            <td><?= $total['Kabur'] ?></td>
                        </tr>
                        <?php } ?>
                    </thead>
                </tbody>
        </table>
</body>
</html>
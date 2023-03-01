<?php
$tabel = [
    [
        "employee" => "E001",
        "name" => "John Doe",
        "birthdate" => "05-11-1998",
        "gender" => "M",
        "salary" => "8000000"
    ],
    [
        "employee" => "E002",
        "name" => "Lyra",
        "birthdate" => "13-01-1998",
        "gender" => "F",
        "salary" => "10650000"
    ],
    [
        "employee" => "E003",
        "name" => "Grace",
        "birthdate" => "21-08-1995",
        "gender" => "F",
        "salary" => "3450000"
    ],
    [
        "employee" => "E004",
        "name" => "Idris",
        "birthdate" => "21-07-1993",
        "gender" => "M",
        "salary" => "12300000"
    ],
    [
        "employee" => "E005",
        "name" => "Gwen",
        "birthdate" => "05-09-2000",
        "gender" => "F",
        "salary" => "1500000"
    ],
];
 
echo "<table border='1'";
echo "<tr>";
echo "<th>Employee ID</th>";
echo "<th>Name</th>";
echo "<th>Birthdate</th>";
echo "<th>Gender</th>";
echo "<th>Salary</th>";
echo "</tr>";
foreach ($tabel as $isiTabel)
{
	echo "<tr>";
	foreach ($isiTabel as $isi)
	{
		echo "<td>";
        echo $isi;  
        $birthdate = date('d F Y', strtotime($birthdate));
        echo "</td>";
	}	
 
}	
  echo "</tr>";
  echo "</table>";
?>
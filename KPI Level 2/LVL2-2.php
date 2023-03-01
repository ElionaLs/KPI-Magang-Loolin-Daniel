<?php
    $employee = array("E001", "E002", "E003", "E004", "E005");
    $name = array("John Doe", "Lyra", "Grace", "Idris", "Gwen");
    $birthdate = array("05-11-1998", "13-01-1998", "21-08-1995", "21-07-1993", "05-09-2000");
    $birthdateBaru = array("05 November 1998", "13 Januari 1998", "21 Agustus 1995", "21 Juli 1993", "05 September 2000");
    array_Splice($birthdate,0,5,$birthdateBaru);
    $gender = array("M", "F", "F", "M", "F");
    $genderBaru = array("Male", "Female", "Female", "Male", "Female");
    array_splice($gender,0,5,$genderBaru);
    $salary = array("8000000", "10650000", "3450000", "12300000", "1500000");
    $salaryBaru = array("RP8.000.000", "RP10.650.000", "RP3.450.000", "RP12.300.000", "RP1.500.000");
    array_splice($salary,0,5,$salaryBaru);
    
    $tabel = COUNT($employee);

    echo "<table border>";
    echo "<tr>";
    echo "<th>Employee ID</th>";
    echo "<th>Name</th>";
    echo "<th>Birthdate</th>";
    echo "<th>Gender</th>";
    echo "<th>Salary</th>";
    echo "</tr>";

    for ($i=0; $i < $tabel; $i++) { 
        echo "<tr>";
        echo "<td>$employee[$i]</td>";
        echo "<td>$name[$i]</td>";
        echo "<td>$birthdate[$i]</td>";
        echo "<td>$gender[$i]</td>";
        echo "<td>$salary[$i]</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
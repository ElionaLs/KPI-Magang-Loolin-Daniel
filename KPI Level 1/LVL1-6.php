<?php
    $namaBulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", 
    "Oktober", "November", "Desember");

    for ($i=1; $i <=12 ; $i++) { 
        $nama = $namaBulan[$i - 1];
        echo $i;
        echo ' = ';
        echo $nama;
        echo '<br>';
    }
    
?>
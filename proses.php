<?php

echo "Tanggal yang diinput di form: ";
echo $_POST['tgl'];
echo "<br />";

// Proses konversi ke format MySQL
// YYYY-MM-DD
$tgl_sql = DateTime::createFromFormat('d/m/Y', $_POST['tgl']);

echo "Tanggal dalam format YYYY-MM-DD: ";
echo $tgl_sql->format('Y-m-d');
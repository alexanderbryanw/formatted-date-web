<?php

// tanggal dari database
$tgl = "2019-04-29";

echo "Data tanggal dari database: ";
echo $tgl;
echo "<br />";

// Format tanggal menjadi format DD/MM/YYYY
$tgl_new = new DateTime($tgl);

echo "Data tanggal dalam format DD/MM/YYYY: ";
echo $tgl_new->format('d/m/Y');
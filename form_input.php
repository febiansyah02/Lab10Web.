<?php
/**
 * Program memanfaatkan Class Form untuk membuat form inputan sederhana.
 */
include "form.php";

echo "<html>";
echo "<head><title>Mahasiswa</title></head>";
echo "<body>";

$form = new Form("", "Input Form");

$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

echo "<h3>Silahkan isi form berikut ini :</h3>";

$form->displayForm();

echo "</body>";
echo "</html>";
?>

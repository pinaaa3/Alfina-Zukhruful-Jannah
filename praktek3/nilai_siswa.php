<?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai'];
$nilai_uas = $_POST['nilai'];
$nilai_tugas = $_POST['nilai'];

if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
}
?>
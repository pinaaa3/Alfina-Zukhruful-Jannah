<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
    <nav style="background-color: lightgrey;" class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
    </nav>
    
    <div class="container">
        <form class="form-horizontal mt-3" method="POST" action="form_nilai.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="select">Mata Kuliah</label> 
                <div class="col-8">
                <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                    <option value="JKOM">Jaringan Komputer</option>
                    <option value="UIUX">User Interface & User Experience</option>
                    <option value="WEB1">Pemrograman Web</option>
                    <option value="STK">Statistika</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br>
        <?php
        
        if (isset($_POST['proses'])) {
            $nama = $_POST['nama_lengkap'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];

            $persentase_uts = 0.3 * $nilai_uts;
            $persentase_uts = (30 * $nilai_uts) / 100;
            $persentase_uas = 0.35 * $nilai_uas;
            $persentase_uas = (35 * $nilai_uas) / 100;
            $persentase_tugas = 0.35 * $nilai_tugas;
            $persentase_tugas = (35 * $nilai_tugas) / 100;

            $nilai_total = $persentase_uts * $persentase_uas * $persentase_tugas;
            

            echo 'Nama : ' . $nama;
            echo '<br />Mata Kuliah : ' . $mata_kuliah;
            echo '<br />Nilai UTS : ' . $nilai_uts;
            echo '<br />Nilai UAS : ' . $nilai_uas;
            echo '<br />Nilai Tugas : ' . $nilai_tugas;
            echo '<br />Nilai Total : ' . $nilai_total;

            $grade_uts = '';
            if ($nilai_uts >= 85) {
                $grade_uts = 'A';
                echo "<br />Nilai UTS anda sangat bagus";
            } else {
                $grade_uts = 'B';
                echo "<br />Nilai UTS anda perlu ditingkatkan";
            }

            echo "<br />Grade Nilai UTS anda : " . $grade_uts;

            switch ($grade_uts) {
                case 'A':
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;
                
                default:
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
            }

            $grade_uas = '';
            if ($nilai_uas >= 85){
                $grade_uas = 'A';
                echo "<br />Nilai UAS anda sangat bagus";
            } else {
                $grade_uas = 'B';
                echo "<br />Nilai UAS anda perlu ditingkatkan";
            }

            echo "<br />Grade Nilai UAS anda : " . $grade_uas;

            switch ($grade_uas) {
                case 'A':
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;
                
                default:
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
            }

            $grade_tugas = '';
            if ($nilai_tugas >= 85){
                $grade_tugas = 'A';
                echo "<br />Nilai Tugas anda sangat bagus";
            } else {
                $grade_tugas = 'B';
                echo "<br />Nilai Tugas anda perlu ditingkatkan";
            }

            echo "<br />Grade Nilai Tugas anda : " . $grade_tugas;

            switch ($grade_tugas) {
                case 'A':
                    echo '<br />Predikat nilai : Sangat Memuaskan';
                    break;
                
                default:
                    echo '<br />Predikat nilai : Memuaskan';
                    break;
            }

            $grade_total = '';
            if ($nilai_total >= 55){
                $grade_total = 'A';
                echo "<br /> Selamat anda LULUS";
            } else {
                $grade_total = 'E';
                echo "<br /> Maaf anda TIDAK LULUS";
            }

            echo "<br />Grade Nilai TOTAL anda : " . $grade_total;
        } else {
            echo 'Form belum disubmit';
        }
        ?>
    
    <footer style="background-color: lightgrey;" class="fixed-bottom">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-black fw-bold" href=>Alfina Zukhruful Jannah</a></p>
</footer>

    </div>
</body>
</html>
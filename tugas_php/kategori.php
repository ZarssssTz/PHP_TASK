<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMI_TUGAS Eduwork</title>
<style>
body {
    padding: 20px 20%;
}

input, select {
    padding: 5px;
}

form {
    padding: 10px;
    background-color: #f5f5f5;
    border: solid ;
}

.hasil {
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: solid;
}
</style>
</head>

<body>
<h1>KALKULATOR BMI</h1>

<form 
 methot="get" action="">
Nama<br>
<input type="text" name="nama"><br>
Tinggi badan (cm) <br>
<input type="text" name="tb"><br>
Berat badan (kg)<br>
<input type="text" name="bb"><br>
<input type="submit" name="submit" value="Hitung BMI">
</form>


<?php
if (isset($_GET['submit'])) {
    // Input form
    $nama        = $_GET['nama'];
    $tb            = $_GET['tb']/100;
    $bb            = $_GET['bb'];
  
    // Rumus BMI
    $bmi        = $bb / ($tb * $tb);
    // HASIL
    echo '<div class="hasil">';
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Halo, $nama ";
    echo "Tinggi Badan: $tb meter<br>";
    echo "Berat Badan: $bb kilogram<br>";
    echo "<hr>BMI Anda: ".number_format($bmi);
    echo "<h4>Kesimpulan:</h4>";
    // Menghitung dan mencetak kesimpulan
    if($bmi < 15.5) {
        echo "Anda Termasuk Kurus";
    }elseif ($bmi < 18.5 ) {
        echo "Anda Termasuk Kurus";
    }elseif ($bmi < 25 ) {
        echo "Anda Termasuk Sedang";
    }elseif ($bmi < 30 ) {
        echo "Anda Termasuk sedang";
    }elseif ($bmi < 35 ) {
        echo "Anda termasuk Gemuk";
    }elseif ($bmi < 40 ) {
        echo "Anda termasuk Gemuk";
    }else {
        echo "Anda termasuk Gemuk";
    }
   
    echo '</div>';
}
?>
</body>
</html>
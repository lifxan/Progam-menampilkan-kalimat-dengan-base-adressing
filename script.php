<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="script.css">
  <title>input pembayaran</title>
  <script>
    function validateForm() {
      // Logika validasi formulir Anda bisa ditaruh di sini
      return true;
    }

    function addInputs() {
      var numberOfInputs = parseInt(document.getElementById("jum").value) || 0;
      var inputsContainer = document.getElementById("inputs-container");
      
      // Bersihkan kontainer input sebelum menambahkan input baru
      inputsContainer.innerHTML = "";

      for (var i = 0; i < numberOfInputs; i++) {
        var inputLabel = document.createElement("label");
        inputLabel.innerText = "Mata Kuliah " + (i + 1) + ": ";

        var inputElement = document.createElement("input");
        inputElement.type = "text";
        inputElement.name = "matakuliah[]" // Ubah ini sesuai dengan nama input yang diinginkan

        inputsContainer.appendChild(inputLabel);
        inputsContainer.appendChild(inputElement);
        inputsContainer.appendChild(document.createElement("br"));
      }
    }
  </script>
</head>
<body><font color="white">
  <section>
    <h2>PEMBAYARAN</h2>
    <form action="script.php" method="POST" onsubmit="return validateForm()">
    
      <label for="name">Nama :</label><br>
      <input type="text" id="name" name="name" required><br>
    
      <label for="nim">Nim :</label><br>
      <input type="number" id="nim" name="nim" required><br>
    
      <label for="Prodi">Prodi :</label><br>
      <input type="text" id="Prodi" name="Prodi" required><br>
     
      <label for="jum">Jumlah Matkul :</label><br>
      <input type="number" id="jum" name="jum" required onchange="addInputs()"><br>

      <div id="inputs-container"></div>
    
      <label for="bayar">Jumlah Yang dibayar :</label><br></font>
      <input type="number" id="bayar" name="bayar" required><br>
   
      <font color="black"><button type="submit">Submit</button></font>
    </form>
  </section>

</body>
<footer>
  <p>Hak MUHAMMAD ALIF XANDRI &copy; 2023. </p>
</footer>
</html>


<font color="white">BUKTI TRANSAKSI</font>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $nim = $_POST["nim"];
  $Prodi = $_POST["Prodi"];
  $jum = $_POST["jum"];
  $bayar = $_POST["bayar"];

  echo "<p>Nama   : " . $name . "</p>";
  echo "<p>Nim    :" . $nim . "</p>";
  echo "<p>Prodi  : " . $Prodi . "</p>";
  echo "<p>Jumlah Matkul : " . $jum . "</p>";
  echo "<p>Jumlah Yang dibayar  : " . $bayar . "</p>";

  // Menghitung total tagihan
  $tagihan = $jum * 24;
  echo "<p>Total Tagihan: " . $tagihan . "</p>";

  // Menghitung sisa pembayaran
  $sisa = $tagihan - $bayar;
  echo "<p>Sisa Pembayaran : " . $sisa . "</p>";
}

?>


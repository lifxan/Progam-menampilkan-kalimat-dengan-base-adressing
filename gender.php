<!DOCTYPE html>
<html>
<head>
    <title>Form Gender</title>
</head>
<body>
    <?php
    // Menentukan pilihan gender
    $genderOptions = array(
        'male' => 'Laki-laki',
        'female' => 'Perempuan',
        'other' => 'Lainnya'
    );

    // Memeriksa apakah form telah disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $selectedGender = $_POST['gender'];

        // Menampilkan hasil pilihan gender
        echo "Gender yang dipilih: " . $genderOptions[$selectedGender];
    }
    ?>

    <!-- Form untuk memilih gender -->
    <form method="post">
        <label>Pilih Gender:</label>
        <select name="gender">
            <?php
            // Membuat opsi-opsi gender secara dinamis
            foreach ($genderOptions as $value => $label) {
                echo "<option value='$value'>$label</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

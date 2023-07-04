<?php
// Fungsi untuk membuat opsi select
function createSelectOptions($options, $selectedValue = '') {
    $selectOptions = '';
    foreach ($options as $value => $label) {
        $selected = ($value == $selectedValue) ? 'selected' : '';
        $selectOptions .= "<option value='$value' $selected>$label</option>";
    }
    return $selectOptions;
}

// Data pilihan untuk elemen select
$colors = array(
    'red' => 'Merah',
    'blue' => 'Biru',
    'green' => 'Hijau',
    'yellow' => 'Kuning'
);

// Fungsi untuk membuat form
function createForm($fields) {
    $form = '<form method="post">';
    foreach ($fields as $field) {
        $label = $field['label'];
        $type = $field['type'];
        $name = $field['name'];

        $form .= "<label>$label:</label>";

        if ($type == 'text') {
            $form .= "<input type='text' name='$name'><br>";
        } elseif ($type == 'textarea') {
            $form .= "<textarea name='$name'></textarea><br>";
        } elseif ($type == 'select') {
            $options = $field['options'];
            $selectedValue = $field['selectedValue'];
            $form .= "<select name='$name'>" . createSelectOptions($options, $selectedValue) . "</select><br>";
        }
    }
    $form .= '<input type="submit" value="Submit">';
    $form .= '</form>';
    return $form;
}

// Definisi field-field dalam form
$fields = array(
    array(
        'label' => 'Nama',
        'type' => 'text',
        'name' => 'nama'
    ),
    array(
        'label' => 'Alamat',
        'type' => 'textarea',
        'name' => 'alamat'
    ),
    array(
        'label' => 'Warna Favorit',
        'type' => 'select',
        'name' => 'warna',
        'options' => $colors,
        'selectedValue' => 'blue'
    )
);

// Membuat form
$form = createForm($fields);

// Menampilkan form
echo $form;

// Menampilkan data yang dikirimkan oleh form setelah submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h2>Data yang dikirimkan:</h2>";
    echo "Nama: " . $_POST['nama'] . "<br>";
    echo "Alamat: " . $_POST['alamat'] . "<br>";
    echo "Warna Favorit: " . $_POST['warna'] . "<br>";
}
?>

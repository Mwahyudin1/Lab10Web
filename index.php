<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas</title>
</head>
<body>
    <div class="container">
        <?php
            include('database.php');
            include('form.php');
            include('../Lab9Web/lab9_php_modular/header.php');
            
            $database = new Database();
            
            $form = new Form("action.php", "Submit");
            $form->addField("txtnim", "Nim");
            $form->addField("txtnama", "Nama");
            $form->addField("txtalamat", "Alamat");
            
            echo "<h3>Silahkan isi form berikut ini :</h3>";
            $form->displayForm();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Handle form data submission
                $nim = $_POST['txtnim'];
                $nama = $_POST['txtnama'];
                $alamat = $_POST['txtalamat'];

                $data = array(
                    'nim' => $nim,
                    'nama' => $nama,
                    'alamat' => $alamat
                );

                $inserted = $database->insert('table_name', $data);

                if ($inserted) {
                    echo "<p>Data berhasil disimpan ke basis data.</p>";
                } else {
                    echo "<p>Gagal menyimpan data ke basis data.</p>";
                }
            }
        ?>
        
        <?php 
            include('../Lab9Web/lab9_php_modular/footer.php');
        ?>
    </div>
</body>
</html>

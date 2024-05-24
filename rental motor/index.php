<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <h2>Rental Motor</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>  
                <tr>
                    <td>Lama Waktu Rental (per hari)</td>
                    <td>:</td>
                    <td><input type="text" name="lamaRental" required></td>
                </tr>
                <tr>
                    <td>Jenis Motor</td>
                    <td>:</td>
                    <td>
                        <select name="jenis" required>
                            <option value="Scooter">Scooter</option>
                            <option value="Sport">Motor Sport</option>
                            <option value="SportTouring">Motor Sport Touring</option>
                            <option value="Cross">Motocross</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Submit" name="submit" required></td>
                </tr>
            </form>  
        </table>
        <div style="border: 1px solid #000; width: 500px;" > 
        <?php
            require 'logic.php';
            $logic = new Rental;
            $logic->setHarga(70000, 85000, 75000, 95000);
            if(isset($_POST['submit'])) {
               $logic->member = $_POST['nama'];
               $logic->waktu = $_POST['lamaRental'];
               $logic->jenis = $_POST['jenis'];
               $logic->hargaRental();
               $logic->pembayaran();
            }
         ?>     
         </div>
</body>
</html>
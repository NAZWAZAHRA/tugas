<h3>Tambah Data Baju</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="text" name="NIS"></td>
        </tr>
        <tr>
            <td width="128">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td><input type="text" name="ukuran"></td>
        </tr>
        <tr>
            <td>Seragam</td>
            <td><input type="text" name="seragam"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into databaju set
    NIS = '$_POST[NIS]',
    nama = '$_POST[nama]',
    ukuran = '$_POST[ukuran]',
    seragam = '$_POST[seragam]'");

    echo "Data baju baru telah tersimpan";
}
?>

<h3> Data Barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Ukuran</th>
        <th>Seragam</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from databaju");
    /* While untuk mengulang */
    while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
        <td>$no</td>
        <td>$tampil[Nama]</td>
        <td>$tampil[Ukuran]</td>
        <td>$tampil[Seragam]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
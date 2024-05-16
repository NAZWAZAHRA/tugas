<h3> Data Barang </h3>

<table border="1">
    <tr>
        <th>NIS</th>
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
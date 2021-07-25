<h3> tambah barang keluar </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">id barang</td>
            <td><input type="text" name="idbarang"></td>
        </tr>
        <tr>
            <td>nama barang</td>
            <td><input type="text" name="namabarang"></td>
        </tr>
        <tr>
            <td>deskripsi</td>
            <td><input type="text" name="deskripsi"></td>
        </tr>
        <tr>
            <td>stok</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="tambah" name="proses"></td>
        </tr>
    </table>
</form>








<?php
include "function.php";
if (isset($_POST['proses'])){
    mysqli_query($conn,"insert into stock set
    idbarang ='$_POST[idbarang]',
    namabarang ='$_POST[namabarang]',
    deskripsi ='$_POST[deskripsi]',
    stok ='$_POST[stok]'");
    echo "data stock telah tersimpan"; 
}
    ?>
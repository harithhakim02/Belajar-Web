

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mengisi Form Web </title>
    </head>
<style>
body{
    background-image: url(hd1.jpg);
    background-position: top;
    background-repeat: no-repeat; 
    background-size: 1500px 404px;
}


h2{
    font-family: sans-serif;
    border-radius: 500px;
    background-color:#8FBC8F;
    width: 400px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    text-align: center;
    margin-top: 50px;
}

table.tb2{
    font-family: 'sans-serif';
    border-radius: 1em;
    background-color: #FFFAF0;
    margin-bottom: 100px;
    margin-top:100px;
}
.td1{
    font-family:Tahoma;
    background-color: aquamarine;
    border-radius: 1em;
}
img.home{
    width: 40px;
    height: 40px;

}
</style>

<body>
<?php
include "koneksi.php";
if (isset ($_POST['Kirim'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir =$_POST['tgl_lahir'];
    $npm = $_POST['npm'];
    $Agama= $_POST['Agama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $Kewarganegaraan = $_POST['Kewarganegaraan'];
    $hobi = $_POST['hobi'];
    $nomor = $_POST['nomor'];

    $simpan = "INSERT INTO biodata(nama_lengkap,nama_panggilan, tmpt_lahir, tgl_lahir, npm, Agama, jk, alamat, Kewarganegaraan, hobi, nomor)
    VALUES ('$nama_lengkap', '$nama_panggilan', '$tmpt_lahir', '$tgl_lahir', '$npm', '$Agama', '$jk', '$alamat', '$Kewarganegaraan', '$hobi', '$nomor')";

    $result = mysqli_query($koneksi, $simpan);

}
?>

<table align="center" style="margin-top:20px;">
        <div>
    <tr>
        <td>
            <a href='profil.php'> <img src="home.png" class="home" style="margin-right:50px;"></a> 
        </td> 
        <td>
            <a href='forum.php' ><img src="next.png" class="home" style="margin-left:10px;" ></a><br>
        </td>
    </tr>

    <tr>
        <td style="font-family:'sans-serif'; color: white;">Home</td>
        <td style="font-family:'sans-serif'; color: white;">Ke Form</td>
    </tr>
        </div>
</table>

<h2>Data Anda Sudah Tersimpan Di Database</h2>
    <table class="tb2" align="center"> 
<div>
        <tr>
            <td colspan="3" align="center" class="td1">Biodata Anda</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama_lengkap;?></td>
        </tr>

        <tr>
            <td>Nama Panggilan</td>
            <td>:</td>
            <td><?php echo $nama_panggilan;?></td>
        </tr>

        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><?php echo $tmpt_lahir;?></td>
            
        </tr>

        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tgl_lahir; ?></td>
        </tr>

        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><?php echo $npm;?></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $Agama?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jk;?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>

        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td><?php echo $Kewarganegaraan;?></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo $hobi;?></td>
        </tr>

        <tr>
            <td>Kontak Personal</td>
            <td>:</td>
            <td><?php echo $nomor;?></td>
        </tr>

    </div>
    </table>
</form>

</body>
</html>
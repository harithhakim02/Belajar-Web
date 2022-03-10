
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
    width: 200px;
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

<h2>Isi Form</h2>
<form action="terima.php" method="POST">
    <table class="tb2" align="center"> 
<div>
        <tr>
            <td colspan="4" align="center" class="td1">Masukkan Biodata Anda</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td colspan="2"><input type="text" name="nama_lengkap"></td>
        </tr>

        <tr>
            <td>Nama Panggilan</td>
            <td>:</td>
            <td colspan="2"><input type="text" name="nama_panggilan"></td>
        </tr>

        <tr>
            <td>Tempat,Tanggal lahir</td>
            <td>:</td>
            <td><input type="text" name="tmpt_lahir"></td>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>

        <tr>
            <td>NPM</td>
            <td>:</td>
            <td colspan="2"><input type="number" name="npm"></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td colspan="2"><select name="Agama">
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Shinto">Shinto</option>
                    <option value="Judaisme">Judaisme</option>
                </select></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td colspan="2"><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td colspan="2"><textarea name="alamat" ></textarea></td>
        </tr>

        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td colspan="2">
                <select name="Kewarganegaraan">
                    <option value="Australia">Australia</option>
                    <option value="Belgia">Belgia</option>
                    <option value="China">China</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Hungaria">Hungaria</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Jepang">Jepang</option>
                    <option value="Korea Selatan">Korea Selatan</option>
                    <option value="Laos">Laos</option>
                    <option value="Malaysia">Malaysia</option>
                </select></td>
        </tr>

        <tr>
            <td>hobi</td>
            <td>:</td>
            <td colspan="2"><input type="text" name="hobi"></td>
        </tr>

        <tr>
            <td>Kontak Personal</td>
            <td>:</td>
            <td colspan="2"><input type="number" name="nomor"></td>
        </tr>

        <tr>
            <td colspan="4" align="center"> 
            <button type="submit" name="Kirim">Kirim</button>
            <button type="reset" name="hapus">Hapus</button></td>
        </tr>
    </div>
    </table>
</form>

</body>
</html>
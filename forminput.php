<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Insert Data Form ke Database</title>

        <style>
.tengah{
position: absolute;
margin-top: -100px;
margin-left: -200px;
left: 50%;
top: 50%;
width: 400px;
height: 220px;
}
</style>
 
    </head>
    <body>
        <div class="tengah">
        <h2>Form Input Data Mahasiswa Politeknik Kampar </h2>
         <form method="post" action="simpan.php">
         <input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
            <table>
                <tr><td>NIM : </td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
 
            <!--Tanggal Lahir -->
            <tr>
              <td>Tanggal Lahir :</td>
              <td><select name="tgl" size="1" id="tgl">
            <?php
             for ($i=1;$i<=31;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
             
            </select>
                <select name="bln" size="1" id="bln">
            <?php
             $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1;$i<=12;$i++)
             {
               echo "<option value=".$i.">".$bulan[$i]."</option>";
             }
            ?>            
            </select>
             
            <select name="thn" size="1" id="thn">
            <?php
             for ($i=1990;$i<=2005;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
              </select></td>
            </tr>
          
                <tr><td>Tempat Lahir :</td><td><input type="text" name="tmptlahir"></td></tr>
                <tr><td>Jurusan :</td><td>
                        <select name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Teknik Pengolahan Sawit</option>
                            <option value="Teknik Komputer dan Jaringan">Perawatan dan Perbaikan Mesin</option>
                             <option value="Teknik Komputer dan Jaringan">Adminstrasi Bisnis Internasional</option>
                        </select>
                    </td></tr>
            <tr><td>Tahun Masuk :</td><td>
            <select name="thnmsk" size="1" id="thnmsk">
            <?php
             for ($i=2008;$i<=2021;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
            </td></tr>
 
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>

</div>
     </body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>maribelajarcoding.com</title>
<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("akademik");
?>
</head>
<body>
 <table>
  <?php
   $nim=$_GET['nim'];
   $query="SELECT * FROM mahasiswa WHERE nim='".$nim."'";
   $sql=mysql_query($query);
   $data=mysql_fetch_array($sql);
  ?>
  <form method="POST">
   <tr>
    <td>NIM</td>
    <td><input type="text" name="nim" id="nim" value="<?=$data['nim']?>"></td>
   </tr>
   <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" id="nama" value="<?=$data['nama']?>"></td>
   </tr>
   <tr>
    <td>Jurusan</td>
    <td>
     <select name="jurusan" id="jurusan">
      <?php
       $query_jurusan="SELECT * FROM jurusan";
       $sql_jurusan=mysql_query($query_jurusan);
       while ($data_jurusan=mysql_fetch_array($sql_jurusan)) {
        if ($data['jurusan']==$data_jurusan['id_jurusan']) {
         $select="selected";
        }else{
         $select="";
        }
        echo "<option $select>".$data_jurusan['jurusan']."</option>";
       }
      ?>      
     </select>
    </td>
   </tr>
   <tr>
    <td>Alamat</td>
    <td><textarea name="alamat" id="alamat"><?=$data['alamat']?></textarea></td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="simpan" value="Simpan"></td>
   </tr>
  </form>
 </table>
</body>
</html>
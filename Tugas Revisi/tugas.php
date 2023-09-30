<!DOCTYPE html>
<html>

<head>
    <title>Tugas Dimas </title>

    <style>
    table,
    td,
    th {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 40%;
    }

    td {
        height: 10px;
        vertical-align: bottom;
    }
    </style>

</head>

<body>
 
    
    <?php 
		$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'kp_dimas';
        
        $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(isset($_POST['tambah']))
	{
		$nama = $_POST['nama'];
        $nis = $_POST['nis'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];

		$tambahkat = mysqli_query($mysqli,"insert into murid (nama,nis,nama_ayah,nama_ibu) values
         ('$nama','$nis','$nama_ayah','$nama_ibu')");
		if ($tambahkat){
            echo "<script>window.alert('Berhasil Menambah Data')
        window.location=''</script>";
		} else { echo "
		 <meta http-equiv='refresh' content='1; url= '/> ";
		}
		
	};
	?>
    <form method="post" enctype="multipart/form-data">
        <ul>
            <div class="form-group">
                <label>Nama</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input name="nama" type="text"  class="form-control" required>
            </div>

            <div class="form-group">
                <label>Nis</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input name="nis" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Ayah</label>
                <input name="nama_ayah" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Ibu</label>&nbsp&nbsp&nbsp
                <input name="nama_ibu" type="text" class="form-control" required>
            </div>
            <br>
            <div class="modal-footer center">
                <input name="tambah" type="submit" class="btn btn-primary" value="Submit">
            </div>
        </ul>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr style="text-align: center">
                <th> NO</th>
                <th> Nama</th>
                <th> Nis</th>
                <th> Nama Ayah</th>
                <th> Nama Ibu</th>


            </tr>
        </thead>
        <tbody>
            <?php
$tugas = mysqli_query($mysqli, "SELECT * FROM murid ");
$no=1;
while($p = mysqli_fetch_array($tugas)){
    
?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td><?php echo $p['nama']; ?> </td>
                <td><?php echo $p['nis']; ?> </td>
                <td><?php echo $p['nama_ayah']; ?> </td>
                <td><?php echo $p['nama_ibu']; ?> </td>
            </tr>

            <?php
}
?>
            
        </tbody>
    </table>


</body>

</html>
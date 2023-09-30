<?php
//including the database koneksi file
error_reporting(0);

include_once("./../../views/config.php");
$id_user=$_GET['id_user'];
	$result=mysqli_query($mysqli, "SELECT * FROM table_user WHERE id_user=$id_user");
    while($res=mysqli_fetch_array($result))
    {
        $id_jadwal = $res['id_jadwal'];
        $jadwal = mysqli_query($koneksi, "SELECT nama_jadwal,jam_masuk,jam_pulang FROM jadwal WHERE id_jadwal = $id_jadwal");
        $j = mysqli_fetch_assoc($jadwal);

        $idsr_nama = $res['idsr_nama'];
       $nama_jadwal = $j['nama_jadwal'];
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Edit Jadwal user: <?php echo $idsr_nama ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/jadwalkedit.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
                <input type="hidden" name="id_user" id="edit-id"  class="form-control" value="<?php echo $id_user; ?>" />

                          <div class="form-group row">
                            <label class="col-12" for="code">Nama user</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="idsr_nama"  value="<?php echo $idsr_nama; ?>" readonly required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-12" for="return_time">Jadwal </label>
                            <div class="col-md-12">
                            <select class="js-select2 form-control" id="6" style="width: 100%;" name="id_jadwal">
                                                    <option value="<?php echo $nama_jadwal ;?>"><?php echo $nama_jadwal; ?></option>
                                                    <?php
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM jadwal  ");
while($res = mysqli_fetch_array($result))
{
?>
<option value="<?php echo $res['id_jadwal']?>"><?php echo $res['nama_jadwal'] ?>|<?php echo $res['jam_masuk'] ?>|<?php echo $res['jam_pulang'] ?></option>
<?php

}
?>
                                                </select>                            </div>
                            
                        </div>
                        

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit" name="update" value="update">
	                    Update
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             

            </div>

           
        </div>
    </div>
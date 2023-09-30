<?php
//including the database koneksi file
error_reporting(0);

include_once("./../../views/config.php");
$id_jadwal=$_GET['id_jadwal'];
	$result=mysqli_query($mysqli, "SELECT * FROM jadwal WHERE id_jadwal=$id_jadwal");
    while($res=mysqli_fetch_array($result))
    {
        $code = $res['code'];
        $nama_jadwal = $res['nama_jadwal'];
        $jam_masuk = $res['jam_masuk'];
        $jam_lembur = $res['jam_lembur'];
        $jam_pulang = $res['jam_pulang'];
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Edit Jadwal : <?php echo $nama_jadwal ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/jadwaledit.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
                <input type="hidden" name="id_jadwal" id="edit-id"  class="form-control" value="<?php echo $id_jadwal; ?>" />

                          <div class="form-group row">
                            <label class="col-12" for="code">Hari</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="code" name="code" readonly value="<?php echo $code; ?>" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="name">Nama Matkul</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="nama_jadwal" readonly value="<?php echo $nama_jadwal; ?>"required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="entry_time">Jam Masuk</label>
                            <div class="col-md-12">
                                <input type="time" class="js-flatpickr form-control bg-white" id="entry_time" name="jam_masuk" value="<?php echo $jam_masuk; ?>" data-enable-time="true" data-no-calendar="true" data-date-format="H:i:s" data-time_24hr="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="return_time">Jam Pulang</label>
                            <div class="col-md-12">
                                <input type="time" class="js-flatpickr form-control bg-white" id="return_time" name="jam_pulang" data-enable-time="true" value="<?php echo $jam_pulang; ?>" data-no-calendar="true" data-date-format="H:i:s" data-time_24hr="true">
                            </div>
                            <input type="hidden" class="js-flatpickr form-control bg-white" id="return_time" name="jam_lembur" data-enable-time="true" data-no-calendar="true" value="<?php echo $jam_lembur; ?>" data-date-format="H:i:s" data-time_24hr="true">

                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-12" for="return_time">Jam Lembur</label>
                            <div class="col-md-12">
                            </div>
                            
                        </div> -->
                        

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
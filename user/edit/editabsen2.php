<?php
//including the database koneksi file
error_reporting(0);

include_once("./../../views/config.php");
$id_absen=$_GET['id_absen'];
	$result=mysqli_query($mysqli, "SELECT * FROM absen WHERE id_absen=$id_absen");
    while($res=mysqli_fetch_array($result))
    {
      
       
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Absen Lembur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/paedit2.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
        		
                <div class="form-group" ">
                    <input type="hidden" name="id_absen" id="edit-id"  class="form-control" value="<?php echo $id_absen; ?>" />
                    <input type="hidden"  name="jam_lembur"  id="modal-name" class="form-control" placeholder="Modal Name" readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i');?>">
                    <input type="hidden"   name="status" id="modal-name" class="form-control" placeholder="Modal Name" readonly value="l">

                </div>

                

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Keterangan Lembur</label>
                   <textarea name="ket_lembur" id="description" class="form-control" placeholder="Description" required/></textarea>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit" name="update" value="update">
	                    Absen Lembur
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             

            </div>

           
        </div>
    </div>
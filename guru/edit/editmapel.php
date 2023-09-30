<?php
//including the database koneksi file
error_reporting(0);

include_once("./../../views/config.php");
$id_mapel=$_GET['id_mapel'];
	$result=mysqli_query($mysqli, "SELECT * FROM mapel WHERE id_mapel=$id_mapel");
    while($res=mysqli_fetch_array($result))
    {
        $nama_mapel = $res['nama_mapel'];

        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Edit mapel : <?php echo $nama_mapel ;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/mapeledit.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
                <input type="hidden" name="id_mapel" id="edit-id"  class="form-control" value="<?php echo $id_mapel; ?>" />

                          
                        <div class="form-group row">
                            <label class="col-12" for="name">Nama mapel</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="nama_mapel" value="<?php echo $nama_mapel; ?>"required>
                            </div>
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
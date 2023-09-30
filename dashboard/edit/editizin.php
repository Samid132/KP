<?php
//including the database koneksi file
error_reporting(0);

include_once("./../../views/config.php");
$id_izin=$_GET['id_izin'];
	$result=mysqli_query($mysqli, "SELECT * FROM izin WHERE id_izin=$id_izin");
    while($res=mysqli_fetch_array($result))
    {
       

        
       $status = $j['status'];
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title">Edit Izin: <?php echo $idsr_nama ;?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form action="prosesedit/izinedit.php" name="modal_popup" enctype="multipart/form-data" method="POST"
                onsubmit="return true;">
                <input type="hidden" name="id_izin" id="edit-id" class="form-control" value="<?php echo $id_izin; ?>" />



                <div class="form-group row">
                    <label class="col-12" for="return_time">Jadwal </label>
                    <div class="col-md-12">
                        <select class="js-select2 form-control" id="6" style="width: 100%;" name="status">
                            <option value="<?php echo $status ;?>">Pilih Jadwal...</option>
                            <option value="pending">pending</option>
                            <option value="verif">verif</option>

                        </select>
                    </div>

                </div>


                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="update" value="update">
                        Update
                    </button>

                    <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
                        Cancel
                    </button>
                </div>

            </form>



        </div>


    </div>
</div>
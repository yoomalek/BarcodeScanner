<?php
require 'includes/header.php';

if (isset($_POST['tambah'])) {
    if (insert($_POST) == 1) {
        return header('Location: index.php');
    } else {
        return "error";
    }
}
?>

<div class="container my-4">
    <div class="row">
        <div class="col col-4 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Data Baru Barcode</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <!-- <div class="form-group">
                            <label for="">Id</label>
                            <input type="text" name="id" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="">Barcode</label>
                            <input type="text" name="barcode" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Voltage</label>
                            <input type="text" name="volt" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Resistance</label>
                            <input type="text" name="resistance" class="form-control">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>
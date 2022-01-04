<?php
require 'includes/header.php';

if (isset($_GET['id'])) {
    $data = getById($_GET['id']);
}

if (isset($_POST['update'])) {
    var_dump($_POST);
    $update = update($_POST);
    if ($update == 1) {
        return header('Location: index.php');
    }
}

?>

<div class="container my-4">
    <div class="row">
        <div class="col col-4 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Tambah Data Barcode dan Baterai</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="">Barcode</label>
                            <input type="text" name="barcode" class="form-control" value="<?= $data['barcode'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Voltage</label>
                            <input type="text" name="volt" class="form-control" value="<?= $data['volt'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Resistance</label>
                            <input type="text" name="resistance" class="form-control " value="<?= $data['resistance'] ?>">
                        </div>
                        
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
                        <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
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
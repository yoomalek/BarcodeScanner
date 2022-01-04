<?php
require 'includes/header.php';
header("Refresh:2;");

$getUrl = $_SERVER['REQUEST_URI'];
$uri = explode('/', $getUrl);
if ($uri[2] == '' || $uri[2] == 'index.php') {
    $minings = getAll('test');
}
?>

<div class="container my-4">
    <h3>BARCODE | CRUD | PostgreSQL</h3>


    <div class="row custom-alert d-none">
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <!-- <th scope="col">No</th> -->
                                <th scope="col">ID</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Voltage</th>
                                <th scope="col">Resistance</th>
                                <!-- <th scope="col"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($minings as $key => $mining) : ?>
                                <tr>
                                    <!-- <th scope="row"><?= $key + 1 ?></th> -->
                                    <td><?= $mining['id'] ?></td>
                                    <td><?= $mining['barcode'] ?></td>
                                    <td><?= $mining['volt'] ?></td>
                                    <td><?= $mining['resistance'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?= $mining['id'] ?>" class="btn btn-primary shadow"><img src="icon/pencil.svg" width="20"></a>
                                        <a href="delete.php?id=<?= $mining['id'] ?>" class="btn btn-danger shadow" onclick="return confirm('data akan terhapus')"><img src="icon/trash.svg" width="20"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-2 text-center side-navbar">
            <div class="card shadow">
                <div class="card-body">
                    <a href="create.php" class="btn btn-primary btn-sm">Add new</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>
<?php
session_start();
if (!isset($_SESSION['loginname'])) {
header('Location: login.php');
exit();
}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($_COOKIE['cookie'] as $product => $quantity):?>
                <tr>
                    <td><h3 class="cookie_name"><?= $product ?></h3></td>
                    <td><img src="assets/img/product-<?= $product ?>.jpg" class="img-responsive" style="height: 100px;"></td>
                    <td><?= $quantity ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>




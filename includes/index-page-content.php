<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="breather">
            <h1 class="inline"><?= $record['title'] ?></h1>
            <?php include('hierarchy.php') ?>
            <?php include('asset-details.php') ?>
            <?php include('image-viewer.php') ?>
        </div>
    </div>
    <div class="col starts-at-full ends-at-one-third clr holding-box">
        <?php include('delivery-option.php') ?>
    </div>
</section>

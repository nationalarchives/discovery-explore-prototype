<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="breather">
            <?php include('hierarchy.php') ?>
            <?php include('asset-details.php') ?>
            <?php include('image-viewer.php') ?>
        </div>
        <div class="breather">
            <?php include('found-an-error.php') ?>
        </div>
        <div class="separator-illusion">&nbsp;</div>
        <div class="breather">
            <?php include('tagging.php') ?>
        </div>
    </div>
    <div class="col starts-at-full ends-at-one-third clr holding-box">
        <?php include('delivery-option.php') ?>
        <div class="separator-illusion">&nbsp;</div>
        <div class="breather">
            <h2 class="inline"><?= $page_content['research_guides_heading'] ?></h2>
            <?php include('research-guides.php') ?>
        </div>
        <div class="separator-illusion">&nbsp;</div>
        <div class="breather">
            <?php include('traces-through-time.php') ?>
        </div>
    </div>
    </div>
</section>

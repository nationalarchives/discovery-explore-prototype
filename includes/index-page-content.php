<?php echo new_user_banner($new_user_banner['heading'], $new_user_banner['description']); ?>

<section class="row">
    <div class="col starts-at-full ends-at-two-thirds clr holding-box">
        <div class="breather">
            <?php include('hierarchy.php') ?>
            <?php include($record['paths']['details']) ?>
            <?php ($record['components']['image_viewer']) ? include('image-viewer.php') : ''; ?>
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
        <?php include($record['paths']['delivery_option']) ?>
        <div class="separator-illusion">&nbsp;</div>
        <div class="breather">
            <?php include('research-guides.php') ?>
        </div>
        <div class="separator-illusion">&nbsp;</div>
        <div class="breather">
            <?php include('traces-through-time.php') ?>
        </div>
    </div>
    </div>
</section>

<?php snippet('header') ?>

<?php snippet('intro') ?>

<?php if( $image = $page->images()->find($page->coverimage()) ): ?>
<div class="cover-image">
    <div class="wrap-lg">
        <img src="<?= $image->url() ?>" alt="" />
    </div>
</div>
<?php endif; ?>

<div class="wrap">
    <article class="article index">

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

    </article>
</div><!-- wrap -->

<?php snippet('footer') ?>

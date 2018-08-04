<?php if (isset($items)): ?>
<section class="wrap">
    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <div class="item index">
                <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                <div class="columns columns-1">
                    <div class="image-listing">
                        <a href="<?= $item->url() ?>" class="al">
                            <img src="<?= thumb($image, array('width' => 800, 'height' => 450, 'crop' => true))->url() ?>" alt="<?= $item->title()->html() ?>" />
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <header>
                    <h2>
                        <a href="<?= $item->url() ?>" class="al"><?= $item->title()->html() ?></a>
                    </h2>
                    <div class="meta-container">
                        <p class="item-date">
                            <?= $item->date('F j, Y') ?>
                            <?php if( ( $item->date() == true ) && $item->tags()->isNotEmpty() ): ?>
                                &nbsp; <strong>&middot;</strong> &nbsp;
                            <?php endif; ?>
                            <?= $item->tags() ?>
                        </p>
                    </div>
                </header>

                <br />

                <div class="text">
                    <p>
                        <?= $item->text()->kirbytext()->excerpt(50, 'words') ?>
                        <a href="<?= $item->url() ?>" class="al item-more">&rarr;</a>
                    </p>
                </div>

            </div>

            <br /><br />
            <hr />
            <br /><br />

        <?php endforeach ?>
    <?php else: ?>
        <p>This blog does not contain any items yet.</p>
    <?php endif ?>
</section>
<?php endif; ?>

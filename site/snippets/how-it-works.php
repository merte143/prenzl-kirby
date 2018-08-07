<div class="wrap-lg listing-compact">

    <div class="item index">

        <div class="image-listing">
            <?php if( $image = $page->images()->find($page->icon1()) ): ?>
            <div class="cover-image">
                <img src="<?= $image->url() ?>" alt="" />
            </div>
            <?php endif; ?>
        </div>

        <header>
            <h3>
              <?= $page->title1()->html() ?>
            </h3>
        </header>

        <div class="text">
            <p>
                <?= $page->text1()->kirbytext() ?>
            </p>
        </div>

    </div>

    <div class="item index">

        <div class="image-listing">
            <?php if( $image = $page->images()->find($page->icon2()) ): ?>
            <div class="cover-image">
                <img src="<?= $image->url() ?>" alt="" />
            </div>
            <?php endif; ?>
        </div>

        <header>
            <h3>
              <?= $page->title2()->html() ?>
            </h3>
        </header>

        <div class="text">
            <p>
                <?= $page->text2()->kirbytext() ?>
            </p>
        </div>

    </div>

    <div class="item index">

        <div class="image-listing">
            <?php if( $image = $page->images()->find($page->icon3()) ): ?>
            <div class="cover-image">
                <img src="<?= $image->url() ?>" alt="" />
            </div>
            <?php endif; ?>
        </div>

        <header>
            <h3>
              <?= $page->title3()->html() ?>
            </h3>
        </header>

        <div class="text">
            <p>
                <?= $page->text3()->kirbytext() ?>
            </p>
        </div>

    </div>

    <div class="cf"></div>
</div>
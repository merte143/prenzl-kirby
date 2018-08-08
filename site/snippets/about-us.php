<div class="wrap-lg about-us">

    <div class="col-left">

        <div class="image-wrapper">
            <?php if( $image = $page->images()->find($page->imageAbout()) ): ?>
                <img src="<?= $image->url() ?>" alt="" />
            <?php endif; ?>
        </div>

    </div>

    <div class="col-right">

        <header>
            <h2>
              <?= $page->titleAbout()->html() ?>
            </h2>
        </header>

        <div class="text">
            <p>
                <?= $page->textAbout()->kirbytext() ?>
            </p>
        </div>

        <div class="button-container left">
            <a href="https://gum.co/kollapse" rel="noopener noreferrer" class="btn" target="_blank">Kostenlos anfragen</a>
        </div>

    </div>

    <div class="cf"></div>
</div>
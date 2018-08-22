<div class="wrap-lg listing-compact how-it-works" id="how-it-works">

    <div>

      <div class="item index">

          <div class="image-listing">
              <?php if( $image = $page->images()->find($page->iconHow1()) ): ?>
              <div class="graphic">
                  <img src="<?= $image->url() ?>" alt="" />
              </div>
              <?php endif; ?>
          </div>

          <header>
              <h3>
                <?= $page->titleHow1()->html() ?>
              </h3>
          </header>

          <div class="text">
              <p>
                  <?= $page->textHow1()->kirbytext() ?>
              </p>
          </div>

      </div>

      <div class="item index">

          <div class="image-listing">
              <?php if( $image = $page->images()->find($page->iconHow2()) ): ?>
              <div class="graphic">
                  <img src="<?= $image->url() ?>" alt="" />
              </div>
              <?php endif; ?>
          </div>

          <header>
              <h3>
                <?= $page->titleHow2()->html() ?>
              </h3>
          </header>

          <div class="text">
              <p>
                  <?= $page->textHow2()->kirbytext() ?>
              </p>
          </div>

      </div>

      <div class="item index">

          <div class="image-listing">
              <?php if( $image = $page->images()->find($page->iconHow3()) ): ?>
              <div class="graphic">
                  <img src="<?= $image->url() ?>" alt="" />
              </div>
              <?php endif; ?>
          </div>

          <header>
              <h3>
                <?= $page->titleHow3()->html() ?>
              </h3>
          </header>

          <div class="text">
              <p>
                  <?= $page->textHow3()->kirbytext() ?>
              </p>
          </div>

      </div>

      <div class="cf"></div>
    </div>
    <div class="button-container">
        <a href="#contact-form" class="btn">Kostenlos anfragen</a>
    </div>
</div>
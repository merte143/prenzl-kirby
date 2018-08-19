<?php
    snippet('header');
?>

<div class="intro">
    <div class="wrap">
        <?= $page->intro()->kirbytext() ?>
    </div>
</div>

<div class="content-container">

    <?php if( $page->text()->isNotEmpty() ) : ?>
    <hr />

    <div class="wrap-lg">
        <?= $page->text()->kirbytext() ?>
    </div>
    <?php endif; ?>

    <section class="grey-bg">

        <div class="wrap-lg">
            <div class="section-heading big">
                <h2>So funktioniert's</h2>
                <div class="divider"></div>
            </div>
        </div>

        <?php
            // -------------------------------------------------
            // How it works
            // -------------------------------------------------

            snippet('how-it-works');
        ?>

    </section>

    <section>

      <?php
          // -------------------------------------------------
          // About us
          // -------------------------------------------------

          snippet('about-us');
      ?>

    </section>

    <section class="grey-bg">

        <div class="wrap-lg">
            <div class="section-heading big">
                <h2>Ihre Vorteile</h2>
                <div class="divider"></div>
            </div>
        </div>

        <?php
            // -------------------------------------------------
            // Advantages
            // -------------------------------------------------

            snippet('advantages');
        ?>

        <div class="wrap-lg">
            <div class="button-container">
                <a href="https://gum.co/kollapse" rel="noopener noreferrer" class="btn" target="_blank">Kostenlos anfragen</a>
            </div>
        </div>

    </section>

    <section>

      <?php
          // -------------------------------------------------
          // Testimonials
          // -------------------------------------------------

          snippet('slider-testimonials');
      ?>

    </section>

    <section class="grey-bg">

      <?php
          // -------------------------------------------------
          // Contact Form
          // -------------------------------------------------

          snippet('contact-form');
      ?>

    </section>

    <section class="color-bg">

    <?php
        // -------------------------------------------------
        // E-Book
        // -------------------------------------------------

        snippet('ebook');
    ?>

    </section>

</div>

<?php snippet('footer') ?>

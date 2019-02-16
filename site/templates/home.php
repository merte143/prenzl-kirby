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
                <a href="#contact-form" class="btn">Kostenloses Beratungsgespräch</a>
            </div>
        </div>

    </section>

    <section>

      <div class="section-heading big">
          <h2>Unsere Kunden</h2>
          <div class="divider"></div>
      </div>

      <?php
          // -------------------------------------------------
          // Testimonials
          // -------------------------------------------------

          snippet('slider-testimonials');
      ?>

    </section>

    <section>

      <div class="section-heading big">
          <h2>NEW TESTIMONIALS</h2>
          <div class="divider"></div>
      </div>

      <section class="wrap-lg" id="testimonial-list">

        <?php $testimonials = $pages->find('testimonials')->children();?>

        <?php foreach($testimonials as $testimonial): ?>

          <div class="wrapper">
            <div class="image-wrapper">
                <?php if( $imageTestimonial1 = $testimonial->images()->find($testimonial->imageTestimonial1()) ): ?>
                    <img src="<?= $imageTestimonial1->url() ?>" alt="customer" />
                <?php endif; ?>
            </div>
            <div class="text-wrapper">
                <p>
                    <?= $testimonial->textTestimonial1()->html() ?>
                </p>
                <h3>
                    <?= $testimonial->titleTestimonial1()->html() ?>
                </h3>
            </div>
          </div>

        <?php endforeach ?>

      </section>

    </section>

    <section class="grey-bg">

      <?php
          // -------------------------------------------------
          // Contact Form
          // -------------------------------------------------

          snippet('contact-form');
      ?>

    </section>

</div>

<?php snippet('footer') ?>

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
                <h2>How it works</h2>
            </div>
        </div>

        <?php
            // -------------------------------------------------
            // How it works
            // -------------------------------------------------

            snippet('how-it-works');
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
          // About us
          // -------------------------------------------------

          snippet('about-us');
      ?>

    </section>

    <section class="grey-bg">

        <div class="wrap-lg">
            <div class="section-heading big">
                <h2>Advantages</h2>
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

    <?php
        // -------------------------------------------------
        // Project Entries
        // -------------------------------------------------

        // Select what type of content you'd like to display
        $items = page('projects')->children()->visible()->limit( (int)(string)$site->paginationProjects() );

        // Select the listing view you'd like to use
        snippet('listing-thumbs',[ 'items' => $items ]);
    ?>

    <div class="wrap-lg">
        <div class="section-heading">
            <h2>Latest Articles</h2>
            <a href="<?= $site->url() ?>/blog" class="btn regular"><i class="fa fa-long-arrow-right"></i> All Articles</a>
        </div>
    </div>

    <?php
        // -------------------------------------------------
        // Blog Entries
        // -------------------------------------------------

        // Select what type of content you'd like to display
        $articles = page('blog')->children()->visible();

        // Select the listing view you'd like to use
        snippet('listing-compact',[ 'items' => $articles ]);
    ?>

    <?php
        // -------------------------------------------------
        // Contact Form
        // -------------------------------------------------

        snippet('contact-form');
    ?>
</div>

<?php snippet('footer') ?>

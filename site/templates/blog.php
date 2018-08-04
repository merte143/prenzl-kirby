<?php snippet('header') ?>

<?php snippet('intro') ?>

<div class="content-container">
    <?php
        $articles = page('blog')->children()->visible()->sortBy('date', 'desc')->paginate( (int)(string)$site->paginationBlog() );
        $pagination = $articles->pagination();

        // Select the listing view you'd like to use
        snippet('listing-text',[ 'items' => $articles ]);
    ?>
    <div class="wrap">
        <?php snippet('pagination', [ 'pagination' => $pagination ]); ?>
    </div>
</div>

<?php snippet('footer') ?>

<?php snippet('header') ?>

<?php snippet('intro') ?>

<div class="content-container">
    <?php
        // Select what type of content you'd like to display
        $items = page('projects')->children()->visible()->sortBy('manually')->paginate( (int)(string)$site->paginationProjects() );
        $pagination = $items->pagination();

        // Select the listing view you'd like to use
        snippet('listing-thumbs',[ 'items' => $items ]);
    ?>
    <div class="wrap">
        <?php snippet('pagination', [ 'pagination' => $pagination ]); ?>
    </div>
</div>


<?php snippet('footer') ?>

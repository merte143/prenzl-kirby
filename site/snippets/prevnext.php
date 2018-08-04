
<?php if($page->hasNextVisible() ): ?>
    <strong>Next</strong> <br />
    <a href="<?= $page->nextVisible()->url(); ?>" class="h1 al"><?= $page->nextVisible()->title(); ?></a> &rarr;
<?php else: ?>
    <strong>The End.</strong> <br />
    <a href="<?= $site->url(); ?>" class="h1 al">Start over</a> &rarr;
<?php endif; ?>

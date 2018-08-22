<div class="topbar">
    <?php if( $page->titleTopbar()->isNotEmpty() ) : ?>
        <?php if ( detect()->isMobile() ) : ?>
            <?= $page->titleTopbarMobile()->kirbytext() ?>
        <?php else: ?>
            <?= $page->titleTopbar()->kirbytext() ?>
        <?php endif; ?>
        
    <?php endif; ?>
</div>

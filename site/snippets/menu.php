<ul class="menu cf">

    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), ' active') ?>>
        <a class="al <?php e($p->isOpen(), ' active') ?>" href="<?= $p->url() ?>"
            <?php if( $site->navigationtype() == 'navoffcanvas' ): ?>
                data-animsition-in-class="overlay-slide-in-right"
                data-animsition-in-duration="500"
                data-animsition-out-class="overlay-slide-out-right"
                data-animsition-out-duration="500"
            <?php else: ?>
                data-animsition-in-class="overlay-slide-in-top"
                data-animsition-in-duration="500"
                data-animsition-out-class="overlay-slide-out-top"
                data-animsition-out-duration="500"
            <?php endif; ?>
            >
            <?= $p->title()->html() ?>
        </a>

        <?php if( $p->hasVisibleChildren() && $p->togglesubnav()->bool() ): ?>
            <span class="submenu-indicator fa"></span>
        <?php endif; ?>

        <?php
        // First Level Cover Image
        // --------------------------------------------------------------- ?>
        <?php if( $p->coverimage()->isNotEmpty() && ( s::get('device_class') == 'desktop' || $site->navigationtype() == 'navoffcanvas' ) ) : ?>
            <div class="cover-image-nav-lvl-01" style="background-image: url(<?php echo $p->image( $p->coverimage() )->url() ?>)"></div>
        <?php endif; ?>

        <?php
        // Submenu
        // --------------------------------------------------------------- ?>
        <?php if( $p->hasVisibleChildren() && $p->togglesubnav()->bool() ): ?>
            <ul class="submenu">
            <?php foreach($p->children()->visible() as $ps): ?>
                <li>
                    <a href="<?= $ps->url() ?>" class="al<?php e($ps->isOpen(), ' active') ?>"
                        <?php if( $site->navigationtype() == 'navoffcanvas' ): ?>
                            data-animsition-in-class="overlay-slide-in-right"
                            data-animsition-in-duration="500"
                            data-animsition-out-class="overlay-slide-out-right"
                            data-animsition-out-duration="500"
                        <?php else: ?>
                            data-animsition-in-class="overlay-slide-in-top"
                            data-animsition-in-duration="500"
                            data-animsition-out-class="overlay-slide-out-top"
                            data-animsition-out-duration="500"
                        <?php endif; ?>
                        >
                        <?= $ps->title()->html() ?>
                    </a>    
                    <?php if( $ps->coverimage()->isNotEmpty() && ( s::get('device_class') == 'desktop' || $site->navigationtype() == 'navoffcanvas' ) ) : ?>
                        <div class="cover-image-nav-lvl-02" style="background-image: url(<?php echo $ps->image( $ps->coverimage() )->url() ?>)"></div>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
            </ul>
        <?php endif ?>

    </li>
    <?php endforeach ?>
    <li>
        <a class="btn-contact" href="#contact">
          <img src="<?php echo url('assets/images/email.png') ?>" alt="mail">
          Kontakt
        </a>
    </li>

    <?php if( (s::get('device_class') == 'desktop') && ($site->navigationtype() == 'navoffcanvas' ) ): ?>
        <?php snippet('social') ?>
    <?php endif; ?>

</ul>

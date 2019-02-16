<ul class="menu cf">
    <li>
        <a class="mobile-menu-action" data-anchor="how-it-works" href="<?= $site->url()?>/#how-it-works">
          So funktioniert's
        </a>
    </li>
    <li>
        <a class="mobile-menu-action" data-anchor="about-us" href="<?= $site->url()?>/#about-us">
          Über uns
        </a>
    </li>
    <li>
        <a class="mobile-menu-action" data-anchor="advantages" href="<?= $site->url()?>/#advantages">
          Ihre Vorteile
        </a>
    </li>
    <li>
        <a class="mobile-menu-action" data-anchor="testimonials" href="<?= $site->url()?>/#testimonials">
          Unsere Kunden
        </a>
    </li>
    <li>
        <a data-anchor="contact-form" class="btn-contact mobile-menu-action" href="<?= $site->url()?>/#contact-form">
          <img src="<?php echo url('assets/images/email.png') ?>" alt="mail">
          Kontakt
        </a>
    </li>

    <?php if( (s::get('device_class') == 'desktop') && ($site->navigationtype() == 'navoffcanvas' ) ): ?>
        <?php snippet('social') ?>
    <?php endif; ?>

</ul>

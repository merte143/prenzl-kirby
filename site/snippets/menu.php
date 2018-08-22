<ul class="menu cf">
    <li>
        <a href="<?= $site->url()?>/#how-it-works">
          So funktioniert's
        </a>
    </li>
    <li>
        <a href="<?= $site->url()?>/#about-us">
          Über uns
        </a>
    </li>
    <li>
        <a href="<?= $site->url()?>/#advantages">
          Ihre Vorteile
        </a>
    </li>
    <li>
        <a href="<?= $site->url()?>/#testimonials">
          Kunden
        </a>
    </li>
    <li>
        <a class="btn-contact" href="<?= $site->url()?>/#contact-form">
          <img src="<?php echo url('assets/images/email.png') ?>" alt="mail">
          Kontakt
        </a>
    </li>

    <?php if( (s::get('device_class') == 'desktop') && ($site->navigationtype() == 'navoffcanvas' ) ): ?>
        <?php snippet('social') ?>
    <?php endif; ?>

</ul>

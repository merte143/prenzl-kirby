<div class="wrap-lg contact-form" id="contact-form">
    <div class="section-heading big">
        <h2><?= $page->titleContactform()->html() ?></h2>
        <p><?= $page->textContactform()->html() ?></p>
    </div>

    <?php if ($form->success()): ?>
      <div class="form-success">
        <?= $page->successContactform()->html() ?>
      </div>
    <?php elseif ($form->error()) : ?>
      <div class="form-fail">
        <?php snippet('uniform/errors', ['form' => $form]) ?>
      </div>
    <?php endif; ?>

    <form class="form" action="<?php echo $page->url() ?>#contact-form" method="POST">

        <label>Ihr Name</label>
        <input<?php if ($form->error('name')): ?> class="error"<?php endif; ?> name="name" placeholder="Max Mustermann" type="text" value="<?php echo $form->old('name') ?>">

        <label>Ihr Unternehmen</label>
        <input<?php if ($form->error('company')): ?> class="error"<?php endif; ?> name="company" placeholder="Muster GmbH" type="text" value="<?php echo $form->old('company') ?>">

        <label>Ihre E-Mail Adresse</label>
        <input<?php if ($form->error('email')): ?> class="error"<?php endif; ?> name="email" placeholder="max.mustermann@muster.de" type="email" value="<?php echo $form->old('email') ?>">

        <label>Ihre Telefonnummer</label>
        <input<?php if ($form->error('phone')): ?> class="error"<?php endif; ?> name="phone" placeholder="030 12345" type="text" value="<?php echo $form->old('phone') ?>">

        <label>Offene Position/en</label>
        <textarea<?php if ($form->error('position')): ?> class="error"<?php endif; ?> placeholder="z.B. Berufskraftfahrer" name="position"><?php echo $form->old('position') ?></textarea>

        <label class="checkbox">
           <input type="checkbox" name="privacy"/> 
           Sie erklären sich damit einverstanden, dass Ihre Daten zur Bearbeitung Ihres Anliegens verwendet werden. Weitere Informationen und Widerrufshinweise finden Sie in unserer Datenschutzerklärung.
        </label>

        <?php echo csrf_field() ?>
        <?php echo honeypot_field() ?>
        <input type="submit" value="Anfrage absenden">
    </form>
    
</div>
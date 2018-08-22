<?php snippet('header') ?>

<div class="wrap">
    <article class="article index">

        <div class="text">
            <?= $page->impressum()->kirbytext() ?>
        </div>

        <div id="deactivate-cookie">
            <h1>Cookies deaktivieren</h1>
            <a onclick="alert('Tracking Cookie wurde deaktiviert');" href="javascript:gaOptout()">Bitte keinen Tracking Cookie setzen.</a>
        </div>

    </article>
</div><!-- wrap -->

<?php snippet('footer') ?>

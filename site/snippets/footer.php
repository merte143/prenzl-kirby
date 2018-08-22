        <div class="cf"></div>

        <div class="footer" role="contentinfo">
            <div class="wrap">

                <div class="cta">
                    <?= $site->footer()->kirbytext() ?>

                    <?php snippet('social') ?>
                </div>

                <div class="cf"></div><br />

                <div class="colophon">
                    <?= $site->copyright()->kirbytext()?>
                </div>

                <div class="cf"></div>

            </div>
        </div>

    </div><!-- #container -->
</div><!-- #canvas -->

<div id="isMobile"></div>

<?= $site->googleanalytics()->html() ?>

<?= js('assets/scripts/scrolltofixed.min.js') ?>
<?= js('assets/scripts/main.js') ?>

<script type="text/javascript">// <![CDATA[
// Set to the same value as the web property used on the site
var gaProperty = 'UA-124253621-1';
 
// Disable tracking if the opt-out cookie exists.
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
  window[disableStr] = true;
}
 
// Opt-out function
function gaOptout() {
  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  window[disableStr] = true;
}
</script>

<noscript>
    <style>
        .animsition-overlay-slide {
            display: none !important;
        }
    </style>
</noscript>

<?= cookie(); ?>

</body>
</html>

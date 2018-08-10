<div class="slider glide">
    <div class="glide__arrows">
        <button class="glide__arrow prev" data-glide-dir="<">◀</button>
        <button class="glide__arrow next" data-glide-dir=">">▶</button>
    </div>

    <div class="glide__wrapper">
        <ul class="glide__track">

            <li class="glide__slide">
                <?php if( $imageTestimonial1 = $page->images()->find($page->imageTestimonial1()) ): ?>
                    <img src="<?= $imageTestimonial1->url() ?>" alt="" />
                <?php endif; ?>
                <h3>
                    <?= $page->titleTestimonial1()->html() ?>
                </h3>
                <p>
                    <?= $page->textTestimonial1()->html() ?>
                </p>
            </li>

            <li class="glide__slide">
                <?php if( $imageTestimonial2 = $page->images()->find($page->imageTestimonial2()) ): ?>
                    <img src="<?= $imageTestimonial2->url() ?>" alt="" />
                <?php endif; ?>
                <h3>
                    <?= $page->titleTestimonial2()->html() ?>
                </h3>
                <p>
                    <?= $page->textTestimonial2()->html() ?>
                </p>
            </li>

        </ul>
    </div>

    <div class="glide__bullets"></div>
</div><!-- .slider -->
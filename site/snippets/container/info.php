<div id="container__contents" class="container--info is-show">
    <div class="contact-container">
<?php 
    $info = page('home/info');
    if ($info) : ?>
        <div class="newsletter">
            <a href="&#77;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#105;&#109;&#115;&#111;&#111;&#106;&#97;&#48;&#49;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;&#63;&#115;&#117;&#98;&#106;&#101;&#99;&#116;&#61;&#78;&#101;&#119;&#115;&#108;&#101;&#116;&#116;&#101;&#114;&#37;&#50;&#48;&#83;&#117;&#98;&#115;&#99;&#114;&#105;&#98;&#101;&body=%0D%0A<?= $info->newsletterinfo()->html() ?>%0D%0A%0D%0A[성함]%0D%0A[연락처]">
            <?= $info->newsletterTitle()->html() ?>
            </a>
        </div>
        <div class="contact">
            <h1>Contact</h1>
            <div class="contact--detail">
                <?php
                $con = $info->contactlist()->toStructure();
                if($con->isNotEmpty()):
                ?>
                    <?php foreach( $con as $c): ?>
                        <div class="contact--detail__items">
                            <p class="studio"><?= $c->studio()->html() ?></p>
                            <p class="contactinfo"><?= $c->contactinfo()->kt() ?></p>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif ?>
</div>
</div>

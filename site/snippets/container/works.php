<?php if ($works = page('home/works')): ?>
<div id="container__contents" class="container--works is-show">
    <div class="container--works__filters">
        <?php snippet('filters/category') ?>
        <?php snippet('filters/timeline') ?>
    </div>
    <div class="container--works__work">
    <?php snippet('loader') ?>
        <?php foreach ($artworks as $p): ?>
            <div class="container--works__work--items">
                <div class="container--works__work--items__thumbnail">
                    <?php if ($mainImg = $p->workImgMain()->toFile()): ?>
                        <img class="worksmainImg" src="<?= $mainImg->url() ?>">
                    <?php endif ?>
                    <span>
                        <?= $p->title()->kt() ?>
                    </span>
                </div>
                <div class="container__contents--detail detail" data-open="false">
                    <div class="closedetail">
                        <div class="btn"></div>
                    </div>
                    <div class="detail-content">
                    <?php if ($p->workImgs()->isNotEmpty()): ?>
                        <div class="detail--slider" id="sliderout">
                            <?php
                            if ($p->oneimgtoggle()->toBool() === false): ?>
                            <div class="slider__btn">
                                <div class="prev" onclick="prevscrolling()"><div class="btn"></div></div>
                                <div class="next" onclick="nextscrolling()"><div class="btn"></div></div>
                            </div>
                            <?php elseif ($p->oneimgtoggle()->toBool() === true):?>
                            <?php endif ?>
                            <div class="slider__img sliderin" id="sliderin"><?= $p->workImgs()->toBlocks() ?></div>
                        </div>
                    <?php endif ?>
                    <h1 class="detail--title"><?= $p->title()->html() ?></h1>
                    <div class="detail--des"><?= $p->workDescription()->kt() ?></div>
                    <div class="detail--info">
                        <div class="detail--info__etc">
                            <?php if ($p->worklocatin()->isNotEmpty()): ?>
                                <div><?= $p->worklocatin()->kt() ?></div>
                            <?php endif ?>
                                <em><?= $p->timeline()->html() ?></em>
                            <?php if ($p->workCredit()->isNotEmpty()): ?>
                                <em><?= $p->workCredit()->kt() ?></em>
                            <?php endif ?>
                        </div>
                        <?php if ($p->workCaption()->isNotEmpty()): ?>
                            <em class="detail--info__caption"><?= $p->workCaption()->kt() ?></em>
                        <?php endif ?>
                    </div>
                    <?php if ($p->additionalvideo()->isNotEmpty()): ?>
                        <div class="detail--extravideo"><?= $p->additionalvideo()->toBlocks() ?></div>
                    <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <div class="workbottom">
            <?php snippet('pagination') ?>
            <?php snippet('copyright') ?>
        </div>
    </div>
</div>
<?php endif ?>
<div class="search">
    <form action="/works">
        <input class="search__bar" type="search" aria-label="Search" name="q" value="<?= html($query) ?>">
        <input class="search__btn" type="submit" value="Search">
    </form>
    <ul class="search--results">
        <?php foreach ($results as $result): ?>
        <li>
            <a href="<?= $result->url() ?>">
                <?= $result->title() ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</div>

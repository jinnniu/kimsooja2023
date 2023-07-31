<div class="wrapper">
    <div class="container--texts__filters">
        <?php snippet('filters/textcategory') ?>
        <?php snippet('filters/textyear') ?>
    </div>
<div class="container--reading__contents--item container--texts is-show">
    <div class="container--texts__items listbox">
        <?php foreach ($textslist as $tlist): ?>
        <div class="container--texts__items--list">
            <p><?= $tlist->textYear()->html() ?></p>
            <p><?= $tlist->title()->html() ?></p>
        </div>
        <?php endforeach ?>
    </div>
    <div class="container--texts__items detailbox">
        <?php foreach ($textslist as $tlist): ?>
        <div class="container--texts__items--detail" data-open="false">
            <div class="closedetail">
                <div class="btn"></div>
            </div>
            <?php if ($tlist->textImg()->isNotEmpty()): ?>
            <div class="detail-text--img">
                <?php if ($textImg = $tlist->textImg()->toFile()): ?>
                    <img src="<?= $textImg->url() ?>" />
                <?php endif ?>
                <?php if ($tlist->textImgCaption()->isNotEmpty()): ?>
                    <span><?= $tlist->textImgCaption()->html() ?></span>
                <?php endif ?>

                <?php if ($textImg2 = $tlist->textImg2()->toFile()): ?>
                    <img class="subimg" src="<?= $textImg2->url() ?>" />
                <?php endif ?>
                <?php if ($tlist->textImgCaption2()->isNotEmpty()): ?>
                    <span><?= $tlist->textImgCaption2()->html() ?></span>
                <?php endif ?>
            </div>
            <?php endif ?>
            <div class="detail-text">
                <div class="detail-text--title"><?= $tlist->textTitle()->toBlocks() ?></div>
                <div class="detail-text--info">
                    <p class="detail-text--author"><?= $tlist->textAutor()->html() ?></p>
                    <p><?= $tlist->textYear()->html() ?></p>
                </div>
                <div class="detail-text--contents">
                    <div class="detail-text--contents__des"><p><?= $tlist->textContents()->kt() ?></p></div>
                    <?php if ($tlist->textCaption()->isNotEmpty()): ?>
                        <div class="detail-text--contents__cap"><p><?= $tlist->textCaption()->kt() ?></p></div>
                    <?php endif ?>
                </div>
                <div class="backtop">
                    <div class="btn"></div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
</div>
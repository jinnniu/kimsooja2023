<div class="container--reading__contents--item container--publications is-show">
    <div class="container--publications__filters">
        <?php snippet('filters/bookyear') ?>
    </div> 
    <div class="container--publications__books">
        <?php foreach ($bookslist as $blist): ?>
            <div class="container--publications__items">
                <div class="container--publications__items--head">
                    <img src="<?= $blist->bookcover()->toFile()->url() ?>" alt="<?= $blist->title()->html() ?>"/>
                </div>
                <div class="container--publications__items--content">
                    <p class="book__title"><?= $blist->title()->html() ?></p>
                    <p><?= $blist->booksinformation()->kt() ?></p>
                    <p class="book__publisher"><?= $blist->bookspublishedby()->kt() ?></p>
                </div>
            </div>
        <?php endforeach ?>
    <?php snippet('pagination') ?>
    <?php snippet('copyright') ?>
    </div>
</div>
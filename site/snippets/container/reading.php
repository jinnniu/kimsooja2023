<div id="container__contents" class="container--reading is-show">
    <div class="menu-container reading-menu">
        <?php if ($reading = page('home/reading')): ?>
        <?php foreach ($reading->children()->listed() as $menus): ?>
            <div class="menubars <?php if($page->is(page($menus)) == true): ?>menu-active<?php endif ?>">
                <span data-location="<?= $menus->url() ?>">
                <?= $menus->title()->html() ?>
                </span>
            </div>
        <?php endforeach ?>
        <?php endif ?>
    </div>

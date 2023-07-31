<div id="menu-container">
    <div id="menu-icon">
        <svg viewBox="0 0 100 100" fill="none">
            <path stroke="#000" stroke-width="4" d="M45 0v89.5M90 45H.5"/>
        </svg>
    </div>
    <div id="menu-inside">
        <div class="menubars">
            <span data-location="<?= page('home')->url() ?>">Home</span>
        </div>
        <div class="menubars <?php if($page->is(page('home/works')) == true): ?>menu-active<?php endif ?>">
            <span data-location="<?= page('home/works')->url() ?>">Works</span>
        </div>
        <?php if ($reading = page('home/reading')): ?>
        <div class="menubars dropwrapper <?php if($page->is(page($reading->children()->url())) == true && $page->is(page('home/works')) == false && $page->is(page('home/info/')) == false && $page->is(page('home/info/biography')) == false && $page->is(page('home/info/bibliography')) == false) : ?>menu-active<?php endif ?>">
        <?php endif ?>
            <span data-location="<?= page('home/reading/texts')->url() ?>">Texts</span>
            <div class="dropdown">
                <a href="<?= page('home/reading/texts')->url() ?>"><p class="<?php if($page->is(page('home/reading/texts')) == true): ?>drop-active<?php endif ?>">Essay / Interview</p></a>
                <a href="<?= page('home/reading/publications')->url() ?>"><p class="<?php if($page->is(page('home/reading/publications')) == true): ?>drop-active<?php endif ?>">Publication</p></a>
            </div>
        </div>
        <div class="menubars <?php if($page->is(page('home/info/biography')) == true): ?>menu-active<?php endif ?>">
            <span data-location="<?= page('home/info/biography')->url() ?>">Biography</span>
        </div>
        <div class="menubars <?php if($page->is(page('home/info/bibliography')) == true): ?>menu-active<?php endif ?>">
            <span data-location="<?= page('home/info/bibliography')->url() ?>">Bibliography</span>
        </div>
        <div class="menubars <?php if($page->is(page('home/info')) == true): ?>menu-active<?php endif ?>">
            <span data-location="<?= page('home/info')->url() ?>">Contact</span>
        </div>
    </div>
</div>
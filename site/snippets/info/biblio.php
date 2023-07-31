<?php $biblio = page('home/info/bibliography'); ?>
<div class="biblio--main">
<?php
    $biblio = $biblio->bibliomain()->toStructure();
    if($biblio->isNotEmpty()):
    ?>
    <h1>Selected Bibliography</h1>
    <table class="biblio--table table">
        <?php foreach( $biblio as $b): ?>
            <tr>
                <td class="year"><?= $b->year()->html() ?></td>
                <td class="des"><?= $b->description()->kt() ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <?php endif; ?>
</div>

<div>
    <?php snippet('copyright') ?>
</div>
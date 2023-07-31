<?php $bio = page('home/info/biography'); ?>
    <h1 class="bio-title">KIMSOOJA</h1>
    <div class="bio--main"><p><?= $bio->biomain()->kt() ?></p></div>
    <?php
        $education = $bio->education()->toStructure();
        if($education->isNotEmpty()):
        ?>
        <h1>Education and Residencies</h1>
        <table class="bio--table table">
            <?php foreach( $education as $e): ?>
                <tr>
                    <td class="year"><?= $e->year()->html() ?></td>
                    <td class="des"><?= $e->description()->html() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $solo = $bio->solo()->toStructure();
        if($solo->isNotEmpty()):
        ?>
        <h1>Solo Exhibitions & Site Specific Projects</h1>
        <table class="bio--table table">
            <?php foreach( $solo as $s): ?>
                <tr>
                    <td class="year"><?= $s->year()->html() ?></td>
                    <td class="des"><?= $s->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $twoperson = $bio->twoperson()->toStructure();
        if($twoperson->isNotEmpty()):
        ?>
        <h1>Selected Two Person Shows</h1>
        <table class="bio--table table">
            <?php foreach( $twoperson as $t): ?>
                <tr>
                    <td class="year"><?= $t->year()->html() ?></td>
                    <td class="des"><?= $t->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $group = $bio->group()->toStructure();
        if($group->isNotEmpty()):
        ?>
        <h1>Solo Exhibitions & Site Specific Projects</h1>
        <table class="bio--table table">
            <?php foreach( $group as $g): ?>
                <tr>
                    <td class="year"><?= $g->year()->html() ?></td>
                    <td class="des"><?= $g->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $grants = $bio->grants()->toStructure();
        if($grants->isNotEmpty()):
        ?>
        <h1>Grants, Awards and Commissioned Work</h1>
        <table class="bio--table table">
            <?php foreach( $grants as $r): ?>
                <tr>
                    <td class="year"><?= $r->year()->html() ?></td>
                    <td class="des"><?= $r->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $teaching = $bio->teaching()->toStructure();
        if($teaching->isNotEmpty()):
        ?>
        <h1>Artist Talks and Teaching</h1>
        <table class="bio--table table">
            <?php foreach( $teaching as $c): ?>
                <tr>
                    <td class="year"><?= $c->year()->html() ?></td>
                    <td class="des"><?= $c->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

    <?php
        $publiccollect = $bio->publiccollect()->toStructure();
        if($publiccollect->isNotEmpty()):
        ?>
        <h1>Public Collections</h1>
        <table class="bio--table table">
            <?php foreach( $publiccollect as $p): ?>
                <tr>
                    <td class="year"><?= $p->year()->html() ?></td>
                    <td class="des"><?= $p->description()->kt() ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>

<div>
    <?php snippet('copyright') ?>
</div>
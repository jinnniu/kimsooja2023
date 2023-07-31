<div class="filter">
  <p class="filter--title">Year</p>
  <ul class="filter--category">
  <?php $activeTextTag = param('bookYear'); ?>
  <?php $cate = kirby()->request()->params()->tag(); ?>
    <li>
      <a <?php e($bookyears == $cate, 'class="activebtn"') ?>  href="<?= url($page->url()) ?>">All</a>
    </li>
    <?php foreach ($bookyears as $bookyears): ?>
      <li>
        <a <?= $activeTextTag === $bookyears ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => ['bookYear' => $bookyears]]) ?>"><?= html($bookyears) ?></a>
      </li>
      <?php endforeach ?>
  </ul>
</div>

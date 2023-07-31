<div class="filter">
  <p class="filter--title">Category</p>
  <ul class="filter--category">
  <?php $activeTextTag = param('textCategory'); ?>
    <?php foreach ($textcategories as $textcategories): ?>
      <li>
        <a <?= $activeTextTag === $textcategories ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => array_merge(params(),['textCategory' => $textcategories])]) ?>"><?= html($textcategories) ?></a>
      </li>
      <?php endforeach ?>
  </ul>
</div>


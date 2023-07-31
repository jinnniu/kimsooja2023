<div class="filter">
  <p class="filter--title">Timeline</p>
  <ul class="filter--category">
  <?php $activeTextTag = param('textYear'); ?>
    <?php foreach ($textyears as $textyears): ?>
      <li>
        <a <?= $activeTextTag === $textyears ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => array_merge(params(),['textYear' => $textyears])]) ?>"><?= html($textyears) ?></a>
      </li>
      <?php endforeach ?>
  </ul>
</div>



<div class="filter">
  <p class="filter--title">Timeline</p>
  <ul class="filter--category less-timelne" id="work-category-filter">
  <?php $activeTag = param('timeline'); ?>
    <?php foreach($timelines as $timeline): ?>
    <li>
    <?php 
      $params = [];
      if (param('timeline')) {
        $params['timeline'] = param('timeline');
      }

      if (param('category')) {
        $params['category'] = param('category');
      }
      ?>
      <a <?= $activeTag === $timeline ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => array_merge($params,['timeline' => $timeline])]) ?>">
        <?= html($timeline) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <p id="extension-btn">More</p>
</div>


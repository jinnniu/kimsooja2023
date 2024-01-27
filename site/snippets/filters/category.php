<div class="filter">
  <p class="filter--title">Category</p>
  <ul class="filter--category less-timelne" id="category-filter">
  <?php $activeTag = param('category'); ?>
  <?php $cate = kirby()->request()->params()->tag(); ?>
    <li>
      <a <?php  e(empty($activeTag), 'class="activebtn"') ?>  href="<?= url($page->url()) ?>">All</a>
    </li>
    <?php foreach($categories as $category): ?>
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
      <a <?= $activeTag === $category ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => array_merge($params,['category' => $category])]) ?>">
        <?= html($category) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <p id="category-exbtn">More</p>
</div>
<script>
// Work Category div height
let workCategoryFilter = document.getElementById("category-filter");
let workcatemorebtn = document.getElementById("category-exbtn");

workcatemorebtn.addEventListener("click", (e) => {
  workCategoryFilter.classList.toggle("more-open");
  workCategoryFilter.classList.contains("more-open")
    ? (workcatemorebtn.innerHTML = "Less")
    : (workcatemorebtn.innerHTML = "More");
});
</script>


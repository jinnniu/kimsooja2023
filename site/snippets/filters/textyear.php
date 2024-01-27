<div class="filter">
  <p class="filter--title">Timeline</p>
  <ul class="filter--category less-timelne" id="text-timeline-filter">
  <?php $activeTextTag = param('textYear'); ?>
    <?php foreach ($textyears as $textyears): ?>
      <li>
        <a <?= $activeTextTag === $textyears ? ' class="activebtn"' : '' ?> href="<?= url($page->url(), ['params' => array_merge(params(),['textYear' => $textyears])]) ?>"><?= html($textyears) ?></a>
      </li>
      <?php endforeach ?>
  </ul>
  <p id="text-exbtn">More</p>

</div>
<script>
// Text timeline div height
let textCategoryFilter = document.getElementById("text-timeline-filter");
let textmorebtn = document.getElementById("text-exbtn");

textmorebtn.addEventListener("click", (e) => {
  textCategoryFilter.classList.toggle("more-open");
  textCategoryFilter.classList.contains("more-open")
    ? (textmorebtn.innerHTML = "Less")
    : (textmorebtn.innerHTML = "More");
});
</script>

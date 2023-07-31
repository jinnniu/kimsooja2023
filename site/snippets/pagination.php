<div class="pagination">
  <?php foreach ($pagination->range(10) as $r): ?>
    <p>
      <a <?= $pagination->page() === $r ? ' aria-current="page"' : ''?> href="<?= $pagination->pageURL($r) ?>">
        <?= $r ?>
        </a>
    </p>
    <?php endforeach ?>
</div>
<?php

return function ($site, $pages, $page) {

  $bookslist = page('home/reading/publications')->children()->listed();
  $bookyears = $bookslist->pluck('bookYear', ',', true);
  
  if($bookyear = param('bookYear')) {
    $bookslist = $bookslist->filterBy('bookYear', $bookyear, ',');

  }

  // pagination
  $bookslist   = $bookslist->paginate(10);
  $pagination = $bookslist->pagination();

  return compact('bookslist', 'bookyears', 'bookyear', 'pagination');

};

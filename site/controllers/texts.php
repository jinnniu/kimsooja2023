<?php

return function ($site, $pages, $page) {

  $textcategory = param('textCategory');
  $textyear = param('textYear');

  $textslist = page('home/reading/texts')->children()->listed();
  $textcategories = $textslist->pluck('textCategory', ',', true);
  $textyears = $textslist->pluck('textYear', ',', true);
  
  $textslist =  $textslist
      ->when($textcategory, function ($textcategory) {
          return $this->filterBy('textCategory', $textcategory, ',');
      })
      ->when($textyear, function ($textyear) {
        return $this->filterBy('textYear', $textyear, ',');
    });
      

  return compact('textslist', 'textcategories', 'textyears');

};


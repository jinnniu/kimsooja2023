<?php

return function ($site, $pages, $page) {

  $workcategory = param('category');
  $worktimeline = param('timeline');

  $artworks = page('home/works')->children()->listed();
  $categories = $artworks->pluck('category', ',', true);
  $timelines = $artworks->pluck('timeline', ',', true);
  
  $artworks =  $artworks
      ->when($workcategory, function ($workcategory) {
          return $this->filterBy('category', $workcategory, ',');
      })
      ->when($worktimeline, function ($worktimeline) {
          return $this->filterBy('timeline', $worktimeline);
      });
    

      $query   = get('q');
      $results = $artworks->search($query, 'title');
    
  // pagination
  $artworks   = $artworks->paginate(30);
  $pagination = $artworks->pagination();



  return compact('artworks', 'categories','timelines', 'query', 'results', 'pagination');

};


<?php

unset(Kirby\Sane\Sane::$handlers['svg']);
unset(Kirby\Sane\Sane::$aliases['image/svg']);
unset(Kirby\Sane\Sane::$aliases['image/svg+xml']);

c::set('routes', array(
	array(
		'pattern' => '(:any)',
		'action'  => function($uid) {
			$page = page($uid);
			if(!$page) $page = page('home/' . $uid);
			if(!$page) $page = page('home/reading/' . $uid);
			if(!$page) $page = page('home/info/' . $uid);
			if(!$page) $page = site()->errorPage();
			return site()->visit($page);
		}
	),
	array(
		'pattern' => ['home/(:any)', 'home/reading/(:any)', 'home/info/(:any)'],
		'action'  => function($uid) {
			go($uid);
		}
	)
));

return [
    'debug' => true,
	'oblik.git.hooks' => [
        'site.update:after',
        'page.update:after'
    ],
    'panel' => [
        'css' => 'assets/css/panel.css'
      ]
];


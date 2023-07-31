<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="Kimsooja">
  <meta property="og:type" content="website">
  <meta property="og:description" content="description of the website">
  <meta property="og:locale" content="en_US" />
  <title><?= $site->title() ?></title>
  <!-- SEO -->
  <?php snippet('meta_information'); ?>
  <?php snippet('robots'); ?>
  <link rel="icon" href="/assets/favicon.ico" type="image/x-icon"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;500;700&display=swap" rel="stylesheet">
  <?= css(['assets/css/index.css', '@auto']) ?>
</head>
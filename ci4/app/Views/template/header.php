<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
        <!-- Header -->
        <header>
            <h1>Layout Sederhana</h1>
        </header>

        <!-- Navigation -->
        <?php $current_url = current_url(); ?>
        <nav>
            <ul>
                <li><a href="<?= base_url('/'); ?>" class="<?= ($current_url == base_url('/')) ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?= base_url('/artikel'); ?>" class="<?= (strpos($current_url, base_url('/artikel')) !== false) ? 'active' : ''; ?>">Artikel</a></li>
                <li><a href="<?= base_url('/about'); ?>" class="<?= (strpos($current_url, base_url('/about')) !== false) ? 'active' : ''; ?>">About</a></li>
                <li><a href="<?= base_url('/contact'); ?>" class="<?= (strpos($current_url, base_url('/contact')) !== false) ? 'active' : ''; ?>">Kontak</a></li>
            </ul>
        </nav>

        <section id="wrapper">
            <section id="main">

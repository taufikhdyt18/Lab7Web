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
        <nav>
            <ul>
                <li><a href="<?= base_url('/');?>" class="active">Home</a></li>
                <li><a href="<?= base_url('/artikel');?>">Artikel</a></li>
                <li><a href="<?= base_url('/about');?>">About</a></li>
                <li><a href="<?= base_url('/contact');?>">Kontak</a></li>
            </ul>
        </nav>

        <section id="wrapper">
            <section id="main">
                <?= $this->renderSection('content') ?>
            </section>

            <aside id="sidebar">
                <div class="widget-box">
                    <h3>Artikel Terkini</h3>
                    <?= view_cell('App\\Cells\\ArtikelTerkini::render') ?>
                </div>

                <div class="widget-box">
                    <h3>Widget Header</h3>
                    <ul>
                        <li><a href="#">Widget Link</a></li>
                        <li><a href="#">Widget Link</a></li>
                    </ul>
                </div>

                <div class="widget-box">
                    <h3>Widget Text</h3>
                    <p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu.</p>
                </div>
            </aside>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 - Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<!-- Tambahkan View Cell untuk artikel dengan kategori tertentu -->
<h2>Artikel Terkini</h2>
<?= view_cell('App\Cells\ArtikelTerkini', ['kategori' => 'Teknologi']) ?>

<?= $this->endSection() ?>

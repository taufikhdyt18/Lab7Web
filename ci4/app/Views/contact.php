<?= $this->include('template/header'); ?>

<h2 class="page-title">Kontak Kami</h2>

<div class="contact-container">
    <div class="contact-info">
        <p><strong><i class="fas fa-envelope"></i> Email:</strong> 
            <a href="mailto:taufikhidayat3621@gmail.com">taufikhidayat3621@gmail.com</a>
        </p>
        <p><strong><i class="fas fa-map-marker-alt"></i> Alamat:</strong> Sukatani, Cikarang</p>
        <p><strong><i class="fas fa-phone"></i> Telepon:</strong> 
            <a href="tel:+6281286275726">+62 812-8627-5726</a>
        </p>
    </div>

    <div class="contact-form">
        <h3>Hubungi Kami</h3>
        <form action="#" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan Nama Anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" placeholder="Tulis pesan Anda..." required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</div>

<?= $this->include('template/footer'); ?>

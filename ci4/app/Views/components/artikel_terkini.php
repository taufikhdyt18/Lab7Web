<?php if (!empty($artikel)) : ?>
    <ul>
        <?php foreach ($artikel as $a) : ?>
            <li>
                <a href="<?= base_url('artikel/' . $a['slug']); ?>">
                    <?= esc($a['judul']); ?>
                </a>
                <br>
                <small>Diposting pada: <?= date('d M Y, H:i', strtotime($a['created_at'])); ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>Belum ada artikel di kategori ini.</p>
<?php endif; ?>

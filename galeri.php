<?php
include 'includes/header.php'; ?>

<section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/gallery-hero.jpg') center/cover;">
    <div class="container">
        <h2>Galeri Kegiatan</h2>
        <p>Dokumentasi momen-momen spesial dari berbagai kegiatan kami</p>
    </div>
</section>

<section id="gallery-content">
    <div class="container">
        <div class="section-title">
            <h2>Koleksi Foto</h2>
        </div>
        
        <div class="gallery-grid">
            <?php
            // Scan folder assets/images/galeri dan tampilkan semua gambar yang ada
            $localDir = __DIR__ . '/assets/images/galeri';
            $webDir = '/melatiputih/assets/images/galeri'; // sesuaikan jika project berada di root lain
            $images = [];

            // load captions mapping jika ada
            $captionsFile = $localDir . '/captions.json';
            $captions = [];
            if (file_exists($captionsFile)) {
                $json = file_get_contents($captionsFile);
                $captions = json_decode($json, true) ?: [];
            }

            if (is_dir($localDir)) {
                $files = glob($localDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                sort($files);
                foreach ($files as $f) {
                    $images[] = basename($f);
                }
            }

            if (empty($images)) {
                echo "<p>Tidak ada foto di galeri. Silakan upload ke assets/images/galeri/</p>";
            } else {
                foreach ($images as $image) {
                    // gunakan caption dari captions.json jika ada, jika tidak fallback ke nama file
                    if (isset($captions[$image]) && trim($captions[$image]) !== '') {
                        $caption = htmlspecialchars($captions[$image], ENT_QUOTES);
                    } else {
                        $caption = htmlspecialchars(ucwords(str_replace(['-', '_'], ' ', pathinfo($image, PATHINFO_FILENAME))), ENT_QUOTES);
                    }

                    $src = "{$webDir}/{$image}";
                    echo "
                    <div class='gallery-item' data-src='{$src}'>
                        <img src='{$src}' alt='{$caption}'>
                        <div class='gallery-caption'>{$caption}</div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Modal untuk gambar penuh -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

<?php include 'includes/footer.php'; ?>
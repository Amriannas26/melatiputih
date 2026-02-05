<?php include 'includes/header.php'; ?>

<section class="hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/contact-hero.jpg') center/cover;">
    <div class="container">
        <h2>Hubungi Kami</h2>
        <p>Silakan menghubungi kami untuk informasi lebih lanjut</p>
    </div>
</section>

<section id="contact-content">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h3>Informasi Kontak</h3>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h4>Alamat</h4>
                        <p>Ngoro-Oro, Luwang, Gatak, Sukoharjo</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 895-4296-12669</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p>melatiputih3108@email.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <div>
                        <h4>Jam Operasional</h4>
                        <p>Senin - Sabtu: 09.00 - 15.00 WIB</p>
                    </div>
                </div>
                
                <h3 style="margin-top: 2rem;">Lokasi Kami</h3>
                <div id="map" class="contact-map" style="margin-top: 1rem;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1977.4480485695974!2d110.7334716!3d-7.5862875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15005d6dd509%3A0x1a9e82deede3d8f5!2sLapangan%20Bola%20Voli%20MP%20VAN!5e0!3m2!1sid!2sid!4v1765428256624!5m2!1sid!2sid" width="100%" height="320" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="contact-form">
                <h3>Kirim Pesan</h3>
                <form id="contactForm" action="process_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
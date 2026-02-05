<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karang Taruna Melati Putih</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index.php" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <div class="logo-img">
                        <img src="/melatiputih/assets/images/logo.jpg" alt="Logo Karang Taruna Melati Putih">
                    </div>
                    <div>
                        <h1>Karang Taruna <span>Melati Putih</span></h1>
                    </div>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="tentang.php" class="<?php echo $current_page == 'tentang.php' ? 'active' : ''; ?>">Tentang</a></li>
                    <li><a href="program.php" class="<?php echo $current_page == 'program.php' ? 'active' : ''; ?>">Program</a></li>
                    <li><a href="galeri.php" class="<?php echo $current_page == 'galeri.php' ? 'active' : ''; ?>">Galeri</a></li>
                    <li><a href="kontak.php" class="<?php echo $current_page == 'kontak.php' ? 'active' : ''; ?>">Kontak</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">☰</div>
        </div>
    </header>
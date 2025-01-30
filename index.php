<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" sizes="16x16" href="public/favicon-16x16.png" />
  <link rel="icon" sizes="32x32" href="public/favicon-32x32.png" />
  <link rel="icon" sizes="180x180" href="public/apple-touch-icon.png" />
  <link rel="icon" sizes="192x192" href="public/android-chrome-192x192.png" />
  <link rel="icon" sizes="512x512" href="public/android-chrome-512x512.png" />
  <link rel="icon" href="public/favicon.ico" type="image/x-icon" />
  <link rel="manifest" href="public/site.webmanifest" />
  <meta name="theme-color" content="#eedcc4">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Donna Gio: Parruchieri a Bologna</title>
</head>
<body>
  <main class='main'>
    <section class="container main-container">
      <div class='card-logo'>
        <img src="public/logo.png" class="main-logo"/>
        <span class='card-subtitle'>PARRUCCHIERE PER DONNA, UOMO E BAMBINO</span>
      </div>
    </section>
    <?php
    require_once './footer.php';
    $footer = get_footer(); 
    echo $footer
    ?>
  </main>
</body>
</html>
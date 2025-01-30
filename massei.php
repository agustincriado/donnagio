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
    <link rel="stylesheet" href="styles/site.css">
    <link rel="stylesheet" href="styles/new_styles.css">
    <link rel="stylesheet" href="styles/carousel.css">
    <title>Salone Donna Gio Studio - Parruchieri a Bologna</title>
    <script src="./script.js"></script>
</head>
<body class="">
    <header class="customHeader">
        <div class="logoContainer">
            <img src="public/logo.png" class="h-12 navbar-logo" />
            <span class="logo-text">Donna Gio Studio</span>
        </div>
        <nav class="link-container">
            <a href="/" class="link">HOME</a>
            <a href="#services" class="link">SALONE</a>
            <a href="#gallery" class="link">SERVIZI</a>
            <a href="#contact" class="link">GALLERY</a>
            <a href="#contact" class="link">CONTATTI</a>
        </nav>
        <button id='menu-btn' class="mobile-btn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </header>

    <main class="main-container">
        <section class="section image-section">
            <div class="image-container">
                <img src="public/studio.jpg" alt="Salon Interior" class="image-main">
                <div class="image-overlay" style="background: linear-gradient(15deg, rgba(0,0,0,0.5) 54%, rgba(0,0,0,0.2) 85%);"></div>
            </div>
            <article class="main-text-container">
                <div class="text-container">
                    <h1 class="main-text primary-text">DONNA GIO STUDIO</h1>
                    <h3 class="main-text secondary-text">PARRUCCHIERE PROFESSIONALI PER DONNE, UOMINI E BAMBINI</h3>
                    <p class="main-subtext">dove l'eleganza incontra la cura</p>
                    <button class="action-button">Prenota Ora</button>
                </div>
                </article>
        </section>

        <section id="services" class="section">
            <h2 class="section-title">I NOSTRI SERVIZI</h2>
            <div class="service-grid">
                <article class="service-article">
                    <img src="public/mani-DAB_9652-683x1024.jpg" alt="Haircut" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">TAGLIO</h3>
                    <p class="text-gray-600 mb-4">Il taglio si basa sullo studio delle proporzioni auree del volto e sulle caratteristiche del capello, privilegiando, nell'esecuzione tecnica, una facile gestione a casa.</p>
                </article>
                <article class="service-article">
                    <img src="https://images.unsplash.com/photo-1519735777090-ec97162dc266?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Color" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">COLORAZIONE</h3>
                    <p class="text-gray-600 mb-4">I trattamenti di colorazione, rigorosamente senza ammoniaca, non danneggiano la fibra del capello, nutrendola di applicazione in applicazione grazie all'utilizzo di prodotti basati sui principi della Green Chemistry.</p>
                </article>
                <article class="service-article">
                    <img src="public/5-DAB_9632-683x1024.jpg" alt="Styling" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">ANALISI DEL CAPELLO</h3>
                    <p class="text-gray-600 mb-4">La bellezza dei capelli passa dalla salute del cuoio capelluto: per questo effettuiamo un'analisi tricologica personalizzata con microcamera digitale.</p>
                </article>
                <article class="service-article">
                    <img src="public/donna-gio-59-683x1024.jpg" alt="Haircut" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">AREA KIDS</h3>
                    <p class="text-gray-600 mb-4">Riserviamo una particolare attenzione ai bambini, utilizzando forbici senza punte e dedicando loro un'apposita area gioco all'interno del salone.</p>
                    <p class="text-gray-600 mb-4">È a disposizione anche un fasciatoio.</p>
                </article>
                <article class="service-article">
                    <img src="public/donna-gio-53-1024x683.jpg" alt="Color" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">BARBER SHOP</h3>
                    <p class="text-gray-600 mb-4">Per gli uomini, abbiamo progettato un barber shop che prevede, oltre alla zona taglio, anche il servizio barba.</p>
                </article>
                <article class="service-article">
                    <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Styling" class="service-image">
                    <h3 class="text-xl font-semibold mb-2">PET FRIENDLY</h3>
                    <p class="text-gray-600 mb-4">Special occasion and bridal styling</p>
                </article>
            </div>
        </section>

        <section id="images-gallery" class="section">
            <h2 class="section-title">GALLERY FOTOGRAFICA</h2>
            <article class='carousel-container' data-index='0'>
                <div class='carousel-track'>
                  <img src='public/donna-gio-19-1024x683.jpg' />
                  <img src='public/donna-gio-23-1024x683.jpg' />
                  <img src='public/donna-gio-37-683x1024.jpg' />
                  <img src='public/donna-gio-33-1024x683.jpg' />
                  <img src='public/donna-gio-39-1024x683.jpg' />
                  <img src='public/5-DAB_9632-683x1024.jpg' />
                  <img src='public/donna-gio-41-1024x683.jpg' />
                  <img src='public/MG_2091-1024x683.jpg' />
                  <img src='public/donna-gio-53-1024x683.jpg' />
                  <img src='public/donna-gio-45-683x1024.jpg' />
                  <img src='public/donna-gio-58-683x1024.jpg' />
                  <img src='public/donna-gio-59-683x1024.jpg' />
                  <img src='public/mani-SNT_9907-1024x683.jpg' />
                  <img src='public/mani-DAB_9652-683x1024.jpg' />
                  <img src='public/mani-DAB_9701-683x1024.jpg' />
                  <img src='public/mani-DAB_9790-683x1024.jpg' />
                </div>
                <button class="carousel-btn prev"><</button>
                <button class="carousel-btn next">></button>
            </article>
        </section>

        <section id="contact" class="section">
            <h2 class="section-title">CONTATTI</h2>
            <div class="section-content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5692.218128464073!2d11.343813!3d44.492432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd4bfc659c8db%3A0x2ce8e40f819754e0!2sVia%20Giovanni%20Massei%2C%2040124%20Bologna%20BO%2C%20Italia!5e0!3m2!1ses!2sus!4v1732881646986!5m2!1ses!2sus"
                    width="500"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <article class='text-article site-information flex flex-col gap-5'>
                <p><strong>DONNA GIO</strong> - P.IVA 00200851202</p>
                <p><strong>INDIRIZZO:</strong> Via Massei, 1 Bologna</p>
                <p><strong>CHIAMA:</strong> <a href='tel:051.266555'>051.266555</a></p>
                <p><strong>EMAIL:</strong> viamassei@donnagio.it</p>
                <div class="social-container">
                    Seguici su
                    <span>Facebook</span>
                    <span>Instagram</span>
                </div>
                </article>
                <form id="contact-form" class="contact-form">
                <input type="text" placeholder="Nome" name="name"/>
                <input type="email" placeholder="Email" name="email"/>
                <input type="text" placeholder="Oggeto" name="subject"/>
                <input type="tel" placeholder="Telefono" name="tel"/>
                <input type="datetime-local" name="datetime"/>
                <textarea cols="40" rows="10" name="message" placeholder="Messaggio"></textarea>
                <button class="send_button">Invia</button>
                </form>
            </div>
        </section>

        <section id="socials" class="socials-section">
            <article>
                <h3 class="article-title">CONTATTI</h3>
                <p class="article-text">Via Massei 1 Bologna</p>
                <p class="article-text">Bologna, BO 40124</p>
                <p class="article-text">Numero: 051.266-555</p>
                <p>Email: viamassei@donnagio.it</p>
            </article>
            <article>
                <h3 class="article-title">Orario</h3>
                <p class="article-text">Lunedi - Venerdi: 9am - 8pm</p>
                <p class="article-text">Sabato: 9am - 6pm</p>
                <p>Domenica: Chiuso</p>
            </article>
            <article>
                <h3 class="article-title">Seguici su</h3>
                <?php
                require_once './icons.php';
                ?>
                <a href="#" class="social-link">
                    <?php echo instagram_icon(); ?> 
                </a>
                <a href="#" class="social-link">
                    <?php echo facebook_icon(); ?> 
                </a>
            </article>
        </section>
       
    </main>
    <?php
            require_once './footer.php';
            $footer = get_footer(); 
            echo $footer
        ?>
    <footer class='footer'>
        <img src="public/logo-footer.png" class="logo-footer"/>
        <small>Donna Gio -parrucchieri a Bologna</small>
        <small>Made with ❤ by <link href="https://www.valandev.com">Valandev</link></small>
    </footer>
</body>
</html>
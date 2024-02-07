<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
    $language = $_SESSION['language'] ?? NULL;
    $depends = $language === 'es'; 
?>

<!DOCTYPE html>
<html <?php echo $depends ? 'es' : 'en'; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I'm Heidi, a passionate interior designer with a unique vision and an unwavering commitment to design excellence.">
    <meta name="robots" content="index, follow">
    
    <link rel="stylesheet" href="../build/css/app.css">
    <title>MiatoDesign</title>
</head>
<body>
    <header>
        <div class="nav navscroll">
            <div class="nav__content">
                <div class="nav__logo">
                    <h2><a href="/">MiatoDesign</a></h2>
                </div>
                <div class="nav__btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
                </div>
                <div class="nav__background"></div>
                <nav class="nav__elements">
                    <h2 class="nav__name"><a href="/">Miato</a></h2>
                    <ul class="nav__list">
                        <li class="nav__link"><a href="/portfolio"><?php echo $depends ? 'portafolio' : 'portfolio'; ?></a></li>
                        <li class="nav__link"><a href="/services"><?php echo $depends ? 'servicios' : 'services'; ?></a></li>
                        <li class="nav__link"><a href="/contact"><?php echo $depends ? 'contacto' : 'contact'; ?></a></li>
                        <?php if($auth): ?>
                            <li class="nav__link"><a href="/logout">Log Out</a></li>
                        <?php endif; ?>
                        <div class="nav__link nav__language">

                            <span class="nav__link">

                                <?php if($depends){ ?> 
                                    <img src="../images/mx.svg" alt="MX">
                                <?php } else {?>
                                    <img src="../images/us.svg" alt="US">
                                <?php }; ?>

                            </span>

                            <ul class="language__select">
                                <li><a href="/english"><img src="../images/us.svg" alt="US"></a></li>
                                <li><a href="/español"><img src="../images/mx.svg" alt="MX"></a></li>
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <?php echo $content; ?>

    <footer>
        <h3>Miato Design</h3>
        <div class="footer__links">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path d="M16.5 7.5l0 .01" />
              </svg>
        </div>
        <div class="footer__line"></div>
        <p class="footer__end"><?php echo $depends ? 'Todos los derechos reservados' : 'All rights reserved'; ?> MiatoDesign <?php echo date('Y'); ?>  &copy;</p>
    </footer>

    <script src="../build/js/bundle.min.js"></script>
    
</body>
</html>
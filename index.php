<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Projeto Menu Responsivo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="shortcut icon" href="icone.ico" type="image-x/png">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <h2>DAST</h2>
            </div>
            <!--logo-->
            <nav class="menu-desktop">
                <ul>
                    <li>
                        <a href="">Home</a>
                        <ul class="submenu-desktop">
                            <li><a href="https://pt.wikipedia.org/wiki/Linux" target="_blank">Linux</a></li>
                            <li><a href="https://pt.wikipedia.org/wiki/Microsoft_Windows" target="_blank">Windows</a></li>
                            <li><a href="https://pt.wikipedia.org/wiki/Macintosh" target="_blank">Mac</a></li>
                        </ul>
                        <!--submenu-desktop-->
                    </li>
                    <li>
                        <a href="">Sobre</a>
                        <ul class="submenu-desktop">
                            <li><a href="https://ubuntu.com/download/desktop" target="_blank">Download Ubuntu 20.04.2 LTS</a></li>
                            <li><a href="https://www.microsoft.com/pt-br/software-download/windows10ISO" target="_blank">Download Windows 10</a></li>
                            <li><a href="https://www.macupdate.com/" target="_blank">Download Mac</a></li>
                        </ul>
                        <!--submenu-desktop-->
                    </li>
                    <li>
                        <a href="">Contato</a>
                        <ul class="submenu-desktop">
                            <li><a href="">Sessão 1</a></li>
                            <li><a href="">Sessão 2</a></li>
                            <li><a href="">Sessão 3</a></li>
                        </ul>
                        <!--submenu-desktop-->
                    </li>
                </ul>
            </nav>
            <nav class="menu-mobile">
                <i class="fas fa-bars"></i>
                <ul>
                    <li>
                        <a href="">Home</a>
                        <ul class="submenu-mobile">
                            <li><i class="fas fa-angle-double-right"></i><a href="https://pt.wikipedia.org/wiki/Linux" target="_blank">Sessão 1</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="https://pt.wikipedia.org/wiki/Microsoft_Windows" target="_blank">Sessão 2</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="https://pt.wikipedia.org/wiki/Macintosh" target="_blank">Sessão 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Sobre</a>
                        <ul class="submenu-mobile">
                            <li><i class="fas fa-angle-double-right"></i><a href="https://ubuntu.com/download/desktop" target="_blank">Sessão 1</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="https://www.microsoft.com/pt-br/software-download/windows10ISO" target="_blank">Sessão 2</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="https://www.macupdate.com/" target="_blank">Sessão 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Contato</a>
                        <ul class="submenu-mobile">
                            <li><i class="fas fa-angle-double-right"></i><a href="">Sessão 1</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="">Sessão 2</a></li>
                            <li><i class="fas fa-angle-double-right"></i><a href="">Sessão 3</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
            <!--clear-->
        </div>
        <!--container-->
    </header>
    <div class="conteudo">
        <div class="nossa_historia">
            <h2>Nossa história</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis enim et sodales molestie. Duis ac odio vitae risus cursus convallis. Praesent nec tellus velit. Donec faucibus arcu sit amet nibh dictum, a cursus mi porttitor. Proin eget nulla nibh. Aenean justo diam, feugiat ultrices elementum porttitor, ornare at dui. Nunc auctor nibh vitae velit efficitur, eget sollicitudin ipsum pellentesque. Donec purus tellus, mattis eu sapien vitae, viverra scelerisque velit. Sed mi libero, interdum in dolor eget, pulvinar commodo nibh.</p>
        </div>
        <!--nossa_historia-->
        <img src="img/ezequiel-garrido-UkhbQE0mR8Q-unsplash.jpg" alt="Uruguay">
        <div class="nosso_compromisso">
            <h2>Nosso compromisso</h2>
            <p>Quisque sed orci porttitor, efficitur libero eget, commodo elit. Mauris eget dui a nisl tristique aliquam et blandit sem. Suspendisse interdum ante dui, eu eleifend lectus pulvinar ut. Mauris a elit tellus. Mauris tincidunt ac felis ac sagittis. Ut pulvinar velit vel ipsum fermentum accumsan. Maecenas a leo fermentum, semper ante ut, feugiat eros. Aliquam sed lectus eget tortor sollicitudin dignissim.</p>
        </div>
        <img src="img/tania-malrechauffe-9UsBCCGEbv0-unsplash.jpg" alt="Playa Uruguay">
        <!--nosso_compromisso-->
    </div>
    <!--conteudo-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $('nav.menu-mobile > i').click(function() {
            $(this).parent().find('ul:not(.submenu-mobile)').slideToggle();
        })
    </script>
</body>

</html>
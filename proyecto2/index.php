<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras MR Anime</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img2/icono.ico">
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img2/LogoAnime.png" alt="Logotipo">
        </a>
    </header>

    <div>
        <?php
        if (isset($_SESSION["usuario"])) {
            echo "<p class=mensaje__usuario>$_SESSION[usuario]</p>";
        }
        ?>
    </div>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="login.html">Login</a>
        <a class="navegacion__enlace" href="cerrarSesion.php">Salir</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img2/FigRem.jpg" alt="Figura Rem">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Rem de <span class="producto__color">RE:ZERO</span></p>
                        <p class="producto__precio">$600 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Rem-->

            <div class="producto">
                <a href="producto2.html">
                    <img class="producto__imagen" src="img2/FigDeku.jpg" alt="Figura Deku">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Deku de <br><span class="producto__color">My hero Academia</span></p>
                        <p class="producto__precio">$1000 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Deku-->

            <div class="producto">
                <a href="producto3.html">
                    <img class="producto__imagen" src="img2/FigGoku.jpg" alt="Figura Goku">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Goku de <span class="producto__color">Dragon Ball</span></p>
                        <p class="producto__precio">$1200 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Goku-->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigMai.jpg" alt="Figura Mai">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Sakurajima Mai</p>
                        <p class="producto__precio">$1300 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Mai-->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigRengoku.jpg" alt="Figura Rengoku">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Rengoku de <span class="producto__color">Kimetsu no yaiba</span></p>
                        <p class="producto__precio">$1200 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Rengoku -->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigMona.jpg" alt="Figura Mona">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Mona de <span class="producto__color">Genshin Impact</span></p>
                        <p class="producto__precio">$1300 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Mona -->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigVegta.jpg" alt="Figura Vegeta">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura Vegetta de <span class="producto__color">dragon ball</span></p>
                        <p class="producto__precio">$250 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Vegeta -->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigTAN.jpg" alt="Figura Tanjiro">
                    <div class="producto__informacion">
                        <p class="producto__nombre">fIGURA tanjiro de <span class="producto__color">Kimetsu no yaiba</span></p>
                        <p class="producto__precio">$800 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Tanjiro -->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigAsuja.jpg" alt="Figura Feliz Jueves">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Figura asuka de <span class="producto__color">evangelion</span></p>
                        <p class="producto__precio">$750 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Feliz Jueves -->

            <div class="producto">
                <a>
                    <img class="producto__imagen" src="img2/FigSaber2.jpg" alt="Figura Saber">
                    <div class="producto__informacion">
                        <p class="producto__nombre">figura saber de <span class="producto__color">fate stay night</span></p>
                        <p class="producto__precio">$900 MXN</p>
                    </div>
                </a>
            </div>
            <!-- Figura Saber -->

            <div class="grafico grafico--figura"></div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto"> Tienda de Figuras. Todos los derechos Reservados</p>
    </footer>
</body>

</html>
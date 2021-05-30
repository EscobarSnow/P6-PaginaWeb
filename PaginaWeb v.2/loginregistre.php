<!--INICI DE LA PÀGINA WEB-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./imatges/logoP.png" type="image/png">
    <title>Login/Registre</title>
    <link rel="stylesheet" href="css/estils_loginregistre.css">
</head>

<!--COS DE LA WEB-->

<body>
    <div id="all">

        <!--CAPÇALERA DE LA WEB + MENU-->

        <header>
            <div class="capcalada">
                <img src="./imatges/logo.png" alt="logotip">
                <h1>EscobarSnow</h1>
                <nav>
                    <div class="menu">
                        <a href="index.php">Inici</a>
                        <a href="productes.php">Productes</a>
                        <a href="classe.php">Classes</a>
                        <a href="temps.php">Temps</a>
                        <a href="loginregistre.php">Login/Registre</a>
                        <?php 
                        error_reporting(0);
                            session_start();
                                if($_SESSION['login_user']==true){ 
                                    echo '<span style="color: #aaa; font-family: sumberjaya;">Benvingut: </span>';
                                    echo "<span style='color:red; font-family: sumberjaya;'>" . $_SESSION["login_user"] . "</span>";
                                    echo '<a href="logout.php" >  Sortir</a>';
                                    }
                            ?>
                    </div>
                </nav>
            </div>
        </header>

        <!--INICI DEL CONTINGUT DE LA WEB-->

        <section class="container">

            <div class="loginregistre">
                <div class="formulariregistre">
                    <div id="signup">
                        <div id="signup-st">
                            <?php
                            $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
                                if ($remarks==null and $remarks=="") {
                                echo ' <div id="reg-head" class="headrg">Registreu-vos</div> ';
                                }
                                if ($remarks=='success') {
                                echo ' <div id="reg-head" class="headrg">Registrat amb èxit</div> ';
                                }
                                if ($remarks=='failed') {
                                echo ' <div id="reg-head-fail" class="headrg">Registre incorrecte, Aquest usuari ja existeix</div> ';
                                }
                                if ($remarks=='error') {
                                echo ' <div id="reg-head-fail" class="headrg">Registre erroni! <br> Error: '.$_GET['value'].' </div> ';
                                }
                            ?>
                        </div>
                        <form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
                            <table cellpadding="2" cellspacing="0">
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">Nom:</div>
                                    </td>
                                    <td>
                                        <input type="text" name="nom" id="tb-box" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">Cognom:</div>
                                    </td>
                                    <td><input type="text" name="cognom" id="tb-box" required /></td>
                                </tr>
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">DNI:</div>
                                    </td>
                                    <td><input type="text" id="tb-box" name="DNI" required /></td>
                                </tr>
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">Teléfon:</div>
                                    </td>
                                    <td><input id="tb-box" type="text" name="telefon" required /></td>
                                </tr>
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">Email:</div>
                                    </td>
                                    <td><input type="text" id="tb-box" name="correu" required /></td>
                                </tr>
                                <tr>
                                    <td class="t-1">
                                        <div id="tb-name">Contrasenya:</div>
                                    </td>
                                    <td><input id="tb-box" type="password" name="clau" required /></td>
                                </tr>
                            </table>
                            <div id="st"><input name="submit" type="submit" value="REGISTRAR-ME" id="st-btn" /></div>
                        </form>

                    </div>
                </div>
                <br /><br />
                <div class="formularilogin">
                    <div id="login">
                        <div id="login-st">
                            <form action="logincheck.php" method="POST" id="signin" id="reg">
                                <?
                                echo "Hello" .$_SESSION['DNI'];
                                ?>
                                <?php
                                $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                                if ($remarks==null and $remarks=="") {
                                echo ' <div id="reg-head" class="headrg">Accedeix amb el teu usuari</div> ';
                                }
                                if ($remarks=='failed') {
                                echo ' <div id="reg-head-fail" class="headrg">Accés erroni!, Credencials invàlides</div> ';
                                }
                                ?>
                                <table cellpadding="2" cellspacing="0">
                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div id="tb-name">Usuari:</div>
                                        </td>
                                        <td><input type="text" id="tb-box" name="DNI" required /></td>
                                    </tr>
                                    <tr id="lg-1">
                                        <td class="tl-1">
                                            <div id="tb-name">Contrasenya:</div>
                                        </td>
                                        <td><input id="tb-box" type="password" name="clau" required /></td>
                                    </tr>
                                </table>
                                <div id="st"><input name="submit" type="submit" value="ACCEDIR" id="st-btn" /></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

        <!--FOOTER DE LA WEB-->

        <footer>

            <!--ICONES XARXES SOCIALS-->

            <div class="social">
                <ul class="menu_simple">
                    <li><a href="https://www.facebook.com/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <!--INFORMACIÓ SOBRE L'EMPRESA-->

            <div class="sobreempresa">
                <ul>
                    <li class="titolfooter">Serveis</li>
                    <li><a href="#">Lloguers</a></li>
                    <li><a href="#">Material</a></li>
                </ul>
                <ul>
                    <li class="titolfooter">Atenció al clients</li>
                    <li>Tlf:/973158534</li>
                    <li>Email:info@escobarsnow.es</li>
                </ul>
                <ul>
                    <li class="titolfooter">Sobre EscobarSnow</li>
                    <li><a href="#">Qui som?</a></li>
                    <li><a href="#">On estem?</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>

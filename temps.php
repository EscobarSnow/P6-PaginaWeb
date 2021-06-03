<!--INICI DE LA PÀGINA WEB-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Temps</title>
        <link rel="stylesheet" href="css/estil_temps.css">

        <script src="temps.js"></script>
       
    </head>

    <!--COS DE LA WEB-->   
   
    <body>

        <div id="all">

            <header>
                <div class="capcalada">
                    <img src="./imatges/logo.png" alt="logotip">
                    <h1>EscobarSnow</h1>
                    <nav>
                        <div class="menu">
                            <a href="index.php">Inici</a>
                            <a href="productes.php">Productes</a>
                            <a href="classe.php">Classes</a>
                            <a href="temps.html">Temps</a>
                            <a href="loginregistre.php">Login/Registre</a>
                            <?php 
                            error_reporting(0);
                            session_start();
                                if($_SESSION['login_user']==true){ 
                                    echo '<button type="button" id="user" style="background-color: #C33838; border: 0; padding: 15px; cursor: pointer; border-radius: 50px;"><a href="dades.php" style="font-size: 25px;">Usuari:'  . $_SESSION["login_user"] .'</a></button>';
                                    echo '<button type="button" id="Xsortir"><a href="logout.php">Sortir</a></button>';
                                    }
                            ?>
                        </div>
                        
                            <!--Navegador tipus hamburguesa-->
                         <div class="navmobil">
                             <div id="sideNav" class="sidenav">
                             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <a href="index.php">Inici</a>
                                <a href="productes.php">Productes</a>
                                <a href="classe.php">Classes</a>
                                <a href="temps.php">Temps</a>
                                <a href="loginregistre.php">Login/Registre</a>
                                <?php 
                                error_reporting(0);
                                session_start();
                                    if($_SESSION['login_user']==true){ 
                                        echo '<button type="button" id="user" style="background-color: #C33838; border: 0; padding: 15px; cursor: pointer; border-radius: 50px;"><a href="dades.php" style="font-size: 25px;">Usuari:'  . $_SESSION["login_user"] .'</a></button>';
                                        echo '<button type="button" id="Xsortir"><a href="logout.php">Sortir</a></button>';
                                        }
                                ?>
                             </div>
                             <span onclick="openNav()" id="barres">&#9776;</span>
                         </div>
                         
                    </nav>
                </div>
            </header>

            <section id="container">

                <article>
                    <!-- Temps Urgell -->
                    <div class="temps_urgell">
                        <p id="urgell1"></p>
                        <p id="urgell2"></p>
                        <p id="urgell3"></p>
                        <p id="urgell4"></p>
                        <p id="urgell5"></p>
                        <p id="urgell6"></p>
                        <p id="urgell7"></p>
                        <p id="urgell8"></p>
                        <p id="urgell9"></p>
                        <p id="urgell10"></p>
                        <p id="urgell11"></p>
                    </div>

                    <!-- Temps Alta Ribagorça -->
                    <div class="temps_altariba">
                        <p id="altariba1"></p>
                        <p id="altariba2"></p>
                        <p id="altariba3"></p>
                        <p id="altariba4"></p>
                        <p id="altariba5"></p>
                        <p id="altariba6"></p>
                        <p id="altariba7"></p>
                        <p id="altariba8"></p>
                        <p id="altariba9"></p>
                        <p id="altariba10"></p>
                        <p id="altariba11"></p>
                    </div>
                    <!-- Temps Cerdanya -->
                    <div class="temps_cerdanya">
                        <p id="cerdanya1"></p>
                        <p id="cerdanya2"></p>
                        <p id="cerdanya3"></p>
                        <p id="cerdanya4"></p>
                        <p id="cerdanya5"></p>
                        <p id="cerdanya6"></p>
                        <p id="cerdanya7"></p>
                        <p id="cerdanya8"></p>
                        <p id="cerdanya9"></p>
                        <p id="cerdanya10"></p>
                        <p id="cerdanya11"></p>
                    </div>

                        <!-- Temps Pallars -->
                    <div class="temps_pallars">
                        <p id="pallars1"></p>
                        <p id="pallars2"></p>
                        <p id="pallars3"></p>
                        <p id="pallars4"></p>
                        <p id="pallars5"></p>
                        <p id="pallars6"></p>
                        <p id="pallars7"></p>
                        <p id="pallars8"></p>
                        <p id="pallars9"></p>
                        <p id="pallars10"></p>
                        <p id="pallars11"></p>
                    </div>

                    <!-- Temps Vall D'Aran -->
                    <div class="temps_vallaran">
                        <p id="vallaran1"></p>
                        <p id="vallaran2"></p>
                        <p id="vallaran3"></p>
                        <p id="vallaran4"></p>
                        <p id="vallaran5"></p>
                        <p id="vallaran6"></p>
                        <p id="vallaran7"></p>
                        <p id="vallaran8"></p>
                        <p id="vallaran9"></p>
                        <p id="vallaran10"></p>
                        <p id="vallaran11"></p>
                    </div>
                </article>
            </section>

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
        <script>
 function openNav() {
 document.getElementById("sideNav").style.width = "250px";
 }
37
 function closeNav() {
 document.getElementById("sideNav").style.width = "0";
 }
 </script>

    </body>
</html>
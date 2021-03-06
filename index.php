<!--INICI DE LA PÀGINA WEB-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="./imatges/logoP.png" type="image/png">
        <title>EscobarSnow</title>
        <link rel="stylesheet" href="css/estils.css">
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
            
            <!--Script del menú lateral-->
 <script>
 function openNav() {
 document.getElementById("sideNav").style.width = "250px";
 }
37
 function closeNav() {
 document.getElementById("sideNav").style.width = "0";
 }
 </script>
            
            <!--INICI DEL CONTINGUT DE LA WEB-->
            
            <section class="container">
                <article>
                   
                    <!--SLIDESHOW DE CINC IMATGES CREAT AMB CSS-->
                   
                    <div id="slideshow">
                      <div class="slider">
                        <div class="slide"><img src="./imatges/Esqui.jpg" alt="Esqui1"></div>
                        <div class="slide"><img src="./imatges/Esqui2.jpg" alt="Esqui1"></div>
                        <div class="slide"><img src="./imatges/Esqui3.jpg" alt="Esqui1"></div>
                        <div class="slide"><img src="./imatges/Esqui4.jpg" alt="Esqui1"></div>
                        <div class="slide"><img src="./imatges/Esqui5.jpg" alt="Esqui1"></div>
                      </div>
                    </div>
                    
                    <!--APARTAT DE LA INFORMACIÓ DE L'EMPRESA-->
                    
                    <div class="info">
                        <h2>Els millors productes d'esqui</h2>
                        <p>Informa't dels productes oferits i crea el teu kit per llogar a les nostres oficines.</p>
                        <p>Des dels esquis, botes i pals més clàssics als més moderns al millor preu</p>
                        
                        <!--BOTO QUE ENS PORTA A LA UBICACIÓ-->
                        
                        <button type="button"><a href="https://www.google.es/maps/place/Institut+Alfons+Costafred/@41.639166,1.1368563,869m/data=!3m2!1e3!4b1!4m5!3m4!1s0x12a69ed145bba279:0xafbb60cd111e20f3!8m2!3d41.639162!4d1.139045" target="_blank"><img src="./imatges/local.png" alt="localitzacio"> On som?</a></button>
                    </div>
                </article>
                
                <!--SEGON ARTICLE AMB MÉS INFORMACIÓ-->

                <article>
                    <div class="procediment">
                        <h2>Quin és el procediment?</h2>
                        <div class="text">
                            <p>Del procediment en parlem de com és realitzaran els lloguers.</p>
                            <p>El client pot visitar la nostra pàgina per visualitzar els productes que oferim.</p>
                            <p>Fet aixó, a les nostres oficines amb les seves preferències, els recepcionistes realitzaran</p>
                            <p> el kit que desitjen així per llogar-lo el temps que desitjen</p>
                        </div>
                        <img src="./imatges/Recepcio.jpg" alt="Recepcio">
                    </div>
                </article>
            </section>
            
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
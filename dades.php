<!--CONNEXIO A LA BASE DE DADES-->

<?php
    $con = mysqli_connect("localhost", "root", "", "escobarsnow");
?>

<!--INICI DE LA PÀGINA WEB-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="./imatges/logoP.png" type="image/png">
        <title>Dades Client</title>
        <link rel="stylesheet" href="css/estils_dades.css">
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
            
            <!--APARTAT DE LES DADES DEL CLIENT (TÍTOL + TAULA)-->

            <div class="dades">
                <h2>Les meves dades</h2>
                
                <!--TAULA-->
                <div class="dadesclient">
                    <table id="taula">

                        <!--AGAFEM LES DADES QUE VOLEM MOSTRAR A LA TAULA DE LA BASE DE DADES-->

                        <?php
                            $consulta = "SELECT nom, cognom, DNI, telefon, correu, clau, curs FROM client, cursos WHERE DNI = '" . $_SESSION["login_user"] . "'";
                            $resultado = mysqli_query($con, $consulta);
                                while ($row = mysqli_fetch_array($resultado)) {
                            ?>

                        <!--MOSTREM LES DADES A LA TAULA-->
                        <tr>
                            <th>Nom:</th>
                            <td><?php echo $row['nom'] ?></td>
                        </tr>
                        <tr>
                            <th>Cognom:</th>
                            <td><?php echo $row['cognom'] ?></td>
                        </tr>
                        <tr>
                            <th>DNI:</th>
                            <td><?php echo $row['DNI'] ?></td>
                        </tr>
                        <tr>
                            <th>Telèfon:</th>
                            <td><?php echo $row['telefon'] ?></td>
                        </tr>
                        <tr>
                            <th>Correu:</th>
                            <td><?php echo $row['correu'] ?></td>
                        </tr>
                        <tr>
                            <th>Contrassenya:</th>    
                            <td><?php echo $row['clau'] ?></td>
                        </tr>
                        <tr>
                            <th>Curs:</th>    
                            <td><?php echo $row['curs'] ?></td>
                        </tr>

                        <?php
                            }    

                            ?>
                    </table>
                </div>
            </div>
            
            
            
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
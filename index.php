<?php

session_start();
require "connection/db.php";

if(isset($_POST["be"]) && isset($_POST["username"]) && isset($_POST["pw"]))
{
    $user=$_POST["username"];
    $pw=$_POST["pw"];

    $db=new DB_Class();
    $db->Connection("eximtrans");

    $db->Login($user,$pw);
}

if(isset($_POST["reg"]) && isset($_POST["username"]) && isset($_POST["pw"]))
{
    $user=$_POST["username"];
    $pw=$_POST["pw"];

    $db=new DB_Class();
    $db->Connection("eximtrans");

    $db->Reg($user,$pw);
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Eximtrans</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="szamolas.js"></script>
    
</head>

    <body>
        <div id="container" class="container-fluid justify-content-center">

        <div id="div_img" class="d-flex justify-content-center bg-secondary"><img src="highway.jpg" alt="kep"></div>

        

        <div id="menu">
        <nav id="asd" class="nav navbar-expand-sm justify-content-center menu bg-light">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Aktuális</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Megrendelés</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Rólunk</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Kapcsolat</a>
                            </li>
                        </ul>
        </nav>
        </div>

        <div id="hdr" class="justify-content-center">Export-import szállítás</div>
        
        <div id="tablazat" class="justify-content-center">
            <table>
                <tr>
                    <td class="col-4">
                        <h2>Díjszabás</h2>
                        <ul>
                            <li>Alapdíj: 2.000 Ft</li>
                            <li>Súly díj: 100 Ft/kg</li>
                            <li>Távolsági díj: 400 Ft/km</li>
                        </ul>
                    </td>

                    <td class="preformatted">
                    Mert elviszünk bármit bárhová a lehető leggyorsabban. Nincs sorbanállás velünk egyszerűen intézheted a csomagküldést!
                    
                    A többi szolgálathoz hasonlóan mi is a lakosság kényelmét szolgáljuk azzal, hogy elszállítjuk csomagjaikat a világ bármely 
                    szegletébe. De miben más az Eximtrans? Az Eximtrans rendelkezésedre áll a nap 24 órájában! Válassz minket és hozz egy jó
                    döntést!
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <div class="bg-secondary pad20 marg20">
                            <h2>Viteldíj kalkulátor</h2>
                            <div class="form-group">
                                <label for="suly">Súly [kg]: </label>
                                <input type="number" class="form-control" name="suly" id="suly" required placeholder="Egész kg">
                            </div>

                            <div class="form-group">
                                <label for="km">Távolság [km]: </label>
                                <input type="number" class="form-control" name="km" id="km" required placeholder="Egész km">
                            </div>

                            <button class="btn btn-primary" onclick="viteldij()">Számoljon</button>
                        </div>
                    </td>

                    <td class="preformatted">
                    Számold ki mennyibe kerül csomagod kiszállítása! Írd be a termék súlyát kg-ban és a kiszállítás távolságát km-ben! A 
                    kalkulátor máris kiszámolja mennyi lesz a csomagküldés díja.
                    </td>
                </tr>

                <tr>
                    <td>
                        <div id="felhasznaloi" class="bg-secondary pad20 marg20">
                            <h2>Ügyfeleknek</h2>
                            
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" id="username" required placeholder="Adja meg a nevét">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pw" id="pw" required placeholder="Adja meg a jelszavát!">
                                    </div>

                                    <button type="submit" class="btn btn-primary" id="be" name="be">Belépés</button>
                                    <button type="submit" class="btn btn-primary" id="reg" name="reg">Regisztráció</button>
                                </form>
                           
                        </div>
                    </td>

                    <td class="preformatted">
                    Ha már ügyfelünk, a megrendeléshez jelentkezzen be. 
                    Ha még nem ügyfelünk, adja meg a nevét és egy jelszót, majd kattintson a "Regisztráció" gombra.
                    </td>

                </tr>

            </table>
            <div class="col-3">
            
            
        </div>
            
        <pre></pre>
        
        <pre></pre>
        </div>
        


        </div>
    

    </body>
</html>
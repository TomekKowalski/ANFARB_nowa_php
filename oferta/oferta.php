<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style_pokaz_slajdow.css"/>
        
        <script src="js/script_pokaz_slajdow.js" async></script> 
        <script src="js/script_anfarb.js" async></script> 
        <title>AN-FARB - Usługi barwienia</title>
    </head>
    <body> 
        
        <header id="header">
            <div id="panel_in_header">
                
                <div id="logo">
                    <img src="img/baner_an_farb_02.png"  alt=""/>
                </div>
                <nav>                   
                    <div class="menu">
                        <a href="index.php"><div class="menu_lista">O firmie</div></a>
                        <a href=""><div class="menu_lista">Oferta</div></a>
                        <a href=""><div class="menu_lista menu_lista_szerokosc">Laboratorium</div></a>
                        <a href=""><div class="menu_lista">Certyfikaty</div></a>
                        <a href=""><div class="menu_lista">Dotacje</div></a>
                        <a href=""><div class="menu_lista">Kontakt</div></a>
                    </div>
                </nav>
                
            </div>
            
        </header>
        
        
        
        <div id="panel_tlo">
            <div class="panel_zdjecia">

                <table>
                    <tr>
                        <td>
                            <div id="slideShow1"></div>
                        </td>
                        <td>
                            <div id="imageCenter"></div>                       
                        </td> 
                        <td>
                            <div id="imageRight"></div>
                        </td>
                    </tr>
                </table>           

            </div>


            <div class="panel_strona">
                <div class="panel_glowny panel_lewy" id="text_lewy_panel">
                    <h1>O firmie</h1>
                    <p class="text_panele">
                        <?PHP include('tresc/strona_glowna_a.html'); ?>
                    </p>



                </div>
                <div class="panel_glowny panel_srodek" id="text_srodek_panel">
                    <h1>Oferta</h1>
                    <p class="text_panele">
                        <?PHP include('tresc/strona_glowna_b.html'); ?>
                    </p>


                </div>
                <div class="panel_glowny panel_prawy" id="text_prawy_panel">
                    <h1>Laboratorium</h1>
                    <p class="text_panele">
                        <?PHP include('tresc/strona_glowna_c.html'); ?>
                    </p>

                </div>


            </div>

            <div id="panel_images_down">
                <div class="certyfikaty panel_prawy_certyfikaty">
                    <img src="img/certyfikaty_razem.png"  alt=""/>

                </div>
                <div class="certyfikaty panel_lewy_certyfikaty">
                    <img src="img/fundusze_europejskie04.png" class="fundusze" alt=""/>


                </div>


            </div>
        </div>
        
        <footer id="footer">
            <div id="panel_in_footer">
                <div id="stopka_adres">
                    <p>Zdzisaw Nuszkiewicz Maciej Nuszkiewicz Spóka Jawna<br>al. Marszałka J. Piłsudskiego 141, 92-318 Łódź</p>
               
                </div>
                <div id="stopka_telefon_fax">
                    <p>tel. +48 42 674 63 90<br>fax +48 42 674 80 05</p>
           
                </div>
                <div id="stopka_adres_strony">
                    <p>anfarb@anfarb.pl</p>
           
                </div>
                 
            </div>
            
        </footer>
        
        
             
        
    </body>
</html>

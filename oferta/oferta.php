<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="stylesheet" href="../css/style_pokaz_slajdow.css"/>
        
        <script src="../js/script_pokaz_slajdow.js" async></script>          
        <title>AN-FARB - Usługi barwienia</title>
    </head>
    <body> 
        
        <header id="header">
            <div id="panel_in_header">
                
                <div id="logo">
                    <a href="../index.php"><img src="../img/baner_an_farb_02.png"  alt=""/></a>
                </div>
                <nav>                   
                    <div class="menu">
                        <a href="../o_firmie/o_firmie.php"><div class="menu_lista">O firmie</div></a>
                        <a href="oferta.php"><div class="menu_lista kolor_text_menu">Oferta</div></a>
                        <a href="../laboratorium/laboratorium.php"><div class="menu_lista menu_lista_szerokosc">Laboratorium</div></a>
                        <a href="../certyfikaty/certyfikaty.php"><div class="menu_lista">Certyfikaty</div></a>
                        <a href="../dotacje/dotacje.php"><div class="menu_lista">Dotacje</div></a>
                        <a href=""><div class="menu_lista">Kontakt</div></a>
                    </div>
                </nav>
                
            </div>
            
        </header>
        
        
        
        <div id="panel_tlo">
            
            <div class="panel_strona_o_firmie przesuniecie_od_gory">
                <div class="panel_glowny_o_firmie">
                    <h1>Oferta</h1>
                    <table>
                        <tr>
                            <td class="oferta">
                                <div id="text_lewy_oferta">
                                    
                                   
                                        <?PHP include('../tresc/oferta_a.html'); ?>
                                    
                                </div>
                                
                            </td>
                            <td class="wyrownaj">
                                <div id="text_prawy_oferta">
                                                                       
                                        <?PHP include('../tresc/oferta_c.html'); ?>
                                        <?PHP include('../tresc/oferta_b.html'); ?>
                                    
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                    
                </div>
                    
            </div>

            

            <div id="panel_images_down">
                <div class="certyfikaty panel_prawy_certyfikaty">
                    <img src="../img/certyfikaty_razem.png"  alt=""/>

                </div>
                <div class="certyfikaty panel_lewy_certyfikaty">
                    <img src="../img/fundusze_europejskie04.png" class="fundusze" alt=""/>


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

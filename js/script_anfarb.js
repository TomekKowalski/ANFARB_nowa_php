


    //alert("test1");
    var wiecej_lewy = document.getElementById("wiecej_lewy");
    //wiecej_lewy.addEventListener("onclick", strona_o_firmie);
    wiecej_lewy.onclick = strona_o_firmie;
    


function strona_o_firmie()
{
    var panel_tlo = document.getElementById("panel_tlo");
    //var text_srodek_panel = document.getElementById("text_srodek_panel");
    //panel_tlo.innerHTML = "test";
    panel_tlo.setAttribute("class", "panel_srodek_ukryj");
    //alert("test");
    
    /*panel_tlo.style.display = "none";*/
}


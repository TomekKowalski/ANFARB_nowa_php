
var button_menu = document.getElementById("button_menu");

button_menu.onclick = function()
{
    var panel_menu_mobile = document.getElementById("panel_menu_mobile");
    var status_display = panel_menu_mobile.style.display;
    
    if(status_display === "" || status_display === "none")
    {
        panel_menu_mobile.style.display = "block";
    }
    if(status_display === "block")
    {
        panel_menu_mobile.style.display = "none";
    }
    
    
};


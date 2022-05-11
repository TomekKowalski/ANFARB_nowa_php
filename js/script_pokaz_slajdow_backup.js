

window.onload = function()
{
    var slideShow = document.getElementById("slideShow1");
    
    var imagesSrc = ["bg-farbiarnia1.jpg", "bg-farbiarnia3.jpg"];
    
    for(var i=0; i<imagesSrc.length; i++)
    {
        var image = new Image();
        image.src = "images/" + imagesSrc[i];
        slideShow.appendChild(image);
    }
    
    slideShow.childNodes[0].setAttribute("class", "current");
    var i = 0;
    setInterval(function()
    {
        slideShow.childNodes[i % imagesSrc.length].setAttribute("class", "");
    
        slideShow.childNodes[(i+1) % imagesSrc.length].setAttribute("class", "current");
    
        i++;
    }, 10000);
        
};

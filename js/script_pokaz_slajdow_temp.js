

window.onload = function()
{
    var slideShow = document.getElementById("slideShow1");
    var imageCenter = document.getElementById("imageCenter");
    
    //slideShowCenter.innerHTML = "test";
    //slideShowCenter.innerHTML += "<br>";
    
    var imagesSrc = ["bg-farbiarnia1.jpg", "bg-farbiarnia3.jpg"];
    var imagesSrcCenter = ["image_center_01 (1).jpg", "image_center_01 (2).jpg"];
    
    
    for(var i=0; i<imagesSrc.length; i++)
    {
        var image = new Image();
        image.src = "images/image_left/" + imagesSrc[i];
        //image.src = "images/image_center/" + imagesSrc[i];
        slideShow.appendChild(image);
    }
     
    for(var i=0; i<imagesSrcCenter.length; i++)
    {
        //slideShowCenter.innerHTML += "<br>";
        //slideShowCenter.innerHTML += imagesSrcCenter[i];
        
        var imagesrcCenter = new Image();
        imagesrcCenter.src = "images/image_center/" + imagesSrcCenter[i];
        imageCenter.appendChild(imagesrcCenter);
          
        //imageCenter.innerHTML = "test";
         
    }
    
    slideShow.childNodes[0].setAttribute("class", "current");
    imageCenter.childNodes[0].setAttribute("class", "currentCenter");
    
    var i = 0;
    setInterval(function()
    {
        
        slideShow.childNodes[i % imagesSrc.length].setAttribute("class", "");   
        slideShow.childNodes[(i+1) % imagesSrc.length].setAttribute("class", "current");
    
    
        imageCenter.childNodes[i % imagesSrcCenter.length].setAttribute("class", "");   
        imageCenter.childNodes[(i+1) % imagesSrcCenter.length].setAttribute("class", "currentCenter");
    
        i++;
    }, 10000);
        
};

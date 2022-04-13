

window.onload = function()
{
    var slideShow = document.getElementById("slideShow1");
    var imageCenter = document.getElementById("imageCenter");
    var imageRight = document.getElementById("imageRight");
    
    //imageRight.innerHTML = "test";
    //slideShowCenter.innerHTML += "<br>";
    
    var imagesSrc = ["image_left_01.jpg", "bg-farbiarnia3.jpg"];
    var imagesSrcCenter = ["image_center_01 (1).jpg", "image_center_01 (2).jpg"];
    var imagesSrcRight = ["image_right01.jpg", "image_right02.jpg"];
    
    
    for(var i=0; i<imagesSrc.length; i++)
    {
        var image = new Image();
        image.src = "images/image_left/" + imagesSrc[i];
        slideShow.appendChild(image);
    }
     
    for(var i=0; i<imagesSrcCenter.length; i++)
    {
        var imagesrcCenter = new Image();
        imagesrcCenter.src = "images/image_center/" + imagesSrcCenter[i];
        imageCenter.appendChild(imagesrcCenter);
    }
    for(var i=0; i<imagesSrcRight.length; i++)
    {
        var imagesrcRight = new Image();
        imagesrcRight.src = "images/image_right/" + imagesSrcRight[i];
        imageRight.appendChild(imagesrcRight);
    }
    
    slideShow.childNodes[0].setAttribute("class", "current");
    imageCenter.childNodes[0].setAttribute("class", "currentCenter");
    imageRight.childNodes[0].setAttribute("class", "currentRight");
    
    var i = 0;
    var flaga_left = true;
    var flaga_center = false;
    var flaga_right = false;
    var flaga_zmien = false;
    setInterval(function()
    {
     
        if(flaga_left)
        {
            slideShow.childNodes[i % imagesSrc.length].setAttribute("class", "");   
            slideShow.childNodes[(i+1) % imagesSrc.length].setAttribute("class", "current");
            flaga_zmien = true;
            
        }
    
        if(flaga_center)
        {
            imageCenter.childNodes[i % imagesSrcCenter.length].setAttribute("class", "");   
            imageCenter.childNodes[(i+1) % imagesSrcCenter.length].setAttribute("class", "currentCenter");
            flaga_zmien = true;          
        }
        if(flaga_right)
        {
            imageRight.childNodes[i % imagesSrcCenter.length].setAttribute("class", "");   
            imageRight.childNodes[(i+1) % imagesSrcCenter.length].setAttribute("class", "currentRight");
            flaga_zmien = true;
        }
        if(flaga_left && flaga_zmien)
        {
            flaga_left = false;
            flaga_center = true;
            flaga_zmien = false;
        }
        if(flaga_center && flaga_zmien)
        {
            flaga_center = false;
            flaga_right = true;
            flaga_zmien = false;
        }
        if(flaga_right && flaga_zmien)
        {
            flaga_right = false;
            flaga_left = true;
            flaga_zmien = false;
        }
    
        i++;
        
    }, 10000);
        
};

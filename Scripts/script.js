var elements = document.getElementsByTagName("img");
var dirs = ["PhotoIn", "PhotoOut"];
// Declare a "loop" variable
var i;

// Full-width images
function SetVisible(VisClass, NoneClass) {
    var elements = document.getElementsByClassName(VisClass);
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display="flex";
        
    }
    
    var elements = document.getElementsByClassName(NoneClass);
    for (let i = 0; i < elements.length; i++) {
        elements[i].style.display="none";
        
    }

}


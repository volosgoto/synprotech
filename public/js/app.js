// Accordion handling
function accondionFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}



// function dropdownToggle() {
//     var x = document.getElementById("toggle-menu");
//     if (x.className.indexOf("w3-show") == -1) {
//         x.className += " w3-show";
//     } else { 
//         x.className = x.className.replace(" w3-show", "");
//     }
// }
// Accordion handling
function accondionFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }

    // TODO  плавное раскрытие
          
    // })


}

//  document.querySelector('button').addEventListener('click', function (e) {

//         console.log('BTN', 'Clicked' );
        
//     })



function sendMail() {
    window.location.href = "mailto:office@synproeng.com";
}
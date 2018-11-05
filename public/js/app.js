// Accordion handling
function accondionFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function homeLink () {
    window.location.href = '/public';
}


function sendMail() {
    window.location.href = "mailto:office@synproeng.com";
}


    let file = document.querySelector('.booklet-download');
    file.addEventListener('click', downloadFile);
    function downloadFile() {
        let result =  confirm('Do you download Booklet Synprotech_LLC ');
        if (result) {
            setTimeout(
            () => { 
            let url='http://synproeng.com/assets/booklet/Booklet_Synprotech_ LLC_nov_2018.pdf';    
            window.open(url, 'Download')}, 2000);
  
    }
}
    

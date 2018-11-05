// Accordion handling
function accondionFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function homeLink() {
  window.location.href = '/public';
}


function sendMail() {
  window.location.href = "mailto:office@synproeng.com";
}


let file = document.querySelector('.booklet-download');
file.addEventListener('click', (e) => {
  e.preventDefault();
  let confirmMsg = 'Do you download Booklet Synprotech_LLC?';
  let result = confirm(confirmMsg);
  if (result) {
    setTimeout(() => {
      let url = '/assets/booklet/Booklet_Synprotech_ LLC_nov_2018.pdf';
      window.open(url, '_self');
    }, 2000);
  } else {
    let alertMsg = 'Downloading canceled';
    alert(alertMsg);
  }
});
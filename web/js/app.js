// Accordion handling
function accondionFunction(id) {
  var x = document.getElementById(id);
  if (id == 'consulting' || id == 'design' || id == 'operation' || id == 'constructing') {
    // console.log('x', x.previousElementSibling.firstChild.nextElementSibling.textContent);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.firstChild.nextElementSibling.innerHTML = "&#xf106;";
    } else {
      x.className = x.className.replace(" w3-show", "");
      x.previousElementSibling.firstChild.nextElementSibling.innerHTML = "&#xf107;";
    }
  } else {
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
}


function homeLink() {
  window.location.href = '/';
}


function sendMail() {
  window.location.href = "mailto:office@synproeng.com";
}


let file = document.querySelector('.booklet-download');
file.addEventListener('click', (e) => {
  e.preventDefault();
  let confirmMsg = 'Do you want to download Booklet Synprotech_LLC?';
  let result = confirm(confirmMsg);
  if (result) {
    setTimeout(() => {
      let url = '/downloads/Booklet_Synprotech_ LLC_nov_2018.pdf';
      window.open(url, '_blank');
    }, 100);
  }
});



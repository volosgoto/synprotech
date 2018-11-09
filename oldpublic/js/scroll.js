window.onscroll = ()=> { scrollFunction() };

function scrollFunction() {

let html = document.documentElement;
let body = document.body;

let scrollTop = html.scrollTop || body && body.scrollTop || 0;
scrollTop -= html.clientTop; // в IE7- <html> смещён относительно (0,0)
let height = document.body.clientHeight;

    if (scrollTop > height / 5) {
        document.getElementById("scrollBtn").style.display = "block";
    } else {
        document.getElementById("scrollBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
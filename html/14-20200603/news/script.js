document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById('btn');
    var nav = document.getElementsByClassName('nav');
    console.log(btn);
    btn.onclick = function () {
        console.log(nav[0]);
        nav[0].classList.toggle('show-hide');
    }
}, false)
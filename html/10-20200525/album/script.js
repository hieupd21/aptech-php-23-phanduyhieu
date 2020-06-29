document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById('btn');
    var block = document.getElementsByClassName('block');
    btn.onclick = function () {
        console.log(block[0]);
        block[0].classList.toggle('show-hide')
    }
}, false)
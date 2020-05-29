document.addEventListener("DOMContentLoaded",function(){
    var btn = document.getElementById('btn');
    var img = document.getElementById('img');
    btn.onclick = function() {
        img.classList.toggle('on');
    }
},false)
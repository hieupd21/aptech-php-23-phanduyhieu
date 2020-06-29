function loadCreate() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("create").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "create.html", true);
    xhttp.send();
}
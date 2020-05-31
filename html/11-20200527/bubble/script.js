function turn() {
    var anhElement = document.getElementById('anh');
    console.log(anhElement.src);
    if (anhElement.src == 'http://127.0.0.1:5500/html/10-20200525/bubble/off.gif') {
        anhElement.src = 'on.gif';
    } else {
        anhElement.src = 'off.gif';
    }
}
function hide(elem) {
    var div = document.getElementById(elem);
    if (div.style.display !== "none") {
        div.style.display = "none";
    }
    else {
        div.style.display = "block";
    }
}
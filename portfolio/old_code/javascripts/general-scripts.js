function goURL(url) {
    window.open(url);
}

function showModal(bool) {
    if (bool == true) {
       $('#modalOverlay').css("display", "block");
    } else {
        $('#modalOverlay').css("display","none");
    }
}

function expandFooter(bool) {
    if (bool == true) {
        $('#footer-about').css("display", "none");
        $('#right-accent').css("display", "none");
        $('#left-accent').css("display", "none");
        $('#footer-expandable').css("display", "block");
    } else {
        $('#footer-about').css("display", "block");
        $('#right-accent').css("display", "block");
        $('#left-accent').css("display", "block");

        $('#footer-expandable').css("display", "none");
    }

}
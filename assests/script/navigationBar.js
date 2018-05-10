window.addEventListener('resize', navBarChange);
window.addEventListener("load", navBarChange);

function navBarChange() {
    if (window.innerWidth <= 770) {
        document.getElementById("nav1").style.display = "none";
        document.getElementById("nav2").style.display = "block";
    }
}
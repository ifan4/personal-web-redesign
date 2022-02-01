let btnSlide = document.getElementById("btn-slide-sidebar");

if ($(document).width() <= 988){
    hideSidebar();
}


function hideSidebar() {
    document.getElementById("sidebar-admin").classList.toggle("hide-sidebar");
    document.getElementById("navbar-admin").classList.toggle("syncNavbar");
    document.getElementById("main").classList.toggle("syncMain");


    let btnSlide = document.getElementById("icon-slide-bar");

    //Kondisi untuk ketika btn logo ke kiri
    if (btnSlide.classList.contains('bi-arrow-bar-left')) {
        btnSlide.classList.remove('bi-arrow-bar-left');
        btnSlide.classList.add('bi-arrow-bar-right');
    }
    else {
        btnSlide.classList.remove('bi-arrow-bar-right');
        btnSlide.classList.add('bi-arrow-bar-left');
    }
}
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

window.onload = function() {
    var dark_mode = localStorage.getItem("darkmode");
    // console.log(dark_mode);

    if (dark_mode == "enabled"){
        document.getElementById("darkmode-toggle").checked = true;
        DarkMode();
    }
  };

function DarkMode() {
    var dark_mode = localStorage.getItem("darkmode");
    // console.log(dark_mode);
    var element = document.getElementById('darkmode-toggle');

    if (element.checked  || dark_mode != "enabled"){
        $('body').addClass('dark-mode3')
        $('.item-main').addClass('dark-mode');
        $('#home').removeClass('home').addClass('dark-mode4');
        $('#div1').removeClass('background').removeClass('Text').addClass('dark-mode');
        $('#div2').removeClass('background').removeClass('Text').addClass('dark-mode');
        $('#div3').removeClass('background').removeClass('Text').addClass('dark-mode');
        $('#div4').removeClass('background').removeClass('Text').addClass('dark-mode');
        $('#div5').removeClass('background').removeClass('Text').addClass('dark-mode');
        $('.navbar').removeClass('bg-light').addClass('dark-mode3');
        $('.dropbtn').addClass('dark-mode2');
        $('.dropdown').addClass('dark-mode2');
        $('.button-grid').addClass('dark-mode2');
        $('.logs').addClass('dark-mode');
        $(".navbar").css("background-color", "rgb(48, 56, 61)");
        $(".dropbtn").css("background-color", "rgb(48, 56, 61)");
        $(".logs").css("background-color", "rgb(48, 56, 61)");
        $(".grid-button").css("background-color", "rgb(48, 56, 61)");
        $(".grid-button").css("color", "#408edd");
        localStorage.setItem("darkmode", "enabled");

    }else{
        $('body').removeClass('dark-mode3');
        $('.item-main').removeClass('dark-mode');
        $('#home').addClass('home').removeClass('dark-mode4');
        $('#div1').addClass('background').addClass('Text').removeClass('dark-mode');
        $('#div2').addClass('background').addClass('Text').removeClass('dark-mode');
        $('#div3').addClass('background').addClass('Text').removeClass('dark-mode');
        $('#div4').addClass('background').addClass('Text').removeClass('dark-mode');
        $('#div5').addClass('background').addClass('Text').removeClass('dark-mode');
        $('.navbar').addClass('bg-light').removeClass('dark-mode3');
        $('.dropbtn').removeClass('dark-mode2');
        $('.dropdown').removeClass('dark-mode2');
        $('.button-grid').removeClass('dark-mode2');
        $('.logs').removeClass('dark-mode');
        $(".navbar").css("background-color", "white");
        $(".dropbtn").css("background-color", "white");
        $(".logs").css("background-color", "white");
        $(".grid-button").css("background-color", "white");
        $(".grid-button").css("color", "black");
        localStorage.setItem("darkmode", "disabeld");


    }
}
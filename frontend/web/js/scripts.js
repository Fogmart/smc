
    $(function () {
      'use strict';

      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').addClass('open');
        $('body').addClass('offcanvas-open');
      })
      $('[data-toggle="offcanvas-close"]').on('click', function () {
        $('.offcanvas-collapse').removeClass('open');
        $('body').removeClass('offcanvas-open');

      })
    })


// sticky
// window.onscroll = function() {myFunction()};
//
// var header = document.getElementById("sticky_header");
//
// var sticky = header.offsetTop;
//
// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }




// accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

function initFileInput(id){
    $(id).fileinput({
        showCaption: false,
        browseLabel: 'Загрузить<i></i>',
        browseClass: 'button upload',
        showUpload: false,
        showClose: false,
        showPreview: false,
        showRemove: false,
        browseIcon:""
    });
    $(id).on('fileloaded', function(event, file, previewId, fileId, index, reader) {
        $(id + "-lbl").html(file.name)
    });
}

$(function(){
    initFileInput("#userinfo-newavatar")
    initFileInput("#userinfo-newdoc1")
    initFileInput("#userinfo-newdoc2")
    initFileInput("#userinfo-newdoc3")

    initFileInput("#signupform-newavatar")
    initFileInput("#signupform-newdoc1")
    initFileInput("#signupform-newdoc2")
    initFileInput("#signupform-newdoc3")
});


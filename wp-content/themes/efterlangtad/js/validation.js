$(function($)
{
    $(document).ready(function ($) {
        $("#productimage").validate(
        {
            rules:
            {
                birth_name:
                {
                    required: true,
                },
                birth_date:
                {
                    required: true,
                        maxlength:10
                },
                birth_length:
                {
                    required: true,
                        maxlength: 2
                },
                birth_weight:
                {
                    required: true,
                        maxlength:4
                },
                birth_hours:
                {
                    required: true,
                        maxlength:2
                }

            },
            messages: {
                birth_name: 'Skriv in födelsenamn',
                birth_date: 'Fyll i födelsedatum ÅÅÅÅ-MM-DD',
                birth_length: 'Fyll i längd i CM',
                birth_weight:'Fyll i vikt i GRAM',
                birth_hours: 'Fyll i tid'
            }
        });
    });
});
function myFunction() {
    var x = document.getElementById("menu-menu");
    if (x.className === "menu") {
        x.className += "responsive";
    } else {
        x.className = "menu";
    }
}


//https://codepen.io/prasanthmj/pen/tDape
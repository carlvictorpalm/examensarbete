$(function($)
{
    $(document).ready(function ($) {
        jQuery.extend(jQuery.validator.messages, {
            required: "bajs.",
        });
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
                            },
                        birth_minutes:
                            {
                                required: true,
                                maxlength:2
                            }
                    }
            });
    });
});
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


//https://codepen.io/prasanthmj/pen/tDape

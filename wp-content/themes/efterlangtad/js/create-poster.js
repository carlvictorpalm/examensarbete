// Input text for canvas poster
(function ($) {
    $(document).ready(function () {
        //FÖDELSELÄNGD
        $(".birthlengthoutput").text('CM');

        //FÖDELSEVIKT
        $(".birthweightoutput").text(' GRAM');

        //FÖDELSETID
        $(".birthhours").text('00');
        $(".birthminutes").text('00');
        // FÖDELSEDAG
        $(".birthdayoutput").text('åååå-mm-dd');

        $("#birth_name").keyup(function(){
            var currentText = $(this).val();
            $(".birthnameoutput").text(currentText);
        });
        $("#birth_date").keyup(function(){
            var currentText = $(this).val();
            $(".birthdayoutput").text(currentText);
        });

        // INFO



        $("#birth_length").keyup(function(){
            var currentText = $(this).val();
            $(".birthlengthoutput").text(currentText + ' CM');
        });

        $("#birth_weight").keyup(function(){
            var currentText = $(this).val();
            $(".birthweightoutput").text(currentText + ' GRAM');
        });

        $("#birth_hours").keyup(function(){
            var currentText = $(this).val();
            $(".birthhours").text(currentText +':');
        });
        $("#birth_minutes").keyup(function(){
            var currentText = $(this).val();
            $(".birthminutes").text(currentText);
        });

    });

        $("#productimage").validate(
            {
                rules:
                    {
                        birth_name:
                            {
                                required: true,
                                maxlength: 10
                            },
                        birth_date:
                            {
                                required: true,
                                maxlength:10
                            },
                        birth_length:
                            {
                                required: true,
                                maxlength: 4
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
})(jQuery);

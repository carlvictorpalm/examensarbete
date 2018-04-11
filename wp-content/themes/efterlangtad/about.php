<?php /* Template Name: about */
get_header(); ?>
<!--
ABOUT US PAGE
-->
<div class="container">
    <div class="row">
        <div class="wrapper">
            <div class="title">
                <h1>Om oss</h1>
                <h3>Vi är efterlängtad.se. Två studenter ett examensarbete<br>Skapad genom kärleksfulla idéer.</h3>
                <div class="aboutusimg col-md-12">
                    <img src=" <?php echo get_bloginfo('template_url') ?>/img/about_us_img.jpg" alt="">
                </div>
            </div>
        </div>
    </div> <!--Wrapper ends-->
    <div class="row">
        <div class="wrapper">
            <div class="aboutuspage col-lg-8 ingress">
                <h3>Hey!</h3>
                <h4>Vi är Victor Palm och Kim Dahlberg,
                    två klasskompisar som beslutade sig för att göra sitt examensarbet tillsammans.
                    Victor och Kim studerar sista terminen på en webbutvecklingsutbildning med fokus på e-handel.
                    <i>"Trendigt, fräscht och framtiden"</i> - Säger omvärlden.</h4>

                <h4>Men bakom alla filter och tillgänglighet av handel alla timmar på dygnet växer en farlig trend sig
                    allt
                    starkare.
                    Genom att öppna upp för fri handel digitalt bidrar vi också med en förstärkt massproduktion och ett
                    merbehov
                    som vi
                    annars inte skulle identifiera oss med och allt på bekostnad av jordens resuser.</h4>

                <h4>Vi ville i stället utveckla en e-handel med en produkt framtagen på minimal påverkan av jordens
                    resuser,
                    som dessutom produceras när konsumenten gör sin beställning, där hundratals artiklar inte existerar
                    för
                    merköp och där vi kan stå för vad vi säljer. Då har vi i alla fall gjort det vi kunnat för att
                    minimera
                    skövlingen av vår planets resuser och det tycker vi är ett bra steg i e-handelsutvecklingen. Det kom
                    till
                    att bli -</h4>
                <h5>efterlängtad.se</h5>
            </div>

            <div class="col-lg-4 workspace">
                <div class="process">
                    <a href="https://drive.google.com/drive/folders/1OIJNDsnOYmhjXTurSEFdPo97LRlAP8vF"
                       target="_blank"><img
                                src=" <?php echo get_bloginfo('template_url') ?>/img/about_img_projekt.jpg" alt=""></a>
                </div>
                <div class="merit">
                    <a href="http://localhost/examensarbete/kontakt/" target="_blank"><img
                                src=" <?php echo get_bloginfo('template_url') ?>/img/about_img_kontakt.jpg" alt=""></a>
                </div>
            </div>

        </div>
    </div>
    <?php get_footer(); ?>


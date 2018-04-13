
<?php get_header(); ?>

    <div class="row">
        <div class="wrapper">
            <?php while (have_posts()):
            the_post(); ?>
            <!--
           TRUSTBAR SECTION
       -->
            <div class="trustbar">
                <img src=" <?php echo get_bloginfo('template_url') ?>/img/trustbar.png" alt="">
            </div>
            <!--
            ABOUT US SECTION
        -->
            <div id="info">
                <div class="aboutus col-lg-6">
                    <p>Genom ett hav av känslor och längtan, är nu resan på nio månader äntligen gjord.
                        Nu tar en ny livslång resa vid där ingen dag kommer bli den andre lik.
                        Det finns stunder där tiden står still men ofta rinner den iväg
                        snabbare än man hinner blinka.</p>
                    <p>Att föreviga dagen då det lilla knytet äntligen fick landa i famnen,
                        där ännu ett liv att älska kommit till jorden, där ni tillsammans är
                        en familj livet ut tycker vi är värt att skapa.</p>
                    <p>Genom våra tidlösa illustrationer gjorda av designers erbjuder vi
                        trendiga posters att pryda era väggar.
                        Lycka till i all framtid och glöm inte att ta tillvara på varje liten sekund tillsammans. </p>
                    <h5>/ efterlängtad.se</h5>
                </div>
            </div>

            <!--
          PRODUCTPICTURE SECTION
       -->
            <div class="products col-lg-6">
                <div class="productid1 col-lg-12">
                    <div class="pro1 col-sm-6 col-lg-6">
                        <div class="salediscount">
                            <a href="http://localhost/examensarbete/produkt/hasse/">
                                <img src=" <?php echo get_bloginfo('template_url') ?>/img/product.jpg" class="images"
                                     alt="">
                                <div class="middle">
                                    <div class="text3">Skapa din tavla</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="pro1 col-sm-6 col-lg-6">
                        <div class="salediscount">
                            <a href="http://localhost/examensarbete/produkt/hasse/">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/product.jpg" class="images"
                                     alt="">
                                <div class="middle">
                                    <div class="text3">Skapa din tavla</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="productid2 col-lg-12">
                    <div class="pro2 col-sm-6 col-lg-6">
                        <div class="salediscount">
                            <a href="http://localhost/examensarbete/produkt/hasse/">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/product.jpg" class="images"
                                     alt="">
                                <div class="middle">
                                    <div class="text3">Skapa din tavla</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="pro2 col-sm-6 col-lg-6">
                        <div class="salediscount">
                            <a href="http://localhost/examensarbete/produkt/hasse/">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/product.jpg" class="images"
                                     alt="">
                                <div class="middle">
                                    <div class="text3">Skapa din tavla</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--
           SALE SECTION
        -->
            <div class="sale col-lg-12">
                <div class="col-lg-6">
                    <div class="salediscount">
                        <a href="http://localhost/examensarbete/produkt/hasse/">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/rabatt.png" class="images" alt="">
                            <div class="middle">
                                <div class="text1">Alltid 10% rabatt vid första köpet!</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="saleparents">
                        <a href="http://localhost/examensarbete/produkt/hasse/">
                            <img src="<?php echo get_bloginfo('template_url') ?>/img/parents.png" class="images" alt="">
                            <div class="middle">
                                <div class="text2">Ge bort en underbar gåva till nyblivna mor och far föräldrar</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    <div class="inspo">
        <a href="http://localhost/examensarbete/illustrationer/">
            <img src="<?php echo get_bloginfo('template_url') ?>/img/inspo.png" alt="">
        </a>
    </div>

        </div>
    </div>
    </div>
    <div class="section-15">
        <div class="container">
            <div class="textauthor1 mx-auto col-lg-4">
            <i class="fa fa-quote-left" aria-hidden="true"></i>
                <div class="talk-1">
                    <p>Underbara illustrationer att fylla bebisrummet med</p>
                </div>
            <i class="fa fa-quote-right" aria-hidden="true"></i>
                <br> <h5>Familjen Karlsson</h5>
            </div>
            <div class="textauthor2 mx-auto col-lg-4">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <div class="talk-2">
                    <p>Äntligen ett företag som har trendiga och designrika posters. Det lilla extra över spjälsängen som gör hela rummet. Vi är så nöjda!</p>
                </div>
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <br> <h5>Aida, Josef och lillan Farreh</h5>
            </div>
            <div class="textauthor3 mx-auto col-lg-4">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <div class="talk-3">
                    <p>Trodde inte det skulle bli så bra tryck, postern är verkligen som en riktig handmålning. Snabb frakt och underbar service.</p>
                </div>
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <br> <h5>Morfar Leif och Mormor Lena.</h5>
            </div>
        </div>
    </div>

<!--
  INSPIRATION SECTION
-->
    <div class="container">
        <div class="row">
            <div class="wrapper">

                <!--
               INSTAGRAM SECTION
           -->
                <?php if (is_front_page()) { ?>
                    <div class="instagram"><p>Instagram ,</p></div>

                    <?php the_content(); ?>
                <?php } ?>
                <!--
              NEWSLETTER SECTION
           -->
                <form action="https://test.us16.list-manage.com/subscribe/post?u=139bb3994f074491a1dc77315&amp;id=0fc232aa0c"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                      target="_blank" novalidate>
                    <div class="newsletter col-sm-12">
                        <div class="single">
                            <h1>NYHETSBREV</h1>
                            <p>Prenumerera på vårat nyhetsbrev och få 10% rabatt på din första beställning. Få löpande
                                erbjudande, insperation och nyheter från äntligen.se.</p>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Din mail">
                                <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit">Prenumerera</button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_139bb3994f074491a1dc77315_0fc232aa0c" tabindex="-1" value=""></div>
                </form>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
</body>

<?php get_footer(); ?>
<?php


get_header();
?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <h2 style="width: 100%; text-align: center;">Chaitanya Powle</h2>
                <div class="single-background chaitanya">
                    <div class="single-row one">
                        <div class="single-row-left popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/1.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/1.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=kYrJfYbePFE">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Chaitanya.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left"></div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/2.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/2.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                             <a href="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Chaitanya Powle -rez/3.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                </div>
                <div class="single-concept-note">
                    <p>Concept- whole world is been locked due to the pandemic of covid-19. Because of this the whole world is locked in their own houses.due to this, footwear which we wear are useless. Eventually, footwear is a thing which we wear in our daily life.</p>

                    <p>Humans got the habit of getting slept in their houses,this habit made humans so lazy that their body contained much amount of fats in their body. This pandemic made humans used too it in their daily routine.due to this, the footwear started getting fungus in it. Months and months made the fungus large in size.</p>

                </div>
            </div>

            <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>
        </div><!-- #main -->
    </section><!-- #primary -->

    <script type="text/javascript">
       jQuery(function() {
            jQuery('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });

            jQuery('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });

            
        });
    </script>

<?php
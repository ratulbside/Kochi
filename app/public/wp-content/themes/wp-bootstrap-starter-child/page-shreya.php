<?php


get_header();
?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <h2 style="width: 100%; text-align: center;">Shreya</h2>
                <div class="single-background shreya">
                    <div class="single-row one">
                        <div class="single-row-left popup-gallery">
                            <a class="shreya-one-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/1.jpeg">
                                <img class="shreya-one-img" src="<?php echo get_theme_file_uri(); ?>/images/Shreya/1.jpeg">
                            </a>
                            <a class="shreya-two-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/2.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/2.jpeg">
                            </a>

                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/4.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left popup-gallery">
                             <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/5.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a class="shreya-three-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/6.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                            <a class="shreya-three-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/7.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/8.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                     <div class="single-row five">
                        <div class="single-row-left popup-gallery">
                             <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/9.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/10.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/11.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-concept-note">
                    <p>In the above painting, I wanted to mentioned that what is the condition of people in lockdown and how people are lived their life dramatically , drastically,  and may be decisively . The lockdown applied to three main areas physical movement out of the home,  social distancing when people outside home and restricted availability of most public services. All people having same rule "stay home and stay safe." Fish are packed in the pot. she can not surview anywhere same way the people having same condition like fish. Here I only said that it is safe when you are in home and it might be risky if u go out of home.</p>
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

            
        });
    </script>

<?php
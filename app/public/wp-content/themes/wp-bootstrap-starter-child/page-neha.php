<?php


get_header();
?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <h2 style="width: 100%; text-align: center;">Neha</h2>
                <div class="single-background neha">
                    <div class="single-row one">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=ZJJ6uzlVHsg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Neha.jpg">
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
                        <div class="single-row-left">
                           
                        </div>
                        <div class="single-row-right">
                             
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left popup-gallery">
                            
                        </div>
                        <div class="single-row-right">
                            
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

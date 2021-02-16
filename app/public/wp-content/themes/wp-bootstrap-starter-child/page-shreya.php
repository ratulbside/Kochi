<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #879294;
}
</style>
    
            <div class="container-shreya">
                <div class="single-background shreya">
                    <span id="view-btn" class="view-res-btn shreya-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Shreya Rohamare</h4>
                      <h4>Institute: Sndt Women’s University Pune</h4>
                      <h4>Location: Pune</h4>
                      <h4>Title: Paper drawings on digital photograph</h4>
                      <h4>Medium: Photos</h4>
                      <p>Truth that explodes within Like an elephant herd stampeded by ants, a miserable unimaginable happening to someone who thought he was god, now just a man behind walls. We have two truths- one that we see other that we know, idle are both as we are shunned into tenebrism by the germ that swept us inside our homes.Home is that space of familiar direction to feel everything around to a heighten sense of sunken personal expression, disinfecting the streets from us. We inscrutably loom around, almost compelled to fantasize scenarios and human faces that we missed, being the owner of inside its the outer that we seek. The truth out there is black and white and the inner almost a impression of tranquillity from a monk that exuberates limitless thoughts and fearsome abyss. That explodes within.</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left popup-gallery">
                            <a class="shreya-one-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/1.jpeg">
                                <img class="shreya-one-img" src="<?php echo get_theme_file_uri(); ?>/images/Shreya/1.jpeg">
                            </a>
                            <a class="shreya-two-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/2.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/2.jpeg">
                            </a>
                            <h3 class="single-institute">Sndt Women’s University Pune</h3>
                            <h3 class="single-name title">Paper drawings on digital photograph</h3>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <h3 class="single-name">Shreya Rohamare</h3>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/3.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
                            <p class="single-concept-note">
                                Truth that explodes within Like an elephant herd stampeded by ants, a miserable unimaginable happening to someone who thought he was god, now just a man behind walls. We have two truths- one that we see other that we know, idle are both as we are shunned into tenebrism by the germ that swept us inside our homes.Home is that space of familiar direction to feel everything around to a heighten sense of sunken personal expression, disinfecting the streets from us. We inscrutably loom around, almost compelled to fantasize scenarios and human faces that we missed, being the owner of inside its the outer that we seek. The truth out there is black and white and the inner almost a impression of tranquillity from a monk that exuberates limitless thoughts and fearsome abyss. That explodes within.

                            </p>
                        </div>
                        <div class="single-row-right popup-gallery">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/4.jpeg">
                                <img style="margin-bottom: 5px;" src="<?php echo get_theme_file_uri(); ?>/images/Shreya/4.jpeg">
                            </a>
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/5.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/5.jpeg">
                            </a>

                            <a class="shreya-three-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/6.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/6.jpeg">
                            </a>
                            <a class="shreya-three-img" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/7.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/7.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-medium">Photos</h3> 
                        </div>
                        <div class="single-row-right popup-gallery">
                             <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/8.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/8.jpeg">
                            </a>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                           
                        </div>
                    </div>
                     <div class="single-row five">
                        <div class="single-row-left popup-gallery">
                             <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/9.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/9.jpeg">
                            </a>
                            <a class="shreya-five-tow" href="<?php echo get_theme_file_uri(); ?>/images/Shreya/10.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/10.jpeg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            <a href="<?php echo get_theme_file_uri(); ?>/images/Shreya/11.jpeg">
                                <img src="<?php echo get_theme_file_uri(); ?>/images/Shreya/11.jpeg">
                            </a>
                        </div>
                    </div>
                </div>
               <?php 
                    get_template_part( 'template-parts/single-switch', 'switch' );

                 ?>
            </div>
<?php
get_footer();
?>
            

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

            jQuery('#view-btn').on("click", function(){
                jQuery.magnificPopup.open({
                  items: {
                      src: '#content-popup',
                      type:'inline'
                  },
                  modal: false
              });
            });
            
        });
    </script>

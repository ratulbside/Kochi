<?php


get_header();
?>
<style type="text/css">
body {
    background-color: #b6a897;
}
</style>
    
            <div class="container-sushil">
                <!-- <h2 style="width: 100%; text-align: center;">Sushil Jagtap</h2> -->
                <div class="single-background sushil">
                    <span id="view-btn" class="view-res-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: SUSHIL JAGTAP</h4>
                      <h4>Institute: DR.B.A.M.U.A</h4>
                      <h4>Location: Pune</h4>
                      <h4>Title: sound</h4>
                      <h4>Medium: Video</h4>
                      <h4>Duration: 1.48</h4>
                      <p>To stay safe from Corona we adopted the Lockdown as a self-responsibility. Being in closed spaces became intolerable and we eagerly waited for it to end. Through this video, I have tried to show the impatience each of us had for the Lockdown to get over.</p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left">
                            <h3 class="single-name">SUSHIL JAGTAP</h3>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                            <p class="single-concept-note">
                                To stay safe from Corona we adopted the Lockdown as a self-responsibility. Being in closed spaces became intolerable and we eagerly waited for it to end. Through this video, I have tried to show the impatience each of us had for the Lockdown to get over.
                            </p>
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">DR.B.A.M.U.A</h3>
                            
                        </div>
                        <div class="single-row-right">
                            <div style="height: 35px"></div>
                            <h3 class="single-medium">MEDIUM - videos </h3>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=QT_JklxIg6Y">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/Sushil.jpg">
                            </a>
                            <h3 class="single-title">sound</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-location">Pune</h3>
                        </div>
                    </div>
                    <div class="single-row five">
                        <div class="single-row-left">
                            
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-duration">Duration: 1.48</h3>
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
            jQuery('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
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

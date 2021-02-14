<?php

get_header();
?>
<style type="text/css">
body {
    background-color: #afaea9;
}
</style>
            <div class="container-tanya">
                <div class="single-background tanya">
                    <span id="view-tanya" class="view-res-btn">View Details</span>
                    <div id="content-popup" class="white-popup mfp-hide">
                      <h4>Name: Tanya Badkul</h4>
                      <h4>Institute: Govt.college of art and design ,Nagpur</h4>
                      <h4>Location: Jabalpur</h4>
                      <h4>Title: UNCERTAINTY</h4>
                      <h4>Medium: Videos</h4>
                      <h4>Duration: 2.42</h4>
                      <p>Concept Note: <br>The lockdown has forced all of us to slow down, and has even created anxiety and restlessness in some of us.<br>I would roam around the house, aimlessly, as my body and mind were used to space and movement. It took me time to develop new habits in this “new normal”. <br>I began meditating on life and it’s uncertainty, which I have attempted to depict in my work. Just as when one creates a house of cards- cautiously and carefully- with a lingering uncertainty on whether or not it will fall, this uncertainty applies to our lives as well. </p>
                    </div>
                    <div class="single-row one">
                        <div class="single-row-left">
                             <h3 class="single-name">Tanya Badkul</h3>
                             <h3 class="single-name title">UNCERTAINTY</h3>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row two">
                        <div class="single-row-left">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=tKRPtv9cD2Q">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/thmb-tanya-one.jpg">
                            </a>
                        </div>
                        <div class="single-row-right">
                            
                        </div>
                    </div>
                    <div class="single-row three">
                        <div class="single-row-left">
                            <h3 class="single-institute">Government College of Art And Design, Nagpur</h3>
                            <h3 class="single-duration">Duration: 2:42</h3>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-location">Jabalpur</h3>
                        </div>
                    </div>
                    <div class="single-row four">
                        <div class="single-row-left">
                            <p class="single-concept-note">
                                The lockdown has forced all of us to slow down, and has even created anxiety and restlessness in some of us.I would roam around the house, aimlessly, as my body and mind were used to space and movement. It took me time to develop new habits in this “new normal”. I began meditating on life and it’s uncertainty, which I have attempted to depict in my work. Just as when one creates a house of cards- cautiously and carefully- with a lingering uncertainty on whether or not it will fall, this uncertainty applies to our lives as well.

                            </p>
                        </div>
                        <div class="single-row-right">
                            <h3 class="single-medium">videos</h3>
                             <a class="popup-video" href="https://www.youtube.com/watch?v=oddjAbz1iPo">
                                <img id="varsha-two" src="<?php echo get_theme_file_uri(); ?>/images/thmb-tanya-two.jpg">
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
            jQuery('.popup-video').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });

            jQuery('#view-tanya').on("click", function(){
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

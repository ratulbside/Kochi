<?php
/**
 * Template Name: Blank with Container
 */

 get_header();
?>
<div id="content" class="site-content">
    <div class="container">
        <div class="row">
            <section id="primary" class="content-area non-floor">
                <div id="main" class="site-main" role="main">
                    <?php 
                get_template_part( 'template-parts/single-switch', 'switch' );

             ?>
                    <div class="container">
                        <header class="entry-header">
                            <h1 class="entry-title">
                            Workshop Facilitator Note </br>
                            Amol K Patil 
                            </h1>
                        </header>
                        <div class="entry-content mentor-videos">
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                    This workshop, which is a part of the 5th edition of the Students’ Biennale, was a collective effort to explore digital platforms and a reaction to periods of isolation. We used interactive exercises to explore these possibilities in virtual spaces. 
                                    </p>
                                    <p>
                                    In the period of the lockdown, and through the pandemic, all of us made some similar observations. During these exercises, we attempted to connect these. Particularly, the smaller moments that get lost easily or get overlapped with those of a higher amplitude. For example, when we think about it, the immediate sound of birds chirping may reach our ears. Nowadays, we probably wake up listening to them. They sabotaged the sound of horns and every single machine that was out there claiming their own space in the environment. 
                                    </p>
                                    <p>
                                    Even in the personal space, it is quite interesting to see how through yoga, exercise and meditation, people are giving themselves hope. This is also because of how we define humans as social animals and when not being able to meet each other, we could not overlook the wider social aspect that was happening outside of our homes. Significantly with the labors- how the body is transporting itself from one city to another without food and surety to reach its destination which makes us question this structure and the position of the migrants itself.
                                    </p>
                                    <p>
                                    All the participants and I, together, tried to encounter these challenges. We addressed the sense of touch which was very prominently replaced by the sense of seeing. These days the most exploitative organ in our body is our eyes. We try to touch through our eyes, not by actually touching anything, but just by looking. We have a very intimate relationship with gadgets. Especially cameras. We perform in front of the camera. In our sessions, we went through a series of live performances on camera to interact with each other and exchange expressions. 
                                    </p>
                                    <p>
                                    Eventually, we tried collaborative as well as individual exercises to explore different mediums. For example- painting, digital drawings, video, stop motion, animation, etc. Thinking of the white cube legacy, we offer an alternative space to present our work in a more intimate space. We are inviting viewers to experience the exquisite space of each participant's home on the website. This is a collective expression by a group of emerging artists from India.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=SOHqbE6W2aI">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/1.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=cU3R_CkBNOU">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/2.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=Qsy_idpqGBQ">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/3.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=rmCQgzd9zTU">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/4.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=ZPlK3xm2Xi4">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/5.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=yfO6X-S-Kvg">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/6.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=MN5PbhDnTl4">
                                        <img src="<?php echo get_theme_file_uri(); ?>/images/mentor/7.jpg">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!-- #main -->
            </section><!-- #primary -->
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
                });
            </script>



            <?php
get_footer();
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div class="home-background-area">
		<div class="home-main-area">
				<div class="button-area-row first">
					<div class="button-area-position">
						<div class="part-one">
							<button id="varsha" class="varsha" page-url="<?php echo site_url();?>/varsha"></button>
						</div>
						<div class="part-two">
							<button id="tanya" class="tanya" page-url="<?php echo site_url();?>/tanya"></button>
							<button id="sushil" class="sushil" page-url="<?php echo site_url();?>/sushil"></button>
						</div>
						<div class="part-three">
							<button id="siddhant" class="siddhant" page-url="<?php echo site_url();?>/siddhant"></button>
						</div>
					</div>
				</div>
				<div class="button-area-row second">
					<div class="button-area-position">
						<div class="part-one">
							
						</div>
						<div class="part-two">
							<button id="shreya" class="shreya" page-url="<?php echo site_url();?>/shreya"></button>
							<button id="sawani" class="sawani" page-url="<?php echo site_url();?>/sawani"></button>
						</div>
						<div class="part-three">
							
						</div>
					</div>
				</div>
				<div class="button-area-row third">
					<div class="button-area-position">
						<div class="part-one">
							<button id="rushikesh" class="rushikesh" page-url="<?php echo site_url();?>/rushikesh"></button>
						</div>
						<div class="part-two">
							
							<button id="rohit" class="rohit" page-url="<?php echo site_url();?>/rohit"></button>
						</div>
						<div class="part-three">
							<button id="neha" class="neha" page-url="<?php echo site_url();?>/neha"></button>
							<button id="mukta-kumar" class="mukta-kumar" page-url="<?php echo site_url();?>/muktakumar"></button>
						</div>
					</div>
				</div>
				<div class="button-area-row third four">
					<div class="button-area-position">
						<div class="part-one">
							
							<button id="kumar-misal" class="kumar-misal" page-url="<?php echo site_url();?>/kumar"></button>
						</div>
						<div class="part-two">
							
							<button id="kasin-patel" class="kasin-patel" page-url="<?php echo site_url();?>/kasin"></button>
						</div>
						<div class="part-three">
							<button id="chaitanya-powle" class="chaitanya-powle" page-url="<?php echo site_url();?>/chaitanya"></button>
							<button id="manish-rathod" class="manish-rathod" page-url="<?php echo site_url();?>/mansi"></button>
						</div>
					</div>
				</div>
			</div>	
	</div>

	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://unpkg.com/tippy.js@6"></script>

	<script type="text/javascript">
		tippy('#varsha', {
		  content: "Varsha",
		});
		tippy('#tanya', {
		  content: "Tanya",
		});
		tippy('#sushil', {
		  content: "Sushil",
		});
		tippy('#siddhant', {
		  content: "Siddhant",
		});
		tippy('#shreya', {
		  content: "Shreya",
		});
		tippy('#sawani', {
		  content: "Sawani",
		});
		tippy('#rushikesh', {
		  content: "Rushikesh",
		});
		tippy('#rohit', {
		  content: "Rohit",
		});
		tippy('#neha', {
		  content: "Neha",
		});
		tippy('#mukta-kumar', {
		  content: "Mukta + kumar",
		});
		tippy('#kumar-misal', {
		  content: "Kumar Misal",
		});
		tippy('#kasin-patel', {
		  content: "Kasin Patel",
		});
		tippy('#chaitanya-powle', {
		  content: "Chaitanya Powle",
		});
		tippy('#manish-rathod', {
		  content: "Mansi Rathod",
		});
	</script>




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

<style type="text/css">
body {
    background-color: #b3a797;
}
</style>


<div class="home-background-area">
    <div class="home-main-area">
        <div class="button-area-row first">
            <div class="button-area-position">
                <div class="part-one">
                    <button id="varsha" class="varsha" page-url="<?php echo site_url();?>/sawani"></button>
                </div>
                <div class="part-two">
                    <button id="tanya" class="tanya" page-url="<?php echo site_url();?>/rohit"></button>
                    <button id="sushil" class="sushil" page-url="<?php echo site_url();?>/kumar"></button>
                </div>
                <div class="part-three">
                    <button id="siddhant" class="siddhant" page-url="<?php echo site_url();?>/rushikesh"></button>
                </div>
            </div>
        </div>
        <div class="button-area-row second">
            <div class="button-area-position">
                <div class="part-one">

                </div>
                <div class="part-two">
                    <button id="shreya" class="shreya" page-url="<?php echo site_url();?>/kasin"></button>
                    <button id="sawani" class="sawani" page-url="<?php echo site_url();?>/shreya"></button>
                </div>
            </div>
        </div>
        <div class="button-area-row third">
            <div class="button-area-position">
                <div class="part-one">
                    <button id="rushikesh" class="rushikesh" page-url="<?php echo site_url();?>/neha"></button>
                </div>
                <div class="part-two">
                    <button id="rohit" class="rohit" page-url="<?php echo site_url();?>/varsha"></button>
                </div>
                <div class="part-three">
                    <button id="neha" class="neha" page-url="<?php echo site_url();?>/chaitanya"></button>
                    <button id="mukta-kumar" class="mukta-kumar" page-url="<?php echo site_url();?>/siddhant"></button>
                </div>
            </div>
        </div>
        <div class="button-area-row third four">
            <div class="button-area-position">
                <div class="part-one">
                    <button id="kumar-misal" class="kumar-misal" page-url="<?php echo site_url();?>/tanya"></button>
                </div>
                <div class="part-two">
                    <button id="kasin-patel" class="kasin-patel" page-url="<?php echo site_url();?>/sushil"></button>
                </div>
                <div class="part-three">
                    <button id="chaitanya-powle" class="chaitanya-powle" page-url="<?php echo site_url();?>/mansi"></button>
                    <button id="manish-rathod" class="manish-rathod" page-url="<?php echo site_url();?>/muktakumar"></button>
                </div>
            </div>
        </div>
    </div>
	<div class="home-secondary-area">
		<div class="button-area-row first">
            <div class="button-area-position">
                <div class="part-one">
					<button id="amol" class="amol" page-url="<?php echo site_url();?>/mentor"></button>
					<button id="exhibition" class="exhibition" page-url="<?php echo site_url();?>/theme"></button>
                </div>
            </div>
        </div>
	</div>
</div>

<?php
get_footer();
?>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<script type="text/javascript">
tippy('#varsha', {
    content: "Sawani Chaudhary",
});
tippy('#tanya', {
    content: "Rohit Varekar",
});
tippy('#sushil', {
    content: "Kumar Pandurang Misal",
});
tippy('#siddhant', {
    content: "Rushikesh R. Potrekar",
});
tippy('#shreya', {
    content: "Kashin Patel",
});
tippy('#sawani', {
    content: "Shreya Rohamare",
});
tippy('#rushikesh', {
    content: "Neha Zode",
});
tippy('#rohit', {
    content: "Varsha Umate",
});
tippy('#neha', {
    content: "Chaitanya Powle",
});
tippy('#mukta-kumar', {
    content: "Siddhant Meher",
});
tippy('#kumar-misal', {
    content: "Tanya Badkul",
});
tippy('#kasin-patel', {
    content: "Sushil Jagtap",
});
tippy('#chaitanya-powle', {
    content: "Mansi Rathod",
});
tippy('#manish-rathod', {
    content: "Mukta Vaidya + Kumar Misal",
});
tippy('#amol', {
    content: "Amol K Patil",
});
tippy('#exhibition', {
    content: "Concept Note",
});
</script>
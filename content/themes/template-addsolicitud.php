<?php
/*
Template Name: add solicitud
*/
?>

<?php get_header();?>
<div class="container">
    <div class="col-md-10 col-md-offset-1" >
        <h1 style="text-align:center;"><?php the_title();?></h1>
        <?php get_template_part('includes/section','addsolicitud');?>
    </div>
    
</div>
<?php get_footer();?>
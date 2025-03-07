<?php
$fields = get_fields();
get_header('page'); ?>
<style>
    .icon-menu span, .icon-menu::after, .icon-menu::before {
        background-color: #000;
    }
    .header{
        background-color: #fff!important;
    }
    .header .header-container .header-top .header-block {
        color:#000!important;
    }
    .header .header-container .header-top .header-block .header-button{
        color: #fff;
    }
    .page_content_img{
        z-index: 1;
    }
    .footer{
        position: relative;
        z-index: 10;
        border-radius: 24px 24px 0px 0px;
    }
    .page_last_update{
        font-size: 12px;
        line-height: 12px;
    }
</style>
<?php
    while (have_posts()) :
    the_post();
?>
<div class="page_content">
    <div class="container">
        <div class="page_content_wrapper">
            <div class="page_last_update">Last updated: <?= $fields['last_update']; ?></div>
            <h1 class="page_title"><?= get_the_title()?></h1>
            <div class="page_content_box">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <img id="rotating-image" class="page_content_img" src="<?= get_template_directory_uri()?>/assets/dist/images/page.svg" alt="">
</div>

<?php  
    endwhile;
?>

<?php
get_footer();














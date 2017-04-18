<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 18.04.2017
 * Time: 15:48
 */
?>
<?php get_header('custom'); ?>

<div class="category_heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="up white"> Новости |
                    <?php wp_title('');?></h4>
            </div>
        </div>
    </div>
</div>
<div class="container single_news_page">
    <div class="row">
        <div class="col-md-9"><?php
            $thumbId = get_post_thumbnail_id();
            $thumbURL = wp_get_attachment_image_src($thumbId, 'full', true);
            $thumbURL = $thumbURL[0];?>
            <div class="head" style="margin-bottom: 15px;">
               <h3 class="up black"><?php the_title();?></h3>
            </div>
            <div class="news_thumb_full">
                <img src="<?=$thumbURL?>" class="img-responsive"/>
            </div>
        </div>
        <div class="col-md-12">
            <div class="content">
                <p class="black">
                    <?php echo get_the_content(); ?>
                </p>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

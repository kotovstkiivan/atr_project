<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 21.04.2017
 * Time: 10:54
 * Template name: Условия участия
 */
?>

<?php get_header('custom'); ?>
<div class="category_heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="up white"><?php wp_title('');?></h4>
            </div>
        </div>
    </div>
</div>

<main class="concurs_rules">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="rules_control">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#aboutConkurs" data-toggle="tab"><h4>Положения о конкурсе</h4></a></li>
                        <li><a href="#aboutRules" data-toggle="tab"><h4>Правила конкурса</h4></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="rules_content">
                    <div class="tab-content">
                        <div id="aboutConkurs" class="tab-pane fade in active">
                              <?= do_shortcode('[wpuf-meta name="about"]'); ?>
                        </div>
                        <div id="aboutRules" class="tab-pane fade">
                            <?= do_shortcode('[wpuf-meta name="rules"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>

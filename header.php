<?php
/**
 * @package Arh_project
 */

//$lang = qtrans_getLanguage();

$currentLang = qtrans_getLanguage();
loadTranslate($currentLang);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/fav.ico" type="image/ico">
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-106461-5F5Ub';</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pagePreloader" class="preloader">
    <div class="spinner">
        <img src="<?=get_template_directory_uri();?>/assets/images/preloader.gif" />
    </div>
</div>
<div class="registration_modal modal fade" id="registrationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Войдите, чтобы загрузить работу</h4>
            </div>
            <div class="modal-body">
                <?php  if (is_user_logged_in()): 
                    $currentUser = wp_get_current_user();
                    ?>
                    <p><h4>Вы вошли как <?=$currentUser->user_lastname;?></h4></p>
                    <h3 class="black"><a href="<?=wp_logout_url('/');?>" class="black"> Выйти.</a></h3>

                <?php else: ?>
                <?php include('template-parts/registration.php') ?>
                <?php include('template-parts/login-form.php') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="registration_modal modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Последний шаг</h4>
            </div>
            <div class="modal-body">
                <div class="login auth_form">
                    <div class="form_description text-center">
                        <p class="black text-center">Если вы уже зарегистрировались, войдите,
                            чтобы мы вас узнали.</p>
                    </div>
                    <div class="login_form">
                        <form class="base_form">
                            <div class="row">
                                <div class="col-md-12 field_item">
                                    <input type="email" name="auth_login" placeholder="Email" />
                                </div>
                                <div class="col-md-12 field_item">
                                    <input type="password" name="auth_pass" placeholder="Пароль" />
                                </div>
                                <div class="col-md-12 checkbox_field">
                                    <input type="checkbox" name="auth_remember" id="authRemember"/>
                                    <label for="authRemember">Запомнить меня</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="registration_modal modal fade" id="infoRegistration">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    <span></span><span></span>
                </button>
                <h4 class="white base_font">Последний шаг</h4>
            </div>
            <div class="modal-body">
                <div class="login auth_form">
                    <div class="form_description text-center">
                        <p class="black text-center">Осталось самая малость</p>
                    </div>
                    <div class="text text-center">
                        <p class="black">Мы отправили пароль от личного кабинета вам на почту.
                            Пожалуйста, откройте наше письмо, чтобы подтвердить
                            регистрацию на сайте.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="language_selector hidden-xs hidden-sm">
<?php qtranxf_generateLanguageSelectCode('dropdown'); ?>
</div>
<?php include ('template-parts/nav.php'); ?>
<a href="#" class="top_link"><span class="hidden-xs hidden-sm white">
        <?=lang('up');?>
    </span></a>
<div class="helper_toggle">
    <a href="#" id="helperToggle">
        <i class="fa fa-toggle-down"></i>
        </a>
</div>
<div class="helper red hidden-xs hidden-sm" id="topHelper">

    <?php if (!is_user_logged_in()): ?>
    <span>
        <?=lang('top helper not log');?>
        <a href="#registrationModal" data-toggle="modal" id="topActionForUnloggined">
            <?=lang('here');?>
        </a></span>
    <a class="helper_close" href="#">
        <span></span><span></span>
    </a>
<?php else: ?>
        <div class="row loggined_helper">

            <div class="col-md-9 col-md-offset-0 col-lg-8 col-lg-offset-1">
    <span>
        <?=lang('top helper log');?>
        <a href="<?=get_page_link(68);?>" data-toggle="modal">
            <?=lang('here');?>
        </a></span>


            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                <?php
                $user = wp_get_current_user();
                ?>
                <div class="helper_user_info">

                    <ul class="user_info_list">
                        <li class="dropdown">
                            <a id="userInfoDropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?=lang('you loggined as');?> <?=$user->user_lastname;?>
                            </a>
                            <span class="caret"></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?=get_page_link(177);?>">
                                        <?php echo lang('personal area');?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=get_page_link(68);?>">
                                        <?=lang('Download the work');?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=wp_logout_url('/')?>">
                                        <?=lang('logout');?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="helper_close" href="#">
            <span></span><span></span>
        </a>
    <?php endif; ?>
</div>
<div class="helper red visible-xs visible-sm">
    <span class="white"><?=lang('top helper mobile');?></span>
</div>

<header class="base_background">
    <div class="container">
        <div class="row top_header_section">
            <div class="col-xs-6 col-md-6">
                <div class="header_logo text-left">
                    <a href="/"0>
                    <img src="<?php echo get_template_directory_uri() .
                    ($currentLang == 'ru' ? '/assets/images/arh_logo.png' :
                        '/assets/images/arh_logo_eng.png')?>"
                         class="img-responsive hidden-xs hidden-sm" />
                        <img
                                src="<?php echo get_template_directory_uri() .
                                ($currentLang == 'ru' ? '/assets/images/mobile_arh_logo.png' :
                                    '/assets/images/arh_mobile_en.png');?>"
                             class="visible-xs visible-sm" />
                        </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="language_selector text-right">

                </div>
                <div class="header_logo text-right clearfix">
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <i class="pull-right logo_header_icon hidden-xs hidden-sm"
                         title="<?=lang('founder and organizer of counkurse');?>"  data-toggle="tooltip" data-placement="bottom">
                       </i>
                        <div class="mobile_block_cds visible-xs visible-sm">
                         <h5 class="white">
                             <?=lang('founder and organizer');?>
                             :</h5>
                        <img src="<?=get_template_directory_uri();?>/assets/images/mobile_cds_logo.png"
                             class="img-responsive" />
                            </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row nav_header_section line_hover">
            <div class="toggle_button" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="col-md-12 nav_text">
                <div class="text">
                    <h3 class="text-center white hidden-xs hidden-sm">
                        <?=lang('main header description');?>
                        </h3>
                    <h3 class="text-center white up visible-xs visible-sm">
                        <?=lang('main header description');?>
                </div>
                <div class="cursor">
                    <img src="<?=get_template_directory_uri()?>/assets/images/cursor.png" class="img-responsive block_center"/>
                </div>
                <div class="button_more">
                    <a href="<?=get_page_link(29)?>" id="buttonLearnMore" class="button base medium block_center white">
                       <?=lang('learn more');?>
                    </a>
                </div>
            </div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </div>
</header>

<?php
/**
 * @package Arh_project
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta name="viewport" content="width=1280">-->

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
<!--                <div class="registration auth_form">-->
<!--                    <div class="form_description text-center">-->
<!--                        <p class="black">Пожалуйста, зарегистрируйтесь, чтобы иметь возможность-->
<!--                            принять участие в конкурсе.</p>-->
<!--                        <p class="black">-->
<!--                            Введите адрес электронной почты, и мы отправим-->
<!--                            вам пароль от личного кабинета.</p>-->
<!--                    </div>-->
<!--                    <div class="reg_form">-->
<!--                        <form class="base_form">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="text" name="name" placeholder="Имя Фамилия" required />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="email" name="email" placeholder="Email" required />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 checkbox_field">-->
<!--                                    <input type="checkbox" name="confirm" id="authrConfirm" required/>-->
<!--                                    <label for="authrConfirm">Я согласен на обработку своих персональных данных</label>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 submit_field">-->
<!--                                    <button type="submit" class="button base medium black">Регистрация</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
                <?php else: ?>
                <?php include('template-parts/registration.php') ?>
<!--                <div class="login auth_form">-->
<!--                    <div class="form_description text-center">-->
<!--                        <p class="black text-center">Если вы уже зарегистрировались, войдите,-->
<!--                            чтобы мы вас узнали.</p>-->
<!--                    </div>-->
<!--                    <div class="login_form">-->
<!--                        <form class="base_form">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="email" name="auth_login" placeholder="Email" />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 field_item">-->
<!--                                    <input type="password" name="auth_pass" placeholder="Пароль" />-->
<!--                                </div>-->
<!--                                <div class="col-md-12 checkbox_field">-->
<!--                                    <input type="checkbox" name="auth_remember" id="authRemember"/>-->
<!--                                    <label for="authRemember">Запомнить меня</label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
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

<div class="main_nav" id="mainNav">
    <a class="nav_close" href="#">
        <span></span><span></span>
    </a>
    <div class="container">
        <div class="row">
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(29);?>" class="up white">О конкурсе</a></li>
                    <li><a href="<?=get_page_link(175);?>" class="up white">Новости</a></li>
                    <li><a href="<?=get_page_link(40)?>" class="up white">Жюри</a></li>
                    <li><a href="<?=get_page_link(56)?>" class="up white">Партнеры</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li class="sub_menu not_hover"><span class="sub sub_padd">Номинации</span>
                    <ul class="sub_nav">
                        <li><a href="<?=get_page_link(115);?>" target="_blank">Интерьер квартиры</a></li>
                        <li><a href="<?=get_page_link(165);?>" target="_blank">Павильон/беседка</a></li>
                        <li><a href="<?=get_page_link(168);?>" target="_blank">Остановка транспорта</a></li>
                        <li><a href="<?=get_page_link(525);?>" target="_blank">Город на воде</a></li>
                    </ul>
                    </li>
                    <li><a href="<?=get_page_link(171);?>" class="up white">Призы</a></li>
                    <li><a href="<?=get_page_link(469);?>" class="up white">Условия участия</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li><a href="<?=get_page_link(190)?>" class="up white">Работы<span class="base_font"> (Студенты)</span></a></li>
                    <li><a href="<?=get_page_link(186);?>" class="up white">Работы<span class="base_font"> (Выпускники)</span></a></li>
                    <li><a href="<?=get_page_link(188);?>" class="up white">Финалисты 2016</a></li>
                    <li><a href="<?php is_user_logged_in() ? print get_page_link(68) : print "#registrationModal" ?>" class="up white gold_marker" data-toggle="modal">Участвовать</a></li>
                </ul>
            </div>
            <div class="col-md-3 left_separate">
                <ul class="nav">
                    <li>

                        <?php if (is_user_logged_in()): ?>
                        <a href="<?=get_page_link(177);?>" class="up white">Личный кабинет</a>
                        <?php else: ?>
                            <a href="#registrationModal" data-toggle="modal" class="up white">Регистрация</a>
                        <?php endif; ?>

                    </li>
                    <li><a href="#contactForm" class="up white scroll_link">Задать вопрос</a></li>
                    <li><a href="#contactForm" class="up white scroll_link">Контакты</a></li>
                    <li>
                        <div class="social_block">
                            <ul>
                                <li><a href="https://www.facebook.com/pro.zvezdaudachi/" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-fb"></i>
                                    </a></li>
                                <li><a href="https://vk.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-vk"></i>
                                    </a></li>
                                <li><a href="http://instagram.com/pro.zvezdaudachi" target="_blank">
                                        <i class="soc_hov_new soc_hov_new-inst"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a href="#" class="top_link"><span class="hidden-xs hidden-sm white">Наверх</span></a>
<div class="helper red hidden-xs hidden-sm" id="topHelper">
    <?php if (!is_user_logged_in()): ?>
    <span>Приём работ открыт с 1 апреля до 15 сентября 2017. Чтобы принять участие, нажмите
        <a href="#registrationModal" data-toggle="modal"> здесь</a>.</span>
    <a class="helper_close" href="#">
        <span></span><span></span>
    </a>
<?php else: ?>
    <span>Приём работ открыт с 1 апреля до 15 сентября 2017. Чтобы отправить выполненный проект, нажмите
        <a href="<?=get_page_link(68);?>" data-toggle="modal"> здесь</a>.</span>
    <a class="helper_close" href="#">
        <span></span><span></span>
    <?php endif; ?>
</div>
<div class="helper red visible-xs visible-sm">
    <span class="white">С 1 апреля до 15 сентября 2017 идёт приём работ.</span>
</div>

<header class="base_background">
    <div class="container">
        <div class="row top_header_section">
            <div class="col-xs-6 col-md-6">
                <div class="header_logo text-left">
                    <a href="/">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arh_logo.png"
                         class="img-responsive hidden-xs hidden-sm" />
                        <img src="<?=get_template_directory_uri();?>/assets/images/mobile_arh_logo.png" 
                             class="visible-xs visible-sm" />
                        </a>
                </div>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="header_logo text-right clearfix">
                    <a href="http://www.cds.spb.ru" target="_blank">
                    <i class="pull-right logo_header_icon hidden-xs hidden-sm"
                         title="Учредитель и организатор конкурса"  data-toggle="tooltip" data-placement="bottom">
                       </i>
                        <div class="mobile_block_cds visible-xs visible-sm">
                         <h5 class="white">Учредитель и организатор:</h5>
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
                    <h3 class="text-center white hidden-xs hidden-sm">«АРХпроект» — Всероссийский конкурс
                        архитектурных и дизайнерских проектов, открытый для участия как студентам,
                        так и молодым архитекторам</h3>
                    <h3 class="text-center white up visible-xs visible-sm">«АРХпроект» — Всероссийский конкурс
                        архитектурных и дизайнерских проектов, открытый для участия как студентам,
                        так и молодым архитекторам</h3>
                </div>
                <div class="cursor">
                    <img src="<?=get_template_directory_uri()?>/assets/images/cursor.png" class="img-responsive block_center"/>
                </div>
                <div class="button_more">
                    <a href="<?=get_page_link(29)?>" class="button base medium block_center white">Узнать больше</a>
                </div>
            </div>
            <span class="separate_line_hover left"></span>
            <span  class="separate_line_hover right"></span>
            <span class="separate_line_hover top"></span>
            <span class="separate_line_hover bottom"></span>
        </div>
    </div>
</header>

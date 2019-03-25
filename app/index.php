<?php
    include ('define_lang.php');
?>
<!doctype html>
<html lang=<?php echo locale ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo user_profession ?></title>

    <meta property="og:url" content="http://shade-design.com.ua/">
    <meta name="author" content=<?php echo author ?>>
    <base href="/">

    <meta property="og:title"
          content=<?php echo lawyers_dossier_description_1 ?>>

    <meta name="title"
          content=<?php echo lawyers_dossier_description_1 ?>>

    <meta name="keywords"  content=<?php echo lawyers_dossier_description_1 ?>>

    <meta property="og:description" lang="ua"  content=<?php echo lawyers_dossier_description_1 ?>>

    <link rel="canonical" href="http://advocate-grinchenko.com.ua">
    <link rel="shortlink" href="http://advocate-grinchenko.com.ua">

    <meta property="og:site_name" content=<?php echo user_profession ?>>

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://advocate-grinchenko.com.ua">
    <meta property="og:locale" content=<?php echo locale ?>>
    <meta property="og:image" content="./img/img-user.jpg">
    <meta property="og:image:secure_url" content="./img/img-user.jpg">

    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">


    <link  rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto:100,300,300i,500">
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<div class="wrapper" id="head">
    <div class="container">
<!--header-begin-->
        <header>
        <!--fixed-nav-begin-->
            <div class="nav-fixed" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="#head" class="scroll">
                            <img src="img/card.svg" alt="card">
                            <span><?php echo business_card ?></span>
                        </a>
                    </li>
                    <li><a href="#sect-1" class="scroll">
                            <img src="./img/user.png" alt="user">
                            <span><?php echo dossier ?></span>
                        </a>
                    </li>
                    <li class="affairs">
                        <a href="#sect-2" class="scroll">
                            <img src="./img/case.png" alt="case">
                            <span><?php echo  affairs ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#foot" class="scroll">
                            <img src="./img/send.svg" alt="send-img">
                            <span><?php echo feedback ?></span>
                        </a>
                    </li>
                </ul>
                <div class="change-lang">
                    <span><?php echo change_lang ?></span>
                    <a href="switch_lang.php?lang=ua">UA</a>
                    <a href="switch_lang.php?lang=ru">RU</a>
                    <a href="switch_lang.php?lang=en">EN</a>
                </div>
            </div>
        <!--fixed-nav-end-->
        <!--mobile-settings-begin-->
            <div class="mobile-settings">
            <!--toggle-nav-begin-->
                <div class="toggle-nav">
                    <div class="container-menu">
                        <div class="logo-toggle-nav">
                            <a href="index.php"><img src="./img/logo-nav.png" alt="logo"></a>
                            <h4><?php echo name_user ?></h4>
                            <p><?php echo user_profession ?></p>
                        </div>
                        <div class="border"></div>
                        <ul>
                            <li><a href="#head" class="scroll"><?php echo business_card ?></a></li>
                            <li><a href="#sect-1" class="scroll"><?php echo dossier ?></a></li>
                            <li class="affairs"><a href="#sect-2" class="scroll"><?php echo  affairs ?></a></li>
                            <li><a href="#foot" class="scroll"><?php echo feedback ?></a></li>
                        </ul>
                        <div class="border"></div>
                        <p class="copyright-nav">© 2016 all right reserved. grin.Attorney</p>
                    </div>
                </div>
            <!--toggle-nav-begin-->
                <a href="#" class="open-nav">
                    <span></span>
                </a>
                <img src="./img/logo-nav.png" alt="logo" class="logo-head">
                <div class="language-container">
                    <a href="#modal-language" data-toggle="modal" class="lang-open">
                        <img src="./img/lang.svg" alt="lang-img">
                    </a>
                </div>
            </div>
            <!--mobile-settings-end-->
        </header>
<!--header-end-->

<!--content-begin-->
        <div class="content">
        <!--sect-top-begin-->
            <section class="sect-top">
                <div class="save-visit">
                    <a download href="/download/<?php echo visit_card ?>">
                        <img src="./img/jpg.svg" alt="pdf"><span class="hide-small-size"><?php echo save_business ?></span>
                        <span class="show-small-size">SAVE</span>
                        <img src="./img/replay.png" align="replay-img" class="arrow-save">
                    </a>
                </div>
                <div class="logo">
                    <a href="index.php"><img src="./img/logo.png" alt="logo"></a>
                        <h1><?php echo name_user ?></h1>
                    <p><?php echo user_profession ?></p>
                    <div class="border"></div>
                    <div class="phone">
                        <a href="tel:38 (050) 841 57 07">
                            <img src="./img/phone-cell.svg" alt="phone">
                            <span>+38 (050) 841 57 07</span>
                        </a>
                    </div>
                    <div class="envelope">
                        <a href="mailto:grinchenko.vladimir@gmail.com">
                            <img src="./img/mail.svg" alt="mail">
                            <span>grinchenko.vladimir@gmail.com</span>
                        </a>
                    </div>
                    <div class="arrow"><a href="#sect-1" class="scroll"><img src="./img/arrow.svg" alt="arrow"></a></div>
                </div>
            </section>
        <!--sect-top-end-->

        <!--sect-1-begin-->
            <section class="sect-1">
                <div class="head-tex">
                    <div class="shape-right">
                        <img src="./img/user-white-and-bg.png" alt="user-img">
                    </div>
                    <div class="img-container" id="sect-1">
                        <img class="user-image" src="./img/img-user.jpg" alt="user">
                    </div>
                    <h2><?php echo name_user ?></h2>
                    <p><?php echo user_profession ?></p>
                    <a href="http://erau.unba.org.ua/profile/53066" class="epay-link"><?php echo ЕРАУ ?></a>
                </div>
                <div class="lawyers_dossier">
                    <p class="description-dossier"><?php echo lawyers_dossier_description_1 ?>
                    <p class="description-dossier"><?php echo lawyers_dossier_description_2 ?>
                    <p class="description-dossier"><?php echo lawyers_dossier_description_3 ?>
                    <p class="description-dossier"><?php echo lawyers_dossier_description_4 ?>
                </div>
            </section>
        <!--sect-1-end-->

        <!--sect-2-begin-->
            <section class="sect-2" id="sect-2">
                <h2><?php echo Cases ?></h2>
                <div class="case-block">
                    <img src="./img/case-white.png" alt="case">
                </div>
                <div class="container-block">
                    <div class="item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo one_modal_title ?></h3>
                        <p class="description"><?php echo one_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo two_modal_title ?></h3>
                        <p class="description"><?php echo two_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo three_modal_title ?></h3>
                        <p class="description"><?php echo three_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo four_modal_title ?></h3>
                        <p class="description"><?php echo four_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>


                    <!--hide-item-container-begin-->
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo five_modal_title ?></h3>
                        <p class="description"><?php echo five_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo five_modal_title ?></h3>
                        <p class="description"><?php echo five_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo seven_modal_title ?></h3>
                        <p class="description"><?php echo seven_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo eight_modal_title ?></h3>
                        <p class="description"><?php echo eight_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo nine_modal_title ?></h3>
                        <p class="description"><?php echo nine_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>
                    <div class="item hide-item" data-toggle="modal" data-target="#modal-1">
                        <h3 class="title"><?php echo ten_modal_title ?></h3>
                        <p class="description"><?php echo ten_modal_description ?></p>
                        <button class="show-more">- <?php echo  more_details ?> -</button>
                    </div>

                    <!--hide-item-container-begin-->
                </div>
                <div class="more-item">
                    <button class="show-more-button">
                        <span><?php echo show_more ?></span>
                        <img src="./img/preload.svg" class="preload" alt="preload">
                    </button>
                </div>
            </section>
        <!--sect-2-end-->

        <!--sect-3-start-->
            <section class="sect-3" id="sect-3">
                <ul class="clients-wrap">
                    <li class="client-logo">
                        <img src="./img/clients/lechat.png" class="client-img" alt="lechat logo">
                    </li>
                    <li class="client-logo">
                        <img src="./img/clients/iport.png" class="client-img" alt="iport logo">
                    </li>
                    <li class="client-logo">
                        <img src="./img/clients/Laserhouse.png" class="client-img" alt="laserhouse logo">
                    </li>
                    <li class="client-logo">
                        <img src="./img/clients/kievzelenbud.png" class="client-img" alt="kievzelenbud logo">
                    </li>
                </ul>
            </section>
        <!--sect-3-end-->

        <!--footer-begin-->
            <footer id="foot">
                <h2><?php echo contact_me ?></h2>
                <div class="form-container">
                    <div class="left-block">
                        <div class="left">
                            <p><img src="./img/contact-ico.svg" alt="contact-ico"><a href="tel:+38 (050) 841 57 07">+38 (050) 841 57 07</a></p>
                            <p><img src="./img/male.svg" alt="male"><a href="mailto:grinchenko.vladimir@gmail.com">grinchenko.vladimir@gmail.com</a></p>
                            <p><img src="./img/local.svg" alt="contact-ico"><?php echo place ?></p>
                        </div>
                        <div class="border"></div>
                    </div>
                    <div class="right-block">
                        <form id="form">
                            <div class="input-field">
                                <label for="your-name"><?php echo your_name_company ?></label>
                                <input id="your-name" type="text" name="name" class="form-control" required>
                            </div>
                            <div class="input-field">
                                <label for="your-email"><?php echo your_email ?></label>
                                <input id="your-email" type="email" name="email" class="form-control" required>
                            </div>
                            <div class="input-field">
                                <label for="my-message"><?php echo your_message ?></label>
                                <textarea id="my-message" class="form-control" name="message" maxlength="400" required></textarea>
                                <div class="count-container">
                                    <span id="count"></span>&nbsp;/400
                                </div>
                            </div>
                            <div class="submit-container">
                                <button type="submit" value="Відправити"><?php echo send_message ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </footer>
        <!--footer-end-->
        </div>
<!--content-begin-->
    </div>
    <!--copyright-begin-->
    <div class="copyright">
        <a href="#head" class="scroll">
            <img src="./img/up-icon.png" alt="up">
            <span><?php echo go_top ?></span>
        </a>
    </div>
    <!--copyright-end-->
</div>
<!-- Modals -->
<div class="modal fade" id="modal-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <svg class="cancel-icon"
                         xmlns="http://www.w3.org/2000/svg"
                         version="1.1" viewBox="0 0 21.9 21.9"
                         enable-background="new 0 0 21.9 21.9"
                         width="30px" height="30px">
                        <path class="cancel-icon-fill" d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#FFFFFF"/>
                    </svg>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <p class="modal-description"></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-language" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="change-lang">
                    <span><?php echo change_lang ?></span>
                    <a href="switch_lang.php?lang=ua">UA</a>
                    <a href="switch_lang.php?lang=ru">RU</a>
                    <a href="switch_lang.php?lang=en">EN</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script defer src="./js/all.js"></script>
</body>
</html>
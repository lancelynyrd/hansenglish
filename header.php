<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hans English 在线一对一英语 </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="好外教英语口语培训网，是为英语学习者提供真人外教在线1对1英语口语培训的专业品牌.聘用全球顶尖的欧美外教,使用独立自主研发的课程教材,网络在线授课,您可以24小时随时随地预约上课,提
            升英语口语水平." >
    <meta name="keywords" content="好外教,欧美外教,在线外教课,英语口语,在线英语培训,外教一对一,商务英语培训,1对1外教课" />
    <?php wp_head();?>

    <script type="text/javascript">
        var home_url = "<?php echo home_url()?>";
        var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
        for (var word in mobileKeyWords){
            if (navigator.userAgent.match(mobileKeyWords[word]) != null){
                location.href = "m_index.html";
                break;
            }

        }
    </script>
</head>


<style>
    #sub_01 > div {
        float: right;
    }
    #sub_01 > div > img,
    #sub_01 > div > a {
        float: left;
        display: block;
    }


</style>


<body <?php body_class(); ?>>
<header>
    <div id="wrap">
        <div id="content">
            <div id="con_01"><a href="<?php echo home_url(); ?>"><img src="<?php echo td() ?>/img/liberty.jpg" width="100%"></a></div>
            <div id="con_02">
                <div id="sub_01" align="right">
                    <div>
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_02.jpg" >
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_03.jpg" >
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_04.jpg" >
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_05.jpg" >
                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo home_url() ?>/user-update" ><img src="<?php echo td() ?>/img/header-menu/hansheader_10.jpg" style="cursor: pointer"></a>
                        <?php else: ?>
                        <a href="<?php echo home_url() ?>/user-log-in" ><img src="<?php echo td() ?>/img/header-menu/hansheader_06.jpg" style="cursor: pointer"></a>
                        <?php endif; ?>
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_07.jpg" >
                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo wp_logout_url( home_url() ); ?>"><img src="<?php echo td() ?>/img/header-menu/hansheader_11.jpg" style="cursor: pointer"></a>
                        <?php else: ?>
                        <a href="<?php echo home_url() ?>/user-register" ><img src="<?php echo td() ?>/img/header-menu/hansheader_08.jpg" style="cursor: pointer"></a>
                        <?php endif; ?>
                        <img src="<?php echo td() ?>/img/header-menu/hansheader_09.jpg" >
                    </div>
                    <img src="<?php echo td() ?>/img/header-menu/hansheader_10.gif" >
                </div>
                <div id="sub_02" align="right">
                    <span><a href="<?php echo home_url() ?>"><!--
                            <?php if ( is_front_page() ) : ?>
                            --><img src="<?php echo td() ?>/img/button_home_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_home.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_home.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_home_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="how-study"><!--
                            <?php if ( seg(0) == 'how-study' ) : ?>
                            --><img src="<?php echo td() ?>/img/button_how_study_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_how_study.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_how_study.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_how_study_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="class-detail-1"><!--
                            <?php if ( strpos( seg(0), 'class-detail') !== false ) : ?>
                            --><img src="<?php echo td() ?>/img/button_intro_study_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_intro_study.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_intro_study.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_intro_study_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="reservation"><!--
                            <?php if ( seg(0) == 'reservation' ) : ?>
                            --><img src="<?php echo td() ?>/img/button_reservation_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_reservation.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_reservation.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_reservation_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="use-skype"><!--
                            <?php if ( seg(0) == 'use-skype' ) : ?>
                            --><img src="<?php echo td() ?>/img/button_skype_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_skype.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_skype.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_skype_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="free-class"><!--
                            <?php if ( seg(0) == 'free-class' ) : ?>
                            --><img src="<?php echo td() ?>/img/button_free_class_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_free_class.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_free_class.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_free_class_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                    <span>
                        <a href="fee"><!--
                            <?php if ( seg(0) == 'fee' ) : ?>
                            --><img src="<?php echo td() ?>/img/button_fee_2.jpg" border="0"><!--
                            <?php else : ?>
                            --><img src="<?php echo td() ?>/img/button_fee.jpg" border="0" onmouseout="this.src='<?php echo td() ?>/img/button_fee.jpg'" onmouseover="this.src='<?php echo td() ?>/img/button_fee_1.jpg'" style="cursor:pointer;"><!--
                            <?php endif; ?>
                            --></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="main">


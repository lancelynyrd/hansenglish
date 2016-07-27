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
        var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
        for (var word in mobileKeyWords){
            if (navigator.userAgent.match(mobileKeyWords[word]) != null){
                location.href = "m_index.html";
                break;
            }

        }
    </script>

    <style>
        html,body{width: 100%;height: 100%;margin: 0;padding: 0;}
        table{width: 100%;height: ";border: 0;border-collapse:collapse;}
        table td{vertical-align: middle;text-align: center;}
        td.pink{background-color:#EA1D6D}
        td.gray{background-color:#1F497B}

        wrap, content {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <style>
        #test:after {
            content: '';
            display: block;
            clear: both;
        }
    </style>

    <style>
        #con_01 {
            width: 25%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_02 {
            width: 75%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_03 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_04 {
            width: 20%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_05 {
            width: 80%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_06 {
            width: 100%;
            height: 80px; <!--공간 띄우기 -->
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_07 {
            width: 100%;
            height: 80px; <!--공간 띄우기 -->
            background-color: #989794;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_08 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #con_09 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #sub_01 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
        }
        #sub_02 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
            border-left:0px
        }
        #sub_03 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
            border-left:0px
        }
        #sub_04 {
            width: 100%;
            margin: 0;
            padding: 0;
            float: left;
            border-left:0px
        }
        #sub_02 li {width:120px; display:inline-block;*display:inline; *zoom:1; border:0px #99FF00 solid}

        #content:after {
            content: '';
            display: block;
            clear: both;
        }
    </style>
</head>


<body <?php body_class(); ?>>
<header>
    <div id="wrap">
        <div id="content">
            <div id="con_01"><img src="<?php echo td() ?>/img/liberty.jpg" width="100%"></div>
            <div id="con_02">
                <div id="sub_01" align="right">
                    <img src="<?php echo td() ?>/img/head_right_up.jpg" width="100%">
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


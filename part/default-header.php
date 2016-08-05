

<script type="text/javascript">
    var home_url = "<?php echo home_url()?>";
    var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
    for (var word in mobileKeyWords){
        if (navigator.userAgent.match(mobileKeyWords[word]) != null){
            location.href = "m-index";
            break;
        }

    }
</script>
<div id="content">
    <div id="con_02">
        <div id="sub_01">
            <div>
                <img src="<?php echo td() ?>/img/header-menu/hansheader_02.jpg" >
                <a><img src="<?php echo td() ?>/img/header-menu/hansheader_03.jpg" ></a>
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
                <a href="<?php vc_url()?>" target="_blank"><img src="<?php echo td() ?>/img/header-menu/hansheader_12.jpg" style="cursor: pointer"></a>
                <img src="<?php echo td() ?>/img/header-menu/hansheader_13.jpg" >
            </div>
        </div>
        <div id="sub_02">
            <div>
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
            <div>
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
            </div>

        </div>
        <div id="con_01">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo td() ?>/img/liberty.jpg">
            </a>
        </div>
    </div>
</div>
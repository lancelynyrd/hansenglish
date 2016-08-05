
<script type="text/javascript">
    var home_url = "<?php echo home_url()?>/m-ch-index";
</script>

<div class="header-inner">
    <div id='con_01'>
        <div class="mlogo_button"><a href="<?php echo home_url().'/m-ch-index'; ?>"></a></div>
        <img class="mlogo" src="<?php echo td() ?>/m_img/mobile_logo_1.jpg" width="100%">
    </div>
    <nav>
        <ul>
            <li>
                <a class="icon" >
                    <span class="dashicons dashicons-menu menu-icon"></span>
                </a>
            </li>
            <li class="<?php if ( segment(0) == 'Login' ) echo 'active'; ?>">
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo home_url() ?>/m-ch-user-update" ><img src="<?php echo td() ?>/img/header-menu/hansheader_10.jpg" style="cursor: pointer"></a>
                <?php else: ?>
                    <a href="<?php echo home_url() ?>/m-ch-user-log-in" ><img src="<?php echo td() ?>/img/header-menu/hansheader_06.jpg" style="cursor: pointer"></a>
                <?php endif; ?>
            </li>
            <li class="<?php if ( segment(0) == 'menu-all' ) echo 'active'; ?>">
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo wp_logout_url( home_url()."/m-ch-index" ); ?>"><img src="<?php echo td() ?>/img/header-menu/hansheader_11.jpg" style="cursor: pointer"></a>
                <?php else: ?>
                    <a href="<?php echo home_url() ?>/m-ch-user-register" ><img src="<?php echo td() ?>/img/header-menu/hansheader_08.jpg" style="cursor: pointer"></a>
                <?php endif; ?>
            </li>
            <li style="float: right">
                <a href="<?php vc_url()?>" target="_blank"><img src="<?php echo td() ?>/img/header-menu/hansheader_12.jpg" style="cursor: pointer"></a>
            </li>
        </ul>
    </nav>
    <div id='con_02'>
        <ul>
            <li>
                <a href="m-ch-index"><img src="<?php echo td() ?>/m_img/m_bt_home<?php echo seg(0) == "m-ch-index" ? '_1' : null; ?>.jpg" border="0"></a>
            </li>
            <li>
                <a href="m-ch-how-study"><img src="<?php echo td() ?>/m_img/m_bt_intro_study<?php echo seg(0) == "m-ch-how-study" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li>
                <a href="m-ch-class-detail-1"><img src="<?php echo td() ?>/m_img/m_bt_how_study<?php echo seg(0) == "m-ch-class-detail-1" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li>
                <a href="m-ch-use-skype"><img src="<?php echo td() ?>/m_img/m_bt_skype<?php echo seg(0) == "m-ch-use-skype" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li>
                <a href="m-ch-free-class"><img src="<?php echo td() ?>/m_img/m_bt_free_class<?php echo seg(0) == "m-ch-free-class" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li>
                <a href="m-ch-fee"><img src="<?php echo td() ?>/m_img/m_bt_fee<?php echo seg(0) == "m-ch-fee" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li>
                <a href="m-ch-reservation"><img src="<?php echo td() ?>/m_img/m_reservation<?php echo seg(0) == "m-ch-reservation" ? '_1' : null; ?>.jpg"  border="0"></a>
            </li>
            <li class="close-btn">
                <a><img src="<?php echo td() ?>/m_img/m_close.jpg"  border="0"></a>
            </li>
        </ul>
    </div>
</div>

<script>

    jQuery(document).ready(function ($) {

        var el= {};
        el.menu = function () {
            return jQuery('#con_02');
        };
        $('nav .menu-icon').click(function() {

            if ( el.menu().css('display') != 'none' ) el.menu().slideUp();
            else el.menu().slideDown();
        });

        $('#con_02 .close-btn a').click(function() {
            el.menu().slideUp();
        });
    });

</script>
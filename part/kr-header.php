<script type="text/javascript">
    var home_url = "<?php echo home_url('kr-home') ?>";
    var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
    for (var word in mobileKeyWords){
        if (navigator.userAgent.match(mobileKeyWords[word]) != null){
            location.href = "m-index";
            break;
        }

    }
</script>


<style>
    
    div#sub_02 span {
        float: right;
    }
    div#sub_02 span:hover a {    /* this is the code that changes the color if the mouse is inside the button */
        background-color: #b8ecfc;
    }
    div#sub_02 span a {    /* this is the code that changes the color if the mouse is inside the button */
        padding: 7px 30px;
        font-family:  Segoe UI, Simhei, Microsoft YaHei, 微软细黑, 宋体, sans-serif;
        font-size: 15px;
        line-height: 1.4;
        color: green;
    }

    a:link {color:black; text-decoration:none;}
    a:visited {color:black; text-decoration:none;}

</style>
<div id="content">
    <div id="con_02">
        <div id="sub_01">
            <div>
                <img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_02.jpg" >
                <a><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_03.jpg" ></a>
                <!--img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_04.jpg" >
                <img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_05.jpg" -->
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo home_url() ?>/kr-user-update" ><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_10.jpg" style="cursor: pointer"></a>
                <?php else: ?>
                    <a href="<?php echo home_url() ?>/kr-user-log-in" ><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_06.jpg" style="cursor: pointer"></a>
                <?php endif; ?>
                <img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_07.jpg" >
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo wp_logout_url( home_url('kr-home') ); ?>"><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_11.jpg" style="cursor: pointer"></a>
                <?php else: ?>
                    <a href="<?php echo home_url() ?>/kr-user-register" ><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_08.jpg" style="cursor: pointer"></a>
                <?php endif; ?>
                <? /*<a href="<?php vc_url()?>" target="_blank"><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_12.jpg" style="cursor: pointer"></a> */ ?>
                <a href="<?php echo saeha_url()?>" target="_blank"><img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_12.jpg" style="cursor: pointer"></a>
                <img src="<?php echo td() ?>/img/korea/img/header-menu/hansheader_13.jpg" >
            </div>
        </div>
        <div id="sub_02">
            <div>
                <span font class="font_01"><a href="kr-reservation"><font color="#0b5065">수업 달력</font></a></span>
                <span font class="font_01"><a href="kr-fee"><font color="#0b5065">수강료</font></a></span>
                <span font class="font_01"><a href="kr-ve"><font color="#0b5065">VE 강의실</font></a></span>
                <span font class="font_01"><a href="kr-class-detail-1"><font color="#0b5065">커리큘럼</font></a></span>
                <span font class="font_01"><a href="kr-how-study"><font color="#0b5065">신청 순서</font></a></span>
                <span font class="font_01"><a href="kr-home"><font color="#0b5065">Home</font></a></span>
            </div>

        </div>
        <div id="con_01">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo td() ?>/img/liberty.jpg">
            </a>
        </div>
    </div>
</div>
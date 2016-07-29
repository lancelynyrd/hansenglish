
<script type='text/javascript'>
    var bannerImg = new Array();
    bannerImg[0]='<?php echo td() ?>/m_img/m_home_banner_5.jpg';
    bannerImg[1]='<?php echo td() ?>/m_img/m_home_banner_1.jpg';
    bannerImg[2]='<?php echo td() ?>/m_img/m_home_banner_2.jpg';
    bannerImg[3]='<?php echo td() ?>/m_img/m_home_banner_3.jpg';
    var newBanner = 0;
    var totalBan = bannerImg.length;
    function cycleBan()
    {
        newBanner++;
        if (newBanner == totalBan)
        {
            newBanner = 0;
        }
        document.banner.src=bannerImg[newBanner];
        setTimeout('cycleBan()', 2*1500); //1*1000은 1초 (시간지정)
    }

    window.onload=cycleBan;
</script>


</head>


<body bgcolor="white">

<style>
    #test:after {
        content: '';
        display: block;
        clear: both;
    }
</style>

<style>
    #con_01 {
        width: 100%;
        margin: 0;
        padding: 0;
        float: left;
    }
    #con_02 {
        width: 100%;
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
        width: 100%;
        margin: 0;
        padding: 0;
        float: left;
    }
    #con_05 {
        width:100%;
        margin: 0;
        padding: 0;
        float: left;
    }

    #content:after {
        content: '';
        display: block;
        clear: both;
    }
</style>


<div id='content'>

    <div id='con_01'>
        <img src="<?php echo td() ?>/m_img/mobile_logo_1.jpg" width="100%">
    </div>

    <div id='con_02'>
        <a href="m_ch_index.html"><img src="<?php echo td() ?>/m_img/m_bt_home_1.jpg" border="0"></a><a href="m_how_study.html"><img src="<?php echo td() ?>/m_img/m_bt_intro_study.jpg"  border="0"></a><a href="m_class_detail_1.html"><img src="<?php echo td() ?>/m_img/m_bt_how_study.jpg"  border="0"></a><a href="m_use_skype.html"><img src="<?php echo td() ?>/m_img/m_bt_skype.jpg"  border="0"></a><a href="m_free_class.html"><img src="<?php echo td() ?>/m_img/m_bt_free_class.jpg"  border="0"></a><a href="m_fee.html"><img src="<?php echo td() ?>/m_img/m_bt_fee.jpg"  border="0"></a>
    </div>

    <div id='con_03'>
        <img src="<?php echo td() ?>/m_img/m_home_banner_5.jpg" name='banner' width="100%">
    </div>

    <div id='con_04'>
        <br><br>
        <img src="<?php echo td() ?>/m_img/m_home_banner_6.jpg" width="100%">
        <br><br><br>
        <a href="m_what_is_en.html"><img src="<?php echo td() ?>/m_img/what_is_video_en.jpg"   border="0" width="100%"></a>
        <br><br>
    </div>

    <div id='con_05'>
        <img src="<?php echo td() ?>/m_img/m_home_banner_7.jpg" width="100%">
    </div>

</div>
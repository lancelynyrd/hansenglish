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

<div id='content'>
    <div id='con_03'>
        <img src="<?php echo td() ?>/m_img/m_home_banner_5.jpg" name='banner' width="100%">
    </div>

    <div id='con_04'>
        <br><br>
        <img src="<?php echo td() ?>/m_img/m_home_banner_6.jpg" width="100%">
        <br><br><br>
        <a href="m-ch-what-is-en"><img src="<?php echo td() ?>/m_img/what_is_video_en.jpg"   border="0" width="100%"></a>
        <br><br>
    </div>

    <div id='con_05'>
        <img src="<?php echo td() ?>/m_img/m_home_banner_7.jpg" width="100%">
    </div>

</div>
<script type='text/javascript'>
    var bannerImg = new Array();
    bannerImg[0]='<?php tde() ?>/m_img/m_home_banner_1.jpg';
    bannerImg[1]='<?php tde() ?>/m_img/m_home_banner_2.jpg';
    bannerImg[2]='<?php tde() ?>/m_img/m_home_banner_3.jpg';
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
    <div id='con_02'>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="5%"><!--spce--></td>
                <td width="15%"><a href="m-ch-home"><img src="<?php tde() ?>/m_img/m_bt_home_1.jpg" border="0"></a></td>
                <td width="15%"><a href="m-ch-how-study"><img src="<?php tde() ?>/m_img/m_bt_intro_study.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-class-detail-1"><img src="<?php tde() ?>/m_img/m_bt_how_study.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-ve"><img src="<?php tde() ?>/m_img/m_bt_ve.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-fee"><img src="<?php tde() ?>/m_img/m_bt_fee.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-reservation"><img src="<?php tde() ?>/m_img/m_bt_myclass.jpg"  border="0"></a></td>
                <td width="5%"><!--spce--></td>
            </tr>
        </table>
    </div>

    <div id='con_03'>
        <img src="<?php tde() ?>/m_img/m_home_banner_1.jpg" name='banner' width="100%">
    </div>

    <div id='con_04'>
        <br><br>
        <img src="<?php tde() ?>/m_img/home_middle_banner.jpg" width="100%">
        <br><br><br>
        <a href="m-ch-what-is-en"><img src="<?php tde() ?>/m_img/what_is_video_en.jpg"   border="0" width="100%"></a>
        <br><br>
    </div>
</div>
<div id='con_o5' align="center" valign="bottom">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #9e9f9f">
        <tr>
            <td align="center">
                <br><br><br><br><br>
                <font face="黑体" size="7px" color="white">韩国 10多年的培训经验<br>快享受快乐英语！</font>
                <br><br>
                <font face="黑体" size="6px" color="white">2007年在韩国开始英语培训，已经几万多学生通过我们培训过程</font>
                <br><br><br><br><br>
            </td>
        </tr>
    </table>
</div>
<div id='con_06'>
    <table width="100%" height="20%" border="0" cellpadding="0" cellspacing="0" style="background-color: #d6d9d9">
        <tr>
            <td align="center" colspan="9"><br><br><br><font face="黑体" size="6px" color="gray">< HANS 英语 受益学生 ></font><br><br><br></td>
        </tr>
        <tr>
            <td width="3%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/1.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/2.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/3.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/4.jpg" width="70%" align="center"></td>
            <td width="3%">	<!--space --></td>
        <tr>
        <tr>
            <td width="3%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><font face="中易黑体" size="5px" color="gray">浙江<br><br>Jenifer<br><br>老师每次鼓励和夸赞<br>另我对学习很有信心<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white">
                <br><font face="中易黑体" size="5px" color="gray">浙江<br><br>Arthur<br><br>老师态度像朋友一样<br>学习起来很轻松<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white">
                <br><font face="Aerial" size="5px" color="gray">韩国<br><br>Merry<br><br>늦게 시작한 영어<br>보람있어요~<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white">
                <br><font face="Aerial" size="5px" color="gray">韩国<br><br>Jihyon<br><br>매일 외국 선생님과<br>수업~ 재밌어요<br></font><br></td>
            <td width="3%">	<!--space --></td>
        </tr>
        <tr>
            <td height="20px" align="center" colspan="9"><!--middle space --></td>
        </tr>
        <tr>
            <td width="3%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/5.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/6.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/7.jpg" width="70%" align="center"></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><img src="<?php tde() ?>/img/student/8.jpg" width="70%" align="center"></td>
            <td width="3%">	<!--space --></td>
        </tr>
        <tr>
            <td width="3%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><font face="Aerial" size="5px" color="gray">安徽<br><br>Tianyi<br><br>零开始现熟练的交谈<br>老师耐心教越有自信<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><font face="Aerial" size="5px" color="gray">江苏<br><br>Mavis<br><br>教学效率很高现在<br>跟外国人沟通没问题<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><font face="Aerial" size="5px" color="gray">上海<br><br>Charlotte<br><br>几年学使我口语更扎实<br>感谢我的外教老师<br></font><br></td>
            <td width="1%">	<!--space --></td>
            <td align="center" style="background-color: white"><br><font face="Aerial" size="5px" color="gray">河南<br><br>Bella<br><br>刚开始有点难度<br>现在进步很大<br></font><br></td>
            <td width="3%">	<!--space --></td>
        </tr>
        <tr>
            <td colspan="17">
                <br><br><br><br>
                <!--space -->
            </td>
        </tr>
    </table>
</div>

<div id='con_05'>
    <img src="<?php tde() ?>/m_img/teachers.jpg" width="100%">
</div>
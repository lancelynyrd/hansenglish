
    <script type="text/javascript">
        var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
        for (var word in mobileKeyWords){
            if (navigator.userAgent.match(mobileKeyWords[word]) != null){
                location.href = "m-index";
                break;
            }

        }
    </script>
    <script type='text/javascript'>
        // 이미지 목록을 담아놓을 배열객체 선언
        var bannerImg = new Array();
        // 이미지 객체를 등록
        bannerImg[0]='<?php tde() ?>/img/korea/img/head_banner_1.jpg';
        bannerImg[1]='<?php tde() ?>/img/korea/img/head_banner_2_k.jpg';

        // 출력된 이미지 정보를 담을 변수 초기값으로 0 번 배열을 가리킴
        var newBanner = 0;
        // 전체 이미지 객수를 변수에 초기화
        var totalBan = bannerImg.length;

        // 이미지 반복 함수
        function cycleBan()
        {
            // 출력되는 이미지의 배열값을 1 증가시킴
            newBanner++;
            // 배열의 값보다 높은 값이되면 초기 값으로 바꿈
            if (newBanner == totalBan)
            {
                newBanner = 0;
            }
            // 이미지 객체에 newBanner 에 지정된 이미지 배열값을 가져다 출력
            document.banner.src=bannerImg[newBanner];
            // 3초 주기로 cycleBan 함수를 호출하여 이미지가 반복 되도록 함
            setTimeout('cycleBan()', 3*1000); //1*1000은 1초 (시간지정)
        }

        // 윈도우가 로딩된후 cycleBan 함수를 호출
        window.onload=cycleBan;
    </script>



<style>
    #con_01 {
        width: 25%;
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
        height: 80px; <!--space -->
        margin: 0;
        padding: 0;
        float: left;
    }
    #con_05 {
        width: 100%;
        height: 150px;
        background-color: gray;
        margin: 0;
        padding: 0;
        float: left;
    }
    #con_06 {
        width: 100%;
        margin: 0;
        padding: 0;
        float: left;
    }
    #con_07 {
        width: 100%;
        height: 180px; <!--space -->
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
        width: 75%;
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
    }
    #content:after
    {
        content: '';
        display: block;
        clear: both;
    }
    .menu div{
        float: right;
        padding: 5px 30px;

    }
    .menu div:hover {    /* this is the code that changes the color if the mouse is inside the button */
        background-color: #b8ecfc;
    }
</style>
<style type="text/css">

    .font_01 {
        font-family: 나눔글꼴, 맑은고딕, 한양중고딕, sans-serif;
        font-size: 16px;
        line-height: 1.4;
        color: green;
    }

    a:link {color:black; text-decoration:none;}
    a:visited {color:black; text-decoration:none;}
</style>

<div id='con_03'>
    <img src="<?php tde() ?>/img/korea/img/head_banner_1.jpg" name='banner' width="100%">
</div>

<div id='con_04'>
    <!--space -->
</div>

<div id='con_06'>
    <img src="<?php tde() ?>/img/korea/img/home_middle_banner_k.jpg" align="right" border="0" width="100%" border="0">
</div>

<div id='con_07'>
    <!--space -->
</div>

<div id='con_o5' align="center" valign="bottom">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #9e9f9f">
    <tr>
        <td align="center">
            <br><br><br><br><br>
            <font face="맑은고딕" size="6px" color="white">
                중국으로 진출한 한스영어, 지금 시작해 보세요！
            </font>
            <br><br>
            <font face="맑은고딕" size="4px" color="white">
                10여년의 경험으로 국제 무대로 진출한 한스 영어, 앞으로도 더욱 노력하겠습니다。
            </font>
            <br><br><br><br><br>
        </td>
    </tr>
    </table>
</div>
<div id='con_06'>
    <table width="100%" height="20%" border="0" cellpadding="0" cellspacing="0" style="background-color: #d6d9d9">
        <tr>
            <td align="center" colspan="17">
                <br><br><br>
                <font face="黑体" size="6px" color="gray">
                    < HANS 영어 수강 후기 >
                </font>
                <br><br><br>
            </td>
        </tr>

        <tr>
            <td width="3%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/1.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/2.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/3.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/4.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/5.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/6.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/7.jpg" width="70%" align="center">
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <img src="<?php tde() ?>/img/korea/student/8.jpg" width="70%" align="center">
            </td>

            <td width="3%">
                <!--space -->
            </td>
        </tr>

        <tr>
            <td width="3%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="中易黑体" size="2px" color="gray">
                    浙江<br><br>
                    <bold>Jenifer</bold><br><br><br>
                    老师每次鼓励和夸赞<br><br>
                    另我对学习很有信心<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="中易黑体" size="2px" color="gray">
                    浙江<br><br>
                    Arthur<br><br><br>
                    老师态度像朋友一样<br><br>
                    学习起来很轻松<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    韩国<br><br>
                    Merry<br><br><br>
                    늦게 시작한 영어<br><br>
                    보람있어요~<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    韩国<br><br>
                    Jihyon<br><br><br>
                    매일 외국 선생님과<br><br>
                    수업~ 재밌어요<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    安徽<br><br>
                    Tianyi<br><br><br>
                    零开始现熟练的交谈<br><br>
                    老师耐心教越有自信<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    江苏<br><br>
                    Mavis<br><br><br>
                    教学效率很高现在<br><br>
                    跟外国人沟通没问题<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    上海<br><br>
                    Charlotte<br><br><br>
                    几年学使我口语更扎实<br><br>
                    感谢我的外教老师<br>
                </font>
                <br>
            </td>

            <td width="1%">
                <!--space -->
            </td>

            <td align="center" style="background-color: white">
                <br>
                <font face="Aerial" size="2px" color="gray">
                    河南<br><br>
                    Bella<br><br><br>
                    刚开始有点难度<br><br>
                    现在进步很大<br>
                </font>
                <br>
            </td>

            <td width="3%">
                <!--space -->
            </td>
        </tr>

        <tr>
            <td colspan="17">
                <br><br><br><br>
                <!--space -->
            </td>
        </tr>
    </table>
</div>

<div id='con_08'>
    <img src="<?php tde() ?>/img/korea/img/home_3.jpg" width="100%" align="right">
</div>


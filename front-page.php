<?php
get_header();
?>


    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <html>
    <script type='text/javascript'>
        // 이미지 목록을 담아놓을 배열객체 선언
        var bannerImg = new Array();
        // 이미지 객체를 등록
        bannerImg[0]='<?php tde() ?>/img/home_banner_5.jpg';
        bannerImg[1]='<?php tde() ?>/img/home_banner_1.jpg';
        bannerImg[2]='<?php tde() ?>/img/home_banner_2.jpg';
        bannerImg[3]='<?php tde() ?>/img/home_banner_3.jpg';
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
            // 2초 주기로 cycleBan 함수를 호출하여 이미지가 반복 되도록 함
            setTimeout('cycleBan()', 2*1000); //1*1000은 1초 (시간지정)
        }

        // 윈도우가 로딩된후 cycleBan 함수를 호출
        window.onload=cycleBan;
    </script>

    <div id='wrap'>
        <div id='content'>

            <div id='con_03'>
                <img src="<?php tde() ?>/img/home_banner_5.jpg" name='banner' width="100%">
            </div>

            <div id='con_06'>
                <!-- 공간 띄우기 -->
            </div>

            <div id='con_04'>
                <div id='sub_03'>
                    <img src="<?php tde() ?>/img/bg_white.jpg" border="0" width="55%">
                </div>
                <div id='sub_04'>
                    <img src="<?php tde() ?>/img/bg_white.jpg" border="0" width="55%">
                </div>

            </div>
            <div id='con_05'>
                <img src="<?php tde() ?>/img/home_middle_banner_1.jpg" align="right" border="0" width="100%" border="0">
            </div>

            <div id='con_07'>
                <!--공간 띄우기 -->
            </div>
            <div id='con_08' style="align: center; valign: middle;">
                <img src="<?php tde() ?>/img/home_2.jpg" width="100%" align="right">
            </div>
            <div id='con_09'>
                <img src="<?php tde() ?>/img/home_3.jpg" width="100%" align="right">
            </div>
        </div>
    </div>
<?php
get_footer();
?>
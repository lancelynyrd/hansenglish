<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags always come first -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"-->



    <?php
    if(strpos( seg(0), 'kr-') !== false || strpos( seg(0), 'kr-m-') !== false ) {
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hans 영어</title>
        <meta name="description" content="화상 영어，일대일 영어 개인 강의, 중국으로 진출, 한국의 영어 교육방법으로 이제 대륙의 학생도 함께 합니다." >
        <meta name="keywords" content="화상 영어, 영어 회화, 일대일 영어 강의" />
        <?php
    }
    else
    {
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Hans English 在线一对一英语 </title>
        <meta name="description" content="好外教英语口语培训网，是为英语学习者提供真人外教在线1对1英语口语培训的专业品牌.聘用全球顶尖的欧美外教,使用独立自主研发的课程教材,网络在线授课,您可以24小时随时随地预约上课,提
            升英语口语水平." >
        <meta name="keywords" content="好外教,欧美外教,在线外教课,英语口语,在线英语培训,外教一对一,商务英语培训,1对1外教课" />
        <?php
    }
    ?>




    <?php wp_head();?>
</head>

<body <?php body_class(); ?> >
<?php if ( user()->login() ){
    if ( user()->admin() ){
        include "part/admin-menu.php";
    }
}

?>


<section id="main">
    <header>
        <div id="wrap">
            <?php
            if(seg(0) == "m-index" || seg(0) == "ha-home" || seg(0) == "ha-m-home") {

            }
            elseif (( strpos( seg(0), 'm-ch-') !== false )){
                include "part/m-ch-header.php";
            }
            elseif (( strpos( seg(0), 'kr-m-') !== false )){
                include "part/kr-m-header.php";
            }
            elseif ( (strpos( seg(0), 'kr-home') !== false ) || (strpos( seg(0), 'kr-') !== false )) {
                include "part/kr-header.php";
                include 'part/kr-aside.php';
            }
            else{
                include "part/default-header.php";
                include 'part/aside.php';
            }
            ?>
        </div>
    </header>


<style>
    html,body{width: 100%;height: 100%;margin: 0;padding: 0; line-height: normal}
    #content td {
        border: 0;
    }
</style>

<div id='content'>
    <div id='con_01' align="center">
        <table  width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="70%"><img src="<?php tde() ?>/m_img/m_logo_left.jpg" width="100%"></td>
                <td width="30%" background="<?php tde() ?>/m_img/m_logo_right.jpg">
                    <table width="100%" border="0" cellpadding="0" cellspacing="10px">
                        <tr>
                            <td valign="top" align="center" height="30%" style="background-color: #64d7fa" cellspacing="2px"><br><font size="6" color="black" face="굴림체">로그인</font><br><br></td>
                            <td valign="top" align="center" height="30%" style="background-color: #64d7fa" cellspacing="2px"><br><font size="6" color="black" face="黑体">회원가입</font><br><br></td>
                        </tr>
                    </table>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td valign="bottom" align="center" height="70%"><br><br><br><font size="6" color="#1f9cd9" face="黑体"><!--space--></font></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div id='con_02'>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="15%"><a href="kr-m-home"><img src="<?php tde() ?>/img/korea/m_img/km_bt_home.jpg" width="100%" border="0"></a></td>
                <td width="15%"><a href="kr-m-how-study"><img src="<?php tde() ?>/img/korea/m_img/km_bt_howstudy.jpg" width="100%" border="0"></a></td>
                <td width="15%"><a href="kr-m-class-detail-1"><img src="<?php tde() ?>/img/korea/m_img/km_bt_book.jpg" width="100%" border="0"></a></td>
                <td width="15%"><a href="kr-m-ve"><img src="<?php tde() ?>/img/korea/m_img/km_bt_ve.jpg" width="100%" border="0"></a></td>
                <td width="15%"><a href="kr-m-fee"><img src="<?php tde() ?>/img/korea/m_img/km_bt_fee.jpg" width="100%" border="0"></a></td>
                <td width="15%"><a href="kr-m-reservation"><img src="<?php tde() ?>/img/korea/m_img/km_bt_myclass_1.jpg" width="100%"  border="0"></a></td>
            </tr>
        </table>
    </div>
</div>


<section class="data">
    <?php
    wp_enqueue_style('reservation', td() . '/css/reservation.css');
    wp_enqueue_script('reservation', td() . '/js/reservation.js');

    $m = in('m', date('m'));
    $Y = in('Y', date('Y'));

    if ( isset( $_REQUEST['m'] ) &&  isset( $_REQUEST['Y'] ) ) {
        $MnY = 'm='.$_REQUEST['m'].'&Y='.$_REQUEST['Y'];
    }

    $re = class_list_by_month($Y, $m);
    $data = $books = $first_class = $next_class = null;
    $no_of_absence = $no_of_past = $no_of_reservation = 0;
    if ( $re['code'] ) { // error from server
    }
    else {
        $books = $re['data']['books'];
        $no_of_past = $re['data']['no_of_past'];
        $no_of_reservation = $re['data']['no_of_reservation'];
        $next_class = $re['data']['next_class'];
        $first_class = $re['data']['first_class'];
        $no_of_absence = 0;
        $data = $books ? prepare_books_by_date( $books, $no_of_absence ) : [];


        //getting the unique list of teachers
        $tmp = array();
        $unique = array();
        $myTeacher = '';
        if ( !empty( $books ) ) {
            foreach ($books as $item) {
                if (!in_array($item['idx_teacher'], $tmp)) {
                    $icon = str_replace('./data/', 'http://onlineenglish.kr/data/', $item['icon']);
                    $teacherName = $item['teacher']['mb_nick'];
                    $myTeacher .="<span class='teacher_icon' data-toggle='tooltip' data-placement='bottom' title='$teacherName'> $icon </span>";
                    $unique[] = $item;
                    $tmp[] = $item['idx_teacher'];
                }
            }
        }
    }
    //di($books);
    //di($unique);
    include 'part/reservation-content1.php';
    ?>



    <section class="reservation content-two">
        <div>
            <div class="row">
                <div class="col-sm-6 left">
                    <h2 class="title"><?php _text("Class Reservation")?></h2>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php if ( empty( $books ) ) : ?>
                            <?php _text("You have no reservations"); ?>
                        <?php else : ?>
                            <div><?php _text("No. of Reservations of this month:"); ?><?php echo  count($books); ?></div>
                            <div><?php _text("No. of Absence of this month:"); ?> : <?php echo  $no_of_absence ?></div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 right">
                    <h2 class="title"><?php _text("My Teachers"); ?></h2>
                    <div class="my-teacher">
                        <?php echo isset($myTeacher) ? $myTeacher : ''; ?>
                    </div>
                </div>
            </div>
            <?php if ( is_user_logged_in() ) : ?>
                <?php include 'part/reservation-header.php' ?>
            <?php else : ?>
                <img class="reminder" src="<?php img_e() ?>reservation-content2-image1.png">
                <div class="reminder-text"><?php _text('Please Login to View Reservation')?></div>
            <?php endif; ?>
            <div class="desc">
                <?php
                if ( isset($_REQUEST[ 'view' ] ) && $_REQUEST[ 'view' ] = 'list' ) echo draw_calendar_listview( $m, $Y, $data );
                else echo draw_calendar( $m, $Y, $data );
                ?>
            </div>
            <?php if ( is_user_logged_in() ) : ?>
                <nav>
                    <span class="dashicons dashicons-grid-view btm-btn"></span>
                    <div class="calendar-view btm-btn"><a href="<?php hd()?>reservation<?php if( isset( $MnY ) ) echo '?'.$MnY; ?>"><?php _text('CALENDAR VIEW')?></a></div>
                    <div class="divider btm-btn"> | </div>
                    <span class="dashicons dashicons-list-view btm-btn"></span>
                    <div class="list-view btm-btn"><a href="?view=list<?php if( isset( $MnY ) ) echo '&'.$MnY; ?>"><?php _text('LIST VIEW')?></a></div>
                </nav>
            <?php endif; ?>
        </div>
    </section>


</section>
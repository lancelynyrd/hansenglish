<style>

    html,body{width: 100%;height: 100%;margin: 0;padding: 0; line-height: normal}
    table{width: 100%; border: 0;border-collapse:collapse;}
    table td{vertical-align: middle;text-align: center;}
    td.pink{background-color:#EA1D6D}
    td.gray{background-color:#1F497B}
    .video_clip {
        width: 82%;
        height: 200px;
    }

    @media all and (min-width: 380px) {
        .video_clip {
            height: 275px;
        }
    }
    @media all and (min-width: 600px) {
        .video_clip {
            height: 300px;
        }
    }
    @media all and (min-width: 800px) {
        .video_clip {
            height: 450px;
        }
    }
    @media all and (min-width: 1024px) {
        .video_clip {
            width: 960px;
            height: 550px;
        }
    }
</style>

<div id='content'>
    <div id='con_02'>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="5%"><!--spce--></td>
                <td width="15%"><a href="m-ch-home"><img src="<?php tde() ?>/m_img/m_bt_home.jpg" border="0"></a></td>
                <td width="15%"><a href="m-ch-how-study"><img src="<?php tde() ?>/m_img/m_bt_intro_study.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-class-detail-1"><img src="<?php tde() ?>/m_img/m_bt_how_study.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-ve"><img src="<?php tde() ?>/m_img/m_bt_ve.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-fee"><img src="<?php tde() ?>/m_img/m_bt_fee.jpg"  border="0"></a></td>
                <td width="15%"><a href="m-ch-reservation"><img src="<?php tde() ?>/m_img/m_bt_myclass.jpg"  border="0"></a></td>
                <td width="5%"><!--spce--></td>
            </tr>
        </table>
    </div>
</div>

<div id='content'>
    <div id='con_03' style="text-align: center;">
        <br><br>
        <video controls autoplay class="video_clip">
            <source src="<?php echo td() ?>/img/mv/woo.mp4" type="video/mp4">
        </video>
        <br><br>
    </div>
</div>
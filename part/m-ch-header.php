<script type="text/javascript">
    var home_url = "<?php echo home_url('m-ch-home') ?>";
</script>
<style>
    html,body{width: 100%;height: 100%;margin: 0;padding: 0; line-height: normal}
    .mobile_btn {
        display: block;
    }
</style>

<div id='con_01' align="center">
    <table  width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="70%">
                <img src="<?php tde() ?>/m_img/m_logo_left.jpg" width="100%">
            </td>
            <td width="30%" background="<?php tde() ?>/m_img/m_logo_right.jpg">
                <table width="100%" border="0" cellpadding="0" cellspacing="10px">
                    <tr>
                        <td valign="top" align="center" height="30%" style="background-color: #64d7fa" cellspacing="2px">
                            <?php if (is_user_logged_in()) : ?>
                                <a href="<?php echo wp_logout_url( home_url('m-ch-home') ); ?>" class="mobile_btn">
                                    <br>
                                    <font size="6" color="black" face="黑体">退出</font>
                                    <br><br>
                                </a>
                            <?php else: ?>
                            <a href="m-ch-user-log-in" class="mobile_btn">
                                <br>
                                <font size="6" color="black" face="黑体">登入</font>
                                <br><br>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td valign="top" align="center" height="30%" style="background-color: #64d7fa" cellspacing="2px">
                            <?php if (is_user_logged_in()) : ?>
                                <a href="m-ch-user-update" class="mobile_btn">
                                    <br>
                                    <font size="6" color="black" face="黑体">资料更新</font>
                                    <br><br>
                                </a>
                            <?php else: ?>
                            <a href="m-ch-user-register" class="mobile_btn">
                                <br>
                                <font size="6" color="black" face="黑体">注册</font>
                                <br><br>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td valign="top" align="center" height="30%" style="background-color: #64d7fa" cellspacing="2px">
                            <a href="<?php echo saeha_url()?>" target="_blank">
                                <font size="6" color="black" face="黑体">进入VE</font>
                            </a>
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="bottom" align="center" height="70%">
                            <br><br>
                            <font size="6" color="#1f9cd9" face="黑体">0574 8666 9911</font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
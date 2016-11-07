<script type="text/javascript">
    var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
    for (var word in mobileKeyWords){
        if (navigator.userAgent.match(mobileKeyWords[word]) != null){
            location.href = "m-index";
            break;
        }

    }
</script>

<style>
    html,body{width: 100%;height: 100%;margin: 0;padding: 0;}
    wrap, content {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>



<table width="35%" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="5">
            <img src="<?php tde() ?>/img/gate_top.jpg" width="100%">
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <br><br><br><!--space-->
        </td>
    </tr>
    <tr>
        <td width="5%">
            <!--space-->
        </td>
        <td width="30%" align="center">
            <a href="home"><img src="<?php tde() ?>/img/gate_btn_e.jpg"  width="60%" border="0" onmouseout="this.src='<?php tde() ?>/img/gate_btn_e.jpg'" onmouseover="this.src='<?php tde() ?>/img/gate_btn_e_1.jpg'" style="cursor:pointer;" /></a>
        </td>
        <td width="30%" align="center">
            <a href="kr-home"><img src="<?php tde() ?>/img/gate_btn_k.jpg"  width="60%" border="0" onmouseout="this.src='<?php tde() ?>/img/gate_btn_k.jpg'" onmouseover="this.src='<?php tde() ?>/img/gate_btn_k_1.jpg'" style="cursor:pointer;" /></a>
        </td>
        <td width="5%">
            <!--space-->
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <br><br><br><!--space-->
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <img src="<?php tde() ?>/img/gate_bottom.jpg" width="100%">
        </td>
    </tr>

</table>
<br><br><br>



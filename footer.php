</section><!--/#main-->

<footer>
    <?php
    if(seg(0) == "m-index" || seg(0) == "ha-home" || seg(0) == "ha-m-home") {

    }
    elseif (( strpos( seg(0), 'm-ch-') !== false ) || ( strpos( seg(0), 'm-home') !== false ) || ( strpos( seg(0), 'kr-m-') !== false )){
        //include "part/m-ch-header.php";
    }
    elseif ( (strpos( seg(0), 'kr-home') !== false ) || (strpos( seg(0), 'kr-') !== false )) {
        include "part/kr-footer.php";
    }
    else{
        include "part/default-footer.php";
    }
    ?>
</footer>




<?php wp_footer(); ?>


</body>
</html>
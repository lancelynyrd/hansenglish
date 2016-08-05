<style>
    .admin-menu {
        position: absolute;
        z-index: 99999;
        left: 0;
    }
    .admin-menu ul {
        margin: 0;
        padding: 0;
    }
    .admin-menu ul li {
        list-style: none;
        float: left;
        padding: 0 10px;
    }
</style>

<div class="admin-menu">
    <ul>
        <li class="<?php if ( segment(0) == 'user-log-in' ) echo 'active'; ?>">
            <a href="<?php hd()?>wp-admin">
                <span><?php _e('ADMIN', 'x5')?></span>
            </a></li>
        <li><span class="site-edit">EDIT MODE</span></li>
    </ul>
</div>


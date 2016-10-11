<?php


/**
 * Load library
 */


/**
 *
 */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', td() . '/style.css' );
    wp_enqueue_style( 'base', td() . '/css/base.css' );
    wp_enqueue_style( 'layout', td() . '/css/layout.css' );
    wp_enqueue_style( 'module', td() . '/css/module.css' );
    wp_enqueue_style( 'module.aside', td() . '/css/module.aside.css' );
    if (strpos( seg(0), 'm-ch-') !== false ) {
        wp_enqueue_style( 'm-ch-header', td() . '/css/m-ch-header.css' );
    }elseif (strpos( seg(0), 'm-home') !== false || strpos( seg(0), 'kr-m-') !== false ) {
        
    }
    else{
        wp_enqueue_style( 'module.header', td() . '/css/module.header.css' );
    }
    wp_enqueue_style( 'module.translate', td() . '/css/module.translate.css' );
    wp_enqueue_script( 'wp-util' );

    /** Pages that use bootstrap */
    if ( is_front_page() || seg(0) == 'reservation' || seg(0) == 'enrollment' || seg(0) == 'user-log-in' || seg(0) == 'user-register' || seg(0) == 'm-ch-user-log-in' || seg(0) == 'm-ch-user-register' || seg(0) == 'm-ch-reservation' || seg(0) == 'testing' || seg(0) == 'kr-m-reservation' || seg(0) == 'kr-reservation' || seg(0) == 'kr-user-log-in' ) {
        wp_enqueue_style( 'bootstrap', td() . '/css/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_script( 'tether', td() . '/css/bootstrap/js/tether.min.js' );
        wp_enqueue_script( 'bootstrap', td() . '/css/bootstrap/js/bootstrap.min.js', array(), false, true );
    }
    wp_deregister_style('font-awesome');
    wp_enqueue_style( 'font-awesome', td() . '/css/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'theme', td() . '/css/theme.css' );

    wp_enqueue_script( 'cookie',            td() . '/js/js.cookie.min.js', array('jquery') );
    wp_enqueue_script( 'translate',        td() . '/js/translate.js', array('jquery') );
    wp_enqueue_script( 'theme', td() . '/js/theme.js', array('jquery', 'underscore') );
});

add_action('after_setup_theme', function () {
    show_admin_bar(false);
});


abc()->registerRoute(
    [
        'home', 'kr-home', 'ha-home', 'm-home', 'kr-m-home',
        'how-study','ve','fee','reservation','use-skype','free-class',
        'class-detail-1','class-detail-2','class-detail-3','class-detail-4','class-detail-5','class-detail-6',

        'kr-how-study','kr-ve','kr-fee', 'kr-reservation', 'kr-user-register','kr-user-log-in','kr-user-update',
        'kr-class-detail-1','kr-class-detail-2','kr-class-detail-3','kr-class-detail-4','kr-class-detail-5','kr-class-detail-6',

        'm-index',

        'm-ch-index','m-ch-how-study','m-ch-use-skype','m-ch-free-class','m-ch-fee','m-ch-what-is-en','m-ch-hongbao', 'm-ch-ve',
        'm-ch-class-detail-1','m-ch-class-detail-2','m-ch-class-detail-3','m-ch-class-detail-4','m-ch-class-detail-5','m-ch-class-detail-6',
        'm-ch-user-log-in','m-ch-user-register','m-ch-user-update','m-ch-reservation',
        'testing','m-ch-user-password-lost',

        'kr-m-how-study', 'kr-m-ve','kr-m-fee','kr-m-reservation',
        'kr-m-class-detail-1','kr-m-class-detail-2','kr-m-class-detail-3','kr-m-class-detail-4','kr-m-class-detail-5','kr-m-class-detail-6',

        'ha-m-home'
    ]
);


if ( user()->admin() ) {
    if ( isset($_REQUEST['code'] ) && isset($_REQUEST['original_text']) ) {
        $_REQUEST['original_text'] = stripslashes($_REQUEST['original_text']);
        $_REQUEST['content'] = stripslashes($_REQUEST['content']);
        if ( empty( $_REQUEST['original_text'] ) ) $_REQUEST['original_text'] = '&nbsp;';
        $option_name = $_REQUEST['code'];

        delete_option( $option_name );
        add_option( $option_name, ['original_text' => $_REQUEST['original_text'], 'content' => $_REQUEST['content']] );

        wp_send_json_success($_REQUEST);
    }
}



function get_text_translation_option_name_prefix() {
    $domain = get_opt('lms[domain]', 'default');
    return 'translation-' . $domain . '-';
}

function get_text_translation_option_name($md5) {
    return get_text_translation_option_name_prefix() . $md5;
}


function _getText($str, $convert=false) {
    $md5 = md5($str);
    $option_name = get_text_translation_option_name( $md5 );
    $data = get_option( $option_name );
    $org = esc_html($str);
    if ( empty($data) ) $str = $org;
    else {
        $content = null;
        if ( isset($data['content']) ) $content = trim($data['content']);
        if ( empty($content) ) $str = $org;
        else $str = $data['content'];
    }

    if ( $convert ) {
        $str = convert_text_var( 'company name', 'company_name', $str );
        $str = convert_text_var( 'company address', 'company_address', $str );
        $str = convert_text_var( 'phone number', 'phone_number', $str );
        $str = convert_text_var( 'manager name', 'manager_name', $str );
        $str = convert_text_var( 'email', 'email', $str );
        $str = convert_text_var( 'skype', 'skype', $str );
        $str = convert_text_var( 'kakaotalk', 'kakaotalk', $str );
        $str = convert_text_var( 'bank', 'bank', $str );
    }


    return $str;
}
function convert_text_var($text_var, $option_name, $str) {
    if ( stripos( $str, "($text_var)") !== false ) {
        $v = get_opt("lms[$option_name]");
        $str = str_ireplace("($text_var)", $v, $str);
    }
    return $str;
}

/**
 * Admin can only edit the text. so it lets the admin to use css and javascript.
 * @param $str
 * @return void
 */
function _text($str) {
    $md5 = md5($str);
    $option_name = get_text_translation_option_name( $md5 );
    $org = esc_html($str);

    if ( !isset($_COOKIE['site-edit']) || $_COOKIE['site-edit'] != 'Y' || ! user()->admin() ) {
        $str = _getText($str, true);
        echo $str;
    }
    else {
        $str = _getText($str);
        echo "
<div class='translate-text' md5='$md5' original-text='$org' code='$option_name'><span class='dashicons dashicons-welcome-write-blog'></span>
<div class='html-content'>$str</div>
</div>
";
    }

}

/**
 * @param string $username
 * @param string $roomname
 */
function vc_url( $roomname = 'VC TEST Room' ) {
    if ( is_user_logged_in() ) {
        $domain = get_opt('lms[domain]', 'default');
        $user = wp_get_current_user();
        $username = $user->user_login;
        $roomname = "$username@$domain";
    }
    else {
        if ( empty($username) ) $username = 'User' . date('is');
    }

    $roomname = urlencode($roomname);
    $url = "https://www.videocenter.co.kr/0.0.14/index.php?joinRoom=Y&username=$username&roomname=$roomname&show_header=Y";
    echo $url;
}

add_action('admin_menu', function () {
    add_menu_page(
        __('Hans Theme Settings', 'x5'),
        __('Hans Theme', 'x5'),
        'manage_options',
        'hans_theme_settings', // slug id. 메뉴가 클릭되면 /wp-admin/philgo-usage 와 같이 slug 로 URL 경로가 나타남.
        'hans_admin_menu',
        'dashicons-text',
        '23.45'
    );
} );


function hans_admin_menu() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include get_stylesheet_directory() . '/settings.php';
}

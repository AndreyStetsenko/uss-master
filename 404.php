<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uss
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="page_404">
				<div class="page_404--header">
					<img src="https://uss.malina.tech/wp-content/uploads/2020/08/big-logo.svg">
				</div>
				<div class="page_404--content">
					<span class="page_404--title">Страница 404</span>
					<span class="page_404--description">Кажется вы попали на несуществующую страницу</span>
					<a class="btn btn-gold active page_404--btn" href="/">Вернуться на главную</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();

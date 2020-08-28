<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uss
 */

?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-item-widget col-12 col-md-3">
					<div class="footer-widget">
						<div class="footer-title">
							<span class="footer-title--text">Контакты</span>
						</div>
						<ul class="footer-list">
							<li><a href="tel:+380445007788"><i class="icon fas fa-phone-alt"></i>+380 (44) 500 77 88</a></li>
							<li><a href="mailto:uss@uss.ua"><i class="icon fas fa-envelope"></i>uss@uss.ua</a></li>
							<li><a href="/contacts/"><i class="icon fas fa-map-marker-alt"></i>USS Security, ул. Н. Гринченко 4а, 03680, Киев, Украина</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-5">

				</div>
				<!-- <div class="footer-item-widget col-12 col-md-5">
					<div class="footer-widget">
						<div class="footer-title">
							<span class="footer-title--text">Меню</span>
						</div> -->
						<?php
					   // wp_nav_menu([
							//  'menu'            => 'footer',
					   //   'theme_location'  => 'footer',
					   //   'container'       => '',
					   //   'container_id'    => '',
					   //   'container_class' => '',
					   //   'menu_id'         => false,
					   //   'menu_class'      => 'footer-list',
					   //   'depth'           => 1,
					   // ]);
					   ?>
					<!-- </div>
				</div> -->
				<div class="footer-item-widget col-12 col-md-4">
					<div class="footer-widget">
						<div class="footer-social">
							<div class="footer-social-we">
								<span class="footer-social-we--title">Мы в соц сетях</span>
								<div class="footer-social-we--icons">
									<a target="_blank" href="#"><i class="icon fab fa-twitter"></i></a>
									<a target="_blank" href="#"><i class="icon fab fa-facebook"></i></a>
									<a target="_blank" href="#"><i class="icon fab fa-google-plus"></i></a>
									<a target="_blank" href="#"><i class="icon fab fa-youtube"></i></a>
								</div>
							</div>
							<div class="footer-social-btn">
								<a class="btn btn-gold active" type="a" name="a" data-toggle="modal" data-target="#modalConsultation">Заказать консультацию</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="footer-copyright">
<<<<<<< HEAD
						<span>USS Security Copyright <?php echo the_date(' Y '); ?></span>
=======
						<span>USS Security Copyright 2020</span>
>>>>>>> 4f71358913d6cd97d9d9b9e1672b8ff55b2ece2f
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal modalPricePack fade" id="modalConsultation" tabindex="-1" role="dialog" aria-labelledby="modalConsultationLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalConsultationLabel">Оставьте Ваши контактные данные, и наши специалисты свяжутся с Вами в ближайшее время</h5>
					<a type="a" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="icon fas fa-times"></i>
					</a>
				</div>
				<div class="modal-body">

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">

								<?php echo do_shortcode('[contact-form-7 id="6118" title="Контакты"]'); ?>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="modal modalPricePack fade" id="modalPricePack" tabindex="-1" role="dialog" aria-labelledby="modalPricePackLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalPricePackLabel">Оставьте Ваши контактные данные, и наши специалисты свяжутся с Вами в ближайшее время</h5>
					<a type="a" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="icon fas fa-times"></i>
					</a>
				</div>
				<div class="modal-body">

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="modal-img img-full-cont">
									<img src="/wp-content/uploads/2020/08/modal-img.png" alt="uss">
								</div>
							</div>
							<div class="col-md-6">

								<?php echo do_shortcode('[contact-form-7 id="6119" title="Услуги"]'); ?>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="modal modalContactsMap fade" id="modalContactsMap" tabindex="-1" role="dialog" aria-labelledby="modalContactsMapLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<a type="a" class="close" data-dismiss="modal" aria-label="Close">
					Закрыть<i aria-hidden="true" class="icon fas fa-times"></i>
				</a>
				<div class="modal-body">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.989170787814!2d30.506947215943246!3d50.422673397246655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf20300213af%3A0xd4c9c786b8f0518a!2zVVNTIFNlY3VyaXR5INCh0LvRg9C20LHQsCDQntGF0L7RgNC-0L3QuA!5e0!3m2!1sru!2sru!4v1595908287604!5m2!1sru!2sru" class="map" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				</div>
			</div>
		</div>
	</div>

	<div class="navbar-collapse-overlay"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

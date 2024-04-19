<?php
@include "assets/php/templates/layout/head.php";
@include "assets/php/templates/layout/navbar.php";
?>

<header class="hero">
	<img class="bg-img" src="/ACAD_MMI/assets/media/hero-bg.jpg" alt="Image de fond de la section hero">
	
	<div class="left">
		<hgroup>
			<h1 class="title">Alter<span style="font-family: var(--replace-font">&</span>Comm</h1>
			<p class="tagline">De l’ombre à la lumière, votre projet révélé !</p>
			<p class="emphasis">Agence de communication</p>
		</hgroup>
		<a href="#about" class="btn-primary">Découvrir notre agence <span>&rarr;</span></a>
	</div>
	<div class="empty"></div>
</header>

<main class="container">
	<section id="about">
		<h2>C<span style="font-family: var(--replace-font">'</span>est quoi <span class="text-primary">Alter<span style="font-family: var(--replace-font">&</span>Comm ?</h2>
		<p>Notre agence de communication Alter&Comm. est spécialisée dans la publicité. Notre équipe est composé d’un large panel de compétences qui mêlent développement web, stratégie de communication, graphisme, production audiovisuelle, etc. Chacun de nos travaux sont le fruits de la collaboration de toutes ces compétences, assurant ainsi un rendu à la hauteur des attentes de nos clients. Nous sommes aptes à travailler en laissant notre créativité s’exprimer, ou sous restrictions. En outre, la jeunesse fleurissante de notre équipe permet de pouvoir adapter chacun de nos projets dans le dynamisme de l’actualité. Cette agence a été créée en 2021, à l’occasion d’une collaboration entre des étudiants de l’IUT Nancy Charlemagne et l’IUT de Saint Die. Grâce à cette collaboration, nous proposons à nos clients de bénéficier de la philosophie de notre agence : De l’ombre à la lumière, votre projet révélé.</p>
	</section>
	<hr>
	<section class="projects">
		<h2>Nos derniers <span class="text-primary">projets</span></h2>
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<img src="https://placehold.co/600x400" alt="Placeholder">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
				</div>
				<div class="swiper-slide">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
					<img src="https://placehold.co/600x400" alt="Placeholder">
				</div>
				<div class="swiper-slide">
					<img src="https://placehold.co/600x400" alt="Placeholder">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
				</div>
				<div class="swiper-slide">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
					<img src="https://placehold.co/600x400" alt="Placeholder">
				</div>
				<div class="swiper-slide">
					<img src="https://placehold.co/600x400" alt="Placeholder">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
				</div>
				<div class="swiper-slide">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad culpa doloribus labore, non pariatur quas quod. Atque commodi debitis dignissimos non! Architecto error est non recusandae suscipit tempore?</p>
					<img src="https://placehold.co/600x400" alt="Placeholder">
				</div>
				...
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<script>
			const swiper = new Swiper('.swiper', {
				slidesPerView: 1,
				loop: true,
				spaceBetween: 20,
				pagination: {
					el: '.swiper-pagination',
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				breakpoints: {
					1600: {
						slidesPerView: 4,
					},
					1100: {
						slidesPerView: 3,
					},
					800: {
						slidesPerView: 2
					}
				}
			});
		</script>
	</section>

	<hr>
	
	<section class="team">
		<div class="left">
			<img src="https://placehold.co/600x400" alt="Placeholder">
		</div>
		<div class="right">
			<h2>A propos de <span class="text-primary">nous</span></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem illo iste quas velit? Labore maxime natus rerum! Dolore expedita illo incidunt perspiciatis similique soluta tempore. Asperiores nam pariatur vitae?</p>
		</div>
	</section>
	
	<section class="social">
		<h2><span class="text-primary">On se like</span> sur les réseaux ?</h2>
		<ul class="social-media">
			<li><a href="#" class="social-link"><img src="/ACAD_MMI/assets/media/icons/tiktok.svg" alt="Logo du réseau social Tiktok"></a></li>
			<li><a href="#" class="social-link"><img src="/ACAD_MMI/assets/media/icons/insta.svg" alt="Logo du réseau social Tiktok"></a></li>
			<li><a href="#" class="social-link"><img src="/ACAD_MMI/assets/media/icons/linkedin.svg" alt="Logo du réseau social Tiktok"></a></li>
		</ul>
	</section>
</main>

<?php
@include "assets/php/templates/layout/footer.php";
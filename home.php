<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bane
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-banner-top">
				<div class="container">
					<div class="darken main-title">
						<h2>Welcome to</h2>
						<h1>Gaharu Website</h1>
						<h3>The media and source of information for all gaharu community</h3>
					</div>
				</div>
			</div>

			<div class="banner-2 brown">
				<div class="container text-center">
					<div class="row">
						<div class="item col-md-4">
							<span class="icon-container">
								<i class="fa fa-industry"></i>
							</span>
							<h3>Learn</h3>
							<p>What is Gaharu and why it is so valuable? Find out all about gaharu, its values, current status, and legal trading laws.</p>
						</div>
						<div class="item col-md-4 mid">
							<span class="icon-container">
								<i class="fa fa-pagelines"></i>
							</span>
							<h3>Grow</h3>
							<p>Are you a gaharu grower? Join fellow growers in this site and get included in the Indonesian CITES Management Authority database.</p>
						</div>
						<div class="item col-md-4">
							<span class="icon-container">
								<i class="fa fa-users"></i>
							</span>
							<h3>Interact</h3>
							<p>Interact with growers, traders, and consumers of Gaharu and its derivative products.</p>
						</div>

					</div>
				</div>
			</div>

			<div class="interlude" style="padding: 30px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h2 class="stupefied green-border">What is Gaharu</h2>
							<p>
								Gaharu is one of non-timber forest products which is produced as a physiological response
								to the infection of certain microorganisms to woody plants, currently from <i>Aquilaria, Gyrinops</i> and some other plant genera.
								Three main uses of gaharu are for parfumes, medicinal, and cultural related events, such as insences.
								A number of local names have been given by various authors for gaharu, such as agarwood, eaglewood, or aloewood.
								The gaharu could be found in several forms and qualities. It could be traded in the solid or liquid form, various further
								processed, end used products and derivatives. The highest-valued product from gaharu is agarwood oil with the value from
								hundreds to thousands American dollars.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="banner-3 mint graybg">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="">
								<img class="img img-responsive" src="<?php bloginfo('template_directory'); ?>/img/agarwood.jpg"/>
							</div>
						</div>

						<div class="col-md-6">
							<h2 class="stupefied">What is this site for</h2>
							<ul class="explain">
								<li>
									<span class="icon-container">
										<i class="fa fa-info-circle"></i>
									</span>
									<div class="media-body">
										<p class="title">General Information</p>
										<p>This site contains general information about gaharu from cultivation,
											inoculation, process, and trading gaharu and derivative products.</p>
									</div>
								</li>
								<li>
									<span class="icon-container">
										<i class="fa fa-gavel"></i>
									</span>
									<div class="media-body">
										<p class="title">Promote Plantation and Legal Trade</p>
										<p>Unlike other commodities, the harvest and trade of gaharu is watched and tracked by the government
										and CITES authorities. However, currently there are many illegal harvest and trade of gaharu and gaharu-based products.</p>
									</div>
								</li>
								<li>
									<span class="icon-container">
										<i class="fa fa-lightbulb-o"></i>
									</span>
									<div class="media-body">
										<p class="title">Reduce information gap</p>
										<p>Currently, local and small growers mostly receive only very limited information on how and where the the product could be traded,
										as the market is dominated by certain traders and exporters.</p>
									</div>
								</li>
								<li>
									<span class="icon-container">
										<i class="fa fa-check"></i>
									</span>
									<div class="media-body">
										<p class="title">Giving Growers Access to the Market</p>
										<p>Current trade is done primarily through Indonesian CITES registered traders and exporters
											or through Indonesian gaharu association (Indonesian Association of Agarwood Exporters-ASGARIN).
											</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

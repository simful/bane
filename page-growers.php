<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bane
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="entry-header">
				<div class="shadow">
					<div class="container">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
				</div>
			</header><!-- .entry-header -->

			<div class="container" ng-app="growers" ng-controller="growerslist">
				<h3>List of Growers</h3>
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Type</th>
							<th>Area</th>
							<th>Province</th>
							<th>Country</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="grower in growers">
							<td>{{ grower.name }}</td>
							<td>{{ grower.type }}</td>
							<td>{{ grower.area }}</td>
							<td>{{ grower.province }}</td>
							<td>{{ grower.country }}</td>
						</tr>
					</tbody>
				</table>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/angular/angular.min.js"></script>
<script>
	angular.module('growers', []).controller('growerslist', function($scope, $http) {
		$scope.growers = [
			{
				name: 'John Corporation',
				type: 'Corporate',
				area: 'Jakarta',
				province: 'Jakarta',
				country: 'Indonesia'
			}
		];
	});
</script>

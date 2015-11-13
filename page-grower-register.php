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

			<div class="container" ng-app="growers" ng-controller="registerform">
				<div class="form" style="margin-top: 40px;">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<label class="control-label">Grower Name</label>
								<input type="text" class="form-control input-lg" ng-model="grower.name"/>
							</div>

							<div class="form-group">
								<label class="control-label">Type</label>
								<select ng-model="grower.type" class="form-control input-lg">
									<option ng-repeat="opt in growerOptions" value="{{opt}}">{{opt}}</option>
								</select>
							</div>

							<div class="form-group">
								<label class="control-label">Area</label>
								<input type="text" class="form-control input-lg" ng-model="grower.area"/>
							</div>

							<div class="form-group">
								<label class="control-label">State/Province</label>
								<input type="text" class="form-control input-lg" ng-model="grower.province"/>
							</div>

							<div class="form-group">
								<label class="control-label">Country</label>
								<select class="form-control input-lg" ng-model="grower.country">
									<option ng-repeat="country in countries" value="{{country.name.common}}">{{country.name.common}}</option>
								</select>
							</div>

							<div class="form-group">
								<label class="control-label">CITES Management Authority Registration Number</label>
								<input type="text" class="form-control input-lg" ng-model="grower.registration_number"/>
								<p class="small help-text">This number will not be visible to public. If you do not have registration number, please register to your local BKSDA office.</p>
							</div>

							<button class="btn btn-success btn-lg">Register</button>
						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/bower_components/angular/angular.min.js"></script>
<script>
	angular.module('growers', []).controller('registerform', function($scope, $http) {
		$http.get('/countries.json').success(function(data) {
			$scope.countries = data;
		});
		$scope.growerOptions = ['Individual', 'Group', 'Corporate'];
		$scope.grower = {
			type: 'Individual',
			country: 'Indonesia'
		};
	});
</script>

<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Shamba Map';
?>
<!-- Banner
================================================== -->
<div class="main-search-container centered" data-background-image="<?= Yii::$app->request->baseUrl;?>/images/main-search-background-01.jpg">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>
						Find Nearby 
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
						<span class="typed-words"></span>
					</h2>
					<h4>Expolore top-rated apartments, plots and more</h4>

					<div class="main-search-input">
						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="Enter the area,city,county,address or neighorhood">
							</div>
							<a href="<?= Url::to(['map/map'])?>"><i class="fa fa-map-marker"></i></a>
						</div>
						<button class="button" onclick="window.location.href='map/map'">Search</button>
					</div>
				</div>
			</div>
			
			<!-- Features Categories -->
			<div class="row">
				<div class="col-md-12">
					<h5 class="highlighted-categories-headline">Or browse featured categories:</h5>
					  
					<div class="highlighted-categories">
						<!-- Box -->
						<a href="#" class="highlighted-category">
					    	<i class="im im-icon-Home"></i>
					    	<h4>Apartments</h4>
						</a>	

						<!-- Box -->
						<a href="#" class="highlighted-category">
					    	<i class="im im-icon-Geo"></i>
					    	<h4>Plot</h4>
						</a>	

						<!-- Box -->
						<a href="#" class="highlighted-category">
					    	<i class="im im-icon-House fill"></i>
					    	<h4>Real Estate Companies</h4>
						</a>								
					</div>
					
				</div>
			</div>
			<!-- Featured Categories - End -->

		</div>

	</div>
</div>

<!-- Content
================================================== -->
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Have any questions about buying and selling properties in Kenya?</strong>
					
				</h3>
			</div>
			<div class="col-md-12">
				
				<div class="simple-slick-carousel dots-nav">
				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="listing-item-container">
						<div class="listing-item">
							<img src="<?= Yii::$app->request->baseUrl;?>/images/listing-item-04.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<span class="tag">Eat & Drink</span>
								<h3>Burger House <i class="verified-icon"></i></h3>
								<span>2726 Shinn Street, New York</span>
							</div>
							
							<span class="like-icon"></span>
						</div>
						<div class="star-rating centered" >
							<div class="rating-counter"><a href="#" class="button border margin-top-10">Learn More</a></div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="listing-item-container">
						<div class="listing-item">
							<img src="<?= Yii::$app->request->baseUrl;?>/images/listing-item-05.jpg" alt="">
							<div class="listing-item-content">
								<span class="tag">Other</span>
								<h3>Airport</h3>
								<span>1512 Duncan Avenue, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter">(46 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="#" class="listing-item-container">
						<div class="listing-item">
							<img src="<?= Yii::$app->request->baseUrl;?>/images/listing-item-06.jpg" alt="">

							<div class="listing-badge now-closed">Now Closed</div>

							<div class="listing-item-content">
								<span class="tag">Eat & Drink</span>
								<h3>Think Coffee</h3>
								<span>215 Terry Lane, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="4.5">
							<div class="rating-counter">(15 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->
				</div>
				
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->






<!-- Recent Blog Posts -->
<section class="fullwidth margin-top-0 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-55">
					<strong class="headline-with-separator">From The Blog</strong>
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="<?= Yii::$app->request->baseUrl;?>/images/blog-compact-post-01.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>22 August 2019</li>
							</ul>
							<h3>Hotels for All Budgets</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="<?= Yii::$app->request->baseUrl;?>/images/blog-compact-post-02.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>18 August 2019</li>
							</ul>
							<h3>The 50 Greatest Street Arts In London</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="pages-blog-post.html" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="<?= Yii::$app->request->baseUrl;?>/images/blog-compact-post-03.jpg" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>10 August 2019</li>
							</ul>
							<h3>The Best Cofee Shops In Sydney Neighborhoods</h3>
							<p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<div class="col-md-12 centered-content">
				<a href="#" class="button border margin-top-10">View Blog</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

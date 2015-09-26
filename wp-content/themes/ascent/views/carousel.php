<div id="home-slider" ng-if="opt.carousel.enable == 1 && opt.is_front_page == 1">
	<div class="main-owl-carousel">
		<div class="item" ng-repeat="item in opt.carousel.items">
		<div class="{{opt.carousel.overlay}}"></div>
		<img src="{{item.image}}" class="gallery-post-single" alt="Slide 1"/>
		<div class="content-wrapper clearfix">
		    <div class="container">
			<div class="slide-content text-center clearfix" ng-bind-html="item.description | sanitize"></div>
		    </div>
		</div>
		</div>
	</div>
</div>

<div id="banner" ng-if="opt.carousel.enable != 1 && opt.is_front_page != 1">
<span ng-if="opt.default_banner_image.length > 0">
	<img src="{{opt.default_banner_image}}" alt="-Banner">
</span>
<span ng-if="opt.default_banner_image.length <= 0">
	<img src="{{opt.template_directory_uri}}/includes/images/banner.jpg" alt="-Banner">
</span>
</div>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ravistheme.com/home-square/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Aug 2016 12:48:47 GMT -->
<head>
	<meta charset="UTF-8">
	<title>myHouse - Get it Here</title>
	<meta name="description" content="Home Square is a responsive realestate template."><!-- Add your Company short description -->
    <meta name="keywords" content="Responsive,HTML5,CSS3,XML,JavaScript"><!-- Add some Keywords based on your Company and your business and separate them by comma -->
    <meta name="author" content="GT, QodeArk@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Scada:400,700|Open+Sans:400,300,700" rel="stylesheet" type="text/css">
    <link id="main-style-file-css" rel="stylesheet" href="assets/css/style.css"/>

</head>
<body class="home-page-1">
	<header id="main-header">
        <div id="header-top">
            <div class="header-top-content container">
                <!-- Language Switcher -->
               <!--  <ul id="language-switcher" class="list-inline">
                    <li><a href="#">En</a></li>
                    <li><a href="#">Fr</a></li>
                    <li><a href="#">De</a></li>
                </ul> -->
                <!-- End of Language Switcher -->

                <!-- Login Links -->
				<ul id="login-boxes" class="list-inline">
                    <?php
                        session_start();
                        if (isset($_SESSION['user_id'])) {
                            $name = ucfirst($_SESSION['fname']).' '.ucfirst($_SESSION['lname']);?>
                            <li><a href="#">Welcome, <?php echo $name;?></a></li>
                            <li><a href="#">My Dashboard</a></li>
                            <li><a id="logout" href="#">Logout</a></li>
                    <?php }else{
                    ?>
					<li><a id="login-form-butt" href="forms/login.html">Login</a></li>
					<li><a id="register-form-butt" href="forms/register.html">Register</a></li>
                    <?php } ?>
				</ul>
                <!-- End of Login Links -->
            </div>
        </div>
        <div class="main-header-cont container">
            <!-- Top Logo -->
            <div class="logo-main-box col-xs-6 col-sm-4 col-md-3">
                <span class="bold">my</span>
                <span> H</span>
                <div class="logo"></div>
                <span>use</span>
            </div>
            <!-- End of Top Logo -->
            <!-- Main Menu -->
            <div class="menu-container col-xs-6 col-sm-8 col-md-9">
                <!-- Main Menu -->
                <nav id="main-menu" class="hidden-xs hidden-sm">
                    <ul class="main-menu list-inline">
                        <li><span class="current">Home</span>
                            <!-- <ul>
                                <li><a href="index.html" class="current">Home - Map</a></li>
                                <li><a href="index-slider.html">Home - Slider</a></li>
								<li><a href="index-slider-1.html">Home - Slider V2</a></li>
                                <li><a href="index-map.html">Home - Map Only</a></li>
                                <li><a href="index-slider-fullscreen.html">Home - Full Screen Slider</a></li>
                            </ul> -->
                        </li><!-- Menu items ( You can change the link and its text ) -->
                        <!-- <li><span>Property Listings</span>Menu items with submenu ("has-sub-menu" class is the helper for your future uses) -->
                            <!-- <ul>
                                <li><a href="pages/property-listing-grid.html">Property Listings - Grid</a></li>
								<li><a href="pages/property-listing-sidebar.html">Property Listings - Grid &amp; Sidebar</a></li>
								<li><a href="pages/property-listing-rows.html">Property Listings - Rows</a></li>
								<li><a href="pages/property-listing-map.html">Property Listings - Map</a></li>
								<li><a href="pages/property-details.html">Property Details</a></li>
                            </ul> -->
                        <!-- </li>
                        <li><a href="pages/compare.html">Property Compare</a></li> -->
                        <li><span>Agents</span>
                            <!-- <ul>
                                <li><a href="pages/agents.html">Agents Listing</a></li>s
                                <li><a href="pages/agent-details.html">Agent Details</a></li>
                            </ul> -->
                        </li>
                       <!--  <li><span>Gallery</span>
							<ul>
								<li><a href="pages/gallery-two-cols.html">Gallery - 2 Columns</a></li>
								<li><a href="pages/gallery-three-cols.html">Gallery - 3 Columns</a></li>
								<li><a href="pages/gallery-four-cols.html">Gallery - 4 Columns</a></li>
							</ul>
						</li>
                        <li><span>Blog</span>
                            <ul>
                                <li><a href="pages/blog.html">Blog - Right Sidebar</a></li>
                                <li><a href="pages/blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                <li><a href="pages/blog-details.html">Single Post</a></li>
                            </ul>
                        </li> -->
						<!-- <li><span>Pages</span>
							<ul>
								<li><a href="pages/testimonials.html">Testimonials</a></li>
								<li><a href="pages/services.html">Services</a></li>
								<li><a href="pages/video-tour.html">Video Tour</a></li>
								<li><a href="pages/faq.html">FAQ</a></li>
								<li><a href="pages/404.html">404</a></li>
							</ul>
						</li> -->
                        <li><a href="pages/contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- END of Main Menu -->

				<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div><!-- Mobile Menu handle -->
        		<a id="submit-property-link" class="btn" href="pages/submit-property.html"><span>Submit Your Property</span></a>
            </div>
            <!-- End of Main Menu -->
 		</div>
		<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
	</header>
	<!-- Google Map -->
   <!--  <section id="google-map">
		The element that will contain our Google Map. This is used in both the Javascript and CSS above.
        <div id="map"></div>
    </section> -->
	<!-- End of Google Map -->
	
	<!-- Property Search Box -->
	<section id="property-search-container" class="container" style="margin-top:8%">
		<div class="property-search-form horizontal">
            <div class="main-search-sec">
    			<div class="col-xs-6 col-sm-3 search-field">
    				<input type="text" placeholder="Location" id="location-search-box">
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<select id="proeprty-status">
    					<option value="0">Property Status</option>
    					<option value="1">For Sale</option>
    					<option value="2">For Rent</option>
    				</select>
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<select id="proeprty-type">
    					<option value="0">Property Type</option>
    					<option value="1">Apartment</option>
    					<option value="2">House</option>
    					<option value="3">Villa</option>
    					<option value="4">Office</option>
    					<option value="5">Condo</option>
    				</select>
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<input type="text" placeholder="Keyword" id="keyword">
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<select id="bedroom">
    					<option value="0">Bedroom</option>
    					<option value="1">1</option>
    					<option value="2">2</option>
    					<option value="3">3</option>
    					<option value="4">4</option>
    					<option value="5">5</option>
    					<option value="6">+5</option>
    				</select>
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<select id="bathroom">
    					<option value="0">Bathroom</option>
    					<option value="1">1</option>
    					<option value="2">2</option>
    					<option value="3">3</option>
    					<option value="4">4</option>
    					<option value="5">5</option>
    					<option value="6">+5</option>
    				</select>
    			</div>
    			<div class="col-xs-6 col-sm-3 search-field">
                    <input type="text" id="price_range" class="range-slider" name="price" value="" data-min="0" data-max="5000" />         
                </div>
    			<div class="col-xs-6 col-sm-3 search-field">
    				<button class="btn">Search</button>
    			</div>
            </div>
            <div class="advanced-search-sec">
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-1">
                            <input type="checkbox" value="81" id="field-1">
                            <span></span>
                            Parking
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-2">
                            <input type="checkbox" value="81" id="field-2">
                            <span></span>
                            Balcony
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-3">
                            <input type="checkbox" value="81" id="field-3">
                            <span></span>
                            Gym
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-4">
                            <input type="checkbox" value="81" id="field-4">
                            <span></span>
                            Storage
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-5">
                            <input type="checkbox" value="81" id="field-5">
                            <span></span>
                            Fireplace
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-6">
                            <input type="checkbox" value="81" id="field-6">
                            <span></span>
                            Air Condition
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-7">
                            <input type="checkbox" value="81" id="field-7">
                            <span></span>
                            Laundry Room
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-8">
                            <input type="checkbox" value="81" id="field-8">
                            <span></span>
                            Swimming Pool
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-9">
                            <input type="checkbox" value="81" id="field-9">
                            <span></span>
                            Central Heating
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-10">
                            <input type="checkbox" value="81" id="field-10">
                            <span></span>
                            Central Heating
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-11">
                            <input type="checkbox" value="81" id="field-11">
                            <span></span>
                            Fully Furnished
                        </label>
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 search-field">
                    <div class="hsq-checkbox check-box-container">
                        <label for="field-12">
                            <input type="checkbox" value="81" id="field-12">
                            <span></span>
                            Built-In Kitchen
                        </label>
                    </div>
                </div>
            </div>
            <button class="more-options btn">More Options <i class="fa fa-chevron-down"></i></button>
		</div>
	</section>
	<!-- End of Property Search Box -->

    <!-- Text Section -->
   <!--  <section class="text-section container">
        <h2 class="hsq-heading type-2">Best Deals with Home Square</h2>
        <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fugit illo ipsam iusto reiciendis tempora vel! Ad adipisci aliquid, asperiores aspernatur debitis deleniti, dolor dolorem enim eos eum, incidunt labore tempore? Accusantium aliquam at aut commodi consequatur culpa cum deleniti deserunt enim est ex excepturi harum id incidunt inventore ipsam iste libero, maiores minus nemo obcaecati officiis optio pariatur placeat provident quisquam ratione sapiente soluta temporibus vel veniam veritatis voluptatem.
        </div>
		<div class="service-box-container clearfix">
			<div class="col-sm-6 col-md-4 service-box wow fadeInUp">
				<div class="inner-container">
					<i class="hsq-font-house-percent"></i>
					<div class="title">Selling Your Properties</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eaque ex quisquam? Accusamus beatae maiores molestias sint sit. Accusantium, amet!
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 service-box wow fadeInUp">
				<div class="inner-container">
					<i class="hsq-font-house-search"></i>
					<div class="title">Best Deals Suggestions</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eaque ex quisquam? Accusamus beatae maiores molestias sint sit. Accusantium, amet!
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 service-box wow fadeInUp">
				<div class="inner-container">
					<i class="hsq-font-house-dollar"></i>
					<div class="title">Professional consultation</div>
					<div class="content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eaque ex quisquam? Accusamus beatae maiores molestias sint sit. Accusantium, amet!
					</div>
				</div>
			</div>
		</div>
    </section> -->
    <!-- End of Text Section -->

    <!-- Recent Properties -->
    <section class="property-listing boxed-view clearfix">
        <h2 class="hsq-heading type-2">Available Properties</h2>
        <div class="inner-container container">
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <span class="tag-label hot-offer">Hot Offer</span>
                        <img src="assets/img/property/1.jpg" alt="Image of Property">
						<span class="price">$850,000</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">Broadway, Los Angles, California</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio facilis, libero nihil praesentium voluptatibus.
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">285</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4">
                                <div class="value">4</div>
                                bed
                            </div>
                            <div class="bathroom col-xs-4"><div class="value">2</div>bath</div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <span class="tag-label featured">Featured</span>
                        <img src="assets/img/property/2.jpg" alt="Image of Property">
                        <span class="price">$556,000</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">Wade Avenue, Raleigh, North Carolina</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere facilis molestiae nostrum quisquam sint!
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">350</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4">
                                <div class="value">4</div>
                                bed
                            </div>
                            <div class="bathroom col-xs-4">
                                <div class="value">3</div>
                                bath
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <img src="assets/img/property/3.jpg" alt="Image of Property">
                        <span class="price">$703,500</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">River Dr E, Skykomish, WA</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi nam non, quibusdam tempora ut vel.
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">300</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4"><div class="value">3</div>bed</div>
                            <div class="bathroom col-xs-4"><div class="value">2</div>bath</div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <span class="tag-label open-house">Open House</span>
                        <img src="assets/img/property/4.jpg" alt="Image of Property">
                        <span class="price">$532,000</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">Wenatchee Ave, Wenatchee, WA</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eius modi officia quam rem repellat.
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">235</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4"><div class="value">3</div>bed</div>
                            <div class="bathroom col-xs-4">
                                <div class="value">1</div>
                                bath
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <img src="assets/img/property/5.jpg" alt="Image of Property">
                        <span class="price">$485,000</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">Main Street, Wake Forest, North Carolina</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis commodi eius ipsa maiores reiciendis!
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">153</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4">
                                <div class="value">2</div>
                                bed
                            </div>
                            <div class="bathroom col-xs-4">
                                <div class="value">1</div>
                                bath
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
            <div class="property-box col-xs-12 col-sm-6 col-md-4 wow fadeInUp">
                <div class="inner-box">
                    <a href="#" class="img-container">
                        <span class="tag-label foreclosure">Foreclosure</span>
                        <img src="assets/img/property/6.jpg" alt="Image of Property">
                        <span class="price">$185,000</span>
                    </a>
                    <div class="bottom-sec">
                        <a href="#" class="title">Millbrook Road, Raleigh, North Carolina</a>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis iure magni maiores praesentium voluptatibus.
                        </div>
                        <div class="extra-info clearfix">
                            <div class="area col-xs-4">
                                <div class="value">105</div>
                                m2
                            </div>
                            <div class="bedroom col-xs-4">
                                <div class="value">2</div>
                                bed
                            </div>
                            <div class="bathroom col-xs-4">
                                <div class="value">1</div>
                                bath
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn more-link">More</a>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="pagination-box">
            <ul class="list-inline">
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#"><span>2</span></a></li>
                <li><a href="#"><span>3</span></a></li>
                <li><a href="#"><span>4</span></a></li>
                <li><a href="#"><span>5</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
        <!-- End of Pagination -->
    </section>
    <!-- End of Recent Properties -->

    <!-- Featured Properties -->
    <section id="featured-properties" class="container">
        <h2 class="hsq-heading type-2">Featured Properties</h2>
        <div class="property-box-container owl-carousel owl-theme">
            <div class="item">
                <div class="propertybox-featured wow fadeInUp">
                    <div class="inner-container clearfix">
                        <a href="#" class="img-container col-xs-6">
                            <img src="assets/img/property/5.jpg" alt="Image of Property">
                            <span class="price-box">$486,200</span>
                        </a>
                        <div class="col-xs-6 main-info">
                            <a href="#" class="title">Golden Family House</a>

                            <div class="location">Broadway, Los Angles, California</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae cumque in nesciunt rerum. Error.
                            </div>
                            <div class="bottom-sec clearfix">
                                <div class="extra-info">
                                    <div class="bedroom"><div class="value">3</div>bedroom</div>
                                    <div class="bathroom"><div class="value">2</div>bathroom</div>
                                </div>
                                <a href="#" class="btn more-link">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/6.jpg" alt="Image of Property">
							<span class="price-box">$850,300</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">Great Villa</a>

                            <div class="location">Wade Avenue, Raleigh, North Carolina</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos impedit minus odit perferendis voluptatem.
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
                                    <div class="bedroom">
                                        <div class="value">2</div>
                                        bedroom
                                    </div>
                                    <div class="bathroom">
                                        <div class="value">1</div>
                                        bathroom
                                    </div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="item">
                <div class="propertybox-featured wow fadeInUp">
                    <div class="inner-container clearfix">
                        <a href="#" class="img-container col-xs-6">
                            <img src="assets/img/property/7.jpg" alt="Image of Property">
                            <span class="price-box">$1,800,000</span>
                        </a>
                        <div class="col-xs-6 main-info">
                            <a href="#" class="title">Single Family Home</a>

                            <div class="location">River Dr E, Skykomish, WA</div>
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eligendi inventore reiciendis sapiente ut! Reiciendis!
                            </div>
                            <div class="bottom-sec clearfix">
                                <div class="extra-info">
                                    <div class="bedroom">
                                        <div class="value">4</div>
                                        bedroom
                                    </div>
                                    <div class="bathroom"><div class="value">2</div>bathroom</div>
                                </div>
                                <a href="#" class="btn more-link">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/8.jpg" alt="Image of Property">
							<span class="price-box">$998,320</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">Cozy Villa in Suburb</a>

                            <div class="location">Wenatchee Ave, Wenatchee, WA</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta earum eligendi maiores pariatur, sequi tempore?
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
									<div class="bedroom"><div class="value">3</div>bedroom</div>
                                    <div class="bathroom">
                                        <div class="value">1</div>
                                        bathroom
                                    </div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="item">
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/9.jpg" alt="Image of Property">
							<span class="price-box">$898,500</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">Luxury Villa</a>

                            <div class="location">Main Street, Wake Forest, North Carolina</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dicta molestiae nam nobis non odit!
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
									<div class="bedroom"><div class="value">3</div>bedroom</div>
									<div class="bathroom"><div class="value">2</div>bathroom</div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
				</div>
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/10.jpg" alt="Image of Property">
							<span class="price-box">$1,852,300</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">House with Great View</a>

                            <div class="location">Millbrook Road, Raleigh, North Carolina</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem consequuntur dolore harum quae quo?
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
									<div class="bedroom"><div class="value">3</div>bedroom</div>
									<div class="bathroom"><div class="value">2</div>bathroom</div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="item">
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/11.jpg" alt="Image of Property">
							<span class="price-box">$958,000</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">Modern Apartment</a>

                            <div class="location">Broadway, Los Angles, California</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti fugit impedit iusto, nulla suscipit veritatis.
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
                                    <div class="bedroom">
                                        <div class="value">2</div>
                                        bedroom
                                    </div>
                                    <div class="bathroom">
                                        <div class="value">1</div>
                                        bathroom
                                    </div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
            	</div>
                <div class="propertybox-featured wow fadeInUp">
					<div class="inner-container clearfix">
						<a href="#" class="img-container col-xs-6">
							<img src="assets/img/property/4.jpg" alt="Image of Property">
							<span class="price-box">$851,000</span>
						</a>
						<div class="col-xs-6 main-info">
                            <a href="#" class="title">Luxury Apartment</a>

                            <div class="location">Wade Avenue, Raleigh, North Carolina</div>
							<div class="desc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iusto laborum molestias officia, possimus saepe!
							</div>
							<div class="bottom-sec clearfix">
								<div class="extra-info">
                                    <div class="bedroom">
                                        <div class="value">4</div>
                                        bedroom
                                    </div>
                                    <div class="bathroom">
                                        <div class="value">3</div>
                                        bathroom
                                    </div>
								</div>
								<a href="#" class="btn more-link">More Info</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- End of Featured Properties -->

	<!-- Statistics Section -->
	<section id="statistic-section" data-parallax="scroll" data-image-src="assets/img/stat-bg.jpg">
		<div class="inner-container container">
			<h2 class="hsq-heading">Current Statistics</h2>
			<div class="statistic-box-container clearfix">
				<div class="statistic-box wow fadeInUp">
					<div class="inner-box">
						<div class="value">11,523</div>
						<div class="text">All Properties</div>
					</div>
				</div>
				<div class="statistic-box wow fadeInUp">
					<div class="inner-box">
						<div class="value">5,351</div>
						<div class="text">Hot Offers</div>
					</div>
				</div>
				<div class="statistic-box wow fadeInUp">
					<div class="inner-box">
						<div class="value">3,653</div>
						<div class="text">Featured</div>
					</div>
				</div>
				<div class="statistic-box wow fadeInUp">
					<div class="inner-box">
						<div class="value">8,425</div>
						<div class="text">Foreclosure</div>
					</div>
				</div>
				<div class="statistic-box wow fadeInUp">
					<div class="inner-box">
						<div class="value">590</div>
						<div class="text">Open House</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Statistics Section -->

	<!-- Top Agents -->
	<section id="top-agents" class="container">
		<h2 class="hsq-heading type-2">Current Agents</h2>
		<div class="agent-box-container owl-carousel owl-theme clearfix">
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/1.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">Sara Carrey</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ducimus enim quod repudiandae vel. Animi debitis id numquam veniam veritatis.
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/2.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">Susan Wiese</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque autem cupiditate error minima numquam optio quod recusandae sit veniam.
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/3.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">John Smith</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/4.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">Claudia Green</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/5.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">Joseph Taylor</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="agent-box">
				<div class="inner-container">
					<a href="#" class="img-container">
						<img src="assets/img/agents/6.jpg" alt="Agent Image">
					</a>
					<div class="bott-sec">
						<div class="name">Leonardo Totti</div>
						<div class="title">Certificated Agent</div>
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur doloremque eius expedita molestiae molestias pariatur quod repellendus ullam vel!
						</div>
						<a href="#" class="view-listing">View Listing</a>
						<div class="social-icons">
							<a href="#" class="fa fa-envelope"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of Top Agents -->

	<!--Our Partners-->
	<!-- <section id="our-partners">
		<div class="inner-container container">
			<h2 class="hsq-heading type-2">Our Partners</h2>
			<div class="logo-container owl-carousel">
			<div class="client-logo">
				<img src="assets/img/client-logo/altria1.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/bluehost.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/cube.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/erikaschesonis1.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/modernart.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/nationalgeographic.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/square.png" alt="Cleint Logo">
			</div>
			<div class="client-logo">
				<img src="assets/img/client-logo/squareroom.png" alt="Cleint Logo">
			</div>
		</div>
		</div>
	</section> -->
	<!--End of Our Partners-->

	<!--Top Footer-->
	<!-- <section id="top-footer" data-parallax="scroll" data-image-src="assets/img/top-footer-bg.jpg">
		<div class="inner-container container">
			<div class="widget-box col-md-6">
				<h4>Home Square Newsletter</h4>
				<div class="desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum in, mollitia nemo, non nostrum perferendis porro qui quisquam rem sit, tempora! Beatae cupiditate esse id itaque perspiciatis quasi sed.
				</div>
			</div>
			<div class="widget-box col-md-6">
				<h4>Get our free newsletter</h4>
				<form action="#" id="newsletter-form">
					<div class="input-container">
						<input type="text" placeholder="Your Email">
					</div>
					<button class="btn">Submit</button>
				</form>
			</div>
		</div>
	</section> -->
	<!--End of Top Footer-->

	<footer id="main-footer">
		<div class="inner-container container">
			<div id="go-up" class="fa fa-angle-double-up"></div>
			<div class="top-section clearfix">
				<div class="col-sm-4 widgets">
					<div class="logo-main-box">
						<span class="bold">my</span>
						<span> H</span>
						<div class="logo"></div>
						<span>use</span>
					</div>
					<div class="desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolore doloremque dolores enim et ex excepturi exercitationem facere harum illum in., iusto magnam non nostrum numquam odio placeat possimus praesentium quae quo recusandae.
					</div>
				</div>
				<div class="col-sm-4 widgets">
					<!-- <h4 class="title">Tags</h4>
					<ul class="list-inline tag-list">
						<li><a href="#">Apartment</a></li>
						<li><a href="#">Villa</a></li>
						<li><a href="#">Office For Rent</a></li>
						<li><a href="#">Office</a></li>
						<li><a href="#">Vacation Rental</a></li>
						<li><a href="#">Villa For Sale</a></li>
						<li><a href="#">Luxury Houses</a></li>
					</ul> -->
				</div>
				<div class="col-sm-4 widgets">
					<h4 class="title">Get in touch with us</h4>
					<ul class="contact-info">
						<!-- <li><i class="fa fa-map-marker"></i>133 Elizabeth street, Sydney 4000, Australia</li> -->
						<li class="phone"><i class="fa fa-phone"></i>0728 778 002</li>
						<li><i class="fa fa-envelope"></i>info@myhouse.co.ke</li>
					</ul>
				</div>
			</div>
			<div class="bott-section .clearfix">
				<div class="col-sm-6 copy-right">
					Copyright MyHouse 2016, Theme  by <a href="http://ravistheme.com/" target="_blank">RavisTheme</a>. All rights reserved.
				</div>
				<div class="col-sm-6 social-icons">
					<ul class="list-inline">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-skype"></a></li>
						<li><a href="#" class="fa fa-google-plus"></a></li>
						<li><a href="#" class="fa fa-youtube"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


    <!-- JS Include Section -->
    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/helper.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <!-- Map Js -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script> -->
    <!-- <script type="text/javascript" src="assets/js/infobox_packed.js"></script> -->
    <!-- <script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
    <script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script> -->
    <script type="text/javascript" src="assets/js/data.json"></script>
    <!-- END OF Map Js -->

    <script type="text/javascript" src="assets/js/template.js"></script>
    <!-- <script type="text/javascript" src="assets/js/style-selector.js"></script> -->
    <!-- End of JS Include Section -->

</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("#logout").click(function(e){           
            $.ajax({
            type: "POST",
            url: 'forms/logout.php',
            success: function(data)
            {
                console.log(data);
                window.location.replace('index.php');
                
            }
        });


        });
        
    });
</script>
<!-- Mirrored from ravistheme.com/home-square/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Aug 2016 12:53:59 GMT -->
</html>
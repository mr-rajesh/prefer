<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!! Html::style(elixir('css/css/bootstrap.min.css')) !!}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
  {!! Html::style(elixir('css/css/style.css')) !!}
</head>
<body>

    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menuuu">
        <div class="container">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <img src="{{asset('img/images/logo.png')}}" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <ul class="menu-navigation">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us  </a></li>
                    <li><a href="">Listing</a></li>
                    <li><a href="">Categres</a></li>
                    <li><a href="">Pages</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end menu-->
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 abnner-serch-bg">
        <div class="row">
            <div class="vc_row wpb_row vc_row-fluid"><script>
	   function adforest_location() {
	   var options = {
  types: ['(cities)'],
  
 };
      var input = document.getElementById('sb_user_address');
	  var action_on_complete	=	'';
      var autocomplete = new google.maps.places.Autocomplete(input, options);
	  if( action_on_complete )
	  {
	   new google.maps.event.addListener(autocomplete, 'place_changed', function() {
	  // document.getElementById('sb_loading').style.display	= 'block';
    var place = autocomplete.getPlace();
	document.getElementById('ad_map_lat').value = place.geometry.location.lat();
	document.getElementById('ad_map_long').value = place.geometry.location.lng();
	var markers = [
        {
            'title': '',
            'lat': place.geometry.location.lat(),
            'lng': place.geometry.location.lng(),
        },
    ];
	my_g_map(markers);
	//document.getElementById('sb_loading').style.display	= 'none';
});
	   }

   }
   </script>
                <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"> <section class="main-search parallex " style="background: rgba(0, 0, 0, 0) url(http://adforest.scriptsbundle.com/wp-content/uploads/2017/03/banner-7.jpg)  no-repeat scroll center center / cover ;">
<div class="container">
      <div class="row">
      <div class="col-md-12">
         <div class="main-search-title">
            <h1>Find Whatever Your Want?</h1>
            <p>Search from <strong>43</strong> new ads.</p>
         </div>
         <form method="get" action="http://adforest.scriptsbundle.com/search-results/">
         <div class="search-section">
            <div id="form-panel">
               <ul class="list-unstyled search-options clearfix">
                  <li>
					<select class="category form-control select2-hidden-accessible" name="cat_id" tabindex="-1" aria-hidden="true">
					<option label="Select Category" value="">Select Category</option>
				  		<option value="435">African Wild Cats</option><option value="62">Airedale Terrier</option><option value="61">Akita</option><option value="82">Allion</option><option value="44">Animals/Pets</option><option value="271">Art &amp; Design</option><option value="83">Aurion</option><option value="84">Auris</option><option value="85">Avalon</option><option value="81">Aygo</option><option value="32">Bags &amp; Beauty Products</option><option value="43">Bank/Finance Jobs</option><option value="64">Beagle</option><option value="86">Belta</option><option value="45">Birds</option><option value="77">Black Tetra</option><option value="65">Bloodhound</option><option value="69">Budgerigars</option><option value="70">Caique</option><option value="8">Cars</option><option value="270">Cars Accessories</option><option value="46">Cats</option><option value="10">Civic</option><option value="38">Cleaning Jobs</option><option value="55">Cleaning Services</option><option value="34">Clothing - Female</option><option value="33">Clothing - Male</option><option value="78">Clown Fish</option><option value="50">Commercial &amp; Offices</option><option value="27">Computer &amp; Laptops</option><option value="252">Cricket</option><option value="39">Design Jobs</option><option value="40">Development Jobs</option><option value="47">Dogs</option><option value="56">Educational</option><option value="254">Events Service</option><option value="51">Farms</option><option value="31">Fashion</option><option value="48">Fishes</option><option value="57">Food Services</option><option value="437">Football</option><option value="66">French Bulldog</option><option value="272">Games &amp; Console</option><option value="73">Goldfish</option><option value="42">Governmnet Jobs</option><option value="67">Gray Parrot</option><option value="255">Heavy Bikes</option><option value="52">Home</option><option value="58">Home &amp; Office Removals</option><option value="26">Home Apps</option><option value="28">Home Apps</option><option value="9">Honda</option><option value="41">IT Jobs</option><option value="37">Jobs</option><option value="71">Lovebird</option><option value="59">Medical</option><option value="29">Mobile &amp; Tablets</option><option value="74">Molly</option><option value="250">Moter Bikes</option><option value="253">Music Instruments</option><option value="63">Others</option><option value="72">Others</option><option value="79">Others</option><option value="60">Pit Bull</option><option value="53">Plaze &amp; Property</option><option value="49">Real Estate</option><option value="75">Red Platy</option><option value="436">Rental</option><option value="54">Services</option><option value="35">Shoes</option><option value="68">Sparrow</option><option value="249">Sports</option><option value="434">Sports</option><option value="251">Sports Goods</option><option value="76">Tiger Barb</option><option value="80">Toyota</option><option value="256">Truck &amp; Buses</option><option value="30">TV &amp; LCD</option><option value="7">Vehicles</option><option value="244">Watches</option><option value="36">Wathes &amp; Jewellery</option>
					</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cat_id-7m-container"><span class="select2-selection__rendered" id="select2-cat_id-7m-container"><span class="select2-selection__placeholder">Select an option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>	
                  </li>
                  <li>
                     <input type="text" autocomplete="off" name="ad_title" placeholder="Search here...">
                  </li>
                  <li>
                     <input type="text" name="location" id="sb_user_address" placeholder="Location..." autocomplete="off">
                  </li>
                  <li>
                     <button type="submit" class="btn btn-danger btn-lg btn-block">Search</button>
                  </li>
               </ul>
              <div class="hero-form-sub">
                  <strong class="hidden-sm-down">Popular Tags</strong><ul class="wp-tag-cloud" role="list">
	<li><a href="#" class="tag-cloud-link tag-link-23 tag-link-position-1" style="font-size: 12px;">car</a></li>
	<li><a href="#" class="tag-cloud-link tag-link-12 tag-link-position-2" style="font-size: 12px;">civic</a></li>
	<li><a href="#" class="tag-cloud-link tag-link-24 tag-link-position-3" style="font-size: 12px;">honda</a></li>
	<li><a href="#" class="tag-cloud-link tag-link-13 tag-link-position-4" style="font-size: 12px;">honda civic</a></li>
	<li><a href="#" class="tag-cloud-link tag-link-88 tag-link-position-5" style="font-size: 12px;">sale</a></li>
	<li><a href="#" class="tag-cloud-link tag-link-98 tag-link-position-6" style="font-size: 12px;">watch</a></li>
</ul>
</div>
            </div>
         </div>
		 </form>
         </div>
         </div>
       </div>
      
      </section>
							  </div></div></div></div>
        </div>
    </div>
    <!--end search bare-->
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gray">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/pets.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/cars.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/watch.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/cloths.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/computer-1.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/newspaper.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/applinces.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="box">
                         <img alt="Cats" src="{{asset('img/images/mobile-1.png')}}">
                        <h4><a href="#"> Cats</a></h4>
                        <strong>1 Ads</strong> 
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!--end categrese-->
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 grau-other">
           <div class="heading-panel">
             <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                <!-- Main Title -->
                <h1>Browse <span class="heading-color"> Featured</span> Ads</h1>
                <!-- Short Description -->
                <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
             </div>
          </div>
        
        <div class="container">
                        
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="category-grid-box">
					 <!-- Ad Img -->
					 <div class="category-grid-img">
						<img src="{{asset('img/images/gold-313x234.jpg')}}" alt="Sony Xperia Z5 Gold Edition" class="img-responsive">
						<!-- Ad Status -->
						<span class="ad-status">Featured</span>
						<!-- User Review -->
						<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
						<!-- View Details -->
						<a href="#" class="view-details">
						View Details
						</a>
						<!-- Additional Info -->
						<div class="additional-information">
						   <p>Posted on: March 7, 2017</p>
						   <p>Ad Type: Sell</p>
						   <p>Condition: Used</p>
						</div>
						<!-- Additional Info End-->
					 </div>
					 <!-- Ad Img End -->
					 <div class="short-description">
							<!-- Category Title -->
								<div class="category-title"> <span class="padding_cats"><a href="#">Home Apps</a></span><span class="padding_cats"><a href="#">Mobile &amp; Tablets</a></span> </div>
								<!-- Ad Title -->
								<h3>
								   <a title="" href="#">Sony Xperia Z5 Gold Edition</a>
								</h3>
						<!-- Price -->
						<div class="price">
						$450.00
						</div>
					 </div>
					 <!-- Addition Info -->
					 <div class="ad-info">
						<ul>
						   <li><i class="fa fa-map-marker"></i>
						   North Myrtle Beach, SC, United States
						   </li>
						</ul>
					 </div>
				  </div>
            </div>
        </div>
    </div>
    <!--end Latest Featured Ads-->
    
    
    
    
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gray">
         
         
         <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Trending</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
         
         
        <div class="container">
                <ul class="list-unstyled">
							  		<li>
				<div class="well ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding"><div class="img-box">
	<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
	<img src="{{asset('img/images/5-313x234.jpg')}}" class="img-responsive" alt="Audi A6 With Tubro Charger">
	<div class="total-images">
	<strong>1</strong>
	photos
	</div>
	<div class="quick-view">
	<a href="#" class="view-button"><i class="fa fa-search"></i></a>
	</div>
	</div>
	
	<div class="user-preview">
	<a href="javascript:void(0);">
	<img src="{{asset('img/images/16707384_1257028637679561_6191825725197643942_o-1-80x80.jpg')}}" class="avatar avatar-small" alt="Audi A6 With Tubro Charger">
	</a>
	</div>
	</div>
	<div class="col-md-9 col-sm-7 col-xs-12">
	<!-- Ad Content-->
	<div class="row">
	<div class="content-area">
	<div class="col-md-9 col-sm-12 col-xs-12">
	
	<div class="category-title">
	<span><a class="" href="#">Vehicles</a></span><span><a class="padding-left" href="#">Cars</a></span><span><a class="padding-left" href="#">Honda</a></span>
	</div>
	<!-- Ad Title -->
	<h3>
	<a href="#">
	Audi A6 With Tubro Charger
	</a>
	</h3>
	<ul class="additional-info pull-right">
	<li>
	<a data-toggle="tooltip" title="032034209211" href="javascript:void(0);" class="fa fa-phone"></a>
	</li>
	<li>
	<a data-toggle="tooltip" title="Save" href="javascript:void(0);" class="fa fa-heart save-ad" data-adid="1420"></a>
	</li>
	</ul>
	<ul class="ad-meta-info">
	<li> <i class="fa fa-map-marker"></i>
	<a href="javascript:void(0);">
	Lahore, Punjab, Pakistan
	</a>
	</li>
	<li> <i class="fa fa-clock-o"></i>
	April 7, 2017
	</li>
	</ul>
	<div class="ad-details">
	<p>4 twin oval chrome finish exhaust pipes, Xenon headlights, Automatic headlights + automatic windscreen wipers, Service interval indicator, Electro-mec...</p>
	</div>
	</div>
	<div class="col-md-3 col-xs-12 col-sm-12">
	<!-- Ad Stats -->
	<div class="short-info">
	<div class="ad-stats hidden-xs">
	<span>Ad Type  : </span>
	Sell
	</div>
	<div class="ad-stats hidden-xs">
		<span>Condition  : </span>
		Used
		</div>
	<div class="ad-stats hidden-xs">
	<span>Visits  : </span>
	2816
	</div>
	</div>
	<!-- Price -->
	<div class="price">
	<span>
	$370.00
	</span> 
	</div>
	<!-- Ad View Button -->
	<a href="#" class="btn btn-block btn-success">
	<i class="fa fa-eye" aria-hidden="true"></i>
	View Ad
	</a>
	</div>
	</div>
	</div>
	<!-- Ad Content End -->
	</div>
	</div>
	</li>
	<li>
				<div class="well ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding"><div class="img-box">
	<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
	<img src="{{asset('img/images/2018-audi-tt-rs-3-313x234.jpg')}}" class="img-responsive" alt="Audi R4 Car for Sale">
	<div class="total-images">
	<strong>1</strong>
	photos
	</div>
	<div class="quick-view">
	<a href="#" class="view-button"><i class="fa fa-search"></i></a>
	</div>
	</div>
	
	<div class="user-preview">
	<a href="javascript:void(0);">
	<img src="{{asset('img/images/bpfull-80x80.jpg')}}" class="avatar avatar-small" alt="Audi R4 Car for Sale">
	</a>
	</div>
	</div>
	<div class="col-md-9 col-sm-7 col-xs-12">
	<!-- Ad Content-->
	<div class="row">
	<div class="content-area">
	<div class="col-md-9 col-sm-12 col-xs-12">
	
	<div class="category-title">
	<span><a class="" href="#">Vehicles</a></span><span><a class="padding-left" href="#">Cars</a></span><span><a class="padding-left" href="#">Honda</a></span>
	</div>
	<!-- Ad Title -->
	<h3>
	<a href="#">
	Audi R4 Car for Sale
	</a>
	</h3>
	<ul class="additional-info pull-right">
	<li>
	<a data-toggle="tooltip" title="00000000001" href="javascript:void(0);" class="fa fa-phone"></a>
	</li>
	<li>
	<a data-toggle="tooltip" title="Save" href="javascript:void(0);" class="fa fa-heart save-ad" data-adid="1413"></a>
	</li>
	</ul>
	<ul class="ad-meta-info">
	<li> <i class="fa fa-map-marker"></i>
	<a href="javascript:void(0);">
	Rome, Metropolitan City of Rome, Italy
	</a>
	</li>
	<li> <i class="fa fa-clock-o"></i>
	April 7, 2017
	</li>
	</ul>
	<div class="ad-details">
	<p>Looking to sell the car urgently. Engine is good condition. Complete service history available. Original return file is available. After Market Alloy ...</p>
	</div>
	</div>
	<div class="col-md-3 col-xs-12 col-sm-12">
	<!-- Ad Stats -->
	<div class="short-info">
	<div class="ad-stats hidden-xs">
	<span>Ad Type  : </span>
	Sell
	</div>
	<div class="ad-stats hidden-xs">
		<span>Condition  : </span>
		Used
		</div>
	<div class="ad-stats hidden-xs">
	<span>Visits  : </span>
	1431
	</div>
	</div>
	<!-- Price -->
	<div class="price">
	<span>
	$850.00
	</span> 
	</div>
	<!-- Ad View Button -->
	<a href="#" class="btn btn-block btn-success">
	<i class="fa fa-eye" aria-hidden="true"></i>
	View Ad
	</a>
	</div>
	</div>
	</div>
	<!-- Ad Content End -->
	</div>
	</div>
	</li>
	<li>
				<div class="well ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding"><div class="img-box">
	<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
	<img src="{{asset('img/images/gtr-313x234.jpg')}}" class="img-responsive" alt="New Audi Car">
	<div class="total-images">
	<strong>1</strong>
	photos
	</div>
	<div class="quick-view">
	<a href="#" class="view-button"><i class="fa fa-search"></i></a>
	</div>
	</div>
	
	<div class="user-preview">
	<a href="javascript:void(0);">
	<img src="{{asset('img/images/15941255_1298416633537264_2140436134119493690_n-1-80x80.jpg')}}" class="avatar avatar-small" alt="New Audi Car">
	</a>
	</div>
	</div>
	<div class="col-md-9 col-sm-7 col-xs-12">
	<!-- Ad Content-->
	<div class="row">
	<div class="content-area">
	<div class="col-md-9 col-sm-12 col-xs-12">
	
	<div class="category-title">
	<span><a class="" href="#">Art &amp; Design</a></span>
	</div>
	<!-- Ad Title -->
	<h3>
	<a href="#">
	New Audi Car
	</a>
	</h3>
	<ul class="additional-info pull-right">
	<li>
	<a data-toggle="tooltip" title="03137633303" href="javascript:void(0);" class="fa fa-phone"></a>
	</li>
	<li>
	<a data-toggle="tooltip" title="Save" href="javascript:void(0);" class="fa fa-heart save-ad" data-adid="1386"></a>
	</li>
	</ul>
	<ul class="ad-meta-info">
	<li> <i class="fa fa-map-marker"></i>
	<a href="javascript:void(0);">
	Chicago, IL, United States
	</a>
	</li>
	<li> <i class="fa fa-clock-o"></i>
	April 5, 2017
	</li>
	</ul>
	<div class="ad-details">
	<p>Looking to sell the car urgently. Engine is good condition. Complete service history available. Original return file is available. After Market Alloy ...</p>
	</div>
	</div>
	<div class="col-md-3 col-xs-12 col-sm-12">
	<!-- Ad Stats -->
	<div class="short-info">
	<div class="ad-stats hidden-xs">
	<span>Ad Type  : </span>
	Sell
	</div>
	<div class="ad-stats hidden-xs">
		<span>Condition  : </span>
		New
		</div>
	<div class="ad-stats hidden-xs">
	<span>Visits  : </span>
	916
	</div>
	</div>
	<!-- Price -->
	<div class="price">
	<span>
	$500.00
	</span> 
	</div>
	<!-- Ad View Button -->
	<a href="#" class="btn btn-block btn-success">
	<i class="fa fa-eye" aria-hidden="true"></i>
	View Ad
	</a>
	</div>
	</div>
	</div>
	<!-- Ad Content End -->
	</div>
	</div>
	</li>
	<li>
				<div class="well ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding"><div class="img-box">
	<a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
	<img src="{{asset('img/images/1.2.2.2-Brookfield-1-3-313x234.jpg')}}" class="img-responsive" alt="I phone For Sale">
	<div class="total-images">
	<strong>3</strong>
	photos
	</div>
	<div class="quick-view">
	<a href="#" class="view-button"><i class="fa fa-search"></i></a>
	</div>
	</div>
	
	<div class="user-preview">
	<a href="javascript:void(0);">
	<img src="{{asset('img/images/SB-logo-80x80.png')}}" class="avatar avatar-small" alt="I phone For Sale">
	</a>
	</div>
	</div>
	<div class="col-md-9 col-sm-7 col-xs-12">
	<!-- Ad Content-->
	<div class="row">
	<div class="content-area">
	<div class="col-md-9 col-sm-12 col-xs-12">
	
	<div class="category-title">
	<span><a class="" href="#">Home Apps</a></span><span><a class="padding-left" href="#">Mobile &amp; Tablets</a></span>
	</div>
	<!-- Ad Title -->
	<h3>
	<a href="#">
	I phone For Sale
	</a>
	</h3>
	<ul class="additional-info pull-right">
	<li>
	<a data-toggle="tooltip" title="0333123456" href="javascript:void(0);" class="fa fa-phone"></a>
	</li>
	<li>
	<a data-toggle="tooltip" title="Save" href="javascript:void(0);" class="fa fa-heart save-ad" data-adid="800"></a>
	</li>
	</ul>
	<ul class="ad-meta-info">
	<li> <i class="fa fa-map-marker"></i>
	<a href="javascript:void(0);">
	Wyoming, MI, United States
	</a>
	</li>
	<li> <i class="fa fa-clock-o"></i>
	March 2, 2017
	</li>
	</ul>
	<div class="ad-details">
	<p>I have Iphone and I want to sold it . If some one is interested please contact me.Features: Apple iPhone 6&nbsp; Factory Unlocked&nbsp; Silver &amp; White Co...</p>
	</div>
	</div>
	<div class="col-md-3 col-xs-12 col-sm-12">
	<!-- Ad Stats -->
	<div class="short-info">
	<div class="ad-stats hidden-xs">
	<span>Ad Type  : </span>
	Sell
	</div>
	<div class="ad-stats hidden-xs">
		<span>Condition  : </span>
		Used
		</div>
	<div class="ad-stats hidden-xs">
	<span>Visits  : </span>
	1049
	</div>
	</div>
	<!-- Price -->
	<div class="price">
	<span>
	$500.00
	</span> 
	</div>
	<!-- Ad View Button -->
	<a href="#" class="btn btn-block btn-success">
	<i class="fa fa-eye" aria-hidden="true"></i>
	View Ad
	</a>
	</div>
	</div>
	</div>
	<!-- Ad Content End -->
	</div>
	</div>
	</li>
	<li>
				<div class="well ad-listing clearfix">
				<div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding"><div class="img-box">
                    <a href="#" class="play-video"><i class="fa fa-play-circle-o"></i></a>
                    <img src="{{asset('img/images/parrot-2-313x234.jpg')}}" class="img-responsive" alt="Beautiful Parrot">
                    <div class="total-images">
                    <strong>2</strong>
                    photos
                    </div>
                    <div class="quick-view">
                    <a href="#" class="view-button"><i class="fa fa-search"></i></a>
                    </div>
                    </div>

                    <div class="user-preview">
                    <a href="javascript:void(0);">
                    <img src="{{asset('img/images/300px-Linkedin_Professional_Profile_Photo-80x80.jpg')}}" class="avatar avatar-small" alt="Beautiful Parrot">
                    </a>
                    </div>
                    </div>
                    <div class="col-md-9 col-sm-7 col-xs-12">
                    <!-- Ad Content-->
                    <div class="row">
                    <div class="content-area">
                    <div class="col-md-9 col-sm-12 col-xs-12">

                    <div class="category-title">
                    <span><a class="" href="#">Animals/Pets</a></span><span><a class="padding-left" href="#">Birds</a></span><span><a class="padding-left" href="#">Gray Parrot</a></span>
                    </div>
                    <!-- Ad Title -->
                    <h3>
                    <a href="#">
                    Beautiful Parrot
                    </a>
                    </h3>
                    <ul class="additional-info pull-right">
                    <li>
                    <a data-toggle="tooltip" title="89314934980" href="javascript:void(0);" class="fa fa-phone"></a>
                    </li>
                    <li>
                    <a data-toggle="tooltip" title="Save" href="javascript:void(0);" class="fa fa-heart save-ad" data-adid="467"></a>
                    </li>
                    </ul>
                    <ul class="ad-meta-info">
                    <li> <i class="fa fa-map-marker"></i>
                    <a href="javascript:void(0);">
                    Sydney, FL, United States
                    </a>
                    </li>
                    <li> <i class="fa fa-clock-o"></i>
                    February 20, 2017
                    </li>
                    </ul>
                    <div class="ad-details">
                    <p>Looking to sell the car urgently. Engine is good condition. Complete service history available. Original return file is available. After Market Alloy ...</p>
                    </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12">
                    <!-- Ad Stats -->
                    <div class="short-info">
                    <div class="ad-stats hidden-xs">
                    <span>Ad Type  : </span>
                    Sell
                    </div>
                    <div class="ad-stats hidden-xs">
                        <span>Condition  : </span>
                        Used
                        </div>
                    <div class="ad-stats hidden-xs">
                    <span>Visits  : </span>
                    751
                    </div>
                    </div>
                    <!-- Price -->
                    <div class="price">
                    <span>
                    $200.00
                    </span> 
                    </div>
                    <!-- Ad View Button -->
                    <a href="#" class="btn btn-block btn-success">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    View Ad
                    </a>
                    </div>
                    </div>
                    </div>
                    <!-- Ad Content End -->
                    </div>
                    </div>
                    </li>
	
          </ul>
         </div>
     </div>
    
    
    
    <!---end last trending ads-->
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="container">
            <div class="happy-clients-area fix ">
            <div class="container">
               <div class="row clients-space">
			   		
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="client-brand-list">
					 	<div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_7.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_5.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_6.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_7.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_8.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_9.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_10.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_5.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_8.png')}}" alt="logo">
						   </a>
                        </div><div class="sigle-clients-brand">
                           <a href="#" target="_blank">
						   <img src="{{asset('img/images/client_10.png')}}" alt="logo">
						   </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
    </div>
    
    
    <!--end logo-->
    
    
    <footer>
    <!-- Footer Content -->
    <div class="footer-top">
       <div class="container">
          <div class="row">
             <div class="col-md-3  col-sm-6 col-xs-12">
                <!-- Info Widget -->
                <div class="widget">
                   <div class="logo">
                    <a href="#">
			               <img src="{{asset('img/images/AdForest-WordPress-ads-Posting-theme-logo.png')}}" class="img-responsive" alt="Site Logo">
             
            </a>              
                   </div>
                   <p>AdForest a Largest Classified Market Place offers perfect WordPress Ads classified Themes to build your own classified websites.</p>
                   <ul>
                   <li><a href="#"><img src="{{asset('img/images/appstore.png')}}" alt="Android App"></a></li><li><a href="#"><img src="{{asset('img/images/googleplay.png')}}" alt="IOS App"></a></li>                      
                   </ul>
                </div>
                <!-- Info Widget Exit -->
             </div>
             <div class="col-md-5  col-sm-12 col-xs-12">
                <!-- Newslatter -->
                <div class="widget widget-newsletter">
                   <h5>Weekly Newsletter</h5>
                   <div class="fieldset">
                      <p>We may send you information about related events, webinars, products and services which we believe.</p>
                                           <form onsubmit="return checkVals();">
                         <input name="sb_email" id="sb_email" placeholder="Enter your email address" type="text" autocomplete="off" required="">
                         <input class="submit-btn" id="save_email" value="Submit" type="button">
                         <input class="submit-btn no-display" id="processing_req" value="Processing..." type="button" style="display: none;">
                         <input type="hidden" id="sb_action" value="footer_action">
                      </form>
                                        </div>
                </div>
                <!-- Newslatter -->
             </div>
             <div class="col-md-2  col-sm-6 col-xs-12">
                <!-- Follow Us -->
                <div class="widget socail-icons">
                   <h5>Hot Links</h5>
                   <ul>
                      
                                    
                        <li>
                            <a class="Facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a><span>Facebook</span>
                        </li>
                                    
                        <li>
                            <a class="Twitter" href="#">
                                <i class="fa fa-twitter "></i>
                            </a><span>Twitter</span>
                        </li>
                                    
                        <li>
                            <a class="Linkedin" href="#">
                                <i class="fa fa-linkedin "></i>
                            </a><span>Linkedin</span>
                        </li>
                                    
                        <li>
                            <a class="Google" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a><span>Google</span>
                        </li>
                                    
                        <li>
                            <a class="YouTube" href="#">
                                <i class="fa fa-youtube-play"></i>
                            </a><span>YouTube</span>
                        </li>
                                                                                                                                                                   </ul>
                </div>
                <!-- Follow Us End -->
             </div>
              <div class="col-md-2  col-sm-6 col-xs-12">
              
                      <div class="widget my-quicklinks">
                        	<h5>Quick Links</h5>
                                                <ul>
							<li><a href="#">Sample Page</a></li><li><a href="#">Login</a></li><li><a href="#">Register</a></li><li><a href="#">Blog</a></li>                         </ul>
                      </div>              
              
			  </div>
          </div>
       </div>
    </div>
    <!-- Copyrights -->
    <div class="copyrights">
       <div class="container">
          <div class="copyright-content">
             <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p>Copyright 2017 © Theme Created By <a href="#">ScriptsBundle</a> All Rights Reserved.</p>                </div>
             </div>
          </div>
       </div>
    </div>
</footer>
    
                
                
                
                
    {!! Html::script(elixir('js/js/jquery.min.js')) !!}
    {!! Html::script(elixir('js/js/bootstrap.min.js')) !!}
    

</body>
</html>
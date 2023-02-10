<?php
    //$loc=$_GET['name'];
	$loc="Karnataka";
    //$conn = new mysqli('localhost:3307','root','','eternal');
    // if($conn->connect_error){
    //   die('Connection failed');
    // }else{
    //     $query = "SELECT * FROM `plants` WHERE State= '".$loc."' ;";
	// 	$result = $conn->query($query);
	// 	while($row = $result->fetch_assoc())
	// 		{
	// 			$p1=$row["p1"];
	// 			$p2=$row["p2"];
	// 			$p3=$row["p3"];
	// 			$i1=$row["i1"];
	// 			$i2=$row["i2"];
	// 			$i3=$row["i3"];
	// 		}
    // }
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Eternal Flora</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
    	<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div>
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand">Eternal Flora</a>
				</div>
			</div>
		</nav>
    <section id="home2">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1.1 col-md-8">
            <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">The best plants for you in <span class="status"></span>.</h1>
          </div>
        </div>
      </div>
    </section>
		<!-- end navigation -->
		

    	<!-- start plants -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">THE BEST PLANTS IN YOUR <span>REGION</span></h2>
						<br>
    				</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object ">
										<img class="plant" src="<?php echo $i1?>" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object pull-left">
									</div>
									<h2 class="pheading"><?php echo $p1 ?></h2>
								</div>
								<div class="media-body">
									<p class="desc">This would be an amazing choice for your home. Perfect for your regions climate and perfect to colour your home! These colourful plants will bring joy and the feeling of freshness in your home.</p>
								</div>
							</div>
						</div>
				</div>
				<br>
				<div class="row">
					<div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object ">
										<img class="plant" src="<?php echo $i2?>" alt="">
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object pull-left">
										
									</div>
									<h2 class="pheading"><?php echo $p2 ?></h2>
								</div>
								<div class="media-body">
									<p class="desc">Dont have a lot of time to spend on your garden? Dont worry! This plant will not only colour your home with colours but is also the perfect low maintainace plant for you. Easy colours and happiness with this one!</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<br>
				<div class="row">
					<div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object ">
										<img class="plant" src="<?php echo $i3?>" alt="">
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
							<div class="media">
								<div class="media-heading-wrapper">
									<div class="media-object pull-left">
										
									</div>
									<h2 class="pheading"><?php echo $p3 ?></h2>
								</div>
								<div class="media-body">
									<p class="desc">Want something green to make your home feel like nature itself? This plant is perfect for your needs! Make your home feel calm and peaceful withy this plant!</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- end plants -->

		<!-- start help section -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">NEED <span>HELP?</span></h2>
    				</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-dollar"></i>
								</div>
								<h3 class="media-heading">BUY PLANTS</h3>
							</div>
							<div class="media-body">
								<p>Most of the plants mentioned above will be available in your nearby nurseries.<a href="https://www.google.com/search?q=near+by+nursery+for+plants"> Click Here</a> to see your near by nurseries.</p>
								<p>Want to buy plants and seeds online? <a href="https://www.google.com/search?q=buy+plants+and+seeds+online"> Click Here</a> and get ready to make your garden beautiful!</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<i class="fa fa-info"></i>
								</div>
								<h3 class="media-heading">GARDENING HELP</h3>
							</div>
							<div class="media-body">
								<p>Get your gardening help <a href="https://www.google.com/search?q=gardeners+for+hire">here</a>. Get all your gardening help and make your garden perfect and eternal.</p>
								<p>Need to buy gardening equipments? <a href="https://www.google.com/search?q=buy+gardening+equipment">Here</a> is the list of all you need</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end help section -->

		<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT <span>ETERNAL FLORA</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="#" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">

                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">

                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>

                            <input type="submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>Feel free to contact us regarding any doubt about our services and products.</span>
    						<p><i class="fa fa-phone"></i> +91 7259022836</p>
    						<p><i class="fa fa-envelope-o"></i> abhinavsivakumar3110@gmail.com</p>
    						<p><i class="fa fa-map-marker"></i> VIT Chennai.</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li>
    						<li><a href="#" class="fa fa-facebook"></a></li>
    						<li><a href="#" class="fa fa-twitter"></a></li>
    						<li><a href="#" class="fa fa-youtube"></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Eternal Flora &copy; Copyright 2022. Designed By Abhinav Sivakumar</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

		
   
	</body>
</html>

<script>
			const findState = () => {
			  const status = document.querySelector('.status');
	
			  const success = (position) =>{
			  var st;
			  const latitude = position.coords.latitude;
			  const longitude = position.coords.longitude;
	
			  const geoApiUrl = 'https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en'
	
			  fetch(geoApiUrl)
			  .then(res => res.json())
			  .then(data =>{
				  st=data.principalSubdivision;
				  st="Karnataka";
				  status.textContent=st;
				//   var src="test.php?name=";
				//   src+=st;
				//   window.location.href=src;
				  //console.log(st);
				//   var state = {};
				//   state.name=st;
				//   $.ajax({
				// 	url:"test.php",
				// 	method: "GET",
				// 	data: state,
				// 	success: function(res) {
				// 		console.log(res);
				// 	}	
				// 	})
			  })
			  }
			  const error = () =>{
			  status.textContent = "allow location";
			  }
			  navigator.geolocation.getCurrentPosition(success,error);
			}
			findState();
			
			
	</script>


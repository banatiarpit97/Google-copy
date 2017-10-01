<!doctype html>
<html lang="en">
  <head>
     <link rel="shortcut icon" href="images\title.png" type="image/png">
     <title>
     Google 
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
  </head>

<body>

<header class="header">
	<a href="https://mail.google.com"><input type="button" name="singin" value = "Sign in" class="signin"></a>
	<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
</button>
	<a href="https://www.google.co.in/imghp?hl=en&tab=wi&ei=9FruWNLTL4jbvgTV_aXgDQ&ved=0EKouCBUoAQ" class="images">Images</a>
	<a href="https://mail.google.com" class="gmail">Gmail</a>

</header>

<div class="container">

  <div class="row row1">
    <div class="col-md-offset-5 col-md-6">
		<div >
			<img src="images/goo.png" alt="google-logo" class = "logo">
		</div>
	</div>	
  </div>


    <form action="" method="get" name="search">
   <div class="row row2">
    <div class="col-md-8 col-md-offset-4"> 


		<div class="searchBox">
		<input type="text" name="mainSearch" class="mainSearch">
		</div>

    </div>
   </div>  

    <div class="row row3">
      <div class="col-md-offset-5 col-md-6">

		<div class="searchButtons">
			<input type="submit" name="Google_Search" value="Google Search" class="googleSearch">
			<input type="button" name="Google Search" value="I'm Feeling Lucky" class="lucky">
		</div>
	  </div>
	</div>
</form>	

<?php 

  if($_GET['Google_Search']){
  	if($_GET['mainSearch']){
  		$full = $_GET['mainSearch'];
  		$separate = explode(" ", $full);
  		$len = sizeof($separate);
  		for($i=0;$i<$len;$i++){
            $query .= $separate[$i];
            $query .= "+";
  		}
  		echo "$query";
  		$url = "https://www.google.co.in/search?dcr=0&source=hp&q=".$query."&oq=".$query."&gs_l=psy-ab.3..0l10.8372.11897.0.12461.13.13.0.0.0.0.199.1904.0j12.12.0.dummy_maps_web_fallback...0...1.1.64.psy-ab..1.12.1899...0i131k1.0.s2MeSKQBmlE";
        die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
  	}
  }
?>


	<div class="row row4">
	  <div class="col-md-offset-3 col-md-8">	

		<div class="languages">
		   
			Google.co.in offered in:
			
			
				<a href="">हिन्दी</a>
				<a href="">বাংলা</a>
				<a href="">తెలుగు</a>
				<a href="">मराठी</a>
				<a href="">தமிழ்</a>
				<a href="">ગુજરાતી</a>
				<a href="">ಕನ್ನಡ</a>
				<a href="">മലയാളം</a>
				<a href="">ਪੰਜਾਬੀ</a>
		</div>
	  </div>
	</div>  	
	
</div>   		


<div class="footer">
<hr  >
<footer >
    <a href="https://www.google.co.in/intl/en/ads/?fg=1" class="advertising">Advertising</a>
    <a href="https://www.google.co.in/services/?fg=1#?modal_active=none" class="business">Business</a>
    <a href="https://www.google.co.in/intl/en/about/" class="about">About</a>
    <a href="https://www.google.co.in/intl/en/policies/privacy/?fg=1" class="privacy">Privacy</a>
    <a href="https://www.google.co.in/intl/en/policies/terms/regional.html" class="terms">Terms</a>
    <a href="https://www.google.co.in/preferences?hl=en" class="settings">Settings</a>
</footer>
</div>

  <script src="js/jquery-3.2.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>

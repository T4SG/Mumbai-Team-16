<!DOCTYPE html>
			<?php include("config.inc.php");
$Dbcon = new connection();
$Dbcon->localarea();

			?>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset1.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout1.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/backgroundPosition.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>

<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
	<div class="main">
<!-- header -->
			<header>
			<div class="wrapper">
				<h1><a href="http://ec2-52-69-89-129.ap-northeast-1.compute.amazonaws.com/site/index.html" id="logo">Happy Hearts Funds</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html">Login</a></li>
						<!--<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li> -->
						<li class="end"><a href="http://ec2-52-69-89-129.ap-northeast-1.compute.amazonaws.com/site/yes/index.php#toregister">Register</a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<li id="menu_active"><a href="http://ec2-52-69-89-129.ap-northeast-1.compute.amazonaws.com/site/index.html">Home</a></li>
						<!--<li><a href="Mission.html">Our Mission</a></li> -->
						<!--<li><a href="News.html">About us</a></li> -->
						<!--<li><a href="Help.html">How to Help</a></li> -->
						<li><a href="Contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
			

			<table>
			<form action="survey.php" method="post" role="form" name="f1">
              
             <h3> <tr> <td>School Name: </td> <td> </h3><select name="school">
			<?php 
				   		$SqlContent = $Dbcon->ExecuteQuery("select school_name from school_info s,city c,users u where s.city_id=c.city_id and u.city=c.city_name");
						$totalrows =  $Dbcon->NumRows($SqlContent);
						while($totalrows = $Dbcon->FetchArray($SqlContent))
              {

              	?>


			

			<p class="small-paragraph">
				<option value="<?php echo $totalrows['school_name']; ?>"><?php echo $totalrows['school_name']; ?> </option>
            
            <?php  }
						 ?> 
				</select> </p> </td> </tr>
              <tr> <td  style="fontSize:xx-large;"> School Authority Support : </td> <td><input type="radio" name="schoolauth" value="1"></input> YES </td> <td> <input type="radio" name="schoolauth" value="0"> NO </input> </td>
			 <tr></tr><tr></tr>
			  <tr> <td> Disaster Affected : </td> <td>  <select name="dis"> <option>1</option><option>2</option><option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option></select></td></tr>
			 <tr></tr><tr></tr>

			  <tr> <td> Number of Students : </td> <td><input type="number" name="no" required ></input></td></tr>
			 <tr></tr><tr></tr>

			  <tr> <td> Student Population in the city : </td> <td> <input type="number" name="pop"></input> </td> </tr>
			 <tr></tr><tr></tr>

			  <tr> <td> Destruction to infrastructure: </td> <td><select name="dest"> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option></select></td></tr>
			 <tr></tr><tr></tr>

              <tr>  <td> Community proven part : </td> <td><input type="radio" name="2" value="1" id="y"> YES </input> </td> <td><input type= "radio" name="2" value="0">NO</input></td>
			 <tr></tr><tr></tr>

			  <tr> <td> <p style="display:none;" id="amount"> Amount Sanctioned: </td> <td><input type="number" name="amt"  hint="amount sanctioned" >  </td></tr> </p>
			 <tr></tr><tr></tr>

			  <tr><td>Construction cost: </td> <td> <input type ="number" name="cost"></td></tr>
			 <tr></tr><tr></tr>

			<tr> <td> Ability of new Resource Development: </td> <td> <select name="newreso"> <option>1</option><option>2</option><option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option></select></td></tr>
			 <tr></tr><tr></tr>

	<tr> <td> Prone to earthquake:  </td> <td> <select name="prone"> <option>1</option><option>2</option><option>3</option> <option>4</option> <option>5</option> <option>6</option> <option>7</option> <option>8</option> <option>9</option> <option>10</option></select></td></tr>
	
			 
			 <center><tr><td><input type="submit" name= "submit" value="Submit" onclick="validate()" style="align:centre;"></td></tr></center>
			<center><tr><td><input type="reset" name= "submit" value="reset"  style="align:centre;"></td></tr></center>
			 
			 </table>
			  <script type="text/javascript">
			  function validate()
			  {
			  	var x;
			  	x = document.getElementById("no").value;
			  	if(/^[A-z ]+$/.test(x))
			  	{
			  		alert("Please fill only numbers!");
			  	}
			  }
			  </script>
              </form></p>
			          <script type="text/javascript">
			          $('#y').click(function(){
			          	$('#amount').toggle();
			          });
			         </script>
<!-- footer -->
		<footer>
			<div class="wrapper">
				<a href="index.html" id="footer_logo"><span>Happy </span>Hearts Funds</a>
				<ul id="icons">
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.gif" alt=""></a></li>
				</ul>
			</div>	
			<div class="wrapper">
				<nav>
					<ul id="footer_menu">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="News.html">About us</a></li>
						<li class="end"><a href="Contact.html">Contact</a></li>
					</ul>
				</nav>
				<div class="tel"><span>212.488.2602</span></div>
			</div>

		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script>
$(window).load(function(){
	$('.slider')._TMS({
		preset:'zabor',
		easing:'easeOutQuad',
		duration:800,
		pagination:true,
		banners:true,
		waitBannerAnimation:false,
		slideshow:6000,
		bannerShow:function(banner){
			banner
				.css({right:'-700px'})
				.stop()
				.animate({right:'0'},600, 'easeOutExpo')
		},
		bannerHide:function(banner){
			banner
				.stop()
				.animate({right:'-700'},600,'easeOutExpo')
		}
	})
	$('.pagination li').hover(function(){
		if (!$(this).hasClass('current')) {
			$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo', function(){$(this).parent().css({backgroundPosition:'-20px 0'})});
		}
	},function(){
		if (!$(this).hasClass('current')) {
			$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
		}
	})
})
</script>
</body>
</html>
<?php
require_once('includes/dbconn.php');
/*create a random number*/
$random=rand(1,3);
/*get information data, using the random number generated above*/
$infoQuery_sql = "SELECT * FROM information WHERE info_id =" .$random;
$infoQuery_result = $dbconn->query($infoQuery_sql);

$num_results = $infoQuery_result->num_rows;				//stores the number of rows returned in num_results

$rsInfo = $infoQuery_result->fetch_assoc();


/*get information data, using the random number generated above*/
$infoQuery_sql = "SELECT * FROM information WHERE info_id =" .$random;
$infoQuery_result = $dbconn->query($infoQuery_sql);

$num_results = $infoQuery_result->num_rows;				//stores the number of rows returned in num_results

$rsInfo = $infoQuery_result->fetch_assoc();    			//place result in assoc array


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Place - Mauao (Mount Maunganui)</title>
<meta name="description" content="surfing, swimming, beaches, Tauranga, harbour">
<meta name="author" content="Your Name">
<link rel="stylesheet" href="css/style.css" media ="screen">
<link rel="stylesheet" href="css/print.css" media ="print">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
➥</script>
<![endif]-->
</head>
<body>
	<header></header>
<div id ="container">
	
	<nav>
		<ul>					
		<li><a href="index.php">Home</a></li> 
		<li><a href="activity3.php?act_theme=relax">relax</a></li> 
		<li><a href="activity3.php?act_theme=on the water">on water </a></li> 
		<li><a href="activity3.php?act_theme=in the water">in water</a></li> 
		<li><a href="activity3.php?act_theme=on land">on land</a></li> 
		<li><a href="activity3.php?act_theme=in the sky">in the sky</a></li> 
		<li><a href="activity3.php?act_theme=culture">culture</a></li>
		<li><a href="enquiry.php?act_theme=contact us">Contact us</a></li>
	</ul>
	<br>
	<form action="searchresult.php" method="post" id ="searchform">
	<label><br>Search for an activity or click a link: <input type="text" size ="18" maxlength="30" name="search" /></label>
		<input type="submit" name="submit" value="Search" />
		</form>
	
	</nav>
			
	<div id ="content">
		<section><h2>Mount Maunganui</h2>
		<p>Mauao (Mount Maunganui), famous for its great weather and popular surf and swimming beaches, is a holiday destination for overseas visitors and locals alike. Tauranga and "The Mount" offers relaxation, adventure and culture. There are activities for everyone.</p>
		<figure>
		<img src="images/views_from_mauao.jpg" alt="view from Mauao" width="200" height="133"/>
		<figcaption>Views from Mauao</figcaption>
		</figure>
		<p>The name Tauranga comes from Maori, it roughly translates to "a sheltered anchorage". Tauranga is the largest city in New Zealand with a Maori name instead of a European name.</p>
		<p>Tauranga is a port city located in the western Bay of Plenty region of the North Island of New Zealand. It has an urban population of 116,000 from the June 2008 estimate. Tauranga is the largest city and urban area in the Bay of Plenty. Nationwide, Tauranga is currently New Zealand's fifth largest urban area. It is one of New Zealand's fastest growing regions, with a 14 percent increase in population between the 2001 census and the 2006 census.</p>
		<video  width="373" height="280" controls>
					<source src="videos/surf.mp4"></source>
					<source src="videos/surf.ogv"></source>
					<source src="videos/surf.webm"></source>
		</video>		
</section>

		<article><h2><?php  echo ($rsInfo['info_heading']);?></h2>
			<?php echo ($rsInfo['info_text']);?>
		</article>
	</div>
	
	<?php
	mysqli_close($dbconn);
	?>
	<footer>php Tutorial 2014</footer>
</div>  
</body>
</html>

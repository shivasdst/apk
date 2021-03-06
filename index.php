<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adhyatma Prakash Karyalaya</title>
<link href="php/style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="php/style/style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo"><img src="php/images/aplogo.png" alt="AP-Logo"/></div>
		<div class="logokalash"><img src="php/images/kalash.png" alt="kalash"/></div>
		<div class="title">Adhyātmaprakāsha Kāryālaya</div>
		<div class="subtitle">एतज्ज्ञेयं नित्यमेवात्मसंस्थम् | नातः परं वेदितव्यं हि किञ्चित् ||</div>
		<div id="nav">
			<ul>
				<li><a class="active" href="#">Home</a></li>
				<li><a href="php/about.php">About</a></li>
				<li><a href="php/activity.php">Activities</a></li>
				<li><a href="php/magazine.php">Magazine</a>
					<ul id="magnav">
						<li><a href="php/volumes.php">Volumes</a></li>
						<li><a href="php/articles.php?letter= ">Articles</a></li>
						<li><a href="php/authors.php?letter= ">Authors</a></li>
					</ul>
				</li>
				<li><a href="php/publications.php">Publications</a>
					<ul id="pubnav">
						<li><a href="php/kannada_books.html">Kannada Books</a></li>
						<li><a href="php/sanskrit_books.html">Sanskrit Books</a></li>
						<li><a href="php/english_books.html">English Books</a></li>
					</ul>
				</li>
				<li><a href="php/appeal.php">Appeal</a></li>
				<li><a href="php/news.php">News</a></li>
				<li><a href="php/contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="col1">
			<div class="title">Introduction</div>
			<p>Adhyatmaprakasha Karyalaya was founded in 1920 by Sri Yellambalase Subbarao (1880-1975), a school teacher in Karnataka; (he also used the name Yellambalase Subrahmanya Sharma in some of the books he authored to distinguish himself from Sri Yedatore Subbarao, another author of many books on spirituality). After his retirement he moved to Holenarasipura in 1937 and established the Karyalaya on its own premises there. Sri Subbarao took to Sanyasa in 1948 with the monastic name <span class="emph">Sri Sri Satchidanandendra Saraswati.</span><br /><br />
				Right from his childhood until his nirvana at the age of 96, Swamiji was deeply involved in the study of Vedanta, particularly the works of <span class="emph">Sri Shankaracharya.</span> He lectured extensively and wrote articles and books prolifically on this subject in Kannada, Sanskrit and English, thus earning the epithet Purusha Saraswati.<br /><br />
				The Karyalaya, which was registered as a Public Charitable Trust in 1992, has continued the work for which it was founded using the three principal instruments - lectures, books and monthly magazine and Vidyanilaya - selected by Swamiji for this purpose.<br /><br />
				The Karyalaya has four branches in addition, at Bangalore, Mysore, Mattur (Shimoga) and Rayadurga (A.P.).
			</p>
		</div>
		<div class="col2">
			<div class="widget">
				<div class="title">News updates</div>
				<p>
					<span class="news1"><a href="php/circulars/intro.php" target="_blank">ವೇದಾಂತ ತರಗತಿಗಳಿಗೆ ಪ್ರವೇಶ</a></span>
				</p>
			</div>
			<div class="rule"></div>
			<div class="widget">
				<div class="title">Top viewed books</div>
				<p><?php include("php/topviewed-for-index.php")?></p>
			</div>
			<div class="visitors">
			<table class="visit">
				<th>Visitors</th>
				<tr>
					<td>
					<?php 
						include("php/count.php");
					?>
					</td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="foot_box">
			<div class="fleft">
				&copy;2007-2011 Adhyatmaprakasha Karyalaya, Holenarsipura. All Rights Reserved
			</div>
			<div class="fright">
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li>|</li>
					<li><a href="#">Privacy Policy</a></li>
					<li>|</li>
					<li><a href="php/contact.php">Contact Us</a></li>
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>
	</div>
</div>

</body>
</html>


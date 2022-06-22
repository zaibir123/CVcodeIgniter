<!DOCTYPE html>
<html lang="en">
	<!--Head!-->
	<head>
		<meta charset="UTF-8">
		<title>Simple Curiculum Vitae</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Montserrat", sans-serif;
  background: #F5F5F5;
}
.header {
	padding: 10px;
	text-align: Center;
	font-size: 20px;
	display: fixed;
	background: #F5F5F5;
}

.about {
	text-align: Left;
}

.about h2:after {
	content: '';
    display: block;
    height: 3px;
    background: #7EA829;
    bottom: 0;
}
.about p:before {
	content:'';
	display: block;
	height: 20px;
}
.about p {
	text-align: center;
}
.about p:after {
	content: '';
    display: block;
    height: 5px;
	padding: 10px;
    background: #F5F5F5;
    bottom: 0;
    left: calc(50% - 25px);
}

.experience h2:after {
	content: '';
    display: block;
    height: 3px;
    background: #7EA829;
    bottom: 0;
}

.education h2:after {
	content: '';
    display: block;
    height: 3px;
    background: #7EA829;
    bottom: 0;
}

.hobby h2:after {
	content: '';
    display: block;
    height: 3px;
    background: #7EA829;
    bottom: 0;
}

.footer {
	text-align:center;
}

#arrow {
    border-right:2px solid black;
    border-bottom:2px solid black;
    width:10px;
    height:10px;
    transform: rotate(-45deg);
    margin-top:40px;
}

ul {
  margin: 0.75em 0;
  padding: 0 2.25em;
  list-style: none;
}

li::before { 
  content: "";
  border-color: transparent #111;
  border-style: solid;
  border-width: 0.35em 0 0.35em 0.45em;
  display: block;
  height: 0;
  width: 0;
  left: -1em;
  top: 0.9em;
  position: relative;
}

	</style>
	</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<div class="header">
	<h1 data-aos="fade-right" data-aos-duration="1000">Refaldyka Galuh Pratama</h1>
	<p data-aos="fade-left" data-aos-duration="1000">Jln Putih 45, Surabaya, Indonesia</p>
	<div class="header pe">
	<h5 data-aos="fade-right" data-aos-duration="1000">Mobile : 08123456789</h5> 
	</div>
	</div>
	<div class="about">
		<h2 data-aos="zoom-in" data-aos-duration="1000">About Me</h2>
	</div>
	<div class="about info">
	<p data-aos="zoom-in-right" data-aos-duration="2000"><b>My name is Refaldyka Galuh Pratama. I have a very good communication skills that can build a strong relationships with a client.
	 I really like to make friends and having new experience beside my studies aswell. Currently HTML and CSS is new for me. </b></P>
	</div>
	<div class="experience">
	<h2 data-aos="zoom-in" data-aos-duration="1000">Job Experience</h2>
	<ul>
	<li data-aos="zoom-in-right" data-aos-duration="2000">
	<h4>Personal Business</h4>
	<h5>As Seller and Middleman With Most Positive Feedback</h5>
	</li>
	</ul>
	</div>
	<div class="education">
	<h2 data-aos="zoom-in" data-aos-duration="1000">Education</h2>
	<ul>
	<li data-aos="zoom-in-right" data-aos-duration="2000">
	<h4>2019-Now</h4>
	<h5>Institut Teknologi Sepuluh November</h5>
	</li>
	<li data-aos="zoom-in-right" data-aos-duration="2500">
	<h4>2017-2019</h4>
	<h5>Senior High School 4 Surabaya</h5>
	</li>
	<li data-aos="zoom-in-right" data-aos-duration="2750">
	<h4>2014-2017</h4>
	<h5>Junior High School 12 Surabaya</h5>
	</li>
	</ul>
	</div>
	<div class="hobby">
	<h2 data-aos="zoom-in" data-aos-duration="1000">Hobby</h2>
	<ul>
	<li data-aos="zoom-in-right" data-aos-duration="2000">
	<h4>Travelling</h4>
	</li>
	<li data-aos="zoom-in-right" data-aos-duration="2500">
	<h4>Games</h4>
	</li>
	<li data-aos="zoom-in-right" data-aos-duration="2750">
	<h4>Sport</h4>
	</li>
	</ul>
	</div>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

</body>
</html>

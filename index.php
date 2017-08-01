<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
<div id="plan">
		<div id="nav">
				<ul id="logo"><img src="images\logo.png"></ul>
				<ul id="home"><a href="index.php">HOME</a></ul>
				<ul id="abouttbs"><a href="about.html">ABOUT TBS</a></ul>
				<ul id="resources"><a href="resources.php">RESOURCES</a></ul>
				<ul id="contact"><a href="contact.html">CONTACT</a></ul>
		</div>
		<div id="block1">
			<div id="image"><img src="images\imagetbs.png"></div>
		</div>
		<div class="bg"></div>

		<div id="block2">
			<p class="title">Get to Know us</p>
			<p class="text">Tunis Business School (TBS) at the University of Tunis was officially established on October 25th, 2010.  It is the first and only public business institution in Tunisia using English as the main language of instruction and following the US higher education Academic system.
 			The launch of this institution is in tune with government efforts to boost the Tunisian economy, to improve competitive standards, and to develop off-shore activities and industries...<a href="about.html">read all</a></p>

 			<div id="slide">
				<div>
  					<img class="mySlides" src="images\image4.png" style="width:100%">
  					<img class="mySlides" src="images\image2.png" style="width:100%">
  					<img class="mySlides" src="images\image3.png" style="width:100%">
  					<img class="mySlides" src="images\image1.png" style="width:100%">
				</div>

				<script>
				var myIndex = 0;
				slide();

				function slide() {
    			var i;
    			var x = document.getElementsByClassName("mySlides");
    			for (i = 0; i < x.length; i++) {
       				x[i].style.display = "none";  
    			}
    			myIndex++;
    			if (myIndex > x.length) {myIndex = 1}    
    			x[myIndex-1].style.display = "block";  
    			setTimeout(slide, 1500); // Change image every 1.5 seconds
				}
				</script>
			</div>

		</div>

		<div id="block3">
			<div id="base2">
			<span id="Copyright">Copyright © 2017-2018  team Rawiya</span>
			<img src="images\base2.png">
			</div>
			<div id="base">
				<img src="images\basee.png">
				<img src="images\logo2.png" id="logo2">
			</div>
		</div>

</div>
</div>
</body>
</html>
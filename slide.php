<div class="w3-content w3-left w3-col l12 s12 m12 w3-center">
	<img class="mySlides1 w3-animate-zoom" src="images/s1.jpeg" style="background-size:100%">
	<img class="mySlides1 w3-animate-Zoom" src="images/s2.jpeg" style="background-size:100%">
	<img class="mySlides1 w3-animate-Zoom" src="images/s3.jpeg" style="background-size:100%">
	<img class="mySlides1 w3-animate-Zoom" src="images/s4.jpeg" style="background-size:100%">
	<img class="mySlides1 w3-animate-Zoom" src="images/s5.jpeg" style="background-size:100%">
</div>
<div class="w3-content w3-col l6 s12 m12 w3-cell-row w3-hide">
	<span class="w3-tag w3-orange w3-round-large">
		<span class="w3-xxlarge"><span class='numscroller' data-min='1' data-max='12' data-delay='1' data-increment='1'>12</span></span>
		<br>
		<span class="w3-small">Students</span>
	</span>
	:
	<span class="w3-tag w3-orange w3-round-large">
		<span class="w3-xxlarge">1</span>
		<br>
		<span class="w3-small">Teacher</span>
		
	</span>
	<br>
	<span class="w3-tag w3-orange w3-round-large">
		Incepted @<br>
		<span class="w3-xxlarge"><span class='numscroller' data-min='1' data-max='2006' data-delay='5' data-increment='10'>2006</span></span>
	</span>
	
	<span class="w3-tag w3-orange w3-round-large">
		Upgraded to High School<br>
		<span class="w3-xxlarge"><span class='numscroller' data-min='1' data-max='2015' data-delay='5' data-increment='10'>2015</span></span>
	</span>
	
</div>

<script>
	var myIndex = 0;
	carousel();
	
	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides1");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 9000);    
	}
</script>
		
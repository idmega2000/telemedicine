<?php
	include 'header.php';
	session_start();
?>

		<script type="text/javascript">
		$(document).ready(function () {
		<!-- save images in an array -->
			var imageSource = new Array();
			$('.slider img').each(function(){
			imageSource.push($(this).attr('src'));
			});
			
			//the slide starts here. call all images from array -->
			var sliden= $('.slider li:first-child img');
			var currentImageIndex=-1;
			function slideShow(){
				sliden.addClass('animateImg'+(currentImageIndex+2))
				.fadeIn(1000);
				//<!-- the curent image is checked here to reduce the execution after fadeOut -->
				currentImageIndex++;
					if (currentImageIndex==(imageSource.length-1)){
					currentImageIndex=-1;
					};
				sliden.delay(8000)
				.fadeOut(0, function(){
				sliden.removeClass('animateImg'+(currentImageIndex+1))
				.attr('src', imageSource[currentImageIndex +1]);
				slideShow();
				});
			
			};
			
			//setInterval(slideShow, 10000);
			slideShow();
			
			<!-- slide words slide in part -->
			var currentText=1;
			var totalSlideText= 6; //the total amount of the slides +1
			function slideText(){
				$('.slideword'+(currentText)).animate({'left': '5%'},2000)
				.delay(5000)
					.animate({'left':'-120%'},2000);
					currentText++;
					if (currentText==totalSlideText){
					currentText=1;
					}
	
				
			};
			setInterval(slideText, 9005);	
			slideText();
		
		});
				/*<?php
						include 'neurollogy.php';
					?> */
	</script>
		<body>
			<div class="sliderContainer">
				<ul class="slider">
						  <li class="letbe"><img src="../images/Slider1.JPG" /></li>
						  <li><img src="../images/Slider2.JPG" /></li>
						  <li><img src="../images/Slider3.JPG" /></li>
						  <li><img src="../images/Slider4.JPG" /></li>
						  <li><img src="../images/Slider5.JPG" /></li>

						</ul>
					<div class="slideword1 slideWrite">
					<h2> Ahmadu Bello Teaching Hospital</h2>
					<h2>Your Care is our Specialty</h2>
					<input type="button" onclick="location.href='bookapointment.php'" class="btn btn-primary"  value="Get Started" />
					</div>
					
					<div class="slideword2 slideWrite">
					<h2> With Objective of Providing an exceptional level of Healthcare</h2>
					<input type="button" onclick="location.href='bookapointment.php'" class="btn btn-primary"  value="Get Started" />
					</div>
					
					<div class="slideword3 slideWrite">
					<h2> Equipped With the most sophisticated technologies available</h2>
					<input type="button" onclick="location.href='bookapointment.php'" class="btn btn-primary"  value="Get Started" />
					</div>
					
					<div class="slideword4 slideWrite">
					<h2> Appropriate, skilled and efficient health workers</h2>
					<input type="button" onclick="location.href='bookapointment.php'" class="btn btn-primary"  value="Get Started" />
					</div>
					
					<div class="slideword5 slideWrite">
					<h2> Tertiary Healthcare facility that is second to none in Nigeria</h2>
					<input type="button" onclick="location.href='bookapointment.php'" class="btn btn-primary"  value="Started The Future" />
					</div>	
					
				</div>	
			
			  </div>

			
			<div class="medical-services-box">
			<ul data-box-style="horizontal">
				<li>
					<a href="telemedicine.php" title="" target="_self">
					<figure >
						<img class="wp-post-image" src="../images/1436884497_9.png" alt=""> 
					</figure><h4>TELEMEDICINE</h4></a>
					
				</li>

				<li >
					
					<a style="margin-left:30px" href="neurology.php" title="" target="_self">
						<figure>
						<img src="../images/1436884510_13.png" alt=""></figure>
						<h4>NEUROLOGY</h4>
					</a>
					
				</li>
				<li>
					
					<a style="margin-left:30px" href="cancertreatment.php title="" target="_self">
						<figure>
						<img src="../images/1436884520_1.png" alt=""> 
					</figure>
					<h4>CANCER TREATMENT </h4>
					</a>
				</li>
				<li>
					<a style="margin-left:30px" href="cardiology.php" title="" target="_self">
						<figure>
							<img src="../images/1436884501_7.png" alt=""> 
						</figure>
					<h4>CARDIOLOGY</h4>
					</a>
					
				</li>
				<li>
					
					<a style="margin-left:30px" href="surgicalcenter.php" title="" target="_self">
						<figure>
						<img src="../images/1436884506_8.png" alt=""> 
					</figure>
					<h4>SURGICAL</h4>
					</a>
					
				</li>
				<li>
					<a style="margin-left:30px" href="preventivehealthcare.php" title="" target="_self">
						<figure>
						<img  src="../images/1436884619_3.png" alt=""> 
					</figure>
					<h4>PREVENTIVE</h4>
					</a>
					
				</li>

			</ul>
		</div>
	
				<div class="container-fluid jStart col-sm-12">
				<h3>Hold a one on one session with our specialist online</h3>
			   <h2 class="jStartinner">BOOK AN ONLINE APPOINTMENT WITH US NOW <br/> </h2>
			   
			   <input  type="button" class="btn btn-primary jStartinner"  value="Get Started Today">
			  
			  </div>
	</body/>
		 <!-- footer starts here  -->
	

<?php
	include 'footer.php';
?>
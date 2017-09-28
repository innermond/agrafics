<footer id="contact" class="grey">
	<div class="container">
		<div class="heading">
			<h2>Contact</h2>
		</div>
		<div class="row">
			<div class="max-w">
				<div class="col-sm-12">
					<h4>Adresa</h4>
				</div>
				<div class="col-sm-2"> Piata Rosetti nr 3,<br>
					Bucuresti, Romania </div>
				<div class="col-sm-3"> Phone:+31 (0) 6 300 255 36<br>
					Email: <a href="mailto:office@agrafics.ro">office@agrafics.ro</a> </div>
				<div class="col-sm-3"> <a href="/locatie">Google Maps</a><br>
					<a href="/descarca-harta">Download direction</a> </div>
				<div class="col-sm-4"> Suntem acasă de luni până vineri, între <br>
					10.00 şi 18.00 şi uneori peste program. </div>
			</div>
		</div>
		<div class="add-separator">
			<div class="row">
				<div class="max-w">
					<div class="col-sm-5">
						<p class="social"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </p>
					</div>
					<div class="col-sm-7 text-right">
						<p>Agrafics Communication © 2016 - Toate drepturile rezervate</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- jQuery first, then Bootstrap JS. --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/slick.js"></script> 
<script src="js/scrolling-nav.js"></script> 
<script src="js/jquery.easing.min.js"></script> 
<script>
	$(document).ready(function(){
		$('.nav-tabs li a').click(function(){
			$('.nav-tabs li').removeClass('active');

		});
		$(document).ready(function(ev){
			$('#custom_carousel').on('slide.bs.carousel', function (evt) {
			  $('#custom_carousel .controls li.active').removeClass('active');
			  $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
			})
		});
/*	$('.nav-tabs').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
	appendDots: false,
 
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});*/
		});
	</script>
</body>
</html>

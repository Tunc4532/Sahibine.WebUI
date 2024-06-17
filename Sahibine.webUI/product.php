<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arabalar</title>
	<?php
     include('WebUI.Layout/HeadLinkLayout.php');
    ?>
</head>
<body class="animsition">
	
<?php
include('WebUI.Layout/HeaderLayout.php');
?>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1">
						Bütün İlanlar
					</button>
				</div>
			</div>
	      
			 <div class="row isotope-grid">
			 <?php
			    include('connection.php');
				$sql="select * from cars_tbl where CarSatus = 1";
                     $sorgu=mysqli_query($connect,$sql);
					 while($car=mysqli_fetch_array($sorgu))
                      {
				        echo "<div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item\">" ;
				 
						echo "<div class=\"block2\">";
						echo	"<div class=\"block2-pic hov-img0\">";
						echo	 "<img height=\"180\" src=\"".$car[7]."\" alt=\"IMG-PRODUCT\">";
						echo	   "<a href=\"product-detail.php?id=".$car[0]."\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 \">";
						echo		 "Detaylar";
						echo       "</a>";
						echo   "</div>";

						echo   "<div class=\"block2-txt flex-w flex-t p-t-14\">";
						echo	 "<div class=\"block2-txt-child1 flex-col-l \">";
						echo		"<a href=\"/Sahibine.webUI/product-detail.php\" class=\"stext-104 cl4 hov-cl1 trans-04 \">";
						echo			$car[1];
						echo		"</a>";
						
						echo		"<span class=\"stext-105 cl3\">";
						echo			$car[8]."₺"; 
						echo		"</span>";
						echo	  "</div>";
						echo    "</div>";
						echo "</div> ";					
				        echo "</div>";
				}
				?>	
			 </div>
			
			 
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Satın Alım
				</a>
			</div>
		

		</div>
	</div>

	<?php
include('WebUI.Layout/FooterLayout.php');
?>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
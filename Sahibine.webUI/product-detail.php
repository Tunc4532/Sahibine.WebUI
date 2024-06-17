<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<?php
     include('WebUI.Layout/HeadLinkLayout.php');
    ?>
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
							
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<?php
                       include('WebUI.Layout/HeaderLayout.php');
                    ?>

				</nav>
			</div>	
		</div>
	</header>	

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
 
		<?php
		// Güvenli bir şekilde id'yi aldık
				$id = $_GET['id'];

				// Veritabanı bağlantısı yapın
				include('connection.php');

				// Veritabanından kaydı aldık
				$sql = "SELECT * FROM cars_tbl WHERE CarId = $id";
				$result = mysqli_query($connect, $sql);

				// Sonucu kontrol edin ve işleyin
				if (mysqli_num_rows($result) > 0) {
					// Kayıt bulundu, işleyin
					$row = mysqli_fetch_assoc($result);

					echo"<div class=\"row\">";
					echo"<div class=\"col-md-6 col-lg-7 p-b-30\">";
					echo "<div class=\"p-l-25 p-r-30 p-lr-0-lg\">";
					echo	"<div class=\"wrap-slick3 flex-sb flex-w\">";
					echo		"<div class=\"wrap-slick3-dots\"></div>";
					echo		"<div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>";
					echo	"<div class=\"slick3 gallery-lb\">";
					echo	"<div class=\"item-slick3\" data-thumb=\"" . $row['CarImage2'] . "\">";
					echo	"<div class=\"wrap-pic-w pos-relative\">";
					echo					"<img src=\"" . $row['CarImage2'] . "\" alt=\"IMG-PRODUCT\">";

					echo					"<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"" . $row['CarImage2'] . "\">";
					echo						"<i class=\"fa fa-expand\"></i>";
					echo					"</a>";
					echo				"</div>";
					echo			"</div>";

					echo		"<div class=\"item-slick3\" data-thumb=\"" . $row['CarImage3'] . "\">";
					echo				"<div class=\"wrap-pic-w pos-relative\">";
					echo				"<img src=\"" . $row['CarImage3'] . "\" alt=\"IMG-PRODUCT\">";

					echo				"<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"" . $row['CarImage3'] . "\">";
					echo					"<i class=\"fa fa-expand\"></i>";
					echo				"</a>";
					echo			"</div>";
					echo			"</div>";

					echo "<div class=\"item-slick3\" data-thumb=\"" . $row['CarImage'] . "\">";
					echo			"<div class=\"wrap-pic-w pos-relative\">";
					echo				"<img src=\"" . $row['CarImage'] . "\" alt=\"IMG-PRODUCT\">";

					echo				"<a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"" . $row['CarImage'] . "\">";
					echo					"<i class=\"fa fa-expand\"></i>";
					echo				"</a>";
					echo				"</div>";
					echo			"</div>";
					echo		"</div>";
					echo       "</div>";
					echo	"</div>";
					echo "</div>";
					
					echo "<div class=\"col-md-6 col-lg-5 p-b-30\">";
					echo	"<div class=\"p-r-50 p-t-5 p-lr-0-lg\">";
					echo	"<h4 class=\"mtext-105 cl2 js-name-detail p-b-14\">";
					echo	    "İlan Sahibi İletişim :" . $row['PersonPhone'];
					echo	"</h4>";
					echo    "<br/>";
					echo    "<br/>";
					echo	"<span class=\"mtext-106 cl2\">";
					echo	    "Satıcı Bilgileri :". $row['NameSurname'];
					echo	"</span>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";	
					echo	"<span class=\"mtext-106 cl2\">";
					echo	    "Araç Fiyatı :". $row['Pricing']."₺";
					echo	"</span>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";
					echo	"<span class=\"mtext-106 cl2\">";
					echo	    "Araç Model :". $row['Model'];
					echo	"</span>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";
					echo    "<br/>";
					echo	"<span class=\"mtext-106 cl2\">";
					echo	    "Araç Marka :". $row['Brand'];
					echo	"</span>";

					echo"</div>";
					echo"</div>";
					echo"</div>";

					echo"<div class=\"bor10 m-t-50 p-t-43 p-b-40\">";

					echo"<div class=\"tab01\">";

					echo	"<ul class=\"nav nav-tabs\" role=\"tablist\">";
					echo		"<li class=\"nav-item p-b-10\">";
					echo		"<a class=\"nav-link active\" data-toggle=\"tab\" href=\"#description\" role=\"tab\">Açıklama</a>";
					echo	"</li>";

					echo	"<li class=\"nav-item p-b-10\">";
					echo		"<a class=\"nav-link\" data-toggle=\"tab\" href=\"#information\" role=\"tab\">Araç Özellikleri</a>";
					echo	"</li>";
					echo"</ul>";

					echo"<div class=\"tab-content p-t-43\">";

					echo	"<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\">";
					echo	"<div class=\"how-pos2 p-lr-15-md\">";
					echo		"<p class=\"stext-102 cl6\">";
						echo			 $row['Description'];
									echo			"</p>";
									echo		"</div>";
									echo	"</div>";

						echo	"<div class=\"tab-pane fade\" id=\"information\" role=\"tabpanel\">";
						echo"<div class=\"row\">";
						echo	"<div class=\"col-sm-10 col-md-8 col-lg-6 m-lr-auto\">";
						echo		"<ul class=\"p-lr-28 p-lr-15-sm\">";
						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Model Yılı";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['ModelYear'];
						echo				"</span>";
						echo			"</li>";

						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Yakıt Türü";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['Fuel'];
						echo				"</span>";
						echo			"</li>";

						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Vites Tipi";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['GearType'];
						echo				"</span>";
						echo			"</li>";

						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Araç Rengi";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['Color'];
						echo				"</span>";
						echo			"</li>";

						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Plaka";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['PlateNumber'];
						echo				"</span>";
						echo			"</li>";

						echo			"<li class=\"flex-w flex-t p-b-7\">";
						echo				"<span class=\"stext-102 cl3 size-205\">";
						echo					"Durumu";
						echo				"</span>";

						echo				"<span class=\"stext-102 cl6 size-206\">";
						echo					 $row['FirstOrSecond'];
						echo				"</span>";
						echo			"</li>";
							echo		"</ul>";
									echo	"</div>";
									echo"</div>";
									echo"</div>";
						echo	"</div>";
					echo"</div>";
				echo"</div>";

		} else {
			// Kayıt bulunamadı
			echo "Kayıt bulunamadı.";
		}

		// Veritabanı bağlantısını kapatın
		mysqli_close($connect);


       ?>
		</div>
	</section>


<?php
include('WebUI.Layout/ProductLayout.php');
?>
		

		<?php
include('WebUI.Layout/FooterLayout.php');
?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


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
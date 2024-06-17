
    <?php
     include('connection.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<?php
     include('WebUI.Layout/HeadLinkLayout.php');
    ?>
</head>
<body class="animsition">
	
    <?php
      include('WebUI.Layout/HeaderLayout.php');
    ?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20230917/pngtree-black-background-vector-image_13930164.jpg');">
		<h6 class="ltext-105 cl0 txt-center">
			İlan Yayınlama && İlan Kaldırma Aşağıdan Yapabilirsiniz
		</h6>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<!-- Yeni İlan Yayınlama İşlemi-->
					<form action="PagesPHP/carkaydetok.php" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							İlan Yayınlama İşlemleri
						</h4>
                        
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="Brand" placeholder="Araç Markası*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="Model" placeholder="Araç Modeli*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="PlateNumber" placeholder="Araç Plakası" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="Color" placeholder="Araç Rengi" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="FirstOrSecond" placeholder="Araç Durumu Sıfır veya İkinci El*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarImage" placeholder="Araç Görsel Url*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="Pricing" placeholder="Araç Fiyatı*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="GearType" placeholder="Araç Vites Türü*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="Fuel" placeholder="Araç Yakıt Türü*" required>
						</div>
                        <p>Araç Model Yılı*</p>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="ModelYear" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="PersonPhone" placeholder="İlan Sahibi İletişim*" required>
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarImage2" placeholder="Araç Görsel Url*" required>
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarImage3" placeholder="Araç Görsel Url*" required>
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="NameSurname" placeholder="Adınız Soyadınız*" required>
						</div>
						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="Description" placeholder="Araç Açıklaması" required></textarea>
						</div>
						<button type="submit" value="Ekle" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							İlanı Yayınla
						</button>

					</form>

                      </br></br></br></br>

					 	<!-- İlan Kaldırma İşlemi-->
						 <form method="post" action="PagesPHP/carStatusFalseok.php">
							<h4 class="mtext-105 cl2 txt-center p-b-30">
								İlan Kaldırma İşlemi
							</h4>

							<div class="bor8 m-b-20 how-pos4-parent">
								<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="CarId" placeholder="Araba İlan Numarası*" required>
							</div>

							<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
								İlanı Kaldır
							</button>
						</form>

				</div>

                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					
						<!-- Araç Satış Sonrası Bilgilerin Gönderilmesi İşlemi-->
                    <form action="PagesPHP/carsatıskaydetok.php" method="post">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Araç Satış Bilgilerinin Girişi
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CoustomerName" placeholder="Alıcı Ad Soyad*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="CoustomerPhone" placeholder="Alıcı Telefon*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="CoustomerTC" placeholder="Alıcı TC*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="PersonName" placeholder="Satıcı Ad Soyad*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="PersonPhone" placeholder="Satıcı Telefon*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="PersonTC" placeholder="Satıcı TC*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarBrand" placeholder="Araba Markası*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarModel" placeholder="Araba Modeli*" required>
						</div>
                        <p>Araba Model Yılı*</p>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="CarModelYear" placeholder="Araba Model Yılı*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarPlateNumber" placeholder="Araba Plakası" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarColor" placeholder="Araba Rengi*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarFirstOrSecond" placeholder="Araç Durumu Sıfır veya İkinci El*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="CarImage" placeholder="Araba Görsel Url*" required>
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="CarPicing" placeholder="Satış Fiyatı*" required>
						</div>
                        <p>Araba Satış Tarihi*</p>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" name="CarSalesDate" required>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" required>
							Satış Bilgilerini Gönder
						</button>
					</form>
					</br></br></br></br></br></br></br></br></br></br>

						<form method="post" action="PagesPHP/carStatusTrueok.php">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							İlan Aktifleştirme İşlemi
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="CarId" placeholder="Araba İlan Numarası*" required>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							İlanı Aktifleştir
						</button>
						</form>
				</div>

			</div>
		</div>
	</section>	
	



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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
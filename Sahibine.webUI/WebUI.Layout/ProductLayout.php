<html>
    	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Öne Çıkanlar
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Öne Çıkan Araçlar
					</button>
				</div>
				

			</div>

			<div class="row isotope-grid">


				<?php
			      include('connection.php');
				   $sql="SELECT * FROM cars_tbl where CarSatus = 1 LIMIT 4";
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
				<a href="/Sahibine.webUI/product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Tümünü Gör
				</a>
			</div>
		</div>
	</section>
</html>
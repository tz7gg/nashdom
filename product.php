<?php include "header.php"; ?>

<?php 
	$id = $_GET["id"];
 ?>

	<div class="block-otovare">
		<div class="container">
			<div class="row">
				<?php 
	              $result = mysqli_query($link,"SELECT * FROM product WHERE id='$id'");
	              if (mysqli_num_rows($result) > 0) {
	                while ($row = mysqli_fetch_assoc($result)) {	                	
	                  echo '
	                    <div class="col-lg-5">
							<div class="block-otovare__img'.$row["id"].'">
								<style>
			                		.block-otovare__img'.$row["id"].' {
				                		background: url("../images/'.$row["img"].'.jpg") no-repeat center;	                		
				                		min-height: 500px;
				                		background-size: cover;
				                		text-align: center;
									    border: 2px solid #ddd9d8;
									    border-radius: 10px;
									    margin-bottom: 30px;
			                		}
			                	</style>
							</div>		
						</div>
						<div class="col-lg-7">
							<div class="block-otovare_name">
								<h2>'.$row["name"].'</h2>
							</div>
							<div class="block-otovare_sale_price">';
								if ($row["sale_price"] != '')  {
									echo '<p><span>'.$row["sale_price"].' руб.</span>Цена по акции</p>';
								};
							echo '								
							</div>
							<div class="block-otovare_price">
								<p>'.$row["price"].' руб.</p>
							</div>
							<div class="block-otovare_price_text">						
							<p>'.$row["description"].'</p>
							</div>
							<div class="block-otovare-zayavka">
								<a data-toggle="modal" data-target="#exampleModal" href="">Оставить заявку</a>
							</div>		
						</div>
	                  ';
	                };  
	              } else {
	              	echo "Товар не найден :(";
	              }             
	            ?>				
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
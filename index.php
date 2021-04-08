<div class="block-1">
  <?php include "header.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 slogan">
        <h1>Наш дом - <br>наше отражение</h1>
      </div>
      <div class="col-lg-12 opisanie">
        <h2>Деревянные изделия<br>ручной работы для сада и дома</h2>
      </div>
      <div class="col-lg-5 zayavka">
       <a data-toggle="modal" data-target="#exampleModal" href="">Оставить заявку</a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 flower-box">
            <img class="flower" src="images/s1200.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<div class="block-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="zagolovok">
          <h1>Мебель из массива от производителя</h1>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="podzagolovok">
          <h2>Производство находится в Санкт-Петербурге, работаем по Ленинградской области.</h2>
        </div>
      </div>
    </div>
   </div> 
<div class="container">
      <div class="row">
        <div class="col-lg-2">
          <img src="images/gazel.png" alt="">
       </div>
       <div class="col-lg-5 align-self-center">
          <div class="content">
            <h2>Доставка на участок</h2>
            <h3>Доставляем изделия на ваш участок собственным транспортом</h3>
          </div>
       </div>
      </div>
  </div> 
<div class="container">
      <div class="row">
        <div class="col-lg-2">
          <img src="images/topor.png" alt="">
       </div>
       <div class="col-lg-5 align-self-center">
          <div class="content">
            <h2>Собственное производство</h2>
            <h3>Поставка изделий от производителя без наценки.</h3>
          </div>
       </div>
      </div>
    </div>
<div class="container">
      <div class="row">
        <div class="col-lg-2 kolodec">
          <img src="images/kolodec.png" alt="">
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="content">
            <h2>Сборка на вашем участке</h2>
            <h3>Установим и соберем изделие быстро и качественно.</h3>
          </div>
        </div>
      </div>  
    </div> 
           
</div>

<div class="block-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="zagolovok block-3__zagolovok">
          <h1>Мы рекомендуем</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-theme">
              <?php 
                $result = mysqli_query($link,"SELECT * FROM product WHERE recommend='yes'");
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {                    
                    echo '
                      <div class="item">
                        <div class="product_img'.$row["id"].'">
                        <style>
                        .product_img'.$row["id"].' {
                          background: url("images/'.$row["img"].'.jpg") no-repeat center;
                          min-height: 240px;
                          background-size: cover;
                        }
                      </style>  
                        
                        </div> 
                          <div class="product_name">
                            <p>'.$row["name"].'</p>
                          </div>
                          <div class="product_description">
                            <p>'.$row["mini_description"].'</p>
                          </div>';
                              if ($row["sale_price"] != '')  {
                                  echo'
                                  <div class="product_price sale_price">
                                    <p><span>'.$row["sale_price"].' руб.</p>
                                  </div>';
                                }else {
                                  echo'
                                  <div class="product_price">
                                  <p>'.$row["price"].' руб.</p>
                                </div>';
                                }; echo '
                          <div class="product_look">
                            <a href="product.php?id='.$row["id"].'">смотреть</a>
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
    <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4 katalog">
        <a href="catalog.php">Перейти в каталог</a>
      </div>
      <div class="col-lg-4"></div>
    </div>
  </div>
</div>

<?php include 'footer.php';?>
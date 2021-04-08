<div class="block-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 subscribe">        
        <p>Вступи в официальную группу ВКонтакте чтобы узнавать самые свежие новости и акции</p>
        <a href="https://vk.com/rosha_m">Подпишись</a>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-3 menu">
        <p>Меню</p>
        <a href="index.php">Главная</a>
        <a href="catalog.php">Каталог</a>
        <a href="poeskizam.php">Изделия по эскизам</a>
        <a href="contacts.php">Контакты</a>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-3 forma">
        <form id="mail-footer" action="mail-footer.php" method="post">
          <p>Телефон</p>
          <input id="name" type="text">
          <p>Имя</p>
          <input id="phone" type="text"><br>
          <button id="btn-submit-footer" type="submit" class="my-btn btn-primary btn-submit-footer">Заказать звонок</button>
          </form>
        </div>
        
      </div>
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 created">
          <p>created by <a href="http://gorodvkarmane.com/">gorodvkarmane.com</a></p>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </div>
</div>   


<div class="bd-example">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-header-text">
            <p>Заполните форму и мы свяжемся с <br>вами в течение дня</p>
          </div>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <div class="modal-body">
          <form id="submit" method="post">
            <div class="form-group">
              <label for="name-main" class="form-control-label">Имя:</label>
              <input type="text" class="form-control" id="name-main">
            </div>
            <div class="form-group">
              <label for="phone-main" class="form-control-label">Телефон:</label>
              <input type="text" class="form-control" id="phone-main">
            </div>
            <div class="form-group">
              <label for="message-main" class="form-control-label">Сообщение:</label>
              <textarea  class="form-control" id="message-main" rows="5"></textarea>
            </div>
            <div class="modal-footer justify-content-center">
          <button type="submit" id="btn-submit" class="btn btn-submit btn-primary my-btn">Отправить</button>        
          </div>
          </form>
        </div>        
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>
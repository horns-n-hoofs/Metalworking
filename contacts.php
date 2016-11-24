<!doctype html>
 <html>
  <head>
   <meta charset="utf-8" />
   <meta name="robots" content="index, follow" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <title>Metalworking</title>   
   <link href="css/style.css" type="text/css" rel="stylesheet" />               
   <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
   <![endif]-->
  </head>
  <body>
    <div class="start"></div>
    <ul class="bg">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <header>
      <div id="logo">        
        <a href="index.php"><img src="images/logo.png" alt="" /><p>OFT</p></a>                
      </div>
      <nav id="menu">
        <ul>
          <li><a href="index.php">Главная</a></li>
          <li class="sub">
            <a>Наши услуги</a>
            <ul class="submenu">
              <li><a href="turning.html">Токарка</a></li>
              <li><a href="milling.html">Фрезеровка</a></li>
              <li><a href="cutting.html">Резка</a></li>
              <li><a href="painting.html">Покраска</a></li>
            </ul>
          </li>
          <li><a class="active" href="contacts.php">Контакты</a></li>
        </ul>
      </nav>
    </header>   
    <main>
      <h1 class="animtext serv">Наши контакты</h1>
      <hr class="contacts_hr">      
      <section class="content contacts">
        <div class="contacts_screw cont_screw_tl"></div>
        <div class="contacts_screw cont_screw_tr"></div>
        <div class="contacts_screw cont_screw_br"></div>
        <div class="contacts_screw cont_screw_bl"></div>           
        <div id="content-cell">               
          <p>Мы принимаем заказы по Киеву и всей Украине!</p>
          <p>Связаться с нами Вы можете позвонив, либо заполнив форму обратной связи. Вы также можете прикрепить файлы к форме обратной связи в следующих форматах: *.jpg, *.jpeg, *.png, *.gif.</p>
          <p class="noindent"><span>Наш телефон:</span></p>
          <address>+380 (98) 296 13 21</address>
          <p class="noindent"><span>E-mail:</span></p>
          <a href="mailto:oft2016@yahoo.com">oft2016@yahoo.com</a>
        </div>
        <?php
          require "php/form_processor.php";
          $attach_error = $attach_OK = "";
          if($_SERVER["REQUEST_METHOD"]=="POST"){
          $attach_error = compose_and_send_mail();
          if(!$attach_error){
          $attach_OK = "Ваше сообщение успешно отправлено!";
          }
          }
        ?>        
        <div id="content-form">      
          <form method="POST" id="feedback-form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>#content-form">     
            <p class="contacts_form">Ваше имя: <span class="error">* </span></p>
            <input class="box" type="text" name="nameFF" required placeholder="Имя" x-autocompletetype="name">
            <p class="contacts_form">E-mail для связи: <span class="error">* </span></p>
            <input class="box" type="email" name="contactFF" required placeholder="Адрес электронной почты" onkeyup="checkEmail(this.value)" x-autocompletetype="email">
            <span id="email"></span>
            <p class="contacts_form">Телефон: </p>
            <input class="box" type="tel" id="phone" name="telFF" placeholder="(XXX) XXX-XXXX" x-autocomplete="tel">
            <p class="contacts_form">Ваше сообщение: <span class="error">* </span></p>
            <textarea class="box" name="messageFF" required rows="5"></textarea>
            <p class="contacts_form">Прикрепить файл:
            <input type="checkbox" name="attachPic" onchange="showAttachFileDialog(this.checked)"/></p>
            <p class="error"><?php echo $attach_error; ?></span>
            <p class="OK"><?php echo $attach_OK; ?></span>
            <div id="ajax-attachfile"></div>
            <p class="error-text">* обязательные поля</p>
            <div class="submit"><input type="submit" value="Отправить"></div>
          </form>
        </div>        
      </section>  
    </main>
    <footer>
      <p>© 2016<a href="index.php"> OFT</a></p>
    </footer>
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>    
    <script type="text/javascript" src="js/adapfont.js"></script>
    <script type="text/javascript" src="js/ajaxAttachFile.js"></script>
    <script type="text/javascript" src="js/ajax-checkemail.js"></script>    
  </body>
 </html>
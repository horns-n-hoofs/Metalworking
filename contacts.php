<!doctype html>
 <html>
  <head>
   <meta charset="utf-8" />
   <meta name="keywords" content="oft, офт, металлообработка, обработка, токарка, токарная обработка, фрезерование, порезка, покраска, киев, изделия из металла, обработка деталей, изготовление заготовок" />
   <meta name="description" content ="Вы можете заказать у нас обработку и изготовление деталей любой сложности. Мы работаем с ведущими машиностроительными предприятиями Украины и рады выполнить Ваш заказ в кратчайшие сроки" />
   <meta name="robots" content="index, follow" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <meta name="google-site-verification" content="e6Stua904nMQXLb8ncUUXROjOCLNEG6heKeR6OG-kS4" />
   <meta name="yandex-verification" content="a748d837dc8d270e" />
   <title>OFT-Контакты</title>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="icon" href="/favicon.ico" type="image/x-icon">   
   <link href="css/style.css" type="text/css" rel="stylesheet" />               
   <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
   <![endif]-->
   <!-- Google Analytics -->
   <script>   
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88777928-1', 'auto');
    ga('send', 'pageview');  
   </script>
   <!-- //Google Analytics -->
   <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter41481579 = new Ya.Metrika({
                        id:41481579,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/41481579" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
   <!-- /Yandex.Metrika counter -->
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
      <div id="mobile">
        <div id="mobile_logo">        
          <a href="index.php"><img src="images/logo.png" alt="" /><p>OFT</p></a>                
        </div>
        <nav id="dropdown">
          <div class="menu_icon">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <div class="dropdown-menu">
            <ul class="dropdown-ul">
              <div class="close-li">
                <li><a href="index.php">Главная</a></li>
                <li><a href="turning.html">Токарка</a></li>
                <li><a href="milling.html">Фрезеровка</a></li>
                <li><a href="cutting.html">Резка</a></li>
                <li><a href="painting.html">Покраска</a></li>
                <li class="active"><a href="contacts.php">Контакты</a></li>
              </div>            
            </ul>
          </div>
        </nav>
      </div>
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
          <p class="noindent"><span>E-mail:</span></p>
          <a href="mailto:oft-office@ukr.net">oft-office@ukr.net</a>
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
      <p>© 2016<a href="index.php"> OFT.</a> Designed by Alexander Devitsky</p>
    </footer>
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>    
    <script type="text/javascript" src="js/adapfont.js"></script>
    <script type="text/javascript" src="js/dropdown-menu.js"></script>
    <script type="text/javascript" src="js/ajaxAttachFile.js"></script>
    <script type="text/javascript" src="js/ajax-checkemail.js"></script>    
  </body>
 </html>
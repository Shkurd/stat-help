<!DOCTYPE html>
<html lang="ru">

<head>

    <!— For VK —>
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1303943-1ym6N"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1303943-1ym6N" style="position:fixed; left:-999px;" alt=""/></noscript>
    <!— End for VK —>

    <!— Facebook Pixel Code —>
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2091079680994434');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2091079680994434&ev=PageVi.."
    /></noscript>

    <script>
        fbq('track', 'Contact');
    </script>
    <!— End Facebook Pixel Code —>

    <!— Global site tag (gtag.js) - Google Analytics —>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109239508-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109239508-1');
    </script>
  
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery.js"></script>  <!-- подключаем jquery-->
    <!--<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script> подключаем jquery ajax-->

    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">   <!--иконический шрифт fontawesome -->

    <link href="bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="bootstrap/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <link href="css/mycss.css" rel="stylesheet" media="all"> <!--собственный css подключаем-->
    <link href="css/media.css" rel="stylesheet" media="all"> <!--media запросы подключаем -->
    <link href="css/navbar.css" rel="stylesheet" media="all"> <!-- кастомизация навбара -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> <!--animate.css -->

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49512469 = new Ya.Metrika2({
                    id:49512469,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49512469" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon"/>

    <meta name="description" content="Контакты и форма обратной связи. Выберите оптимальный для Вас способ связаться со мной.">
    <meta name="keywords" content="E-mail, Viber, связь, контакты, сообщение, Skype, координаты, WhatsApp, написать">

    <title> Контакты &mdash; Помощь по статистике </title>

    <script src="//code.jivosite.com/widget/5LdBm6IIzR" async></script>

</head>
<body>

<header>
    <?php include("header.php"); ?>
</header>

<article>
    <section>
        <h1> Контакты </h1>
        <div class="contener-fluid">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="MainContent">
                        <p> Друзья!<br>
                            Свяжитесь со мной наиболее удобным из нижеперечисленных способов (пердпочтительнее VK, WhatsApp или Viber, Telegram), и я оперативно отвечу на любые интересующие Вас вопросы. </p>
                        <br>
                        <ul>
                            <li>
                                Моя группа<a href="https://vk.com/club29928536" title="Перейти в группу ВК" target="_blank"> Вконтакте </a>
                            </li>
                            <li>
                                <a href="mailto:shkurdova@gmail.com">shkurdova@gmail.com</a>
                            </li>
                            <li>
                                Skype: Lana_bel86
                            </li>
                            <li>
                                WhatsApp, Viber: +375 29 639-73-48
                            </li>
                            <li>
                                <a href="https://telegram.me/Lana_bel86">Telegram: Lana_bel86</a>
                            </li>
                            <li>
                                Или воспользуйтесь формой обратной связи:
                            </li>
                        </ul>
                        <br>
                        <!-- начало формы + PHP -->

                        <?php
             if (isset($_POST["submit"])) {
                 $name = $_POST['name'];
                 $email = $_POST['email'];
                 $message = $_POST['message'];
                 $human = intval($_POST['human']);
                 $from = 'Поступило сообщение через форму связи - Contact Form';
                 $to = 'shkurdova@gmail.com';
                 $subject = 'Поступило сообщение с сайта';
               
               	 // Ниже код рекапчи гугл.
                /*/if (!$_POST['g-recaptcha-response']) {
                     $errName = 'Вы не прошли защиту от роботов, поробуйте еще раз';
                 }
                 */
               	 $urlGooge	= 'https://www.google.com/recaptcha/api/siteverify';
                 $secretKay = "6LeN4E0UAAAAAGEfnjMjmPB9HeEZMueYVBWLJ8NN";
               	 $myQuery =$urlGooge.'?secret='.$secretKay.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
                 $data = json_decode(file_get_contents($myQuery));
                 $dataSuccess = $data->success;
               	 if	(!$dataSuccess) {
                 $errDataSuccess = 'Вы не поставили галочку, подтверждающую, что Вы не робот.';
                 }
                 //Конец кода рекапчи гугла.
               

                 $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                 // Check if name has been entered
                 if (!$_POST['name']) {
                     $errName = 'Введите свое имя, пожалуйста.';
                 }

                 // Check if email has been entered and is valid
                 if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                     $errEmail = 'Введите, пожалуйста, корректный адрес электронной почты.';
                 }

                 //Check if message has been entered
                 if (!$_POST['message']) {
                     $errMessage = 'Пожалуйста, напишите Ваше сообщение.';
                 }
                 //Check if simple anti-bot test is correct
                 if ($human !== 3) {
                     $errHuman = 'Пожалуйста, верный ответ (числом).';
                 }

         // If there are no errors, send the email
         if (!$errName && !$errEmail && !$errMessage && !$errHuman && $dataSuccess) {
             if (mail ($to, $subject, $body, $from)) {
                 $result='<div class="alert alert-success"> Благодарим, Ваше сообщение успешно отправлено.  </div>';
                    } else {
                    $result='<div class="alert alert-danger"> Ваше сообщение не было отправлено. Попробуйте еще раз. </div>';
                    }
                    }
                    }
                    ?>

                    <form class="form-horizontal" role="form" method="post" action="contacts.php">
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label"> Ваше имя </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder=" Введите Ваше имя " value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label"> Ваш email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="пример@mail.ru" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label"> Сообщение </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message" placeholder="В сообщении, по желанию, можете указать дополнительные способы связи с Вами (например номер телефона в международном формате, skype, viber, ссылку на страницу vk и т.д.)"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">2+1=?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder=" Ответ (цифрами)">
                               
                            </div>
                        </div>
       
                        <div class="form-group">
                          
                           <div class="col-sm-10 col-sm-offset-2">  
                           	   <div class="g-recaptcha" data-sitekey="6LeN4E0UAAAAAOyRmeGrW9RDhuMaUwKdQz8BPcz0">
                                </div>
                             <?php echo "<p class='text-danger'>$errDataSuccess</p>";?>
                             <br/>
                            </div> 
                          
                            <div class="col-sm-10 col-sm-offset-2">
                              
                                <input id="submit" name="submit" type="submit" value="Отправить сообщение" class="btn button">
                            </div>
                        </div>


                    </form>
                    <!-- конец формы + PHP -->

                    </div> <!-- MainContent -->
                </div> <!-- col-sm-2 col-xs-12 -->
                <div  class="col-sm-3 col-xs-12">
                    <aside>
                        <?php include("aside.php"); ?>
                    </aside>
                </div>
            </div> <!-- row -->
        </div> <!-- contener-fluid -->

    </section>
</article>

<footer>
    <?php include("footer.php"); ?>
</footer>

<!--<script src="js/importComponents.js"></script>  подключаем header, aside, footer -->

</body>
</html>

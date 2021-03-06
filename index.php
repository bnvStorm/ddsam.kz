<?php require 'inc/header.php'; ?>
<div class="slider-slick app-pages">
   <div class="slider-entry">
      <img class="lazyload vdesc" src="img/02.jpg" alt="">
      <img class="lazyload vmob" data-src="img/slider1.jpg" alt="">
      <div class="overlay"></div>
      <div class="caption">
         <div class="container">
            <h2>При заказе от 5000 тг. стрит-ролл "Цезарь" в подарок!</h2>
            <p>*Подробности уточняйте у оператора </p>
            <!--  <a class="button" href="/">Shop Now</a> -->
         </div>
      </div>
   </div>

   <div class="slider-entry">
      <div class="overlay"></div>
      <img class="lazyload vdesc" data-src="img/01.jpg" alt="">
      <img class="lazyload vmob" data-src="img/slider2.jpg" alt="">
      <div class="caption">
         <div class="container">
          <h2>Подпишись на наш инстаграм, чтобы не пропустить акции!</h2>
          <a class="inst" target="_blank" rel="nofollow" href="https://www.instagram.com/ddsam_ukg"><img src="/img/inst.png" alt=""><span>ddsam_ukg</span></a>
<!--             <p>Find your need now</p>
   <a class="button" href="/">Shop Now</a> -->
</div>
</div>
</div>   
<div class="slider-entry">
   <!--       <div class="overlay"></div> -->
   <img style="object-fit: contain;" class="lazyload vdesc" data-src="img/kombo1.jpg" alt="">
   <img style="object-fit: contain;" class="lazyload vmob" data-src="img/mkombo1.jpg" alt="">
   <div class="caption">
      <div class="container">
         <!--    <h2>НОВИНКА</h2> -->
<!--             <p>Find your need now</p>
   <a class="button" href="/">Shop Now</a> -->
</div>
</div>
</div>   <div class="slider-entry">
   <!--       <div class="overlay"></div> -->
   <img style="object-fit: contain;" class="lazyload vdesc" data-src="img/kombo2.jpg" alt="">
   <img style="object-fit: contain;" class="lazyload vmob" data-src="img/mkombo2.jpg" alt="">
   <div class="caption">
      <div class="container">
         <!--    <h2>НОВИНКА</h2> -->
<!--             <p>Find your need now</p>
   <a class="button" href="/">Shop Now</a> -->
</div>
</div>
</div>   
<div class="slider-entry">
   <div class="overlay"></div>
   <img class="lazyload vdesc" data-src="img/03.jpg" alt="">
   <img class="lazyload vmob" data-src="img/slider3.jpg" alt="">
   <div class="caption">
      <div class="container">
         <h2>Скоро в нашем меню появятся <br> вкуснейшие пиццы от Дяди Сэма</h2>
<!--             <p>Find your need now</p>
   <a class="button" href="/">Shop Now</a> -->
</div>
</div>
</div>   
<div class="slider-entry">
   <div class="overlay"></div>
   <img class="lazyload vdesc" data-src="img/04.jpg" alt="">
   <img class="lazyload vmob" data-src="img/slider2.jpg" alt="">
   <div class="caption">
      <div class="container">
         <h2 style="text-align: left;">Кейтеринг (выездное обслуживание)</h2>
         <ul style="text-align: left;">
            <li>- подготовка меню и расчет стоимости меню</li>
            <li>- тестинг – предварительная дегустация блюд их для оценки заказчиками</li>
            <li>- планирование пространства</li>
            <li>- сценарий кейтеринга  – планирование времени</li>
            <li>- составление схемы обслужтвания</li>
            <li>- менеджмент кейтеринга</li>
            <li>– составление транспортного плана, списки персонала, схемы ввоза и вывоза</li>
         </ul>
         <!-- <a class="button" href="/">Shop Now</a> -->
      </div>
   </div>
</div>
</div>
<div class="menu app-section appl-section">
   <div class="container">
      <div class="app-title">
         <h4>Наше меню</h4>
         <ul class="line">
            <li><i class="fa fa-snowflake-o"></i></li>
            <li class="line-center"><i class="fa fa-snowflake-o"></i></li>
            <li><i class="fa fa-snowflake-o"></i></li>
         </ul>
      </div>
      <div class="content">
         <ul class="tabs" id="catfixneed">
            <li class="tab"><a href="index.html#t1" class="clickmepls">Ролы</a></li>
            <li class="tab"><a href="index.html#t5" class="clickmepls">Стритфуд</a></li>
            <li class="tab"><a href="index.html#t6" class="clickmepls">Пицца</a></li>
            <li class="tab"><a href="index.html#t3" class="clickmepls">Закуски</a></li>
            <li class="tab"><a href="index.html#t2" class="clickmepls">Салаты</a></li>
            
            <li class="tab"><a href="index.html#t4" class="clickmepls">Напитки</a></li>
            
            <!--   <li class="tab"><a href="index.html#t6" class="clickmepls">Все меню</a></li> -->
         </ul>
         <div id="t1">
            <div class="row">
               <?php 
               $file="inc/categories.csv";
               $csv= file_get_contents($file);
               $array = array_map("str_getcsv", explode("\n", $csv));
               require 'inc/csvphp.php'; 
               display_products('sushi', $array);
               ?>

            </div>
         </div>
         <div id="t2">
            <div class="row">
               <?php display_products('salat', $array); ?>
            </div>
         </div>
         <div id="t3">
            <div class="row">
               <?php display_products('zakus', $array); ?>
            </div>
         </div>
         <div id="t4">
            <div class="row">
               <?php display_products('drink', $array); ?>
            </div>
         </div>      
         <div id="t5">
            <div class="row">
               <?php display_products('fastfood', $array); ?>
            </div>
         </div>     
         <div id="t6">
            <div class="row">
               <?php display_products('pizza', $array); ?>
            </div>
         </div> 
 <!--      <div id="t6">
         <div class="row">
            // <?php //display_all($array); ?>
         </div>
      </div> -->
   </div>
</div>
</div>
</div>

<div class="offers">
   <div class="app-title">
      <h4>Наши преимущества</h4>
   </div>
   <div class="container">
      <div class="row">
         <div class="col s6">
            <div class="entry">
             <img class="about_img" src="/img/grill.png" alt="">
             <h5>ГОТОВИМ НА ГРИЛЕ</h5>
             <p>В отличии от других способов приготовления гриль не требует использование растительного масла, а это значит вы можете не переживать за своё здоровье!</p>
          </div>
       </div>
       <div class="col s6">
         <div class="entry">
            <img class="about_img" src="/img/chef.png" alt="">
            <h5>УНИКАЛЬНОСТЬ НАШЕЙ КУХНИ.</h5>
            <p>Наше меню было разработано Шеф - поваром 6 разряда, поэтому вы можете быть уверены в уникальном вкусе!</p>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s6">
         <div class="entry">
            <img class="about_img" src="/img/pack.png" alt="">
            <h5>УПАКОВКА.</h5>
            <p>Мы используем продуманную систему упаковки для сохранения первоначального вида и вкуса нашей американской кухни!</p>
         </div>
      </div>
      <div class="col s6">
         <div class="entry">
            <img class="about_img" src="/img/pre.png" alt="">
            <h5>ПРЕДЗАКАЗ.</h5>
            <p>На нашем сайте вы можете оформить заказ до 16:00 на любое удобное для вас время и получить скидку 15%. Вы экономите свое время и деньги!</p>
         </div>
      </div>
   </div>
</div>
</div>
<div class="open-hours app-section">
   <div class="container">
      <div class="app-title">
         <h4>График работы</h4>
         <ul class="line">
            <li><i class="fa fa-snowflake-o"></i></li>
            <li class="line-center"><i class="fa fa-snowflake-o"></i></li>
            <li><i class="fa fa-snowflake-o"></i></li>
         </ul>
      </div>
      <div class="entry">
         <h5>Ежедневно</h5>
         <h6>Часы работы с 11:00 до 22:00</h6>
         <div class="dividing"></div>
         <h5>ул. Ауэзова проспект 10</h5>
         <h6>Среднее время доставки -  60 минут </h6>
      </div>
   </div>
</div>
<?php require 'inc/footer.php'; ?>
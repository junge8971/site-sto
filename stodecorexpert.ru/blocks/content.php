<div class="about">
	<div class="about-logo"><h1>Краски STO интерьерные и фасадные, штукатурки и системы теплоизоляции</h1></div>

	<div class="about-left">
		<div class="about-text">
			На сайте представлена продукция немецкого концерна Sto SE&CoKGaA.  Компания является ведущим мировым производителем и поставщиком материалов и систем для теплоизоляции фасадов зданий. Также, она производит и поставляет краски и штукатурки для внутренних и наружных работ.

			<div class="about-logo-text"><h3>ЧТО НУЖНО ЗНАТЬ О ПРОИЗВОДСТВЕ:</h3></div>

			<p>В России концерн имеет свое производство, сертифицированное по
			ISO-9001 с современной лабораторией для контроля качества выпускаемой продукции.</p>

			<p>У нас и у наших партнеров в регионах вы найдете большой выбор качественных красок, в том числе фасадную краску с "эффектом лотоса"
			Лотусан / Lotusan, штукатурок, шпаклевок и ручного инструмента.</p>

			<p>Для специалистов (мастеров, бригадиров, дизайнеров, архитекторов)
			проводятся бесплатные практические семинары и мастер-классы
			в нашем учебном центре и у наших партнерах в регионах.</p>
		</div>
	</div>

	<div class="about-right">
		<div class="about-text">
			Фасадная краска Lotusan / Лотусан с “Эффектом лотоса”. Уникальная самоочищающаяся краска
			<iframe align="right" allowfullscreen="" frameborder="0" height="100" longdesc="Фасадная краска Lotusan / Лотусан с “Эффектом лотоса”. " scrolling="no" src="https://www.youtube.com/embed/B0E6R1mQwTE?ecver=2" style="height: 300px; width: 415px; margin-right: 77px; margin-top: 30px;  " title="Lotusan" width="300" ></iframe>

			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d838.6504577328891!2d41.92324498450569!3d45.00720787057677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f9ab7945c2f0b7%3A0x82d2b56cfd5df7e3!2z0JTQtdC60L7RgNCw0YLQuNCy0L3Ri9C1INC_0L7QutGA0YvRgtC40Y8g0Lgg0LrRgNCw0YHQutC4ICJTVE8gRXhwZXJ0Ig!5e0!3m2!1sru!2sru!4v1579343842647!5m2!1sru!2sru" style="height: 300px; width: 415px; margin-top:20px; " frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>
</div>

<div class="page-logo"><h2>Уникальные продукты:</h2></div>

<div class="slider-box">
	<div class="sim-slider">
     <ul class="sim-slider-list">
         <li><img src="screen.gif" alt="screen"></li>    <!-- это экран -->
       <li class="sim-slider-element"><img src="img/slider/11833.jpg" alt="" style="max-height: 600px; max-width: 995px;"></li>
         <li class="sim-slider-element"><img src="img/slider/3.jpg" alt=" " style="max-height: 600px; max-width: 995px;"></li>
         <li class="sim-slider-element"><img src="img/slider/Dryonic 26855_3.jpg" alt="" style="max-height: 600px; max-width: 995px;"></li>
     </ul>
     	<div class="sim-slider-arrow-left"></div>
     	<div class="sim-slider-arrow-right"></div>
     	<div class="sim-slider-dots"></div>
 	</div>
</div>
<hr>

<div class="page-logo"><h2>Новости:</h2></div>


<?php 

	$news = get_news_all(); 
	foreach ($news as $new) {?>
<div class="news">	
	<h3><div class="ManeNews"> <?php echo $new["title"]; ?> </div></h3> <!-- заголовок -->
	<div class="NewsImg"> <img src="<?php echo $new["img"]; ?>"> </div> <!-- картинка -->
	<div class="NewsText">	<?php echo $new["text"]; ?> </div> <!-- текст -->
</div>

<?php } ?>

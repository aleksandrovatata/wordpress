
<?php /* Template Name: HomePage */ 

?>

<?php
/**
 * @package start_theme
 * 
 */

get_header(); ?>
<html>
<head>

</head>
<body>

    
<div class  = "wrapper">
    <div class = "banner">
        <div class = "column">
        <div class = "text-banner">
            <p><strong>Кафедра СП</strong> — одна з найпрестижніших кафедр НТУУ "КПІ ім. І. Сікорського", яка першою в  Україні розпочала підготовку фахівців з комп'ютерних систем проектування у 1972 році.
            Кафедра СП здійснює підготовку фахівців для науково-дослідної, проектної і організаційно-управлінської діяльності у галузі застосування сучасних інформаційних технологій у проектуванні найрізноманітніших об'єктів штучного середовища людини і інформатизації функціонування організацій та установ.</p>
        </div>
        </div>
    </div>
    <div class = "news-module1">
        <div class = "left-column">
            <div class = "left-image">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/ICO/128/chat.png" alt=""/>
            </div>
            <div class = "left-text">
                <h2>Абітурієнт?</h2> 
                <p>Бажаєш дізнатися більше <b><a href="http://cad.kpi.ua/uk/vstup/bakalavr-na-bazi-povnoi-serednoi-osviti-serednoi-shkoli" mce_href="/uk/vstup/bakalavr-na-bazi-povnoi-serednoi-osviti-serednoi-shkoli">про вступ на нашу кафедру</a></b>?</p>
                <p>Чекаємо на тебе!</p>
                <p><b>ПІДГОТОВЧІ КУРСИ ІПСА  - <a href="http://cad.kpi.ua/uk/novini/22-news/493-pidgotovchi-kursi-ipsa-ntuu-kpi-imeni-igorja-sikorskogo" mce_href="/uk/novini/22-news/493-pidgotovchi-kursi-ipsa-ntuu-kpi-imeni-igorja-sikorskogo">подробиці...</a></b></p>
            </div>
        </div>
        <div class = "right-column">
            <div class = "right-image">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/ICO/128/ico-school.png" alt=""/>
            </div>
            <div class = "right-text">
                <h2>ІПСА відкриває двері!</h2> 
                <p><b><strong>15.02.2020</strong>&nbsp;</b>час:<strong> 15-00&nbsp;</strong>(субота. Після дня відкритих дверей КПІ)<br></p>
                <p><b>11.04.2020 </b>час:<strong>&nbsp;19-00&nbsp;</strong>(cубота. Після дня відкритих дверей КПІ)<br>
                </p>
            </div>
        </div>
    </div>
    <div class = "news-module2">
        <h2>
        <a href="https://kpi.ua/node/17860"  class="allmode_link">
        День відкритих дверей КПІ ім. Ігоря Сікорського КПІAbitFest!</a>
        </h2>
        <a href="https://docs.google.com/forms/d/1nEdGKjFxEWiKRr5NDF2_QIlUCsElVFMvkyrl1sOu81s/viewform?edit_requested=true"><img src="<?php echo get_stylesheet_directory_uri();?>/images/stories/application.png"  alt="" style="max-width: 256px; width: 100%;"></a>
    </div>

    <div class = "tab-module">
        <div class="tab">
            <button class="tablinks active" onclick="openContent(event, 'News')">Новини</button>
            <button class="tablinks" onclick="openContent(event, 'Conference')">Конференції</button>
        </div>
        <div id="News" class="tabcontent" style=display:block>
            <div class = "allmodule_item">
                <div class="allmode_title"><a class="allmode_link" href="/uk/novini/22-news/502-spiski-1ogo-kursu-20192020">Списки 1ого курсу 2019-2020</a></div>
                <div class="allmode_date">14.08.2019 13:25</div>
                <div class="allmode_text">Інтелектуальні сервіс-орієнтовані розподілені обчислювання Cпеціальність 122: Комп’ютерні науки ДА-91, ДА-92, ДА-93…</div>
                <div class="allmode_readmore"><a href="/uk/novini/22-news/502-spiski-1ogo-kursu-20192020">Детальніше</a></div>
            </div>
            <div class = "allmodule_item">
                <div class="allmode_title"><a class="allmode_link" href="/uk/novini/22-news/500-spiski-zarahovanih-z-01-veresnja-2019-do-magistraturi">Списки зарахованих з 01 вересня 2019 до магістратури</a></div>
                <div class="allmode_date">11.08.2019 12:49</div>
		        <div class="allmode_text"><p><?php the_field('newsForMasterDegree'); ?></p></div>
		        <div class="allmode_readmore"><a href="/uk/novini/22-news/500-spiski-zarahovanih-z-01-veresnja-2019-do-magistraturi">Детальніше</a></div>
            </div>
        </div>




        <div class="allmode_item">
            <div id="Conference" class="tabcontent">
		        
		    </div>
            
        </div>


        
    </div>
</div>



<?php get_footer(); ?>
</body>
</html>
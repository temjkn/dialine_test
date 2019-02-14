<!DOCTYPE html>
<html><head lang="ru">
    <?php require "cityChange.php" ?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="message.css">
    <link rel="stylesheet" href="everad.css">
    <link rel="stylesheet" href="phone.css">
    <link href="style.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="maskinput.js"></script>
    <script charset="utf-8" src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <title>Купить Диалайн недорого. Цены, отзывы. Закажите Диалайн сейчас!</title>
</head>

<body>
    <div class="body-wrap">
        <!--header-->
        <header>
            <div class="wrapper">
                <div class="header__logo"></div>
                <a href="#" class="header__call headerCallJs" data-click="true" data-target=".modal_mouse_out">Заказать звонок</a>
                <div class="header__blocks">
                    <div class="header__block">100 % натуральное
                        <br>средство</div>
                </div>
            </div>
        </header>
        <!--section1-->
        <div class="section1">
            <div class="wrapper">
                <p class="main-title">Диалайн – двойной удар по диабету</p>
                <p class="title-small">Средство №1 в <span id="user-country">России</span><?php echo $city[0]; ?> стабилизирующее <?php echo $gorod; ?> выработку инсулина и уровень фосфора в организме</p>
                <div class="section-wrap">
                    <div class="section1-left">
                        <div class="do-blocks">
                            <div class="do do--1">Повышает выработку
                                <br>инсулина</div>
                            <div class="do do--2">Защищает от высокого
                                <br>содержания сахара</div>
                            <div class="do do--3">Предупреждает
                                <br>гипогликемию</div>
                            <div class="do do--4">Восстанавливает функции
                                <br>печени и поджелудочной
                                <br>железы</div>
                            <div class="do do--5">Нормализует углеводный
                                <br>обмен</div>
                            <div class="do do--6">Cтабилизирует уровень
                                <br>сахара</div>
                            <div class="do do--7">Hормализует все
                                <br>обменные процессы</div>
                        </div>
                    </div>
                    <div class="section1-center">
                        <div class="sale-wrap">
                            <p class="sale-product-title">скидка!</p>
                            <p class="sale-product">-50%</p>
                        </div>
                        <div class="sale-product-img"></div>
                    </div>
                    <div class="sale--mob">
                        <div class="sale-wrap--mob">
                            <p class="sale-product-title--mob">скидка!</p>
                            <p class="sale-product--mob">-50%</p>
                        </div>
                        <p class="clear"></p>
                    </div>
                    <div class="section1-right">
                        <div class="form-bg_top">
                            <div class="wrap-price--top">
                                <div class="price-old-wrap--top">
                                    <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous "><script>d=new Date();p=new Date(d.getTime()-(0));monthA=['01','02','03','04','05','06','07','08','09','10','11','12'];document.write(p.getDate()+'.'+monthA[p.getMonth()]+'.'+p.getFullYear());</script>21.12.2018</span> </p>
                                </div>
                                <div class="price-new-wrap--top">
                                    <p class="price-new-text--top">Цена:</p>
                                    <p class="price-new-x--top"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                </div>
                            </div>
                            <div class="form-main">
                                <p class="form-title--top"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form" type="submit">Получить<br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section2-->
        <div class="section2">
            <div class="wrapper">
                <p class="title size">Кто может заболеть диабетом? </p>
                <div class="reasons-wrap">
                    <div class="reasons-block reasons-block--1">
                        <p class="reasons-title">Имеющие плохую
                            <br>наследственность</p>
                        <p class="reasons-text">Если один родитель болеет
                            <br>диабетом, вероятность
                            <br>заболевания — 30%, если
                            <br> оба — 60%.</p>
                    </div>
                    <div class="reasons-block reasons-block--2">
                        <p class="reasons-title">Страдающие от заболеваний
                            <br>поджелудочной железы</p>
                        <p class="reasons-text">Панкреатит, рак поджелудочной и другие заболевания желез
                            <br>провоцируют развитие
                            <br>диабета</p>
                    </div>
                    <div class="reasons-block reasons-block--3">
                        <p class="reasons-title">Имеющие вирусные
                            <br>инфекции</p>
                        <p class="reasons-text">Эпидемический гепатит,
                            <br>краснуху, ветряную оспу
                            <br>и другие, в том числе ОРЗ
                            <br>и грипп</p>
                    </div>
                    <div class="reasons-block reasons-block--4">
                        <p class="reasons-title">Люди старше
                            <br>30 лет</p>
                        <p class="reasons-text">С возрастом повышается
                            <br>риск возникновения
                            <br>диабета</p>
                    </div>
                    <div class="reasons-block reasons-block--5">
                        <p class="reasons-title">Страдающие от
                            <br>лишнего веса</p>
                        <p class="reasons-text">Вероятность появления
                            <br>диабета при лишнем весе
                            <br>более 40%</p>
                    </div>
                    <div class="reasons-block reasons-block--6">
                        <p class="reasons-title">Испытывающие
                            <br>стресс</p>
                        <p class="reasons-text"> Если вы много работаете
                            <br>и часто нервничаете,
                            <br>повышается вероятность
                            <br>возникновения диабета</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section3-->
        <div class="section3">
            <div class="wrapper">
                <p class="title">В 90% случаях недостаток фосфора приводит к осложнениям диабета</p>
                <div class="complications-wrap">
                    <div class="complications-block">
                        <p class="complications-text">Шок и кома</p>
                        <p class="complications-text">Инфаркт миокарда</p>
                        <p class="complications-text">Инсульт</p>
                        <p class="complications-text">Заболевания почек</p>
                        <p class="complications-text">Инфекции кожи</p>
                    </div>
                    <div class="complications-block">
                        <p class="complications-text">Гангрены</p>
                        <p class="complications-text">Хромота</p>
                        <p class="complications-text">Закупорка артерий</p>
                        <p class="complications-text">Импотенция</p>
                        <p class="complications-text">Потеря зрения</p>
                    </div>
                </div>
            </div>
        </div>
        <!--text-bg1-wrap-->
        <div class="text-bg1-wrap">
            <div class="wrapper">
                <p class="text-bg1">Вы не можете повлиять на свой возраст или наследственность, но вы можете снизить риск развития этих заболеваний</p>
            </div>
        </div>
        <!--section4-->
        <div class="section4">
            <div class="wrapper">
                <p class="title">Диалайн – биогенный комплекс для борьбы с диабетом</p>
                <div class="laboratory-img"></div>
                <div class="laboratory-block">
                    <p class="laboratory-text">Диалайн – гордость 
отечественный фармакологии. Первый препарат в мире, который способен 
значительно облегчить и продлить жизнь диабетиков. Разработан ведущим 
советским и российским ученым – Андреем Семеновичем Ефимовым. <br>Появлению
 препарата предшествовали 10 лет разработок и 3 года тщательных 
клинических испытаний, доказавших эффективность препарата при диабете 
как 2-го, так и 1-го типа.</p>
                </div>
            </div>
        </div>
        <!--text-bg2-wrap-->
        <div class="text-bg2-wrap">
            <div class="wrapper">
                <p class="text-bg2">За счет специального состава Диалайн
 снижает инсулинорезистентность клеток, что позволяет даже при небольшом
 количестве инсулина поддерживать стабильный уровень сахара в крови. Все
 больше людей, отдавших предпочтение Дифорт, живут нормальной, здоровой 
жизнью!</p>
            </div>
        </div>
        <!--section5-->
        <div class="section5">
            <div class="wrapper">
                <p class="title">Одно средство – 5 действий против диабета</p>
                <div class="action-wrap">
                    <div class="action-left">
                        <div class="action-block action-block--1">
                            <p class="action-number">1</p>
                            <p class="action-text">Стимулирует работу бета-клеток островков Лангерганса в поджелудочной железе</p>
                        </div>
                        <div class="action-block action-block--2">
                            <p class="action-number">2</p>
                            <p class="action-text">Нормализует обменные процессы, предотвращает нарушение функций щитовидной железы, яичников и обменных процессов.</p>
                        </div>
                    </div>
                    <div class="action-right">
                        <div class="action-block action-block--3">
                            <p class="action-number">3</p>
                            <p class="action-text">Нормализует уровень фосфора в крови</p>
                        </div>
                        <div class="action-block action-block--4">
                            <p class="action-number">4</p>
                            <p class="action-text">Очищает кровь и лимфу</p>
                        </div>
                        <div class="action-block action-block--5">
                            <p class="action-number">5</p>
                            <p class="action-text">Поддерживает иммунитет и предотвращает нарушение зрения.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional">
            <div class="wrapper">
                <p class="title">Дополнительное воздействие на организм</p>
                <ul class="additional__list">
                    <li class="additional__item">
                        <p class="additional__item-info">Очищает организм
                            <br>от шлаков и токсинов</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Укрепляет стенки
                            <br>сосудов </p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Улучшает работу
                            <br>сердца и его ритм </p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Снижает количество
                            <br>холестерина крови </p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Нормализует
                            <br>артериальное
                            <br>давление</p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Способствует регуляции
                            <br>гормонального баланса
                            <br>в организме </p>
                    </li>
                    <li class="additional__item">
                        <p class="additional__item-info">Восполняет
                            <br>иммунодефицит
                            <br>в организме</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--section6-->
        <div class="section6">
            <div class="wrapper">
                <p class="title">Мнение эксперта</p>
                <div class="expert-wrap-main">
                    <div class="expert-wrap">
                        <p class="expert-text">Современные препараты от 
диабета направлены на устранение симптомов заболевания, а не причин. 
Средство от диабета Диалайн направлены на длительную ремиссию. Уже после
 1 курса симптомы диабета постепенно проходят, восстанавливается работа 
всех систем организма. </p>
                        <p class="expert-text">Эффективность средства подтвердили как лабораторные исследования, так и практическое применение. </p>
                        <p class="expert-text">После курса Диалайна 
динамика лечения диабета у моих пациентов заметно улучшилась. Рекомендую
 это современное и эффективное средство. </p>
                        <p class="expert-name">Данилов Юрий Петрович,
                            <br> <span>кандидат</span> медицинских наук,
                            <br> врач-эндокринолог</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section7-->
        <div class="section7">
            <div class="wrapper">
                <div class="sale--mob">
                    <div class="sale-wrap--mob">
                        <p class="sale-product-title--mob">скидка!</p>
                        <p class="sale-product--mob">-50%</p>
                    </div>
                    <p class="clear"></p>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all">Диалайн – средство для
                                <br>борьбы с диабетом</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all">скидка!</p>
                                    <p class="sale-product--all">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous ">21.12.2018</span> </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all">Цена:</p>
                                        <p class="price-new-x--all"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack">60</span></p>
                                <p class="product-sh--text">Количество товаров на
                                    <br>ближайшем к Вам складе
                                    <br>ограничено!</p>
                            </div>
                        </div>
                        <div class="form-center--all"></div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form submit-form--all" type="submit">Получить
                                        <br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section8-->
        <div class="section8">
            <div class="wrapper">
                <p class="title">Отзывы</p>
                <div class="slider-wrapper">
                    <div class="main-slider">
                        <div class="slide-one">
                            <div class="slide-img slide-img--3"><img src="img/slide-img3.png" alt=""></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--3">Спасибо
 огромное за этот препарат. Раньше приходилось пить таблетки горстями, 
сейчас их пью крайне редко. После курса Диалайна ушла усталость и 
сонливость, сахар в крови пришел в норму. Я даже стал забывать проверять
 его. Чувствую себя здоровым и нормальным человеком.</p>
                                <p class="name-slide">Петр Николенко, г. Гуково</p>
                            </div>
                        </div>
                        <div class="slide-one">
                            <div class="slide-img slide-img--2"><img src="img/slide-img2.png" alt=""></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--2">Много
 лет мучилась от диабета 2 типа, сахар в крови постоянно скакал. 
Соблюдала диеты, делала все назначения врача. Но все равно за сутки 
изменения от 3,2 до 11. Золовка принесла Диалайн, советовала пить 2 раза
 в день. Знаете, я быстро почувствовала первые изменения. Сахар стал 
меняться в пределах 5-8, вполне нормально. Вместе с этим пришли хорошее 
самочувствие и желание жить.</p>
                                <p class="name-slide">Людмила Новоселова, г. Чита</p>
                            </div>
                        </div>
                        <div class="slide-one">
                            <div class="slide-img slide-img--1"><img src="img/slide-img1.png" alt=""></div>
                            <div class="text-wrap-slide">
                                <p class="text-slide text-slide--1">Моему
 супругу 49 лет, диабетом 2-го типа болеет пять лет, принимал разные 
препараты — почти все, кроме инсулина. Постоянная усталость, почти 
постоянная депрессия. Узнав о Диалайне, решили попробовать. Супруг стал 
принимать таблетки, как написано в инструкции. Результаты не заставили 
себя долго ждать. Уже после пары дней возникло мужское желание (уж 
простите меня за интимные подробности, но такого не было больше 
полугода). Придерживался диеты, пил таблетки.
                                    <br>Результат: даже сразу после 
ужина сахар 6, полностью восстановилась наша интимная жизнь плюс у мужа 
бодрость духа и огромное желание быть здоровым!</p>
                                <p class="name-slide">Жанна Новоселова, г. Санкт-Петербург</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        <!--section11-->
        <div class="section11">
            <div class="wrapper">
                <p class="title">Как мы работаем</p>
                <div class="work-wrap">
                    <div class="work-block  work-block--1">
                        <p class="work-prof">Директор по качеству</p>
                        <p class="work-name">Лев Алиев</p>
                        <p class="work-text">следит, что ваш заказ
                            <br>оригинален и упакован
                            <br>верно</p>
                    </div>
                    <div class="work-block  work-block--2">
                        <p class="work-prof">Директор колл-центра</p>
                        <p class="work-name">Анна Кирилова</p>
                        <p class="work-text">отвечает за своевременную
                            <br>связь по указанному
                            <br>вами телефону</p>
                    </div>
                    <div class="work-block  work-block--3">
                        <p class="work-prof">Директор по логистике</p>
                        <p class="work-name">Алексей Ермаков</p>
                        <p class="work-text">в ответе за доставку
                            <br>посылки по нужному
                            <br>адресу и в срок</p>
                    </div>
                </div>
            </div>
        </div>
        <!--section12-->
        <div class="section12">
            <div class="wrapper">
                <p class="title">Доставка осуществляется
                    <br>по всей России и странам СНГ</p>
                <div class="map-wrap"><img src="img/map-img.png" alt=""></div>
                <div class="sale--mob">
                    <div class="sale-wrap--mob">
                        <p class="sale-product-title--mob">скидка!</p>
                        <p class="sale-product--mob">-50%</p>
                    </div>
                    <p class="clear"></p>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all">Диалайн – средство для
                                <br>борьбы с диабетом</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all">скидка!</p>
                                    <p class="sale-product--all">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous ">21.12.2018</span> </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all">Цена:</p>
                                        <p class="price-new-x--all"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack">60</span></p>
                                <p class="product-sh--text">Количество товаров на
                                    <br>ближайшем к Вам складе
                                    <br>ограничено!</p>
                            </div>
                        </div>
                        <div class="form-center--all"></div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form submit-form--all" type="submit">Получить
                                        <br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer" style="text-align: center;">
                       <div class="req-line">ООО "ТОРГЛАЙН" ИНН 9705098802, ОГРН 1177746541730</div>
                <div class="conflink">
                    <a href="#" class="confident-link" style="color: #d3d5d7;">Политика конфиденциальности</a>
                </div>


                </div>
            </div>
        </div>
          <div class="hidden-conf">
        <div class="conf-overlay close-conf"></div>
        <div class="conf-info">
            <div class="conf-head">Политика конфиденциальности</div>
            <h5>Защита личных данных</h5>
            <p>Для защиты ваших личных данных у нас внедрен ряд средств 
защиты, которые действуют при введении, передаче или работе с вашими 
личными данными.</p>
            <h5>Разглашение личных сведений и передача этих сведений третьим лицам</h5>
            <p>Ваши личные сведения могут быть разглашены нами только в 
том случае это необходимо для: (а) обеспечения соответствия предписаниям
 закона или требованиям судебного процесса в нашем отношении ; (б) 
защиты наших прав или собственности (в) принятия срочных мер по 
обеспечению личной безопасности наших сотрудников или потребителей 
предоставляемых им услуг, а также обеспечению общественной безопасности.
 Личные сведения, полученные в наше распоряжение при регистрации, могут 
передаваться третьим организациям и лицам, состоящим с нами в 
партнерских отношениях для улучшения качества оказываемых услуг. Эти 
сведения не будут использоваться в каких-либо иных целях, кроме 
перечисленных выше. Адрес электронной почты, предоставленный вами при 
регистрации может использоваться для отправки вам сообщений или 
уведомлений об изменениях, связанных с вашей заявкой, а также рассылки 
сообщений о происходящих в компании событиях и изменениях, важной 
информации о новых товарах и услугах и т.д. Предусмотрена возможность 
отказа от подписки на эти почтовые сообщения.</p>
            <h5>Использование файлов «cookie»</h5>
            <p>Когда пользователь посещает веб-узел, на его компьютер 
записывается файл «cookie» (если пользователь разрешает прием таких 
файлов). Если же пользователь уже посещал данный веб-узел, файл «cookie»
 считывается с компьютера. Одно из направлений использования файлов 
«cookie» связано с тем, что с их помощью облегчается сбор статистики 
посещения. Эти сведения помогают определять, какая информация, 
отправляемая заказчикам, может представлять для них наибольший интерес. 
Сбор этих данных осуществляется в обобщенном виде и никогда не 
соотносится с личными сведениями пользователей.</p>
            <p>Третьи стороны, включая компании Google, показывают 
объявления нашей компании на страницах сайтов в Интернете. Третьи 
стороны, включая компанию Google, используют cookie, чтобы показывать 
объявления, основанные на предыдущих посещениях пользователем наших 
вебсайтов и интересах в веб-браузерах. Пользователи могут запретить 
компаниям Google использовать cookie. Для этого необходимо посетить 
специальную страницу компании Google по этому адресу: 
http://www.google.com/privacy/ads/</p>
            <h5>Изменения в заявлении о соблюдении конфиденциальности</h5>
            <p>Заявление о соблюдении конфиденциальности предполагается 
периодически обновлять. При этом будет изменяться дата предыдущего 
обновления, указанная в начале документа. Сообщения об изменениях в 
данном заявлении будут размещаться на видном месте наших веб-узлов</p>
            <p class="s1">Благодарим Вас за проявленный интерес к нашей системе! </p>
            <div class="close-conf closeconf-but"></div>
        </div>
    </div>


        <!--popup-callback-->
        <div class="popup-callback">
            <div class="close-modal"></div>
            <div class="mod">
                <div class="close-img"></div>
                <div class="sale--mob">
                    <div class="sale-wrap--mob">
                        <p class="sale-product-title--mob">скидка!</p>
                        <p class="sale-product--mob">-50%</p>
                    </div>
                    <p class="clear"></p>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all">Диалайн – средство для
                                <br>борьбы с диабетом</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all">скидка!</p>
                                    <p class="sale-product--all">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous ">21.12.2018</span> </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all">Цена:</p>
                                        <p class="price-new-x--all"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack">60</span></p>
                                <p class="product-sh--text">Количество товаров на
                                    <br>ближайшем к Вам складе
                                    <br>ограничено!</p>
                            </div>
                        </div>
                        <div class="form-center--all"></div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form submit-form--all" type="submit">Получить
                                        <br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end popup-callback-->
        <!--popup-phone-->
        <div class="popup-phone">
            <div class="close-modal"></div>
            <div class="mod">
                <div class="close-phone"></div>
                <div class="sale--mob">
                    <div class="sale-wrap--mob">
                        <p class="sale-product-title--mob">скидка!</p>
                        <p class="sale-product--mob">-50%</p>
                    </div>
                    <p class="clear"></p>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all">Диалайн – средство для
                                <br>борьбы с диабетом</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all">скидка!</p>
                                    <p class="sale-product--all">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous ">21.12.2018</span> </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all">Цена:</p>
                                        <p class="price-new-x--all"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack">60</span></p>
                                <p class="product-sh--text">Количество товаров на
                                    <br>ближайшем к Вам складе
                                    <br>ограничено!</p>
                            </div>
                        </div>
                        <div class="form-center--all"></div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form submit-form--all" type="submit">Получить
                                        <br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--popup-mouseleave-->
        <div class="modal_mouse_out">
            <div class="mod">
                <div class="close-mouse"></div>
                <div class="sale--mob">
                    <div class="sale-wrap--mob">
                        <p class="sale-product-title--mob">скидка!</p>
                        <p class="sale-product--mob">-50%</p>
                    </div>
                    <p class="clear"></p>
                </div>
                <div class="form-wrapper">
                    <div class="form-wrapper--bg">
                        <div class="form-right--all">
                            <p class="form-main-title--all">Диалайн – средство для
                                <br>борьбы с диабетом</p>
                            <div class="sale-price-wrap">
                                <div class="sale-wrap--all">
                                    <p class="sale-product-title--all">скидка!</p>
                                    <p class="sale-product--all">-50%</p>
                                </div>
                                <div class="wrap-price--all">
                                    <div class="price-old-wrap--all">
                                        <p class="price-old-text--top">Только до:</p>
                                    <p class="price-old-x--top"><span class="x_price_previous ">21.12.2018</span> </p>
                                    </div>
                                    <div class="price-new-wrap--all">
                                        <p class="price-new-text--all">Цена:</p>
                                        <p class="price-new-x--all"><span><span class="landing___price__main_value">0</span> <span class="landing___price__currency">руб</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-sh">
                                <p class="product-how-much"><span class="lastpack">60</span></p>
                                <p class="product-sh--text">Количество товаров на
                                    <br>ближайшем к Вам складе
                                    <br>ограничено!</p>
                            </div>
                        </div>
                        <div class="form-center--all"></div>
                        <div class="form-left--all">
                            <div class="form--all">
                                <p class="form-title--all"><span>Введите ваши данные </span>в форму ниже</p>
                                <form method="post" action="" class="orderFormWrapper">
								<input type="hidden" name="subid" value="0">
								
                                    <div class="c-s" style="display: none;"><input type="hidden" name="country_code" value="RU"></div>
                                    <input class="input-form input-form--all" type="text" name="name" placeholder="Ваше имя">
                                    <input class="input-form input-form--all" type="text" name="phone" placeholder="Ваш номер телефона">
                                    <button class="submit-form submit-form--all" type="submit">Получить
                                        <br>Диалайн</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--phone-call-->
        <div class="phone-call cbh-phone cbh-green cbh-show cbh-static" id="clbh_phone_div" data-click="true" data-target=".modal_mouse_out">
            <a href="#" class="phoneJs">
                <div class="cbh-ph-circle"></div>
                <div class="cbh-ph-circle-fill"></div>
                <div class="cbh-ph-img-circle1"></div>
            </a>
        </div>
    </div>
    <!--body-wrap-->
    <div class="mouse">
        <div class="line_top mouse_moved"></div>
    </div>
    <script src="index.js"></script>
</body></html>
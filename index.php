<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Информация</title>
</head>
<style>
  html {
  box-sizing: border-box;
}
*, *::after, *::before {
  box-sizing: inherit;
}
body {
  /* background-color: #000; */
  margin: 0;
  padding: 0;

}
.container {
  max-width: 1200px;
  margin: 0 auto;
  background: white;
  padding: 60px 50px;
  margin-bottom: 100px;
}
table {
  border-collapse: collapse;
  width: 100%;
  text-align: left;
}
th {
  border: 1px solid gray;
  padding: 5px 10px;
}
td {
  border: 1px solid gray;
}
input, select {
  border: none;
  padding: 5px 10px;
  outline: none;
  width: 100%;
}
.center {
  text-align: center;
}
.small-font {
  font-size: 11px;
}
button {
  margin-top: 5px;
  padding: 5px 10px;
}
</style>

<body>
  <?php 
    $link = mysqli_connect('localhost', 'root', '', 'db_test');
    $sql = "CREATE TABLE IF NOT EXISTS forms(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      org_name VARCHAR(210) NOT NULL,
      submit_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
      form_data TEXT NOT NULL
    )";
    mysqli_query($link, $sql);
    // if ( mysqli_query($link, $sql) ) {
    //   echo "Table created successfully.";
    // } else {
    //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    // }
    $orgName = $_POST['0'];
    $formData = serialize($_POST);
    $sql = "INSERT INTO forms (org_name, form_data) VALUES ('$orgName', '$formData')";
    mysqli_query($link, $sql);
    // if ( mysqli_query($link, $sql) ) {
    //   echo "Records added successfully.";
    // } else {
    //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    // }
    mysqli_close($link);
    // $sql = 'SELECT * FROM forms LIMIT 1';
    // $result = mysqli_query($link, $sql);
    // $row = mysqli_fetch_array($result);
    // echo $row['org_name'];

  ?>

  <form method="POST" action="https://localhost/testform/" class="container">
    <p>1.1. Заполните, пожалуйста, краткую информацию</p>
    <table>
      <tr>
        <th style="width: 40%">Полное наименование организации</th>
        <td><input type="text" value="<?php echo $_POST['0'] ?>"></td>
      </tr>
      <tr>
        <th>Код и наименование основного вида экономической деятельности (по классификатору до 01.01.2017 года)</th>
        <td><input type="text" value="<?php echo $_POST['1'] ?>"></td>
      </tr>
      <tr>
        <th>Код и наименование основного вида экономической деятельности (по классификатору после 01.01.2017 года)</th>
        <td><input type="text" value="<?php echo $_POST['2'] ?>"></td>
      </tr>
      <tr>
        <th>Форма собственности</th>
        <td>
          <select name="3">
            <option value="государственная">Государственная</option>
            <option value="муниципальная">Муниципальная</option>
            <option value="негосударственная">Негосударственная</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Фактический адрес</th>
        <td><input type="text" value="<?php echo $_POST['4'] ?>"></td>
      </tr>
      <tr>
        <th>Муниципальное образование</th>
        <td><input type="text" value="<?php echo $_POST['5'] ?>"></td>
      </tr>
      <tr>
        <th>Телефон</th>
        <td><input type="text" value="<?php echo $_POST['6'] ?>"></td>
      </tr>
      <tr>
        <th>Адрес электронной почты</th>
        <td><input type="text" value="<?php echo $_POST['7'] ?>"></td>
      </tr>
      <tr>
        <th>Год основания предприятия</th>
        <td><input type="text" value="<?php echo $_POST['8'] ?>"></td>
      </tr>
      <tr>
        <th>Ф.И.О. руководителя предприятия</th>
        <td><input type="text" value="<?php echo $_POST['9'] ?>"></td>
      </tr>
    </table>

    <p>1.2. Укажите, пожалуйста, данные лица, ответственного за заполнение анкеты</p>
    <table>
      <tr>
        <th style="width: 40%">Ф.И.О. ответственного за заполнение анкеты</th>
        <td><input type="text" value="<?php echo $_POST['10'] ?>"></td>
      </tr>
      <tr>
        <th>Адрес электронной почты</th>
        <td><input type="text" value="<?php echo $_POST['11'] ?>"></td>
      </tr>
      <tr>
        <th>Контактный телефон</th>
        <td><input type="text" value="<?php echo $_POST['12'] ?>"></td>
      </tr>
    </table>

    <h2>Раздел 2. Сведения о численности кадров предприятия</h2>
    <p>2.1. Укажите, пожалуйста, фактическую численность работников в 2015-2016 годах и их желаемую численность на
      2017-2018 годы</p>
    <table class="center">
      <tr>
        <th rowspan="2">Период</th>
        <th colspan="2">Факт</th>
        <th colspan="2">Оценка</th>
      </tr>
      <tr>
        <th>2017г.</th>
        <th>2018г.</th>
        <th>2019г.</th>
        <th>2020г.</th>
      </tr>
      <tr>
        <th>Среднесписочная численность работников за год (без внешних совместителей и работников несписочного состава)</th>
        <td><input type="text" value="<?php echo $_POST['13'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['14'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['15'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['16'] ?>"></td>
      </tr>
    </table>

    <p>2.2. Укажите, пожалуйста, фактическую численность работников в 2015-2016 годах и их ожидаемую численность на
      2017-2018 годы, в том числе по профессиям и должностям в организации и соответствующим им уровню образования<sup>1</sup>,
      специальностям/направлениям подготовки/профессиям<sup>2</sup>.</p>
    <ol>
      <li>
        – из списка необходимо выбрать минимально требуемый уровень профессионального образования для работы по
        профессии:
        <ul>
          <li>ВО (высшее образование)</li>
          <li>СПО (программы подготовки специалистов среднего звена)</li>
          <li>НПО (программы подготовки квалифицированных рабочих и служащих, включая профессиональное обучение)</li>
        </ul>
      </li>
      <li>
        – из списка необходимо выбрать наиболее соответствующую специальность/направление подготовки, по которой
        осуществляется подготовка кадров в системе профессионального образования и обучения по каждой профессии
      </li>
    </ol>

    <!-- DINAMIC -->
    <table id="tbl-1" class="center">
      <tr>
        <th rowspan="3">№</th>
        <th rowspan="3">Наименование профессий и должностей предприятия по ОКПДТР (по убыванию численности работников)</th>
        <th rowspan="3">Уровень образования выбор из списка (ВО, СПО, НПО)</th>
        <th rowspan="3">Наименование специальности/ направления подготовки/ профессии (в т.ч. смежные</th>
        <th style="width:180px">Диапазон заработной платы* (2017)</th>
        <th colspan="4">Численность работников по профессии, чел.</th>
      <tr>
        <th class="small-font" rowspan="2">
          Выбор: <br>
          До 20 000 руб.<br>
          20 001-30 000 руб.<br>
          30 001-40 000 руб. <br>
          40 001-60 000 руб. <br>
          60 001-80 000 руб. <br>
          80 001-100 000 руб. <br>
          более 100 000 руб. <br>
        </th>
        <th colspan="2">Факт</th>
        <th colspan="2">Оценка</th>
      </tr>
      <tr>
        <th>2017г.</th>
        <th>2018г.</th>
        <th>2019г.</th>
        <th>2020г.</th>
      </tr>
      </tr>

      <tr>
        <td>
          1
        </td>
        <td><input type="text" value="<?php echo $_POST['17'] ?>_1"></td>
        <td>
          <select name="18_1">
            <option value="ВО">ВО</option>
            <option value="СПО">СПО</option>
            <option value="НПО">НПО</option>
          </select>
        </td>
        <td><input type="text" value="<?php echo $_POST['19'] ?>_1"></td>
        <td>
          <select name="20_1">
            <option value="до 20000">До 20 000 руб.</option>
            <option value="от 20 000-30 000">20 001 - 30 000 руб.</option>
            <option value="от 20 000-30 000">30 001 - 40 000 руб.</option>
            <option value="от 20 000-30 000">40 001 - 60 000 руб.</option>
            <option value="от 20 000-30 000">60 001 - 80 000 руб.</option>
            <option value="от 20 000-30 000">80 001 - 100 000 руб.</option>
            <option value="от 20 000-30 000">более 100 000 руб.</option>
          </select>
        </td>
        <td><input type="text" value="<?php echo $_POST['21'] ?>_1"></td>
        <td><input type="text" value="<?php echo $_POST['22'] ?>_1"></td>
        <td><input type="text" value="<?php echo $_POST['23'] ?>_1"></td>
        <td><input type="text" value="<?php echo $_POST['24'] ?>_1"></td>
      </tr>
    </table>
    <button id="btn-1" role="button">Добавить строку</button>
    <button id="btn-1-del" role="button">Удалить строку</button>

    <p><sub>* – из расчета работы на полную ставку</sub></p>
    <p>2.3 Оцените, пожалуйста, вероятность использования следующих профессиональных компетенций на вашем предприятии:</p>
    <p>Выберите отрасль экономики: (раздел ОКВЭД)</p>

    <!-- DINAMIC -->
    <table id="tbl-2" class="center">
      <tr>
        <th rowspan="2">№</th>
        <th rowspan="2">Компетенции согласно приложенному перечню (дополнительно присылаю файл)</th>
        <th colspan="3">В выбранной отрасли экономики в городе Москве</th>
      </tr>
      <tr>
        <th>В краткосрочном периоде (на 1-2 года вперед)</th>
        <th>В среднесрочном периоде (на 3-5 лет вперед)</th>
        <th>В долгосрочном периоде (на 6-10 лет вперед)</th>
      </tr>

      <tr>
        <td>
          1
        </td>
        <td>
          <select name="25_1">
            <option value="Информационные кабельные сети">Информационные кабельные сети</option>
            <option value="Программные решения для бизнеса">Программные решения для бизнеса</option>
            <option value="Печатные технологии в прессе">Печатные технологии в прессе</option>
            <option value="Веб-дизайн и разработка">Веб-дизайн и разработка</option>
            <option value="Сетевое и системное">Сетевое и системное</option>
            <option value="администрирование">администрирование</option>
            <option value="ИТ-решения для бизнеса на платформе " 1С: Предприятие 8"">ИТ-решения для бизнеса на
              платформе "1С: Предприятие 8"</option>
            <option value="Машинное обучение и большие данные">Машинное обучение и большие данные</option>
            <option value="Магистральные линии связи. Строительство и эксплуатация ВОЛ П.">Магистральные линии связи.
              Строительство и эксплуатация ВОЛ П.</option>
            <option value="Эксплуатации кабельных линий">Эксплуатации кабельных линий</option>
            <option value="электропередачи">электропередачи</option>
            <option value="Разработка компьютерных игр и мультимедийных приложений">Разработка компьютерных игр и
              мультимедийных приложений</option>
            <option value="Разработка виртуальной и">Разработка виртуальной и</option>
            <option value="дополненной реальности">дополненной реальности</option>
            <option value="Разработка решений с использованием блокчейн технологий">Разработка решений с использованием
              блокчейн технологий</option>
            <option value="Разработка мобильных приложений">Разработка мобильных приложений</option>
            <option value="Корпоративная защита от внутренних угроз информационной безопасности">Корпоративная защита
              от внутренних угроз информационной безопасности</option>
            <option value="Анализ защищённости информационных систем от внешних угроз">Анализ защищённости
              информационных систем от внешних угроз</option>
            <option value="Физическая культура и спорт">Физическая культура и спорт</option>
            <option value="Преподавание в младших классах">Преподавание в младших классах</option>
            <option value="Дошкольное воспитание">Дошкольное воспитание</option>
            <option value="Преподавание музыки в школе">Преподавание музыки в школе</option>
            <option value="Преподавание в основной и средней школе">Преподавание в основной и средней школе</option>
            <option value="Преподавание технологии">Преподавание технологии</option>
            <option value="Полимеханика и автоматизация">Полимеханика и автоматизация</option>
            <option value="Мехатроника">Мехатроника</option>
            <option value="Инженерный дизайн CAD">Инженерный дизайн CAD</option>
            <option value="Токарные работы на станках с ЧПУ">Токарные работы на станках с ЧПУ</option>
            <option value="Фрезерные работы на станках с ЧПУ">Фрезерные работы на станках с ЧПУ</option>
            <option value="Сварочные технологии">Сварочные технологии</option>
            <option value="Электроника">Электроника</option>
            <option value="Промышленная автоматика">Промышленная автоматика</option>
            <option value="Мобильная робототехника">Мобильная робототехника</option>
            <option value="Изготовление прототипов">Изготовление прототипов</option>
            <option value="Реверсивный инжиниринг">Реверсивный инжиниринг</option>
            <option value="Промышленная робототехника">Промышленная робототехника</option>
            <option value="Лазерные технологии">Лазерные технологии</option>
            <option value="Производственная сборка изделий">Производственная сборка изделий</option>
            <option value="авиационной техники">авиационной техники</option>
            <option value="Инженерия космических систем">Инженерия космических систем</option>
            <option value="Лабораторный химический анализ">Лабораторный химический анализ</option>
            <option value="Технологии композитов">Технологии композитов</option>
            <option value="Обработка листового металла">Обработка листового металла</option>
            <option value="Командная работа на производстве">Командная работа на производстве</option>
            <option value="Производство металлоконструкций">Производство металлоконструкций</option>
            <option value="Изготовление изделий из полимерных материалов">Изготовление изделий из полимерных материалов</option>
            <option value="Промышленная механика и монтаж">Промышленная механика и монтаж</option>
            <option value="Интернет вещей">Интернет вещей</option>
            <option value="Обслуживание и ремонт оборудования релейной защиты и автоматики">Обслуживание и ремонт
              оборудования релейной защиты и автоматики</option>
            <option value="Управление жизненным">Управление жизненным</option>
            <option value="циклом/управление программой">циклом/управление программой</option>
            <option value="Геномная инженерия">Геномная инженерия</option>
            <option value="Многоосевая обработка на станках с ЧПУ">Многоосевая обработка на станках с ЧПУ</option>
            <option value="Монтаж электрооборудования">Монтаж электрооборудования</option>
            <option value="летательных аппаратов">летательных аппаратов</option>
            <option value="Водные технологии">Водные технологии</option>
            <option value="Агрономия">Агрономия</option>
            <option value="Инженерное проектирование">Инженерное проектирование</option>
            <option value="Неразрушающий контроль">Неразрушающий контроль</option>
            <option value="Добыча нефти и газа">Добыча нефти и газа</option>
            <option value="Апаратчик химических технологий">Апаратчик химических технологий</option>
            <option value="Сельскохозяйственные биотехнологии">Сельскохозяйственные биотехнологии</option>
            <option value="Архитектурная обработка камня">Архитектурная обработка камня</option>
            <option value="Облицовка плиткой">Облицовка плиткой</option>
            <option value="Сантехника и отопление">Сантехника и отопление</option>
            <option value="Электромонтаж">Электромонтаж</option>
            <option value="Кирпичная кладка">Кирпичная кладка</option>
            <option value="Сухое строительство и штукатурные">Сухое строительство и штукатурные</option>
            <option value="работы">работы</option>
            <option value="Малярные и декоративные работы">Малярные и декоративные работы</option>
            <option value="Производство мебели">Производство мебели</option>
            <option value="Столярное дело">Столярное дело</option>
            <option value="Плотницкое дело">Плотницкое дело</option>
            <option value="Ландшафтный дизайн">Ландшафтный дизайн</option>
            <option value="Холодильная техника и системы">Холодильная техника и системы</option>
            <option value="кондиционирования">кондиционирования</option>
            <option value="Кровельные работы по металлу">Кровельные работы по металлу</option>
            <option value="Геодезия">Геодезия</option>
            <option value="Кровельные работы">Кровельные работы</option>
            <option value="Бетонные строительные работы">Бетонные строительные работы</option>
            <option value="Укладка напольных покрытий">Укладка напольных покрытий</option>
            <option value="Каркасное домостроение">Каркасное домостроение</option>
            <option value="Реставрация произведений из дерева">Реставрация произведений из дерева</option>
            <option value="Монтаж и эксплуатация газового оборудования">Монтаж и эксплуатация газового оборудования</option>
            <option value="Парикмахерское искусство">Парикмахерское искусство</option>
            <option value="Эстетическая косметология">Эстетическая косметология</option>
            <option value="Кондитерское дело">Кондитерское дело</option>
            <option value="Поварское дело">Поварское дело</option>
            <option value="Ресторанный сервис">Ресторанный сервис</option>
            <option value="Медицинский и социальный уход">Медицинский и социальный уход</option>
            <option value="Хлебопечение">Хлебопечение</option>
            <option value="Администрирование отеля">Администрирование отеля</option>
            <option value="Спасательные работы">Спасательные работы</option>
            <option value="Предпринимательство">Предпринимательство</option>
            <option value="Выпечка осетинских пирогов">Выпечка осетинских пирогов</option>
            <option value="Лабораторный медицинский анализ">Лабораторный медицинский анализ</option>
            <option value="Медицинская оптика">Медицинская оптика</option>
            <option value="Ветеринария">Ветеринария</option>
            <option value="Туризм">Туризм</option>
            <option value="Организация экскурсионных услуг">Организация экскурсионных услуг</option>
            <option value="Виноделие">Виноделие</option>
            <option value="Охрана труда">Охрана труда</option>
            <option value="Правоохранительная деятельность (Полицейский)">Правоохранительная деятельность (Полицейский)</option>
            <option value="Фармацевтика">Фармацевтика</option>
            <option value="Проводник пассажирского вагона">Проводник пассажирского вагона</option>
            <option value="Рекрутер">Рекрутер</option>
            <option value="Интернет маркетинг">Интернет маркетинг</option>
            <option value="Документационное обеспечение управления и архивоведения">Документационное обеспечение
              управления и архивоведения</option>
            <option value="Безопасность жизнидеятельности на судне">Безопасность жизнидеятельности на судне</option>
            <option value="Реклама">Реклама</option>
            <option value="Ювелирное дело">Ювелирное дело</option>
            <option value="Флористика">Флористика</option>
            <option value="Технологии моды">Технологии моды</option>
            <option value="Графический дизайн">Графический дизайн</option>
            <option value="Визуальный мерчендайзинг">Визуальный мерчендайзинг</option>
            <option value="Дизайн интерьера">Дизайн интерьера</option>
            <option value="Видеопроизводство">Видеопроизводство</option>
            <option value="Фотография">Фотография</option>
            <option value="Звукорежиссура">Звукорежиссура</option>
            <option value="Огранка ювелирных вставок">Огранка ювелирных вставок</option>
            <option value="Промышленный дизайн">Промышленный дизайн</option>
            <option value="3D Моделирование для компьютерных игр">3D Моделирование для компьютерных игр</option>
            <option value="Огранка алмазов">Огранка алмазов</option>
            <option value="Кузовной ремонт">Кузовной ремонт</option>
            <option value="Обслуживание авиационной техники">Обслуживание авиационной техники</option>
            <option value="Ремонт и обслуживание легковых автомобилей">Ремонт и обслуживание легковых автомобилей</option>
            <option value="Окраска автомобиля">Окраска автомобиля</option>
            <option value="Обслуживание тяжелой техники">Обслуживание тяжелой техники</option>
            <option value="Обслуживание грузовой техники">Обслуживание грузовой техники</option>
            <option value="Эксплуатация сельскохозяйствеиных машин">Эксплуатация сельскохозяйствеиных машин</option>
            <option value="Эксплуатация беспилотных авиационных систем">Эксплуатация беспилотных авиационных систем</option>
            <option value="Сервис на воздушном транспорте">Сервис на воздушном транспорте</option>
            <option value="Экспедирование грузов">Экспедирование грузов</option>
            <option value="Управление железнодорожным транспортом">Управление железнодорожным транспортом</option>
            <option value="Управление бульдозером">Управление бульдозером</option>
          </select>
        </td>
        <td>
          <select name="26_1">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
        <td>
          <select name="27_1">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
        <td>
          <select name="28_1">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
      </tr>
    </table>
    <button id="btn-2" role="button">Добавить строку</button>
    <button id="btn-2-del" role="button">Удалить строку</button>

    <h2>Раздел 3. Сведения о выбытии работников</h2>
    <p>3.1. Укажите, пожалуйста, численность выбывших работников предприятия за 2017- 2018 годы:</p>

    <table>
      <tr>
        <th>Выбыло работников, чел.:</th>
        <th>2017</th>
        <th>2018</th>
      </tr>
      <tr>
        <th>Всего</th>
        <td><input type="text" value="<?php echo $_POST['29'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['30'] ?>"></td>
      </tr>
      <tr>
        <th colspan="3">В том числе</th>
      </tr>
      <tr>
        <th>1) В связи с сокращением численности работников</th>
        <td><input type="text" value="<?php echo $_POST['31'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['32'] ?>"></td>
      </tr>
      <tr>
        <th>2) По собственному желанию</th>
        <td><input type="text" value="<?php echo $_POST['33'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['34'] ?>"></td>
      </tr>
      <tr>
        <th>Из них по причине выхода на пенсию</th>
        <td><input type="text" value="<?php echo $_POST['35'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['36'] ?>"></td>
      </tr>

      <tr>
        <th>3) Иные причины</th>
        <td><input type="text" value="<?php echo $_POST['37'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['38'] ?>"></td>
      </tr>
      <tr>
        <th>Из них в связи с потерей трудоспособности (инвалидность, смерть и др.)</th>
        <td><input type="text" value="<?php echo $_POST['39'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['40'] ?>"></td>
      </tr>
    </table>

    <h2>Раздел 4. Экспертная оценка тенденций развития Вашей отрасли</h2>
    <p>4.1. Оцените динамику следующих показателей развития отрасли Вашей деятельности на ближайшие 3-5 лет (сделайте
      отметку в соответствующей ячейке напротив показателя):</p>

    <table>
      <tr>
        <th>Наименование показателя</th>
        <th>Снижения</th>
        <th>Стабильность</th>
        <th>Повышение</th>
      </tr>
      <tr>
        <th>Объем промышленного производства</th>
        <td><input type="text" value="<?php echo $_POST['41'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['42'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['43'] ?>"></td>
      </tr>
      <tr>
        <th>Объем инвестиций</th>
        <td><input type="text" value="<?php echo $_POST['44'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['45'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['46'] ?>"></td>
      </tr>
      <tr>
        <th>Среднемесячная заработная плата работников</th>
        <td><input type="text" value="<?php echo $_POST['47'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['48'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['49'] ?>"></td>
      </tr>
      <tr>
        <th>Среднесписочная численность работников за год</th>
        <td><input type="text" value="<?php echo $_POST['50'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['51'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['52'] ?>"></td>
      </tr>
      <tr>
        <th>Производительность труда</th>
        <td><input type="text" value="<?php echo $_POST['53'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['54'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['55'] ?>"></td>
      </tr>
      <tr>
        <th>Прибыль</th>
        <td><input type="text" value="<?php echo $_POST['56'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['57'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['58'] ?>"></td>
      </tr>
      <tr>
        <th>Налоговые поступления в бюджеты всех уровней</th>
        <td><input type="text" value="<?php echo $_POST['59'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['60'] ?>"></td>
        <td><input type="text" value="<?php echo $_POST['61'] ?>"></td>
      </tr>
    </table>
    <h2 style="text-align: center">Благодарим Вас за искренние ответы!</h2>
    <input type="submit" value="">
  </form>
  <script>
    function table1Row(nextId) {
      return `<tr> <td> ${nextId} </td> <td><input type="text" value="<?php echo $_POST['17'] ?>_${nextId}"></td> <td> <select name="18_${nextId}"> <option value="ВО">ВО</option> <option value="СПО">СПО</option> <option value="НПО">НПО</option> </select> </td> <td><input type="text" value="<?php echo $_POST['19'] ?>_${nextId}"></td> <td> <select name="20_${nextId}"> <option value="до 20000">До 20 000 руб.</option> <option value="от 20 000-30 000">20 001 - 30 000 руб.</option> <option value="от 20 000-30 000">30 001 - 40 000 руб.</option> <option value="от 20 000-30 000">40 001 - 60 000 руб.</option> <option value="от 20 000-30 000">60 001 - 80 000 руб.</option> <option value="от 20 000-30 000">80 001 - 100 000 руб.</option> <option value="от 20 000-30 000">более 100 000 руб.</option> </select> </td> <td><input type="text" value="<?php echo $_POST['21'] ?>_${nextId}"></td> <td><input type="text" value="<?php echo $_POST['22'] ?>_${nextId}"></td> <td><input type="text" value="<?php echo $_POST['23'] ?>_${nextId}"></td> <td><input type="text" value="<?php echo $_POST['24'] ?>_${nextId}"></td> </tr>`
    }

    function table2Row(nextId) {
      return `<tr> <td> ${nextId} </td> <td> <select name="25_${nextId}"> <option value="Информационные кабельные сети">Информационные кабельные сети</option> <option value="Программные решения для бизнеса">Программные решения для бизнеса</option> <option value="Печатные технологии в прессе">Печатные технологии в прессе</option> <option value="Веб-дизайн и разработка">Веб-дизайн и разработка</option> <option value="Сетевое и системное">Сетевое и системное</option> <option value="администрирование">администрирование</option> <option value="ИТ-решения для бизнеса на платформе " 1С: Предприятие 8"">ИТ-решения для бизнеса на платформе "1С: Предприятие 8"</option> <option value="Машинное обучение и большие данные">Машинное обучение и большие данные</option> <option value="Магистральные линии связи. Строительство и эксплуатация ВОЛ П.">Магистральные линии связи. Строительство и эксплуатация ВОЛ П.</option> <option value="Эксплуатации кабельных линий">Эксплуатации кабельных линий</option> <option value="электропередачи">электропередачи</option> <option value="Разработка компьютерных игр и мультимедийных приложений">Разработка компьютерных игр и мультимедийных приложений</option> <option value="Разработка виртуальной и">Разработка виртуальной и</option> <option value="дополненной реальности">дополненной реальности</option> <option value="Разработка решений с использованием блокчейн технологий">Разработка решений с использованием блокчейн технологий</option> <option value="Разработка мобильных приложений">Разработка мобильных приложений</option> <option value="Корпоративная защита от внутренних угроз информационной безопасности">Корпоративная защита от внутренних угроз информационной безопасности</option> <option value="Анализ защищённости информационных систем от внешних угроз">Анализ защищённости информационных систем от внешних угроз</option> <option value="Физическая культура и спорт">Физическая культура и спорт</option> <option value="Преподавание в младших классах">Преподавание в младших классах</option> <option value="Дошкольное воспитание">Дошкольное воспитание</option> <option value="Преподавание музыки в школе">Преподавание музыки в школе</option> <option value="Преподавание в основной и средней школе">Преподавание в основной и средней школе</option> <option value="Преподавание технологии">Преподавание технологии</option> <option value="Полимеханика и автоматизация">Полимеханика и автоматизация</option> <option value="Мехатроника">Мехатроника</option> <option value="Инженерный дизайн CAD">Инженерный дизайн CAD</option> <option value="Токарные работы на станках с ЧПУ">Токарные работы на станках с ЧПУ</option> <option value="Фрезерные работы на станках с ЧПУ">Фрезерные работы на станках с ЧПУ</option> <option value="Сварочные технологии">Сварочные технологии</option> <option value="Электроника">Электроника</option> <option value="Промышленная автоматика">Промышленная автоматика</option> <option value="Мобильная робототехника">Мобильная робототехника</option> <option value="Изготовление прототипов">Изготовление прототипов</option> <option value="Реверсивный инжиниринг">Реверсивный инжиниринг</option> <option value="Промышленная робототехника">Промышленная робототехника</option> <option value="Лазерные технологии">Лазерные технологии</option> <option value="Производственная сборка изделий">Производственная сборка изделий</option> <option value="авиационной техники">авиационной техники</option> <option value="Инженерия космических систем">Инженерия космических систем</option> <option value="Лабораторный химический анализ">Лабораторный химический анализ</option> <option value="Технологии композитов">Технологии композитов</option> <option value="Обработка листового металла">Обработка листового металла</option> <option value="Командная работа на производстве">Командная работа на производстве</option> <option value="Производство металлоконструкций">Производство металлоконструкций</option> <option value="Изготовление изделий из полимерных материалов">Изготовление изделий из полимерных материалов</option> <option value="Промышленная механика и монтаж">Промышленная механика и монтаж</option> <option value="Интернет вещей">Интернет вещей</option> <option value="Обслуживание и ремонт оборудования релейной защиты и автоматики">Обслуживание и ремонт оборудования релейной защиты и автоматики</option> <option value="Управление жизненным">Управление жизненным</option> <option value="циклом/управление программой">циклом/управление программой</option> <option value="Геномная инженерия">Геномная инженерия</option> <option value="Многоосевая обработка на станках с ЧПУ">Многоосевая обработка на станках с ЧПУ</option> <option value="Монтаж электрооборудования">Монтаж электрооборудования</option> <option value="летательных аппаратов">летательных аппаратов</option> <option value="Водные технологии">Водные технологии</option> <option value="Агрономия">Агрономия</option> <option value="Инженерное проектирование">Инженерное проектирование</option> <option value="Неразрушающий контроль">Неразрушающий контроль</option> <option value="Добыча нефти и газа">Добыча нефти и газа</option> <option value="Апаратчик химических технологий">Апаратчик химических технологий</option> <option value="Сельскохозяйственные биотехнологии">Сельскохозяйственные биотехнологии</option> <option value="Архитектурная обработка камня">Архитектурная обработка камня</option> <option value="Облицовка плиткой">Облицовка плиткой</option> <option value="Сантехника и отопление">Сантехника и отопление</option> <option value="Электромонтаж">Электромонтаж</option> <option value="Кирпичная кладка">Кирпичная кладка</option> <option value="Сухое строительство и штукатурные">Сухое строительство и штукатурные</option> <option value="работы">работы</option> <option value="Малярные и декоративные работы">Малярные и декоративные работы</option> <option value="Производство мебели">Производство мебели</option> <option value="Столярное дело">Столярное дело</option> <option value="Плотницкое дело">Плотницкое дело</option> <option value="Ландшафтный дизайн">Ландшафтный дизайн</option> <option value="Холодильная техника и системы">Холодильная техника и системы</option> <option value="кондиционирования">кондиционирования</option> <option value="Кровельные работы по металлу">Кровельные работы по металлу</option> <option value="Геодезия">Геодезия</option> <option value="Кровельные работы">Кровельные работы</option> <option value="Бетонные строительные работы">Бетонные строительные работы</option> <option value="Укладка напольных покрытий">Укладка напольных покрытий</option> <option value="Каркасное домостроение">Каркасное домостроение</option> <option value="Реставрация произведений из дерева">Реставрация произведений из дерева</option> <option value="Монтаж и эксплуатация газового оборудования">Монтаж и эксплуатация газового оборудования</option> <option value="Парикмахерское искусство">Парикмахерское искусство</option> <option value="Эстетическая косметология">Эстетическая косметология</option> <option value="Кондитерское дело">Кондитерское дело</option> <option value="Поварское дело">Поварское дело</option> <option value="Ресторанный сервис">Ресторанный сервис</option> <option value="Медицинский и социальный уход">Медицинский и социальный уход</option> <option value="Хлебопечение">Хлебопечение</option> <option value="Администрирование отеля">Администрирование отеля</option> <option value="Спасательные работы">Спасательные работы</option> <option value="Предпринимательство">Предпринимательство</option> <option value="Выпечка осетинских пирогов">Выпечка осетинских пирогов</option> <option value="Лабораторный медицинский анализ">Лабораторный медицинский анализ</option> <option value="Медицинская оптика">Медицинская оптика</option> <option value="Ветеринария">Ветеринария</option> <option value="Туризм">Туризм</option> <option value="Организация экскурсионных услуг">Организация экскурсионных услуг</option> <option value="Виноделие">Виноделие</option> <option value="Охрана труда">Охрана труда</option> <option value="Правоохранительная деятельность (Полицейский)">Правоохранительная деятельность (Полицейский)</option> <option value="Фармацевтика">Фармацевтика</option> <option value="Проводник пассажирского вагона">Проводник пассажирского вагона</option> <option value="Рекрутер">Рекрутер</option> <option value="Интернет маркетинг">Интернет маркетинг</option> <option value="Документационное обеспечение управления и архивоведения">Документационное обеспечение управления и архивоведения</option> <option value="Безопасность жизнидеятельности на судне">Безопасность жизнидеятельности на судне</option> <option value="Реклама">Реклама</option> <option value="Ювелирное дело">Ювелирное дело</option> <option value="Флористика">Флористика</option> <option value="Технологии моды">Технологии моды</option> <option value="Графический дизайн">Графический дизайн</option> <option value="Визуальный мерчендайзинг">Визуальный мерчендайзинг</option> <option value="Дизайн интерьера">Дизайн интерьера</option> <option value="Видеопроизводство">Видеопроизводство</option> <option value="Фотография">Фотография</option> <option value="Звукорежиссура">Звукорежиссура</option> <option value="Огранка ювелирных вставок">Огранка ювелирных вставок</option> <option value="Промышленный дизайн">Промышленный дизайн</option> <option value="3D Моделирование для компьютерных игр">3D Моделирование для компьютерных игр</option> <option value="Огранка алмазов">Огранка алмазов</option> <option value="Кузовной ремонт">Кузовной ремонт</option> <option value="Обслуживание авиационной техники">Обслуживание авиационной техники</option> <option value="Ремонт и обслуживание легковых автомобилей">Ремонт и обслуживание легковых автомобилей</option> <option value="Окраска автомобиля">Окраска автомобиля</option> <option value="Обслуживание тяжелой техники">Обслуживание тяжелой техники</option> <option value="Обслуживание грузовой техники">Обслуживание грузовой техники</option> <option value="Эксплуатация сельскохозяйствеиных машин">Эксплуатация сельскохозяйствеиных машин</option> <option value="Эксплуатация беспилотных авиационных систем">Эксплуатация беспилотных авиационных систем</option> <option value="Сервис на воздушном транспорте">Сервис на воздушном транспорте</option> <option value="Экспедирование грузов">Экспедирование грузов</option> <option value="Управление железнодорожным транспортом">Управление железнодорожным транспортом</option> <option value="Управление бульдозером">Управление бульдозером</option> </select> </td> <td> <select name="26_${nextId}"> <option value="высокая">Высокая</option> <option value="средняя">Средняя</option> <option value="низкая">Низкая</option> </select> </td> <td> <select name="27_${nextId}"> <option value="высокая">Высокая</option> <option value="средняя">Средняя</option> <option value="низкая">Низкая</option> </select> </td> <td> <select name="28_${nextId}"> <option value="высокая">Высокая</option> <option value="средняя">Средняя</option> <option value="низкая">Низкая</option> </select> </td> </tr>`
    }

    var table1 = document.getElementById('tbl-1');
    var button1 = document.getElementById('btn-1');
    var button1Del = document.getElementById('btn-1-del');
    var id1 = 2;

    button1.addEventListener('click', function (evt) {
      evt.preventDefault();
      table1.insertAdjacentHTML('beforeend', table1Row(id1++));
    });

    button1Del.addEventListener('click', function (evt) {
      evt.preventDefault();
      if (id1 != 2) {
        table1.deleteRow(table1.rows.length - 1);
        id1--;
      }
    });

    var table2 = document.getElementById('tbl-2');
    var button2 = document.getElementById('btn-2');
    var button2Del = document.getElementById('btn-2-del');
    var id2 = 2;

    button2.addEventListener('click', function (evt) {
      evt.preventDefault();
      table2.insertAdjacentHTML('beforeend', table2Row(id2++));
    });

    button2Del.addEventListener('click', function (evt) {
      evt.preventDefault();
      if (id2 != 2) {
        table2.deleteRow(table2.rows.length - 1);
        id2--;
      }
    });
  </script>
</body>

</html>
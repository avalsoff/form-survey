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

<?php 

print_r($_GET);

?>

<body>
  <form method="POST" action="https://echo.htmlacademy.ru" class="container">
    <table>
      <tr>
        <th style="width: 40%">Полное наименование организации</th>
        <td><input type="text" name="0"></td>
      </tr>
      <tr>
        <th>Код и наименование основного вида экономической деятельности (по классификатору до 01.01.2017 года)</th>
        <td><input type="text" name="1"></td>
      </tr>
      <tr>
        <th>Код и наименование основного вида экономической деятельности (по классификатору после 01.01.2017 года)</th>
        <td><input type="text" name="2"></td>
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
        <td><input type="text" name="4"></td>
      </tr>
      <tr>
        <th>Муниципальное образование</th>
        <td><input type="text" name="5"></td>
      </tr>
      <tr>
        <th>Телефон</th>
        <td><input type="text" name="6"></td>
      </tr>
      <tr>
        <th>Адрес электронной почты</th>
        <td><input type="text" name="7"></td>
      </tr>
      <tr>
        <th>Год основания предприятия</th>
        <td><input type="text" name="8"></td>
      </tr>
      <tr>
        <th>Ф.И.О. руководителя предприятия</th>
        <td><input type="text" name="9"></td>
      </tr>
    </table>

    <table>
      <tr>
        <th style="width: 40%">Ф.И.О. ответственного за заполнение анкеты</th>
        <td><input type="text" name="10"></td>
      </tr>
      <tr>
        <th>Адрес электронной почты</th>
        <td><input type="text" name="11"></td>
      </tr>
      <tr>
        <th>Контактный телефон</th>
        <td><input type="text" name="12"></td>
      </tr>
    </table>

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
        <td><input type="text" name="13"></td>
        <td><input type="text" name="14"></td>
        <td><input type="text" name="15"></td>
        <td><input type="text" name="16"></td>
      </tr>
    </table>

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
        <td><input type="text" name="17_1"></td>
        <td>
          <select name="18_1">
            <option value="ВО">ВО</option>
            <option value="СПО">СПО</option>
            <option value="НПО">НПО</option>
          </select>
        </td>
        <td><input type="text" name="19_1"></td>
        <td>
          <select name="20_1">
            <option>До 20 000 руб.</option>
            <option>20 001 - 30 000 руб.</option>
            <option>30 001 - 40 000 руб.</option>
            <option>40 001 - 60 000 руб.</option>
            <option>60 001 - 80 000 руб.</option>
            <option>80 001 - 100 000 руб.</option>
            <option>более 100 000 руб.</option>
          </select>
        </td>
        <td><input type="text" name="21_1"></td>
        <td><input type="text" name="22_1"></td>
        <td><input type="text" name="23_1"></td>
        <td><input type="text" name="24_1"></td>
      </tr>
    </table>
    <button id="btn-1" role="button">Добавить строку</button>
    <button id="btn-1-del" role="button">Удалить строку</button>
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
            <option>3D Моделирование для компьютерных игр</option>
            <option>Агрономия</option>
            <option>Администрирование отеля</option>
            <option>Анализ защищённости информационных систем от внешних угроз</option>
            <option>Апаратчик химических технологий</option>
            <option>Архитектурная обработка камня</option>
            <option>Безопасность жизнидеятельности на судне</option>
            <option>Бетонные строительные работы</option>
            <option>Веб-дизайн и разработка</option>
            <option>Ветеринария</option>
            <option>Видеопроизводство</option>
            <option>Визуальный мерчендайзинг</option>
            <option>Виноделие</option>
            <option>Водные технологии</option>
            <option>Выпечка осетинских пирогов</option>
            <option>Геномная инженерия</option>
            <option>Геодезия</option>
            <option>Графический дизайн</option>
            <option>Дизайн интерьера</option>
            <option>Добыча нефти и газа</option>
            <option>Документационное обеспечение управления и архивоведения</option>
            <option>Дошкольное воспитание</option>
            <option>Звукорежиссура</option>
            <option>ИТ-решения для бизнеса на платформе "1С: Предприятие 8"</option>
            <option>Изготовление изделий из полимерных материалов</option>
            <option>Изготовление прототипов</option>
            <option>Инженерия космических систем</option>
            <option>Инженерное проектирование</option>
            <option>Инженерный дизайн CAD</option>
            <option>Интернет вещей</option>
            <option>Интернет маркетинг</option>
            <option>Информационные кабельные сети</option>
            <option>Каркасное домостроение</option>
            <option>Кирпичная кладка</option>
            <option>Командная работа на производстве</option>
            <option>Кондитерское дело</option>
            <option>Корпоративная защита от внутренних угроз информационной безопасности</option>
            <option>Кровельные работы</option>
            <option>Кровельные работы по металлу</option>
            <option>Кузовной ремонт</option>
            <option>Лабораторный медицинский анализ</option>
            <option>Лабораторный химический анализ</option>
            <option>Лазерные технологии</option>
            <option>Ландшафтный дизайн</option>
            <option>Магистральные линии связи. Строительство и эксплуатация ВОЛ П.</option>
            <option>Малярные и декоративные работы</option>
            <option>Машинное обучение и большие данные</option>
            <option>Медицинская оптика</option>
            <option>Медицинский и социальный уход</option>
            <option>Мехатроника</option>
            <option>Многоосевая обработка на станках с ЧПУ</option>
            <option>Мобильная робототехника</option>
            <option>Монтаж и эксплуатация газового оборудования</option>
            <option>Монтаж электрооборудования летательных аппаратов</option>
            <option>Неразрушающий контроль</option>
            <option>Облицовка плиткой</option>
            <option>Обработка листового металла</option>
            <option>Обслуживание авиационной техники</option>
            <option>Обслуживание грузовой техники</option>
            <option>Обслуживание и ремонт оборудования релейной защиты и автоматики</option>
            <option>Обслуживание тяжелой техники</option>
            <option>Огранка алмазов</option>
            <option>Огранка ювелирных вставок</option>
            <option>Окраска автомобиля</option>
            <option>Организация экскурсионных услуг</option>
            <option>Охрана труда</option>
            <option>Парикмахерское искусство</option>
            <option>Печатные технологии в прессе</option>
            <option>Плотницкое дело</option>
            <option>Поварское дело</option>
            <option>Полимеханика и автоматизация</option>
            <option>Правоохранительная деятельность (Полицейский)</option>
            <option>Предпринимательство</option>
            <option>Преподавание в младших классах</option>
            <option>Преподавание в основной и средней школе</option>
            <option>Преподавание музыки в школе</option>
            <option>Преподавание технологии</option>
            <option>Проводник пассажирского вагона</option>
            <option>Программные решения для бизнеса</option>
            <option>Производственная сборка изделий авиационной техники</option>
            <option>Производство мебели</option>
            <option>Производство металлоконструкций</option>
            <option>Промышленная автоматика</option>
            <option>Промышленная механика и монтаж</option>
            <option>Промышленная робототехника</option>
            <option>Промышленный дизайн</option>
            <option>Разработка виртуальной и дополненной реальности</option>
            <option>Разработка компьютерных игр и мультимедийных приложений</option>
            <option>Разработка мобильных приложений</option>
            <option>Разработка решений с использованием блокчейн технологий</option>
            <option>Реверсивный инжиниринг</option>
            <option>Реклама</option>
            <option>Рекрутер</option>
            <option>Ремонт и обслуживание легковых автомобилей</option>
            <option>Реставрация произведений из дерева</option>
            <option>Ресторанный сервис</option>
            <option>Сантехника и отопление</option>
            <option>Сварочные технологии</option>
            <option>Сельскохозяйственные биотехнологии</option>
            <option>Сервис на воздушном транспорте</option>
            <option>Сетевое и системное администрирование</option>
            <option>Спасательные работы</option>
            <option>Столярное дело</option>
            <option>Сухое строительство и штукатурные работы</option>
            <option>Технологии композитов</option>
            <option>Технологии моды</option>
            <option>Токарные работы на станках с ЧПУ</option>
            <option>Туризм</option>
            <option>Укладка напольных покрытий</option>
            <option>Управление бульдозером</option>
            <option>Управление железнодорожным транспортом</option>
            <option>Управление жизненным циклом/управление программой</option>
            <option>Фармацевтика</option>
            <option>Физическая культура и спорт</option>
            <option>Флористика</option>
            <option>Фотография</option>
            <option>Фрезерные работы на станках с ЧПУ</option>
            <option>Хлебопечение</option>
            <option>Холодильная техника и системы кондиционирования</option>
            <option>Экспедирование грузов</option>
            <option>Эксплуатации кабельных линий электропередачи</option>
            <option>Эксплуатация беспилотных авиационных систем</option>
            <option>Эксплуатация сельскохозяйствеиных машин</option>
            <option>Электромонтаж</option>
            <option>Электроника</option>
            <option>Эстетическая косметология</option>
            <option>Ювелирное дело</option>
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
    <table>
      <tr>
        <th>Выбыло работников, чел.:</th>
        <th>2017</th>
        <th>2018</th>
      </tr>
      <tr>
        <th>Всего</th>
        <td><input type="text" name="29"></td>
        <td><input type="text" name="30"></td>
      </tr>
      <tr>
        <th colspan="3">В том числе</th>
      </tr>
      <tr>
        <th>1) В связи с сокращением численности работников</th>
        <td><input type="text" name="31"></td>
        <td><input type="text" name="32"></td>
      </tr>
      <tr>
        <th>2) По собственному желанию</th>
        <td><input type="text" name="33"></td>
        <td><input type="text" name="34"></td>
      </tr>
      <tr>
        <th>Из них по причине выхода на пенсию</th>
        <td><input type="text" name="35"></td>
        <td><input type="text" name="36"></td>
      </tr>

      <tr>
        <th>3) Иные причины</th>
        <td><input type="text" name="37"></td>
        <td><input type="text" name="38"></td>
      </tr>
      <tr>
        <th>Из них в связи с потерей трудоспособности (инвалидность, смерть и др.)</th>
        <td><input type="text" name="39"></td>
        <td><input type="text" name="40"></td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Наименование показателя</th>
        <th>Снижения</th>
        <th>Стабильность</th>
        <th>Повышение</th>
      </tr>
      <tr>
        <th>Объем промышленного производства</th>
        <td><input type="text" name="41"></td>
        <td><input type="text" name="42"></td>
        <td><input type="text" name="43"></td>
      </tr>
      <tr>
        <th>Объем инвестиций</th>
        <td><input type="text" name="44"></td>
        <td><input type="text" name="45"></td>
        <td><input type="text" name="46"></td>
      </tr>
      <tr>
        <th>Среднемесячная заработная плата работников</th>
        <td><input type="text" name="47"></td>
        <td><input type="text" name="48"></td>
        <td><input type="text" name="49"></td>
      </tr>
      <tr>
        <th>Среднесписочная численность работников за год</th>
        <td><input type="text" name="50"></td>
        <td><input type="text" name="51"></td>
        <td><input type="text" name="52"></td>
      </tr>
      <tr>
        <th>Производительность труда</th>
        <td><input type="text" name="53"></td>
        <td><input type="text" name="54"></td>
        <td><input type="text" name="55"></td>
      </tr>
      <tr>
        <th>Прибыль</th>
        <td><input type="text" name="56"></td>
        <td><input type="text" name="57"></td>
        <td><input type="text" name="58"></td>
      </tr>
      <tr>
        <th>Налоговые поступления в бюджеты всех уровней</th>
        <td><input type="text" name="59"></td>
        <td><input type="text" name="60"></td>
        <td><input type="text" name="61"></td>
      </tr>
    </table>
  </form>
  <script>
    function table1Row(nextId) {
      return `      
      <tr>
        <td>
          ${nextId}
        </td>
        <td><input type="text" name="17_${nextId}"></td>
        <td>
          <select name="18_${nextId}">
            <option value="ВО">ВО</option>
            <option value="СПО">СПО</option>
            <option value="НПО">НПО</option>
          </select>
        </td>
        <td><input type="text" name="19_${nextId}"></td>
        <td>
          <select name="20_${nextId}">
            <option>До 20 000 руб.</option>
            <option>20 001 - 30 000 руб.</option>
            <option>30 001 - 40 000 руб.</option>
            <option>40 001 - 60 000 руб.</option>
            <option>60 001 - 80 000 руб.</option>
            <option>80 001 - 100 000 руб.</option>
            <option>более 100 000 руб.</option>
          </select>
        </td>
        <td><input type="text" name="21_${nextId}"></td>
        <td><input type="text" name="22_${nextId}"></td>
        <td><input type="text" name="23_${nextId}"></td>
        <td><input type="text" name="24_${nextId}"></td>
      `
    }

    function table2Row(nextId) {
      return `      
      <tr>
        <td>
          ${nextId}
        </td>
        <td>
          <select name="25_${nextId}">
            <option>3D Моделирование для компьютерных игр</option>
            <option>Агрономия</option>
            <option>Администрирование отеля</option>
            <option>Анализ защищённости информационных систем от внешних угроз</option>
            <option>Апаратчик химических технологий</option>
            <option>Архитектурная обработка камня</option>
            <option>Безопасность жизнидеятельности на судне</option>
            <option>Бетонные строительные работы</option>
            <option>Веб-дизайн и разработка</option>
            <option>Ветеринария</option>
            <option>Видеопроизводство</option>
            <option>Визуальный мерчендайзинг</option>
            <option>Виноделие</option>
            <option>Водные технологии</option>
            <option>Выпечка осетинских пирогов</option>
            <option>Геномная инженерия</option>
            <option>Геодезия</option>
            <option>Графический дизайн</option>
            <option>Дизайн интерьера</option>
            <option>Добыча нефти и газа</option>
            <option>Документационное обеспечение управления и архивоведения</option>
            <option>Дошкольное воспитание</option>
            <option>Звукорежиссура</option>
            <option>ИТ-решения для бизнеса на платформе "1С: Предприятие 8"</option>
            <option>Изготовление изделий из полимерных материалов</option>
            <option>Изготовление прототипов</option>
            <option>Инженерия космических систем</option>
            <option>Инженерное проектирование</option>
            <option>Инженерный дизайн CAD</option>
            <option>Интернет вещей</option>
            <option>Интернет маркетинг</option>
            <option>Информационные кабельные сети</option>
            <option>Каркасное домостроение</option>
            <option>Кирпичная кладка</option>
            <option>Командная работа на производстве</option>
            <option>Кондитерское дело</option>
            <option>Корпоративная защита от внутренних угроз информационной безопасности</option>
            <option>Кровельные работы</option>
            <option>Кровельные работы по металлу</option>
            <option>Кузовной ремонт</option>
            <option>Лабораторный медицинский анализ</option>
            <option>Лабораторный химический анализ</option>
            <option>Лазерные технологии</option>
            <option>Ландшафтный дизайн</option>
            <option>Магистральные линии связи. Строительство и эксплуатация ВОЛ П.</option>
            <option>Малярные и декоративные работы</option>
            <option>Машинное обучение и большие данные</option>
            <option>Медицинская оптика</option>
            <option>Медицинский и социальный уход</option>
            <option>Мехатроника</option>
            <option>Многоосевая обработка на станках с ЧПУ</option>
            <option>Мобильная робототехника</option>
            <option>Монтаж и эксплуатация газового оборудования</option>
            <option>Монтаж электрооборудования летательных аппаратов</option>
            <option>Неразрушающий контроль</option>
            <option>Облицовка плиткой</option>
            <option>Обработка листового металла</option>
            <option>Обслуживание авиационной техники</option>
            <option>Обслуживание грузовой техники</option>
            <option>Обслуживание и ремонт оборудования релейной защиты и автоматики</option>
            <option>Обслуживание тяжелой техники</option>
            <option>Огранка алмазов</option>
            <option>Огранка ювелирных вставок</option>
            <option>Окраска автомобиля</option>
            <option>Организация экскурсионных услуг</option>
            <option>Охрана труда</option>
            <option>Парикмахерское искусство</option>
            <option>Печатные технологии в прессе</option>
            <option>Плотницкое дело</option>
            <option>Поварское дело</option>
            <option>Полимеханика и автоматизация</option>
            <option>Правоохранительная деятельность (Полицейский)</option>
            <option>Предпринимательство</option>
            <option>Преподавание в младших классах</option>
            <option>Преподавание в основной и средней школе</option>
            <option>Преподавание музыки в школе</option>
            <option>Преподавание технологии</option>
            <option>Проводник пассажирского вагона</option>
            <option>Программные решения для бизнеса</option>
            <option>Производственная сборка изделий авиационной техники</option>
            <option>Производство мебели</option>
            <option>Производство металлоконструкций</option>
            <option>Промышленная автоматика</option>
            <option>Промышленная механика и монтаж</option>
            <option>Промышленная робототехника</option>
            <option>Промышленный дизайн</option>
            <option>Разработка виртуальной и дополненной реальности</option>
            <option>Разработка компьютерных игр и мультимедийных приложений</option>
            <option>Разработка мобильных приложений</option>
            <option>Разработка решений с использованием блокчейн технологий</option>
            <option>Реверсивный инжиниринг</option>
            <option>Реклама</option>
            <option>Рекрутер</option>
            <option>Ремонт и обслуживание легковых автомобилей</option>
            <option>Реставрация произведений из дерева</option>
            <option>Ресторанный сервис</option>
            <option>Сантехника и отопление</option>
            <option>Сварочные технологии</option>
            <option>Сельскохозяйственные биотехнологии</option>
            <option>Сервис на воздушном транспорте</option>
            <option>Сетевое и системное администрирование</option>
            <option>Спасательные работы</option>
            <option>Столярное дело</option>
            <option>Сухое строительство и штукатурные работы</option>
            <option>Технологии композитов</option>
            <option>Технологии моды</option>
            <option>Токарные работы на станках с ЧПУ</option>
            <option>Туризм</option>
            <option>Укладка напольных покрытий</option>
            <option>Управление бульдозером</option>
            <option>Управление железнодорожным транспортом</option>
            <option>Управление жизненным циклом/управление программой</option>
            <option>Фармацевтика</option>
            <option>Физическая культура и спорт</option>
            <option>Флористика</option>
            <option>Фотография</option>
            <option>Фрезерные работы на станках с ЧПУ</option>
            <option>Хлебопечение</option>
            <option>Холодильная техника и системы кондиционирования</option>
            <option>Экспедирование грузов</option>
            <option>Эксплуатации кабельных линий электропередачи</option>
            <option>Эксплуатация беспилотных авиационных систем</option>
            <option>Эксплуатация сельскохозяйствеиных машин</option>
            <option>Электромонтаж</option>
            <option>Электроника</option>
            <option>Эстетическая косметология</option>
            <option>Ювелирное дело</option>
          </select>
        </td>
        <td>
          <select name="26_${nextId}">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
        <td>
          <select name="27_${nextId}">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
        <td>
          <select name="28_${nextId}">
            <option value="высокая">Высокая</option>
            <option value="средняя">Средняя</option>
            <option value="низкая">Низкая</option>
          </select>
        </td>
      </tr>`
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
<?php
/*КЛЮЧИ*/
define('SITE_KEY', '6LfBrvwcAAAAAG7buHAuVeI7fFLjz-7TH3wpSw7Z');
define('SECRET_KEY', '6LfBrvwcAAAAAObpM7vtlUaxqLxZz3p1uhtF4ZM5');

/*ОБРАБОТКА ЗАПРОСА*/
if($_POST){
    /*СОЗДАЕМ ФУНКЦИЮ КОТОРАЯ ДЕЛАЕТ ЗАПРОС НА GOOGLE СЕРВИС*/
    function getCaptcha($SecretKey) {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }

    /*ПРОИЗВОДИМ ЗАПРОС НА GOOGLE СЕРВИС И ЗАПИСЫВАЕМ ОТВЕТ*/
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    /*ВЫВОДИМ НА ЭКРАН ПОЛУЧЕННЫЙ ОТВЕТ*/
    var_dump($Return);

    /*ЕСЛИ ЗАПРОС УДАЧНО ОТПРАВЛЕН И ЗНАЧЕНИЕ score БОЛЬШЕ 0,5 ВЫПОЛНЯЕМ КОД*/
    if($Return->success == true && $Return->score > 0.5){
        echo "Succes!";
    }
    else {
        echo "You are Robot";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issa Form</title>
    <link rel="stylesheet" type="text/css" href="/saasform/assets/css/main.css">
</head>

<body>
<div class="form-container">
    <div class="form-header">
        <div class="container form-header__container">
            <div class="form-header__logo">
                <img src="/saasform/assets/img/logo.svg" alt="Логотип компании">
            </div>
            <div class="form-header__decor"></div>
            <h1 class="form-header__title">ДЕМОНСТРАЦИОННЫЙ ДОСТУП К РЕСУРСАМ ВИРТУАЛЬНОЙ ИНФРАСТРУКТУРЫ IAAS</h1>
        </div>
    </div>
{{--    <form action="GET" class="form">--}}
    <form method="POST" action="/sendmailto" class="form" enctype="multipart/form-data">
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br/><br/>
        @csrf
        <div class="container form__container">
            <div class="form__column">
                <div class="form-row">
                    <div class="form-row__icon"><img src="/saasform/assets/img/town.svg" alt="Компания"></div>
                    <h2 class="form-row__title">КОМПАНИЯ (КЛИЕНТ)</h2>
                </div>
                <label for="input-req" class="form__label-require"></label>
                <input type="text" class="form__input" name="input-req" placeholder="Наименование компании" maxlength="100" required>
                <input type="number" id="inn" class="form__input" placeholder="ИНН" maxlength="10">
                <input type="text" class="form__input" placeholder="Адрес места нахождения" maxlength="200">

                <div class="form-row">
                    <div class="form-row__icon"><img src="/saasform/assets/img/user.svg" alt="Клиент"></div>
                    <h2 class="form-row__title">ПРЕДСТАВИТЕЛЬ КЛИЕНТА</h2>
                </div>
                <label for="input-req" class="form__label-require"></label>
                <input type="text" class="form__input" name="input-req" maxlength="100" placeholder="Ф.И.О." required>
                <label for="input-req" class="form__label-require"></label>
                <input type="email" class="form__input" name="input-req" maxlength="100" placeholder="Рабочий Email" required>
                <label for="input-req" class="form__label-require"></label>
                <input type="number" class="form__input" id="phone" name="input-req" maxlength="12" placeholder="Мобильный телефон" required>
            </div>
            <div class="form__column">
                <div class="form-row">
                    <div class="form-row__icon"><img src="/saasform/assets/img/hands.svg" alt="Сделка"></div>
                    <h2 class="form-row__title">СОГЛАШЕНИЕ О ПРЕДОСТАВЛЕНИИ ДЕМОНСТРАЦИОННОГО ДОСТУПА К УСЛУГЕ IAAS </h2>
                </div>
                <div class="form-text">
                    <p class="form-text__text"><span class="form-text__black">МЕЖДУ:</span></p>
                    <br>
                    <p class="form-text__text"><span class="form-text__black">(1) ООО «Связь ВСД»</span>, компанией, головной офис которой находится по адресу: 127083, г. Москва, ул. 8 Марта, д. 14 стр. 1, основной государственный регистрационный номер 1037713010444 (далее Линкс); и</p>
                    <br>
                    <p class="form-text__text"><span class="form-text__black">(2) Компанией</span>, сведения о которой указаны выше (далее Клиент);</p>
                    <br>
                    <p class="form-text__text">(совместно именуемыми «Сторонами»)</p>
                    <br>
                    <p class="form-text__text"><span class="form-text__black">ПРИНИМАЯ ВО ВНИМАНИЕ, ЧТО:</span></p>
                    <br>
                    <p class="form-text__text">Линкс предлагает услугу виртуальной инфраструктуры adminCloud IAAS (далее «Услуга») по предоставлению доступа к мощностям для обработки и хранения данных.</p>
                    <br>
                    <p class="form-text__text">Клиент желает приобрести Услугу у Линкс и для этой цели намерен протестировать Услугу в соответствии с условиями, установленными в данном Соглашении.</p>
                    <br>
                    <p class="form-text__text"><span class="form-text__black">СТОРОНЫ ДОГОВОРИЛИСЬ О НИЖЕСЛЕДУЮЩЕМ:</span></p>
                    <br>
                    <p class="form-text__text"><span class="form-text__black">1. Общие положения</span></p>
                    <br>
                    <p class="form-text__text">1.1 Отношения Сторон в связи с предоставлением демонстрационного доступа к Услуге и тестированию Услуги регулируются положениями Соглашения и стандартными обязательствами конфиденциальности и условиями предоставления демонстрационного доступа к услуге IAAS (далее - «Стандартные условия»). Стандартные условия содержат требования, условия и правила для всех клиентов Линкс, устанавливают права и обязанности Сторон и применяются к отношениям Сторон в связи с предоставлением демонстрационного доступа к Услуге и тестированием Услуги.</p>
                    <br>
                    <p class="form-text__text">1.2 Стандартные условия размещаются на веб-сайте Линкс в сети Интернет по адресу: <a href="https://ru.admindatacenter.com/documents" class="checkbox__box-link">https://ru.admindatacenter.com/documents</a>. Клиент настоящим заверяет и гарантирует, что до подписания настоящего Соглашения ознакомился с действовавшими на дату заключения Соглашения Стандартными условиями, ему понятен смысл и содержание Стандартных условий и обязанностей Клиента, установленных Стандартными условиями. Клиент настоящим заверяет и гарантирует, что доведет содержание Стандартных условий до тех представителей Клиента, которым это необходимо для взаимодействия с Линкс в процессе предоставления демонстрационного доступа к Услугам и тестирования Услуг по настоящему Соглашению.</p>
                    <br>
                    <p class="form-text__text">1.3 Если контекст не требует иного толкования и за исключением нижеизложенного, используемые в настоящем Соглашении слова и фразы, а также понятия, перечисленные в преамбуле Соглашения, имеют значения, как они определены в Стандартных условиях.</p>
                    <br>
                    <table class="form-text__table">
                        <tr>
                            <td class="form-text__text">«Виртуальный ЦОД»</td>
                            <td class="form-text__text">означает виртуальный центр обработки данных на платформе Услуги с параметрами, численные и метрические характеристики которых приведены выше (процессорная мощность CPU, оперативная память RAM, дисковое пространство SAS+SSD, доступ в публичную сеть Интернет, площадка размещения)</td>
                        </tr>
                        <tr>
                            <td class="form-text__text">«Цель»</td>
                            <td class="form-text__text">означает проверку Клиентом функциональности и производительности Услуги в рамках доступа к виртуальному ЦОД;</td>
                        </tr>
                    </table>
                    <br>
                    <p class="form-text__text form-text__black">2. Отношения между Сторонами</p>
                    <br>
                    <p class="form-text__text">2.1 Клиент обязуется произвести тестирование функциональности и производительности Услуги в рамках виртуального ЦОД, а Линкс обязуется обеспечить Клиенту доступ к виртуальному ЦОДу на условиях, установленных в настоящем Соглашении и Стандартных условиях, и в соответствии со всеми применимыми законодательными требованиями. </p>
                    <br>
                    <p class="form-text__text">2.2 Тестирование Услуги Клиентом является бесплатным.</p>
                    <br>
                    <p class="form-text__text form-text__black">3. Сроки предоставления и использования</p>
                    <br>
                    <p class="form-text__text">3.1 Линкс предоставляет виртуальный ЦОД в распоряжение Клиента после принятия условий настоящего Соглашения Клиентом и ввода Клиентом данных учетной записи виртуального ЦОД, отправленных Клиенту на адрес электронной почты.</p>
                    <br>
                    <p class="form-text__text">3.2 Виртуальный ЦОД предоставляется для использования Клиентом на срок до 30 (тридцати) календарных дней.</p>
                    <br>
                    <p class="form-text__text">3.3 По истечении срока Линкс обязуется уведомить Клиента и в течение трёх (3) рабочих дней автоматически уничтожить данные и конфигурации в виртуальном ЦОД, использованном Клиентом.</p>
                    <br>
                    <p class="form-text__text form-text__black">4. Обязательства Клиента и Линкс</p>
                    <br>
                    <p class="form-text__text">4.1 Клиент обязуется:
                        <br>
                        (а) не использовать виртуальный ЦОД в коммерческих целях;
                        <br>
                        (b) не совершать злонамеренные действия в отношении виртуального ЦОД и/или с его использованием, такие как (но не ограничиваясь ими) спам, DDoS атаки, сканирование IP-адресов и портов, размещение незаконных сайтов.
                    </p>
                    <br>
                    <p class="form-text__text">4.2 Клиент обязуется ограничить использование виртуального ЦОД контактными лицами, которые получили данные учетной записи виртуального ЦОД (отправлены Клиенту на адрес электронной почты).Тестирование виртуального ЦОД от имени Клиента должно быть осуществлено исключительно указанными лицами. </p>
                    <br>
                    <p class="form-text__text">Право данных лиц использовать виртуальный ЦОД по настоящему Соглашению не может передаваться каким-либо третьим лицам.</p>
                    <br>
                    <p class="form-text__text">4.3 Стороны обязуются соблюдать конфиденциальность и не раскрывать третьим лицам Конфиденциальную информацию Раскрывающей стороны, а также обеспечить выполнение иных обязательств конфиденциальности, установленных в Стандартных условиях.</p>
                    <br>
                    <p class="form-text__text">4.4. Стороны заверяют и гарантируют, что будут надлежащим образом исполнять обязанности, установленные в Стандартных условиях, относительно обработки Персональных данных.</p>
                    <br>
                    <p class="form-text__text form-text__black">5. Заключительные положения</p>
                    <br>
                    <p class="form-text__text">5.1 Обязательства соблюдения конфиденциальности по Соглашению остаются в силе и продолжают действовать в течение трех (3) лет со дня окончания срока действия настоящего Соглашения. </p>
                    <br>
                    <p class="form-text__text">5.2. Настоящее Соглашение заключается путем обмена данными в соответствии с правилами абзаца второго п. 1 ст. 160, п. 2 ст. 434 ГК РФ, с учетом следующего:
                        <br>
                        (a) Линкс направляет Клиенту оферту на адрес электронной почты Клиента, указанный в запросе на сайте Линкс, содержащий ссылку на интернет-страницу с текстом настоящего соглашения, а также данные учетной записи виртуального ЦОДа;
                        <br>
                        (b) Клиент принимает оферту Линкс о предоставлении демонстрационного доступа к услугам IAAS, путем нажатия на кнопку «Получить демо-доступ» на интернет-странице с текстом настоящего Соглашения. Акцепт условий настоящего соглашения является полным и безоговорочным.
                    </p>
                    <br>
                    <p class="form-text__text">5.3. Лицо, получившее на адрес электронной почты оферту Линкс, заверяет и гарантирует, что он/а имеет необходимые полномочия для заключения настоящего Соглашения от имени Клиента.</p>
                </div>
                <label class='checkbox checkbox__second-type'>
                    <input type='checkbox' name="town" value="moscow" class='checkbox__input'>
                    <span class='checkbox__box'><img src="/saasform/assets/img/check.svg" alt="Галочка"></span>
                    <p class="checkbox__box-text">
                        Предоставляя свои персональные данные, Вы соглашаетесь на их обработку с соответствии с
                        <a href="https://ru.admindatacenter.com/upload/Privacy_policy.pdf" class="checkbox__box-link">Политикой обработки персональных данных ООО «Связь ВСД»</a>. Пожалуйста, внимательно ознакомьтесь
                        с документом, доступным по ссылке, перед направлением своих персональных данных компании.
                    </p>
                </label>
                <p class="form-text__text">
                    Нажимая на кнопку «Получить демо-доступ», я принимаю условия Соглашения о предоставлении демонстрационного доступа к услуге IaaS, изложенного выше.
                </p>
                <div class="button">
                    <div class="button__recapcha"><img src="/saasform/assets/img/capcha.png" alt="Капча"></div>
                    <button type="submit" class="button-submit">
                        <p class="button-submit__text">ПОЛУЧИТЬ ДЕМО-ДОСТУП</p>
                        <img src="/saasform/assets/img/arrow.svg" alt="Стрелка" class="button-submit__arrow">
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    let inn = document.querySelector('#inn')
    let tel = document.querySelector('#phone')
    tel.oninput = function () {
        if (this.value.length > 12) {
            this.value = this.value.slice(0, 12);
        }
    }
    inn.oninput = function () {
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    }
</script>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY?>"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo SITE_KEY;?>', {action: 'homepage'}).then(function(token) {
            //console.log(token);
            document.getElementById('g-recaptcha-response').value=token;
        });
    });
</script>
</body>

</html>

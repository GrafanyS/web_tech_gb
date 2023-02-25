<?php
$name = 'Андрей';
$prof = 'Администратор сети';
$country = 'Респуьлика Белорусь';
$city = 'Брест';
$email = 'email@email.com';
$tel = '89037778866';

$skills = [
    ['name' => 'CISCO', 'percent' => 82],
    ['name' => 'HUAWEI', 'percent' => 80],
    ['name' => 'NETWORK', 'percent' => 75],
    ['name' => 'Media', 'percent' => 50],
];

$workExperience = [
    [
        'jobTitle' => 'РУП "Белтелеком"',
        'periodStart' => 'Ноябрь 1995 ',
        'periodFinish' => 'Текущий',
        'description' => 'Республиканское унитарное предприятие электросвязи «Белтелеком» – ведущая телекоммуникационная 
    компания с многолетней историей, персонал которой обеспечивает и развивает важные для государства, общества, частных
     и корпоративных клиентов технологии связи. В своей деятельности предприятие делает ставку на активную политику 
     расширения и улучшения услуг электросвязи. Компания динамично развивается и занимает лидирующую позицию на 
     телекоммуникационном рынке Республики Беларусь, являясь крупнейшим оператором электросвязи на территории нашей 
     страны.'
    ],

];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/w3.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
        <!-- Left Column -->
        <div class="w3-third">
            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">
                    <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
                         style="width:100%" alt="Avatar">
                    <div class="w3-display-bottomleft w3-container w3-text-black">
                        <h2>
                            <?php echo $name; ?>
                        </h2>
                    </div>
                </div>
                <div class="w3-container">
                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        <?php echo $prof; ?>
                    </p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        <?php echo $country . ' ' . $city; ?>
                    </p>
                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        <?php echo $email; ?>
                    </p>
                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        <?php echo $tel; ?>
                    </p>
                    <hr>
                    <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b>
                    </p>
                    <?php
                    for ($i = 0; $i < count($skills); $i++):
                        $name = $skills[$i]['name'];
                        $percent = $skills[$i]['percent'];
                        ?>
                        <p>
                            <?= $name; ?>
                        </p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                 style="width:<?php echo $percent; ?>%">
                                <?php echo $percent; ?>%
                            </div>
                        </div>
                    <?php endfor; ?>
                    <br>
                    <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
                    </p>
                    <p>Русский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                    </div>
                    <p>Английский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                    </div>
                    <p>Польский</p>
                    <div class="w3-light-grey w3-round-xlarge">
                        <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <!-- End Left Column -->
        </div>
        <!-- Right Column -->
        <div class="w3-twothird">
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16">
                    <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
                    Опыт работы
                </h2>
                <?php
                for ($i = 0; $i < count($workExperience); $i++):
                    $title = $workExperience[$i]['jobTitle'];
                    $start = $workExperience[$i]['periodStart'];
                    $finish = $workExperience[$i]['periodFinish'];
                    $description = $workExperience[$i]['description'];
                    ?>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>
                                <?php echo $title; ?></b>
                        </h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                            <?php echo $start; ?> -
                            <?php if ($finish == 'Current'): ?>
                                <span class="w3-tag w3-teal w3-round">
                      <?php echo $finish; ?>
                    </span>
                            <?php else:
                                echo $finish;
                            endif; ?>
                        </h6>
                        <p>
                            <?php echo $description; ?>
                        </p>
                        <hr>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="w3-container w3-card w3-white">
                <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>gb.ru</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>at this moment</h6>
                    <p>Веб-разработка! Все, что мне нужно знать, в одном месте</p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>МФПУ «Синергия»</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2017 - 2022</h6>
                    <p>Бакалавр</p>
                    <p>Информационные технологии — одна из самых востребованных и высокооплачиваемых сфер деятельности.
                        Если вы хотите стать асом в мире высоких технологий — добро пожаловать на программу подготовки
                        IT-специалистов широкого профиля! Вы получите навыки администрирования информационных систем,
                        проектирования сетей и научитесь самостоятельно разрабатывать и внедрять программное
                        обеспечение..
                    </p>
                    <hr>
                </div>
                <div class="w3-container">
                    <h5 class="w3-opacity"><b>Академия Связи</b></h5>
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2014</h6>
                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                        <p><strong>Учебный центр (сетевая академия)
                                компании&nbsp;</strong><strong>Сі</strong><strong>s</strong><strong>со</strong></p>
                        <p>
                            Полная информация об академии на сайте
                            <a href="http://netacad.by/">http://netacad.by/</a>
                        </p>
                        <p><em>Направления обучения:</em></p>
                        <ul>
                            <li><strong><em>сетевые технологии компьютерных сетей (курс «ССNА»);</em></strong></li>
                            <li><strong><em>основы сетевой безопасности (курс «Network Security»).</em></strong></li>
                        </ul>
                        <p>Программа сетевых академий Сіsсо начала свою работу в Беларуси с 2004 года, когда между
                            компанией Сіsсо Sуstеms и Белорусской государственной академией связи было подписано
                            соответствующее соглашение о сотрудничестве. Первая региональная сетевая академия открылась
                            при
                            академии в 2005 году. В сентябре этого же года на факультете повышения квалификации
                            открылась
                            первая локальная академия по курсу ССNА, в которой за 2,5 года прошли обучение более 300
                            человек.
                            <br>
                            Сегодня&nbsp;<strong>лаборатории</strong>&nbsp;академии&nbsp;
                            <strong>оснащены</strong>&nbsp;оборудованием с возможностью проведения занятий по курсам
                            ССNА,
                            ССNР, IР-телефонии, основам сетевой безопасности.</p>
                        <p>&nbsp;</p>
                    </div>
                    <p>CISCO инженер сети</p><br>
                </div>
            </div>
            <!-- End Right Column -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
</div>
<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
    <script>
        document.write("Copyright &copy; " + new Date().getFullYear() + " Company, Inc. Valetov.");
    </script>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
</footer>
</body>
</html>
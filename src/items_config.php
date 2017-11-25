<?php
//настроки подмены информации по item'ам разделов
$items = [
    'blog' => [],
    'course' => [],
    'event' => []
];

//ПРИМЕРЫ ЗАПОЛНЕНИЯ $items:
$items['blog']['404'] = ['title'=>'Страница не найдена'];
$items['blog']['30years'] = [
    'title' => '30-летие кафедры Теории государства и права и международного права',
    'body' => '
    В июне 2016 г. исполняется 30 лет со дня основания кафедры теории государства и права и международного права - одной из старейших кафедр Института государства и права, ставшей впоследствии alma-mater для всех самостоятельных кафедр, действующих в ИГиП в наши дни. К этому событию были приурочены несколько мероприятий: круглый стол на тему «Политико-правовые аспекты становления и развития российской государственности», торжественное собрание, посвященное 30-летию кафедры теории государства и права и международного права, а также открытое занятие старшего преподавателя кафедры А.В. Кузнецова на тему «Война за независимость и образование США».
    Праздничное собрание, состоявшееся 13 мая в Институте государства и права, объединило в себе торжественную часть, музыкальные и иные творческие выступления, а также многочисленные поздравления. Поздравить кафедру пришли коллеги, выпускники, работодатели, представители государственных органов, общественных организаций и т.д. В их числе начальник правового управления Тюменской областной Думы В.А. Серков, уполномоченный по правам человека в Тюменской области С.В. Миневцев, председатель избирательной комиссии Тюменской области И.Н. Халин, председатель общественной палаты Тюменской области Г.Н. Чеботарёв, генеральный директор ЗАО КК «ПРЭФИШ» С.М. Шахотин, генеральный директор ООО «ТопЛигелКонсалтинг» Н.Г. Когошвили, генеральный директор юридической компании «Аспект М» С.В. Матаев и другие. Гости собрания сказали множество тёплых слов и искренних пожеланий членам кафедры теории государства и права и международного права, отметив её многочисленные заслуги перед Институтом, Университетом и региональным юридическим образованием в целом. 
   </p>',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'https://www.utmn.ru/upload/iblock/7e4/IMG_3791.JPG'
];
$items['blog']['Raiko-Knez'] = [
    'title' => 'Встреча с Райко Кнез, профессором Университета Марибора (Словения)',
    'body' => '<b>Райко Кнез, профессор Университета Марибора (Словения) познакомил студентов с новой магистерской программой "Международное право, европейское право" </b>',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'https://www.utmn.ru/upload/iblock/998/2016.02.15%20%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D1%8F%20%D0%BF%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%B0%20%D0%9A%D0%BD%D0%B5%D0%B7%D0%B0%20_%20002.jpg"'
];
$items['blog']['NewRules'] = [
    'title' => 'Новая версия правил внутреннего распорядка',
    'body' => '
    9 ноября ректор ТюмГУ Валерий Фальков переподписал приказ, в соответствии с федеральным законодательством об изменении продолжительности каникул. Есть ли отличия от старого приказа?

Рекомендуем ознакомиться с содержанием каждого из них, чтобы обладать достоверной информацией относительно правил внутреннего распорядка обучающихся.

Новый приказ ориентирован на качественное соблюдение прав студентов.

Раздел приказа под номером 3 посвящён основным правам и обязанностям обучающихся. Перечень прав студентов был значительно расширен. В документ были добавлены 9 новых пунктов. Теперь, помимо указанных в предыдущей версии правил прав, обучающийся имеет право:
<ul>
<li> осваивать образовательные программы по индивидуальному учебному плану;
<li> участвовать в формировании содержания своего профессионального образования;
<li> осуществлять выбор факультативных и элективных учебных предметов, курсов, дисциплин (модулей) из перечня, предлагаемого университетом;
<li> осваивать любые учебные предметы, курсы, дисциплины, преподаваемы в университете и вне осваиваемых дисциплин;
<li> получать отсрочку от призыва на военную службу;
<li> переводиться в другие институты университета;
<li> переходить с платного обучения на бесплатное;
<li> участвовать в научно-исследовательской, научно-технической, экспериментальной и инновационной деятельности;
<li> проходить стажировки в других образовательных организациях.
</ul>
Таким образом, новая версия правил внутреннего распорядка расширяет список задокументированных прав обучающихся, которыми он может воспользоваться. Ниже прикрепляем две версии приказа: новый и предыдущий.
    ',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'https://pp.userapi.com/c639629/v639629199/65ad8/1JaEJsNTxC0.jpg'
];

$items['blog']['Ladya'] = [
    'title' => 'Встреча клуба "Ладья" со студентами институт государства и права',
    'body' => '
    7 ноября (вторник) в 13:00 пройдёт встреча нашего клуба со студентами институт государства и права!🎓
На встрече вы сможете узнать об ССК "Ладья", о АССК России в целом и, конечно же, о надвигающимся Чемпионате АССК России в котором каждый желающий сможет принять участие.🏅
    ',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'https://pp.userapi.com/c824203/v824203555/12c17/_6pNQ8eks18.jpg'
];
$items['blog']['Juravleva'] = [
    'title' => 'Встреча клуба "Ладья" со студентами институт государства и права',
    'body' => '
  Студентка Института государства и права ТюмГУ Елизавета Журавлева стала победителем VII Всероссийского конкурса эссе на английском языке о профессиональной этике юриста.

В качестве приза Елизавета получила возможность принять участие в интенсивном учебном курсе на английском языке «Профессиональная ответственность и юридическая этика на международном рынке юридических услуг», который прошёл с 15 по 18 ноября на территории юридического факультета МГУ, а также в офисах международных юридических компаний «DLA Piper» и «White & Case LLC».

"Это отличная возможность поработать с наиболее успешными и выдающимися российскими и иностранными специалистами в юридической сфере, изучить основополагающие принципы профессионального и этического поведения юриста и погрузиться в атмосферу одних из самых престижных юридических фирм с мировыми именами. Каждый день был посвящён наиболее острым проблемам профессиональной этики и деятельности юриста (избегание конфликтов интересов, конфиденциальность информации, независимость адвокатов и судей, необходимость деятельности Pro Bono, юридическая экспертиза документов, правила взаимодействие с клиентами - KYC - “know your client”), проводились теоретические лекции и групповое решение практических кейсов на английском. Я была особенно поражена тем, что профессора МГУ и иностранных вузов и партнеры международных юридических фирм с мировой репутацией не только делись опытом и знаниями, выступая в роли наставников, но и общались со студентами на равных, благодаря чему каждая лекция превращалась в увлекательнейшую дискуссию.
Общение и взаимодействие с талантливыми студентами самых передовых вузов России в сфере юридического образования (МГИМО, МГУ, ВШЭ, СПбГУ, УрГЮУ) зарядило меня творческой и научной энергией и придало мне стимул к совершенствованию английского и саморазвитию в целом! Участвуйте в программе, дерзайте, пробуйте свои силы и вы точно добьётесь успеха!" - рассказала Студенческому научному обществу ИГиП ТюмГУ Елизавета.
  ',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'https://pp.userapi.com/c824203/v824203555/12c17/_6pNQ8eks18.jpg'
];

$items['course']['404'] = ['title'=>'Страница не найдена'];
$items['course']['example'] = [
    'title' => 'Название курса',
    'body' => '<p>This course introduces students to basic web design using HTML (Hypertext Markup Language) and CSS (Cascading Style Sheets). The course does not require any prior knowledge of HTML or web design. Throughout the course students are introduced to planning and designing effective web pages; implementing web pages by writing <strong>HTML and CSS code; enhancing web pages with the use of page layout techniques, text formatting, graphics, images, and multimedia; and producing a functional, multi-page website.</strong></p>
                <hr>
                <h4>List of Content</h4>
                <p>The course topical outline provides a summary of course topics that can be used as a guide when progressing through the course. Upon successful completion of this course, students will be able to:</p>
                <ul>
                    <li>Recognize and understand HTML web page elements</li>
                    <li>Know how to write HTML code</li>
                    <li>Understand and apply effective web design principles</li>
                    <li>Enhance web pages using text formatting, color, graphics, images, and multimedia</li>
                    <li>Incorporate forms into web pages</li>
                    <li>Understand and apply CSS to format web page elements</li>
                    <li>Plan, design, and publish a multi-page website</li>
                </ul>
                <hr>
                <p>Upon successful completion of this course, students will have a good foundation in web design using HTML and CSS and will be prepared to study more advanced web design topics.<br><br>Students should have a general background in using a computer, managing files, and a basic knowledge of the Internet. Students should also be able to navigate to and within a website using a web browser such as Chrome, Firefox, Internet Explorer, or Safari. Students do not need to purchase any software for this course.</p>
                <div class="alert alert-success"><strong>Available Courses</strong> - Find Courses, Telecourses & Web Courses</div>
                <blockquote>
                    <h5>Simply Audit this Course</h5>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, minus, quasi, modi beatae ratione voluptatibus deserunt ipsam assumenda nesciunt illum voluptate tempora sed officia reprehenderit voluptatum eaque magnam sunt quia!
                </blockquote>'
];

$items['event']['404'] = ['title'=>'Страница не найдена'];
$items['event']['example'] = [
    'title' => 'Название события',
    'body' => '<span class="event-time">Friday 22 November - Friday 24 January 2014</span>
                <p>During this inaugural lecture Professor Amanda Burls considers the state of public and patient involvement in shared decision making and health research. Professor Burls will discuss the activities of the Network to Amanda-Burls-NuffieldSupport Understanding of Health Research and ThinkWell, a not-for-profit organisation set up to help the public understand health information so they can make.</p>
                <p><strong class="dark-text">Speaker:</strong> Professor Amanda Burls - Professor of Public Health, City University London</p>
                <p><strong class="dark-text">Location: Drysdale Lecture Theatre, Drysdale Building, City University London, EC1V 0HB</strong></p>
                <p>Amanda Burls is a public health physician. She founded and directs ThinkWell, a novel internet-based research programme, which aims to help the public understand health information so they can make informed health decisions and also set up and participate in research studies.</p>
                <p>In 2011 she co-organised a Conference on Enhancing Public Understanding of Health Research, which resulted in the formation of the International Network for Enhancing Understanding of Health Research.</p>',
    'contact' => '<li>City Events Team</li>
                <li>City University London</li>
                <li>Northampton Square</li>
                <li>London</li>
                <li>EC1V 0HB</li>
                <li>United Kingdom</li>
                <li>+44 (0)20 7040 8037</li>',

];
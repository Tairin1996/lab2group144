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
    'title' => 'Встреча с Райко Кнез, профессором Университета Марибора (Словения) ',
    'body' => '<b>Райко Кнез, профессор Университета Марибора (Словения) познакомил студентов с новой магистерской программой "Международное право, европейское право" </b>',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
    'image' => 'http://placehold.it/750x390'
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
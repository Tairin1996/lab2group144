<?php
//настроки подмены информации по item'ам разделов
$items = [
    'blog' => [],
    'course' => [],
    'event' => []
];

//ПРИМЕРЫ ЗАПОЛНЕНИЯ $items:
$items['blog']['404'] = ['title'=>'Страница не найдена'];
$items['blog']['example'] = [
    'title' => 'Название статьи',
    'body' => '
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quis, itaque culpa rem excepturi cum sunt quae obcaecati corrupti fugiat facere error eos necessitatibus iure ut voluptates dolor enim provident!</p>
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, perspiciatis, ad, pariatur placeat facere laborum aspernatur quidem sint illum eos mollitia repellendus consectetur obcaecati possimus cupiditate delectus dolores eaque blanditiis?</strong></p>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, cum, quos ipsam eligendi accusantium quo amet quae commodi obcaecati nobis ratione soluta. Voluptates, obcaecati consectetur officia saepe rerum animi doloremque!</blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, magni, blanditiis, excepturi accusantium fugiat enim accusamus non libero doloribus doloremque illo error perferendis sequi dignissimos nesciunt voluptates nulla voluptatibus optio.</p>',
    'author_name' => 'Автор Леонидович',
    'author_info' => 'Лучший писатель на планете после Анджея Сапковского',
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <!-- favicon.ico 404 (Not Found) -->
    <link rel="shortcut icon" href="#">
    <!-- -------------------------------------------------------------------------------- -->
    <!--  CSS -->
    <!-- -------------------------------------------------------------------------------- -->
    <link href="./css/style.css" rel="stylesheet"/>
    <!-- Tailwind CSS Links -->
    <link href="./css/tailwind/tailwind.min.css" rel="stylesheet"/>
    <!-- Flowbite CSS -->
    <link href="./css/fllowbite/flowbite.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- -------------------------------------------------------------------------------- -->
    <!--  Script  -->
    <!-- -------------------------------------------------------------------------------- -->
    <!-- Axios -->
    <script src="./js/utility/axios.min.js" integrity="sha384-gRiARcqivboba/DerDAENzwUEYP9HCDyPEqVzCulWl85IdmR6r0T1adY/Su0KTfi" crossorigin="anonymous"></script>
    <!-- J Query -->
    <script src="./js/utility/jquery-3.6.3.min.js" integrity="sha384-Ft/vb48LwsAEtgltj7o+6vtS2esTU9PCpDqcXs4OCVQFZu5BqprHtUCZ4kjK+bpE" crossorigin="anonymous"></script>
    <!-- Tailwind -->
    <script src="./js/tailwind/tailwindcss.js" integrity="sha384-6TINTfz7HsxvzWYBsZvQCgB4WC6Xut9d7NAvf74UZ/f6hTtS2+wdcsg3m+rhpj4g" crossorigin="anonymous"></script>
    <!-- Flowbite JS -->
    <script src="./js/fllowbite/flowbite.min.js" integrity="sha384-qIuo6q0C5WsoTq3fdU6LMni24PKbtW5DhDAk+LTXPusp3or7sinwF96ZGAbQISFj" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="./js/utility/sweetalert2.min.js" integrity="sha384-mngH0dsoMzHJ55nmFSRTjl5pdhgzHDeEoLOuZp2U28VrwCH0ieB9ntimtLbJm9KJ" crossorigin="anonymous"></script>
    <!-- Iconify -->
    <script src="./js/utility/iconify-icon.min.js" integrity="sha384-ZBvlAMcOinSpqbKp+h0PpJxrDWCO8veRjvEhIc+Wg2Um8ZUKrbyNtJChA7FhNtCF" crossorigin="anonymous"></script>
    <!-- html2pdf.js Export PDF -->
    <script src="./js/utility/html2pdf.bundle.min.js" integrity="sha384-Yv5O+t3uE3hunW8uyrbpPW3iw6/5/Y7HitWJBLgqfMoA36NogMmy+8wWZMpn3HWc" crossorigin="anonymous"></script>
    <!-- PPTXGenJS -->
    <script src="./js/utility/pptxgen.bundle.js" integrity="sha384-Cck14aA9cifjYolcnjebXRfWGkz5ltHMBiG4px/j8GS+xQcb7OhNQWZYyWjQ+UwQ" crossorigin="anonymous"></script>
    <!-- docx -->
    <script src="./js/utility/docx.min.js" integrity="sha384-WWGzNJbUWCKFUEexCVTZSZUJ64uYV7FqYVMG855l1ammDY4SH6oLEFuNF6exFtIl" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Language Switcher -->
    <div class="language-switcher bg-white shadow-md rounded-full p-1 no-print">
        <button id="switchToEnglish" class="px-3 py-1 rounded-full bg-green-600 text-white">English</button>
        <button id="switchToThai" class="px-3 py-1 rounded-full bg-gray-200">ไทย</button>
    </div>


    <!-- Animated Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden no-print">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-green-50 opacity-70"></div>
        <div class="absolute inset-0 bg-[url('./img/backgroud_negative.png')] opacity-10"></div> <!-- backgroud_noise -->
    </div>

    <!-- Main Container -->
    <div id="resume-content" class="container mx-auto px-4 py-12 max-w-6xl">
        <!-- PDF Container -->
        <div id="pdf-content">
            <!-- Header Section -->
            <header class="flex flex-col md:flex-row gap-8 items-center mb-16 section-header">
                <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-white shadow-xl">
                    <img src="./img/profile_01.png" alt="Profile" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <div class="flex">
                        <label class="text-4xl md:text-5xl font-bold text-dark mb-2">
                            <span class="lang-en">Jetsada Yamto</span>
                            <span class="lang-th">เจษฎา แหยมโต</span>
                        </label>
                        <label class="text-xl md:text-xl font-bold text-dark mb-2 lang-en">(Boom)</label>
                        <label class="text-xl md:text-xl font-bold text-dark mb-2 lang-th">(บูม)</label>
                    </div>

                    <div class="flex">
                        <h2 class="text-xl md:text-2xl text-purple-600 mb-4">
                            <span class="lang-en">Full Stack Developer</span>
                            <span class="lang-th">นักพัฒนา Full Stack</span>
                        </h2>
                    </div>

                    <p class="text-gray-700 mb-4">
                        <!-- <span class="lang-en">About Me</span>
                        <span class="lang-th">เกี่ยวกับฉัน</span> -->
                        <span class="lang-en">Full Stack Development Expert with 5+ years of experience building web applications using modern technologies on both frontend and backend. Able to constantly learn and adapt to new technologies. Committed to creating efficient and scalable solutions with clean code to be a leader in web development or programming.</span>

                        <span class="lang-th mobile">ผู้เชี่ยวชาญด้านการพัฒนาแบบ Full Stack โดยมีความเชี่ยวชาญมีประสบการณ์มากกว่า 5 ปี ในการสร้างแอปพลิเคชันเว็บโดยใช้เทคโนโลยีสมัยใหม่ทั้งในส่วน หน้าบ้าน และ หลังบ้าน สามารถเรียนรู้และปรับตัวให้เข้ากับเทคโนโลยีใหม่ๆ อยู่เสมอ มีความมุ่งมั่นในการสร้างโซลูชันที่มีประสิทธิภาพและปรับขนาดได้พร้อมโค้ดที่สะอาดเพื่อให้เป็นผู้นำในการพัฒนาเว็บหรือเขียนโปรแกรมต่างๆ</span>

                        <span class="lang-th web text-left">ผู้เชี่ยวชาญด้านการพัฒนาแบบ Full Stack โดยมีความเชี่ยวชาญมีประสบการณ์มากกว่า 5 ปี ในการสร้างแอปพลิเคชันเว็บโดยใช้เทคโนโลยีสมัย</span>
                        <span class="lang-th web text-left">ใหม่ทั้งในส่วน หน้าบ้าน และ หลังบ้าน สามารถเรียนรู้และปรับตัวให้เข้ากับเทคโนโลยีใหม่ๆ อยู่เสมอ มีความมุ่งมั่นในการสร้างโซลูชันที่มี</span>
                        <span class="lang-th web text-left">ประสิทธิภาพและปรับขนาดได้พร้อมโค้ดที่สะอาดเพื่อให้เป็นผู้นำในการพัฒนาเว็บหรือเขียนโปรแกรมต่างๆ</span>
                        <!-- <span class="lang-en">Experienced Full Stack Developer with 5+ years of expertise in building web applications. Specialized in PHP, JavaScript, Flutter, and database systems.</span>
                        <span class="lang-th">นักพัฒนา Full Stack มากประสบการณ์กว่า 5 ปี มีความเชี่ยวชาญในการสร้างแอปพลิเคชันเว็บ โดยเชี่ยวชาญใน PHP, JavaScript, Flutter และระบบฐานข้อมูล</span> -->
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 header-contact">
                        <a href="tel:0944210099" class="px-4 py-2 bg-dark text-white rounded-full flex items-center gap-2 hover:bg-gray-600 transition">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg> -->
                            <i class="fa-solid fa-phone text-white text-xl"></i>
                            <span class="lang-en">Call: 094-4210099</span>
                            <span class="lang-th">โทร: 094-4210099</span>
                        </a>
                        <a href="https://line.me/ti/p/hPqWUwm2DJ" class="px-4 py-2 bg-[#00B900] text-white rounded-full flex items-center gap-2 hover:bg-green-400 transition" target="_blank">
                            <!-- Line Icon -->
                            <!-- <iconify-icon icon="ri:line-fill" class="text-3xl text-[#00B900] hover:text-[#009900] transition-colors"></iconify-icon> -->
                            <!-- <i class="fab fa-line text-[#00B900] text-2xl"></i> -->
                            <i class="fab fa-line text-white text-2xl"></i>
                            <span class="lang-en">Line: genjuroboom</span>
                            <span class="lang-th">ไลน์: genjuroboom</span>
                        </a>     
                        <a href="mailto:boom.ru16@gmail.com" class="px-4 py-2 bg-primary text-white rounded-full flex items-center gap-2 hover:bg-blue-600 transition">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg> -->
                            <i class="fa-solid fa-envelope text-white text-xl"></i>
                            <span class="lang-en">Email: boom.ru16@gmail.com</span>
                            <span class="lang-th">อีเมล: boom.ru16@gmail.com</span>
                        </a>               
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-8 space-y-12">
                    <!-- About Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-about">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="lang-en">Personal Information</span>
                            <span class="lang-th">ข้อมูลส่วนบุคคล</span>
                        </h2>
                        <div class="grid grid-cols-2 gap-4 text-gray-700">
                            <div>
                                <span class="font-semibold"><span class="lang-en">Nationality:</span><span class="lang-th">สัญชาติ:</span></span> 
                                <span class="lang-en">Thai</span><span class="lang-th">ไทย</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Religion:</span><span class="lang-th">ศาสนา:</span></span> 
                                <span class="lang-en">Buddhist</span><span class="lang-th">พุทธ</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Gender:</span><span class="lang-th">เพศ:</span></span> 
                                <span class="lang-en">Male</span><span class="lang-th">ชาย</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Marital Status:</span><span class="lang-th">สถานภาพสมรส:</span></span> 
                                <span class="lang-en">Single</span><span class="lang-th">โสด</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Date of Birth:</span><span class="lang-th">วันเกิด:</span></span> 
                                <span>23 November 1991</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Military Status:</span><span class="lang-th">สถานภาพทหาร:</span></span> 
                                <span class="lang-en">Completed</span><span class="lang-th">ผ่านการเกณฑ์แล้ว</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Height:</span><span class="lang-th">ส่วนสูง:</span></span> 
                                <span>169 cm</span>
                            </div>
                            <div>
                                <span class="font-semibold"><span class="lang-en">Weight:</span><span class="lang-th">น้ำหนัก:</span></span> 
                                <span>57 kg</span>
                            </div>
                        </div>
                    </section>

                    <!-- Experience Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-experience">
                        <h2 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="lang-en">Work Experience</span>
                            <span class="lang-th">ประสบการณ์การทำงาน</span>
                            <span class="lang-en">[ Professional Journey ]</span>
                            <span class="lang-th">[ การเดินทางสู่มืออาชีพ ]</span>
                        </h2>
                        <!-- Timeline item -->
                        <div class="relative pl-10 space-y-8">
                            <!-- Experience 1 -->
                            <div class="timeline-item relative pl-8 border-l-2 border-primary">
                                <div class="absolute -left-2 top-0 w-4 h-4 rounded-full bg-primary border-4 border-blue-100"></div>
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h3 class="font-bold text-lg text-dark">
                                        <span class="lang-en">Senior Full Stack Developer</span>
                                        <span class="lang-th">นักพัฒนา Full Stack ระดับอาวุโส</span>
                                    </h3>
                                    <p class="text-secondary font-medium mb-2">
                                        <span class="lang-en">Cloud2Works (Thailand) Co.,Ltd</span>
                                        <span class="lang-th">บริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                                    </p>
                                    <p class="text-blue-700 font-medium mb-2">
                                        <span class="lang-en">Nov 2020 - Apr 2025</span>
                                        <span class="lang-th">พ.ย. 2563 - พ.ค. 2568</span>
                                    </p>
                                    <p class="text-gray-600 text-sm mb-2">
                                        <span class="lang-en">Develop all kinds of applications according to the company's needs.</span>
                                        <span class="lang-th">พัฒนาแอพพลิเคชั่นทุกอย่างตามความต้องการของบริษัท</span>
                                    </p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                        <li class="lang-en">Developed accounting and manufacturing management systems (MFG)</li>
                                        <li class="lang-th">พัฒนาระบบบัญชีและระบบบริหารจัดการผลิต (MFG)</li>
                                        
                                        <li class="lang-en">Developed applications for Android and iOS using Flutter and Android Studio</li>
                                        <li class="lang-th">พัฒนาแอปพลิเคชันสำหรับ Android และ iOS ด้วย Flutter และ Android Studio</li>
                                        
                                        <li class="lang-en">Managed software development team</li>
                                        <li class="lang-th">บริหารจัดการทีมนักพัฒนาซอฟต์แวร์</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Experience 2 -->
                            <div class="timeline-item relative pl-8 border-l-2 border-primary">
                                <div class="absolute -left-2 top-0 w-4 h-4 rounded-full bg-primary border-4 border-blue-100"></div>
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h3 class="font-bold text-lg text-dark">
                                        <span class="lang-en">Web Developer</span>
                                        <span class="lang-th">นักพัฒนาเว็บ</span>
                                    </h3>
                                    <p class="text-secondary font-medium mb-2">
                                        <span class="lang-en">Cosmaprof Co., Ltd.</span>
                                        <span class="lang-th">บริษัท คอสมาพรอฟ จำกัด</span>
                                    </p>
                                    <p class="text-blue-700 font-medium mb-2">
                                        <span class="lang-en">Dec 2018 - Oct 2020</span>
                                        <span class="lang-th">ต.ค. 2561 - ต.ค. 2563</span>
                                    </p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                        <li class="lang-en">Gathered user requirements</li>
                                        <li class="lang-th">เก็บความต้องการของผู้ใช้</li>
                                        
                                        <li class="lang-en">Designed and developed internal company website systems using PHP, HTML, JavaScript, jQuery, Ajax, CSS</li>
                                        <li class="lang-th">ออกแบบและพัฒนาระบบเว็บไซต์ภายในบริษัทด้วย PHP, HTML, JavaScript, jQuery, Ajax, CSS</li>
                                        
                                        <li class="lang-en">Designed databases using MySQL and SQL Server</li>
                                        <li class="lang-th">ออกแบบฐานข้อมูลโดยใช้ MySQL และ SQL Server</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Experience 3 -->
                            <div class="timeline-item relative pl-8 border-l-2 border-primary">
                                <div class="absolute -left-2 top-0 w-4 h-4 rounded-full bg-primary border-4 border-blue-100"></div>
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h3 class="font-bold text-lg text-dark">
                                        <span class="lang-en">Android Developer</span>
                                        <span class="lang-th">นักพัฒนาแอนดรอยด์</span>
                                    </h3>
                                    <p class="text-secondary font-medium mb-2">
                                        <span class="lang-en">Decem Technology Co., Ltd.</span>
                                        <span class="lang-th">บริษัท ดีเซม เทคโนโลยี จำกัด</span>
                                    </p>
                                    <p class="text-blue-700 font-medium mb-2">
                                        <span class="lang-en">March 2018 - September 2018</span>
                                        <span class="lang-th">มี.ค. 2561 - ก.ย. 2561</span>
                                    </p>
                                    <ul class="list-disc list-inside text-gray-600 text-sm space-y-1">
                                        <li class="lang-en">Designed and developed Android applications</li>
                                        <li class="lang-th">ออกแบบและพัฒนาแอปพลิเคชันแอนดรอยด์</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Additional Skills Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-additional">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="lang-en">Additional Skills</span>
                            <span class="lang-th">ทักษะเพิ่มเติม</span>
                        </h2>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li class="lang-en">• Proficient in Photoshop, SQL Server, Android Studio, MATLAB, MS Office and other programs well.</li>
                            <li class="lang-th">• สามารถใช้ Photoshop, SQL Server, Android Studio, MATLAB, MS Office และโปรแกรมอื่นๆ ได้เป็นอย่างดี</li>

                            <li class="lang-en">• The system can be developed using modern AI architectures.</li>
                            <li class="lang-th">• สามารถพัฒนาระบบด้วยการใช้สถาปัตยกรรม AI ที่ทันสมัยได้</li>
                            
                            <li class="lang-en">• Flutter application development</li>
                            <li class="lang-th">• พัฒนาแอปพลิเคชันมือถือด้วย Flutter</li>

                            <li class="lang-en">• Able to work as teamwork and responsible and honest.</li>
                            <li class="lang-th">• สามารถทำงานเป็นทีมได้ มีความซื่อสัตย์ และมีความรับผิดชอบต่อหน้าที่</li>

                            <li class="lang-en">• Strong management, problem analysis and problem solving skills.</li>
                            <li class="lang-th">• มีทักษะการจัดการ การวิเคราะห์ปัญหา และการแก้ไขปัญหาที่ดี</li>

                            <li class="lang-en">• Perseverance and ready to touch on learning new things at work.</li>
                            <li class="lang-th">• มีความเพียรพยายามและพร้อมที่จะเปิดรับในการเรียนรู้สิ่งใหม่ ๆ ในการทำงาน</li>

                            <!-- <li class="lang-en">• Programming languages: PHP, JavaScript, Java, C, Dart, Bootstrap, Tailwind, Ace Master, datatables</li>
                            <li class="lang-th">• ภาษาโปรแกรม: PHP, JavaScript, Java, C, Dart, Bootstrap, Tailwind, Ace Master, datatables</li>

                            <li class="lang-en">• CSS Bootstrap, Tailwind, Ace Master, datatables</li>
                            <li class="lang-th">• CSS Bootstrap, Tailwind, Ace Master, datatables</li> -->
                        </ul>
                    </section>
                </div>

                <!-- Right Column -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Skills Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-skills">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            
                            <span class="lang-en">Skills & Expertise</span>
                            <span class="lang-th">ทักษะและความเชี่ยวชาญ</span>
                        </h2>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">JavaScript</span>
                                    <span class="text-sm text-gray-500">Expert</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="skill-bar bg-primary h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">PHP Laravel</span>
                                    <span class="text-sm text-gray-500">Expert</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="skill-bar bg-primary h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">Html/Css</span>
                                    <span class="text-sm text-gray-500">Expert</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="skill-bar bg-primary h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">SQL</span>
                                    <span class="text-sm text-gray-500">Advanced</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="skill-bar bg-primary h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium text-dark">UI/UX Design</span>
                                    <span class="text-sm text-gray-500">Advanced</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="skill-bar bg-primary h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Tech Stack Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-tech">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            <span class="lang-en">Tech Stack</span>
                            <span class="lang-th">ชุดเทคโนโลยี</span>
                        </h2>
                        <div class="flex flex-wrap gap-2">
                            <h3 class="font-semibold text-gray-800 mb-2">
                                <span class="lang-en">Frontend</span>
                                <span class="lang-th">ส่วนหน้า</span>
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">React</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Vue.js</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-900 rounded-full text-sm">Flutter.js</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">Git</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Node.js</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">MySQL</span>
                                <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Angular</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">AWS</span>
                                <span class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm">Docker</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm">Tailwind</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Bootstrap</span>


                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">
                                <span class="lang-en">Backend</span>
                                <span class="lang-th">ส่วนหลัง</span>
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">Laravel</span>
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Express.js</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-900 rounded-full text-sm">Flutter.js</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Python</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Node.js</span>
                                <span class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm">PostgreSQL</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Golang</span>
                                <span class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm">ASP.NET Core</span>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">
                                <span class="lang-en">AI</span>
                                <span class="lang-th">AI</span>
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm">Chat GPT</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">DeepSeek</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Gemini</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Canva</span>
                            </div>
                            <!-- ภาษาการเขียนโปรแกรม: เช่น Python, JavaScript, PHP.
                            เฟรมเวิร์ก: เช่น Django, React, Angular, Node.js.
                            ฐานข้อมูล: เช่น MySQL, MongoDB, PostgreSQL.
                            เครื่องมือ: เช่น Git, Docker, Jenkins.
                            เทคโนโลยีอื่นๆ: เช่น API, Cloud services.  -->
                        </div>
                    </section>

                    <!-- Education Section -->
                    <section class="bg-white rounded-xl shadow-md p-6 section-education">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                            <span class="lang-en">Education</span>
                            <span class="lang-th">การศึกษา</span>
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="my-2">
                                <h3 class="font-bold text-dark">
                                    <span class="lang-en">Bachelor's Degree in Computer Engineering</span>
                                    <span class="lang-th">ปริญญาตรี วิศวกรรมศาสตร์ สาขาคอมพิวเตอร์</span>
                                </h3>
                                <p class="text-gray-600">
                                    <span class="lang-en">Ramkhamhaeng University</span>
                                    <span class="lang-th">มหาวิทยาลัยรามคำแหง</span>
                                </p>
                                <p class="text-gray-500 text-sm">
                                    <span class="lang-en">Graduated: 2017 | GPA: 2.17</span>
                                    <span class="lang-th">จบการศึกษา: 2560 | GPA: 2.17</span>
                                </p>
                            </div>
                            
                            <div class="my-2">
                                <h3 class="font-bold text-dark">
                                    <span class="lang-en">Vocational Certificate (High Level)</span>
                                    <span class="lang-th">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</span>
                                </h3>
                                <p class="text-gray-600">
                                    <span class="lang-en">Samutsakhon Technical College</span>
                                    <span class="lang-th">วิทยาลัยเทคนิคสมุทรสาคร</span>
                                </p>
                                <p class="text-gray-500 text-sm">
                                    <span class="lang-en">Graduated: 2012 | GPA: 2.47</span>
                                    <span class="lang-th">จบการศึกษา: 2555 | GPA: 2.47</span>
                                </p>
                            </div>
                            
                            <div class="my-2">
                                <h3 class="font-bold text-dark">
                                    <span class="lang-en">Vocational Certificate</span>
                                    <span class="lang-th">ประกาศนียบัตรวิชาชีพ (ปวช.)</span>
                                </h3>
                                <p class="text-gray-600">
                                    <span class="lang-en">Samutsakhon Technical College</span>
                                    <span class="lang-th">วิทยาลัยเทคนิคสมุทรสาคร</span>
                                </p>
                                <p class="text-gray-500 text-sm">
                                    <span class="lang-en">Graduated: 2010 | GPA: 2.37</span>
                                    <span class="lang-th">จบการศึกษา: 2553 | GPA: 2.37</span>
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Languages Section -->
                    <!-- <section class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                            <span class="lang-en">Languages</span>
                            <span class="lang-th">ภาษา</span>
                        </h2>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-700 lang-en">Thai</span>
                                <span class="text-gray-500 lang-en">Native</span>
                                <span class="text-gray-700 lang-th">ไทย</span>
                                <span class="text-gray-500 lang-th">เจ้าของภาษา</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-700 lang-en">English</span>
                                <span class="text-gray-500 lang-en">Fairly</span>
                                <span class="text-gray-700 lang-th">อังกฤษ</span>
                                <span class="text-gray-500 lang-th">พอใช้ได้</span>
                            </div>
                        </div>
                    </section> -->

                    <!-- Interests Section -->
                    <section class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-2xl font-bold text-dark mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <span class="lang-en">Interests</span>
                            <span class="lang-th">ความสนใจ</span>
                        </h2>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm lang-en">Programming</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm lang-th">การเขียนโปรแกรม</span>
                            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm lang-en">Technology</span>
                            <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm lang-th">เทคโนโลยี</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm lang-en">Travel</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm lang-th">ท่องเทียว</span>
                            <span class="px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-sm lang-en">Movie</span>
                            <span class="px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-sm lang-th">ภาพยนตร์</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm lang-en">Music</span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-sm lang-th">ดนตรี</span>
                        </div>
                    </section>
                </div>
            </div>
        </div>

       <!-- Portfolio Filters -->
        <div class="mt-16 container mx-auto px-4 py-8">
            <div class="flex flex-wrap gap-2 justify-center">
                <button class="filter-btn active px-4 py-2 rounded-full border border-gray-300" data-filter="all">All</button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300" data-filter="web">Web Development</button>
                <button class="filter-btn px-4 py-2 rounded-full border border-gray-300" data-filter="mobile">Mobile Apps</button>
            </div>
        </div>

        <!-- Creative Projects Portfolio Showcase -->
        <div id="pptx-content">
            <section class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-2xl font-bold text-dark mb-6 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="lang-en">My Creative Projects Portfolio</span>
                    <span class="lang-th">ผลงานสร้างสรรค์ของฉัน</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Project 1 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web">
                        <img src="./img/project/dmcsmfg_logo.png" alt="DMCS+MFG" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Data Management Center System System and Manufacturing Date System (DMCS+MFG)</span>
                                <span class="lang-th">ระบบบริหารจัดการบัญชีและการผลิต (DMCS+MFG)</span>
                            </h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Web</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cloud2Works (Thailand) Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm">Java</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">SQL Server</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>

                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                    data-title="Data Management Center System System and Manufacturing Date System (DMCS+MFG)"
                                    data-description="A complete accounting service system that can open sales to invoices, including purchasing and tax systems. It also adds a production management system in the factory, including products, parts, and comprehensive production forecasts."
                                    data-features="Sale System|Purchase System|MRP System|Production System|Inventory Control|Cost Management|Accounting|Tax System"
                                    data-tech="PHP, CSS, Java, JavaScript, SQL SERVER, Canva, Bootstrap, Tailwind, Chat GPT, DeepSeek, Gemini AI"
                                    data-images="./img/dmcsmfg/0.png|./img/dmcsmfg/1.png|./img/dmcsmfg/2.png|./img/dmcsmfg/3.png|./img/dmcsmfg/4.png|./img/dmcsmfg/5.png|./img/dmcsmfg/6.png|./img/dmcsmfg/7.png|./img/dmcsmfg/8.png|./img/dmcsmfg/9.png">
                                    View Details
                            </button>
                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                    data-title="ระบบบริหารจัดการบัญชีและการผลิต (DMCS+MFG)"
                                    data-description="ระบบบริการจัดการบัญชีแบบครบวงจร สามารถเปิดการขายจนถึงออกใบเรียกเก็บเงินรวมไปถึงการเปิดใบจัดซื้อและระบบภาษี และยังเพิ่มระบบการจัดการการผลิตในโรงงานมีทั้ง สินค้า ชิ้นส่วน การพยากรณ์การผลิตอย่างครอบคลุมครบวงจร"
                                    data-features="ระบบการขาย|ระบบจัดซื้อ|ระบบ MRP|ระบบการผลิต|การควบคุมสต๊อกสินค้า|การบริหารต้นทุน|ระบบบัญชี|ระบบภาษี"
                                    data-tech="PHP, CSS, Java, JavaScript, SQL SERVER, Canva, Bootstrap, Tailwind, Chat GPT, DeepSeek, Gemini AI"
                                    data-images="./img/dmcsmfg/0.png|./img/dmcsmfg/1.png|./img/dmcsmfg/2.png|./img/dmcsmfg/3.png|./img/dmcsmfg/4.png|./img/dmcsmfg/5.png|./img/dmcsmfg/6.png|./img/dmcsmfg/7.png|./img/dmcsmfg/8.png|./img/dmcsmfg/9.png">
                                    ดูรายละเอียด
                            </button>
                        </div>
                    </div>
                    
                    <!-- Project 2 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web & mobile">
                        <img src="./img/project/kinyu-siam_logo.png" alt="Kinyu Siam" class="w-full h-48 object-cover">
                        <div class="p-6">

                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Kin-Yu Siam</span>
                                <span class="lang-th">กินอยู่สยาม</span> 
                                <!-- ระบบจัดการศูนย์อาหาร -->
                            </h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Web</span>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Mobile</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cloud2Works (Thailand) Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                            </p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">Laravel</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm">Flutter</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">MySQL</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>
                        </div>
                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                data-title="Kin-Yu Siam"
                                data-description="Food center  management system (Canteen) is used for companies or factories. It can order food and add credit and use the credit to buy food. It can deduct from salary or make a deposit. It also manages the accounts between the store and the company."
                                data-features="Order products in installments application | Display results for shops receiving orders | Employee credit system | Sales calculation system | Debt payment system"
                                data-tech="PHP, CSS, JavaScript, MySQL, Canva, Bootstrap, Flutter"
                                data-images="./img/kinyusiam/1.png|./img/kinyusiam/2.png|./img/kinyusiam/3.png|./img/kinyusiam/4.png|./img/kinyusiam/5.png|./img/kinyusiam/6.png|./img/kinyusiam/7.png|./img/kinyusiam/8.png|./img/kinyusiam/9.png|./img/kinyusiam/10.png|./img/kinyusiam/11.png|./img/kinyusiam/12.png|./img/kinyusiam/13.png|./img/kinyusiam/14.png|./img/kinyusiam/15.png|./img/kinyusiam/16.png|./img/kinyusiam/17.png|./img/kinyusiam/18.png|./img/kinyusiam/19.png">
                                View Details
                        </button>

                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                data-title="กินอยู่สยาม"
                                data-description="ระบบจัดการศูนย์อาหารใช้สำหรับบริษัทหรือโรงงาน สามารถสั่งอาหารและเติมเครดิตและใช้เครดิตในการซื้ออาหาร โดยสามารถตัดยอดจากเงินเดือนหรือทำการฝากเงินเข้าไปได้ รวมถึงมีการจัดการบัญชีระหว่างร้านค้าและบริษัทด้วย"
                                data-features="สั่งสินค้าผ่อนแอพพลิเคชั่น|แสดงผลให้ร้านรับคำสั่งซื้อ|ระบบเครดิตพนักงาน|ระบบคำนวณยอดการขาย|ระบบชำระหนี้"
                                data-tech="PHP, CSS, JavaScript, MySQL, Canva, Bootstrap, Flutter"
                                ata-images="./img/kinyusiam/1.png|./img/kinyusiam/2.png|./img/kinyusiam/3.png|./img/kinyusiam/4.png|./img/kinyusiam/5.png|./img/kinyusiam/6.png|./img/kinyusiam/7.png|./img/kinyusiam/8.png|./img/kinyusiam/9.png|./img/kinyusiam/10.png|./img/kinyusiam/11.png|./img/kinyusiam/12.png|./img/kinyusiam/13.png|./img/kinyusiam/14.png|./img/kinyusiam/15.png|./img/kinyusiam/16.png|./img/kinyusiam/17.png|./img/kinyusiam/18.png|./img/kinyusiam/19.png">
                                ดูรายละเอียด
                        </button>
                    </div>
        
                    <!-- Project 3 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web & mobile">
                        <img src="./img/project/kesarsiam_logo.png" alt="KesarSiam" class="mx-auto w-48 h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">KesarSiam</span>
                                <span class="lang-th">เกศาสยาม</span>
                                <!-- ระบบจัดการร้านความสวยความงาม -->
                            </h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Web</span>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Mobile</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cloud2Works (Thailand) Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                            </p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm">Laravel</span>
                                <span class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm">Flutter</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">MySQL</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>
                        </div>
                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                data-title="KesarSiam"
                                data-description="“Kesarsiam“ application is an operating program and application that can be used to work in a complete cycle on all devices such as computers, smartphones, and tablets, etc. Kesarsiam is suitable for beauty businesses such as beauty salons, salons, and barbershops. We focus on creating quality and services that are a center of work processes or products related to beauty to be completely beautiful in a single application."
                                data-features="Backyard management system for businesses or businesses|Purchasing system|Distribution system|Booking system or Booking online|Accounting system|Commission calculation system|Sales closing system|Service area search system (finder)|Popular store ranking system|Stylish system|A system that can be used for all jobs that have been recorded in the past (bring old data to update new work)|Feedback system (communication between business and customers)"
                                data-tech="PHP, CSS, JavaScript, MySQL, Canva, Bootstrap, Flutter"
                                data-images="./img/kesarsiam/1.png|./img/kesarsiam/2.png|./img/kesarsiam/3.png|./img/kesarsiam/4.png|./img/kesarsiam/5.png|./img/kesarsiam/6.png|./img/kesarsiam/7.png|./img/kesarsiam/8.png|./img/kesarsiam/9.png|./img/kesarsiam/10.png|./img/kesarsiam/11.png|./img/kesarsiam/12.png|./img/kesarsiam/13.png|./img/kesarsiam/14.png|./img/kesarsiam/15.png|./img/kesarsiam/16.png|./img/kesarsiam/17.png|./img/kesarsiam/18.png|./img/kesarsiam/19.png|./img/kesarsiam/20.png">
                                View Details
                        </button>

                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                data-title="เกศาสยาม"
                                data-description="แอปพลิเคชัน “ เกศาสยาม “ เป็นโปรแกรมปฏิบัติการและแอปพลิเคชันที่สามารถใช้ในการทำงานแบบครบวงจรทุกอุปกรณ์ เช่น เครื่องคอมพิวเตอร์ สมาร์ทโฟน และแท็บเล็ต เป็นต้น เกศาสยามเหมาะสำหรับธุรกิจด้านความสวยความงาม เช่น ร้านเสริมสวย ร้านซาลอน  ร้านตัดผม  เรามุ่งเน้นสร้างคุณภาพและบริการที่เป็นศูนย์รวมของกระบวนการทำงานหรือผลิตภัณฑ์ต่างๆ ที่เกี่ยวข้องด้านความงามให้สวยครบจบในแอปเดียว"
                                data-features="ระบบจัดการหลังบ้านสำหรับธุรกิจ|ระบบจัดซื้อ|ระบบจำหน่าย|ระบบจองหรือจองออนไลน์|ระบบบัญชี|ระบบคำนวณค่าคอมมิชชั่น|ระบบปิดการขาย|ระบบค้นหาพื้นที่ให้บริการที่ใกล้คุณ|ระบบการจัดอันดับร้านค้ายอดนิยม|ระบบเลือกช่างเพื่อใช้บริการ|ระบบที่สามารถใช้ได้กับทุกงานที่เคยบันทึกไว้ (นำข้อมูลเก่ามาอัพเดทงานใหม่)|ระบบความคิดเห็น (การสื่อสารระหว่างธุรกิจและลูกค้า)"
                                data-tech="PHP, CSS, JavaScript, MySQL, Canva, Bootstrap, Flutter"
                                data-images="./img/kesarsiam/1.png|./img/kesarsiam/2.png|./img/kesarsiam/3.png|./img/kesarsiam/4.png|./img/kesarsiam/5.png|./img/kesarsiam/6.png|./img/kesarsiam/7.png|./img/kesarsiam/8.png|./img/kesarsiam/9.png|./img/kesarsiam/10.png|./img/kesarsiam/11.png|./img/kesarsiam/12.png|./img/kesarsiam/13.png|./img/kesarsiam/14.png|./img/kesarsiam/15.png|./img/kesarsiam/16.png|./img/kesarsiam/17.png|./img/kesarsiam/18.png|./img/kesarsiam/19.png|./img/kesarsiam/20.png">
                                ดูรายละเอียด
                        </button>
                    </div>

                    <!-- Project 4 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web">
                        <img src="./img/project/cloud2wms_logo.png" alt="Cloud2WMS" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Warehouse Management System (Cloud2WMS)</span>
                                <span class="lang-th">ระบบบริการจัดการคลังสินค้า (Cloud2WMS)</span>
                            </h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Web</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cloud2Works (Thailand) Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm">Java</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">SQL Server</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>

                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                    data-title="Warehouse Management System (Cloud2WMS)"
                                    data-description="Warehouse service system that can check inventory and products sent to customers. There is notification of goods received in and out of the warehouse. Check and update shipping status information."
                                    data-features="Receiving| Shipping| Warehouse In| Warehouse Out"
                                    data-tech="PHP, CSS, Java, JavaScript, MySQL, Canva, Tailwind, Bootstrap"
                                    data-images="./img/cloud2wms/1.png|./img/cloud2wms/2.png|./img/cloud2wms/3.png|./img/cloud2wms/4.png">
                                    View Details
                            </button>

                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                    data-title="ระบบบริการจัดการคลังสินค้า (Cloud2WMS)"
                                    data-description="ระบบบริการจัดคลังสินค้าที่สามารถตรวจสอบสินค้ายอดคงคลังและสินค้าที่ส่งไปยังลูกค้า มีการแจ้งยอดการรับสินค้าเข้าและออกคลังตรวจสอบและอัปเดตข้อมูลสถานะการจัดส่งได้"
                                    data-features="การรับสินค้า| การจัดส่ง| คลังสินค้าเข้า| คลังสินค้าออก"
                                    data-tech="PHP, CSS, Java, JavaScript, MySQL, Canva, Tailwind, Bootstrap"
                                    data-images="./img/cloud2wms/1.png|./img/cloud2wms/2.png|./img/cloud2wms/3.png|./img/cloud2wms/4.png">
                                    ดูรายละเอียด
                            </button>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web">
                        <img src="./img/project/puredi_logo.png" alt="Purchase EDI" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Purchase Electronic Data Interchange (Purchase EDI)</span>
                                <span class="lang-th">ระบบการแลกเปลี่ยนข้อมูลการจัดซื้อโลจิสติกส์ระหว่างธุรกิจกับธุรกิจ</span>
                            </h3>
                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Web</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cloud2Works (Thailand) Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คลาวด์ทูเวิร์ค (ไทยแลนด์) จำกัด</span>
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">JavaScript</span>
                                <span class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm">Java</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">SQL Server</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>

                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                    data-title="Purchase Electronic Data Interchange (Purchase EDI)"
                                    data-description="A system used to check the status of shipments and check the delivery information between supplier and customers."
                                    data-features="Purchase Order List| In-Car Inventory List"
                                    data-tech="PHP, CSS, Java, JavaScript, MySQL, Canva, Tailwind, Bootstrap"
                                    data-images="./img/puredi/1.png|./img/puredi/2.png|./img/puredi/3.png|./img/puredi/4.png">
                                    View Details
                            </button>

                            <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                    data-title="ระบบการแลกเปลี่ยนข้อมูลการจัดซื้อโลจิสติกส์ระหว่างธุรกิจกับธุรกิจ"
                                    data-description="ระบบที่ใช้สำหรับการเช็คสถานะรายการของการขนส่งสินค้าและตรวจเช็คข้อมูลยอดการจัดส่งระหว่าง ผู้ผลิต และ ลูกค้า"
                                    data-features="รายการสั่งซื้อ | รายการสินค้าในรถ"
                                    data-tech="PHP, CSS, Java, JavaScript, MySQL, Canva, Tailwind, Bootstrap"
                                    data-images="./img/puredi/1.png|./img/puredi/2.png|./img/puredi/3.png|./img/puredi/4.png">
                                    ดูรายละเอียด
                            </button>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="web">
                        <img src="./img/project/cosmaprof-system.png" alt="Cosmaprof System" class="mx-auto w-48 h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Cosmaprof System</span>
                                <span class="lang-th">ระบบคอสมาพรอฟ</span>
                                <!-- ระบบจัดการภายในบริษัท -->
                            </h3>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Mobile</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Cosmaprof Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท คอสมาพรอฟ จำกัด</span>
                            </p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP</span>
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">SQL Server</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">Html/Css</span>
                            </div>
                        </div>
                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                data-title="Cosmaprof System"
                                data-description="The company's own system is developed for internal use only. It has a system for opening POs, issuing invoices, checking inventory, recording production formulas, receiving goods into warehouses, and delivering goods to customers, including planning the production industry. It is an ERP system developed by the company's in-house programmer team."
                                data-features="Pre-work|E-Order|Facwork|Warehouse|Master Product|Chemical|User Permission|IT Center|HR"
                                data-tech="PHP, SQL Server, Html/Css, JavaScript, Bootstrap"
                                data-images="./img/cosmaprof/1.png|./img/cosmaprof/2.png|./img/cosmaprof/3.png|./img/cosmaprof/4.png|./img/cosmaprof/5.png|./img/cosmaprof/6.png|./img/cosmaprof/7.png|./img/cosmaprof/8.png">
                                View Details
                        </button>

                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                data-title="ระบบคอสมาพรอฟ"
                                data-description="ระบบเฉพาะของบริษัท พัฒนาขึ้นเพื่อใช้ภายในองค์กรเท่านั้น โดยมีระบบเปิด PO จนถึงออก Invoice และตรวจเช็คยอดคงคลัง ระบบบันทึกสูครการผลิต รับของเข้าคลัง จนถึงการส่งมอบสินค้าให้ลูกค้า รวมถึงการวางแบบแผนในอุตสาหกรรมในการผลิต เป็นระบบ ERP ที่พัฒนาขึ้นเองโดยทีมโปรแกรมเมอร์ภายในบริษัท"
                                data-features="งานเตรียมการ|การสั่งซื้อทางอิเล็กทรอนิกส์|งานโรงงาน|คลังสินค้า|สินค้าหลัก|เคมี|อนุญาติจากผู้ใช้|ศูนย์ไอที|ทรัพยากรบุคคล"
                                data-tech="PHP, SQL Server, Html/Css, JavaScript, Bootstrap"
                                data-images="./img/cosmaprof/1.png|./img/cosmaprof/2.png|./img/cosmaprof/3.png|./img/cosmaprof/4.png|./img/cosmaprof/5.png|./img/cosmaprof/6.png|./img/cosmaprof/7.png|./img/cosmaprof/8.png">
                                ดูรายละเอียด
                        </button>
                    </div>

                    <!-- Project 7 -->
                    <div class="project-card bg-white rounded-xl overflow-hidden shadow-md" data-category="mobile">
                        <img src="./img/project/sadpad.png" alt="Sad Pad System" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-dark mb-2">
                                <span class="lang-en">Sad Pad System</span>
                                <span class="lang-th">ระบบประเมินความพึงพอใจ</span>
                            </h3>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Mobile</span>
                            <p class="text-gray-600 my-2">
                                <span class="lang-en">Developed for Decem Technology Co., Ltd.</span>
                                <span class="lang-th">พัฒนาสำหรับบริษัท ดีเซม เทคโนโลยี จำกัด</span>
                            </p>
                             <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Java</span>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Android Studio</span>
                                <span class="px-3 py-1 bg-black text-white rounded-full text-sm">XML</span>
                            </div>
                        </div>
                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-en"
                                data-title="Sad Pad System"
                                data-description="Application system for evaluating customer satisfaction using tablets"
                                data-features="Satisfaction Assessment System | Can be used on Android applications | Store data in txt file format"
                                data-tech="Android Studio, Java, XML"
                                data-images="./img/sadpad/1.png|./img/sadpad/2.png">
                                View Details
                        </button>

                        <button class="view-details-btn w-full bg-black hover:bg-gray-700 text-white py-2 rounded-lg lang-th"
                                data-title="ระบบประเมินความพึงพอใจ"
                                data-description="ระบบแอพพลิเคชั่นสำหรับการประเมิณ ความพึงพอใจของลูกค้าด้วย tablets"
                                data-features="ระบบประเมินความพึงพอใจ|สามารถใช้งานได้บนแอพพลิเคชั่น แอนดรอยด์|เก็บข้อมูลในรูปแบบไฟล์ txt"
                                data-tech="Android Studio, Java, XML"
                                data-images="./img/sadpad/1.png|./img/sadpad/2.png">
                                ดูรายละเอียด
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <!-- Contact Section -->
        <section class="mt-16 bg-gradient-to-r from-primary to-secondary rounded-xl shadow-md p-8 text-white">
            <h2 class="text-2xl font-bold mb-4">
                <span class="lang-en">Let's Work Together!</span>
                <span class="lang-th">มาทำงานร่วมกันเถอะ!</span>
            </h2>
            <p class="mb-6 max-w-lg">
                <span class="lang-en">I'm currently available for full-time positions. If you're looking for a skilled Full Stack Developer, feel free to reach out.</span>
                <span class="lang-th">ฉันพร้อมสำหรับตำแหน่งงานเต็มเวลา หากคุณกำลังมองหานักพัฒนา Full Stack ที่มีทักษะ โปรดติดต่อมาได้เลย</span>
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="mailto:boom.ru16@gmail.com" class="px-6 py-3 bg-white text-primary rounded-full font-medium hover:bg-gray-100 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="lang-en">Email Me</span>
                    <span class="lang-th">ส่งอีเมล</span>
                </a>
                <a href="tel:0944210099" class="px-6 py-3 border-2 border-white text-white rounded-full font-medium hover:bg-white hover:text-primary transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="lang-en">Call Me</span>
                    <span class="lang-th">โทรหาฉัน</span>
                </a>
                <!-- Export PDF Button -->
                <button id="exportPDF" class="px-6 py-3 border-2 bg-red-600 border-red-400 text-white rounded-full font-medium hover:bg-red-400 hover:text-white transition flex items-center gap-2 no-print">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg> -->
                    <i class="fa-regular fa-file-pdf"></i>
                    <span class="lang-en">Export PDF</span>
                    <span class="lang-th">ส่งออก PDF</span>
                </button>

                <!-- Export Power Point Button -->
                <button id="exportPPTX" class="px-6 py-3 border-2 bg-orange-500 border-orange-400 text-white rounded-full font-medium hover:bg-orange-400 hover:text-white transition flex items-center gap-2 no-print">
                    <i class="fa-regular fa-file-powerpoint"></i>
                    <span class="lang-en">Export PPTX Projects</span>
                    <span class="lang-th">ส่งออก PPTX ผลงาน</span>
                </button>

                <!-- Export Power Point Button -->
                <button id="exportDOCX" class="px-6 py-3 border-2 bg-blue-500 border-blue-400 text-white rounded-full font-medium hover:bg-blue-400 hover:text-white transition flex items-center gap-2 no-print">
                    <i class="fa-regular fa-file-word"></i>
                    <span class="lang-en">Export DOCX Projects</span>
                    <span class="lang-th">ส่งออก DOCX ผลงาน</span>
                </button>
            </div>
        </section>
    </div>

    <!-- Project Details Modal -->
    <div id="projectModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 invisible opacity-0 z-20">
        <div class="bg-white rounded-xl max-w-6xl w-full min-w-[70%] max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white p-6 border-b flex justify-between items-center z-20">
                <h3 id="modalTitle" class="text-2xl font-bold"></h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <!-- img to Carousel -->
                <div id="modalCarousel" class="relative w-full mb-6"><!-- data-carousel="slide" -->
                    <!-- Carousel wrapper -->
                    <div class="relative h-96 overflow-hidden rounded-lg">
                        <!-- Image by JavaScript -->
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only  lang-en">Previous</span>
                            <span class="sr-only lang-th">ก่อนหน้า</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l4 4-4 4"/>
                            </svg>
                            <span class="sr-only lang-en">Next</span>
                            <span class="sr-only lang-th">ต่อไป</span>
                        </span>
                    </button>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2">
                        <h4 class="text-xl font-semibold mb-3">
                            <span class="lang-en">Project Description</span>
                            <span class="lang-th">คำอธิบายโครงการ</span>
                        </h4>
                        <p id="modalDescription" class="text-gray-700 mb-6"></p>
                        
                        <h4 class="text-xl font-semibold mb-3">
                            <span class="lang-en">Key Features</span>
                            <span class="lang-th">คำอธิบายโครงการ</span>
                        </h4>
                        <ul id="modalFeatures" class="list-disc list-inside text-gray-700 space-y-2 mb-6"></ul>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold mb-3">
                        

                        <span class="lang-en">Technologies Used</span>
                        <span class="lang-th">เทคโนโลยีที่ใช้</span>
                    </h4>
                        <div id="modalTech" class="flex flex-wrap gap-2 mb-6"></div>
                        
                        <h4 class="text-xl font-semibold mb-3">
                            <span class="lang-en">Project Details</span>
                            <span class="lang-th">รายละเอียดโครงการ</span>
                        </h4>
                        <div class="space-y-4">
                            <div>
                                <span class="block text-sm text-gray-500">
                                    <span class="lang-en">Category</span>
                                    <span class="lang-th">หมวดหมู่</span>
                                </span>
                                <span id="modalCategory" class="font-medium"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t flex justify-end">
                <button id="dismissModal" class="px-6 py-2 bg-transparent hover:bg-black text-black font-semibold hover:text-white border border-black hover:border-transparent rounded-lg">
                    <span class="lang-en">Close</span>
                    <span class="lang-th">ปิด</span>
                </button>
                <!-- <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Visit Project</button> -->
            </div>
        </div>
    </div>

    <!-- Image Lightbox Modal -->
    <div id="imageLightbox" class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-30 hidden">
        <div class="relative max-w-[80vw] w-full max-h-[90vh]">
            <button id="closeLightbox" class="absolute top-0 right-4 text-white z-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="lightboxImage" src="" alt="" class="w-full h-full object-contain">
        </div>
    </div>

    <script>
        // Animate skill bars on scroll
        document.addEventListener('DOMContentLoaded', function() {
            // load Flowbite type Dynamic
            // const script = document.createElement('script');
            // script.src = 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js';
            // script.onload = function() {
            //     console.log('Flowbite loaded successfully');
            // };
            // document.body.appendChild(script);

            // Initialize language settings
            initLanguage();
            
            // Initialize skill bars animation
            initSkillBars();
            
            // Initialize PDF export functionality
            initPDFExport();

            // Initialize docx export functionality
            initDOCExport();

            // pdfWithnodeJS();
      
            // exportPDF.addEventListener('click', printResume);

            // Initialize PPTX export functionality
            initPPTXExport();

            // Filter projects
            filterProjects('all');
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // delete class active form button all
                    filterButtons.forEach(btn => btn.classList.remove('active', 'bg-blue-600', 'text-white'));
                    
                    // add class active to button
                    this.classList.add('active', 'bg-blue-600', 'text-white');
                    
                    // filter project selected
                    const filterValue = this.dataset.filter;
                    filterProjects(filterValue);
                });
            });

            // Project details modal
            const modal = document.getElementById('projectModal');
            const closeModal = document.getElementById('closeModal');
            const dismissModal = document.getElementById('dismissModal');

            document.querySelectorAll('.view-details-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.getElementById('modalTitle').textContent = this.dataset.title;
                    document.getElementById('modalDescription').textContent = this.dataset.description;
                    
                    // Create Carousel Items
                    const carouselWrapper = document.querySelector('#modalCarousel .relative.h-96');
                    carouselWrapper.innerHTML = '';
                    
                    const images = this.dataset.images ? this.dataset.images.split('|').map(img => img.trim()): [this.dataset.image];
                    
                    // Start Carousel
                    initProjectCarousel(images);

                    // Set features
                    const featuresList = document.getElementById('modalFeatures');
                    featuresList.innerHTML = '';
                    this.dataset.features.split('|').forEach(feature => {
                        const li = document.createElement('li');
                        li.textContent = feature;
                        featuresList.appendChild(li);
                    });
                    
                    // Set technologies
                    const techContainer = document.getElementById('modalTech');
                    techContainer.innerHTML = '';
                    this.dataset.tech.split(',').forEach(tech => {
                        const span = document.createElement('span');
                        span.className = 'px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs';
                        span.textContent = tech.trim();
                        techContainer.appendChild(span);
                    });
                    
                    // Set category
                    const categorySpan = document.getElementById('modalCategory');
                    const category = this.closest('.project-card').dataset.category;
                    let categoryText = '';
                    let categoryColor = '';
                    
                    switch(category) {
                        case 'web':
                            categoryText = 'Web Development';
                            categoryColor = 'blue';
                            break;
                        case 'mobile':
                            categoryText = 'Mobile App';
                            categoryColor = 'green';
                            break;
                        case 'web & mobile':
                            categoryText = 'Web & Mobile';
                            categoryColor = 'purple';
                            break;
                        default:
                            categoryText = 'Other';
                            categoryColor = 'yellow';
                    }
                    
                    categorySpan.textContent = categoryText;
                    categorySpan.className = `px-2 py-1 bg-${categoryColor}-100 text-${categoryColor}-800 rounded-full text-xs inline-block`;
                    
                    // Show modal
                    modal.classList.remove('invisible', 'opacity-0');
                    modal.classList.add('visible', 'opacity-100');
                    
                    // start Carousel ใหม่ (If necessary)
                    const carouselElement = document.getElementById('modalCarousel');
                    const carousel = new Carousel(carouselElement, {
                        defaultPosition: 0
                    }, true);
                });
            });
        
            closeModal.addEventListener('click', () => {
                modal.classList.remove('visible', 'opacity-100');
                modal.classList.add('invisible', 'opacity-0');
            });

            dismissModal.addEventListener('click', () => {
                modal.classList.remove('visible', 'opacity-100');
                modal.classList.add('invisible', 'opacity-0');
            });
        });

        // ใช้ window.print() แทน html2pdf
        function printResume() {
            window.print();
        }

        function initLanguage() {
            // save localStorage
            var language = localStorage.getItem('language');

            if(!language) localStorage.setItem('language', 'en');

            // load language
            // language === 'en' ? document.body.classList.add('en'): document.body.classList.add('th');

            // Language switching functionality
            document.getElementById('switchToThai').addEventListener('click', function() {
                localStorage.setItem('language', 'th');
                setSwitchLanguage('th');
            });
            
            document.getElementById('switchToEnglish').addEventListener('click', function() {
                localStorage.setItem('language', 'en');
                setSwitchLanguage('en');
            });
            
            // Set initial language to English
            language == 'en' ? setSwitchLanguage('en'): setSwitchLanguage('th');

            // set for mobile or web
            isMobile();
        }

        function setSwitchLanguage(lang) {
            // Set initial language to English
            if(lang == 'en') {
                document.body.classList.remove('th');
                document.body.classList.add('en');
                document.getElementById('switchToEnglish').classList.add('bg-green-600', 'text-white');
                document.getElementById('switchToEnglish').classList.remove('bg-gray-200');
                document.getElementById('switchToThai').classList.add('bg-gray-200');
                document.getElementById('switchToThai').classList.remove('bg-green-600', 'text-white');
            } else {
                document.body.classList.remove('en');
                document.body.classList.add('th');
                document.getElementById('switchToThai').classList.add('bg-green-600', 'text-white');
                document.getElementById('switchToThai').classList.remove('bg-gray-200');
                document.getElementById('switchToEnglish').classList.add('bg-gray-200');
                document.getElementById('switchToEnglish').classList.remove('bg-green-600', 'text-white');
            }
        }

        function initSkillBars() {
            const skillBars = document.querySelectorAll('.skill-bar');
            
            const animateOnScroll = () => {
                skillBars.forEach(bar => {
                    const rect = bar.getBoundingClientRect();
                    if (rect.top <= window.innerHeight - 100) {
                        bar.style.width = bar.style.width;
                    }
                });
            };
            
            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Run once on load
        }

        async function pdfWithnodeJS() {
            document.getElementById('exportPDF').addEventListener('click', () => {
            fetch('./function/index_x.php')
          .then(res => res.text(), notifyDialog('success', 'PDF Exported Successfully!'))
          .then(msg => console.log(msg)) // หรือ redirect ไปดาวน์โหลด PDF
          .catch(err => console.log('Error: ' + err));
            });
        }

        async function initPDFExport() {
            const exportPDF = document.getElementById('exportPDF');
            if (!exportPDF) return;

            exportPDF.addEventListener('click', async function() {
                const btn = this;
                const originalHTML = btn.innerHTML;
                
                // show loading
                btn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="lang-en">Generating PDF...</span>
                    <span class="lang-th">กำลังสร้าง PDF...</span>
                `;
                btn.disabled = true;

                // get current language
                const currentLang = localStorage.getItem('language') || 'en';

                // get is mobile
                var isMobile = window.orientation > -1;

                try {
                    await forexportPDF(true);
                    // prepare content
                    const element = document.getElementById('pdf-content');

                    if (!element) throw new Error('ไม่พบส่วนเนื้อหา Resume');
                    
                    // create a clone and set specific CSS for PDFs
                    const clone = element.cloneNode(true);

                    // delete span.mobile all
                    clone.querySelectorAll('span.mobile').forEach(span => {
                        if (span.parentNode.childNodes.length === 1) {
                            span.parentNode.remove();
                        } else {
                            span.remove();
                        }
                    });

                    // create a wrapper container to manage padding and scaling.
                    const wrapper = document.createElement('div');
                    wrapper.style.width = '210mm';
                    wrapper.style.padding = '8mm 5mm'; // ข้างละ 5mm
                    wrapper.style.margin = '0 auto';
                    wrapper.style.backgroundColor = 'white';
                    wrapper.style.boxSizing = 'border-box';
                    
                    const scaleRatio = Math.min(1, 1100 / wrapper.scrollHeight);
                    wrapper.style.transform = `scale(${scaleRatio})`;

                    // set up for internal content
                    const content = clone;
                    content.style.width = '100%';
                    content.style.margin = '0';
                    content.style.padding = '0';
                    content.style.backgroundColor = 'white';
                    content.style.color = 'black';
                    content.style.fontFamily = 'Arial, sans-serif';
                    // content.style.transform = 'scale(1)';
                    content.style.transformOrigin = 'top center';
                    
                    // add content to wrapper
                    wrapper.appendChild(content);
                    
                    // set styles for PDF
                    const pdfStyles = document.createElement('style');
                    if(!isMobile) {
                        pdfStyles.textContent = `
                                * {
                                    font-size: 70%;
                                }

                                /* only element mian */
                                body, div, p, span, a, li, section, h3, h2, h1 {
                                    font-size: 70% !important;
                                }

                                section * {
                                    font-size: 70% !important;
                                    margin-bottom: 0px !important;
                                    margin-top: 1px !important;
                                }

                                .header * {
                                    font-size: 70% !important;
                                }

                                .section-header {
                                    margin-bottom: 0.5rem !important;
                                }

                                .header-contact {
                                    margin-top: 0.5rem !important;
                                }

                                .header-contact a * {
                                    font-size: 50% !important;
                                    line-height: 1.2 !important; /* line spacing */
                                }

                                .header-contact i * {
                                    font-size: 50% !important;
                                }

                                .space-y-12, .space-y-8 {
                                    row-gap: 0.5rem !important;
                                }

                                .section-about h2 {
                                    margin-bottom: 0.5rem !important;
                                }

                                .section-about .grid {
                                    gap: 0.25rem !important;
                                }

                                .bg-white.rounded-xl.shadow-md.p-6 {
                                    padding: 0.75rem !important;
                                }

                                .section-skills .space-y-4 {
                                    row-gap: 0.5rem !important;
                                }

                                .section-skills .mb-1 {
                                    margin-bottom: 0.5rem !important;
                                }

                                .section-experience {
                                    row-gap: 0.5rem !important;
                                    margin-bottom: 0.5rem !important;
                                }

                                .section-experience li {
                                    margin-bottom: 0.5rem !important;
                                }

                                .section-tech {
                                    row-gap: 0.5rem !important;
                                }

                                .section-tech * {
                                    font-size: 50% !important;  
                                }

                                .section-additional {
                                    row-gap: 0.5rem !important;
                                }

                                .section-additional li {
                                    margin-bottom: 0.5rem !important;
                                }

                                .section-education {
                                    row-gap: 0.5rem !important;
                                }

                                .section-education span {
                                    margin-bottom: 0.5rem !important;
                                }

                                body {
                                    font-family: 'Sarabun', 'Noto Sans Thai', sans-serif !important;
                                    // word-spacing: 1px;
                                    // letter-spacing: 0.1px;
                                }
                        `;
                    } else {
                        pdfStyles.textContent = `
                            * {
                                font-size: 60%;
                            }
                            /* only element mian */
                            body, div, p, span, a, li, section, h3, h2, h1 {
                                font-size: 60% !important;
                            }

                            section * {
                                font-size: 60% !important;
                                margin-bottom: 0px !important;
                                margin-top: 1px !important;
                            }

                            .header * {
                                font-size: 60% !important;
                            }

                            .section-header {
                                margin-bottom: 0.5rem !important;
                            }

                            .header-contact {
                                margin-top: 0.5rem !important;
                            }

                            .header-contact a * {
                                font-size: 60% !important;
                                line-height: 1.2 !important; /* line spacing */
                            }

                            .header-contact i * {
                                font-size: 60% !important;
                            }

                            .space-y-12, .space-y-8 {
                                row-gap: 0.5rem !important;
                            }

                            .section-about h2 {
                                margin-bottom: 0.5rem !important;
                            }

                            .section-about .grid {
                                gap: 0.25rem !important;
                            }

                            .bg-white.rounded-xl.shadow-md.p-6 {
                                padding: 0.75rem !important;
                            }

                            .section-skills .space-y-4 {
                                row-gap: 0.5rem !important;
                            }

                            .section-skills .mb-1 {
                                margin-bottom: 0.5rem !important;
                            }

                            .section-experience {
                                row-gap: 0.5rem !important;
                                margin-bottom: 0.5rem !important;
                            }

                            .section-experience li {
                                margin-bottom: 0.5rem !important;
                            }

                            .section-tech {
                                row-gap: 0.5rem !important;
                            }

                            .section-tech * {
                                font-size: 50% !important;  
                            }

                            .section-additional {
                                row-gap: 0.5rem !important;
                            }

                            .section-additional li {
                                margin-bottom: 0.5rem !important;
                            }

                            .section-education {
                                row-gap: 0.5rem !important;
                            }

                            .section-education span {
                                margin-bottom: 0.5rem !important;
                            }

                            body {
                                font-family: 'Sarabun', 'Noto Sans Thai', sans-serif !important;
                            }
                        `;
                    }
                    content.prepend(pdfStyles);
                    
                    // Hide unwanted elements
                    content.querySelectorAll('.no-print').forEach(el => el.remove());
                    
                    // create a temporary container
                    const tempContainer = document.createElement('div');
                    tempContainer.appendChild(wrapper);
                    tempContainer.style.position = 'fixed';
                    tempContainer.style.left = '-9999px';
                    tempContainer.style.top = '0';
                    document.body.appendChild(tempContainer);

                    // wait for the content to finish rendering.
                    await new Promise(resolve => setTimeout(resolve, 1500));

                    // if(currentLang == 'en') {  filename = 'Resume Jetsada Yamto_' + currentLang;
                    // } else { let filename = 'เรซูเม่ เจษฎา แหยมโต_' + currentLang;}

                    // pptions for PDF generation
                    const opt = {
                        // filename: `Resume Jetsada Yamto_${currentLang}_${getCurrentTime()}.pdf`,
                        filename: `Resume Jetsada Yamto_${currentLang}.pdf`,
                        image: { type: 'jpeg', quality: 0.98 },
                        html2canvas: { 
                            scale: 2,
                            logging: true,
                            useCORS: true,
                            letterRendering: true, 
                            allowTaint: true,
                            scrollX: 0,
                            scrollY: 0,
                            // fontFamily: 'Sarabun, sans-serif',
                            // onclone: function(clonedDoc) {
                            //     clonedDoc.body.style.fontFamily = 'Sarabun, sans-serif';
                            //     clonedDoc.body.style.letterSpacing = '0.1px';
                            // },
                            ignoreElements: (el) => {
                                return el.tagName === 'SCRIPT' || 
                                       el.classList.contains('no-print');
                            },
                            width: wrapper.offsetWidth,
                            // height: wrapper.offsetHeight,
                            height: !isMobile ? wrapper.offsetHeight: wrapper.offsetHeight * 1.2, // เพิ่ม buffer สำหรับเนื้อหา mobile
                        },
                        jsPDF: { 
                            unit: 'mm', 
                            format: 'a4', 
                            orientation: 'portrait', 
                            compress: true, 
                            hotfixes: ['px_scaling'],
                            putOnlyUsedFonts: true // เพิ่มประสิทธิภาพ
                        },
                        pagebreak: { 
                            mode: ['avoid-all', 'css', 'legacy'], 
                            before: '.page-break',
                        },
                    };

                    // create PDF
                    await html2pdf().set(opt).from(wrapper).save();

                    notifyDialog('success', 'PDF Exported Successfully!');
                    
                } catch (error) {
                    // console.error('PDF Export Error:', error);
                    // alert('Export ไม่สำเร็จ: ' + error.message);
                    notifyDialog('warning', 'Export ไม่สำเร็จ:');
                } finally {
                    // clear temporary container
                    const tempContainer = document.querySelector('div[style*="left: -9999px"]');
                    if (tempContainer) document.body.removeChild(tempContainer);

                    // restore button status
                    btn.innerHTML = originalHTML;
                    btn.disabled = false;

                    forexportPDF(false);

                    isMobile();
                }
            });
        }

        async function initPPTXExport() {
            const exportPPTX = document.getElementById('exportPPTX');
            if (!exportPPTX) return;

            exportPPTX.addEventListener('click', async function() {
                const btnppt = this;
                const originalHTML = btnppt.innerHTML;

                // get current language
                const currentLang = localStorage.getItem('language') || 'en';
                // console.log(currentLang);
                // show loading
                btnppt.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="lang-en">Preparing Presentation...</span>
                    <span class="lang-th">การเตรียมการนำเสนอ...</span>
                `;
                btnppt.disabled = true;

                try {
                    // Initialize PowerPoint
                    const pptx = new PptxGenJS();
                    pptx.author = 'Jetsada Yamto';
                    pptx.company = '';

                    // basic setting
                    pptx.layout = 'LAYOUT_WIDE'; // ใช้รูปแบบ 16:9

                    // define Master Slide
                    pptx.defineSlideMaster({
                        title: 'My_Portfolio',
                        background: { color: 'FFFFFF' },
                        margin: [0.5, 0.5, 0.5, 0.5], // กำหนดระยะขอบ (บน, ซ้าย, ล่าง, ขวา)
                        // slideNumber: { x: 11.5, y: 6.8, color: '7F7F7F' },
                    });


                    // create a cover slide
                    const coverSlide = pptx.addSlide({ masterName: 'My_Portfolio'});
                    // set project Slide
                    coverSlide.slideTransition = {
                        type: 'wipe',       // ประเภทเอฟเฟกต์ (// fade - ค่อยๆ จางเข้า push - ดันสไลด์เข้ามา wipe - เช็ดเข้ามา split - แยกออก reveal - เปิดเผย cover - คลุมเข้ามา uncover - เปิดออก zoom - ซูมเข้า)
                        speed: 1000,        // ความเร็วในมิลลิวินาที (1000 = 1 วินาที)
                        advanceClick: true, // เปลี่ยนเมื่อคลิก
                        advanceAfterTime: 1 // เปลี่ยนอัตโนมัติหลังจากเวลาที่กำหนด (0 = ไม่ใช้)
                    };


                    coverSlide.addText(currentLang == 'en' ? 'My Creative Projects Portfolio' : 'ผลงานโครงการสร้างสรรค์ของฉัน', {
                        x: 0, y: 2.0, w: '100%', h: 1.5, // เปลี่ยน x เป็น 0 และ w เป็น 100%
                        fontSize: 40,
                        bold: true,
                        align: 'center',
                        color: '1a1aff',
                        fontFace: 'TH Sarabun, Arial',
            
                    });

                    coverSlide.addText(currentLang == 'en' ? 'Jetsada Yamto (Boom)': 'เจษฎา แหยมโต (บูม)', {
                        x: 0.4, y: 3.5, w: '90%', h: 0.8,
                        fontSize: 24,
                        align: 'center',
                        color: '751aff', // 7F7F7F
                        fontFace: 'TH Sarabun, Arial',
                   
                    });

                    // process each project card
                    const projectCards = document.querySelectorAll('.project-card');

                    for (const card of projectCards) {
                        // get project details
                        const title = card.querySelector('h3 .lang-'+currentLang)?.textContent || card.querySelector('h3').textContent;
                        const description = card.querySelector('.view-details-btn.lang-'+currentLang) ?.dataset.description || '';
                        const category = card.dataset.category || '';
                        const imageSrc = card.querySelector('img')?.src || '';
                        const techTags = Array.from(card.querySelectorAll('.flex.flex-wrap.gap-2.mb-4 span')).map(span => span.textContent).join(', ');

                        // create a slide for this project
                        const mainSlide = pptx.addSlide({ masterName: 'My_Portfolio'});

                        // project Slide
                        mainSlide.slideTransition = {
                            type: 'fade',
                            speed: 500,
                            advanceClick: true
                        };
                
                        // add title
                        mainSlide.addShape(pptx.ShapeType.roundRect, {
                            x: 0.3, y: 0.5, w: '95%', h: 0.9,
                            fill: { color: '4d4dff' },
                            line: { color: '000080', width: 1 }
                        });

                        mainSlide.addText(title, {
                            x: 0.3, y: 0.6, w: '95%', h: 0.7, // ใช้ความกว้างเต็มสไลด์
                            fontSize: 22,
                            bold: true,
                            color: 'FFFFFF',
                            fontFace: 'TH Sarabun, Arial',
                            align: 'center',
                            valign: 'middle',
                        });

                        // add category
                        if (category) {
                            mainSlide.addText(currentLang == 'en' ? `Category : ${category.split(' ').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ')}` : `หมวดหมู่ : ${category.split(' ').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ')}`, {
                                x: 0.5, y: 1.5, w: '100%', h: 0.4,
                                fontSize: 14,
                                color: '7F7F7F',
                                fontFace: 'TH Sarabun, Arial'
                            });
                        }

                        // add image if available
                        if (imageSrc) {
                            try {
                                const aspectRatio = await getImageAspectRatio(imageSrc);
                                const isPortrait = aspectRatio < 1; // ถ้าความกว้างน้อยกว่าความสูง
                                
                                // mainSlide.addShape(pptx.ShapeType.rect, {
                                //     x: 0.5, y: 2.0, w: 4.3, h: 3.0,
                                    // fill: { color: 'F2F2F2' },
                                    // line: { color: 'D9D9D9', width: 1 }
                                // });
                                
                                if (isPortrait) {
                                    // สำหรับภาพแนวตั้ง - กำหนดความกว้างให้เล็กลง
                                    const portraitWidth = 3.0; // ปรับตามต้องการ
                                    const portraitX = 0.5 + (4.3 - portraitWidth)/2; // จัดกลาง
                                    
                                    mainSlide.addImage({
                                        path: imageSrc,
                                        x: portraitX, y: 2.1, 
                                        w: portraitWidth, h: 2.8,
                                        sizing: { type: 'contain' },
                                        transparent: true
                                    });
                                } else {
                                    // สำหรับภาพแนวนอน - ใช้ขนาดปกติ
                                    mainSlide.addImage({
                                        path: imageSrc,
                                        x: 1.1, y: 2.1, 
                                        w: 3.4, h: 2.4,
                                        sizing: { type: 'contain' },
                                        transparent: true
                                    });
                                }


                            } catch (e) {
                                console.warn(`ไม่สามารถเพิ่มรูปภาพ ${imageSrc}:`, e);
                            }
                        }


                        // add description
                        if (description) {
                            // mainSlide.addShape(pptx.ShapeType.rect, {
                            //     x: 5.0, y: 2.0, w: 4.5, h: 1.8,
                                // fill: { color: 'F8F8F8' },
                                // line: { color: 'E6E6E6', width: 1 }
                            // });
                            mainSlide.addText(description, {
                                x: 6.5, y: 2.1, w: 4.3, h: 1.6,
                                fontSize: 16,
                                color: '333333',
                                fontFace: 'TH Sarabun, Arial',
                                align: 'left',
                                valign: 'top',
                                margin: 0.1,
                                wrap: true // อนุญาตให้ข้อความขึ้นบรรทัดใหม่
                            });
                        }

                        // add technologies
                        if (techTags) {
                            mainSlide.addShape(pptx.ShapeType.roundRect, {
                                x: 6.5, y: 4.0, w: 4.5, h: 1.0,
                                fill: { color: 'F2F7FF' },
                                line: { color: '001a66', width: 1 }
                            });

                            mainSlide.addText(currentLang == 'en' ? `Technologies : ${techTags}` : `เทคโนโลยีที่ใช้ : ${techTags}`, {
                                x: 6.8, y: 4.1, w: 4.3, h: 0.8,
                                fontSize: 14,
                                // color: '2F5496',
                                fontFace: 'TH Sarabun, Arial',
                                align: 'left',
                                valign: 'middle',
                                wrap: true
                            });
                        }

                        // add button data if available
                        const viewDetailsBtn = card.querySelector('.view-details-btn.lang-'+currentLang);
                        if (viewDetailsBtn) {
                            const features = viewDetailsBtn.dataset.features || '';
                            const tech = viewDetailsBtn.dataset.tech || '';
                            const images = viewDetailsBtn.dataset.images || '';

                            // add features if available
                            if (features) {
                                const featureList = features.split('|').map(f => `• ${f.trim()}`).join('\n');
                                // mainSlide.addShape(pptx.ShapeType.rect, {
                                //     x: 0.5, y: 4.7, w: 9.0, h: 1.5,
                                //     fill: { color: 'F8F8F8' },
                                //     line: { color: 'E6E6E6', width: 1 }
                                // });

                                mainSlide.addText(currentLang == 'en' ? `Key Features : \n${featureList}` : `ฟีเจอร์สำคัญ : \n${featureList}`, {
                                    x: 0.8, y: 4.8, w: 8.8, h: 1.3,
                                    fontSize: 12,
                                    bullet: false,
                                    color: '333333',
                                    fontFace: 'TH Sarabun, Arial',
                                    align: 'left',
                                    valign: 'top',
                                    margin: 0.1,
                                    wrap: true
                                });
                            }

                            // add additional images if available
                            if (images) {
                                const imageArray = images.split('|');
                                if (imageArray.length > 0) {
                                    const imagesSlide = pptx.addSlide({ masterName: 'My_Portfolio' });
            
                                    // create a new slide for additional images
                                    imagesSlide.addShape(pptx.ShapeType.roundRect, {
                                        x: 0.3, y: 0.5, w: '95%', h: 0.9,
                                        fill: { color: '809fff' },
                                        line: { color: '001a66', width: 1 }
                                    });

                                    imagesSlide.addText(currentLang == 'en' ? `${title} - Image of project` : `${title} - ภาพผลงาน`, {
                                        x: 0.3, y: 0.6, w: '95%', h: 0.7,
                                        fontSize: 22,
                                        bold: true,
                                        // color: 'FFFFFF',
                                        fontFace: 'TH Sarabun, Arial',
                                        align: 'center',
                                        valign: 'middle'
                                    });

                                    // add up to 4 images in a 2x2 grid
                                    const positions = [
                                        { x: 1.8, y: 1.6, w: 4.4, h: 2.8 },
                                        { x: 6.4, y: 1.6, w: 4.4, h: 2.8 },
                                        { x: 1.8, y: 4.6, w: 4.4, h: 2.8 },
                                        { x: 6.4, y: 4.6, w: 4.4, h: 2.8 }
                                    ];

                                    for (let i = 0; i < Math.min(4, imageArray.length); i++) {
                                        try {
                                            const aspectRatio = await getImageAspectRatio(imageArray[i]);
                                            const isPortrait = aspectRatio < 1;
                                            
                                            imagesSlide.addShape(pptx.ShapeType.rect, {
                                                ...positions[i],
                                                // fill: { color: 'F2F2F2' },
                                                // line: { color: 'D9D9D9', width: 1 }
                                            });
                                            // set image slide
                                            imagesSlide.slideTransition = {
                                                type: 'fade',
                                                speed: 500,
                                                advanceClick: true
                                            };
                                            
                                            if (isPortrait) {
                                                const portraitWidth = positions[i].w * 0.5; // ลดความกว้างลง 50%
                                                const portraitX = positions[i].x + (positions[i].w - portraitWidth)/2;
                                                
                                                imagesSlide.addImage({
                                                    path: imageArray[i],
                                                    x: portraitX,
                                                    y: positions[i].y + 0.1,
                                                    w: portraitWidth - 0.2,
                                                    h: positions[i].h - 0.2,
                                                    sizing: { type: 'contain' },
                                                    transparent: true
                                                });
                                            } else {
                                                imagesSlide.addImage({
                                                    path: imageArray[i],
                                                    x: positions[i].x + 0.1,
                                                    y: positions[i].y + 0.1,
                                                    w: positions[i].w - 0.2,
                                                    h: positions[i].h - 0.2,
                                                    sizing: { type: 'contain' },
                                                    transparent: true
                                                });
                                            }
                                        } catch (e) {
                                            console.warn(`ไม่สามารถเพิ่มรูปภาพ ${imageArray[i]}:`, e);
                                        }
                                    }
                                }
                            }
                        }
                    }

                    // save the PowerPoint
                    await  pptx.writeFile({ fileName: currentLang == 'en' ? `My Creative Projects Portfolio_${currentLang}.pptx` : `ผลงานโปรเจกต์สร้างสรรค์ของฉัน_${currentLang}.pptx` });

                    notifyDialog('success', 'Power Point Exported Successfully!');

                } catch (error) {
                    // console.error('PPTX Export Error:', error);
                    // alert('Export ไม่สำเร็จ: ' + error.message);
                    notifyDialog('warning', 'Export ไม่สำเร็จ:');
                } finally {
                    
                    // restore button status
                    btnppt.innerHTML = originalHTML;
                    btnppt.disabled = false;
                }
            });
        }

        async function initDOCExport() {
            const exportDOCX = document.getElementById('exportDOCX');
            if (!exportDOCX) return;

            exportDOCX.addEventListener('click', async function() {
                const btndoc = this;
                const originalHTML = btndoc.innerHTML;

                // get current language
                const currentLang = localStorage.getItem('language') || 'en';
                // console.log(currentLang);
                // show loading
                btndoc.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="lang-en">Preparing Presentation...</span>
                    <span class="lang-th">การเตรียมการนำเสนอผลงาน...</span>
                `;
                btndoc.disabled = true;

                try {
                    const pptxContent = document.getElementById('pptx-content');
                    if (pptxContent) {
                        // pptxContent.insertBefore(exportDOCX, pptxContent.firstChild);
                        const { Document, Paragraph, TextRun, HeadingLevel, Packer, Table, TableRow, TableCell, ImageRun } = docx;

                        // 1. create document structure
                        const doc = new Document({
                            styles: {
                                paragraphStyles: [
                                    {
                                        id: 'Normal',
                                        name: 'Normal',
                                        run: {
                                            size: 24, // 12pt
                                            font: 'Tahoma',
                                        },
                                        paragraph: {
                                            spacing: { line: 276 }, // 1.15 line spacing
                                        },
                                    },
                                    {
                                        id: 'Heading1',
                                        name: 'Heading 1',
                                        run: {
                                            size: 48, // 24pt
                                            bold: true,
                                            color: '2F5496',
                                            font: 'Tahoma',
                                        },
                                        paragraph: {
                                            spacing: { before: 240, after: 120 }, // space
                                        },
                                    },
                                    {
                                        id: 'Heading2',
                                        name: 'Heading 2',
                                        run: {
                                            size: 36, // 18pt
                                            bold: true,
                                            color: '2F5496',
                                            font: 'Tahoma',
                                        },
                                        paragraph: {
                                            spacing: { before: 200, after: 100 },
                                        },
                                    },
                                ],
                            },
                            sections: [
                                {
                                    properties: {},
                                    children: [
                                        // 2. cover
                                        new Paragraph({
                                            text: currentLang == 'en' ? 'My Creative Projects Portfolio' : 'ผลงานโปรเจกต์สร้างสรรค์ของฉัน',
                                            heading: HeadingLevel.HEADING_1,
                                            alignment: 'center',
                                        }),
                                        new Paragraph({
                                            text: currentLang == 'en' ? 'Jetsada Yamto (Boom)': 'เจษฎา แหยมโต (บูม)',
                                            heading: HeadingLevel.HEADING_2,
                                            alignment: 'center',
                                            spacing: { after: 400 },
                                        }),

                                        // 3. add content
                                        ...await generateProjectContent(),
                                    ],
                                },
                            ],
                        });

                        // 4. create link download
                        Packer.toBlob(doc).then((blob) => {
                            const link = document.createElement('a');
                            link.href = URL.createObjectURL(blob);
                            link.download = currentLang == 'en' ? `My Creative Projects Portfolio_${currentLang}.docx` : `ผลงานโปรเจกต์สร้างสรรค์ของฉัน_${currentLang}.docx`; 
                            link.click();
                        });

                        // create file content
                        async function generateProjectContent() {
                            const content = [];
                            const projectCards = document.querySelectorAll('.project-card');

                            for (const card of projectCards) {
                                // pull data
                                const title = card.querySelector('h3 .lang-'+currentLang)?.textContent || card.querySelector('h3').textContent;
                                const description = card.querySelector('.view-details-btn.lang-'+currentLang)?.dataset.description || '';
                                const category = card.dataset.category || '';
                                const imageSrc = card.querySelector('img')?.src || '';
                                const techTags = Array.from(card.querySelectorAll('.flex.flex-wrap.gap-2.mb-4 span')).map(span => span.textContent).join(', ');

                                // add title project
                                content.push(
                                    new Paragraph({
                                        text: title,
                                        heading: HeadingLevel.HEADING_2,
                                        spacing: { before: 600, after: 200 },
                                    })
                                );

                                // category
                                if (category) {
                                    content.push(
                                        new Paragraph({
                                            children: [
                                                new TextRun({
                                                    text: currentLang == 'en' ? 'Category : ' : 'หมวดหมู่ : ',
                                                    bold: true,
                                                }),
                                                new TextRun({
                                                    text: category.split(' ').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' '),
                                                }),
                                            ],
                                            spacing: { after: 200 },
                                        })
                                    );
                                }

                                // Images
                                if (imageSrc) {
                                    try {
                                        const imageBlob = await fetch(imageSrc).then(res => res.blob());
                                        content.push(
                                            new Paragraph({
                                                children: [
                                                    new ImageRun({
                                                        data: await blobToArrayBuffer(imageBlob),
                                                        transformation: {
                                                            width: 400,
                                                            height: 300,
                                                        },
                                                    }),
                                                ],
                                                alignment: 'center',
                                                spacing: { after: 200 },
                                            })
                                        );
                                    } catch (e) {
                                        console.warn(`ไม่สามารถเพิ่มรูปภาพ ${imageSrc}:`, e);
                                    }
                                }

                                // Description
                                if (description) {
                                    content.push(
                                        new Paragraph({
                                            text: currentLang == 'en' ? 'Description : ' : 'คำอธิบาย : ',
                                            bold: true,
                                            spacing: { before: 200, after: 100 },
                                        }),
                                        new Paragraph({
                                            text: description,
                                            spacing: { after: 200 },
                                        })
                                    );
                                }

                                // Technologies
                                if (techTags) {
                                    content.push(
                                        new Paragraph({
                                            text: currentLang == 'en' ? 'Technologies' : 'เทคโนโลยีที่ใช้ : ',
                                            bold: true,
                                            spacing: { before: 200, after: 100 },
                                        }),
                                        new Paragraph({
                                            text: techTags,
                                            spacing: { after: 200 },
                                        })
                                    );
                                }

                                // Pull data description
                                const viewDetailsBtn = card.querySelector('.view-details-btn.lang-'+currentLang);
                                if (viewDetailsBtn) {
                                    const features = viewDetailsBtn.dataset.features || '';
                                    const images = viewDetailsBtn.dataset.images || '';

                                    // Features
                                    if (features) {
                                        content.push(
                                            new Paragraph({
                                                text: currentLang == 'en' ? 'Features : ' : 'ฟีเจอร์สำคัญ : ',
                                                bold: true,
                                                spacing: { before: 200, after: 100 },
                                            })
                                        );

                                        features.split('|').forEach(feature => {
                                            content.push(
                                                new Paragraph({
                                                    text: `• ${feature.trim()}`,
                                                    bullet: { level: 0 },
                                                    spacing: { after: 100 },
                                                })
                                            );
                                        });
                                    }

                                    // Images other
                                    if (images) {
                                        content.push(
                                            new Paragraph({
                                                text: currentLang == 'en' ? 'Project Images' : 'ภาพหน้าผลงาน : ',
                                                bold: true,
                                                heading: HeadingLevel.HEADING_3,
                                                spacing: { before: 400, after: 200 },
                                            })
                                        );

                                        const imageArray = images.split('|');
                                        for (let i = 0; i < Math.min(4, imageArray.length); i++) {
                                            try {
                                                const imageBlob = await fetch(imageArray[i]).then(res => res.blob());
                                                content.push(
                                                    new Paragraph({
                                                        children: [
                                                            new ImageRun({
                                                                data: await blobToArrayBuffer(imageBlob),
                                                                transformation: {
                                                                    width: 300,
                                                                    height: 225,
                                                                },
                                                            }),
                                                        ],
                                                        alignment: 'center',
                                                        spacing: { after: 200 },
                                                    }),
                                                    new Paragraph({
                                                        text: currentLang == 'en' ? `Image of ${i+1}` : `ภาพที่ ${i+1}`,
                                                        alignment: 'center',
                                                        size: 20,
                                                        color: '666666',
                                                        spacing: { after: 400 },
                                                    })
                                                );
                                            } catch (e) {
                                                console.warn(`ไม่สามารถเพิ่มรูปภาพ ${imageArray[i]}:`, e);
                                            }
                                        }
                                    }
                                }
                               
                                // add line
                                content.push(
                                    new Paragraph({
                                        children: [
                                            new TextRun({
                                                text: '_____________________________________________',
                                                color: 'CCCCCC',
                                            }),
                                        ],
                                        alignment: 'center',
                                        spacing: { before: 400, after: 400 },
                                    })
                                );
                            }

                            return content;
                        }

                        // change Blob to ArrayBuffer
                        function blobToArrayBuffer(blob) {
                            return new Promise((resolve, reject) => {
                                const reader = new FileReader();
                                reader.onload = () => resolve(reader.result);
                                reader.onerror = reject;
                                reader.readAsArrayBuffer(blob);
                            });
                        }
                    }

                    notifyDialog('success', 'Document Word Exported Successfully!');

                } catch (error) {
                    // console.error('DOCX Export Error:', error);
                    notifyDialog('warning', 'Export ไม่สำเร็จ:');
                } finally {
                    // restore button status
                    btndoc.innerHTML = originalHTML;
                    btndoc.disabled = false;
                }
            });
        }

        let currentImages = [];
        function initProjectCarousel(images) {
           // console.log(images);
            currentImages = images;
            const carouselElement = document.getElementById('modalCarousel');
            const carouselWrapper = carouselElement.querySelector('.relative.h-96');

            // Clear Image
            carouselWrapper.innerHTML = '';

            // new slides
            const wrapper = carouselElement.querySelector('.relative.h-96');
            wrapper.innerHTML = '';

            // add Image
            images.forEach((img, index) => {
                const slide = document.createElement('div');
                slide.className = `carousel-slide duration-700 ease-in-out ${index === 0 ? 'block' : 'hidden'}`;
                slide.dataset.carouselItem = index === 0 ? 'active' : '';
                slide.innerHTML = `<img src="${img}" class="absolute block w-full h-full object-contain cursor-zoom-in" alt="Image slide ${index + 1}" data-index="${index}">`;
                carouselWrapper.appendChild(slide);
            });

            // const wrapper = document.querySelector('.relative.overflow-hidden');
            const slides = wrapper.querySelectorAll('[data-carousel-item]');

            slides.forEach((slide, index) => {
                const img = slide.querySelector('img');
                img.classList.add('cursor-zoom-in');
                // click and hover
                img.addEventListener('click', () => openLightbox(images[index]));
                img.addEventListener('mouseenter', () => img.style.transform = 'scale(1.02)');
                img.addEventListener('mouseleave', () => img.style.transform = 'scale(1)');
            });

            const prevBtn = carouselElement.querySelector('[data-carousel-prev]');
            const nextBtn = carouselElement.querySelector('[data-carousel-next]');
            
            var currentIndex = 0;
            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    // console.log(currentIndex);
                    showSlide((currentIndex - 1 + images.length) % images.length);
                });
                
                nextBtn.addEventListener('click', () => {
                    // console.log(currentIndex);
                    showSlide((currentIndex + 1) % images.length);
                });
            }

            // if Carousel old destroy
            if (carouselElement._carousel) {
                carouselElement._carousel.destroy();
            }
            
            // new create Carousel
            const options = { defaultPosition: 0, interval: 3000 };
            
            carouselElement._carousel = new Carousel(carouselElement, options, true);

            function showSlide(index) {
                const carouselElement = document.getElementById('modalCarousel');
                const carouselWrapper = carouselElement.querySelector('.relative.h-96');
                const slides = carouselWrapper.querySelectorAll('.carousel-slide');
                slides.forEach((slide, i) => {
                    slide.classList.toggle('hidden', i !== index);
                });
                currentIndex = index;
            }

            // Event for Lightbox
            wrapper.querySelectorAll('img').forEach(img => {
                img.addEventListener('click', (e) => {
                    const index = parseInt(e.target.dataset.index);
                    openLightbox(currentImages[index]);
                });
            });
        }

        // Open Lightbox
        function openLightbox(imageUrl) {
            const lightbox = document.getElementById('imageLightbox');
            const lightboxImg = document.getElementById('lightboxImage');
            
            if (!lightbox || !lightboxImg) return;
            
            // โหลดภาพก่อนเพื่อคำนวณสัดส่วน
            const img = new Image();
            img.onload = function() {
                lightboxImg.src = imageUrl;
                
                // ปรับคลาสตามสัดส่วนภาพ
                if (this.width > this.height) {
                    lightboxImg.classList.add('w-auto', 'h-[90vh]');
                    lightboxImg.classList.remove('h-auto', 'w-[90vw]');
                } else {
                    lightboxImg.classList.add('h-auto', 'w-[90vw]');
                    lightboxImg.classList.remove('w-auto', 'h-[90vh]');
                }
                
                lightbox.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            };
            img.src = imageUrl;
        }

        // Close Lightbox
        function closeLightbox() {
            const lightbox = document.getElementById('imageLightbox');
            lightbox.classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Event Listener Close button
        document.getElementById('closeLightbox')?.addEventListener('click', closeLightbox);

        // Close Lightbox when click bacground
        document.getElementById('imageLightbox')?.addEventListener('click', (e) => {
            if (e.target === document.getElementById('imageLightbox')) {
                closeLightbox();
            }
        });
            
        function filterProjects(category) {
            const projectCards = document.querySelectorAll('.project-card');
            projectCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transition = 'opacity 0.3s ease';
                
                setTimeout(() => {
                    if (category === 'all' || card.dataset.category.includes(category)) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                    
                    card.style.opacity = '1';
                }, 50);
            });
        }

        function getCurrentTime() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;

            return hours +''+ minutes;
            // return hours + ':' + minutes;
        }

        async function forexportPDF(pdf) {
            Array.from(document.querySelectorAll('.web')).forEach(function(element){
                pdf ? element.classList.remove('hidden') : element.classList.add('hidden');
            });

            Array.from(document.querySelectorAll('.mobile')).forEach(function(element) {
                pdf ? element.classList.add('hidden') : element.classList.remove('hidden');
            });
        }

        function isMobile() {
            var isMobile = window.orientation > -1;
            // console.log(isMobile ? 'Mobile' : 'Not mobile');
            Array.from(document.querySelectorAll('.web')).forEach(function(element){
                isMobile ? element.classList.add('hidden') : element.classList.remove('hidden');
            });

            Array.from(document.querySelectorAll('.mobile')).forEach(function(element){
                isMobile ? element.classList.remove('hidden') : element.classList.add('hidden');
            });
        }

        function notifyDialog(icon, message) {
            return Swal.fire({ 
                icon: icon,
                title: '',
                text: message,
                showCancelButton: false,
                showConfirmButton: false,
                didOpen: function () {
                    Swal.showLoading()
                    // AJAX request simulated with setTimeout
                    setTimeout(function () {
                        Swal.close()
                    }, 1000)
                },
                }).then((result) => {
                if (result.isConfirmed) {
                   // 
                }
            });
        }

        async function getImageAspectRatio(imageUrl) {
            return new Promise((resolve) => {
                const img = new Image();
                img.onload = function() {
                    resolve(this.width / this.height);
                };
                img.onerror = function() {
                    resolve(1); // ถ้าโหลดภาพไม่ได้ ให้ใช้สัดส่วน 1:1
                };
                img.src = imageUrl;
            });
        }
    </script>
</body>
</html>
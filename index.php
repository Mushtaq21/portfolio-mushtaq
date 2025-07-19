<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="antialiased">
    <div id="top"></div> <header class="sticky top-0 z-50 flex flex-col md:flex-row justify-between items-center py-6 px-4 bg-[#141438] shadow-md mb-8">

            <div class="flex items-center space-x-6">
                <div class="text-2xl font-bold text-white">
                    Mushtaq Ahmed
                </div>
                <nav>
                    <ul class="flex space-x-6 text-lg">
                        <li><a href="#top" class="hover:no-underline text-gray-300 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="resume.php" target="_blank" class="hover:no-underline text-gray-300 hover:text-white transition duration-300">Resume</a></li>
                        <li><a href="contact.php" target="_blank" class="hover:no-underline text-gray-300 hover:text-white transition duration-300">Contact</a></li>
                        <li><a href="feedback.php" target="_blank" class="hover:no-underline text-gray-300 hover:text-white transition duration-300">Feedback</a></li>
                        <li><a href="admin/login.php" target="_blank" class="hover:no-underline text-gray-300 hover:text-white transition duration-300">Admin Panel*</a></li>
                    </ul>
                </nav>
            </div>
           <div class="flex items-center space-x-6 mt-4 md:mt-0 ml-auto">
      <a href="https://github.com/Mushtaq21" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
        <i class="fab fa-github text-2xl"></i>
      </a>
      <a href="https://www.linkedin.com/in/mushtaq-ahmed-20a2bb239" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
        <i class="fab fa-linkedin text-2xl"></i>
      </a>
    </div>
        </header>

        <section id="hero" class="normal-bg text-white p-12 rounded-xl shadow-lg text-center md:text-left mb-8 relative">
            <div class="flex flex-col md:flex-row items-center md:justify-between relative z-10">
                <div class="md:w-2/3 mb-8 md:mb-0">
                    <h1 class="typewriter text-6xl font-extrabold mb-4 text-white">
                        Hi, I am Mushtaq Ahmed!
                    </h1>

                    <p class="text-3xl font-semibold mb-6 animate-fade-in-up">
                        An Aspiring Computer Science Engineer. 
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        Seeking a challenging role to apply my knowledge of Python, SQL, and cloud technologies to contribute to impactful software solutions. 
                        Eager to collaborate with a dynamic team and grow in a technology-driven environment.
                    </p>
                </div>
                <div class="md:w-1/3 flex justify-center md:justify-end">
                    <img src="Mushtaq.PNG" alt="Mushtaq Ahmed" class="rounded-full w-48 h-48 object-cover shadow-lg border-4 border-black">
                </div>
            </div>
        </section>
        

        <section id="skills" class="bg-transparent p-8 mb-8">
            <h2 class="section-heading">Technical Skills</h2>
            <br>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
                <div class="skill-category">
                    <h3 class="text-2xl font-semibold text-white mb-4 text-center">Frontend</h3>
                    <ul class="space-y-2 text-center">
                        <li class="skill-item">HTML <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">CSS<span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">Javascript <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">JQuery <span class="text-gray-400 text-sm"></span></li>
                        
                    </ul>
                </div>
                <div class="skill-category">
                    <h3 class="text-2xl font-semibold text-white mb-4 text-center">Backend</h3>
                    <ul class="space-y-2 text-center">
                        <li class="skill-item">Python <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">PHP <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">Laravel <span class="text-gray-400 text-sm"></span></li>
                        
                        <li class="skill-item">SQL <span class="text-gray-400 text-sm"></span></li>
                    </ul>
                </div>
                <div class="skill-category" >
                    <h3 class="text-2xl font-semibold text-white mb-4 text-center">DevOps</h3>
                    <ul class="space-y-2 text-center">
                        <li class="skill-item">Linux <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">Git <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">GitHub <span class="text-gray-400 text-sm"></span></li>
                        <li class="skill-item">Cloud <span class="text-gray-400 text-sm"></span></li>
                    
                    </ul>
                </div>
            </section>

        <section id="portfolio" class="bg-transparent p-8 mb-8">
            <h2 class="section-heading">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="project-card p-6 bg-green-700/30">
                    <img src="gms.png" alt="Grocery Management System" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-2xl font-semibold text-white mb-2">Grocery Management System</h3>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-green-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">PHP</span>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">HTML</span>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Javascript</span>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">SQL</span>
                        <span class="bg-green-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">CSS</span>
                        
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">The Grocery Management System simplifies inventory control and sales tracking through an intuitive interface. It allows users to add, update, and remove items with ease, while also managing customer orders efficiently. The system automates key operations, enhancing accuracy and improving overall store efficiency.

</p>
                    <div class="flex justify-between items-center text-gray-400 text-sm">
                        <span>2024</span>
                        <a href="https://github.com/Mushtaq21/Multivendor-Groceries-System" target=_main class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>

                <div class="project-card p-6 bg-purple-700/30">
                    <img src="chatbot.jpg" alt="chatbot Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-2xl font-semibold text-white mb-2">Multilingual AI Chatbot</h3>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-purple-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Python</span>
                        <span class="bg-purple-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Flask</span>
                        <span class="bg-purple-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">NLP</span>
                        <span class="bg-purple-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">LLMs</span>
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">A chatbot using the MedQuAD dataset, TF-IDF, and Streamlit UI to answer medical questions. It supports multi-language queries (English, Hindi, Kannada, Marathi) with automatic translation and medical entity recognition (symptoms, diseases, treatments). Features fast retrieval, follow-up questions, and accurate.</p>
                    <div class="flex justify-between items-center text-gray-400 text-sm">
                        <span>2025</span>
                        <a href="https://github.com/Mushtaq21/Medical-Chatbot" target=_main target class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>

                <div class="project-card p-6 bg-gray-700/30">
                    <img src="portfolio.png" alt="portfolio" class="rounded-lg mb-4 w-full h-48 object-cover">
                    <h3 class="text-2xl font-semibold text-white mb-2">My Portfolio</h3>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">HTML</span>
                        <span class="bg-gray-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">CSS</span>
                        <span class="bg-gray-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">Javascript</span>
                        <span class="bg-gray-500 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full">PHP</span>
                        
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">My personal portfolio website highlights my skills and projects as a Computer Science Engineering student. Developed with HTML, Tailwind CSS, and PHP, it features dynamic elements like a contact form, a feedback form for user input, and a secure admin panel for efficient content management.</p>
                    <div class="flex justify-between items-center text-gray-400 text-sm">
                        <span>2025</span>
                        <a href="#" class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="interests" class="bg-transparent p-8 mb-8">
            <h2 class="section-heading">Interests</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="interest-card p-6">
                    <div class="text-center">
                        <i class="fas fa-gamepad icon"></i>
                        <h3 class="text-2xl font-semibold text-white mb-2">Gaming</h3>
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">I love immersing myself in diverse virtual worlds, exploring narratives, and tackling challenges. Gaming isn't just about entertainment; it's a gateway to experiencing different cultures, stories, and perspectives. It sharpens my reflexes, strategic thinking, and teamwork skills, all while providing a sense of community through multiplayer experiences and online forums. The evolving nature of gaming technology also fascinates me, from realistic graphics to the rise of virtual and augmented reality, making it a field that constantly piques my interest.</p>
                    <p class="text-gray-400 text-sm font-semibold">My favorite creators I follow are:</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm mt-2">
                        <li>Carryminati</li>
                        <li>Mortal</li>
                        <li>ScoutOP</li>
                        <li>Dynamo Gaming</li>
                    </ul>
                </div>

                <div class="interest-card p-6">
                    <div class="text-center">
                        <i class="fas fa-laptop icon"></i>
                        <h3 class="text-2xl font-semibold text-white mb-2">Video Editing</h3>
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">I have a deep interest in video editing, as it allows me to creatively express ideas, stories, and emotions through visuals and sound. Whether it’s trimming clips, adding transitions, syncing audio, or enhancing footage, I enjoy every step of the editing process. I actively use tools like VN, CapCut, and Adobe Premiere Pro—each offering unique features that suit different types of projects. VN and CapCut are great for quick mobile edits and social media content, while Adobe Premiere Pro gives me the flexibility and power to handle more complex edits with professional-grade effects. Through consistent practice, I’ve developed a keen eye for timing, pacing, and visual flow, and I look forward to exploring more advanced techniques as I grow in this field.</p>
                    <p class="text-gray-400 text-sm font-semibold">My favorite creators I follow are:</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm mt-2">
                        <li>Peter McKinnon</li>
                        <li>Daniel Schiffer</li>
                        <li>Sejal Kumar</li>
                        <li>Kyler Holland</li>
                    </ul>
                </div>

                <div class="interest-card p-6">
                    <div class="text-center">
                        <i class="fas fa-plane icon"></i>
                        <h3 class="text-2xl font-semibold text-white mb-2">Travelling</h3>
                    </div>
                    <p class="text-gray-300 mb-4 text-sm">Travelling is one of my greatest passions. I love exploring new places, experiencing different cultures, and meeting people from diverse backgrounds. Whether it's a calm getaway into nature, a bustling city adventure, or discovering hidden gems in my own country, every trip offers a new perspective and valuable memories. Travelling helps me step out of my comfort zone, embrace spontaneity, and gain a deeper understanding of the world around me. It also fuels my creativity and sharpens my adaptability—qualities that reflect in both my personal and professional life. I believe every journey, no matter how big or small, has something meaningful to teach.</p>
                    <p class="text-gray-400 text-sm font-semibold">My favorite creators I follow are:</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm mt-2">
                        <li>Mumbiker Nikhil</li>
                        <li>Nomadic Indian</li>
                        <li>Jatt Prabjhot</li>
                        <li>Saying No For a Beer</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="bg-transparent p-8 rounded-xl shadow-lg mb-8">
            <h2 class="section-heading">Get In Touch</h2>
            <div class="text-center text-lg text-gray-300">
                <p class="mb-4">I'm always open to new opportunities. Feel free to reach out!</p>
                <p class="mb-2">Email: <a href="mailto:mushtaqahmedj19@gmail.com" class="text-blue-400 hover:underline">mushtaqahmedj19@gmail.com</a></p>
                <p class="mb-2">LinkedIn: <a href="https://www.linkedin.com/in/mushtaq-ahmed-20a2bb239" target="_blank"  class="text-blue-400 hover:underline">https://www.linkedin.com/in/mushtaq-ahmed-20a2bb239</a></p>
                <p>GitHub: <a href="https://github.com/Mushtaq21" target="_blank" class="text-blue-400 hover:underline">https://github.com/Mushtaq21</a></p>
            </div>
        </section>

        <footer class="text-center py-6 text-gray-500 text-sm">
            &copy; 2025 Mushtaq Ahmed Jamali. All rights reserved.
        </footer>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mushtaq Ahmed - Resume</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a1a2e; /* Dark background color */
            color: #e0e0e0; /* Light text color */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .resume-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #2a2a4a; /* Darker background for resume content */
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Allows container to grow and push footer down */
        }
        .resume-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .resume-section-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #6a89cc; /* A subtle blue for section titles */
            margin-top: 2rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #333;
            padding-bottom: 0.5rem;
        }
        .resume-item-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #ffffff;
        }
        .resume-item-subtitle {
            font-size: 1rem;
            font-weight: 400;
            color: #b0b0b0;
            margin-bottom: 0.5rem;
        }
        .resume-list-item {
            margin-bottom: 0.5rem;
        }
        .footer {
            text-align: center;
            padding: 1.5rem;
            color: #6b7280;
            font-size: 0.875rem;
            margin-top: auto; /* Pushes footer to the bottom */
        }
    </style>
</head>
<body class="antialiased">
    <div class="resume-container">
        <h1 class="resume-heading">Mushtaq Ahmed Jamali</h1>
        <p class="text-center text-gray-400 mb-6">Email: mushtaqahmedj19@gmail.com | Phone: +91 9738558657 | LinkedIn: https://www.linkedin.com/in/mushtaq-ahmed-20a2bb239 | GitHub: https://github.com/Mushtaq21</p>
        <hr/>
        <br/>
        <div class="text-center mb-8">
            <!-- Replace 'path/to/your/resume.pdf' with the actual URL or relative path to your resume PDF -->
            <a href="Mushtaq Ahmed.pdf" download class="bg-blue-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-md">
                Download Resume (PDF)
            </a>
        </div>

        <section>
            <h2 class="resume-section-title">Summary</h2>
            <p class="text-gray-300">Aspiring Computer Science Engineer seeking a challenging role to apply my knowledge of Python, SQL, and cloud technologies to contribute to impactful software solutions. Eager to collaborate with a dynamic team and grow in a technology-driven environment.</p>
        </section>

        <section>
            <h2 class="resume-section-title">Education</h2>
            <div class="mb-4">
                <h3 class="resume-item-title">Bachelor of Engineering in Computer Science </h3>
                <p class="resume-item-subtitle">KLS Vishwanathrao Deshpande Institute of Technology, Haliyal, Karnataka</p>
                <p class="text-gray-300">Graduation: June 2025 | CGPA: 8.0/10.0</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                    <li class="resume-list-item">Relevant Coursework: Data Structures & Algorithms, Object-Oriented Programming, Database Management, Web Development, Operating Systems.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h3 class="resume-item-title">12th</h3>
                <p class="resume-item-subtitle">Bangur Nagar Pre-University Composite Junior College, Dandeli, Karnataka</p>
                <p class="text-gray-300">July 2021 | Percentage : 74.8%</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                    <li class="resume-list-item">Relevant Subjects: Physics, Chemistry, Mathematics, Biology.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h3 class="resume-item-title">SSLC</h3>
                <p class="resume-item-subtitle">Janata Vidyalaya, Dandeli, Karnataka</p>
                <p class="text-gray-300">April 2019 | Percentage : 76%</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                </ul>
            </div>

        </section>

        

        <section>
            <h2 class="resume-section-title">Technical Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-gray-300">
                <div>
                    <h4 class="font-semibold text-white">Programming Languages:</h4>
                    <p>Python, JavaScript, SQL, PHP</p>
                </div>
                <div>
                    <h4 class="font-semibold text-white">Web Technologies:</h4>
                    <p>HTML, CSS, jQuery, Laravel,</p>
                </div>
                <div>
                    <h4 class="font-semibold text-white">Tools & Platforms:</h4>
                    <p>Git, GitHub, Linux, Cloud (basics)</p>
                </div>
                <div>
                    <h4 class="font-semibold text-white">Databases:</h4>
                    <p>MySQL</p>
                </div>
            </div>
        </section>

        <section>
            <h2 class="resume-section-title">Projects</h2>
            <div class="mb-4">
                <h3 class="resume-item-title">Grocery Management System</h3>
                <p class="resume-item-subtitle">Technologies: HTML, CSS, JavaScript, PHP, SQL</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                    <li class="resume-list-item">The Grocery Management System simplifies inventory control and sales tracking through an intuitive interface. It allows users to add, update, and remove items with ease, while also managing customer orders efficiently. The system automates key operations, enhancing accuracy and improving overall store efficiency..</li>
                </ul>
            </div>
            <br/>
            <div class="mb-4">
                <h3 class="resume-item-title">Personal Portfolio</h3>
                <p class="resume-item-subtitle">Technologies: HTML, CSS, JavaScript</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                    <li class="resume-list-item">This personal portfolio website, a core project demonstrating my capabilities as a Computer Science Engineering student, is expertly crafted with HTML for robust structure and Tailwind CSS for a modern, responsive design. Its PHP backend powers interactive features like a direct contact form, a feedback collection system for continuous improvement, and a secure admin panel, allowing me to efficiently manage content and user interactions.</li>
                </ul>
                
        </section>

        <section>
            <h2 class="resume-section-title">Experience</h2>
            <div class="mb-4">
                <h3 class="resume-item-title">Data Science Intern</h3>
                <p class="resume-item-subtitle">Nullclass EdTech Limited (Remote) | Feb 2025 – March 2025</p>
                <ul class="list-disc list-inside text-gray-300 mt-2">
                    <li class="resume-list-item">During my internship at Nullclass, I was responsible for developing AI-powered chatbot systems across three major areas: article generation, medical Q&A, and multilingual communication. I started by evaluating three different open-source large language models (LLMs) for the Article Generator Chatbot, comparing their performance in terms of output quality and efficiency. For the Medical Q&A Chatbot, I utilized the MedQuAD dataset to build a retrieval-based system capable of answering medical queries. I integrated basic entity recognition to detect symptoms, diseases, and treatments and developed a user-friendly interface using Streamlit. In the Multilingual Chatbot Extension task, I implemented automatic language detection, supported multiple languages, and ensured culturally appropriate and accurate responses by enhancing the model’s NLP capabilities.</li>
                    <li class="resume-list-item">Throughout the internship, I focused on building reliable and high-performing systems. I successfully achieved over 70% accuracy in chatbot response evaluation using precision, recall, and confusion matrix metrics. The multilingual chatbot supported three or more languages, making the tool more inclusive and accessible. I also improved chatbot response speed and relevance by selecting and fine-tuning the best-performing LLMs. Additionally, I maintained a clean project structure by organizing the work into three distinct, modular folders, making the codebase easier to maintain and scale.</li>
                    <li class="resume-list-item">To accomplish these tasks, I used a range of modern tools and technologies. The entire backend logic was built using Python, with FastAPI used for API development and Streamlit for building the web-based UI. I leveraged Hugging Face Transformers and spaCy for natural language processing, particularly in multilingual and medical contexts. The MedQuAD dataset was used for training and testing the Q&A model. For code versioning and collaboration, I worked with Git and GitHub, while development and testing were done using VS Code and Jupyter Notebook. Evaluation of model performance was done using standard metrics such as the confusion matrix, precision, and recall.</li>
                </ul>
            </div>
        </section>
         <section>
            <h2 class="resume-section-title">Certifications</h2>
            <p class="text-gray-300"> • IBM Cloud Essential V3</p>
        </section>

    <footer class="footer">
        &copy; 2025 Mushtaq Ahmed. All rights reserved.
    </footer>
</body>
</html>

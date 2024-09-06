<?php include 'header.php'; ?>
<style>
    /* Home Section */
    #home {
        position: relative;
        background-image: url('./images/services-bg-color.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
        /* Ensure text color contrasts with background */
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 5px solid #cf1767;
        /* Keeps the border */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 0 20px 5px rgba(207, 23, 103, 0.7);
        /* Adds glow */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Smooth transition */
    }

    .profile-image:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3), 0 0 25px 10px rgba(207, 23, 103, 1);
        /* Enhance glow on hover */
    }

    .text-content {
        text-align: left;
        position: relative;
    }

    .text-content h2 {
        color: white;
    }

    /* Add this to your existing CSS */
    .typing-container {
        font-size: 4.0rem;
        font-weight: 500;
        white-space: nowrap;
        overflow: hidden;
        color: #cf1767;
        height: 6.5rem;
        /* Set a fixed height based on the largest text */
        display: inline-block;
    }
</style>

<!-- Home Section -->
<section id="home" class="d-flex align-items-center vh-100">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-md-7 d-flex flex-column justify-content-left align-items-left align-self-center text-content">
                <h1>Hello, I am </h1>
                <div id="typing-container" class="typing-container"></div>
                <p>
                    I am a highly skilled Software Developer, with knowledge of various tools and languages and eager to learn new skills, which I can utilize for the wellbeing of the company.
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 d-flex justify-content-center align-items-center image-column">
                <img src="./images/my_profile.png" alt="Your Image" class="img-fluid rounded-circle profile-image">
            </div>
        </div>
    </div>
</section>
<script>
    const texts = [
        "Naveed Malik",
        "Web Developer",
        "Mobile App Developer",
        "React Js Developer",
        "PHP Developer",
        "Full Stack Developer"
    ];

    const typingSpeed = 100; // milliseconds per character
    const deletingSpeed = 50; // milliseconds per character
    const pauseBetweenTexts = 1500; // milliseconds between texts

    function typeText(element, text, callback) {
        let index = 0;

        function type() {
            if (index < text.length) {
                element.textContent += text[index++];
                setTimeout(type, typingSpeed);
            } else {
                setTimeout(callback, pauseBetweenTexts);
            }
        }
        type();
    }

    function deleteText(element, callback) {
        let text = element.textContent;
        let index = text.length;

        function deleteChar() {
            if (index > 0) {
                element.textContent = text.substring(0, index--);
                setTimeout(deleteChar, deletingSpeed);
            } else {
                element.textContent = ''; // Ensure text is fully cleared
                setTimeout(callback, pauseBetweenTexts);
            }
        }
        deleteChar();
    }

    function cycleTexts() {
        const container = document.getElementById('typing-container');
        let i = 0;

        function next() {
            typeText(container, texts[i], () => {
                deleteText(container, () => {
                    i = (i + 1) % texts.length; // Move to next text
                    next(); // Continue animation
                });
            });
        }
        next();
    }

    cycleTexts();
</script>


<!-- Home Section -->
<!-- <section id="home" class="d-flex align-items-center vh-100" style="background-image: url('./images/services-bg-color.jpg'); background-size: cover;">
    <div class="container text-center text-md-start">
        <div class="row">
            <div class="col-md-8 d-flex flex-column justify-content-left align-items-left align-self-center">
                <h5 style="color:#cf1767">Hello, I'm Naveed Malik</h5>
                <h1 style="font-size:4.8rem;font-weight:500;">
                    Web Developer <br />
                    and Mobile App Developer <br />
                    Based In<br />
                    Islamabad.
                </h1>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center image-column">
                <img src="./images/my_profile.png" alt="Your Image" class="img-fluid rounded-circle profile-image">
            </div>
        </div>
    </div>
</section> -->

<!-- About Section -->
<section id="about" class="s-about py-5">
    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">About Me</h2>
            </div>
        </div>
        <div class="row about-me__content" data-aos="fade-up">
            <div class="col-lg-12 about-me__text">
                <div class="row">
                    <div class="col-lg-5">
                        <p class="lead">
                            I have a great passion for development and mainly regarding web
                            and app development. There are many things that make me passionate
                            about web development.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <p>
                            The pace at which the changes are happening, needs continuous
                            learning, competitiveness among frameworks which is healthy and
                            brings the best out of them.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <p>
                            The major thing that dragged me into web development is to look at
                            my code changes in an instance and deciding or improving my code.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <p>
                            It's highly practical looking at the immediate changes that happen
                            on your webpage and fix them accordingly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about-me__buttons">
            <div class="col-lg-5 tab-full" data-aos="fade-up">
                <a href="#contact" class="btn btn--stroke w-100">Hire Me</a>
            </div>
            <div class="col-lg-2 tab-full" data-aos="fade-up">
            </div>
            <div class="col-lg-5 tab-full" data-aos="fade-up">
                <a href="Naveed_Malik_NUST.pdf" class="message_me btn-custom">Download CV</a>
            </div>
        </div>
    </div>
</section>
<!-- Work Experience Section -->
<section id="work-experience" class="py-5">
    <div class="container">
        <h2 class="section-heading text-center">Work Experience & Education</h2>
        <div class="row" style="margin-left: -4%;">
            <div class="col-md-6 work-item" data-aos="fade-up">
                <div class="work-item-content">
                    <div class="work-item-icon-top">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <!-- <div class="work-item-icon-right">
                        <i class="fas fa-graduation-cap"></i>
                    </div> -->
                    <div class="text-center">
                        <a href="https://mcpinsight.com/" target="_blank"> <img src="./images/mcpinsight-bg-login.png" style="width:200px;height:200px" alt="Company Logo" class="company-logo image-transition"></a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">March 2022 - Present</p>
                            <h5>MCP INSIGHT</h5>
                            <p class="lead">Full Stack Developer</p>
                        </div>
                        <p class="work-description">
                            • Responsible for maintaining, expanding and scaling the
                            dashboard of MCP Shield, one of product of the company.<br />
                            • Adding new features to the MCP Shield product, build on
                            CodeIgniter framework.<br />
                            • Write well designed, testable, efficient code by using
                            best software development practices.<br />
                            • Optimize the scraping capability to ensure the data is
                            scrapped efficiently with the minimum usage of server
                            bandwidth.<br />
                            • Develop highly reliable web crawlers and parsers across
                            various websites.<br />
                            • Extract structured/unstructured data and store them into
                            Json Format in elastic search.<br />
                            • Develop frameworks for automating and maintaining a
                            constant flow of data from multiple sources.<br />
                            • Develop a deep understanding of the data sources on the
                            web and know exactly how, when, and which data to scrape,
                            parse and store this data.<br />
                            • Active participation in troubleshooting and debugging.<br />
                            • Creating efficient web crawlers. Create more/better ways
                            to crawl relevant information.<br />
                            • Familiarity with best practices and design patterns of
                            programming languages.<br /> </p>
                    </div>
                    <div class="text-center">
                        <a href="https://epi.gov.pk/emergency-operations-center/" target="_blank"> <img src="https://www.eoc.gov.pk/assets/images/eoc-logo_old.png" style="width:200px;height:200px" alt="Company Logo" class="company-logo image-transition"></a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">March 2022 - Present</p>
                            <h5>NEOC</h5>
                            <p class="lead">Frontend Developer</p>
                        </div>
                        <p class="work-description">
                            • Leverage the inbuilt React toolkit for creating frontend
                            features.<br />
                            • Create data visualization tools, libraries, and reusable
                            code for prospects.<br />
                            • Integrate designs and wireframes within the application
                            code.<br />
                            • Monitor interaction of users and convert them into
                            insightful information.<br />
                            • Write application interface code with JavaScript.<br />
                            • Enhance application performance with constant
                            monitoring.<br />
                            • Translate wireframes and designs into good quality
                            code.<br />
                            • Optimize components to work seamlessly across different
                            browsers and devices.<br />
                            • Good understanding of CSS libraries, GIT, Sigma, Adobe XD
                            etc.<br />
                            • Proper user information authentication.<br />
                            • Develop responsive web-based UI.<br /> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 work-item" data-aos="fade-up">
                <div class="work-item-content">
                    <!-- <div class="work-item-icon-top">
                        <i class="fas fa-briefcase"></i>
                    </div> -->
                    <div class="work-item-icon-top">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="text-center">
                        <a href="https://nust.edu.pk/" target="_blank"> <img src="./images/profile/NUST-Signature-01.png" style="width:200px;height:200px" alt="Company Logo" class="image-transition company-logo"></a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">September 2015 - July 2019</p>
                            <h5>NUST</h5>
                            <p class="lead">BS COMPUTER ENGINEERING</p>
                        </div>
                        <p class="work-description">
                            I was the average student in my University but was involved
                            with different technical competition like COMPAC(One of
                            biggest in our college)<br />
                            I had done different type of projects in my university and
                            few of them i have displayed in my portfolio
                    </div>
                    <div class="text-center">
                        <a href="https://cch.edu.pk/" target="_blank"> <img src="./images/profile/cch.png" style="width:200px;height:200px" alt="Company Logo" class="company-logo image-transition"></a>
                    </div>
                    <div class="work-content">
                        <div class="work-header">
                            <p class="timeline__timeframe">September 2010 - July 2015</p>
                            <h5>CADET COLLEGE HASANABDAL</h5>
                            <p class="lead">FSC & Matriculation</p>
                        </div>
                        <p class="work-description">
                            I was Vice President of College Computer, was involved in
                            other sports, Vice Captain Wing Football team, Vice Caption
                            College Gymnastics team
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more work items as needed, following the same structure -->
    </div>
</section>

<!-- Technical Proficiency Section -->
<section id="technical-proficiency" class="t-proficiency ss-dark">
    <div class="shadow-overlay"></div> <!-- Add this line -->

    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">Technical Proficiency</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="btn-group-vertical w-100 row">
                    <div class="col-md-7 mb-3">
                        <button class="btn btn-primary w-100 btn-lg" data-tab="frontend">Frontend Skills</button>
                        <button class="btn btn-primary w-100 btn-lg" data-tab="backend">Backend Skills</button>
                    </div>
                    <div class="col-md-7 mb-3">
                        <button class="btn btn-primary w-100 btn-lg" data-tab="tools">Tools Used</button>
                        <button class="btn btn-primary w-100 btn-lg" data-tab="soft-skills">Soft Skills</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <!-- Frontend Skills -->
                    <div class="tab-pane" id="frontend">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">React Js</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">React Native</h5>
                            <span class="ms-auto">75%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">HTML5</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">CSS3</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Bootstrap</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Javascript</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Jquery</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <!-- Add more frontend skills as needed -->
                    </div>

                    <!-- Backend Skills -->
                    <div class="tab-pane" id="backend">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Node.js</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Python</h5>
                            <span class="ms-auto">60%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Php</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Elasticsearch</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Mysql</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <!-- Add more backend skills as needed -->
                    </div>

                    <!-- Tools Used -->
                    <div class="tab-pane" id="tools">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Git</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Docker</h5>
                            <span class="ms-auto">60%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="60"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Linux</h5>
                            <span class="ms-auto">70%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="70"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Visual Studio Code</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <!-- Add more tools as needed -->
                    </div>

                    <!-- Soft Skills -->
                    <div class="tab-pane" id="soft-skills">
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Communication</h5>
                            <span class="ms-auto">90%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="90"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Teamwork</h5>
                            <span class="ms-auto">85%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="85"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Problem Solving</h5>
                            <span class="ms-auto">80%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="80"></div>
                        </div>
                        <div class="skill-item d-flex justify-content-between align-items-center">
                            <h5 class="me-auto">Collaboration</h5>
                            <span class="ms-auto">75%</span>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" data-percentage="75"></div>
                        </div>
                        <!-- Add more soft skills as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="capabilities" class="py-5">
    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12" style="text-align: center;">
                <h2 class="section-heading">Capabilities</h2>
            </div>
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center align-self-center">
            <div class="col-md-1"></div>
            <div class="col-md-10 ">
                <p class="text-justify" style='font-family: "Frank Ruhl Libre", serif; font-size: 4.4rem; font-weight: 300; line-height: 1.159; letter-spacing: -0.05rem; color: #000000;'>
                    My passion and goal is to help you make your business standout.
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

<section id="services" class="s-services ss-dark ">
    <div class="shadow-overlay"></div>

    <div class="container">
        <div class="row heading-block" data-aos="fade-up">
            <div class="col-lg-12">
                <h2 class="section-heading">Services</h2>
            </div>
        </div>
        <div
            class="row services-list block-large-1-3 block-medium-1-2 block-tab-full">
            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Web Design</h4>
                    <p>
                        I have a good expeience in web development with vast technologies.
                        My best technstack is React with Node js. Also work with Wordpress
                        as a freelancer, including HTML, CSS, BootStrap, PHP and many
                        others I take a proactive approach to web development and
                        elaborate on ways to uncover less obvious business requirements,
                        save costs and envisage risks for your website and make the
                        project up-to the clients requirement.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Mobile Design</h4>
                    <p>
                        I have good experience with React Native techstack, also work with
                        Java & XML for native mobile apps. I offer a full cycle of
                        application design, integration and management services. Whether
                        it is a consumer oriented app or a transformative enterprise-class
                        solution, the company leads the entire mobile app development
                        process from ideation and concept to delivery, and to ongoing
                        ongoing support.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Brand Identity</h4>
                    <p>
                        I have been doing freelancing for many clients in my own country
                        for their brand identity, like logo design, business card,
                        invitation cards, packaging designs and many other stuffs.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">UI/UX Design</h4>
                    <p>
                        I am pretty good in graphics content of mobile app using adobe XD
                        and illustrator, i have good eye for creativity and a great
                        artist.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Illustration</h4>
                    <p>
                        I have a keen eye for creativity and pretty good with illustrating
                        and designsing a character with its unique concept.
                    </p>
                </div>
            </div>

            <div class="column item-service" data-aos="fade-up">
                <div class="item-service__content">
                    <h4 class="item-title">Wordpress Design</h4>
                    <p>
                        I am pretty confident on my wordpress skills, i can create a fully
                        developed website for the clients depending upon the needs of
                        clients. I can create a custom theme or install plugins for
                        specific features or remove the bugs in the code.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<!-- <section id="projects" class="py-5">
    <div class="container">
        <h2 class="text-center">Projects</h2>
        <p class="text-center">Brief description of projects.</p>
    </div>
</section> -->
<?php include 'portfolio_home.php'; ?>

<?php include 'testimonials.php'; ?>

<?php include 'footer.php'; ?>
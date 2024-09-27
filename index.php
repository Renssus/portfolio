<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="files/css/style.css">
    <title>Portfolio Website</title>
</head>
<body>
    <header id="navbar">
        <nav class="nav-menu">
            <a href="#home">Home</a>
            <a href="#over-mij">Over Mij</a>
            <a href="#programmeer-talen">Programmeer talen</a>
            <a href="#my-projects">Projecten</a>
            <a href="#contact">Contacteer</a>
        </nav>
    </header>
    <section id="Home">
    <h1>Rens Winckens</h1>
    <div class="typing-animation" style="display: flex; justify-content: center; align-items: center; width: 100%; position: relative;">
    <h2 id="typing-text" style="position: absolute; left: 50%; transform: translateX(-50%); white-space: nowrap;"> </h2>
    <h2 style="margin-left: auto;">ㅤ</h2>
    </section>
</div>

    <section id="over-mij">
        <h2>Over mij</h2>
        <p>Hallo! Ik ben Rens Winckens.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus facere laudantium libero. Quas quae, repellendus nostrum illum non corporis suscipit esse, ullam labore pariatur temporibus rerum culpa reiciendis id adipisci.</p>
    </section>

    <section id="programmeer-talen">
        <h2>Programmeer Talen</h2>
        <p>Deze programmeertalen heb ik geleerd op mijn opleiding van <a href="https://www.curio.nl/mbo/techniek-en-technologie/softwaredeveloper/software-developer" target="_blank" style="text-decoration: underline; color: white">Curio Software developer</a></p>        <div class="skills-container">
            <div class="skills-section">
                <h2>Front End Talen</h2>
                <ul>
                    <li><a href="https://www.w3.org/html/" target="_blank"><img src="files/images/html.png" alt="HTML image"> HTML</a></li>
                    <li><a href="https://www.w3.org/Style/CSS/Overview.en.html" target="_blank"><img src="files/images/css.png" alt="CSS"> CSS</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/dotnet/csharp/" target="_blank"><img src="files/images/csharp.png" alt="c# image"> C#</a></li>
                    <li><a href="https://www.python.org/" target="_blank"><img src="files/images/python.png" alt="Python"> Python</a></li>
                    <li><a href="https://www.javascript.com/" target="_blank"><img src="files/images/JavaScript.png" alt="JavaScript"> JavaScript</a></li>
                </ul>
            </div>
            <div class="skills-section">
                <h2>Back End Talen</h2>
                <ul>
                    <li><a href="https://www.php.net/" target="_blank"><img src="files/images/php.png" alt="PHP"> PHP</a></li>
                    <li><a href="https://www.python.org/" target="_blank"><img src="files/images/python.png" alt="Python"> Python</a></li>
                    <li><a href="https://www.mysql.com/" target="_blank"><img src="files/images/mysql.png" alt="MySQL"> MySQL</a></li>
                </ul>
            </div>
            <div class="skills-section">
                <h2>Andere kennis van</h2>
                <ul>
                    <li><a href="https://visualstudio.microsoft.com/" target="_blank"><img src="files/images/csharp.png" alt="Visual Studio">Visual Studio</a></li>
                    <li><a href="https://github.com/" target="_blank"><img src="files/images/github.png" alt="Github Logo">Github/Gitkraken</a></li>
                    <li><a href="https://www.figma.com/" target="_blank"><img src="files/images/figma.png" alt="Figma logo">Figma</a></li>
                    <li><a href="https://git-scm.com/" target="_blank"><img src="files/images/git.png" alt="Git logo">Git</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="my-projects">
    <h2>My Projects</h2>
    <div class="project-grid">
        <div class="project-card">
            <h2>Portfolio Website</h2>
            <div class="tags">
                <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                    <span style="font-size: inherit; display: flex; align-items: center;">
                        <img src="files/images/world.png" alt="web development" style="width: 20px; height: 20px; margin-right: 5px;"> Web development
                    </span>
                    <span style="font-size: inherit; display: flex; align-items: center;">
                        &#60;/&#62; frontend
                    </span>
                </div>
            </div>
            <div class="description">
                <p>Dit is de website waar je momemteel naar kijkt! Dit is gewoon een portfolio website over mij, wie ik ben, met mijn socials en wat ik kan!</p>
            </div>
            <a class="button" href="https://github.com/Renssus/portfoliowebsite" target="_blank">View on GitHub</a>
            <p><strong>Built with:</strong></p>
            <div class="built-with">
                <img src="files/images/html.png" alt="HTML"><p>HTML</p>
                <img src="files/images/css.png" alt="CSS"><p>CSS</p>
                <img src="files/images/javascript.png" alt="JavaScript"><p>JavaScript</p>
            </div>
        </div>
        <div class="project-card">
            <h2>Task List</h2>
        
            <div class="tags">
                <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <span style="font-size: inherit; display: flex; align-items: center;">
                        <img src="files/images/world.png" alt="web development" style="width: 20px; height: 20px; margin-right: 5px;"> Web development
                    </span>
                    <span style="font-size: inherit; display: flex; align-items: center;">
                        &#60;/&#62; frontend
                    </span>
                </div>
            </div>
            <div class="description">
                <p>The description of your project goes here. Include an overview of what your project is about and its main features...</p>
            </div>
            <a class="button" href="https://github.com/Renssus/TaskList" target="_blank">View on GitHub</a>
            <p><strong>Built with:</strong></p>
            <div class="built-with">
                <img src="files/images/html.png" alt="HTML"><p>HTML</p>
                <img src="files/images/css.png" alt="CSS"><p>CSS</p>
            </div>
        </div>
                <!-- test -->
        <div class="project-card">
            <h2>Curio Website</h2>
        
            <div class="tags">
                <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <span style="font-size: inherit; display: flex; align-items: center;">
                        <img src="files/images/world.png" alt="web development" style="width: 20px; height: 20px; margin-right: 5px;"> Web development
                    </span>
                </div>
            </div>
            <div class="description">
                <p>The description of your project goes here. Include an overview of what your project is about and its main features...</p>
            </div>
            <a class="button" href="https://github.com/Renssus/CurioWebsite" target="_blank">View on GitHub</a>
            <p><strong>Built with:</strong></p>
            <div class="built-with">
                <img src="files/images/html.png" alt="HTML"><p>HTML</p>
                <img src="files/images/css.png" alt="CSS"><p>CSS</p>
            </div>
        </div>
        <!-- test -->
        <div class="project-card">
            <h2>Task List</h2>
        
            <div class="tags">
                <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <span style="font-size: inherit; display: flex; align-items: center;">
                        <img src="files/images/world.png" alt="web development" style="width: 20px; height: 20px; margin-right: 5px;"> Web development
                    </span>
                    <span style="font-size: inherit; display: flex; align-items: center;">
                        &#60;/&#62; frontend
                    </span>
                </div>
            </div>
            <div class="description">
                <p>The description of your project goes here. Include an overview of what your project is about and its main features...</p>
            </div>
            <a class="button" href="https://github.com/Renssus/TaskList" target="_blank">View on GitHub</a>
            <p><strong>Built with:</strong></p>
            <div class="built-with">
                <img src="files/images/html.png" alt="HTML"><p>HTML</p>
                <img src="files/images/css.png" alt="CSS"><p>CSS</p>
                <img src="files/images/php.png" alt="PHP"><p>PHP</p>
            </div>
        </div>
    </div>
</section>
    <section id="contact">
        <h2>Contacteer me</h2>
        <div class="contactsection">
            <div class="contact-item">
                <a href="https://github.com/Renssus" target="_blank">
                    <img src="files/images/githubwhite.png" alt="GitHub">
                    <span>Github: Renssus</span>
                </a>
            </div>
            <div class="contact-item">
                <a href="mailto:renswinckens@gmail.com">
                    <img src="files/images/mail.png" alt="Mail">
                    <span>Email: renswinckens@gmail.com</span>
                </a>
            </div>
            <div class="contact-item">
                <a href="https://discordapp.com/users/723568555362091158" target="_blank">
                    <img src="files/images/discord.png" alt="Discord">
                    <span>Discord: Renssus</span>
                </a>
            </div>
            <div class="contact-item">
                <a href="https://www.linkedin.com/in/rens-winckens-9aaa19297/" target="_blank">
                    <img src="files/images/linkedin.png" alt="Linkedin">
                    <span>Linkedin: Rens Winckens</span>
                </a>
            </div>
        </div>
    </section>
</body>
<footer>
    <?php
    require_once 'frontend/footer.php';
    ?>
</footer>
</html>

<script>
        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top = '-60px'; // Adjust this value based on your navbar height
            } else {
                navbar.style.top = '0';
            }
            lastScrollTop = scrollTop;
        });



        const textElement = document.getElementById('typing-text');
    textElement.innerHTML = "";
    const textToType = "Software Developer";
    let index = 0;
    let isAdding = true;

    function typeText() {
        if (isAdding) {
            if (index < textToType.length) {
                textElement.innerHTML += textToType.charAt(index);
                index++;
                setTimeout(typeText, 150); // Typing speed
            } else {
                isAdding = false;
                setTimeout(typeText, 2000); // Pause before deleting
            }
        } else {
            if (index > 0) {
                textElement.innerHTML = textToType.substring(0, index - 1);
                index--;
                setTimeout(typeText, 100); // Deleting speed
            } else {
                isAdding = true;
                setTimeout(typeText, 50); // Pause before typing again
            }
        }
    }

    typeText();
    </script>
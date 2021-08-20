<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Samuel Portfolio website</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">SAMUEL</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Samuel</span><br> Developer</h1>

                    <a href="#contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/saminwankwo" target="_blank" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://twitter.com/saminwankwo" target="_blank" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://github.com/saminwankwo" target="_blank" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfil.jpg" alt="Nwankwo Samuel picture">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.png" alt=""> 
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I am Samuel Nwankwo</h2>
                        <p class="about__text">I'm a Full Stack Software Developer specialised in frontend and backend development of complex scalable web and mobile applications.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    
                        <div class="skills__data">
                            <h4 class="skills__subtitle">Website development</h4>
                            <div>
                                Web application development
                            </div>
                        </div>

                        <div class="skills__data">
                            <h4 class="skills__subtitle"> Mobile Application Development</h4>
                            
                            <i class='skills__icon bx bxl-facebook' ></i><i class='skills__icon bx bxl-facebook' ></i>
                             <div>

                                Native Android Application development with Java
                             </div>
                            </div>
                        </div>
                   
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
<?php
      
      if(isset($_SESSION['error'])){
        echo "
          <div class='alert alert-danger alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-warning'></i> Error!</h4>
            ".$_SESSION['error']."
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-check'></i> Success!</h4>
            ".$_SESSION['success']."
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
?>
                <div class="contact__container bd-grid">
                    <form action="send.php?return=<?php echo basename(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" class="contact__form">
                        <input type="text" placeholder="Name" name="name" class="contact__input">
                        <input type="mail" placeholder="Email" name="email" class="contact__input">
                        <textarea name="" id="" cols="0" rows="10" name="cntact" class="contact__input"></textarea>
                        <!-- <input type="checkbox" name="sendme" id=""> Send me a copy -->
                        <input type="button" name="send" value="Send" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__social">
                <a href="https://facebook.com/nwankwo.samuel" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://instagram.com/saminwankwo" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/saminwankwo" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
                <a href="https://github.com/saminwankwo" class="footer__icon"><i class='bx bxl-github' ></i></a>
                <a href="https://www.linkedin.com/in/saminwankwo" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
            </div>
            
            <div class="footer__title">
                <div>
                Built with <i class='bx bxs-heart'></i> by <a href="https://saminwankwo.netlify.app/" target="_blank">Samuel Nwankwo</a> &#169; 2021 copyright all right reserved.  Powered by   <a href="https://zuri.team" target="_blank"> <img style ="display: inline;" src="assets/img/nn.png" alt=""></a>

                </div>
               

            </div>
            
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
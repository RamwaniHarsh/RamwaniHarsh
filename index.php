<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio</title>
    <meta name="description" content="Portfolio Template for Developer" />

    <link rel="stylesheet" href="css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />
<style>
.mailsends{
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold;
  background-color: rgb(245, 58, 58);
  color: white;
  padding: 5px;
  width: 100%;
  border-radius: 7px;
}
.mailsendf{
  font-size: 20px;
  text-align: center;
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: bold;
  background-color: green;
  color: white;
  padding: 5px;
  width: 100%;
  border-radius: 7px;
}
</style>

</head>
<body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img
              src="./assets/png/harsh.png"
              alt="Harsh Ramwani Logo Image"
              class="header__logo-img"
            />
          </div>
          <a href="https://harshramwani.com"><span class="header__logo-sub">Harsh Ramwani</span></a>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="https://harshramwani.com" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="#about" class="header__link">About </a>
            </li>
            <!-- <li class="header__link-wrapper">
              <a href="./index.html#projects" class="header__link">
                Projects
              </a>
            </li> -->
            <li class="header__link-wrapper">
              <a href="#contact" class="header__link"> Contact </a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="./assets/svg/ham-menu.svg"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="./assets/svg/ham-menu-close.svg"
              alt="hamburger menu close"
              class="header__main-ham-menu-close d-none"
            />
          </div>
        </div>
      </div>
      <div class="header__sm-menu">
        <div class="header__sm-menu-content">
          <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
              <a href="https://harshramwani.com"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="#about"> About </a>
            </li>

            <!-- <li class="header__sm-menu-link">
              <a href="./index.html#projects"> Projects </a>
            </li> -->

            <li class="header__sm-menu-link">
              <a href="#contact"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section class="home-hero">
      <div class="home-hero__content">
        <h1 class="heading-primary">Hey, My name is <br> <strong>Harsh Ramwani</strong></h1>
        <div class="home-hero__info">
          <p class="text-primary">
            I am Web Devloper.
          </p>
        </div>
        <div class="home-hero__cta">
          <a href="#about" class="btn btn--bg">About</a>
        </div>
      </div>
      <div class="home-hero__socials">
        <div class="home-hero__social">
          <a href="https://bit.ly/3PyeFkm" class="home-hero__social-icon-link">
            <img
              src="./assets/png/linkedin-ico.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://bit.ly/3hvmCdI" class="home-hero__social-icon-link">
            <img
              src="./assets/png/github-ico.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://bit.ly/3RG2533" class="home-hero__social-icon-link">
            <img
              src="./assets/png/twitter-ico.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://bit.ly/3Ofkxgf" class="home-hero__social-icon-link">
            <img
              src="./assets/png/yt-ico.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a
            href="https://bit.ly/3uTqw3A"
            class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
          >
            <img
              src="./assets/png/insta-ico.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
      </div>
      <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
      </div>
    </section>
    <section id="about" class="about sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">About Me</span>
          <span class="heading-sec__sub">
            I am Backed Developer. I've Achived Diploma in Computer Science.
          </span>
        </h2>
        <div class="about__content">
          <div class="about__content-main">
            <h3 class="about__content-title">Get to know me!</h3>
            <div class="about__content-details">
              <p class="about__content-details-para">
                Hey! It's
                <strong>Harsh Ramwani</strong>
                and I'm a <strong> Backend Web Developer </strong> located in
                Gujarat. I've done
                <strong> remote </strong>
                projects for agencies, consulted for startups, and collaborated
                with talented people to create
                <strong>digital products </strong>
                for both business and consumer use.
              </p>
              <p class="about__content-details-para">
                I'm a bit of a digital product junky. Over the years, I've used
                hundreds of web and mobile apps in different industries and
                verticals. Feel free to
                <strong>contact</strong> me here.
              </p>
            </div>
            <a href="#contact" class="btn btn--med btn--theme dynamicBgClr"
              >Contact</a
            >
          </div>
          <div class="about__content-skills">
            <h3 class="about__content-title">My Skills</h3>
            <div class="skills">
              <div class="skills__skill">HTML</div>
              <div class="skills__skill">CSS</div>
              <div class="skills__skill">JavaScript</div>
              <div class="skills__skill">JAVA</div>
              <div class="skills__skill">Python</div>
              <div class="skills__skill">React</div>
              <!-- <div class="skills__skill">SASS</div> -->
              <div class="skills__skill">GIT</div>
              <!-- <div class="skills__skill">Shopify</div> -->
              <!-- <div class="skills__skill">Wordpress</div> -->
              <!-- <div class="skills__skill">Google ADS</div> -->
              <!-- <div class="skills__skill">Facebook Ads</div> -->
              <div class="skills__skill">Android</div>
              <!-- <div class="skills__skill">IOS</div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contact</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
            If you have any <strong>Query</strong>, Feel Free to contact <strong>ME</strong>.
          </span>
          <?php if(isset($_GET['mailsend']) == "success") { ?>
					  <div class="mailsends">Your Message Send</div>
          <?php }elseif(isset($_GET['mailsend']) == "failed"){ ?>
            <div class="mailsendf">Server Problem</div>
         <?php } ?>

        </h2>
        <div class="contact__form-container">
          <form action="mail.php" method="POST" class="contact__form">
            <div class="contact__form-field">
              <label class="contact__form-label" for="name">Name</label>
              <input required placeholder="Enter Your Name" type="text" class="contact__form-input" name="name" id="name"/>
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input required placeholder="Enter Your Email" type="text" class="contact__form-input" name="email" id="email"/>
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea required cols="30" rows="10" class="contact__form-input" placeholder="Enter Your Message" name="message" id="message"></textarea>
            </div>
            <button type="submit" class="btn btn--theme contact__btn"> Submit </button>
          </form>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">
          <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
              <span>Social</span>
            </h2>
            <div class="main-footer__social-cont">
              <a rel="noreferrer" href="https://bit.ly/3PyeFkm">
                <img
                  class="main-footer__icon"
                  src="./assets/png/linkedin-ico.png"
                  alt="icon"
                />
              </a>
              <a rel="noreferrer" href="https://bit.ly/3hvmCd">
                <img
                  class="main-footer__icon"
                  src="./assets/png/github-ico.png"
                  alt="icon"
                />
              </a>
              <a rel="noreferrer" href="https://bit.ly/3RG2533">
                <img
                  class="main-footer__icon"
                  src="./assets/png/twitter-ico.png"
                  alt="icon"
                />
              </a>
              <a rel="noreferrer" href="https://bit.ly/3Ofkxgf">
                <img
                  class="main-footer__icon"
                  src="./assets/png/yt-ico.png"
                  alt="icon"
                />
              </a>
              <a rel="noreferrer" href="https://bit.ly/3uTqw3A">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="./assets/png/insta-ico.png"
                  alt="icon"
                />
              </a>
            </div>
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Harsh Ramwani</h4>
            <p class="main-footer__short-desc">
              Thanks For Visiting my Website
            </p>
          </div>
        </div>

        <div class="main-footer__lower">
          &copy; Copyright 2022. Made by
          <a rel="noreferrer" href="https://harshramwani.com">Harsh Ramwani</a>
        </div>
      </div>
    </footer>

    <script src="./index.js"></script>
  </body>
  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyChxvIUUgvYhJS0oDtpTP_RlGs6a2F7LdE",
      authDomain: "harsh-ramwani.firebaseapp.com",
      projectId: "harsh-ramwani",
      storageBucket: "harsh-ramwani.appspot.com",
      messagingSenderId: "81862095146",
      appId: "1:81862095146:web:561ff1c579cc9ca54dae53",
      measurementId: "G-FQWF33M34T"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>
</html>

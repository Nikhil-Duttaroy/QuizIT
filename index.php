
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QuizIT</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
  </head>
  <body>
  <?php include 'nav.php' ?>
    <section class="one">
      <div
        class="mainContainer parallax"
        style="border-bottom: 1px solid var(--secondaryColor)"
      >
      <style>.parallax {
  background-image: url("https://images.unsplash.com/photo-1536613105185-09ea1249a2cb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=765&q=80");  
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}</style>
        <header class="topColumn"></header>
        <div class="leftColumn">
          <img
            src="images\QuizIT Logo.svg"
            alt="Logo"
            width="250px"
            class="logo"
          />
        </div>
        <div class="rightColumn">
          <p class="Content">
            QuizIT is a Web based Application catered mainly towards Information
            Technology students to test their understanding in various concepts
            used in information technology in a level based manner.
          </p>
        </div>
        <div class="bottomColumn">
          <a class="aStarted" href="login.php">Let's Get started</a>
        </div>
      </div>
    </section>
    <section class="two">
      <div class="mainContainer">
        <div class="aboutTitle">
          <h1 style="text-align: center; margin: 15px">About Our Team</h1>
          <p class="abtInfo">
            We are a Team of four Information Technology Students based in
            Mumbai,Maharashtra .With our base of Operations in New Panvel.
          </p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6766755129993!2d73.12624316164559!3d18.989881422140535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1599382514190!5m2!1sen!2sin"
            width="250"
            height="250"
            frameborder="0"
            style="border: 0; margin: 20px auto 20px auto"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
        <div class="aboutPages">
          <div class="holder">
            <h1 class="N bol">Nikhil</h1>
            <h1 class="S bol">Sahil</h1>
            <h1 class="Rk bol">Rohit</h1>
            <h1 class="R bol">Rutuja</h1>
          </div>
          <div class="cardContainer">
            <div class="cards" id="card1">
              <img src="images/nikhil.jpeg" alt="" class="profile" />
              <h2 class="name">Nikhil Duttaroy</h2>
              <div class="social">
                <a href="https://github.com/Nikhil-Duttaroy" target="_blank"
                  ><i class="fab fa-github fa-2x"></i
                ></a>
                <a href="https://www.linkedin.com/in/nikhil-duttaroy/"
                  ><i class="fab fa-linkedin-in fa-2x" target="_blank"></i
                ></a>
              </div>
            </div>
            <div class="cards" id="card2">
              <img src="images/sahil.jpg" alt="" class="profile" />
              <h2 class="name">Sahil Dhuri</h2>
              <div class="social">
                <a href="https://github.com/sahildhuri" target="_blank"
                  ><i class="fab fa-github fa-2x"></i
                ></a>
                <a href="https://www.linkedin.com/in/sahil-dhuri-b15a5a194/" target="_blank"
                  ><i class="fab fa-linkedin-in fa-2x"></i
                ></a>
              </div>
            </div>

            <div class="cards" id="card3">
              <img src="images/rohit.jpg" alt="" class="profile" />
              <h2 class="name">Rohitkumar Sahu</h2>
              <div class="social">
                <a href="https://github.com/Rohit-RGS" target="_blank"
                  ><i class="fab fa-github fa-2x"></i
                ></a>
                <a href="" target="_blank"
                  ><i class="fab fa-linkedin-in fa-2x"></i
                ></a>
              </div>
            </div>

            <div class="cards" id="card4">
              <img src="images/rutuja.jpg" alt="" class="profile" />
              <h2 class="name">Rutuja Jadhav</h2>
              <div class="social">
                <a href="https://github.com/rutuja221100" target="_blank"
                  ><i class="fab fa-github fa-2x"></i
                ></a>
                <a href="" target="_blank"
                  ><i class="fab fa-linkedin-in fa-2x"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="smallAbout">
          <div class="smallCard">
            <h3 class="sname">Nikhil Duttaroy</h3>
            <div>
              <a href="https://github.com/Nikhil-Duttaroy" target="_blank"
                ><i class="fab fa-github fa-2x"></i
              ></a>
              <a href="" target="_blank"
                ><i class="fab fa-linkedin-in fa-2x"></i
              ></a>
            </div>
          </div>
          <div class="smallCard">
            <h3 class="sname">Sahil Dhuri</h3>
            <div>
              <a href=""><i class="fab fa-github fa-2x" target="_blank"></i></a>
              <a href=""
                ><i class="fab fa-linkedin-in fa-2x" target="_blank"></i
              ></a>
            </div>
          </div>
          <div class="smallCard">
            <h3 class="sname">Rohitkumar Sahu</h3>
            <div>
              <a href=""><i class="fab fa-github fa-2x" target="_blank"></i></a>
              <a href=""
                ><i class="fab fa-linkedin-in fa-2x" target="_blank"></i
              ></a>
            </div>
          </div>
          <div class="smallCard">
            <h3 class="sname">Rutuja Jadhav</h3>
            <div>
              <a href=""><i class="fab fa-github fa-2x" target="_blank"></i></a>
              <a href=""
                ><i class="fab fa-linkedin-in fa-2x" target="_blank"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>

    <script src="js/script.js" defer></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    ></script>

    <title>LUCKY EKEZIE</title>

    <script
      src="https://kit.fontawesome.com/add5a071a1.js"
      crossorigin="anonymous"
    ></script>

    <link
      rel="shortcut icon"
      href="images/logo icon 2.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poppins:wght@400;900&family=Roboto&display=swap");

      html {
        scroll-behavior: smooth;
      }

      * {
        margin: 0;
        box-sizing: border-box;
        padding: 0;
      }

      body{
        background-color: #fff;
      }

      body.dark{
        background-color: #171A23;
      }


      /* header tag starts */

      .image {
        margin-top: 20px;
        margin-left: 30px;
        width: 60px;
      }

.logo-dark{
  display: none;
}


     header {
        width: 100%;
        height: 70px;
        position: fixed;
        top: 0;
        background-color: #fff;
      }

      body.dark header{
        background-color:  #171A23;
      }

      header .navicon {
        height: 4px;
        width: 30px;
        border-radius: 5px;
        margin: 5px;
        background-color: black;
      }

      .nav-ul {
        float: right;
        margin-right: 40px;
        margin-top: 20px;
      }

      .nav-li {
        display: inline-block;
        margin-left: 20px;
      }

      .nav-li a {
        text-decoration: none;
        color: #161c2d;
        font-size: 16px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
      }


      body.dark .nav-li a{
        color: #fff;
      }

      body.dark .li3 a {
        color: #fff;
      }

      .li3 a {
        text-decoration: none;
        color: #161c2d;
        font-size: 14px;
        font-family: "Inter", sans-serif;
        letter-spacing: 1.63px;
        font-weight: 900px;
      }

      .li3 {
        display: inline-block;
        width: 40%;
        line-height: 40px;
      }

      .move {
        margin-top: 100px;
        display: none;
      }

      .menu-icon {
        position: absolute;
        top: 50%;
        right: 5%;
        transform: translateY(-50%);
        display: none;
      }

      #menu-btn {
        display: none;
      }

      /* header tag ends */

      /* theme starts */

      /* .dark {
        background-color: black;
        color: white;
      } */


      /* .dark {
       color: white;
       background-color: black;
      } */

      .light {
        background-color: white;
        /* color: black; */
      }

      .theme-mode-panel-open .mode-switcher-panel-wrapper {
        transform: translate(0);
      }

      .mode-switcher-panel-wrapper {
        transition: 0.4s;
      }

      .position-fixed-right {
        position: fixed;
        right: 0;
        top: 72%;
        z-index: 99;
        /* transform: translateX(100%); */
      }

      .mode-switcher-panel .text {
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: -0.09px;
        line-height: 26px;
        padding-bottom: 8px;
        display: inline-flex;
      }

      .mode-switcher-panel {
        text-align: center;
        box-shadow: 0 22px 34px rgb(22, 28, 45 / 18%);
        border: transparent;
        background-color: #168bff;
        max-width: 185px;
        padding-left: 13px;
        padding-right: 13px;
        padding-top: 15px;
        padding-bottom: 15px;
        border-bottom-left-radius: 25px;
        height: 105px;
      }

      .position-relative {
        position: relative !important;
      }

      .mode-switcher-panel .buttons {
        box-shadow: 0 12px 34px rgb(22, 28, 45 / 20%);
        border-radius: 33px;
        background-color: white;
        overflow: hidden;
        display: flex;
        max-width: 153px;
      }

      .mode-switcher-panel .buttons button.active {
        background-color: #ced4e7;
        height: 40px;
      }

      body.dark .mode-switcher-panel .buttons {
        background-color:  #ced4e7;
      }

    body.dark .mode-switcher-panel .buttons button.active {
        background-color: white;
      }
      
      .mode-switcher-panel .buttons button {
        background: transparent;
        border: none;
        width: 50%;
        font-size: 11px;
        font-weight: 700;
        padding-left: 15px;
        padding-right: 15px;
        letter-spacing: 1.38px;
        text-transform: uppercase;
      }

      .switcher-minimize-button {
        width: 30px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0;
        color: #fff;
        background-color: #168bff;
        font-size: 30px;
        position: absolute;
        left: 1px;
        top: 0.1px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        transform: translateX(-100%);
       
      }


      .rotate {
        transform: scaleX(-1);
      }
      .fa-chevron-right {
        color: #fff;
      }

      .right {
        transform: scaleX(-1);
      }

      /* #svvg {
        transform: scaleY(-1);
      } */

      /* .sca-le {
        transform: scaleY(-1);
      } */

      /* .switcher-minimize-button i {
        font-size: inherit;
        pointer-events: none;
        transition: 1s;
      } */

      /* theme ends */

      .sec1 {
        margin-top: 180px;
      }

      /* art1 starts */

      .art1 {
        margin-left: 10rem;
        margin-top: 200px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      body.dark .lead{
        color: #fff;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 70%;
      }

    .passion  p span{
display: inline-block;
display: none;
      }

      .passion  p span.text-in {
display: block;
/* animation: textIn .5s ease-in-out; */
      }

      /* @keyframes textIn{
        0% {
          transform: translateY(100%);
        }

        100% {
          transform: translateY(0%);
        }
      } */

      body.dark .passion{
        color: #fff;
      }

      .blu-btn {
        margin-top: 4rem;
        width: 14rem;
        height: 4rem;
        border-radius: 32px;
        background-color: #168bff;
        border: none;
        color: #fff;
        font-weight: 500;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        letter-spacing: 2px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.1s;
      }

      .blu-btn:hover {
        transform: translate(0, -5px);
      }

      .blu-btn span {
        margin-left: -15px;
        text-decoration: none;
      }

      .art1 i {
        color: #fff;
        margin-left: 13px;
      }

      .art2 img {
        width: 400px;
      }

      .dark-bg{
  display: none;
}

body.dark .image{
  display: none;
}

body.dark .logo-dark{
  display: block;
  width: 60px;
  margin-top: 20px;
        margin-left: 30px;
}

      body.dark  .nav-ul {
        margin-top: -30px;
      }
 
     body.dark .art2 img {
        display: none;
      } 

body.dark .dark-bg{
  display: block;
  width: 400px;
  margin-left: 58rem;
        margin-top: -22rem;
}

      .art2 {
        margin-left: 58rem;
        margin-top: -22rem;
      }

      .art3 {
        margin-top: 90px;
        margin-left: 8rem;
      }

      .art3 li {
        display: inline-block;
        margin-left: 40px;
      }

      .art3 a {
        text-decoration: none;
        letter-spacing: 1.63px;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        color: #6f727b;
        outline: none;
      }

      body.dark .art3 a{
        color: #fff;
      }

      body.dark #branding{
        color: #bdc4da;
      }

      .gry #product{
        color: #bdc4da;
      }

       #product {
        color: #168bff;
      } 

    .bom  #product {
      color: #6f727b; 
    } 
      
  .bom  #branding {
        color: #168bff;
      }  
      /* section3  */
      .bosscab {
        width: 655px;
      }

      .bosscab2 {
        width: 655px;
        display: none;
      }

      .bom .bosscab2 {
        width: 645px;
        display: block;
        margin-left: 18px;
        margin-top: 15px;
      }

      .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: block;
} 

.st-n{
          display: none;
        }

        .st-n ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .st-n li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .st-n h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 15px;
        }

        .st-n2{
          display: none;
        }

        
      /* .bom  .st-n2 ul {
          display: block;
          margin-left: 45px;
          margin-top: 15px;
        }

    .bom .st-n2 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        } */
   
 

      .bom .bosscab {
        width: 655px;
        display: none;
      }


      .section3 {
        margin-top: 50px;
        margin-left: 8px;
      }

      .synven {
        width: 655px;
      }

      .synven2 {
        width: 655px;
        display: none;
      }

      .bom .synven {
        width: 655px;
        display: none;
      }

      .bom .synven2 {
        width: 645px;
        display: block;
        margin-left: 12px;
        margin-top: 13px;
      }

.hov-er{
  display: none;
  background-color: rgba(255, 255, 255, 0.848121);
  width: 25%;
  padding-left: 30px;
  border-radius: 10px;
  height: 100px;
  padding-top: 25px;
  margin-top: -150px;
  position: absolute;
  margin-left: 200px;
  cursor: pointer;
  backdrop-filter: blur(16.3097px);
}

.hov-er2{
  display: none;
  background-color: rgba(255, 255, 255, 0.848121);
  width: 25%;
  padding-left: 30px;
  border-radius: 10px;
  height: 100px;
  padding-top: 25px;
  margin-top: -150px;
  position: absolute;
  margin-left: 200px;
  cursor: pointer;
  backdrop-filter: blur(16.3097px);
}


.art4:hover .hov-er {
  display: block;
} 

.art5:hover .hov-er {
  display: block;
} 

.art6:hover .hov-er {
  display: block;
} 

.art7:hover .hov-er {
  display: block;
} 

.art8:hover .hov-er {
  display: block;
} 

.art9:hover .hov-er {
  display: block;
} 


      .art4 ul {
        display: block;
        margin-left: -120px;
      }

      .art4 li {
        display: inline-block;
        color: #57575f;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        margin-left: 120px;
      }

      .art4 h3 {
        line-height: 45px;
        color: #1c1c26;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        display: block;
      }


      .art5 {
        margin-left: 670px;
        margin-top: -450px;
      }

      .art5 ul {
        display: block;
        margin-left: -120px;
      }

      .art5 li {
        display: inline-block;
        color: #57575f;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        margin-left: 120px;
      }

      .art5 h3 {
        line-height: 45px;
        color: #1c1c26;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        display: block;
      }

      .jiff {
        width: 655px;
        margin-top: 15px;
      }

      .jiff2 {
        width: 655px;
        margin-top: 10px;
        margin-left: 20px;
        display:  none;
        
      }

    .bom .jiff {
        width: 650px;
        margin-top: 15px;
        display: none;
      }

     .bom .jiff2 {
        width: 645px;
        display:  block;
        margin-top: 18px; 
      }

      .art6 ul {
        display: block;
        margin-left: -120px;
      }

      .art6 li {
        display: inline-block;
        color: #57575f;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        margin-left: 120px;
      }

      .art6 h3 {
        line-height: 45px;
        color: #1c1c26;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        display: block;
      }

      .tailor {
        width: 655px;
      }

      .tailor2 {
        width: 655px;
        display: none;
      }

    .bom .tailor {
        width: 655px;
        display: none;
      }

    .bom .tailor2 {
        width: 645px;
        display: block;
        margin-left: 12px;
        margin-top: 13px;
      }

      .art7 {
        margin-left: 670px;
        margin-top: -448px;
      }

      .art7 ul {
        display: block;
        margin-left: -120px;
      }

      .art7 li {
        display: inline-block;
        color: #57575f;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        margin-left: 120px;
      }

      .art7 h3 {
        line-height: 45px;
        color: #1c1c26;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        display: block;
      }

      .nws {
        width: 655px;
        margin-top: 15px;
      }

      .nws2 {
        width: 655px;
        margin-top: 15px;
        display: none;
      }

     .bom .nws {
        width: 655px;
        margin-top: 15px;
        display: none;
      }

    .bom .nws2 {
        width: 645px;
        margin-top: 14px;
        margin-left: 18px;
        display: block;
      }

      .art8 ul {
        display: block;
        margin-left: -120px;
      }

      .art8 li {
        display: inline-block;
        color: #57575f;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        margin-left: 120px;
      }

      .art8 h3 {
        line-height: 45px;
        color: #1c1c26;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        display: block;
      }

      /* section3 ends */

      /* section4 starts */

      .section4 {
        margin-top: 220px;
      }

      .blt h2 {
        display: inline-block;
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-family: "Inter", sans-serif;
        font-weight: 700;
        margin-left: 29rem;
      }

      body.dark .blt h2{
        color: #fff;
      }

      .blt h2::before {
        content: url("svg/Oval.svg");
        padding-right: 25px;
      }

      .section4 h1 {
        margin-top: 40px;
        color: #161c2d;
        font-family: "Inter", sans-serif;
        text-align: center;
        font-weight: 700;
        font-size: 60px;
        width: 70%;
        margin-left: 15rem;
      }

body.dark .section4 h1{
  color: #fff;
} 

      .sig {
        width: 250px;
        margin-top: 50px;
      }

      .sig:hover {
        transform: translate(0, -5px);
      }

      .dis {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      footer {
        margin-top: 220px;
        height: 70px;
      }

      footer h3 {
        text-align: center;
        color: #161c2d;
        font-size: 16px;
        letter-spacing: 1.63px;
        font-family: "Inter", sans-serif;
      }

      body.dark footer h3{
        color: #c4c4c4;
      }

      /* section4 ends */

      /* preloader starts */

      .preloader {
        position: fixed;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background-color: #168bff;
        z-index: 100000000;
      }

      .counter {
        position: relative;
        color: white;
        font-size: 16rem;
        font-weight: 900;
        z-index: 1;
        display: inline-flex;
        align-items: flex-end;
        line-height: 1;
      }

      .counter::after {
        content: "%";
        font-size: 0.5em;
      }

      .preloader .active {
        transform: translateY(-100vh);
        transition: ease-in-out 2s;
        transition-delay: 5s;
      }

      .preloader .hide {
        opacity: 0;
        transition: 1s;
        pointer-events: none;
      }

      /* preloader ends */

            /* scrolling text */

            #brk{
          width: 80%;
        }

        #star{
          width: 80%;
        }

        #solve{
          width: 80%;
        }  

        /* #auch{
          width: 80%;
          margin-left: 37px;
        } */

      /* media query starts */
      @media (max-width: 257px) {
        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 700px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

        header {
          width: 100%;
          height: 40px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 12px;
        }

        #navl {
          margin-top: 8px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 48px;
          margin-top: 420px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 11px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        body.dark .navicon{
          background-color: #fff;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */


        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 16rem;
        }

        .lead {
          font-size: 11px;
          width: 60%;
          text-align: center;
          margin-left: 7px;
          
        }

        .passion {
          font-size: 25px;
          width: 120%;
          margin-left: -50px;

        }

        .blu-btn {
          width: 11rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: -40px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 10px ;
          margin-top: -28rem;
        }

        .art2 img {
          width: 205px;
          margin-left: 15px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 38px;
          width: 40px;
        }
        .position-fixed-right {
          top: 30%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 380px;
          margin-left: -25px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 40px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

        .art3 a {
          line-height: 30px;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .bom  .bosscab2 {
          width: 94%;
          margin-left: -1px;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }

       .bom .synven2 {
          width: 94%;
          margin-left: -1px;
        }
        .art4 {
          margin-left: 15px;
        }


        body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      }
 

body.dark .dark-bg{
  display: block;
  width: 205px;
  margin-left: 25px;
        margin-top: -28rem;
}

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}


  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


.art4 {
          margin-left: 15px;
        }
        .art4 ul {
          display: block;
          margin-left: 15px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          word-spacing: 1px;
          font-size: 15px;
        }

        .bom   .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 46px;
          word-spacing: 1px;
          font-size: 15px;
        }



        .art5 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 15px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 48px;
          word-spacing: 1px;
          font-size: 15px;
        }

        .jiff {
          width: 94%;
        }

      .bom .jiff2 {
          width: 94%;
          margin-left: -1px;
        }

        .tailor {
          width: 94%;
        }

       .bom .tailor2 {
          width: 94%;
          margin-left: -1px;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

      .bom .nws2 {
          width: 94%;
          margin-left: -1px;
        }

        .art7 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 24px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 50px;
          word-spacing: 1px;
          font-size: 15px;
        }

        .art6 {
          margin-left: 15px;
        }

        .art6 ul {
          display: block;
          margin-left: 24px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 60px;
          word-spacing: 1px;
          font-size: 15px;
        }

.bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 30px;
          word-spacing: 1px;
          font-size: 15px;
        }


        .art8 {
          margin-left: 15px;
        }

        .art8 ul {
          display: block;
          margin-left: 25px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 30px;
          word-spacing: 1px;
          font-size: 15px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 55px;
          word-spacing: 1px;
          font-size: 15px;
        }

        /* section3 ends */

        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .blt h2 {
          font-size: 13px;
          width: 60%;
          margin-left: 55px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 10px;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 10px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 50px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 11px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 23px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 258px) and (max-width: 276px) {
 /* scrolling words */

      
 #brk{
          width: 80%;
      
        }

        #star{
          width: 80%;
     
        }

        #solve{
          width: 80%;
       
        }

        #auch{
          width: 80%;
        }

/* dark theme starts */

body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 265px;
  margin-left: 1px;
          margin-top: -31rem;
}



/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

/* hover */

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}


  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 700px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 12px;
        }

        #navl {
          margin-top: 8px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 48px;
          margin-top: 420px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 11px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 20rem;
        }

        .lead {
          font-size: 11px;
          width: 80%;
          text-align: center;
          margin-left: -15px;
        }

        .passion {
          font-size: 27px;
          width: 131%;
          margin-left: -50px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: -30px;
          margin-top: 3rem;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: -8px;
          margin-top: -31rem;
        }

        .art2 img {
          width: 265px;

        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 30%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 300px;
          margin-left: -25px;
        }

        .art3 a {
          line-height: 30px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 40px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 15px;
        }
        .art4 ul {
          display: block;
          margin-left: 24px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 22px;
          word-spacing: 1px;
          font-size: 18px;
        }

       .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 25px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 48px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .art5 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 24px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 40px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 40px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 15px;
        }

        .art6 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 55px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 15px;
        }

        .art8 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 23px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .blt h2 {
          font-size: 13px;
          width: 75%;
          margin-left: 37px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 10px;
        }

        .section4 ul {
          text-align: center;
          width: 70%;
          margin-left: 40px;
        }
        .section4 li {
          display: inline-block;
          margin-left: 50px;
          font-size: 13px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 50px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 11px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 277px) and (max-width: 280px) {

        #brk{
          width: 90%;
        }

        #star{
          width: 90%;
        }

        #solve{
          width: 90%;
        }

        #auch{
          width: 90%;
      }

        /* art hover */
        .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 45px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 50px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 50px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 58px;
          word-spacing: 1px;
          font-size: 18px;
        }

        
/* dark theme starts */

body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 265px;
  margin-left: 8px;
          margin-top: -31rem;
}



/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */


        /*hover*/

        .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}


  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 700px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 12px;
        }

        #navl {
          margin-top: 8px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 48px;
          margin-top: 420px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 11px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 19rem;
        }

        .lead {
          font-size: 11px;
          width: 80%;
          text-align: center;
          margin-left: -15px;
        }

        .passion {
          font-size: 27px;
          width: 110%;
          margin-left: -50px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: -20px;
          margin-top: 3rem;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: -8px;
          margin-top: -31rem;
        }

        .art2 img {
          width: 265px;
          margin-left: 16px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 30%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 300px;
          margin-left: -25px;
        }

        .art3 a {
          line-height: 30px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 40px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 15px;
        }
        .art4 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 50px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 50px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 50px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 50px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 50px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 30px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 48px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 50px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 15px;
        }

        .art6 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 60px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 15px;
        }

        .art8 ul {
          display: block;
          margin-left: 30px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 30px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .blt h2 {
          font-size: 13px;
          width: 75%;
          margin-left: 37px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 10px;
        }

        .section4 ul {
          text-align: center;
          width: 70%;
          margin-left: 40px;
        }
        .section4 li {
          display: inline-block;
          margin-left: 50px;
          font-size: 13px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 50px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 11px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 281px) and (max-width: 310px) {
       /* art hover */
       .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 25px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 45px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 68px;
          word-spacing: 1px;
          font-size: 18px;
        }


        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        
        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 250px;
  margin-left: 29px;
          margin-top: -30rem;
}

/* dark theme ends */


/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */


        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */


        /*hover*/

        .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 700px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 12px;
        }

        #navl {
          margin-top: 8px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 48px;
          margin-top: 430px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 11px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 19rem;
        }

        .lead {
          font-size: 10px;
          width: 60%;
          margin-left: 25px;
          text-align: center;
        }

        .passion {
          font-size: 25px;
          width: 80%;
          margin-left: -20px;

        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: -20px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 10px;
          margin-top: -30rem;
        }

        .art2 img {
          width: 250px;
          margin-left: 18px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 30%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 300px;
          margin-left: -11px;
        }

        .art3 a {
          line-height: 20px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 20px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 15px;
        }
        .art4 ul {
          display: block;
          margin-left: 40px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 35px;
          word-spacing: 1px;
          font-size: 18px;
        }

      .bom .art4 ul {
          display: block;
          margin-left: 60px;
          margin-top: 15px;
        }

       .bom .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

     .bom  .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 43px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 40px;
          margin-top: 15px;
        }

      .bom .art5 ul {
          display: block;
          margin-left: 65px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 58px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 15px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 40px;
          margin-top: 15px;
        }

      .bom .art7 ul {
          display: block;
          margin-left: 60px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 60px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .art6 {
          margin-left: 15px;
        }

        .art6 ul {
          display: block;
          margin-left: 40px;
          margin-top: 15px;
        }

.bom  .art6 ul {
          display: block;
          margin-left: 60px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 68px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 15px;
        }

        .art8 ul {
          display: block;
          margin-left: 47px;
          margin-top: 15px;
        }

.bom   .art8 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 45px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 45px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 10px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 50px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 11px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 311px) and (max-width: 330px) {

          /* art hover */
       .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 65px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 45px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 65px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 68px;
          word-spacing: 1px;
          font-size: 18px;
        }

/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 280px;
  margin-left: 21px;
          margin-top: -32rem;
}


/* dark theme ends */


/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

     /*hover*/

     .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}



        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 700px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 40px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 12px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 20rem;
        }

        .lead {
          font-size: 11px;
          width: 60%;
          margin-left: 25px;
          text-align: center;
        }

        .passion {
          font-size: 28px;
          width: 100%;
          margin-left: -20px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: -5px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 8px;
          margin-top: -32rem;
        }

        .art2 img {
          width: 280px;
          margin-left: 13px;

        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 35%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 300px;
          margin-left: -11px;
        }

        .art3 a {
          line-height: 20px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 20px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 20px;
        }
        .art4 ul {
          display: block;
          margin-left: 55px;
          margin-top: 15px;
        }

.bom .art4 ul {
          display: block;
          margin-left: 75px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 52px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 20px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 55px;
          margin-top: 15px;
        }

.bom .art5 ul {
          display: block;
          margin-left: 75px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 65px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 20px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 60px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 75px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 68px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 20px;
        }

        .art6 ul {
          display: block;
          margin-left: 55px;
          margin-top: 15px;
        }

.bom .art6 ul {
          display: block;
          margin-left: 75px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 75px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 20px;
        }

        .art8 ul {
          display: block;
          margin-left: 55px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 75px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 53px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 50px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 10px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 331px) and (max-width: 350px) {

  /* art hover */
  .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 65px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 55px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 70px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 82px;
          word-spacing: 1px;
          font-size: 18px;
        }


/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 38px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 300px;
  margin-left: 25px;
          margin-top: -34rem;
}



/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */


     /*hover*/

     .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 8rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 470px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 12px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 38px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 22rem;
        }

        .lead {
          font-size: 12px;
          width: 65%;
          margin-left: 20px;
          text-align: center;
        }

        .passion {
          font-size: 30px;
          width: 100%;
          margin-left: -20px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 10px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 14px;
          margin-top: -34rem;
        }

        .art2 img {
          width: 300px;
          margin-left: 10px;

        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 40%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 320px;
          margin-left: -7px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 20px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 58px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 78px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 58px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 58px;
          margin-top: 15px;
        }

      .bom  .art5 ul {
          display: block;
          margin-left: 83px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 75px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 58px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 84px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 80px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 58px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 88px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 88px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 63px;
          margin-top: 15px;
        }

        
      .bom .art8 ul {
          display: block;
          margin-left: 83px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 60px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 50px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 13px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 1rem;
        }

        .sig {
          width: 180px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 351px) and (max-width: 360px) {

  /* art hover */

  .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 81px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 91px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 72px;
          word-spacing: 1px;
          font-size: 18px;
        }


.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 98px;
          word-spacing: 1px;
          font-size: 18px;
        }


/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 320px;
  margin-left: 19px;
          margin-top: -31rem;
}


/* dark theme ends */

  /*hover*/

  .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}



/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */



        /* preloader */


        .counter {
          font-size: 9rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 23rem;
        }

        .lead {
          font-size: 12px;
          width: 65%;
          margin-left: 25px;
          text-align: center;
        }

        .passion {
          font-size: 25px;
          width: 125%;
          margin-left: -74px;
          text-align: center;

        }

        #brk{
          width: 80%;
          margin-left: 37px;
        }

        #star{
          width: 80%;
          margin-left: 37px;
        }

        #solve{
          width: 80%;
          margin-left: 37px;
        }
        
        #auch{
          width: 80%;
          margin-left: 37px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 20px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 14px;
          margin-top: -31rem;
        }

        .art2 img {
          width: 320px;
margin-left: 5px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 40%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 250px;
          margin-left: -7px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 20px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 64px;
          margin-top: 15px;
        }

       .bom .art4 ul {
          display: block;
          margin-left: 84px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 65px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 64px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 90px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 82px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 64px;
          margin-top: 15px;
        }

      .bom .art7 ul {
          display: block;
          margin-left: 94px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 85px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 72px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 92px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 95px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 90px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 67px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 60px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 15px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 100%;
          margin-left: -3px;
        }

        .sig {
          width: 185px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 361px) and (max-width: 380px) {

        /* scrolling text */

        #brk{
          width: 90%;
          margin-left: 15px;
        }

        #star{
          width: 90%;
          margin-left: 15px;
        }

        #solve{
          width: 90%;
          margin-left: 15px;
        }
        
        #auch{
          width: 90%;
          margin-left: 15px;
        }


  /* art hover */
  .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 85px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 89px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 75px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 90px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 98px;
          word-spacing: 1px;
          font-size: 18px;
        }


        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 320px;
  margin-left: 25px;
          margin-top: -30rem;
}

/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

  /*hover*/

  .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 9rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 21rem;
        }

        .lead {
          font-size: 12px;
          width: 60%;
          margin-left: 30px;
          text-align: center;
        }

        .passion {
          font-size: 25px;
          width: 100%;
          margin-left: -38px;
          text-align: center;

        }

        #auch{
          width: 110%;
          margin-left: -12px;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 20px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 10px;
          margin-top: -31rem;
          width: 10%;
        }

        .art2 img {
          width: 320px;
          margin-left: 15px;
        }

        /* art2 styling ends  */
        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 40%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -8px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 20px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 90px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 70px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

       .bom .art5 ul {
          display: block;
          margin-left: 95px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 88px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

       .bom .art7 ul {
          display: block;
          margin-left: 95px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 90px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 96px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 100px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 70px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 95px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 70px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 13px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 100%;
          margin-left: -1px;
        }

        .sig {
          width: 185px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 381px) and (max-width: 400px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 37px;
        }

        #star{
          width: 80%;
          margin-left: 37px;
        }

        #solve{
          width: 80%;
          margin-left: 37px;
        }
        
        #auch{
          width: 80%;
          margin-left: 37px;
        }

  /* art hover */
  .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 94px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 78px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 93px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 110px;
          word-spacing: 1px;
          font-size: 18px;
        }

/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 360px;
  margin-left: 20px;
          margin-top: -34rem;        
}

/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

  /*hover*/

  .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 25rem;
        }

        .lead {
          font-size: 12px;
          width: 55%;
          margin-left: 44px;
          text-align: center;
        }

        .passion {
          font-size: 28px;
          width: 120%;
          margin-left: -70px;
          text-align: center;

        }



        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 40px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 10px;
          margin-top: -34rem;
          width: 10%;
        }

        .art2 img {
          width: 360px;
          margin-left: 10px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 40%;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 260px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 50px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }

        .art4 ul {
          display: block;
          margin-left: 85px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 105px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 82px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 77px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 105px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 95px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 82px;
          margin-top: 15px;
        }

      .bom  .art7 ul {
          display: block;
          margin-left: 107px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 100px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 82px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 106px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 110px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 85px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 108px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 85px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 12px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 20px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 401px) and (max-width: 420px) {

            /* scrolling text */

            #brk{
          width: 80%;
          margin-left: 37px;
        }

        #star{
          width: 80%;
          margin-left: 37px;
        }

        #solve{
          width: 80%;
          margin-left: 37px;
        }
        
      


  /* art hover */
  .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 104px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 85px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 115px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 18px;
        }


      /* dark theme starts */
      body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }
        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 360px;
  margin-left: 30px;
          margin-top: -34rem;  
}


/* dark theme ends */
      
 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}
      
/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */


        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 24rem;
        }

        .lead {
          font-size: 12px;
          width: 53%;
          margin-left: 55px;
          text-align: center;
        }

        .passion {
          font-size: 28px;
          width: 110%;
          margin-left: -55px;
          text-align: center;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 40px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -34rem;
          width: 10%;
        }

        .art2 img {
          width: 360px;
          margin-left: 19px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 45px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 95px;
          margin-top: 15px;
        }

       .bom .art4 ul {
          display: block;
          margin-left: 107px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 107px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 107px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 115px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 115px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 90px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 85px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 104px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 95px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 110px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 100px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 98px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 12px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 93px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 12px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 20px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 421px) and (max-width: 454px) {

            /* scrolling text */

            #brk{
          width: 80%;
          margin-left: 37px;
        }

        #star{
          width: 80%;
          margin-left: 37px;
        }

        #solve{
          width: 80%;
          margin-left: 37px;
        }
        
        #auch{
          width: 80%;
          margin-left: 37px;
        }


 /* art hover */
 .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 114px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 98px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 18px;
        }



       /* dark theme starts */
       body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }
        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 400px;
  margin-left: 21px;
          margin-top: -36rem;
}


/* dark theme ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

       
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 26rem;
        }

        .lead {
          font-size: 12px;
          width: 50%;
          margin-left: 72px;
          text-align: center;
        }

        .passion {
          font-size: 29px;
          width: 110%;
          margin-left: -55px;
          text-align: center;
        }


        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 65px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -36rem;
          width: 10%;
        }

        .art2 img {
          width: 400px;
          margin-left: 10px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 50px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 105px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 103px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 100px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 100px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 125px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 105px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 110px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 108px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 90%;
          margin-left: 13px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 90%;
          margin-left: 20px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 455px) and (max-width: 465px) {

            /* scrolling text */

            #brk{
          width: 80%;
          margin-left: 38px;
        }

        #star{
          width: 80%;
          margin-left: 38px;
        }

        #solve{
          width: 80%;
          margin-left: 38px;
        }
        
        #auch{
          width: 80%;
          margin-left: 38px;
        }


/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 132px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 108px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 137px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 18px;
        }


        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 420px;
  margin-left: 23px;
          margin-top: -37rem;
}

/* dark theme ends */


/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 28rem;
        }

        .lead {
          font-size: 12px;
          width: 45%;
          margin-left: 80px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 110%;
          margin-left: -55px;
          text-align: center;
        }

        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 80px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -37rem;
          width: 10%;
        }

        .art2 img {
          width: 420px;
          margin-left: 12px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 50px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 115px;
          margin-top: 15px;
        }

      .bom .art4 ul {
          display: block;
          margin-left: 139px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 139px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 139px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 139px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 139px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 113px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 110px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 110px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 135px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 110px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 118px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 80%;
          margin-left: 40px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 80%;
          margin-left: 50px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 466px) and (max-width: 480px) {

            /* scrolling text */

            #brk{
          width: 80%;
          margin-left: 40px;
        }

        #star{
          width: 80%;
          margin-left: 40px;
        }

        #solve{
          width: 80%;
          margin-left: 40px;
        }
        
        #auch{
          width: 80%;
          margin-left: 40px;
        }


/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 132px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 80px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 137px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 18px;
        }

/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 425px;
  margin-left: 22px;
          margin-top: -38rem;
}

/* dark theme ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */


        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 28rem;
        }

        .lead {
          font-size: 12px;
          width: 45%;
          margin-left: 80px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 110%;
          margin-left: -55px;
          text-align: center;
        }


        .blu-btn {
          width: 12rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 80px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -38rem;
          width: 10%;
        }

        .art2 img {
          width: 425px;
          margin-left: 10px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 50px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 115px;
          margin-top: 15px;
        }
.bom  .art4 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 115px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 135px;
          word-spacing: 1px;
          font-size: 19px;
        }


        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 150px;
          word-spacing: 1px;
          font-size: 19px;
        }


        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 105px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 112px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 80%;
          margin-left: 40px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 80%;
          margin-left: 50px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 481px) and (max-width: 490px) {

               /* scrolling text */

               #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }
        


/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 136px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 115px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 137px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 18px;
        }


        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 435px;
  margin-left: 28px;
 margin-top: -38rem;
}


/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */


        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 70%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 29rem;
        }

        .lead {
          font-size: 12px;
          width: 45% !important;
          margin-left: 95px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 100%;
          margin-left: -30px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 85px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 18px;
          margin-top: -38rem;
          width: 10%;
        }

        .art2 img {
          width: 435px;
          margin-left: 10px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 50px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

       .bom .art4 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 119px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 150px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 118px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 80%;
          margin-left: 40px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 80%;
          margin-left: 50px;
        }

        .sig {
          width: 190px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 491px) and (max-width: 510px) {
       /* scrolling text */

       #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }
        


/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 136px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 115px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 137px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 148px;
          word-spacing: 1px;
          font-size: 18px;
        }



        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 440px;
  margin-left: 20px;
  margin-top: -39rem;
}
/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 50px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 29rem;
        }

        .lead {
          font-size: 12px;
          width: 40% !important;
          margin-left: 95px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 100%;
          margin-left: -30px;
          text-align: center;
        }


        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 88px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 20px;
          margin-top: -39rem;
          width: 10%;
        }

        .art2 img {
          width: 440px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

       .bom .art4 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 135px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 135px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 123px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 75px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }

      @media (min-width: 511px) and (max-width: 520px) {
               /* scrolling text */

               #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }
        

/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 146px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 158px;
          word-spacing: 1px;
          font-size: 18px;
        }


        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 478px;
  margin-left: 11px;
  margin-top: -41rem;
}

/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 31rem;
        }

        .lead {
          font-size: 12px;
          width: 40%;
          margin-left: 105px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 100%;
          margin-left: -30px;
          text-align: center;
        }


        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 88px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -41rem;
          width: 10%;
        }

        .art2 img {
          width: 478px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 125px;
          margin-top: 15px;
        }

        .bom  .art4 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 120px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 155px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 130px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 123px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 70px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 521px) and (max-width: 535px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 146px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 120px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 158px;
          word-spacing: 1px;
          font-size: 18px;
        }

/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 478px;
  margin-left: 11px;
  margin-top: -41rem;
}

/* dark theme ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 94%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 94%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 94%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 94%;
          margin-left: 1px;
        }
/* branding ends */


        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 490px;
  margin-left: 11px;
          margin-top: -41rem;
}
        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 500px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 31rem;
        }

        .lead {
          font-size: 12px;
          width: 40%;
          margin-left: 115px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 90%;
          margin-left: -10px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 98px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -41rem;
          width: 10%;
        }

        .art2 img {
          width: 490px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 94%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 94%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 140px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }
        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 138px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 165px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 94%;
        }

        .tailor {
          width: 94%;
        }

        .nws {
          width: 94%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 170px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 175px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 125px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 145px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 75px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 5px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 536px) and (max-width: 550px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 162px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 178px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }
        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 510px;
  margin-left: 11px;
          margin-top: -42rem;
}

/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 95%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 95%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 95%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 95%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 95%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}



        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 32rem;
        }

        .lead {
          font-size: 12px;
          width: 40%;
          margin-left: 125px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 90%;
          margin-left: -10px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 100px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -42rem;
          width: 10%;
        }

        .art2 img {
          width: 510px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 95%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 95%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 150px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

         .bom .art5 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 175px;
          word-spacing: 1px;
          font-size: 19px;
        }

     .bom  .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 155px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 95%;
        }

        .tailor {
          width: 95%;
        }

        .nws {
          width: 95%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 180px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 185px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 150px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 170px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 90px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 7px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 551px) and (max-width: 570px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

        /* art hover */
.bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 162px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 168px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 520px;
  margin-left: 11px;
          margin-top: -43rem;
}

/* dark theme ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

  
        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 33rem;
        }

        .lead {
          font-size: 12px;
          width: 35%;
          margin-left: 135px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 90%;
          margin-left: -10px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 120px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -43rem;
          width: 10%;
        }

        .art2 img {
          width: 520px;
         
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 150px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 175px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 180px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 155px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 185px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 145px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 150px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 90px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 7px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 571px) and (max-width: 590px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

        /* art hover */
        .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 180px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 130px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 192px;
          word-spacing: 1px;
          font-size: 18px;
        }

        /* dark theme starts */
        body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }


/* dark theme ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 12px;
   margin-top: -43rem;
}

        /* preloader ends */


        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 33rem;
        }

        .lead {
          font-size: 12px;
          width: 35% ;
          margin-left: 135px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 80%;
          margin-left: 20px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 127px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 12px;
          margin-top: -43rem;
          width: 10%;
        }

        .art2 img {
          width: 540px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 50%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 170px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 165px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 175px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 195px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 175px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 175px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 200px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 180px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 175px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 205px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 165px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 175px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 170px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 70%;
          margin-left: 80px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 65%;
          margin-left: 100px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 7px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 10px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 591px) and (max-width: 610px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

        /* art hover */
        .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 180px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 185px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 170px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 157px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 192px;
          word-spacing: 1px;
          font-size: 18px;
        }

/* dark theme starts */
body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 21px;
          margin-top: -44rem;
}
        
/* dark theme ends */

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */

 /*hover*/

 .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */



        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 33rem;
        }

        .lead {
          font-size: 12px;
          width: 33%;
          margin-left: 145px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 80%;
          margin-left: 20px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 137px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 21px;
          margin-top: -44rem;
          width: 10%;
        }

        .art2 img {
          width: 540px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }
      .bom  .art4 ul {
          display: block;
          margin-left: 180px;
          margin-top: 15px;
          font-size: 13px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 180px;
          margin-top: 15px;
          font-size: 13px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 186px;
          margin-top: 15px;
          font-size: 13px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 186px;
          margin-top: 15px;
          font-size: 13px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 186px;
          margin-top: 15px;
          font-size: 13px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 158px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 170px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 155px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 175px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 160px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 185px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 165px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 100px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 65%;
          margin-left: 120px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 30px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 30px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 611px) and (max-width: 630px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

        /* art hover */
        .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 160px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 218px;
          word-spacing: 1px;
          font-size: 18px;
        }

       /* dark theme starts */
       body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        
        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 560px;
  margin-left: 31px;
          margin-top: -44rem;
}

/* dark theme ends */
       
/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */



        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 34rem;
        }

        .lead {
          font-size: 12px;
          width: 32%;
          margin-left: 155px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 80%;
          margin-left: 28px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 140px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 31px;
          margin-top: -44rem;
          width: 10%;
        }

        .art2 img {
          width: 560px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 190px;
          margin-top: 15px;
        }

       .bom .art4 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 188px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 195px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 215px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 200px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 195px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 200px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 195px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 215px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 190px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 195px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 190px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 60%;
          margin-left: 140px;
        }

        .sig {
          width: 200px;
          margin-top: 50px;
          margin-left: 55px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 50px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 631px) and (max-width: 639px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

 /* art hover */
 .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 140px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 147px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 222px;
          word-spacing: 1px;
          font-size: 18px;
        }

      /* dark theme starts */
      body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 560px;
  margin-left: 36px;
          margin-top: -45rem;
}

/* dark theme ends */

/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */
      
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 35rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 160px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 80%;
          margin-left: 28px;
          text-align: center;
        }


        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 160px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 36px;
          margin-top: -45rem;
          width: 10%;
        }

        .art2 img {
          width: 560px;
  }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 200px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .bom .art6 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .bom .art8 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }


        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 193px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 225px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom   .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 205px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 230px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 188px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 200px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 60%;
          margin-left: 150px;
        }

        .sig {
          width: 220px;
          margin-top: 50px;
          margin-left: 30px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 40px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 640px) and (max-width: 650px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

         /* art hover */
         .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 216px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 190px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 217px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 222px;
          word-spacing: 1px;
          font-size: 18px;
        }


      /* dark theme starts */
      body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 580px;
  margin-left: 21px;
  margin-top: -45rem;
}

/* dark theme ends */
      
/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}



      /* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */
      
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 35rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 170px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 70%;
          margin-left: 58px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 160px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 21px;
          margin-top: -45rem;
          width: 10%;
        }

        .art2 img {
          width: 580px;

        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 200px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 198px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 225px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }
        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 225px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 205px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 198px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 60%;
          margin-left: 150px;
        }

        .sig {
          width: 220px;
          margin-top: 50px;
          margin-left: 30px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 40px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 651px) and (max-width: 670px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

               /* art hover */
               .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 256px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 212px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 217px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 222px;
          word-spacing: 1px;
          font-size: 18px;
        }
    /* dark theme starts */
    body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 600px;
  margin-left: 21px;
  margin-top: -46rem;
}

/* dark theme ends */
   
/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

/* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */
    
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

       

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 35rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 170px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 70%;
          margin-left: 58px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 160px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 21px;
          margin-top: -46rem;
          width: 10%;
        }

        .art2 img {
          width: 600px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 210px;
          margin-top: 15px;
        }

        .bom .art4 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 208px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art5 ul {
          display: block;
          margin-left: 235px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 218px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom .art7 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 230px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 214px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

.bom .art6 ul {
          display: block;
          margin-left: 235px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 60%;
          margin-left: 150px;
        }

        .sig {
          width: 220px;
          margin-top: 50px;
          margin-left: 40px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 50px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 671px) and (max-width: 690px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

               /* art hover */
               .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 223px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 190px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 217px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 242px;
          word-spacing: 1px;
          font-size: 18px;
        }

     /* dark theme starts */
     body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
  margin-top: 10px;
        margin-left: 10px;
}

      body.dark  .nav-ul {
        margin-top: 20px;
      } 
 

body.dark .dark-bg{
  display: block;
  width: 615px;
  margin-left: 11px;
   margin-top: -48rem;
}

/* dark theme ends */

/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

     /* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */
     
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

       

        header :checked ~ .menu-icon .navicon:nth-child(1) {
          transform: translateY(7px) rotate(225deg);
        }
        header :checked ~ .menu-icon .navicon:nth-child(2) {
          opacity: 0;
        }
        header :checked ~ .menu-icon .navicon:nth-child(3) {
          transform: translateY(-7px) rotate(-225deg);
        }
        .menu-icon {
          display: block;
        }

        .nav-ul {
          display: none;
          background-color: #fff;
          width: 60%;
          height: 900px;
          position: fixed;
          top: -20px;
          left: 0;
          float: none;
          border-right: 1px solid rgb(208, 201, 201);
        }

        header {
          width: 100%;
          height: 60px;
        }

        .nav-li {
          display: block;
          margin-top: 130px;
        }

        .nav-li a {
          font-size: 15px;
        }

        #navl {
          margin-top: 16px;
        }

        header :checked ~ .nav-ul {
          display: block;
        }

        .move {
          display: block;
          margin-left: 18px;
          margin-top: 490px;
        }

        .lon {
          margin-top: -100px;
          margin-left: -8px;
        }

        .li3 {
          display: inline-block;
          line-height: 25px;
        }

        .li3 a {
          font-size: 13px;
        }

        .image {
          margin-top: 10px;
          margin-left: 10px;
          width: 48px;
        }

        header .navicon {
          height: 2px;
          width: 20px;
          border-radius: 5px;
          margin: 5px;
          background-color: black;
        }

        .icon svg {
          margin-top: -11px;
          width: 10px;
        }

        .menu-icon {
          position: absolute;
          top: 50%;
          right: 5%;
          transform: translateY(-50%);
        }
        /* header ends */

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 38rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 180px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 70%;
          margin-left: 58px;
          text-align: center;
        }

        .blu-btn {
          width: 13rem;
          height: 3rem;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 160px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -48rem;
          width: 10%;
        }

        .art2 img {
          width: 615px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 210px;
          margin-top: 15px;
        }

        .bom  .art4 ul {
          display: block;
          margin-left: 230px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 230px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 230px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 230px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 230px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 205px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 218px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 234px;
          word-spacing: 1px;
          font-size: 19px;
        }
        
        .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 214px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 190px;
          word-spacing: 1px;
          font-size: 19px;
        }


        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 215px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 210px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 227px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 100px;
        }

        .sig {
          width: 220px;
          margin-top: 50px;
          margin-left: 40px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 50px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
    
      @media (min-width: 691px) and (max-width: 700px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }


       /* art hover */
       .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 236px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 237px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 255px;
          word-spacing: 1px;
          font-size: 18px;
        }

     /* dark theme starts */
     body.dark .nav-ul {
        background-color: #171A23;
        border-right: 1px solid #171A23;
        }

body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }


        body.dark .logo-dark{
  display: block;
  width: 48px;
}

body.dark .dark-bg{
  display: block;
  width: 635px;
  margin-left: 11px;
  margin-top: -48rem;
}

        .image{
  width: 48px;
}
/* dark theme ends */
     
/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

     /* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 97%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 97%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 97%;
          margin-left: 1px;
        }
/* branding ends */
     
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

      

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 39rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 180px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 70%;
          margin-left: 58px;
          text-align: center;
        }


        .blu-btn {
          width: 14rem;
          height: 55px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 170px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -49rem;
          width: 10%;
        }

        .art2 img {
          width: 635px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 97%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 97%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 220px;
          margin-top: 15px;
        }

        .bom  .art4 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 218px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }


        .jiff {
          width: 97%;
        }

        .tailor {
          width: 97%;
        }

        .nws {
          width: 97%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 240px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 225px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 100px;
        }

        .sig {
          width: 240px;
          margin-top: 50px;
          margin-left: 40px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 50px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 701px) and (max-width: 720px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }
   
        /* art hover */
       .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 252px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 237px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 255px;
          word-spacing: 1px;
          font-size: 18px;
        }

   
        /* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
}


body.dark .dark-bg{
  display: block;
  width: 645px;
  margin-left: 31px;
  margin-top: -49rem;
}


        .image{
  width: 48px;
margin-left: 20px;
}

/* dark theme ends */
     
/*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


     /* branding */
.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 97%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 97%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 97%;
          margin-left: 1px;
        }
/* branding ends */


        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

       

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 39rem;
        }

        .lead {
          font-size: 12px;
          width: 30%;
          margin-left: 200px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 70%;
          margin-left: 70px;
          text-align: center;
        }

        .blu-btn {
          width: 14rem;
          height: 55px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 180px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -49rem;
          width: 10%;
        }

        .art2 img {
          width: 645px;
          margin-left: 20px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 97%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 97%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 240px;
          margin-top: 15px;
        }

        .bom  .art4 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 265px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 248px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 97%;
        }

        .tailor {
          width: 97%;
        }

        .nws {
          width: 97%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 260px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 250px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 272px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 226px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 240px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 260px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 150px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 120px;
        }

        .sig {
          width: 240px;
          margin-top: 50px;
          margin-left: 60px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 60px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 721px) and (max-width: 740px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }
     
     /* art hover */
     .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 236px;
          word-spacing: 1px;
          font-size: 18px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 220px;
          word-spacing: 1px;
          font-size: 18px;
        }


        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 237px;
          word-spacing: 1px;
          font-size: 18px;
        }

.bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 255px;
          word-spacing: 1px;
          font-size: 18px;
        }

     
        /* dark theme starts */
     body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 48px;
}


body.dark .dark-bg{
  display: block;
  width: 648px;
  margin-left: 26px;
  margin-top: -49rem;
}


        .image{
  width: 48px;

}

/* dark theme ends */

 /* branding */
 .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 97%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 97%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 97%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

       /*hover*/

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}

        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 42rem;
        }

        .lead {
          font-size: 12px;
          width: 27%;
          margin-left: 200px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 65%;
          margin-left: 78px;
          text-align: center;
        }

        .blu-btn {
          width: 15rem;
          height: 58px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 180px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -51rem;
          width: 10%;
        }

        .art2 img {
          width: 685px;

        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 97%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 97%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 240px;
          margin-top: 15px;
        }

      .bom  .art4 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art5 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art6 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art7 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .bom  .art8 ul {
          display: block;
          margin-left: 260px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 260px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 97%;
        }

        .tailor {
          width: 97%;
        }

        .nws {
          width: 97%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 260px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 265px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 230px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 245px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 240px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 261px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 120px;
        }

        .sig {
          width: 260px;
          margin-top: 50px;
          margin-left: 60px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 70px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 741px) and (max-width: 760px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 48px;
}


body.dark .dark-bg{
  display: block;
  width: 705px;
  margin-left: 18px;
  margin-top: -53rem;
}


        .image{
  width: 48px;

}

/* dark theme ends */

 /* branding */
 .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 96%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 96%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 96%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 96%;
          margin-left: 1px;
        }
/* branding ends */

        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

       /*hover*/

       .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 44rem;
        }

        .lead {
          font-size: 12px;
          width: 25%;
          margin-left: 200px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 60%;
          margin-left: 88px;
          text-align: center;
        }

        .blu-btn {
          width: 15rem;
          height: 58px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 180px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 18px;
          margin-top: -53rem;
          width: 10%;
        }

        .art2 img {
          width: 705px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 96%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 96%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 242px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 235px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 270px;
          word-spacing: 1px;
          font-size: 19px;
        }

     .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }


        .jiff {
          width: 96%;
        }

        .tailor {
          width: 96%;
        }

        .nws {
          width: 96%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 270px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 244px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 282px;
          word-spacing: 1px;
          font-size: 19px;
        }

     .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 215px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 255px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 130px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 120px;
        }

        .sig {
          width: 260px;
          margin-top: 50px;
          margin-left: 50px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 60px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 761px) and (max-width: 780px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

     /* dark theme starts */

     body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 50px;
}

body.dark .dark-bg{
  display: block;
  width: 725px;
  margin-left: 18px;
  margin-top: -53rem;
}

        .image{
  width: 50px;

}
/* dark theme ends */
     
 /* branding */
 .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 97%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 97%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 97%;
          margin-left: 1px;
        }
/* branding ends */
     
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

     /*hover*/

     .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 46rem;
        }

        .lead {
          font-size: 12px;
          width: 25%;
          margin-left: 230px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 60%;
          margin-left: 108px;
          text-align: center;
        }

        .blu-btn {
          width: 15rem;
          height: 58px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 200px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 18px;
          margin-top: -53rem;
          width: 10%;
        }

        .art2 img {
          width: 725px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 97%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 97%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 250px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 242px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 269px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 244px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 97%;
        }

        .tailor {
          width: 97%;
        }

        .nws {
          width: 97%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 270px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 245px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 280px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 225px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 255px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 250px;
          word-spacing: 1px;
          font-size: 19px;
        }

      .bom  .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 256px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 150px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 140px;
        }

        .sig {
          width: 260px;
          margin-top: 50px;
          margin-left: 50px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 60px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 781px) and (max-width: 800px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

     /* dark theme starts */

     body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}

body.dark .dark-bg{
  display: block;
  width: 745px;
  margin-left: 11px;
  margin-top: -53rem;
}
        .image{
  width: 50px;
}
/* dark theme ends */
     
 /* branding */
 .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }


        .bom .bosscab2 {
          width: 97%;
          margin-left: 1px;
        }

     .bom .synven2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .jiff2 {
          width: 97%;
          margin-left: 1px;
        }

    .bom .tailor2 {
          width: 97%;
          margin-left: 1px;
        }

      .bom  .nws2 {
          width: 97%;
          margin-left: 1px;
        }
/* branding ends */
     
        /* preloader */

        .counter {
          font-size: 10rem;
        }

        .preloader {
          height: 100%;
        }

        /* preloader ends */

             /*hover*/

     .bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: none;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: none;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: none;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: none;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
  display: none;
} 


.art4:hover .hov-er{
       display: none;
      }

      .art4:hover .hov-er2{
       display: none;
      }

     .art5:hover .hov-er {
  display: none;
} 

.art5:hover .hov-er2 {
  display: none;
} 

.art6:hover .hov-er {
  display: none;
} 

.art6:hover .hov-er2 {
  display: none;
} 

.art7:hover .hov-er {
  display: none;
} 

.art7:hover .hov-er2 {
  display: none;
} 

.art8:hover .hov-er {
  display: none;
} 

.art8:hover .hov-er2 {
  display: none;
} 

.st-n{
  display: block;
}

  .bom .st-n{
    display: none;
  } 
  
  .bom .st-n2{
  display: block;
}


        /* art1 styling */

        .art1 {
          margin-left: 4rem;
          margin-top: 46rem;
        }

        .lead {
          font-size: 12px;
          width: 25%;
          margin-left: 230px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 60%;
          margin-left: 108px;
          text-align: center;
        }


        .blu-btn {
          width: 15rem;
          height: 58px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 200px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 11px;
          margin-top: -55rem;
          width: 10%;
        }

        .art2 img {
          width: 745px;
        }

        /* art2 styling ends  */

        .switcher-minimize-button {
          height: 40px;
          width: 60px;
        }
        .position-fixed-right {
          top: 60%;
        }
        /* section 2 art3 starts */

        .art3 {
          margin-top: 280px;
          margin-left: -30px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

        /* section3  */
        .bosscab {
          width: 97%;
        }

        .section3 {
          margin-top: 50px;
          margin-left: -1px;
        }

        .synven {
          width: 97%;
        }
        .art4 {
          margin-left: 25px;
        }
        .art4 ul {
          display: block;
          margin-left: 270px;
          margin-top: 15px;
        }

        .art4 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 263px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom  .art4 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 267px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art5 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art5 ul {
          display: block;
          margin-left: 275px;
          margin-top: 15px;
        }

        .art5 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 289px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art5 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 275px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .jiff {
          width: 97%;
        }

        .tailor {
          width: 97%;
        }

        .nws {
          width: 97%;
          margin-top: 20px;
        }

        .art7 {
          margin-left: 25px;
          margin-top: 20px;
        }

        .art7 ul {
          display: block;
          margin-left: 275px;
          margin-top: 15px;
        }

        .art7 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 290px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art7 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 270px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art6 {
          margin-left: 25px;
        }

        .art6 ul {
          display: block;
          margin-left: 275px;
          margin-top: 15px;
        }

        .art6 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 313px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .bom .art6 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 252px;
          word-spacing: 1px;
          font-size: 19px;
        }

        .art8 {
          margin-left: 25px;
        }

        .art8 ul {
          display: block;
          margin-left: 275px;
          margin-top: 15px;
        }

        .art8 li {
          display: inline-block;
          color: #57575f;
          font-family: "Inter", sans-serif;
          font-size: 13px;
          margin-left: 13px;
        }

        .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 270px;
          word-spacing: 1px;
          font-size: 19px;
        }

       .bom .art8 h3 {
          line-height: 24px;
          color: #1c1c26;
          font-weight: 900;
          font-family: "Inter", sans-serif;
          display: block;
          margin-top: 3px;
          margin-left: 277px;
          word-spacing: 1px;
          font-size: 19px;
        }

        /* section3 ends */

        /* section4 starts */

        .section4 {
          margin-top: 70px;
        }

        .blt h2 {
          font-size: 13px;
          width: 65%;
          margin-left: 150px;
          text-align: center;
        }

        .blt h2::before {
          content: url("svg/Oval.svg");
          padding-right: 15px;
        }

        .section4 h1 {
          margin-top: 40px;
          color: #161c2d;
          font-family: "Inter", sans-serif;
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          width: 70%;
          margin-left: 140px;
        }

        .sig {
          width: 260px;
          margin-top: 50px;
          margin-left: 50px;
        }

        .sig:hover {
          transform: translate(0, -5px);
        }

        .dis {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        footer {
          margin-top: 60px;
          height: 150px;
        }

        footer h3 {
          text-align: center;
          color: #161c2d;
          font-size: 10px;
          letter-spacing: 1.63px;
          font-family: "Inter", sans-serif;
          margin-left: 60px;
          margin-top: -20px;
        }

        /* section4 ends */
      }
      @media (min-width: 801px) and (max-width:810px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 500px;
  margin-left: 161px;
   margin-top: -43rem;
}


        .image{
  width: 50px;
}
/* dark theme ends */


  /* preloader */
  
  .preloader {
          height: 100%;
        }

/* switcher theme */

.switcher-minimize-button {
          height: 40px;
          width: 50px;
        }
        .position-fixed-right {
          top: 65%;
        }

      /* art1 starts */


      .art1 {
          margin-left: 4rem;
          margin-top: 35rem;
        }

        .lead {
          font-size: 12px;
          width: 25%;
          margin-left: 250px;
          text-align: center;
        }

        .passion {
          font-size: 31px;
          width: 60%;
          margin-left: 128px;
          text-align: center;
        }

        .blu-btn {
          width: 15rem;
          height: 58px;
          letter-spacing: 2px;
          font-size: 11px;
          margin-left: 220px;
          margin-top: 3rem;
        }

        .blu-btn span {
          margin-left: 8px;
        }

        .art1 i {
          color: #fff;
          margin-left: 10px;
        }

        /* art1 styling ends */

        /* art2 syling */

        .art2 {
          margin-left: 161px;
          margin-top: -43rem;
          width: 10%;
        }

        .art2 img {
          width: 500px;
        }

        /* section 2 art3 starts */

        .art3 {
          margin-top: 400px;
          margin-left: 10px;
        }

        .art3 a {
          line-height: 20px;
          font-size: 14px;
        }

        .art3 li {
          display: inline-block;
          margin-left: 60px;
        }

        #product {
          color: #168bff;
          border-bottom: 2px solid #168bff;
        }

        /* section2 art3 ends */

/* 
      .sec1 {
        margin-top: 300px;
      }


      .art1 {
        margin-left: 10rem;
        margin-top: 200px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 90%;
      }

      .art2 img {
        width: 600px;
      }

      .art2 {
        margin-left: 45rem;
        margin-top: -28rem;
      }
 */

       /* section3  */
       /* .bosscab {
        width: 610px;
        margin-left: 16px;
      } */

      .bosscab {
        width: 365px;
        margin-left: 18px;
      }

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 365px;
        margin-left: 18px;
      }

    .bom .synven2 {
        width: 365px;
        margin-left: -265px;
        margin-top: 204px;
      }

   .bom .jiff2 {
        width: 365px;
        margin-top: 15px;
        margin-left: 18px;
      }

  .bom .tailor2 {
        width: 365px;
        margin-left: -265px;
        margin-top: 203px;
      }

  .bom .nws2 {
        width: 365px;
        margin-top:15px;
        margin-left: 18px;
      }

      .jiff {
        width: 365px;
        margin-top: 15px;
        margin-left: 18px;
      }

      /* .synven {
        width: 610px;
        margin-left: -13px;
        margin-top: 30px;
      } */

      .synven {
        width: 365px;
        margin-left: -265px;
        margin-top: 200px;
      }

     
      /* .jiff {
        width: 610px;
        margin-top: 425px;
        margin-left: 16px;
      } */

    
      .jiff {
        width: 365px;
        margin-top: 15px;
        margin-left: 18px;
      }


      .tailor {
        width: 365px;
        margin-left: -265px;
        margin-top: 195px;
      }


      .nws {
        width: 365px;
        margin-top:15px;
        margin-left: 18px;
      }

    
      /* section3 ends */

/* art hover */

      .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 32%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

  /* section4 starts */

  .section4 {
        margin-top: 150px;
        margin-left: 8rem;
      }

      .blt h2 {
        display: inline-block;
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-family: "Inter", sans-serif;
        font-weight: 700;
        margin-left: 2rem;
        width: 90%;
      }

      .blt h2::before {
        content: url("svg/Oval.svg");
        padding-right: 25px;
      }

      .section4 h1 {
        margin-top: 40px;
        color: #161c2d;
        font-family: "Inter", sans-serif;
        text-align: center;
        font-weight: 700;
        font-size: 60px;
        width: 90%;
        margin-left: -2rem;
      }

      .sig {
        width: 250px;
        margin-top: 50px;
        margin-left: -100px;

      }

      .sig:hover {
        transform: translate(0, -5px);
      }

      .dis {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      footer {
        margin-top: 220px;
        height: 70px;

      }

      footer h3 {
        text-align: center;
        color: #161c2d;
        font-size: 16px;
        letter-spacing: 1.63px;
        font-family: "Inter", sans-serif;
        margin-left: 50px;
        /* width: 10%; */

      }

      /* section4 ends */

      }
      @media (min-width: 811px) and (max-width:820px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 500px;
  margin-left: 161px;
   margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 25%;
        margin-left: 250px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 60%;
        margin-left: 118px;
        text-align: center;
      }

    

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 220px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 161px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 500px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 400px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */
/* branding */

.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 365px;
        margin-left: 16px;
      }

    .bom .synven2 {
        width: 365px;
        margin-left: -260px;
        margin-top: 200px;
      }

   .bom .jiff2 {
        width: 365px;
        margin-top: 25px;
        margin-left: 16px;
      }

  .bom .tailor2 {
        width: 365px;
        margin-left: -260px;
        margin-top: 200px;
      }

  .bom .nws2 {
        width: 365px;
        margin-top:20px;
        margin-left: 16px;
      }


/* branding ends */



    .bosscab {
      width: 365px;
      margin-left: 16px;
    }

    

    .synven {
      width: 365px;
      margin-left: -260px;
      margin-top: 200px;
    }

   
   
    .jiff {
      width: 365px;
      margin-top: 15px;
      margin-left: 16px;
    }


    .tailor {
      width: 365px;
      margin-left: -260px;
      margin-top: 200px;
    }


    .nws {
      width: 365px;
      margin-top: 20px;
      margin-left: 16px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 150px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 2rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

      }
      @media (min-width: 821px) and (max-width:835px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 520px;
  margin-left: 161px;
   margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

  /* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 36rem;
      }

      .lead {
        font-size: 12px;
        width: 25%;
        margin-left: 260px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 60%;
        margin-left: 118px;
        text-align: center;
      }


      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 240px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 161px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 520px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 360px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

/* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 375px;
        margin-left: 14px;
      }

    .bom .synven2 {
        width: 375px;
        margin-left: -255px;
        margin-top: 195px;
      }

   .bom .jiff2 {
        width: 375px;
        margin-top: 18px;
        margin-left: 14px;
      }

  .bom .tailor2 {
        width: 375px;
        margin-left: -255px;
        margin-top: 195px;
      }

  .bom .nws2 {
        width: 375px;
        margin-top:15px;
        margin-left: 14px;
      }

/* branding ends */


      /* section2 art3 ends */

    .bosscab {
      width: 375px;
      margin-left: 14px;
    }

    

    .synven {
      width: 375px;
      margin-left: -255px;
      margin-top: 192px;
    }

   
   
    .jiff {
      width: 375px;
      margin-top: 15px;
      margin-left: 14px;
    }


    .tailor {
      width: 375px;
      margin-left: -255px;
      margin-top: 190px;
    }


    .nws {
      width: 375px;
      margin-top: 15px;
      margin-left: 14px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 150px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 2rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

      }

      @media (min-width: 836px) and (max-width:853px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 500px;
  margin-left: 165px;
   margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 37rem;
      }

      .lead {
        font-size: 12px;
        width: 25%;
        margin-left: 260px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 55%;
        margin-left: 140px;
        text-align: center;
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 240px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 161px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 520px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 380px;
        margin-left: 15px;
      }

    .bom .synven2 {
        width: 380px;
        margin-left: -250px;
        margin-top: 192px;
      }

   .bom .jiff2 {
        width: 380px;
        margin-top: 18px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 380px;
        margin-left: -250px;
        margin-top: 192px;
      }

  .bom .nws2 {
        width: 380px;
        margin-top:15px;
        margin-left: 12px;
      }

/* branding ends */

      /* section2 art3 ends */

    .bosscab {
      width: 380px;
      margin-left: 15px;
    }

    .synven {
      width: 380px;
      margin-left: -250px;
      margin-top: 190px;
    }


    .jiff {
      width: 380px;
      margin-top: 15px;
      margin-left: 15px;
    }


    .tailor {
      width: 380px;
      margin-left: -250px;
      margin-top: 190px;
    }


    .nws {
      width: 380px;
      margin-top: 15px;
      margin-left: 12px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 150px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 2rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

      }
      @media (min-width: 854px) and (max-width:875px) {

              /* scrolling text */

              #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

  /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 520px;
  margin-left: 181px;
   margin-top: -43rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */



/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 22%;
        margin-left: 280px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 185px;
        text-align: center;
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 250px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 181px;
        margin-top: -43rem;
        width: 10%;
      }

      .art2 img {
        width: 520px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 400px;
        margin-left: 10px;
      }

    .bom .synven2 {
        width: 400px;
        margin-left: -240px;
        margin-top: 175px;
      }

   .bom .jiff2 {
        width: 400px;
        margin-top: 22px;
        margin-left: 15px;
      }

  .bom .tailor2 {
        width: 400px;
        margin-left: -240px;
        margin-top: 175px;
      }

  .bom .nws2 {
        width: 400px;
        margin-top:15px;
        margin-left: 15px;
      }

/* branding ends */

      /* section2 art3 ends */

    .bosscab {
      width: 400px;
      margin-left: 10px;
    }


    .synven {
      width: 400px;
      margin-left: -240px;
      margin-top: 175px;
    }

  
    .jiff {
      width: 400px;
      margin-top: 15px;
      margin-left: 15px;
    }


    .tailor {
      width: 400px;
      margin-left: -240px;
      margin-top: 175px;
    }


    .nws {
      width: 400px;
      margin-top: 12px;
      margin-left: 12px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 2rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 876px) and (max-width:901px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 520px;
  margin-left: 185px;
   margin-top: -42rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */



/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 22%;
        margin-left: 300px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 185px;
        text-align: center;
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 270px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 185px;
        margin-top: -43rem;
        width: 10%;
      }

      .art2 img {
        width: 520px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

/* branding */

.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 400px;
        margin-left: 20px;
      }

    .bom .synven2 {
        width: 400px;
        margin-left: -225px;
        margin-top: 178px;
      }

   .bom .jiff2 {
        width: 400px;
        margin-top: 25px;
        margin-left: 15px;
      }

  .bom .tailor2 {
        width: 400px;
        margin-left: -230px;
        margin-top: 180px;
      }

  .bom .nws2 {
        width: 400px;
        margin-top:15px;
        margin-left: 20px;
      }

/* branding ends */

      /* section2 art3 ends */

    .bosscab {
      width: 400px;
      margin-left: 20px;
    }

    .synven {
      width: 400px;
      margin-left: -225px;
      margin-top: 178px;
    }

   
   
    .jiff {
      width: 400px;
      margin-top: 15px;
      margin-left: 15px;
    }


    .tailor {
      width: 400px;
      margin-left: -230px;
      margin-top: 178px;
    }


    .nws {
      width: 400px;
      margin-top: 15px;
      margin-left: 20px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 4rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}

@media (min-width: 902px) and (max-width:925px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 530px;
  margin-left: 200px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 23%;
        margin-left: 290px;
        text-align: center;
      
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 170px;
        text-align: center;

        
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 260px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 200px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 530px;
        
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */

      /* branding */

.bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 420px;
        margin-left: 15px;
      }

    .bom .synven2 {
        width: 420px;
        margin-left: -225px;
        margin-top: 165px;
      }

   .bom .jiff2 {
        width: 420px;
        margin-top: 19px;
        margin-left: 15px;
      }

  .bom .tailor2 {
        width: 420px;
        margin-left: -225px;
        margin-top: 163px;
      }

  .bom .nws2 {
        width: 420px;
        margin-top:15px;
        margin-left: 15px;
      }

/* branding ends */

    .bosscab {
      width: 420px;
      margin-left: 15px;
    }

    .synven {
      width: 420px;
      margin-left: -225px;
      margin-top: 162px;
    }
   
    .jiff {
      width: 420px;
      margin-top: 15px;
      margin-left: 15px;
    }


    .tailor {
      width: 420px;
      margin-left: -225px;
      margin-top: 159px;
    }


    .nws {
      width: 420px;
      margin-top: 15px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 4rem;

    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
      
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;
      

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 926px) and (max-width:939px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -170px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .navicon{
          background-color: #fff;
        }

        body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        
        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 220px;
        margin-top: -45rem;
}


        .image{
  width: 50px;
}

        
/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 36rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 330px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 190px;
        text-align: center;
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 280px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -45rem;
        width: 10%;
      }

      .art2 img {
        width: 540px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */

      /* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 430px;
        margin-left: 12px;
      }

    .bom .synven2 {
        width: 430px;
        margin-left: -210px;
        margin-top: 159px;
      }

   .bom .jiff2 {
        width: 430px;
        margin-top: 19px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 430px;
        margin-left: -210px;
        margin-top: 155px;
      }

  .bom .nws2 {
        width: 430px;
        margin-top:17px;
        margin-left: 15px;
      }

/* branding ends */


    .bosscab {
      width: 430px;
      margin-left: 12px;
    }

    

    .synven {
      width: 430px;
      margin-left: -210px;
      margin-top: 155px;
    }

   
   
    .jiff {
      width: 430px;
      margin-top: 15px;
      margin-left: 12px;
    }


    .tailor {
      width: 430px;
      margin-left: -210px;
      margin-top: 150px;
    }


    .nws {
      width: 430px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 940px) and (max-width:957px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 32%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 32%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 32%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */

body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }
        
        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 220px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }



    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 330px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 190px;
        text-align: center;
      }

      #brk{
          width: 90%;
          margin-left: 22px;
        }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 320px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 540px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */

      
      /* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 440px;
        margin-left: 12px;
      }

    .bom .synven2 {
        width: 440px;
        margin-left: -200px;
        margin-top: 152px;
      }

   .bom .jiff2 {
        width: 440px;
        margin-top: 17px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 440px;
        margin-left: -200px;
        margin-top: 150px;
      }

  .bom .nws2 {
        width: 440px;
        margin-top:15px;
        margin-left: 15px;
      }

/* branding ends */



    .bosscab {
      width: 440px;
      margin-left: 12px;
    }

    

    .synven {
      width: 440px;
      margin-left: -200px;
      margin-top: 148px;
    }

   
   
    .jiff {
      width: 440px;
      margin-top: 15px;
      margin-left: 12px;
    }


    .tailor {
      width: 440px;
      margin-left: -200px;
      margin-top: 145px;
    }


    .nws {
      width: 440px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 958px) and (max-width:980px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */

body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 220px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */




/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 340px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 220px;
        text-align: center;
      }

      #brk{
          width: 90%;
          margin-left: 23px;
        }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 320px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 540px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */



    .bosscab {
      width: 450px;
      margin-left: 14px;
    }

    

    .synven {
      width: 450px;
      margin-left: -190px;
      margin-top: 140px;
    }

   
   
    .jiff {
      width: 450px;
      margin-top: 15px;
      margin-left: 12px;
    }


    .tailor {
      width: 450px;
      margin-left: -190px;
      margin-top: 140px;
    }


    .nws {
      width: 450px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 958px) and (max-width:980px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -170px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */

body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 220px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }

/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 340px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 200px;
        text-align: center;
      }

      #brk{
          width: 90%;
          margin-left: 23px;
        }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 320px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 540px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */


      /* branding */

      .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 450px;
        margin-left: 14px;
      }

    .bom .synven2 {
        width: 450px;
        margin-left: -190px;
        margin-top: 145px;
      }

   .bom .jiff2 {
        width: 450px;
        margin-top: 18px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 450px;
        margin-left: -190px;
        margin-top: 145px;
      }

  .bom .nws2 {
        width: 450px;
        margin-top:15px;
        margin-left: 15px;
      }

/* branding ends */


    .bosscab {
      width: 450px;
      margin-left: 14px;
    }

    

    .synven {
      width: 450px;
      margin-left: -190px;
      margin-top: 140px;
    }

   
   
    .jiff {
      width: 450px;
      margin-top: 15px;
      margin-left: 12px;
    }


    .tailor {
      width: 450px;
      margin-left: -190px;
      margin-top: 140px;
    }


    .nws {
      width: 450px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 981px) and (max-width:990px) {

      /* scrolling text */

      #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

  /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */

body.dark .art4 li{
          color: #c4c4c4;
        }

        body.dark .art4 h3{
          color: white;
        }

        body.dark .art5 li{
          color: #c4c4c4;
        }

        body.dark .art5 h3{
          color: white;
        }

        body.dark .art6 li{
          color: #c4c4c4;
        }

        body.dark .art6 h3{
          color: white;
        }

        body.dark .art7 li{
          color: #c4c4c4;
        }

        body.dark .art7 h3{
          color: white;
        }

        body.dark .art8 li{
          color: #c4c4c4;
        }

        body.dark .art8 h3{
          color: white;
        }

        body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left: 220px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 35rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 340px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 50%;
        margin-left: 200px;
        text-align: center;
      }

      #brk{
          width: 90%;
          margin-left: 23px;
        }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 310px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -44rem;
        width: 10%;
      }

      .art2 img {
        width: 540px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;
        border-bottom: 2px solid #168bff;
      }

      /* section2 art3 ends */

 /* branding */

 .bom #product{
          border-bottom: none;
        }

        .bom #branding{
          border-bottom: 2px solid #168bff;
        }

      .bom .bosscab2{
        width: 460px;
        margin-left: 14px;
      }

    .bom .synven2 {
        width: 460px;
        margin-left: -180px;
        margin-top: 140px;
      }

   .bom .jiff2 {
        width: 460px;
        margin-top: 15px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 460px;
        margin-left: -180px;
        margin-top: 138px;
      }

  .bom .nws2 {
        width: 460px;
        margin-top:16px;
        margin-left: 14px;
      }

/* branding ends */


    .bosscab {
      width: 460px;
      margin-left: 14px;
    }

    .synven {
      width: 460px;
      margin-left: -180px;
      margin-top: 135px;
    }

    .jiff {
      width: 460px;
      margin-top: 15px;
      margin-left: 12px;
    }


    .tailor {
      width: 460px;
      margin-left: -180px;
      margin-top: 132px;
    }


    .nws {
      width: 460px;
      margin-top: 12px;
      margin-left: 14px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 8rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -100px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 991px) and (max-width:1000px) {

        /* scrolling text */

        #brk{
          width: 80%;
          margin-left: 42px;
        }

        #star{
          width: 80%;
          margin-left: 42px;
        }

        #solve{
          width: 80%;
          margin-left: 42px;
        }

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 550px;
  margin-left: 220px;
        margin-top: -44rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

    /* art1 starts */


    .art1 {
        margin-left: 4rem;
        margin-top: 36rem;
      }

      .lead {
        font-size: 12px;
        width: 20%;
        margin-left: 350px;
        text-align: center;
      }

      .passion {
        font-size: 31px;
        width: 45%;
        margin-left: 230px;
        text-align: center;
      }

      .blu-btn {
        width: 15rem;
        height: 58px;
        letter-spacing: 2px;
        font-size: 11px;
        margin-left: 320px;
        margin-top: 3rem;
      }

      .blu-btn span {
        margin-left: 8px;
      }

      .art1 i {
        color: #fff;
        margin-left: 10px;
      }

      /* art1 styling ends */

      /* art2 syling */

      .art2 {
        margin-left: 220px;
        margin-top: -45rem;
        width: 10%;
      }

      .art2 img {
        width: 550px;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 390px;
        margin-left: 10px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 60px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */


 /* branding */

      .bom .bosscab2{
        width: 460px;
        margin-left: 14px;
      }

    .bom .synven2 {
        width: 460px;
        margin-left: -180px;
        margin-top: 140px;
      }

   .bom .jiff2 {
        width: 460px;
        margin-top: 15px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 460px;
        margin-left: -180px;
        margin-top: 138px;
      }

  .bom .nws2 {
        width: 460px;
        margin-top:16px;
        margin-left: 14px;
      }

/* branding ends */

    .bosscab {
      width: 460px;
      margin-left: 14px;
    }

    .synven {
      width: 460px;
      margin-left: -180px;
      margin-top: 135px;
    }

    .jiff {
      width: 460px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 460px;
      margin-left: -180px;
      margin-top: 130px;
    }

    .nws {
      width: 460px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 3rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1001px) and (max-width:1019px) {

   /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -120px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 320px;
  margin-left:  39rem;

}

        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 100px;
      }


      .art1 {
        margin-left: 4rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      .art2 img {
        width: 320px;
        margin-left: 10px;
      }

      .art2 {
        margin-left:  39rem;
        margin-top: -25rem;
      }
 */



      /* section 2 art3 starts */

      .art3 {
        margin-top: 380px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 140px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

      /* branding */

      .bom .bosscab2{
        width: 470px;
        margin-left: 14px;
      }

    .bom .synven2 {
        width: 470px;
        margin-left: -170px;
        margin-top: 130px;
      }

   .bom .jiff2 {
        width: 470px;
        margin-top: 19px;
        margin-left: 12px;
      }

  .bom .tailor2 {
        width: 470px;
        margin-left: -170px;
        margin-top: 130px;
      }

  .bom .nws2 {
        width: 470px;
        margin-top:16px;
        margin-left: 15px;
      }

/* branding ends */

    .bosscab {
      width: 470px;
      margin-left: 14px;
    }

    .synven {
      width: 470px;
      margin-left: -170px;
      margin-top: 130px;
    }

    .jiff {
      width: 470px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 470px;
      margin-left: -170px;
      margin-top: 125px;
    }

    .nws {
      width: 470px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}

@media (min-width: 1020px) and (max-width:1040px) {

   /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 35%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 35%;
  }



/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 340px;
  margin-left:  643px;
}


        .image{
  width: 50px;
}

/* dark theme ends */



/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 100px;
      }


      .art1 {
        margin-left: 4rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 340px;
        margin-left: 35px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -25rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 360px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding starts */

.bom .bosscab2 {
      width: 480px;
      margin-left: 14px;
    }

  .bom  .synven2 {
      width: 480px;
      margin-left: -160px;
      margin-top: 123px;
    }

   .bom .jiff2 {
      width: 480px;
      margin-top: 18px;
      margin-left: 12px;
    }

   .bom .tailor2 {
      width: 480px;
      margin-left: -160px;
      margin-top: 125px;
    }

   .bom .nws2 {
      width: 480px;
      margin-top: 15px;
      margin-left: 15px;
    }

/* branding ends */

    .bosscab {
      width: 480px;
      margin-left: 14px;
    }

    .synven {
      width: 480px;
      margin-left: -160px;
      margin-top: 120px;
    }

    .jiff {
      width: 480px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 480px;
      margin-left: -160px;
      margin-top: 120px;
    }

    .nws {
      width: 480px;
      margin-top: 12px;
      margin-left: 15px;
    }
  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1041px) and (max-width:1060px) {

     /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 33%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -100px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 33%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 360px;
  margin-left:  645px;

}


        .image{
  width: 50px;
}

/* dark theme ends */



/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 100px;
      }


      .art1 {
        margin-left: 4rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 360px;
        margin-left:  38px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -25rem;
      }
 */



      /* section 2 art3 starts */

      .art3 {
        margin-top: 350px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding starts */

.bom .bosscab2 {
      width: 483px;
      margin-left: 14px;
    }

  .bom  .synven2 {
      width: 483px;
      margin-left: -150px;
      margin-top: 120px;
    }

 .bom .jiff2 {
      width: 483px;
      margin-top: 18px;
      margin-left: 12px;
    }

   .bom .tailor2 {
      width: 483px;
      margin-left: -150px;
      margin-top: 125px;
    }

  .bom .nws2 {
      width: 483px;
      margin-top: 15px;
      margin-left: 15px;
    }

/* branding ends */

    .bosscab {
      width: 483px;
      margin-left: 14px;
    }

    .synven {
      width: 483px;
      margin-left: -150px;
      margin-top: 120px;
    }

    .jiff {
      width: 483px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 483px;
      margin-left: -150px;
      margin-top: 120px;
    }

    .nws {
      width: 483px;
      margin-top: 12px;
      margin-left: 15px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1061px) and (max-width:1080px) {

     /* art hover */

     .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -80px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -80px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 33%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -80px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -80px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 33%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 390px;
  margin-left:  643px;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 100px;
      }


      .art1 {
        margin-left: 4rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 390px;
        margin-left:  35px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -25rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 240px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */
/* branding starts */

.bom .bosscab2 {
      width: 503px;
      margin-left: 14px;
    }

   .bom .synven2 {
      width: 503px;
      margin-left: -140px;
      margin-top: 110px;
    }

   .bom .jiff2 {
      width: 503px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .bom .tailor2 {
      width: 503px;
      margin-left: -140px;
      margin-top: 110px;
    }

    .bom .nws2 {
      width: 503px;
      margin-top: 12px;
      margin-left: 14px;
    }

/* branding ends */

    .bosscab {
      width: 503px;
      margin-left: 14px;
    }

    .synven {
      width: 503px;
      margin-left: -140px;
      margin-top: 105px;
    }

    .jiff {
      width: 503px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 503px;
      margin-left: -140px;
      margin-top: 103px;
    }

    .nws {
      width: 503px;
      margin-top: 12px;
      margin-left: 14px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 6rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1081px) and (max-width:1105px) {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -60px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -60px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 33%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -60px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -60px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 33%;
  }

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 410px;
  margin-left:  638px;
        margin-top: -400px;
}
        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 170px;
      }


      .art1 {
        margin-left: 4rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 410px;
        margin: -10px 0 0 30px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -26rem;
      }
 */



      /* section 2 art3 starts */

      .art3 {
        margin-top: 230px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 180px;
        margin-top: 200px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

      /* branding starts */

      .bom .bosscab2 {
      width: 516px;
      margin-left: 14px;
    }

  .bom .synven2 {
      width: 516px;
      margin-left: -130px;
      margin-top: 99px;
    }

    .bom .jiff2 {
      width: 516px;
      margin-top: 17px;
      margin-left: 12px;
    }

  .bom .tailor2 {
      width: 516px;
      margin-left: -130px;
      margin-top: 100px;
    }

 .bom .nws2 {
      width: 516px;
      margin-top: 12px;
      margin-left: 14px;
    }

    /* branding ends */

    .bosscab {
      width: 516px;
      margin-left: 14px;
    }

    .synven {
      width: 516px;
      margin-left: -130px;
      margin-top: 95px;
    }

    .jiff {
      width: 516px;
      margin-top: 15px;
      margin-left: 12px;
    }

    .tailor {
      width: 516px;
      margin-left: -130px;
      margin-top: 93px;
    }

    .nws {
      width: 516px;
      margin-top: 12px;
      margin-left: 14px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 12rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 6rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -170px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1106px) and (max-width:1130px) {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -30px;
  width: 33%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -30px;
  width: 33%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 33%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 33%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -30px;
  width: 33%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 33%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -30px;
  width: 33%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 33%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 440px;
  margin-left:  638px;
        margin-top: -465px;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }

/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 190px;
      }

      .art1 {
        margin-left: 5rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      .art2 img {
        width: 440px;
        margin-left: 30px;
        margin-top: -50px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -26rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 230px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding starts */


.bom .bosscab2 {
      width: 520px;
      margin-left: 18px;
    }

  .bom .synven2 {
      width: 520px;
      margin-left: -110px;
      margin-top: 95px;
    }

   .bom .jiff2 {
      width: 520px;
      margin-top: 18px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 520px;
      margin-left: -110px;
      margin-top: 95px;
    }

 .bom .nws2 {
      width: 520px;
      margin-top: 16px;
      margin-left: 18px;
    }
/* branding ends */


    .bosscab {
      width: 520px;
      margin-left: 18px;
    }

    .synven {
      width: 520px;
      margin-left: -110px;
      margin-top: 90px;
    }

    .jiff {
      width: 520px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 520px;
      margin-left: -110px;
      margin-top: 90px;
    }

    .nws {
      width: 520px;
      margin-top: 15px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 15rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -4rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -190px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1131px) and (max-width:1155px) {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -30px;
  width: 30%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -30px;
  width: 30%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 30%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 30%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -30px;
  width: 30%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -30px;
  width: 30%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 30%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 440px;
  margin-left:  638px;
        margin-top: -445px;
}

        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }

/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 180px;
      }

      .art1 {
        margin-left: 5rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      .art2 img {
        width: 440px;
        margin: -30px 0 0 30px;
      }

      .art2 {
        margin-left:  38rem;
        margin-top: -26rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 180px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding starts */
.bom .bosscab2 {
      width: 530px;
      margin-left: 18px;
    }

   .bom .synven2 {
      width: 530px;
      margin-left: -100px;
      margin-top: 90px;
    }
   
   .bom  .jiff2 {
      width: 530px;
      margin-top: 17px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 530px;
      margin-left: -100px;
      margin-top: 90px;
    }

    .bom .nws2 {
      width: 530px;
      margin-top: 15px;
      margin-left: 18px;
    }


/* branding ends */


    .bosscab {
      width: 530px;
      margin-left: 18px;
    }

    .synven {
      width: 530px;
      margin-left: -100px;
      margin-top: 85px;
    }
   
    .jiff {
      width: 530px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 530px;
      margin-left: -100px;
      margin-top: 85px;
    }

    .nws {
      width: 530px;
      margin-top: 12px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 15rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -4rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -190px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1156px) and (max-width:1180px) {

/* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: -10px;
  width: 30%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: -10px;
  width: 30%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 30%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 30%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: -10px;
  width: 30%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: -10px;
  width: 30%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 30%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 460px;
  margin-left:  650px;
  margin-top: -448px;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 180px;
      }

      .art1 {
        margin-left: 5rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 57%;
      }

      .art2 img {
        width: 460px;
        margin: -40px 0 0 20px;
      }

      .art2 {
        margin-left:  40rem;
        margin-top: -26rem;
      }
 
      /* section 2 art3 starts */

      .art3 {
        margin-top: 100px;
        margin-left: 80px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: 100px;
      }

      .art3 li {
        display: inline-block;
        margin-left: -50px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */
/* branding */

.bom .bosscab2 {
      width: 540px;
      margin-left: 18px;
    }

  .bom .synven2 {
     width: 540px;
      margin-left: -90px;
      margin-top: 85px;
    }

   .bom .jiff2 {
      width: 540px;
      margin-top: 18px;
      margin-left: 18px;
    }

  .bom .tailor2 {
      width: 540px;
      margin-left: -90px;
      margin-top: 85px;
    }

  .bom  .nws2 {
      width: 540px;
      margin-top: 12px;
      margin-left: 18px;
    }

/* branding ends */


    .bosscab {
      width: 540px;
      margin-left: 18px;
    }

    .synven {
     width: 540px;
      margin-left: -90px;
      margin-top: 80px;
    }

    .jiff {
      width: 540px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 540px;
      margin-left: -90px;
      margin-top: 80px;
    }

    .nws {
      width: 540px;
      margin-top: 12px;
      margin-left: 18px;
    }
  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 16rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -210px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1181px) and (max-width:1200px) {

  /* art hover */

.art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: 10px;
  width: 30%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: 10px;
  width: 30%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 30%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 30%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: 10px;
  width: 30%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: 10px;
  width: 30%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 30%;
  }

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 460px;
  margin-left:  670px;
  margin-top: -456px;
}

        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }

/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 180px;
      }

      .art1 {
        margin-left: 6rem;
        margin-top: 180px;
      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 460px;
        margin: -40px 0 0 20px;
      }

      .art2 {
        margin-left:  40rem;
        margin-top: -26rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 300px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 150px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */
/* branding */
.bom .bosscab2 {
      width: 550px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 550px;
      margin-left: -80px;
      margin-top: 75px;
    }
   
  .bom .jiff2 {
      width: 550px;
      margin-top: 17px;
      margin-left: 18px;
    }

 .bom .tailor2 {
      width: 550px;
      margin-left: -80px;
      margin-top: 76px;
    }

   .bom .nws2 {
      width: 550px;
      margin-top: 14px;
      margin-left: 18px;
    }
  

/* branding ends */

    .bosscab {
      width: 550px;
      margin-left: 18px;
    }

    .synven {
     width: 550px;
      margin-left: -80px;
      margin-top: 70px;
    }
   
    .jiff {
      width: 550px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 550px;
      margin-left: -80px;
      margin-top: 70px;
    }

    .nws {
      width: 550px;
      margin-top: 12px;
      margin-left: 18px;
    }
  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 16rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -1rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -210px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1201px) and (max-width:1230px) {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: 30px;
  width: 30%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: 30px;
  width: 30%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 80px;
  width: 30%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 100px;
       width: 30%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: 30px;
  width: 30%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 100px;
  width: 30%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: 30px;
  width: 30%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 80px;
   width: 30%;
  }

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  686px;
  margin-top: -460px;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 200px;
      }


      .art1 {
        margin-left: 7rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;
      }

      .art2 img {
        width: 480px;
        margin: -40px 0 0 20px;
      }

      .art2 {
        margin-left:  43rem;
        margin-top: -26rem;
      }
 */

      /* section 2 art3 starts */

      .art3 {
        margin-top: 230px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -220px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding */
  .bom .bosscab2 {
      width: 570px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 570px;
      margin-left: -65px;
      margin-top: 65px;
    }

   .bom .jiff2 {
      width: 570px;
      margin-top: 15px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 570px;
      margin-left: -65px;
      margin-top: 65px;
    }

  .bom .nws2 {
      width: 570px;
      margin-top: 12px;
      margin-left: 18px;
    }

/* branding ends */

    .bosscab {
      width: 570px;
      margin-left: 18px;
    }

    .synven {
     width: 570px;
      margin-left: -65px;
      margin-top: 60px;
    }

    .jiff {
      width: 570px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 570px;
      margin-left: -65px;
      margin-top: 60px;
    }

    .nws {
      width: 570px;
      margin-top: 12px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 18rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -250px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1231px) and (max-width:1260px) {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  margin-left: 120px;
  width: 27%;
} 

.art5:hover .hov-er {
  display: block;
  margin-left: 60px;
  width: 27%;
} 

.art6:hover .hov-er {
  display: block;
  margin-left: 120px;
  width: 27%;
} 

.art7:hover .hov-er {
  display: block;
  margin-left: 60px;
  width: 27%;
} 

.art8:hover .hov-er {
  display: block;
  margin-left: 120px;
  width: 27%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       margin-left: 120px;
       width: 27%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  margin-left: 60px;
  width: 27%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  margin-left: 120px;
  width: 27%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  margin-left: 60px;
  width: 27%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
    margin-left: 120px;
   width: 27%;
  }


/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  44rem;
  margin-top: -455px;
}

        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 230px;
      }


      .art1 {
        margin-left: 8rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 55%;

      }

      .art2 img {
        width: 480px;
        margin: -40px 0 0 20px;
      }

      .art2 {
        margin-left:  43rem;
        margin-top: -26rem;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 170px;
        margin-left: 150px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -200px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding */

  .bom .bosscab2 {
      width: 580px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 580px;
      margin-left: -48px;
      margin-top: 55px;
    }

   
   .bom .jiff2 {
      width: 580px;
      margin-top: 23px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 580px;
      margin-left: -48px;
      margin-top: 56px;
    }

   .bom .nws2 {
      width: 580px;
      margin-top: 12px;
      margin-left: 18px;
    }

/* branding ends */
    .bosscab {
      width: 580px;
      margin-left: 18px;
    }

    .synven {
     width: 580px;
      margin-left: -48px;
      margin-top: 51px;
    }

   
    .jiff {
      width: 580px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 580px;
      margin-left: -48px;
      margin-top: 55px;
    }

    .nws {
      width: 580px;
      margin-top: 12px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 18rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -250px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1261px) and (max-width:1280px) {

/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  45rem;
  margin-top: -455px;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 230px;
      }


      .art1 {
        margin-left: 9rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 50%;
      }

      .art2 img {
        width: 480px;
        margin-left: 30px;
        margin-top: -40px;
      }

      .art2 {
        margin-left:  43rem;
        margin-top: -26rem;
      }

      /* section 2 art3 starts */

      .art3 {
        margin-top: 100px;
        margin-left: 150px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -200px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

      /* branding starts */

      .bosscab {
      width: 590px;
      margin-left: 18px;
    }

    .synven {
     width: 590px;
      margin-left: -38px;
      margin-top: 47px;
    }
   
    .jiff {
      width: 590px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 590px;
      margin-left: -38px;
      margin-top: 47px;
    }

    .nws {
      width: 590px;
      margin-top: 12px;
      margin-left: 18px;
    }

  /* branding ends */

  .bom .bosscab2 {
      width: 590px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 590px;
      margin-left: -38px;
      margin-top: 49px;
    }
   
   .bom .jiff2 {
      width: 590px;
      margin-top: 18px;
      margin-left: 18px;
    }

  .bom .tailor2 {
      width: 590px;
      margin-left: -38px;
      margin-top: 53px;
    }

   .bom .nws2 {
      width: 590px;
      margin-top: 15px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 18rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -250px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1281px) and (max-width:1300px) {
/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  44rem;
  margin-top: -455px;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 230px;
      }


      .art1 {
        margin-left: 9rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 50%;
      }

      .art2 img {
        width: 480px;
        margin: -40px 0 0 26px;
      }

      .art2 {
        margin-left:  43rem;
        margin-top: -26rem;
      }
 */



      /* section 2 art3 starts */

      .art3 {
        margin-top: 350px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -200px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding */
.bom .bosscab2 {
      width: 600px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 600px;
      margin-left: -28px;
      margin-top: 42px;
    }

   .bom .jiff2 {
      width: 600px;
      margin-top: 18px;
      margin-left: 18px;
    }

  .bom .tailor2 {
      width: 600px;
      margin-left: -28px;
      margin-top: 43px;
    }

   .bom .nws2 {
      width: 600px;
      margin-top: 15px;
      margin-left: 18px;
    }


/* branding ends */

    .bosscab {
      width: 600px;
      margin-left: 18px;
    }

    .synven {
     width: 600px;
      margin-left: -28px;
      margin-top: 40px;
    }

    .jiff {
      width: 600px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 600px;
      margin-left: -28px;
      margin-top: 40px;
    }

    .nws {
      width: 600px;
      margin-top: 12px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 18rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -250px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1301px) and (max-width:1320px) {
/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  45rem;
  margin-top: -28rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */

/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 230px;
      }


      .art1 {
        margin-left: 9rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 50%;
      }

      .art2 img {
        width: 480px;
        margin-top: -40px;
      }

      .art2 {
        margin-left:  45rem;
        margin-top: -26rem;
      }
 */



      /* section 2 art3 starts */

      .art3 {
        margin-top: 370px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -150px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

      /* branding */

      .bom .bosscab2 {
      width: 610px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 610px;
      margin-left: -18px;
      margin-top: 35px;
    }
   
   .bom .jiff2 {
      width: 610px;
      margin-top: 25px;
      margin-left: 18px;
    }

    .bom .tailor2 {
      width: 610px;
      margin-left: -18px;
      margin-top: 35px;
    }

   .bom .nws2 {
      width: 610px;
      margin-top: 16px;
      margin-left: 18px;
    }

      /* branding ends */

    .bosscab {
      width: 610px;
      margin-left: 18px;
    }

    .synven {
     width: 610px;
      margin-left: -18px;
      margin-top: 30px;
    }
   
    .jiff {
      width: 610px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 610px;
      margin-left: -18px;
      margin-top: 30px;
    }

    .nws {
      width: 610px;
      margin-top: 13px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 19rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -280px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1321px) and (max-width:1349px) {
/* dark theme starts */
body.dark .logo-dark{
  display: block;
  width: 50px;
}


body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  50rem;
  margin-top: -28rem;
}


        .image{
  width: 50px;
}

/* dark theme ends */


/* preloader */

.preloader {
        height: 100%;
      }


/* switcher theme */

.switcher-minimize-button {
        height: 40px;
        width: 50px;
      }
      .position-fixed-right {
        top: 65%;
      }

      .sec1 {
        margin-top: 230px;
      }


      .art1 {
        margin-left: 10rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 50%;
      }

      .art2 img {
        width: 480px;
        margin-top: -70px;
      }

      .art2 {
        margin-left:  50rem;
        margin-top: -24rem;
      }
 */


      /* section 2 art3 starts */

      .art3 {
        margin-top: 300px;
        margin-left: -100px;
      }

      .art3 a {
        line-height: 20px;
        font-size: 14px;
        margin-left: -150px;
      }

      .art3 li {
        display: inline-block;
        margin-left: 190px;
        margin-top: 120px;
      }

      #product {
        color: #168bff;

      }

      /* section2 art3 ends */

/* branding */


  .bom .bosscab2 {
      width: 625px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 625px;
      margin-left: -10px;
      margin-top: 24px;
    }

   .bom .jiff2 {
      width: 625px;
      margin-top: 18px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 625px;
      margin-left: -10px;
      margin-top: 25px;
    }

  .bom  .nws2 {
      width: 625px;
      margin-top: 17px;
      margin-left: 18px;
    }

/* branding ends */

    .bosscab {
      width: 625px;
      margin-left: 18px;
    }

    .synven {
     width: 625px;
      margin-left: -10px;
      margin-top: 20px;
    }

    .jiff {
      width: 625px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 625px;
      margin-left: -10px;
      margin-top: 20px;
    }

    .nws {
      width: 625px;
      margin-top: 13px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 22rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -2rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -280px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1361px) and (max-width:1380px) {

/* preloader */

.preloader {
        height: 100%;
      }

    .bosscab {
      width: 645px;
      margin-left: 18px;
    }

    .synven {
     width: 645px;
      margin-left: 12px;
      margin-top: 10px;
    }
   
   
    .jiff {
      width: 645px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 645px;
      margin-left: 12px;
      margin-top: 10px;
    }

    .nws {
      width: 645px;
      margin-top: 13px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 22rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -4rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1381px) and (max-width:1400px) {

/* preloader */

.preloader {
        height: 100%;
      }

      /* branding  */

    .bom  .bosscab2 {
      width: 656px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 656px;
      margin-left: 20px;
      margin-top: 5px;
    }
   
   .bom .jiff2 {
      width: 656px;
      margin-top: 18px;
      margin-left: 18px;
    }

   .bom .tailor2 {
      width: 656px;
      margin-left: 20px;
      margin-top: 5px;
    }

   .bom .nws2 {
      width: 656px;
      margin-top: 16px;
      margin-left: 18px;
    }

      /* branding ends */

    .bosscab {
      width: 656px;
      margin-left: 18px;
    }

    .synven {
     width: 656px;
      margin-left: 20px;
      margin-top: 2px;
    }
   
    .jiff {
      width: 656px;
      margin-top: 15px;
      margin-left: 18px;
    }


    .tailor {
      width: 656px;
      margin-left: 20px;
      margin-top: 2px;
    }

    .nws {
      width: 656px;
      margin-top: 13px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 22rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 80%;
      margin-left: -4rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1401px) and (max-width:1420px) {

/* preloader */

.preloader {
        height: 100%;
      }

/* branding */

   .bom .bosscab2 {
      width: 665px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 665px;
      margin-left: 30px;
      margin-top: -2px;
    }
   
   .bom .jiff2 {
      width: 665px;
      margin-top: 18px;
      margin-left: 18px;
    }

  .bom .tailor2 {
      width: 665px;
      margin-left: 30px;
      margin-top: -3px;
    }

   .bom .nws2 {
      width: 665px;
      margin-top: 13px;
      margin-left: 18px;
    }

/* branding ends */


    .bosscab {
      width: 665px;
      margin-left: 18px;
    }

    .synven {
     width: 665px;
      margin-left: 30px;
      margin-top: -2px;
    }
   
    .jiff {
      width: 665px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 665px;
      margin-left: 30px;
      margin-top: -2px;
    }

    .nws {
      width: 665px;
      margin-top: 13px;
      margin-left: 18px;
    }

    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 22rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -7rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1421px) and (max-width:1444px) {

/* preloader */

.preloader {
        height: 100%;
      }

      /* branding */

     .bom .bosscab2 {
      width: 670px;
      margin-left: 18px;
    }

   .bom .synven2 {
     width: 670px;
      margin-left: 40px;
      margin-top: -20px;
    }
   
   .bom .jiff2 {
      width: 670px;
      margin-top: 15px;
      margin-left: 18px;
    }

  .bom  .tailor2 {
      width: 670px;
      margin-left: 40px;
      margin-top: -10px;
    }

  .bom  .nws2 {
      width: 670px;
      margin-top: 13px;
      margin-left: 18px;
    }

      /* branding ends */

    .bosscab {
      width: 675px;
      margin-left: 18px;
    }

    .synven {
     width: 675px;
      margin-left: 40px;
      margin-top: -10px;
    }
   
    .jiff {
      width: 675px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 675px;
      margin-left: 40px;
      margin-top: -10px;
    }

    .nws {
      width: 675px;
      margin-top: 13px;
      margin-left: 18px;
    }
  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 25rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -7rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1445px) and (max-width:1460px) {

/* preloader */

.preloader {
        height: 100%;
      }

      .sec1 {
        margin-top: 300px;
      }

      /* .art1 {
        margin-left: 10rem;
        margin-top: 180px;

      }

      .lead {
        color: #161c2d;
        font-size: 13px;
        letter-spacing: 1.63px;
        font-weight: 800;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
      } */

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      /* .art2 img {
        width: 480px;
      }

      .art2 {
        margin-left:  45rem;
        margin-top: -26rem;
      } */
 
      /* branding */
     .bom .bosscab2 {
      width: 670px;
      margin-left: 35px;
    }

   .bom .synven2 {
     width: 670px;
      margin-left: 50px;
      margin-top: -30px;
    }

   .bom .jiff2 {
      width: 670px;
      margin-top: 15px;
      margin-left: 35px;
    }

   .bom .tailor2 {
      width: 670px;
      margin-left: 50px;
      margin-top: -38px;
    }

  .bom  .nws2 {
      width: 670px;
      margin-top: 13px;
      margin-left: 35px;
    }

      /* branding ends */

    .bosscab {
      width: 685px;
      margin-left: 18px;
    }

    .synven {
     width: 685px;
      margin-left: 50px;
      margin-top: -18px;
    }

    .jiff {
      width: 685px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 685px;
      margin-left: 50px;
      margin-top: -18px;
    }

    .nws {
      width: 685px;
      margin-top: 13px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 25rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -7rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1461px) and (max-width:1480px) {

/* preloader */

.preloader {
        height: 100%;
      }

      .sec1 {
        margin-top: 300px;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      /* branding  */

   .bom .bosscab2 {
      width: 660px;
      margin-left: 45px;
    }

  .bom  .synven2 {
     width: 660px;
      margin-left: 60px;
      margin-top: -22px;
    }
   
   .bom .jiff2 {
      width: 660px;
      margin-top: 19px;
      margin-left: 45px;
    }

   .bom .tailor2 {
      width: 660px;
      margin-left: 60px;
      margin-top: -10px;
    }

   .bom .nws2 {
      width: 660px;
      margin-top: 17px;
      margin-left: 45px;
    }

      /* branding ends */

    .bosscab {
      width: 695px;
      margin-left: 18px;
    }

    .synven {
     width: 695px;
      margin-left: 60px;
      margin-top: -22px;
    }
   
    .jiff {
      width: 695px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 695px;
      margin-left: 60px;
      margin-top: -22px;
    }

    .nws {
      width: 695px;
      margin-top: 13px;
      margin-left: 18px;
    }
  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 25rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -7rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1481px) and (max-width:1505px) {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 23%;
} 

.art5:hover .hov-er {
  display: block;
  width: 23%;
} 

.art6:hover .hov-er {
  display: block;
  width: 23%;
} 

.art7:hover .hov-er {
  display: block;
  width: 23%;
} 

.art8:hover .hov-er {
  display: block;
  width: 23%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 23%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 23%;
  }


/* preloader */

.preloader {
        height: 100%;
      }

      .sec1 {
        margin-top: 300px;
      }

      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      .art3 {
        margin-left: 130px;
      }

      /* branding  */

    .bom  .bosscab2 {
      width: 650px;
      margin-left: 80px;
    }

   .bom .synven2 {
     width: 650px;
      margin-left: 90px;
      /* margin-top: -33px; */
    }
   
  .bom  .jiff2 {
      width: 650px;
      /* margin-top: 15px; */
      margin-left: 80px;
    }

  .bom  .tailor2 {
      width: 650px;
      margin-left: 90px;
      /* margin-top: -33px; */
    }

  .bom .nws2 {
      width: 650px;
      margin-left: 80px;
    }

  
      /* branding ends */

    .bosscab {
      width: 705px;
      margin-left: 18px;
    }

    .synven {
     width: 705px;
      margin-left: 70px;
      margin-top: -33px;
    }
   
    .jiff {
      width: 705px;
      margin-top: 15px;
      margin-left: 18px;
    }

    .tailor {
      width: 705px;
      margin-left: 70px;
      margin-top: -33px;
    }

    .nws {
      width: 695px;
      margin-top: 13px;
      margin-left: 18px;
    }

  
    /* section3 ends */

/* section4 starts */

.section4 {
      margin-top: 180px;
      margin-left: 27rem;
    }

    .blt h2 {
      display: inline-block;
      color: #161c2d;
      font-size: 13px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      font-weight: 700;
      margin-left: 5rem;
      width: 90%;
    }

    .blt h2::before {
      content: url("svg/Oval.svg");
      padding-right: 25px;
    }

    .section4 h1 {
      margin-top: 40px;
      color: #161c2d;
      font-family: "Inter", sans-serif;
      text-align: center;
      font-weight: 700;
      font-size: 60px;
      width: 90%;
      margin-left: -7rem;
    }

    .sig {
      width: 250px;
      margin-top: 50px;
      margin-left: -310px;

    }

    .sig:hover {
      transform: translate(0, -5px);
    }

    .dis {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    footer {
      margin-top: 220px;
      height: 70px;

    }

    footer h3 {
      text-align: center;
      color: #161c2d;
      font-size: 16px;
      letter-spacing: 1.63px;
      font-family: "Inter", sans-serif;
      margin-left: 30px;
      /* width: 10%; */

    }

    /* section4 ends */

}
@media (min-width: 1506px) and (max-width:1564px)  {

    /* art hover */

    .art4:hover .hov-er {
  display: block;
  width: 23%;
} 

.art5:hover .hov-er {
  display: block;
  width: 23%;
} 

.art6:hover .hov-er {
  display: block;
  width: 23%;
} 

.art7:hover .hov-er {
  display: block;
  width: 23%;
} 

.art8:hover .hov-er {
  display: block;
  width: 23%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 23%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 23%;
  }


/* preloader */

.preloader {
        height: 100%;
      }


      .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      /* section4 starts */

    .blt h2 {
      margin-left: 33rem;
    }
         /* section3  */
         .bosscab {
        width: 685px;
        margin-left: -50px;
      }

      .synven {
        width: 685px;
        margin-top: -15px;
      }

      .jiff {
        width: 685px;
        margin-top: 15px;
        margin-left: -50px;
      }

      .tailor {
        width: 685px;
        margin-top: -20px;
      }

      .nws {
        width: 685px;
        margin-top: 20px;
        margin-left: -50px;
      }

/* branding starts */

  .bom .bosscab2 {
        width: 670px;
        margin-left: -50px;
      }

    .bom .synven2 {
        width: 670px;
        margin-top: -15px;
        margin-left: -20px;
      }

    .bom .jiff2 {
        width: 670px;
        margin-top: 15px;
        margin-left: -50px;
      }

    .bom .tailor2 {
        width: 670px;
        margin-top: -20px;
        margin-left: -20px;
      }

   .bom .nws2 {
        width: 670px;
        margin-top: 20px;
        margin-left: -50px;
      }


/* branding stops */

      .section3 {
        margin-top: 50px;
        margin-left: 120px;
      }


      .sec1 {
        margin-top: 300px;
      }


      .art1 {
        margin-left: 10rem;
        margin-top: 180px;

      }
   
/* dark theme starts */



body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  60rem;
        margin-top: -26rem;
}


/* dark theme ends */


      .art2 img {
        width: 480px;
      }

      .art2 {
        margin-left:  60rem;
        margin-top: -26rem;
      }


}
@media (min-width: 1565px) and (max-width:1600px)  {

    /* art hover */

    .art4:hover .hov-er {
  display: block;
  width: 23%;
} 

.art5:hover .hov-er {
  display: block;
  width: 23%;
} 

.art6:hover .hov-er {
  display: block;
  width: 23%;
} 

.art7:hover .hov-er {
  display: block;
  width: 23%;
} 

.art8:hover .hov-er {
  display: block;
  width: 23%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 23%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 23%;
  }


  .passion {
        margin-top: 34px;
        font-size: 60px;
        font-weight: 900;
        font-family: "Inter", sans-serif;
        width: 60%;
      }

      /* section4 starts */

    .blt h2 {
      margin-left: 33rem;
    }

/* preloader */

.preloader {
        height: 100%;
      }

      /* branding */
    .bom  .bosscab2 {
        width: 680px;
        margin-left: -50px;
      }

    .bom .synven2 {
        width: 680px;
        margin-top: -15px;
        margin-left: -20px;
      }

     .bom .jiff2 {
        width: 680px;
        margin-top: 15px;
        margin-left: -50px;
      }

     .bom .tailor2 {
        width: 680px;
        margin-top: -20px;
        margin-left: -20px;
      }

     .bom .nws2 {
        width: 680px;
        margin-top: 20px;
        margin-left: -50px;
      }

         /* section3  */
         .bosscab {
        width: 695px;
        margin-left: -50px;
      }

      .synven {
        width: 695px;
        margin-top: -15px;
      }

      .jiff {
        width: 695px;
        margin-top: 15px;
        margin-left: -50px;
      }

      .tailor {
        width: 695px;
        margin-top: -20px;
      }

      .nws {
        width: 695px;
        margin-top: 20px;
        margin-left: -50px;
      }

      .section3 {
        margin-top: 50px;
        margin-left: 130px;
      }

      .sec1 {
        margin-top: 300px;
      }

      .art1 {
        margin-left: 10rem;
        margin-top: 180px;

      }
   
/* dark theme */
body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  60rem;
        margin-top: -26rem;
}
/* dark theme ends */

      .art2 img {
        width: 480px;
      }

      .art2 {
        margin-left:  60rem;
        margin-top: -26rem;
      }


}
@media (min-width: 1601px) and (max-width:1650px)  {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 23%;
} 

.art5:hover .hov-er {
  display: block;
  width: 23%;
} 

.art6:hover .hov-er {
  display: block;
  width: 23%;
} 

.art7:hover .hov-er {
  display: block;
  width: 23%;
} 

.art8:hover .hov-er {
  display: block;
  width: 23%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 23%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 23%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 23%;
  }


.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 60%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 35rem;
  }

/* preloader */

.preloader {
      height: 100%;
    }

/* branding */

  .bom .bosscab2 {
      width: 730px;
      margin-left: -50px;
    }
  
   .bom .synven2 {
      width: 730px;
      margin-top: -495px;
      margin-left: 30px;
    }

   .bom .jiff2 {
      width: 730px;
      margin-top: 15px;
      margin-left: -50px;
    }

  .bom .tailor2 {
      width: 730px;
      margin-top: -495px;
      margin-left: 30px;
    }

  .bom .nws2 {
      width: 730px;
      margin-top: 10px;
      margin-left: -50px;
    }


       /* section3  */
       .bosscab {
      width: 730px;
      margin-left: -50px;
    }
  
    .synven {
      width: 730px;
      margin-top: -50px;
      margin-left: 30px;
    }

    .jiff {
      width: 730px;
      margin-top: 15px;
      margin-left: -50px;
    }

    .tailor {
      width: 730px;
      margin-top: -50px;
      margin-left: 30px;
    }

    .nws {
      width: 730px;
      margin-top: 10px;
      margin-left: -50px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 10rem;
      margin-top: 180px;

    }
 
/* dark theme */
body.dark .dark-bg{
  display: block;
  width: 480px;
  margin-left:  60rem;
        margin-top: -26rem;
}
/* dark theme ends */



    .art2 img {
      width: 480px;
    }

    .art2 {
      margin-left:  60rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 60%;
      margin-left: 21rem;
    }


}
@media (min-width: 1651px) and (max-width:1700px)  {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }


.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

/* branding */

.bom .bosscab2 {
      width: 750px;
      margin-left: -50px;
    }

   .bom .synven2 {
      width: 750px;
      margin-top: -508px;
      margin-left: 40px;
    }

   .bom .jiff2 {
      width: 750px;
      margin-top: 15px;
      margin-left: -50px;
    }

   .bom .tailor2 {
      width: 750px;
      margin-top: -508px;
      margin-left: 40px;
    }

   .bom .nws2 {
      width: 750px;
      margin-top: 10px;
      margin-left: -50px;
    }



    /* section4 starts */

  .blt h2 {
    margin-left: 35rem;
  }

/* preloader */

.preloader {
      height: 100%;
    }

       /* section3  */
       .bosscab {
      width: 750px;
      margin-left: -50px;
    }

    .synven {
      width: 750px;
      margin-top: -60px;
      margin-left: 40px;
    }


    .jiff {
      width: 750px;
      margin-top: 15px;
      margin-left: -50px;
    }

    .tailor {
      width: 750px;
      margin-top: -60px;
      margin-left: 40px;
    }

    .nws {
      width: 750px;
      margin-top: 10px;
      margin-left: -50px;
    }



    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 10rem;
      margin-top: 180px;

    }
 /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 490px;
  margin-left:  60rem;
        margin-top: -26rem;
}
/* dark theme ends */



    .art2 img {
      width: 490px;      
    }

    .art2 {
      margin-left:  60rem;
      margin-top: -26rem;

    }

    .section4 h1 {
      width: 60%;
      margin-left: 21rem;
    }


}
@media (min-width: 1701px) and (max-width:1750px)  {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }

.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 35rem;
  }

/* preloader */

.preloader {
      height: 100%;
    }


      /* branding */
   .bom   .bosscab2 {
      width: 770px;
      margin-left: -50px;
    }
  
  .bom  .synven2 {
      width: 770px;
      margin-top: -520px;
      margin-left: 60px;
    }

   .bom .jiff2 {
      width: 770px;
      margin-top: 15px;
      margin-left: -50px;
    }

   .bom .tailor2 {
      width: 770px;
      margin-top: -520px;
      margin-left: 60px;
    }

  .bom .nws2 {
      width: 770px;
      margin-top: 10px;
      margin-left: -50px;
    }


       /* section3  */
       .bosscab {
      width: 770px;
      margin-left: -50px;
    }
  
    .synven {
      width: 770px;
      margin-top: -70px;
      margin-left: 60px;
    }

    .jiff {
      width: 770px;
      margin-top: 15px;
      margin-left: -50px;
    }

    .tailor {
      width: 770px;
      margin-top: -73px;
      margin-left: 60px;
    }

    .nws {
      width: 770px;
      margin-top: 10px;
      margin-left: -50px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 10rem;
      margin-top: 180px;

    }
 
/* dark theme */
body.dark .dark-bg{
  display: block;
  width: 510px;
  margin-left:  60rem;
        margin-top: -26rem;
}
/* dark theme ends */

    .art2 img {
      width: 510px;
    }

    .art2 {
      margin-left:  60rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 60%;
      margin-left: 21rem;
    }


}
@media (min-width: 1751px) and (max-width:1800px)  {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }

.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }


/* branding  */

  .bom .bosscab2 {
      width: 770px;
      margin-left: -20px;
    }

   .bom .synven2 {
      width: 770px;
      margin-top: -523px;
      margin-left: 90px;
    }

   .bom .jiff2 {
      width: 770px;
      margin-top: 15px;
      margin-left: -20px;
    }

   .bom .tailor2 {
      width: 770px;
      margin-top: -523px;
      margin-left: 90px;
    }

   .bom .nws2 {
      width: 770px;
      margin-top: 10px;
      margin-left: -20px;
    }


    /* section4 starts */

  .blt h2 {
    margin-left: 41rem;
  }

  .art3 {
        margin-left: 230px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

       /* section3  */
       .bosscab {
      width: 770px;
      margin-left: -20px;
    }

    .synven {
      width: 770px;
      margin-top: -73px;
      margin-left: 90px;
    }

    .jiff {
      width: 770px;
      margin-top: 15px;
      margin-left: -20px;
    }

    .tailor {
      width: 770px;
      margin-top: -76px;
      margin-left: 90px;
    }

    .nws {
      width: 770px;
      margin-top: 10px;
      margin-left: -20px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 15rem;
      margin-top: 180px;

    }
 /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 510px;
  margin-left:  65rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 510px;
    }

    .art2 {
      margin-left:  65rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 60%;
      margin-left: 23rem;
    }


}
@media (min-width: 1801px) and (max-width:1850px)  {

  /* art hover */

  .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }


.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 41rem;
  }

  .art3 {
        margin-left: 230px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

/* branding */
.bom .bosscab2 {
      width: 780px;
      margin-left: -10px;
    }

   .bom .synven2 {
      width: 780px;
      margin-top: -530px;
      margin-left: 130px;
    }

   .bom .jiff2 {
      width: 780px;
      margin-top: 25px;
      margin-left: -10px;
    }

   .bom .tailor2 {
      width: 780px;
      margin-top: -520px;
      margin-left: 130px;
    }

   .bom .nws2 {
      width: 780px;
      margin-top: 10px;
      margin-left: -10px;
    }

       /* section3  */
       .bosscab {
      width: 780px;
      margin-left: -10px;
    }

    .synven {
      width: 780px;
      margin-top: -80px;
      margin-left: 130px;
    }

    .jiff {
      width: 780px;
      margin-top: 15px;
      margin-left: -10px;
    }

    .tailor {
      width: 780px;
      margin-top: -83px;
      margin-left: 130px;
    }

    .nws {
      width: 780px;
      margin-top: 10px;
      margin-left: -10px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 15rem;
      margin-top: 180px;

    }
 
    /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 510px;
  margin-left:  65rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 510px;
    }

    .art2 {
      margin-left:  65rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 60%;
      margin-left: 23rem;
    }


}
@media (min-width: 1851px) and (max-width:1900px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 300px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }



.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 43rem;
  }

  .art3 {
        margin-left: 230px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

/* branding */

.bom .bosscab2 {
      width: 790px;
      margin-left: 10px;
    }

   .bom .synven2 {
      width: 790px;
      margin-top: -535px;
      margin-left: 150px;
    }

   .bom .jiff2 {
      width: 790px;
      margin-top: 15px;
      margin-left: 10px;
    }

   .bom .tailor2 {
      width: 790px;
      margin-top: -535px;
      margin-left: 150px;
    }

   .bom .nws2 {
      width: 790px;
      margin-top: 10px;
      margin-left: 10px;
    }

       /* section3  */
       .bosscab {
      width: 790px;
      margin-left: 10px;
    }

    .synven {
      width: 790px;
      margin-top: -90px;
      margin-left: 150px;
    }

    .jiff {
      width: 790px;
      margin-top: 15px;
      margin-left: 10px;
    }

    .tailor {
      width: 790px;
      margin-top: -93px;
      margin-left: 150px;
    }

    .nws {
      width: 790px;
      margin-top: 10px;
      margin-left: 10px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }

    .sec1 {
      margin-top: 300px;
    }

    .art1 {
      margin-left: 15rem;
      margin-top: 180px;

    }
     /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 510px;
  margin-left:  65rem;
        margin-top: -26rem;
}
/* dark theme ends */



    .art2 img {
      width: 510px;
    }

    .art2 {
      margin-left:  65rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 50%;
      margin-left: 29rem;
    }


}
@media (min-width: 1901px) and (max-width:1950px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }



.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 43rem;
  }

  .art3 {
        margin-left: 230px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

       /* section3  */
       .bosscab {
      width: 800px;
      margin-left: 10px;
    }
  
    .synven {
      width: 800px;
      margin-top: -97px;
      margin-left: 170px;
    }

    .jiff {
      width: 800px;
      margin-top: 15px;
      margin-left: 10px;
    }

    .tailor {
      width: 800px;
      margin-top: -97px;
      margin-left: 170px;
    }

    .nws {
      width: 800px;
      margin-top: 10px;
      margin-left: 10px;
    }

    /* branding */

  .bom  .bosscab2 {
      width: 800px;
      margin-left: 10px;
    }
  
   .bom .synven2 {
      width: 800px;
      margin-top: -545px;
      margin-left: 170px;
    }

   .bom .jiff2 {
      width: 800px;
      margin-top: 20px;
      margin-left: 10px;
    }

    .bom .tailor2 {
      width: 800px;
      margin-top: -540px;
      margin-left: 170px;
    }

   .bom .nws2 {
      width: 800px;
      margin-top: 15px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 18rem;
      margin-top: 180px;

    }

        /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left:  68rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 540px;
    }

    .art2 {
      margin-left:  68rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 50%;
      margin-left: 29rem;
    }


}
@media (min-width: 1951px) and (max-width:2000px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 350px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }


.passion {
      margin-top: 34px;
      font-size: 60px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

    /* section4 starts */

  .blt h2 {
    margin-left: 44rem;
  }

  .art3 {
        margin-left: 230px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

/* branding */

  .bom .bosscab2 {
      width: 820px;
      margin-left: 15px;
    }

   .bom .synven2 {
      width: 820px;
      margin-top: -560px;
      margin-left: 180px;
    }

   .bom .jiff2 {
      width: 820px;
      margin-top: 20px;
      margin-left: 10px;
    }

   .bom .tailor2 {
      width: 820px;
      margin-top: -550px;
      margin-left: 180px;
    }

  .bom  .nws2 {
      width: 820px;
      margin-top: 15px;
      margin-left: 10px;
    }


       /* section3  */
       .bosscab {
      width: 820px;
      margin-left: 15px;
    }

    .synven {
      width: 820px;
      margin-top: -110px;
      margin-left: 180px;
    }

    .jiff {
      width: 820px;
      margin-top: 15px;
      margin-left: 10px;
    }

    .tailor {
      width: 820px;
      margin-top: -110px;
      margin-left: 180px;
    }

    .nws {
      width: 820px;
      margin-top: 10px;
      margin-left: 10px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 300px;
    }


    .art1 {
      margin-left: 18rem;
      margin-top: 180px;

    }
 
        /* dark theme */
        body.dark .dark-bg{
  display: block;
  width: 540px;
  margin-left:  68rem;
        margin-top: -26rem;
}
/* dark theme ends */

    .art2 img {
      width: 540px;
    }

    .art2 {
      margin-left:  68rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 50%;
      margin-left: 31rem;
    }


}
@media (min-width: 2001px) and (max-width:2200px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 20%;
} 

.art5:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 400px;
} 

.art6:hover .hov-er {
  display: block;
  width: 20%;
} 

.art7:hover .hov-er {
  display: block;
  width: 20%;
  margin-left: 400px;
} 

.art8:hover .hov-er {
  display: block;
  width: 20%;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 20%;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 400px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 20%;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 20%;
  margin-left: 400px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 20%;
  }

.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 55%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 49rem;
  }

  .art3 {
        margin-left: 310px;
      }

/* preloader */

.preloader {
      height: 100%;
    }


/* branding */

   .bom .bosscab2 {
      width: 850px;
      margin-left: 55px;
    }

   .bom .synven2 {
      width: 850px;
      margin-top: -576px;
      margin-left: 260px;
    }

    .bom .jiff2 {
      width: 850px;
      margin-top: 20px;
      margin-left: 55px;
    }

   .bom .tailor2 {
      width: 850px;
      margin-top: -570px;
      margin-left: 260px;
    }

  .bom .nws2 {
      width: 850px;
      margin-top: 15px;
      margin-left: 55px;
    }

       /* section3  */
       .bosscab {
      width: 850px;
      margin-left: 55px;
    }

    .synven {
      width: 850px;
      margin-top: -130px;
      margin-left: 260px;
    }

    .jiff {
      width: 850px;
      margin-top: 15px;
      margin-left: 55px;
    }

    .tailor {
      width: 850px;
      margin-top: -130px;
      margin-left: 260px;
    }

    .nws {
      width: 850px;
      margin-top: 10px;
      margin-left: 55px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 320px;
    }


    .art1 {
      margin-left: 21rem;
      margin-top: 180px;

    }
 
        /* dark theme */
        body.dark .dark-bg{
  display: block;
  width: 580px;
  margin-left:  76rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 580px;
    }

    .art2 {
      margin-left:  76rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 50%;
      margin-left: 31rem;
    }


}

@media (min-width: 2201px) and (max-width:2400px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.art5:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 650px;
} 

.art6:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.art7:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 650px;
} 

.art8:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 15%;
       margin-left: 400px;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 650px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 650px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 15%;
   margin-left: 400px;
  }

.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 58rem;
  }

  .art3 {
        margin-left: 350px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

       /* section3  */
       .bosscab {
      width: 890px;
      margin-left: 105px;
    }
  
    .synven {
      width: 890px;
      margin-top: -155px;
      margin-left: 360px;
    }

    .jiff {
      width: 890px;
      margin-top: 15px;
      margin-left: 105px;
    }

    .tailor {
      width: 890px;
      margin-top: -155px;
      margin-left: 360px;
    }

    .nws {
      width: 890px;
      margin-top: 10px;
      margin-left: 105px;
    }

    /* branding */

    .bom .bosscab2 {
      width: 890px;
      margin-left: 105px;
    }
  
    .bom .synven2 {
      width: 890px;
      margin-top: -605px;
      margin-left: 360px;
    }

   .bom .jiff2 {
      width: 890px;
      margin-top: 20px;
      margin-left: 105px;
    }

   .bom .tailor2 {
      width: 890px;
      margin-top: -600px;
      margin-left: 360px;
    }

   .bom .nws2 {
      width: 890px;
      margin-top: 15px;
      margin-left: 105px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 320px;
    }


    .art1 {
      margin-left: 24rem;
      margin-top: 180px;

    }
 
            /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 600px;
  margin-left:  85rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 600px;
    }

    .art2 {
      margin-left:  85rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 45%;
      margin-left: 42rem;
    }

    .sig {
      
      margin-left: 120px;

    }

    
    footer h3 {
      margin-left: 80px;
      /* width: 10%; */

    }
}

@media (min-width: 2401px) and (max-width:2600px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.art5:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 700px;
} 

.art6:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.art7:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 700px;
} 

.art8:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 15%;
       margin-left: 400px;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 700px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 400px;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 700px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 15%;
   margin-left: 400px;
  }

.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 50%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 66rem;
  }

  .art3 {
        margin-left: 420px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

    /* branding */

   .bom .bosscab2 {
      width: 910px;
      margin-left: 195px;
    }

   .bom .synven2 {
      width: 910px;
      margin-top: -615px;
      margin-left: 470px;
    }

    .bom .jiff2 {
      width: 910px;
      margin-top: 20px;
      margin-left: 195px;
    }

   .bom .tailor2 {
      width: 910px;
      margin-top: -610px;
      margin-left: 470px;
    }

   .bom .nws2 {
      width: 910px;
      margin-top: 20px;
      margin-left: 195px;
    }

       /* section3  */
       .bosscab {
      width: 910px;
      margin-left: 195px;
    }

    .synven {
      width: 910px;
      margin-top: -175px;
      margin-left: 470px;
    }

    .jiff {
      width: 910px;
      margin-top: 15px;
      margin-left: 195px;
    }

    .tailor {
      width: 910px;
      margin-top: -175px;
      margin-left: 470px;
    }

    .nws {
      width: 910px;
      margin-top: 10px;
      margin-left: 195px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }


    .sec1 {
      margin-top: 320px;
    }


    .art1 {
      margin-left: 28rem;
      margin-top: 180px;

    }
 
            /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 620px;
  margin-left:  94rem;
        margin-top: -26rem;
}
/* dark theme ends */


    .art2 img {
      width: 620px;
    }

    .art2 {
      margin-left:  94rem;
      margin-top: -26rem;
    }

    .section4 h1 {
      width: 40%;
      margin-left: 50rem;
    }

    .sig {
      
      margin-left: 100px;

    }

    
    footer h3 {
      margin-left: 80px;
      /* width: 10%; */

    }
}

@media (min-width: 2601px) and (max-width:2800px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.art5:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.art6:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.art7:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.art8:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 15%;
       margin-left: 550px;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 15%;
   margin-left: 550px;
  }


.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 45%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 78rem;
  }

  .art3 {
        margin-left: 540px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

/* branding */

  .bom .bosscab2 {
      width: 930px;
      margin-left: 275px;
    }

   .bom .synven2 {
      width: 930px;
      margin-top: -635px;
      margin-left: 570px;
    }

   .bom .jiff2 {
      width: 930px;
      margin-top: 20px;
      margin-left: 275px;
    }

    .bom .tailor2 {
      width: 930px;
      margin-top: -635px;
      margin-left: 570px;
    }

    .bom .nws2 {
      width: 930px;
      margin-top: 20px;
      margin-left: 275px;
    }


       /* section3  */
       .bosscab {
      width: 930px;
      margin-left: 275px;
    }

    .synven {
      width: 930px;
      margin-top: -185px;
      margin-left: 570px;
    }

    .jiff {
      width: 930px;
      margin-top: 15px;
      margin-left: 275px;
    }

    .tailor {
      width: 930px;
      margin-top: -185px;
      margin-left: 570px;
    }

    .nws {
      width: 930px;
      margin-top: 10px;
      margin-left: 275px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }

    .sec1 {
      margin-top: 320px;
    }

    .art1 {
      margin-left: 35rem;
      margin-top: 180px;

    }
 
            /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 650px;
  margin-left:  105rem;
        margin-top: -27rem;
}
/* dark theme ends */


    .art2 img {
      width: 650px;
    }

    .art2 {
      margin-left:  105rem;
      margin-top: -27rem;
    }

    .section4 h1 {
      width: 40%;
      margin-left: 58rem;
    }

    .sig {
      
      margin-left: 120px;

    }

    
    footer h3 {
      margin-left: 120px;
      /* width: 10%; */

    }
}

@media (min-width: 2801px) and (max-width:3000px)  {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.art5:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.art6:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.art7:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.art8:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 15%;
       margin-left: 550px;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 550px;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 750px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 15%;
   margin-left: 550px;
  }


.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 45%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 80rem;
  }

  .art3 {
        margin-left: 660px;
      }

/* preloader */

.preloader {
      height: 100%;
    }


/* branding */

  .bom .bosscab2 {
      width: 980px;
      margin-left: 315px;
    }

   .bom .synven2 {
      width: 980px;
      margin-top: -665px;
      margin-left: 650px;
    }

    .bom .jiff2 {
      width: 980px;
      margin-top: 20px;
      margin-left: 315px;
    }

    .bom .tailor2 {
      width: 980px;
      margin-top: -660px;
      margin-left: 650px;
    }

   .bom .nws2 {
      width: 980px;
      margin-top: 15px;
      margin-left: 315px;
    }

       /* section3  */
       .bosscab {
      width: 980px;
      margin-left: 315px;
    }

    .synven {
      width: 980px;
      margin-top: -215px;
      margin-left: 650px;
    }

    .jiff {
      width: 980px;
      margin-top: 15px;
      margin-left: 315px;
    }

    .tailor {
      width: 980px;
      margin-top: -215px;
      margin-left: 650px;
    }

    .nws {
      width: 980px;
      margin-top: 10px;
      margin-left: 315px;
    }

    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }

    .sec1 {
      margin-top: 320px;
    }

    .art1 {
      margin-left: 45rem;
      margin-top: 180px;

    }

 
            /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 700px;
  margin-left:  115rem;
        margin-top: -28rem;
}
/* dark theme ends */


    .art2 img {
      width: 700px;
    }

    .art2 {
      margin-left:  115rem;
      margin-top: -28rem;
    }

    .section4 h1 {
      width: 35%;
      margin-left: 65rem;
    }

    .sig {
      
      margin-left: 200px;

    }

    footer h3 {
      margin-left: 120px;
      /* width: 10%; */

    }
}

@media (min-width: 3001px) {

 /* art hover */

 .art4:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 600px;
} 

.art5:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 800px;
} 

.art6:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 600px;
} 

.art7:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 800px;
} 

.art8:hover .hov-er {
  display: block;
  width: 15%;
  margin-left: 600px;
} 

.bom .art4:hover .hov-er{
       display: none;
      }

      .bom .art4:hover .hov-er2{
       display: block;
       width: 15%;
       margin-left: 600px;
      }

     .bom .art5:hover .hov-er {
  display: none;
} 

.bom .art5:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 800px;
} 

.bom .art6:hover .hov-er {
  display: none;
} 

.bom .art6:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 600px;
} 

.bom .art7:hover .hov-er {
  display: none;
} 

.bom .art7:hover .hov-er2 {
  display: block;
  width: 15%;
  margin-left: 800px;
} 

.bom .art8:hover .hov-er {
  display: none;
} 

.bom .art8:hover .hov-er2 {
    display: block;
   width: 15%;
   margin-left: 600px;
  }


.passion {
      margin-top: 34px;
      font-size: 70px;
      font-weight: 900;
      font-family: "Inter", sans-serif;
      width: 45%;
    }

.lead{
  font-size: 15px;
}

    /* section4 starts */

  .blt h2 {
    margin-left: 89rem;
  }

  .art3 {
        margin-left: 660px;
      }

/* preloader */

.preloader {
      height: 100%;
    }

       /* section3  */
       .bosscab {
      width: 980px;
      margin-left: 435px;
    }

    .synven {
      width: 980px;
      margin-top: -215px;
      margin-left: 790px;
    }

    .jiff {
      width: 980px;
      margin-top: 15px;
      margin-left: 435px;
    }

    .tailor {
      width: 980px;
      margin-top: -215px;
      margin-left: 790px;
    }

    .nws {
      width: 980px;
      margin-top: 10px;
      margin-left: 435px;
    }

    /* branding */
   .bom .bosscab2 {
      width: 980px;
      margin-left: 435px;
    }

   .bom .synven2 {
      width: 980px;
      margin-top: -665px;
      margin-left: 790px;
    }

   .bom .jiff2 {
      width: 980px;
      margin-top: 20px;
      margin-left: 435px;
    }

   .bom .tailor2 {
      width: 980px;
      margin-top: -660px;
      margin-left: 790px;
    }

   .bom .nws2 {
      width: 980px;
      margin-top: 15px;
      margin-left: 435px;
    }


    .section3 {
      margin-top: 50px;
      margin-left: 130px;
    }

    .sec1 {
      margin-top: 320px;
    }

    .art1 {
      margin-left: 45rem;
      margin-top: 180px;

    }
 
            /* dark theme */
body.dark .dark-bg{
  display: block;
  width: 700px;
  margin-left:  115rem;
        margin-top: -28rem;
}
/* dark theme ends */


    .art2 img {
      width: 700px;
    }

    .art2 {
      margin-left:  115rem;
      margin-top: -28rem;
    }

    .section4 h1 {
      width: 30%;
      margin-left: 75rem;
    }

    .sig {
      margin-left: 300px;

    }

    
    footer h3 {
      margin-left: 140px;
      /* width: 10%; */

    }
}

    </style>

    <!-- preloader -->

    <div class="preloader">
      <div class="counter">0</div>
    </div>

    <!-- preloader ends -->
  <section class="secd">
    <header>
      <img class="image" src="images/logola.png" alt="" />
      <img class="logo-dark" src="/images/logo dark bg.png" alt="">

      <input type="checkbox" name="" id="menu-btn" />
      <label class="menu-icon" for="menu-btn">
        <div class="navicon"></div>
        <div class="navicon"></div>
        <div class="navicon"></div>
      </label>

      <ul class="nav-ul">
        <div class="lon">
          <li class="nav-li"><a href="about.php">about me.</a></li>
          <li id="navl" class="nav-li"><a href="email.php">contact.</a></li>
        </div>
        <div class="move">
          <li class="li3">
            <a href="http://www.linkedin.com/in/lucky-ekezie"
              >LINKEDIN</a
            >
          </li>
          <li class="li3">
            <a href="https://twitter.com/CeejayLucky"
              >TWITTER</a
            >
          </li>
          <li class="li3">
            <a
              href="https://www.facebook.com/profile.php?id=100070488529526"
          
              >FACEBOOK</a
            >
          </li>
          <li class="li3">
            <a
              href="https://www.behance.net/luckyekezie_projects"
            
              ><span class="beh">BEHANCE</span></a
            >
          </li>
        </div>
      </ul>
    </header>
    <!-- header nav ends -->

    <div class="position-fixed-right mode-switcher-panel-wrapper">
      <div class="position-relative mode-switcher-panel" id="myDIV">
        <div class="di">
          <span class="text"> Change Version </span>
          <div class="buttons">
            <button
              class="switcher-btn active theme1"
              data-theme-mode="light"
              i
            >
              Light
            </button>
            <button class="false switcher-btn theme2" data-theme-mode="dark">
              dark
            </button>
          </div>
        </div>
      </div>

      <!-- <i class="icon icon-small-left"></i> -->
      <button
        class="switcher-minimize-button open"
        id="the-button"
        onclick="myFunction()"
      >
        <!-- <svg
          class="fa-chevron-right"
          onclick="myFunc()"
          width="8"
          height="16"
          viewBox="0 0 8 16"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M7.87012 14.4501L7.20012 15.1201L0.0801163 8.00012L7.20012 0.880119L7.87012 1.55012L1.42012 8.00012L7.87012 14.4501Z"
            fill="white"
          />
        </svg> -->

        <div class="right">
          <svg
            class="fa fa-chevron-right"
            width="8"
            height="16"
            viewBox="0 0 8 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7.87012 14.4501L7.20012 15.1201L0.0801163 8.00012L7.20012 0.880119L7.87012 1.55012L1.42012 8.00012L7.87012 14.4501Z"
              fill="white"
            />
          </svg>
          <!-- <i class="fa fa-chevron-right"></i> -->
        </div>
      </button>
    </div>

    <!-- section 1 -->
    <div class="sec1">
      <article class="art1">
        <div class="lead">LEADER, LEARNER, PRODUCT DESIGNER</div>
        <!-- <div class="passion">I’m passionate about emerging technologies</div> -->
        <div class="passion">
<p class="animate-text">
<span class="text-in" id="auch">I’m passionate about emerging technologies</span>
<span class="text-in" id="star">I’m passionate about  building start ups</span>
<span class="text-in" id="solve">I’m passionate about problem solving</span>
<span class="text-in" id="brk">I’m passionate about user experience</span>
<!-- <span class="text-in">I’m passionate about emerging teies</span> -->
</p>
        </div>

        <a href="#sectio3" style="text-decoration: none">
          <button type="submit" class="blu-btn" id="sectio3"  >
            <span>EXPLORE WORKS</span>
            <i
              class="fa-solid fa-arrow-right-long gr-text-8 font-weight-bolder"
            ></i>
          </button>
          <!-- <i
            class="fa-solid fa-arrow-right-long gr-text-8 font-weight-bolder"
          ></i> -->
        </a>
      </article>

      <article class="art2">
        <img src="/images/Img 2 1.png" alt="" />
      </article>

      <img class="dark-bg" src="/images/Picture dark bg.png" alt="">
    </div>

    <!-- section 2 -->

    <div class="section2">
      <article class="art3">
        <ul class="ten">
          <li><a href="#art4" data-filter="product" class="active" id="product">PRODUCT DESIGN</a></li>
          <li><a href="#art4" data-filter="branding" class="list" id="branding">BRANDING</a></li>
        </ul>
      </article>
    </div>

    <div class="empty"></div>
    <!-- section 3 -->

    <div class="section3">
      <article class="art4">
       <a href="bosscab.html" style="text-decoration: none;"> <img class="bosscab itemBox"src="images/product1.png" alt="" /></a>
       <a href="brand.html" style="text-decoration: none;"> <img class="bosscab2 item"src="images/branding2.png" alt="" /></a>
       <!-- mobile -->
<div class="st-n">
  <ul>
    <li>PRODUCT DESIGN</li>
    <li>2021</li>
  </ul>
  <h3>Bosscab Rider App</h3>
</div>

<div class="st-n2">
  <ul>
    <li>BRANDING</li>
    <li>2022</li>
  </ul>
  <h3>Synventory App</h3>

</div>

       <!-- hover -->
<div class="hov-er">

  <ul>
    <li>PRODUCT DESIGN</li>
    <li>2021</li>
  </ul>
  <h3>Bosscab Rider App</h3>

</div>

<div class="hov-er2">

  <ul>
    <li>BRANDING</li>
    <li>2022</li>
  </ul>
  <h3>Synventory App</h3>

</div>
      </article>

     <!-- art5 -->
      
      <article class="art5">
       <a href="brand.html" style="text-decoration: none;"> <img class="synven itemBox" src="images/product2.png" alt="" /></a>
       <a href="brand.html" style="text-decoration: none;"> <img class="synven2 item" src="images/branding4.png" alt="" /></a>
<!-- mobile -->
      <div class="st-n">
        <ul>
          <li>PRODUCT DESIGN</li>
          <li>2022</li>
        </ul>
        <h3>Synventory App</h3> 
      </div>

<div class="st-n2">
  <ul>
    <li>BRANDING</li>
    <li>2020</li>
  </ul>
  <h3>Tailorgang App</h3>
</div>

      <!-- hover -->
      <div class="hov-er">
        <ul>
          <li>PRODUCT DESIGN</li>
          <li>2022</li>
        </ul>
        <h3>Synventory App</h3>
      </div>


      <div class="hov-er2">
        <ul>
          <li>BRANDING</li>
          <li>2020</li>
        </ul>
        <h3>Tailorgang App</h3>
      </div>

      </article>

      <!-- art6 -->

      <article class="art6">
       <a href="brand.html" style="text-decoration: none;"> <img class="jiff itemBox" src="images/product3.png" alt="" /></a>
       <a href="brand.html" style="text-decoration: none;"> <img class="jiff2 item" src="images/branding5.png" alt="" /></a>

       <!-- mobile -->
      <div class="st-n">
        <ul>
          <li>PRODUCT DESIGN</li>
          <li>2022</li>
        </ul>
        <h3>Jael Website</h3> 
      </div>

<div class="st-n2">
  <ul>
    <li>BRANDING</li>
    <li>2020</li>
  </ul>
  <h3>Nugi Web Services</h3>
</div>

       <!-- hover -->
      <div class="hov-er">
        <ul>
          <li>PRODUCT DESIGN</li>
          <li>2022</li>
        </ul>
        <h3>Jael Website</h3>
      </div>

      <div class="hov-er2">
        <ul>
          <li>BRANDING</li>
          <li>2020</li>
        </ul>
        <h3>Nugi Web Services</h3>
      </div>
      </article>

      <!-- art7 -->
      <article class="art7">
      <a href="brand.html" style="text-decoration: none;"> <img class="tailor itemBox" src="images/product4.png" alt="" /></a>
      <a href="brand.html" style="text-decoration: none;"> <img class="tailor2 item" src="images/branding1.png" alt="" /></a>

<!-- mobile -->
<div class="st-n">
  <ul>
    <li>PRODUCT DESIGN</li>
    <li>2020</li>
  </ul>
  <h3>Tailorgang App</h3> 
</div>

<div class="st-n2">
<ul>
<li>BRANDING</li>
<li>2021</li>
</ul>
<h3>Boss Rider App</h3>
</div>

      <!-- hover -->
       <div class="hov-er">
        <ul>
          <li>PRODUCT DESIGN</li>
          <li>2020</li>
        </ul>
        <h3>Tailorgang App</h3>
       </div>

       <div class="hov-er2">
        <ul>
          <li>BRANDING</li>
          <li>2021</li>
        </ul>
        <h3>Boss Rider App</h3>
       </div>
      </article>

<!-- art8 -->
      <article class="art8">
       <a href="brand.html" style="text-decoration: none;"> <img class="nws itemBox" src="images/product5.png" alt="" /></a>
       <a href="brand.html" style="text-decoration: none;"> <img class="nws2 item" src="images/branding3.png" alt="" /></a>

<!-- mobile -->

<!-- mobile -->
<div class="st-n">
  <ul>
    <li>PRODUCT DESIGN</li>
    <li>2020</li>
  </ul>
  <h3>Nugi Web Services</h3> 
</div>

<div class="st-n2">
<ul>
<li>BRANDING</li>
<li>2022</li>
</ul>
<h3>Jael Website</h3>
</div>

       <!-- hover -->
<div class="hov-er">
  <ul>
    <li>PRODUCT DESIGN</li>
    <li>2020</li>
  </ul>
  <h3>Nugi Web Services</h3>
</div>

<div class="hov-er2">
  <ul>
    <li>BRANDING</li>
    <li>2022</li>
  </ul>
  <h3>Jael Website </h3>
</div>
      </article>
    </div>



    <!-- section 4 -->
    <!-- <div class="svgg">
      <svg
        width="12"
        height="12"
        viewBox="0 0 12 12"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
          fill="#56B381"
        />
      </svg>
    </div> -->

    <div class="section4">
      <div class="blt">
        <h2>AVAILABLE FOR FULL TIME ROLE AND FREELANCE PROJECTS</h2>
      </div>

      <h1>Do you have a product that can change the world? Let's talk.</h1>

      <div class="dis">
        <a href="email.php" style="text-decoration: none">
          <img class="sig" src="images/Style 03.png" alt="" />
        </a>
      </div>
    </div>

    <!-- footer -->

    <footer>
      <h3>© 2022 All RIGHT RESEVED</h3>
    </footer>

    <div class="toggle"></div>

    
  </section>

    <!-- script tag -->

    <!--preloader js -->

    <script type="text/javascript">
      function counter() {
        var count = setInterval(function () {
          var c = parseInt($(".counter").text());
          $(".counter").text((++c).toString());
          if (c == 100) {
            clearInterval(count);
            $(".preloader").hide("active");
          }
        }, 10);
      }

      counter();

      // $("#arrow").click(function () {
      //   $("#arrow").css("tranform", "scale(1, -1)");
      // });

      $("#arrow").click(function () {
        $(this).toggleClass("sca-le");
      });

        // branding display starts

      var element = document.getElementById("branding");


goLit = function () {
  body.className = "";
  
};

goDak = function () {
  body.className = "";
  body.classList.toggle("bom");
};

document
  .querySelector("#product")
  .addEventListener("click", goLit, false);

document
  .querySelector("#branding")
  .addEventListener("click", goDak, false);


  // branding display ends
    </script>
    <!-- preloader js ends -->
    <script>
      // theme js

      // var body = document.querySelector("body");

      // goLight = function () {
      //   body.className = "";
      // };

      // goDark = function () {
      //   body.className = "";
      //   body.classList.add("dark");
      // };

      // document
      //   .querySelector(".theme1")
      //   .addEventListener("click", goLight, false);

      // document
      //   .querySelector(".theme2")
      //   .addEventListener("click", goDark, false);


      var body = document.querySelector("body");

goLight = function () {
  body.className = "";
  
};

goDark = function () {
  body.className = "";
  body.classList.toggle("dark");
};

document
  .querySelector(".theme1")
  .addEventListener("click", goLight, false);

document
  .querySelector(".theme2")
  .addEventListener("click", goDark, false);

      // theme js ends

      // hide and show js

      function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      document
        .getElementById("the-button")
        .addEventListener("click", function () {
          var icon = this.querySelector(".fa");
          icon.classList.toggle("rotate");
        });

      // function myFunc() {
      //   var mysvg = document.getElementById("arrow");
      //   if (mysvg.style.display === "none") {
      //     mysvg.style.display = "block";
      //     mysvg.style.transform = " scaleX(-1)";
      //   } else {
      //     mysvg.style.transform = " scaleY(-1)";
      //   }
      // }
      // hide and show ends

// text animation

const txts=document.querySelector(".animate-text").children,
txtsLen=txts.length;
let index=0;

function animateText() {
for(let i=0; i<txtsLen; i++){
  txts[i].classList.remove("text-in");
}
  txts[index].classList.add("text-in");
  if(index == txtsLen-1){
    index=0;
  }
  else{
    index++;
  }

  setTimeout(animateText,3000);

}

window.onload=animateText;

    </script>

    <!-- <script type="text/javascript">
      $(".fa-chevron-right").click(function () {
        $(this).toggleClass("rotate");
      });
    </script> -->

  </body>
</html>

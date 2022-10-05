<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="css/email.css" /> -->
    <script
      src="https://kit.fontawesome.com/add5a071a1.js"
      crossorigin="anonymous"
    ></script>

    <title>CONTACT</title>

    <link
      rel="shortcut icon"
      href="images/logo icon 2.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <style>
      body {
        background: #56b381;
      }
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poppins:wght@400;900&family=Roboto&display=swap");

      * {
        margin: 0;
        padding: 0;
      }

      .contain {
        background-color: #56b381;
        position: fixed;
        overflow: hidden;
        height: 80px;
        top: 0;
        width: 100%;
      }

      .navigation ul {
        float: right;
        margin-top: 30px;
        margin-right: 50px;
      }

      .navigation li {
        list-style-type: none;
        cursor: pointer;
      }

      .navigation li :hover {
        transform: scale(1.1);
        transition: all 0.2s;
      }

      article .say {
        margin-top: 200px;
        margin-left: 200px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 60px;
        font-weight: 700;
        color: #fff;
      }

      .oh {
        margin-top: 13px;
        margin-left: 40px;
      }

      article .will {
        color: #fff;
        margin-left: 200px;
        margin-top: 50px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 19px;
        font-weight: 100;
        letter-spacing: -0.2px;
        word-spacing: 2px;
        line-height: 25px;
        width: 32%;
      }

      article .mail .white_cont {
        float: right;
        background-color: #fff;
        width: 340px;
        height: 220px;
        margin-top: -410px;
        margin-right: 280px;
        border-radius: 10px;
        box-shadow: 0.1px 0.1px 0.1px rgb(224, 221, 221);
      }

      article .text {
        margin-left: 200px;
        margin-top: 7px;
      }
      .typ::placeholder {
        color: #fff;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: 100;
        padding-bottom: 30px;
      }

      #emaill::placeholder,
      #sub::placeholder,
      #rea::placeholder {
        color: #fff;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: 100;
      }

      #tex,
      #emaill,
      #sub,
      #rea {
        margin-top: 18px;
        border: none;
        border-bottom: 1px solid #7ecda3;
        width: 400px;
        height: 70px;
        background-color: #56b381;
        color: #fff;
      }

      #tex:focus,
      #emaill:focus,
      #sub:focus,
      #rea:focus {
        outline: none;
        color: #fff;
      }

      .email,
      .subject {
        margin-left: 200px;
        margin-top: -12px;
      }

      .area {
        margin-left: 200px;
        margin-top: 10px;
      }

      #rea {
        height: 90px;
      }

      .meat {
        color: black;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 40px;
        margin-left: 30px;
        word-spacing: 2px;
      }

      .a_mail,
      .phone {
        text-decoration: none;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #168bff;
        margin-left: 30px;
      }

      .ba-w,
      .cal {
        margin-top: 10px;
      }

      .calt {
        padding-top: 50px;
        color: black;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-left: 30px;
        word-spacing: 2px;
      }

      .sub-t {
        margin-left: 200px;
        margin-top: 20px;
        width: 135px;
        height: 50px;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        color: #fff;
        background-color: #168bff;
        padding-right: 25px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
      }

      .fraction {
        color: #fff;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 13px;
        padding-right: 15px;
      }

      i {
        color: white;
        display: flex;
      }

      .svg {
        margin-top: -100px;
        margin-left: 300px;
      }

      .foot-ul {
        /* float: right; */
        margin-top: 80px;
        /* text-align: center; */
        margin-left: 45rem;
      }

      .foot-ul li {
        display: inline-block;
        margin-left: 25px;
      }

      .foot-ul li a {
        color: #fff;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 2px;
        text-decoration: none;
      }

      .hei {
        height: 200px;
      }

      .sp {
        margin-top: 30px;
        margin-left: 200px;
        width: 140px;
        height: 45px;
        border-radius: 30px;
        transition: all 0.1s;
        background-color: #168bff;
        border: none;
      }

      .sp:hover {
        transform: translate(0, -5px);
      }

      @media (min-width: 331px) and (max-width: 350px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-left: 10px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;
          width: 89%;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 290px;
          height: 220px;
          margin-top: 80px;
          margin-right: 25px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 270px;
        }

        #tex {
          margin-top: 30px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -30px;
          margin-top: 400px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 12px;
        }
      }

      @media (min-width: 312px) and (max-width: 330px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-left: 10px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 28px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 30px;
          margin-top: 50px;
          width: 80%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 30px;
          margin-top: -12px;
        }

        .area {
          margin-left: 30px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 260px;
          height: 220px;
          margin-top: 80px;
          margin-right: 30px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 30px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 262px;
        }

        .sp {
          margin-top: 20px;
          margin-left: 30px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 50px;
          margin-top: 400px;
          width: 20%;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 12px;
        }
      }

      @media (min-width: 300px) and (max-width: 311px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-left: 10px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 15px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 15px;
          margin-top: 50px;
          width: 80%;
        }
        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 15px;
          margin-top: -12px;
        }

        .area {
          margin-left: 15px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 260px;
          height: 220px;
          margin-top: 80px;
          margin-right: 24px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 15px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 270px;
        }

        .sp {
          margin-top: 20px;
          margin-left: 15px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 50px;
          margin-top: 350px;
        }

        .foot-ul li {
          display: block;
          margin-top: 5px;
        }
      }

      @media (min-width: 351px) and (max-width: 360px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 60px;
          top: 0;
          width: 100%;
        }
        /* 
        .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 20px;
          margin-left: 10px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 10px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 15px;
          margin-top: 50px;
          width: 95%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 310px;
          height: 220px;
          margin-top: 80px;
          margin-right: 20px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 330px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -30px;
          margin-top: 400px;
          width: 110%;
        }

        .foot-ul li {
          margin-top: 12px;
        }
      }

      @media (min-width: 361px) and (max-width: 381px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 60px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 40px;
          margin-left: 10px;
          margin-top: 8px;
        }

        .star {
          width: 16px;
          margin-top: -11px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;
          width: 90%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 330px;
          height: 220px;
          margin-top: 80px;
          margin-right: 15px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 330px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */
          margin-left: -30px;
          margin-top: 400px;
          width: 110%;
        }

        .foot-ul li {
          margin-top: 12px;
        }
      }

      @media (min-width: 382px) and (max-width: 400px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 60px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 40px;
          margin-left: 10px;
          margin-top: 8px;
        }

        .star {
          width: 16px;
          margin-top: -11px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 89%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 340px;
          height: 220px;
          margin-top: 80px;
          margin-right: 19px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 370px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -30px;
          margin-top: 400px;
          width: 110%;
        }

        .foot-ul li {
          margin-top: 12px;
        }

        .foot-ul li a {
          font-size: 17px;
        }
      }

      @media (min-width: 401px) and (max-width: 415px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 80px;
          margin-left: 10px;
          margin-top: 10px;
        }

        .star {
          width: 14px;
          margin-top: -11px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 83%;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 345px;
          height: 220px;
          margin-top: 80px;
          margin-right: 33px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 370px;
        }

        #tex {
          margin-top: 30px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 25px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 10%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -20px;
          margin-top: 400px;
          width: 100%;
        }

        .foot-ul li {
          margin-top: 12px;
        }
      }
      @media (min-width: 416px) and (max-width: 433px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 60px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 35px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .star {
          width: 16px;
          margin-top: -11px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 75%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 380px;
          height: 220px;
          margin-top: 80px;
          margin-right: 25px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 230px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 25px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -20px;
          margin-top: 400px;
          width: 90%;
        }

        .foot-ul li {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 340px;
        }
      }

      @media (min-width: 434px) and (max-width: 450px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 70px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 35px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .star {
          width: 16px;
          margin-top: -11px;
          margin-right: -90px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 75%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 380px;
          height: 220px;
          margin-top: 80px;
          margin-right: 30px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 230px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 25px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -20px;
          margin-top: 400px;
          width: 90%;
        }

        .foot-ul li {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 340px;
        }
      }
      @media (min-width: 451px) and (max-width: 469px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 70px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 35px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .star {
          width: 16px;
          margin-top: -11px;
          margin-right: -80px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 90%;
        }

        #tex {
          margin-top: 30px;
        }
        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 410px;
          height: 220px;
          margin-top: 80px;
          margin-right: 24px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 420px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 25px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -10px;
          margin-top: 400px;
          width: 90%;
        }
        .foot-ul li {
          margin-top: 12px;
        }
      }
      @media (min-width: 470px) and (max-width: 499px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 70px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 35px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .star {
          width: 18px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;

          width: 85%;
        }

        #tex {
          margin-top: 30px;
        }
        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 435px;
          height: 220px;
          margin-top: 80px;
          margin-right: 18px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 420px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 25px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .oh {
          width: 20%;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -10px;
          margin-top: 400px;
          width: 90%;
        }
        .foot-ul li {
          margin-top: 12px;
        }
      }

      @media (min-width: 261px) and (max-width: 273px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
          font-size: 45px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;
          width: 93%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 250px;
          height: 220px;
          margin-top: 80px;
          margin-right: 12px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        .a_mail,
        .phone {
          margin-left: 15px;
        }

        .meat,
        .calt {
          margin-left: 15px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 230px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 33px;
          margin-top: 350px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 5px;
          display: block;
        }

        .a_mail {
          text-align: center;
        }
      }

      @media (min-width: 274px) and (max-width: 280px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 20px;
          margin-top: 150px;
          font-size: 45px;
        }

        article .will {
          margin-left: 20px;
          margin-top: 50px;
          width: 93%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 20px;
          margin-top: -12px;
        }

        .area {
          margin-left: 20px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 250px;
          height: 220px;
          margin-top: 80px;
          margin-right: 13px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 20px;
          margin-top: 7px;
        }

        .a_mail,
        .phone {
          margin-left: 15px;
        }

        .meat,
        .calt {
          margin-left: 15px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 230px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 20px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 33px;
          margin-top: 350px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 5px;
          display: block;
        }

        .a_mail {
          text-align: center;
        }
      }

      @media (min-width: 281px) and (max-width: 293px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 15px;
          margin-top: 150px;
          font-size: 45px;
        }

        article .will {
          margin-left: 15px;
          margin-top: 50px;
          width: 90%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 15px;
          margin-top: -12px;
        }

        .area {
          margin-left: 15px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 224px;
          height: 220px;
          margin-top: 80px;
          margin-right: 35px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 15px;
          margin-top: 7px;
        }

        .a_mail,
        .phone {
          margin-left: 15px;
        }

        .meat,
        .calt {
          margin-left: 15px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 259px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 10px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 50px;
          margin-top: 350px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 5px;
          display: block;
        }

        .a_mail {
          text-align: center;
        }
      }
      @media (min-width: 294px) and (max-width: 299px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        /* .oh {
          width: 70px;
        }

        .star {
          width: 18px;
          margin-top: -5px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 15px;
          margin-top: 150px;
          font-size: 45px;
        }

        article .will {
          margin-left: 15px;
          margin-top: 50px;
          width: 80%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 15px;
          margin-top: -12px;
        }

        .area {
          margin-left: 15px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 224px;
          height: 220px;
          margin-top: 80px;
          margin-right: 35px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 15px;
          margin-top: 7px;
        }

        .a_mail,
        .phone {
          margin-left: 15px;
        }

        .meat,
        .calt {
          margin-left: 15px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 259px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 10px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 50px;
          margin-top: 350px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 5px;
          display: block;
        }

        .a_mail {
          text-align: center;
        }
      }

      @media (min-width: 100px) and (max-width: 260px) {
        .contain {
          background-color: #56b381;
          position: fixed;
          overflow: hidden;
          height: 50px;
          top: 0;
          width: 100%;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
        }

        .star {
          width: 13px;
          margin-top: -12px;
          margin-right: -100px;
          margin-left: 20px;
        }
        .meat,
        .calt {
          margin-left: 15px;
        }

        .a_mail,
        .phone {
          text-decoration: none;
          font-family: "Inter", sans-serif;
          font-family: "Poppins", sans-serif;
          font-family: "Roboto", sans-serif;
          font-size: 16px;
          font-weight: 600;
          color: #168bff;
          margin-left: 12px;
        }

        .navigation ul {
          float: right;
          margin-top: 30px;
          margin-right: 50px;
        }

        article .say {
          margin-left: 1px;
          margin-top: 150px;
        }

        article .will {
          margin-left: 10px;
          margin-top: 50px;
          width: 90%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 10px;
          margin-top: -12px;
        }

        .area {
          margin-left: 10px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 220px;
          height: 220px;
          margin-top: 80px;
          margin-right: 7px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 10px;
          margin-top: 7px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 200px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 10px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 20px;
          margin-top: 350px;
        }

        .foot-ul li {
          width: 70px;
          margin-top: 5px;
          display: block;
        }

        .a_mail {
          text-align: center;
        }
      }

      @media (min-width: 500px) and (max-width: 519px) {
        article .say {
          margin-left: 40px;
        }

        article .will {
          margin-left: 40px;
          margin-top: 50px;
          width: 83%;
        }

        /* .oh {
          width: 80px;
        } */

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 40px;
          margin-top: -12px;
        }

        .area {
          margin-left: 40px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 440px;
          height: 220px;
          margin-top: 100px;
          margin-right: 32px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 40px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 40px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -20px;
          width: 80%;
          margin-top: 400px;
        }
        .foot-ul li {
          margin-top: 12px;
        }
      }
      @media (min-width: 520px) and (max-width: 540px) {
        article .say {
          margin-left: 40px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 40px;
          margin-top: 50px;
          width: 64%;
        }

        #tex {
          margin-top: 30px;
        }

        .email,
        .subject {
          margin-left: 40px;
          margin-top: -12px;
        }

        .area {
          margin-left: 40px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 490px;
          height: 220px;
          margin-top: 100px;
          margin-right: 16px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 40px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 40px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: -20px;
          width: 80%;
          margin-top: 400px;
        }
        .foot-ul li {
          margin-top: 12px;
        }
      }

      @media (min-width: 541px) and (max-width: 570px) {
        article .say {
          margin-left: 50px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 440px;
        }

        #tex {
          margin-top: 12px;
        }

        article .will {
          margin-left: 50px;
          margin-top: 50px;
          width: 75%;
        }

        .email,
        .subject {
          margin-left: 50px;
          margin-top: -12px;
        }

        .area {
          margin-left: 50px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 485px;
          height: 220px;
          margin-top: 80px;
          margin-right: 30px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 50px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 50px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: -10px;
        }
      }

      @media (min-width: 571px) and (max-width: 580px) {
        article .say {
          margin-left: 50px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 440px;
        }

        article .will {
          margin-left: 50px;
          margin-top: 50px;
          width: 75%;
        }

        #tex {
          margin-top: 12px;
        }

        .email,
        .subject {
          margin-left: 50px;
          margin-top: -12px;
        }

        .area {
          margin-left: 50px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 480px;
          height: 220px;
          margin-top: 80px;
          margin-right: 40px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 50px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 50px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 20px;
        }
      }

      @media (min-width: 581px) and (max-width: 590px) {
        article .say {
          margin-left: 70px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 70px;
          margin-top: 50px;
          width: 73%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 450px;
        }

        .email,
        .subject {
          margin-left: 70px;
          margin-top: -12px;
        }

        .area {
          margin-left: 70px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 470px;
          height: 220px;
          margin-top: 80px;
          margin-right: 60px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 70px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 70px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 20px;
        }
      }
      @media (min-width: 591px) and (max-width: 630px) {
        article .say {
          margin-left: 60px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 60px;
          margin-top: 50px;
          width: 69%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 460px;
        }

        .email,
        .subject {
          margin-left: 60px;
          margin-top: -12px;
        }

        .area {
          margin-left: 60px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 80px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 60px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 60px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 20px;
        }
      }
      @media (min-width: 631px) and (max-width: 640px) {
        article .say {
          margin-left: 60px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 60px;
          margin-top: 50px;
          width: 68%;
        }
        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 460px;
        }

        .email,
        .subject {
          margin-left: 60px;
          margin-top: -12px;
        }

        .area {
          margin-left: 60px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 440px;
          height: 220px;
          margin-top: 80px;
          margin-right: 120px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 60px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 60px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 60px;
        }
      }

      @media (min-width: 641px) and (max-width: 660px) {
        article .say {
          margin-left: 70px;
        }

        article .will {
          margin-left: 70px;
          margin-top: 50px;
          width: 65%;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 15px;
          margin-top: -11px;
          margin-right: -70px;
          margin-left: 20px;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 500px;
        }

        .email,
        .subject {
          margin-left: 70px;
          margin-top: -12px;
        }

        .area {
          margin-left: 70px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 120px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 70px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 70px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 30px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }
      @media (min-width: 661px) and (max-width: 700px) {
        article .say {
          margin-left: 70px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 16px;
          margin-top: -12px;
          margin-right: -60px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 70px;
          margin-top: 50px;
          width: 62%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 500px;
        }

        .email,
        .subject {
          margin-left: 70px;
          margin-top: -12px;
        }

        .area {
          margin-left: 70px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 150px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 70px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 70px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 20px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }
      @media (min-width: 701px) and (max-width: 767px) {
        article .say {
          margin-left: 70px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 16px;
          margin-top: -12px;
          margin-right: -60px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 70px;
          margin-top: 50px;
          width: 56%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 550px;
        }

        .email,
        .subject {
          margin-left: 70px;
          margin-top: -12px;
        }

        .area {
          margin-left: 70px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 180px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 70px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 70px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 30px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }

      @media (min-width: 768px) and (max-width: 799px) {
        article .say {
          margin-left: 80px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 16px;
          margin-top: -12px;
          margin-right: -60px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 80px;
          margin-top: 50px;
          width: 43%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 530px;
        }

        .email,
        .subject {
          margin-left: 80px;
          margin-top: -12px;
        }

        .area {
          margin-left: 80px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 230px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 80px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 80px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 60px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }

      @media (min-width: 800px) and (max-width: 855px) {
        article .say {
          margin-left: 130px;
        }

        .oh {
          width: 50px;
          margin-left: 10px;
          margin-top: 7px;
        }

        .contain {
          height: 50px;
        }

        .star {
          width: 16px;
          margin-top: -12px;
          margin-right: -60px;
          margin-left: 20px;
        }

        article .will {
          margin-left: 130px;
          margin-top: 50px;
          width: 51%;
        }

        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 550px;
        }

        .email,
        .subject {
          margin-left: 130px;
          margin-top: -12px;
        }

        .area {
          margin-left: 130px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 220px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 130px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 130px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 110px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }
      @media (min-width: 856px) and (max-width: 894px) {
        article .say {
          margin-left: 130px;
        }

        .oh {
          margin-left: 10px;
          margin-top: 15px;
        }

        article .will {
          margin-left: 130px;
          margin-top: 50px;
          width: 48%;
        }
        #tex {
          margin-top: 12px;
        }

        #tex,
        #emaill,
        #sub,
        #rea {
          width: 550px;
        }

        .email,
        .subject {
          margin-left: 130px;
          margin-top: -12px;
        }

        .area {
          margin-left: 130px;
          margin-top: 10px;
        }

        article .mail .white_cont {
          float: right;
          background-color: white;
          width: 450px;
          height: 220px;
          margin-top: 80px;
          margin-right: 280px;
          border-radius: 10px;
        }
        article .text {
          margin-left: 130px;
          margin-top: 7px;
        }

        .sp {
          margin-top: 30px;
          margin-left: 130px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-top: 400px;
          margin-left: 110px;
        }

        .foot-ul li {
          margin-top: 10px;
        }
      }

      @media (min-width: 895px) and (max-width: 929px) {
        article .say {
          margin-left: 100px;
        }

        article .will {
          margin-left: 100px;
          width: 37%;
        }

        .email,
        .subject {
          margin-left: 100px;
        }

        .area {
          margin-left: 100px;
        }

        article .mail .white_cont {
          margin-right: 50px;
          width: 300px;
          margin-top: -440px;
        }

        article .text {
          margin-left: 100px;
        }

        .sp {
          margin-left: 100px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 500px;
        }
      }

      @media (min-width: 930px) and (max-width: 974px) {
        article .say {
          margin-left: 100px;
        }

        article .will {
          margin-left: 100px;
          width: 44%;
        }

        .email,
        .subject {
          margin-left: 100px;
        }

        .area {
          margin-left: 100px;
        }

        article .mail .white_cont {
          margin-right: 40px;
          margin-top: -425px;
        }

        article .text {
          margin-left: 100px;
        }

        .sp {
          margin-left: 100px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 550px;
          width: 40%;
        }
      }

      @media (min-width: 975px) and (max-width: 1000px) {
        article .say {
          margin-left: 100px;
        }

        article .will {
          margin-left: 100px;
          width: 43%;
        }

        .email,
        .subject {
          margin-left: 100px;
        }

        .area {
          margin-left: 100px;
        }

        article .mail .white_cont {
          margin-right: 40px;
          margin-top: -425px;
        }

        article .text {
          margin-left: 100px;
        }

        .sp {
          margin-left: 100px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 550px;
          width: 40%;
        }
      }
      @media (min-width: 1001px) and (max-width: 1014px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
          width: 43%;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 80px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 620px;
        }
      }

      @media (min-width: 1015px) and (max-width: 1038px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
          width: 42%;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 80px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 620px;
        }
      }
      @media (min-width: 1039px) and (max-width: 1063px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
          width: 41%;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 80px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 620px;
        }
      }
      @media (min-width: 1064px) and (max-width: 1090px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
          width: 40%;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 80px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 620px;
        }
      }

      @media (min-width: 1091px) and (max-width: 1100px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
          width: 39%;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 80px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 620px;
        }
      }
      @media (min-width: 1100px) and (max-width: 1200px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 150px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 600px;
        }
      }

      @media (min-width: 1201px) and (max-width: 1300px) {
        article .say {
          margin-left: 140px;
        }

        article .will {
          margin-left: 140px;
        }

        .email,
        .subject {
          margin-left: 140px;
        }

        .area {
          margin-left: 140px;
        }

        article .mail .white_cont {
          margin-right: 250px;
        }
        article .text {
          margin-left: 140px;
        }

        .sp {
          margin-left: 140px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 670px;
        }
      }

      @media (min-width: 1301px) and (max-width: 1500px) {
        article .say {
          margin-left: 220px;
        }

        article .will {
          margin-left: 220px;
        }

        .email,
        .subject {
          margin-left: 220px;
        }

        .area {
          margin-left: 220px;
        }

        article .mail .white_cont {
          margin-right: 230px;
          margin-top: -420px;
        }
        article .text {
          margin-left: 220px;
        }

        .sp {
          margin-left: 220px;
        }

        .calt,
        .meat {
          color: #000;
        }

        .foot-ul {
          /* float: right; */

          margin-left: 720px;
        }
      }

      .dark {
        background-color: black;
        color: #fff;
      }
    </style>

    <div class="col-sm">
      <div class="contain">
        <div class="navigation">
          <a href="index.php">
            <img class="oh" src="images/logo 4 1.png" width="100px" alt=""
          /></a>
          <ul>
            <li>
              <a href="index.php"
                ><img
                  class="star"
                  src="simple-remove.png"
                  width="20px"
                  style="padding-bottom: 150px"
                  alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section>
      <div class="col-sm">
        <article>
          <h2 class="say">Say hello</h2>
        </article>
      </div>

      <div class="col-sm">
        <article>
          <h4 class="will">
            Have a project or question? Send me a message. I will reply within
            48 hours.
          </h4>
        </article>
      </div>

      <article>

<form action="https://formsubmit.co/luckyekezie91@gmail.com" method="POST">
            
              <div class=" col-sm text">
                <label for="tex">
                  <!-- <span class="name" style="margin-top: 100px">Your name</span>
                  <br /> -->
                  <input
                    class="typ"
                    placeholder="Your name"
                    type="text"
                    name="Name"
                    id="tex"
                    required
                  />
                </label>
              </div>
        
    
              <div class="col-sm email">
                <label for="emaill">
                  <!-- <span class="eml">Email address</span> <br /> -->
                  <input
                    type="email"
                    placeholder="Email address"
                    name="Email"
                    id="emaill"
                    required
                  />
                </label>
              </div>
            
    
            
              <div class=" col-sm subject">
                <label for="sub">
                  <!-- <span class="subj">Subject</span> <br /> -->
                  <input type="text" placeholder="Subject" name="Subject" id="sub" required/>
                </label>
              </div>
            
    
            
              <div class="col-sm area">
                <label for="rea">
                  <!-- <span class="message">Write your message</span> <br /> -->
                  <textarea
                    name="Message"
                    placeholder="Write your message"
                    id="rea"
                    cols="30"
                    rows="10"
                    required
                  ></textarea>
                </label>
              </div>

              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="_next" value="https://messageee.herokuapp.com/">
    
      
            <a class="but-on">
              <button type="submit" id="submit" class="btn sp">
                <span class="fraction">SEND</span>
                <!-- <i class="icon icon-tail-right gr-text-8 font-weight-bolder"></i> -->
                <!-- <img src="images/tail-right (1).png" width="18px" alt="" /> -->
                <i
                  class="fa-solid fa-arrow-right-long gr-text-8 font-weight-bolder"
                ></i>
              </button>
            </a>

          </form>

      

        <div class="mail">
          <div class="col-sm">
            <div class="white_cont">
              <h4 class="meat">Email me at</h4>
              <div class="ba-w">
                <a
                  class="a_mail"
                  href="mailto:
          luckyekezie91@gmail.com"
                >
                  luckyekezie91@gmail.com</a
                >
              </div>

              <h4 class="calt">Call me at</h4>
              <div class="cal">
                <a class="phone" href="tel:+234 907 677 6981">
                  +234 907 677 6981</a
                >
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>

    <footer class="hei">
      <ul class="foot-ul">
        <li>
          <a href="http://www.linkedin.com/in/lucky-ekezie"
            >LINKEDIN</a
          >
        </li>
        <li>
          <a href="https://twitter.com/CeejayLucky">TWITTER</a>
        </li>
        <li>
          <a
            href="https://www.facebook.com/profile.php?id=100070488529526"
          
            >FACEBOOK</a
          >
        </li>
        <li>
          <a href="https://www.behance.net/luckyekezie_projects"
            ><span class="beh">BEHANCE</span></a
          >
        </li>
      </ul>
    </footer>
    <!-- <button class="sp" onclick="myfunction()"><span>dark mode</span></button> -->

    <!-- <button onclick="myf()">light mode</button> -->

    <!-- <script>
      function myfunction() {
        var element = document.querySelector(" article .mail .white_cont ");
        element.querySelector(article.mail.white_cont).toggle("dark");
      }

      // function myf() {
      //   var change = document.body;
      //   change.classList.toggle("white");
      // }
    </script> -->

    <!-- <script src="https://smtpjs.com/v3/smtp.js">
     </script>
    <script>

const form = document.querySelector(".contact_form");
form.addEventListener('submit', e => {
  e.preventDefault();

  
var name = document.getElementById('tex').value;
var emaill = document.getElementById('emaill').value;
var sub = document.getElementById('sub').value;
var rea = document.getElementById('rea').value;
var body = "Your name: " +name + "<br/> Email address: " + emaill +  "<br/> Subject: " + sub +  "<br/> Write your message: " + rea

document.querySelector(".contact_form").reset();

sendEmail(name,emaill,sub,rea);

})

function sendEmail(name,emaill,sub,rea){
  Email.send({
    Host:"smtp.elasticemail.com",
    Username :'iamoluchimercy@gmail.com',
    Password : "362F25D199C001427876511DC189AFCB27A4",
    To :  "iamoluchimercy@gmail.com", 
    From : emaill,
    Subject : sub,
    Body : body
}).then((success) => {
alert("sent successfully");
}).catch((error) => {
  alert("not sent");
})
} -->
    </script>
    

  </body>
</html>

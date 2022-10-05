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

    <link
      rel="shortcut icon"
      href="images/logo icon 2.png"
      type="image/x-icon"
    />

    <title>About Me</title>
  </head>
  <body>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Poppins:wght@400;900&family=Roboto&display=swap");

      body {
        background: #168bff;
      }

      * {
        margin: 0;
        padding: 0;
      }

      .contain {
        background-color: #168bff;
        position: fixed;
        overflow: hidden;
        height: 80px;
        top: 0;
        width: 100%;
      }

      .star:hover {
        transform: scale(1.1);
        transition: all 0.2s;
      }

      .oh {
        margin-top: 13px;
        margin-left: 30px;
      }

      .name {
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        color: #fff;
        font-weight: 900;
        font-size: 45px;
        margin-left: 20px;
        margin-top: 5px;
      }

      .par1 {
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        margin-left: 20px;
        font-weight: 500;
        font-style: normal;
        margin-top: 30px;
        line-height: 32px;
        color: #fff;
        width: 440px;
        font-size: 17px;
        word-spacing: 1px;
      }

      .par2 {
        margin-left: 20px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;

        font-style: normal;
        font-weight: 500;
        margin-top: 20px;
        line-height: 32px;
        color: #fff;
        width: 450px;
        font-size: 17px;
        word-spacing: 1px;
      }
      .par3 {
        margin-left: 20px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;

        font-style: normal;
        margin-top: 20px;
        line-height: 32px;
        color: #fff;
        width: 450px;
        font-size: 17px;
        word-spacing: 1px;
      }

      strong {
        margin-left: 20px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-weight: lighter;
        font-style: normal;
        margin-top: 20px;
        font-weight: 600;
        line-height: 32px;
        color: #fff;
        font-size: 17px;
        letter-spacing: 1px;
      }

      .strong2 {
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-weight: lighter;
        font-style: normal;
        margin-top: 30px;
        font-weight: 600;
        line-height: 32px;
        color: #fff;
        font-size: 17px;
        letter-spacing: 1px;
        margin-left: 27px;
      }

      span {
        margin-left: 20px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        margin-top: 20px;
        line-height: 32px;
        color: #fff;
        font-size: 17px;
      }

      .sign {
        margin-left: 20px;
        margin-top: 40px;
      }
      .par5 {
        margin-top: 30px;
        margin-left: -10px;
      }

      .design {
        margin-left: 27px;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        margin-top: 20px;
        line-height: 32px;
        color: #fff;
        font-size: 16px;
      }

      .hei {
        height: 200px;
      }

      .foot-ul {
        margin-left: -38px;
      }

      .li1 {
        display: inline-block;
        margin-left: 23px;
        margin-top: 40px;
      }

      .a1 {
        text-decoration: none;
        color: #fff;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 2px;
      }

      .a1:hover {
        color: white;
      }

      .container {
        margin-top: 165px;
        margin-left: 150px;
      }

      .star {
        margin-top: 23px;
        width: 20px;
        float: right;
        margin-right: 40px;
      }

      @media (min-width: 200px) and (max-width: 250px) {
        .contain {
          height: 50px;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 10px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 108%;
          margin-left: 36px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: -10px;
        }

        .par5 {
          margin-top: -5px;
        }

        .foot-ul {
          margin-left: 5px;
          margin-top: 30px;
        }
        .a1 {
          font-size: 11px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }

      @media (min-width: 251px) and (max-width: 270px) {
        .contain {
          height: 50px;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 10px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 36px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 110%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: -10px;
        }

        .par5 {
          margin-top: -5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        .a1 {
          font-size: 11px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 271px) and (max-width: 280px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 10px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 36px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 105%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: -10px;
        }

        .par5 {
          margin-top: -5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        .a1 {
          font-size: 11px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 281px) and (max-width: 299px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 10px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 105%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: -10px;
        }

        .par5 {
          margin-top: -5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        .a1 {
          font-size: 11px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 300px) and (max-width: 320px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 15px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        .a1 {
          font-size: 12px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 321px) and (max-width: 350px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 10px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 351px) and (max-width: 360px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 361px) and (max-width: 380px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 105%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 381px) and (max-width: 400px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 105%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 105%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 401px) and (max-width: 430px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 50px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }
        .par2,
        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 50px;
        }

        strong,
        span {
          margin-left: 50px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 60px;
          font-size: 15px;
        }

        .sign {
          margin-left: 50px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 10px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 431px) and (max-width: 450px) {
        .contain {
          height: 50px;

          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 50px;
        }

        .star {
          width: 15px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 55px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }
        .par2,
        .par3 {
          width: 105%;
          font-size: 15px;
          margin-left: 55px;
        }

        strong,
        span {
          margin-left: 55px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 65px;
          font-size: 15px;
        }

        .sign {
          margin-left: 55px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 12px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 451px) and (max-width: 480px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 110px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 35px;
        }

        .name {
          font-size: 25px;
          margin-left: 55px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }
        .par2 {
          width: 105%;
          font-size: 15px;
          margin-left: 55px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }

        strong,
        span {
          margin-left: 55px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 65px;
          font-size: 15px;
        }

        .sign {
          margin-left: 55px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 481px) and (max-width: 500px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 37px;
        }

        .name {
          font-size: 31px;
          margin-left: 55px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }
        .par2 {
          width: 103%;
          font-size: 15px;
          margin-left: 55px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }

        strong,
        span {
          margin-left: 55px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 65px;
          font-size: 15px;
        }

        .sign {
          margin-left: 55px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 501px) and (max-width: 530px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 37px;
        }

        .name {
          font-size: 31px;
          margin-left: 55px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }
        .par2 {
          width: 103%;
          font-size: 15px;
          margin-left: 55px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }

        strong,
        span {
          margin-left: 55px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 65px;
          font-size: 15px;
        }

        .sign {
          margin-left: 55px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 531px) and (max-width: 550px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 100px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 110%;
          margin-left: 37px;
        }

        .name {
          font-size: 31px;
          margin-left: 55px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }
        .par2 {
          width: 103%;
          font-size: 15px;
          margin-left: 55px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 55px;
        }

        strong,
        span {
          margin-left: 55px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 65px;
          font-size: 15px;
        }

        .sign {
          margin-left: 55px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 551px) and (max-width: 580px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 120px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 70px;
        }

        .name {
          font-size: 31px;
          margin-left: 75px;
          margin-top: 5px;
        }

        .par1 {
          width: 90%;
          font-size: 15px;
          margin-left: 75px;
        }
        .par2 {
          width: 103%;
          font-size: 15px;
          margin-left: 75px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 75px;
        }

        strong,
        span {
          margin-left: 75px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 85px;
          font-size: 15px;
        }

        .sign {
          margin-left: 75px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 35px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 581px) and (max-width: 600px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 15px;
        }

        .container {
          margin-top: 120px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 82px;
        }

        .name {
          font-size: 31px;
          margin-left: 75px;
          margin-top: 5px;
        }

        .par1 {
          width: 90%;
          font-size: 15px;
          margin-left: 75px;
        }
        .par2 {
          width: 103%;
          font-size: 15px;
          margin-left: 75px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 75px;
        }

        strong,
        span {
          margin-left: 75px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 85px;
          font-size: 15px;
        }

        .sign {
          margin-left: 75px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 35px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 601px) and (max-width: 630px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 120px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 92px;
        }

        .name {
          font-size: 31px;
          margin-left: 75px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 75px;
        }
        .par2 {
          width: 105%;
          font-size: 15px;
          margin-left: 75px;
        }

        .par3 {
          width: 100%;
          font-size: 15px;
          margin-left: 75px;
        }

        strong,
        span {
          margin-left: 75px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 85px;
          font-size: 15px;
        }

        .sign {
          margin-left: 75px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 35px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 631px) and (max-width: 660px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 17px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 130px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 98px;
        }

        .name {
          font-size: 31px;
          margin-left: 75px;
          margin-top: 5px;
        }

        .par1 {
          width: 110%;
          font-size: 15px;
          margin-left: 75px;
        }
        .par2 {
          width: 110%;
          font-size: 15px;
          margin-left: 75px;
        }

        .par3 {
          width: 110%;
          font-size: 15px;
          margin-left: 75px;
        }

        strong,
        span {
          margin-left: 75px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 85px;
          font-size: 15px;
        }

        .sign {
          margin-left: 75px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 35px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 661px) and (max-width: 690px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 140px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 106px;
        }

        .name {
          font-size: 31px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 691px) and (max-width: 699px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 140px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 120px;
        }

        .name {
          font-size: 35px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 110%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 700px) and (max-width: 720px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 150px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 130px;
        }

        .name {
          font-size: 35px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 123%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 120%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 123%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 721px) and (max-width: 750px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 160px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 135px;
        }

        .name {
          font-size: 35px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 123%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 120%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 123%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
          margin-top: 30px;
        }
        /* .a1 {
          font-size: 13px;
        } */

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 751px) and (max-width: 767px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 160px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 102%;
          margin-left: 155px;
        }

        .name {
          font-size: 35px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 130%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 120%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 123%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 50%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 768px) and (max-width: 774px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 170px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 70px;
        }

        .name {
          font-size: 35px;
          margin-left: 80px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          font-size: 15px;
          margin-left: 80px;
        }
        .par2 {
          width: 95%;
          font-size: 15px;
          margin-left: 80px;
        }

        .par3 {
          width: 96%;
          font-size: 15px;
          margin-left: 80px;
        }

        strong,
        span {
          margin-left: 80px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 90px;
          font-size: 15px;
        }

        .sign {
          margin-left: 80px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 35px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 775px) and (max-width: 780px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 170px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 70px;
        }

        .name {
          font-size: 35px;
          margin-left: 90px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          font-size: 15px;
          margin-left: 90px;
        }
        .par2 {
          width: 95%;
          font-size: 15px;
          margin-left: 90px;
        }

        .par3 {
          width: 96%;
          font-size: 15px;
          margin-left: 90px;
        }

        strong,
        span {
          margin-left: 90px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 100px;
          font-size: 15px;
        }

        .sign {
          margin-left: 90px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 45px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 781px) and (max-width: 800px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 170px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 90px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          font-size: 15px;
          margin-left: 90px;
        }
        .par2 {
          width: 95%;
          font-size: 15px;
          margin-left: 90px;
        }

        .par3 {
          width: 96%;
          font-size: 15px;
          margin-left: 90px;
        }

        strong,
        span {
          margin-left: 90px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 100px;
          font-size: 15px;
        }

        .sign {
          margin-left: 90px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 45px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 801px) and (max-width: 830px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 170px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 100px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 100px;
        }
        .par2 {
          width: 95%;
          font-size: 15px;
          margin-left: 100px;
        }

        .par3 {
          width: 96%;
          font-size: 15px;
          margin-left: 100px;
        }

        strong,
        span {
          margin-left: 100px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 120px;
          font-size: 15px;
        }

        .sign {
          margin-left: 100px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 68px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 831px) and (max-width: 850px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 100px;
          margin-top: 5px;
        }

        .par1 {
          width: 100%;
          font-size: 15px;
          margin-left: 100px;
        }
        .par2 {
          width: 95%;
          font-size: 15px;
          margin-left: 100px;
        }

        .par3 {
          width: 96%;
          font-size: 15px;
          margin-left: 100px;
        }

        strong,
        span {
          margin-left: 100px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 120px;
          font-size: 15px;
        }

        .sign {
          margin-left: 100px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 68px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 851px) and (max-width: 880px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 100px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 100px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }

        strong,
        span {
          margin-left: 100px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 120px;
          font-size: 15px;
        }

        .sign {
          margin-left: 100px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 68px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 881px) and (max-width: 900px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 100px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 100px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }

        strong,
        span {
          margin-left: 100px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 120px;
          font-size: 15px;
        }

        .sign {
          margin-left: 100px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 68px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 901px) and (max-width: 920px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 112%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 100px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 100px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 100px;
        }

        strong,
        span {
          margin-left: 100px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 120px;
          font-size: 15px;
        }

        .sign {
          margin-left: 100px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 68px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 921px) and (max-width: 950px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 122%;
          margin-left: 80px;
        }

        .name {
          font-size: 35px;
          margin-left: 120px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 120px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 120px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 120px;
        }

        strong,
        span {
          margin-left: 120px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 140px;
          font-size: 15px;
        }

        .sign {
          margin-left: 120px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 88px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 951px) and (max-width: 970px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 132%;
          margin-left: 85px;
        }

        .name {
          font-size: 37px;
          margin-left: 140px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 140px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 140px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 140px;
        }

        strong,
        span {
          margin-left: 140px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 160px;
          font-size: 15px;
        }

        .sign {
          margin-left: 140px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 971px) and (max-width: 991px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .luck {
          /* width: 280px; */
          width: 132%;
          margin-left: 85px;
        }

        .name {
          font-size: 37px;
          margin-left: 160px;
          margin-top: 5px;
        }

        .par1 {
          width: 120%;
          font-size: 15px;
          margin-left: 160px;
        }
        .par2 {
          width: 122%;
          font-size: 15px;
          margin-left: 160px;
        }

        .par3 {
          width: 120%;
          font-size: 15px;
          margin-left: 160px;
        }

        strong,
        span {
          margin-left: 160px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 170px;
          font-size: 15px;
        }

        .sign {
          margin-left: 160px;
          width: 70%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 120px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        }
      }
      @media (min-width: 992px) and (max-width: 1000px) {
        .contain {
          height: 60px;
          width: 100%;
        }

        .oh {
          margin-top: 13px;
          margin-left: 10px;
          width: 60px;
        }

        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 85px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          font-size: 37px;
          margin-left: 70px;
          margin-top: 5px;
        }

        .par1 {
          width: 85%;
          font-size: 15px;
          margin-left: 70px;
        }
        .par2 {
          width: 90%;
          font-size: 15px;
          margin-left: 70px;
        }

        .par3 {
          width: 85%;
          font-size: 15px;
          margin-left: 70px;
        }

        strong,
        span {
          margin-left: 70px;
          font-size: 15px;
        }

        .strong2,
        .design {
          margin-left: 80px;
          font-size: 15px;
        }

        .sign {
          margin-left: 70px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 15px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1001px) and (max-width: 1020px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 95px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 90px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          margin-left: 90px;
        }
        .par2 {
          width: 90%;
          margin-left: 90px;
        }

        .par3 {
          width: 85%;
          margin-left: 90px;
        }

        strong,
        span {
          margin-left: 90px;
        }

        .strong2,
        .design {
          margin-left: 100px;
        }

        .sign {
          margin-left: 100px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1021px) and (max-width: 1050px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 105px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 90px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          margin-left: 90px;
        }
        .par2 {
          width: 90%;
          margin-left: 90px;
        }

        .par3 {
          width: 85%;
          margin-left: 90px;
        }

        strong,
        span {
          margin-left: 90px;
        }

        .strong2,
        .design {
          margin-left: 100px;
        }

        .sign {
          margin-left: 100px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1051px) and (max-width: 1080px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 105px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 90px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;
          margin-left: 90px;
        }
        .par2 {
          width: 90%;
          margin-left: 90px;
        }

        .par3 {
          width: 85%;
          margin-left: 90px;
        }

        strong,
        span {
          margin-left: 90px;
        }

        .strong2,
        .design {
          margin-left: 100px;
        }

        .sign {
          margin-left: 100px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 40px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1081px) and (max-width: 1100px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 115px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 110px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;

          margin-left: 110px;
        }
        .par2 {
          width: 90%;

          margin-left: 110px;
        }

        .par3 {
          width: 85%;

          margin-left: 110px;
        }

        strong,
        span {
          margin-left: 110px;
        }

        .strong2,
        .design {
          margin-left: 120px;
        }

        .sign {
          margin-left: 110px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 60px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1101px) and (max-width: 1110px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 115px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 110px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;

          margin-left: 110px;
        }
        .par2 {
          width: 90%;

          margin-left: 110px;
        }

        .par3 {
          width: 85%;

          margin-left: 110px;
        }

        strong,
        span {
          margin-left: 110px;
        }

        .strong2,
        .design {
          margin-left: 120px;
        }

        .sign {
          margin-left: 110px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 60px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1111px) and (max-width: 1130px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 125px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 130px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;

          margin-left: 130px;
        }
        .par2 {
          width: 90%;

          margin-left: 130px;
        }

        .par3 {
          width: 85%;

          margin-left: 130px;
        }

        strong,
        span {
          margin-left: 130px;
        }

        .strong2,
        .design {
          margin-left: 140px;
        }

        .sign {
          margin-left: 130px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 80px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1131px) and (max-width: 1160px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 135px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 140px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;

          margin-left: 140px;
        }
        .par2 {
          width: 90%;

          margin-left: 140px;
        }

        .par3 {
          width: 85%;

          margin-left: 140px;
        }

        strong,
        span {
          margin-left: 140px;
        }

        .strong2,
        .design {
          margin-left: 150px;
        }

        .sign {
          margin-left: 140px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 90px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
      @media (min-width: 1161px) and (max-width: 1200px) {
        .luck {
          /* width: 280px; */
          width: 100%;
          margin-left: 135px;
        }

        .star {
          width: 18px;
          margin-right: 20px;
          margin-top: 17px;
        }

        .container {
          margin-top: 175px;
          margin-left: -50px;
        }

        .name {
          margin-left: 140px;
          margin-top: 5px;
        }

        .par1 {
          width: 95%;

          margin-left: 140px;
        }
        .par2 {
          width: 90%;

          margin-left: 140px;
        }

        .par3 {
          width: 85%;

          margin-left: 140px;
        }

        strong,
        span {
          margin-left: 140px;
        }

        .strong2,
        .design {
          margin-left: 150px;
        }

        .sign {
          margin-left: 140px;
          width: 60%;
          margin-top: 5px;
        }

        .foot-ul {
          margin-left: 90px;
        }

        /* .foot-ul {
          margin-left: 100px;
          margin-top: 30px;
        }

        .li1 {
          display: inline-block;
          margin-left: 10px;
          margin-top: 10px;
        } */
      }
    </style>

    <!-- header icon
    <div class="contain">
      <div class="navigation">
        <a href="#">
          <img class="oh" src="images/logo 3 1.png" width="100px" alt="" />
        </a>

        <ul>
          <li>
            <a href="#"
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
    </div> -->

    <!-- header icon -->
    <div class="contain">
      <div class="navigation">
        <div class="row">
          <div class="col-md-12">
            <a href="index.php">
              <img class="oh" src="images/logo 3 1.png" width="100px" alt="" />
            </a>
            <a href="index.php"
              ><img class="star" src="simple-remove.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>

    <!-- bootstrap -->
    <div class="container">
      <div class="row">
        <!-- image -->
        <div class="col-md-5">
          <div class="make">
            <img src="images/Img.png" class="luck" width="450px" alt="" />
          </div>
        </div>

        <!-- text -->
        <div class="col-md-7 col7">
          <h2 class="name">Lucky Ekezie</h2>

          <p class="par1">
            I am Lucky Ekezie, a Product designer, currently leading Bosscab's
            (ride experience) team, where we help improve ride booking process,
            payments with in-app wallet, group wallet payments, and riders
            safety management. More recently, I am building with the design team
            at Synventory, to develop inventory management solutions for
            businesses across Africa.
          </p>

          <p class="par2">
            Previously, I supported Tailorgang's Design Language System,
            designed a platform for Africa’s largest verified mechanic repair
            network, and helped develop Africa’s most powerful business
            automation tool.
          </p>

          <p class="par3">
            I am passionate about emerging technologies, building start-ups,
            user experience, interaction design and brand identity. With my
            background knowledge in Branding and strategy, I have developed
            brand identity for start up businesses in various industries across
            fashion, waste management, fintech, advertising, banking and ICT.
          </p>

          <p class="par4" style="margin-top: 50px">
            <span>Contact</span> <br />
            <strong> luckyekezie91@gmail.com</strong>
          </p>

          <svg
            class="sign"
            width="350"
            height="98"
            viewBox="0 0 368 98"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M14.91 51.13C15.9367 51.13 18.8767 49.6367 23.73 46.65C28.63 43.6633 34.0433 39.8367 39.97 35.17C45.9433 30.5033 51.2633 25.5333 55.93 20.26C60.6433 14.94 63.5367 9.87666 64.61 5.07C64.6567 4.74333 64.68 4.44 64.68 4.16C64.68 3.36667 64.47 2.76 64.05 2.34C63.63 1.92 63.14 1.64 62.58 1.5C62.02 1.31333 61.5533 1.22 61.18 1.22C58.2867 1.22 55.1367 2.36333 51.73 4.65C48.3233 6.93666 44.87 9.87666 41.37 13.47C37.9167 17.0633 34.6033 20.9133 31.43 25.02C28.3033 29.08 25.48 33 22.96 36.78C20.4867 40.5133 18.5033 43.71 17.01 46.37C15.5633 48.9833 14.84 50.5467 14.84 51.06L14.91 51.13ZM49.98 67.44C48.16 67.44 46.0367 68 43.61 69.12C41.1833 70.2867 38.5933 71.7333 35.84 73.46C33.1333 75.1867 30.4033 76.9833 27.65 78.85C23.8233 81.51 20.23 83.82 16.87 85.78C13.5567 87.74 10.8267 88.7667 8.68 88.86C8.07333 88.86 7.51333 88.79 7 88.65C5.55333 88.23 4.52667 87.39 3.92 86.13C3.31333 84.9167 3.01 83.3067 3.01 81.3C3.01 78.3133 3.43 75.1867 4.27 71.92C5.11 68.7 6.02 65.76 7 63.1C7.98 60.4867 8.77333 58.5033 9.38 57.15C9.70667 56.3567 9.87 55.9133 9.87 55.82C9.82333 55.82 9.61333 55.89 9.24 56.03C8.54 56.31 7.51333 56.6133 6.16 56.94C4.85333 57.3133 3.57 57.5 2.31 57.5C1.56333 57.5 1.02667 57.43 0.7 57.29C0.373333 57.15 0.163333 56.9633 0.07 56.73C0.0233333 56.5433 0 56.38 0 56.24C0 56.0533 0.0933333 55.9133 0.28 55.82C0.513333 55.7733 0.886667 55.75 1.4 55.75C2.14667 55.75 2.96333 55.6333 3.85 55.4C4.73667 55.2133 5.92667 54.8633 7.42 54.35L8.12 54.07C9.14667 53.7433 9.89333 53.4633 10.36 53.23C10.8267 53.0433 11.1767 52.7867 11.41 52.46C11.69 52.1333 11.97 51.62 12.25 50.92C12.3433 50.78 12.4367 50.6167 12.53 50.43C17.1033 41.3767 22.3533 33.07 28.28 25.51C34.2533 17.9033 40.1567 11.7667 45.99 7.1C51.87 2.43333 56.84 0.0999988 60.9 0.0999988C61.46 0.0999988 62.16 0.193332 63 0.379999C63.8867 0.566664 64.68 0.986664 65.38 1.64C66.08 2.24666 66.43 3.22666 66.43 4.58C66.43 8.03333 64.0033 12.77 59.15 18.79C54.2967 24.81 48.0667 30.9233 40.46 37.13C32.9 43.29 24.8033 48.5633 16.17 52.95C15.19 53.4167 14.4667 53.79 14 54.07C13.58 54.3967 13.23 54.77 12.95 55.19C12.67 55.6567 12.3433 56.3333 11.97 57.22C9.87 62.12 8.23667 66.74 7.07 71.08C5.90333 75.4667 5.32 79.0133 5.32 81.72C5.32 82.42 5.36667 83.1667 5.46 83.96C5.6 84.7533 5.92667 85.43 6.44 85.99C6.95333 86.55 7.77 86.83 8.89 86.83C10.8967 86.83 13.5567 85.85 16.87 83.89C20.23 81.9767 23.8467 79.7367 27.72 77.17C30.5667 75.2567 33.39 73.4367 36.19 71.71C38.99 69.9833 41.6267 68.5367 44.1 67.37C46.62 66.25 48.8133 65.69 50.68 65.69C52.1267 65.69 53.3633 65.9467 54.39 66.46C55.4633 67.02 56 67.65 56 68.35C56 68.4433 55.9767 68.5833 55.93 68.77C55.8833 69.0033 55.7667 69.19 55.58 69.33C55.44 69.5167 55.23 69.61 54.95 69.61C54.6233 69.61 54.3433 69.54 54.11 69.4C53.9233 69.26 53.7133 69.0733 53.48 68.84C53.2 68.5133 52.8033 68.1867 52.29 67.86C51.7767 67.58 51.0067 67.44 49.98 67.44ZM84.3283 47C84.3749 47 84.3983 47 84.3983 47C84.4449 47.0467 84.4683 47.07 84.4683 47.07C84.4683 47.1167 84.4683 47.1633 84.4683 47.21C84.4683 47.63 83.8849 48.68 82.7183 50.36C81.5983 52.04 80.1983 53.86 78.5183 55.82C76.8849 57.8267 75.2283 59.5767 73.5483 61.07C71.8683 62.5633 70.5149 63.31 69.4883 63.31C69.4416 63.31 69.3016 63.2867 69.0683 63.24C68.8349 63.1933 68.5783 63.0533 68.2983 62.82C68.0183 62.5867 67.7616 62.2367 67.5283 61.77C67.2949 61.3033 67.1783 60.65 67.1783 59.81C67.1783 57.6167 67.7849 54.98 68.9983 51.9C70.2583 48.8667 71.3083 46.51 72.1483 44.83C72.5216 44.0367 72.7083 43.5933 72.7083 43.5C72.5683 43.5 71.8683 44.1533 70.6083 45.46C69.4416 46.6733 68.0416 48.05 66.4083 49.59C64.7749 51.1767 63.1649 52.5533 61.5783 53.72C59.9916 54.9333 58.6849 55.54 57.6583 55.54C57.0516 55.54 56.4916 55.26 55.9783 54.7C55.4649 54.14 55.2083 53.3233 55.2083 52.25C55.2083 51.0833 55.4649 49.8233 55.9783 48.47C56.4449 47.1167 57.0283 45.95 57.7283 44.97C58.4283 43.9433 59.0816 43.43 59.6883 43.43C59.8283 43.43 59.9916 43.4767 60.1783 43.57C60.4116 43.6633 60.5283 43.8267 60.5283 44.06C60.5283 44.2467 60.2716 44.9 59.7583 46.02C59.2916 47.14 58.7783 48.4 58.2183 49.8C57.7049 51.2467 57.4483 52.39 57.4483 53.23C57.4483 53.93 57.7049 54.28 58.2183 54.28C59.1983 54.28 60.7616 53.2767 62.9083 51.27C65.1016 49.31 67.2483 47.2567 69.3483 45.11C70.6549 43.7567 71.7749 42.6367 72.7083 41.75C73.6883 40.8167 74.3183 40.35 74.5983 40.35C74.6916 40.3967 74.7849 40.4433 74.8783 40.49C74.9716 40.5367 75.0416 40.6067 75.0883 40.7C75.2749 40.7933 75.3683 40.9567 75.3683 41.19V41.33C75.3683 41.89 74.7616 43.6167 73.5483 46.51C72.5683 48.9833 71.5883 51.5967 70.6083 54.35C69.6283 57.15 69.1383 59.3433 69.1383 60.93C69.1383 61.5833 69.3949 61.91 69.9083 61.91H70.1183C70.8649 61.91 71.9849 61.1633 73.4783 59.67C75.0183 58.1767 76.6049 56.4733 78.2383 54.56C79.8716 52.6467 81.2716 50.92 82.4383 49.38C83.6049 47.8867 84.1883 47.1167 84.1883 47.07L84.2583 47H84.3283ZM115.334 47C115.427 47 115.474 47 115.474 47C115.52 47.0467 115.567 47.0933 115.614 47.14C115.614 47.3267 114.447 48.2133 112.114 49.8C109.827 51.3867 106.98 53.1367 103.574 55.05C100.214 57.01 96.8302 58.7133 93.4235 60.16C90.0168 61.6533 87.1935 62.4 84.9535 62.4C84.3468 62.4 83.7635 62.3067 83.2035 62.12C82.1302 61.7 81.3368 61.0233 80.8235 60.09C80.3102 59.2033 80.0535 58.1067 80.0535 56.8C80.0535 53.7667 81.0102 50.5933 82.9235 47.28C84.8368 44.0133 87.1235 41.2367 89.7835 38.95C92.4435 36.6633 94.8935 35.52 97.1335 35.52C98.3002 35.52 99.1868 35.8933 99.7935 36.64C100.4 37.3867 100.704 38.32 100.704 39.44C100.704 40.56 100.424 41.68 99.8635 42.8C99.3502 43.92 98.7435 44.8533 98.0435 45.6C97.3902 46.3467 96.8302 46.72 96.3635 46.72C96.2702 46.72 96.1768 46.6967 96.0835 46.65C95.9902 46.6033 95.9202 46.5333 95.8735 46.44C95.7335 46.2533 95.6635 46.0667 95.6635 45.88C95.6635 45.2267 96.1302 44.41 97.0635 43.43C97.6235 42.7767 98.1602 42.0533 98.6735 41.26C99.1868 40.42 99.4435 39.51 99.4435 38.53V38.32C99.4435 37.9 99.2802 37.5267 98.9535 37.2C98.6268 36.8733 98.2535 36.71 97.8335 36.71H97.6235C95.5235 36.71 93.2602 37.9233 90.8335 40.35C88.4068 42.7767 86.3302 45.6 84.6035 48.82C82.9235 52.0867 82.0835 55.0033 82.0835 57.57C82.0835 58.97 82.3868 59.9267 82.9935 60.44C83.6002 60.9533 84.4402 61.21 85.5135 61.21C88.8735 60.9767 92.9802 59.5767 97.8335 57.01C102.687 54.4433 106.91 52.0167 110.504 49.73C113.35 47.91 114.96 47 115.334 47ZM143.995 46.93C144.089 46.93 144.135 46.9533 144.135 47C144.135 47.0933 143.599 47.6533 142.525 48.68C141.452 49.7067 140.005 50.85 138.185 52.11C136.365 53.4167 134.289 54.56 131.955 55.54C129.669 56.52 127.265 57.01 124.745 57.01C122.879 57.01 121.339 56.73 120.125 56.17C118.959 55.6567 118.049 55.05 117.395 54.35C116.742 53.6967 116.252 53.1367 115.925 52.67C115.599 52.2033 115.365 51.97 115.225 51.97C115.039 51.97 114.759 52.6467 114.385 54C114.012 55.4 113.615 57.01 113.195 58.83C112.729 60.6967 112.332 62.4467 112.005 64.08C111.679 65.76 111.515 66.9033 111.515 67.51C111.515 67.93 111.539 68.28 111.585 68.56V68.84C111.585 69.0267 111.515 69.2133 111.375 69.4C111.235 69.54 111.049 69.61 110.815 69.61C110.442 69.61 110.185 69.47 110.045 69.19C109.905 68.91 109.812 68.6067 109.765 68.28C109.719 67.9533 109.695 67.7433 109.695 67.65V67.58C109.695 65.8067 110.465 61.84 112.005 55.68C113.499 49.5667 115.249 42.9867 117.255 35.94C119.309 28.8467 121.222 22.6867 122.995 17.46C124.815 12.1867 126.052 9.55 126.705 9.55C126.939 9.55 127.055 9.78333 127.055 10.25C127.055 10.67 126.589 12.3733 125.655 15.36C124.769 18.3467 123.719 21.7767 122.505 25.65C121.105 30.0833 119.822 34.1667 118.655 37.9C117.535 41.6333 116.975 43.8267 116.975 44.48H117.045V44.41C117.092 44.3633 117.162 44.3167 117.255 44.27C117.395 44.1767 117.582 44.0367 117.815 43.85C118.422 43.3833 119.099 42.9167 119.845 42.45C122.599 40.77 125.282 39.2533 127.895 37.9C130.555 36.5467 132.259 35.87 133.005 35.87C133.099 35.87 133.169 35.8933 133.215 35.94C133.309 35.94 133.355 36.01 133.355 36.15C133.355 36.4767 132.795 37.0367 131.675 37.83C130.555 38.6233 129.179 39.5333 127.545 40.56C125.072 42.1 122.715 43.71 120.475 45.39C118.235 47.0233 117.115 48.3767 117.115 49.45C117.115 49.8233 117.372 50.4767 117.885 51.41C118.445 52.39 119.355 53.2767 120.615 54.07C121.875 54.91 123.579 55.33 125.725 55.33C128.012 55.33 130.159 54.91 132.165 54.07C134.172 53.2767 135.969 52.3667 137.555 51.34C139.142 50.3133 140.472 49.3567 141.545 48.47C142.805 47.4433 143.622 46.93 143.995 46.93ZM134.211 95.51C136.405 95.37 138.645 93.7133 140.931 90.54C143.218 87.4133 145.365 83.7733 147.371 79.62C149.378 75.4667 150.988 71.7567 152.201 68.49C153.415 65.27 154.045 63.45 154.091 63.03H154.021C153.881 63.03 152.738 64.1267 150.591 66.32C148.445 68.5133 146.018 71.2433 143.311 74.51C140.605 77.7767 138.201 81.1367 136.101 84.59C134.001 88.09 132.951 91.1467 132.951 93.76C132.951 94.88 133.371 95.4633 134.211 95.51ZM173.901 47C173.948 47 173.971 47 173.971 47C174.018 47 174.041 47.0233 174.041 47.07C174.041 47.21 173.691 47.5133 172.991 47.98C172.291 48.4933 171.381 49.1467 170.261 49.94C167.788 51.5733 165.198 53.44 162.491 55.54C159.785 57.64 158.105 59.46 157.451 61C155.165 68.1867 152.901 74.0667 150.661 78.64C148.468 83.26 146.391 86.8533 144.431 89.42C142.518 91.9867 140.815 93.83 139.321 94.95C137.828 96.07 136.638 96.7467 135.751 96.98C134.818 97.2133 134.281 97.33 134.141 97.33H133.931C133.465 97.33 133.021 97.1667 132.601 96.84C131.855 96.0467 131.481 95.16 131.481 94.18V93.97C131.481 90.7967 133.441 86.27 137.361 80.39C141.235 74.5567 146.298 68.6767 152.551 62.75C153.391 62.0033 154.045 61.3033 154.511 60.65C155.025 59.9967 155.538 58.97 156.051 57.57C156.565 56.2167 157.311 54.0467 158.291 51.06C159.131 48.54 159.831 46.3933 160.391 44.62C160.998 42.8 161.301 41.8433 161.301 41.75V41.68C161.115 41.68 160.228 42.6133 158.641 44.48C157.195 46.1133 155.445 47.98 153.391 50.08C151.385 52.2267 149.378 54.1167 147.371 55.75C145.365 57.43 143.731 58.27 142.471 58.27C141.165 58.27 140.511 57.15 140.511 54.91C140.511 53.65 140.931 51.9467 141.771 49.8C142.565 47.7 143.451 45.7867 144.431 44.06C145.458 42.3333 146.228 41.47 146.741 41.47C147.255 41.47 147.511 41.7033 147.511 42.17C147.511 42.5433 147.325 43.1967 146.951 44.13C146.578 45.0633 146.135 46.1367 145.621 47.35C144.968 48.89 144.338 50.4067 143.731 51.9C143.171 53.44 142.891 54.6533 142.891 55.54C142.891 56.1 143.101 56.4033 143.521 56.45C144.548 56.45 146.298 55.2367 148.771 52.81C151.291 50.43 153.765 47.9333 156.191 45.32C157.685 43.7333 158.968 42.4033 160.041 41.33C161.115 40.21 161.791 39.65 162.071 39.65C162.305 39.65 162.515 39.6967 162.701 39.79C162.748 39.8367 162.795 39.86 162.841 39.86C163.261 40.0933 163.471 40.4433 163.471 40.91V41.05C163.471 41.4233 163.261 42.31 162.841 43.71C162.468 45.11 162.001 46.6733 161.441 48.4C160.928 50.1267 160.415 51.7367 159.901 53.23C159.575 54.3033 159.295 55.19 159.061 55.89C158.828 56.6367 158.711 57.0333 158.711 57.08V57.15C158.758 57.15 159.318 56.73 160.391 55.89C161.698 54.9567 163.308 53.79 165.221 52.39C167.135 51.0367 168.931 49.8 170.611 48.68C172.338 47.56 173.435 47 173.901 47ZM187.677 67.58C187.677 62.4933 188.47 58.0133 190.057 54.14C191.644 50.3133 193.627 47.0233 196.007 44.27C198.387 41.5167 200.837 39.23 203.357 37.41C205.877 35.59 208.094 34.19 210.007 33.21C211.967 32.23 213.274 31.6233 213.927 31.39L214.277 31.25C214.277 31.0633 214.067 30.7367 213.647 30.27C213.04 29.6167 212.34 28.6133 211.547 27.26C210.8 25.86 210.427 24.04 210.427 21.8C210.427 18.9067 211.174 16.2233 212.667 13.75C214.16 11.2767 216.05 9.10667 218.337 7.24C220.67 5.37333 223.167 3.92666 225.827 2.9C228.487 1.87333 230.984 1.36 233.317 1.36C237.05 1.36 240.06 2.64333 242.347 5.21C244.634 7.77666 245.777 10.8567 245.777 14.45C245.777 16.41 245.474 18.2067 244.867 19.84C244.26 21.4733 243.444 22.29 242.417 22.29C241.577 22.29 241.157 21.8933 241.157 21.1C241.157 20.4 241.367 19.6533 241.787 18.86C242.067 18.2067 242.324 17.46 242.557 16.62C242.837 15.7333 242.977 14.6833 242.977 13.47C242.977 10.53 242.02 8.03333 240.107 5.98C238.24 3.92666 235.79 2.9 232.757 2.9C229.91 2.9 226.854 3.78666 223.587 5.56C220.367 7.33333 217.614 9.69 215.327 12.63C213.04 15.57 211.897 18.8133 211.897 22.36C211.897 24.04 212.177 25.4167 212.737 26.49C213.297 27.5167 213.974 28.3567 214.767 29.01C215.56 29.6167 216.307 30.1067 217.007 30.48C217.474 30.76 217.87 31.04 218.197 31.32C218.524 31.5533 218.687 31.81 218.687 32.09C218.687 32.65 217.8 33.1867 216.027 33.7C208.56 36.2667 202.494 40.8633 197.827 47.49C193.16 54.1167 190.827 60.86 190.827 67.72C190.827 70.52 191.364 73.3433 192.437 76.19C193.51 79.0833 195.237 81.4867 197.617 83.4C199.997 85.36 203.147 86.34 207.067 86.34C211.174 86.34 215.094 85.36 218.827 83.4C222.607 81.44 225.944 78.92 228.837 75.84C231.777 72.76 234.087 69.4233 235.767 65.83C237.494 62.2833 238.357 58.9 238.357 55.68C238.357 53.16 237.867 50.8733 236.887 48.82C235.907 46.8133 234.74 45.81 233.387 45.81H232.617C232.337 45.81 232.057 45.6933 231.777 45.46C231.497 45.2267 231.357 44.9 231.357 44.48C231.357 43.9667 231.567 43.57 231.987 43.29C232.454 42.9633 232.967 42.8 233.527 42.8C235.16 42.8 236.654 44.06 238.007 46.58C239.36 49.0533 240.037 51.8067 240.037 54.84C240.037 59.9733 238.357 65.13 234.997 70.31C231.637 75.5367 227.39 79.8767 222.257 83.33C217.17 86.7833 211.944 88.51 206.577 88.51C201.21 88.51 196.707 86.5967 193.067 82.77C189.474 78.99 187.677 73.9267 187.677 67.58ZM277.727 46.93C277.82 46.93 277.867 46.9533 277.867 47C277.867 47.0933 277.33 47.6533 276.257 48.68C275.183 49.7067 273.737 50.85 271.917 52.11C270.097 53.4167 268.02 54.56 265.687 55.54C263.4 56.52 260.997 57.01 258.477 57.01C256.61 57.01 255.07 56.73 253.857 56.17C252.69 55.6567 251.78 55.05 251.127 54.35C250.473 53.6967 249.983 53.1367 249.657 52.67C249.33 52.2033 249.097 51.97 248.957 51.97C248.77 51.97 248.49 52.6467 248.117 54C247.743 55.4 247.347 57.01 246.927 58.83C246.46 60.6967 246.063 62.4467 245.737 64.08C245.41 65.76 245.247 66.9033 245.247 67.51C245.247 67.93 245.27 68.28 245.317 68.56V68.84C245.317 69.0267 245.247 69.2133 245.107 69.4C244.967 69.54 244.78 69.61 244.547 69.61C244.173 69.61 243.917 69.47 243.777 69.19C243.637 68.91 243.543 68.6067 243.497 68.28C243.45 67.9533 243.427 67.7433 243.427 67.65V67.58C243.427 65.8067 244.197 61.84 245.737 55.68C247.23 49.5667 248.98 42.9867 250.987 35.94C253.04 28.8467 254.953 22.6867 256.727 17.46C258.547 12.1867 259.783 9.55 260.437 9.55C260.67 9.55 260.787 9.78333 260.787 10.25C260.787 10.67 260.32 12.3733 259.387 15.36C258.5 18.3467 257.45 21.7767 256.237 25.65C254.837 30.0833 253.553 34.1667 252.387 37.9C251.267 41.6333 250.707 43.8267 250.707 44.48H250.777V44.41C250.823 44.3633 250.893 44.3167 250.987 44.27C251.127 44.1767 251.313 44.0367 251.547 43.85C252.153 43.3833 252.83 42.9167 253.577 42.45C256.33 40.77 259.013 39.2533 261.627 37.9C264.287 36.5467 265.99 35.87 266.737 35.87C266.83 35.87 266.9 35.8933 266.947 35.94C267.04 35.94 267.087 36.01 267.087 36.15C267.087 36.4767 266.527 37.0367 265.407 37.83C264.287 38.6233 262.91 39.5333 261.277 40.56C258.803 42.1 256.447 43.71 254.207 45.39C251.967 47.0233 250.847 48.3767 250.847 49.45C250.847 49.8233 251.103 50.4767 251.617 51.41C252.177 52.39 253.087 53.2767 254.347 54.07C255.607 54.91 257.31 55.33 259.457 55.33C261.743 55.33 263.89 54.91 265.897 54.07C267.903 53.2767 269.7 52.3667 271.287 51.34C272.873 50.3133 274.203 49.3567 275.277 48.47C276.537 47.4433 277.353 46.93 277.727 46.93ZM285.723 42.94C285.116 42.9867 284.393 43.22 283.553 43.64C282.759 44.06 282.013 44.55 281.313 45.11C280.659 45.6233 280.333 46.0667 280.333 46.44C280.333 46.5333 280.379 46.58 280.473 46.58H280.613C280.939 46.58 281.569 46.4633 282.503 46.23C283.436 45.9967 284.323 45.6467 285.163 45.18C286.003 44.7133 286.423 44.13 286.423 43.43C286.423 43.3367 286.353 43.2433 286.213 43.15C286.119 43.01 285.956 42.94 285.723 42.94ZM301.053 47H301.263C301.309 47 301.356 47 301.403 47C301.449 47 301.473 47.0233 301.473 47.07C301.473 47.21 300.423 47.9333 298.323 49.24C296.223 50.5467 293.726 51.8067 290.833 53.02C287.986 54.2333 285.279 54.9333 282.713 55.12H282.083C280.449 55.12 279.189 54.84 278.303 54.28C277.463 53.72 276.879 53.02 276.553 52.18C276.179 51.3867 275.993 50.5933 275.993 49.8C275.993 48.12 276.553 46.6267 277.673 45.32C278.839 43.9667 280.169 42.9167 281.663 42.17C283.156 41.3767 284.463 40.98 285.583 40.98C286.283 40.98 286.796 41.0967 287.123 41.33C287.449 41.5633 287.636 41.82 287.683 42.1C287.776 42.38 287.823 42.6133 287.823 42.8C287.823 43.9667 287.099 45.1333 285.653 46.3C284.253 47.42 282.386 47.98 280.053 47.98C279.213 47.98 278.723 48.68 278.583 50.08C278.583 52.3667 280.053 53.5333 282.993 53.58C283.319 53.58 283.646 53.5567 283.973 53.51C286.866 53.1833 289.689 52.4133 292.443 51.2C295.196 50.0333 297.436 48.96 299.163 47.98C300.003 47.5133 300.633 47.1867 301.053 47ZM291.947 95.3C295.26 95.3 298.643 93.1067 302.097 88.72C305.597 84.3333 307.463 79.27 307.697 73.53C307.65 70.6367 307.067 67.8367 305.947 65.13C305.9 65.13 304.99 66.04 303.217 67.86C301.49 69.68 299.53 71.9667 297.337 74.72C295.143 77.4733 293.183 80.3667 291.457 83.4C289.73 86.4333 288.867 89.1867 288.867 91.66C288.867 93.9467 289.893 95.16 291.947 95.3ZM325.407 47.14C325.407 47.1867 325.103 47.4667 324.497 47.98C323.89 48.54 323.073 49.2633 322.047 50.15C320.273 51.6433 318.29 53.3233 316.097 55.19C313.95 57.1033 312.06 58.83 310.427 60.37C308.84 61.9567 308.023 63.0067 307.977 63.52C307.977 63.66 308.093 64.0333 308.327 64.64C308.653 65.5267 309.027 66.7867 309.447 68.42C309.913 70.0533 310.147 71.9433 310.147 74.09C310.147 78.3367 309.12 82.21 307.067 85.71C305.013 89.2567 302.587 92.08 299.787 94.18C296.987 96.28 294.443 97.33 292.157 97.33C291.923 97.33 291.433 97.2367 290.687 97.05C289.893 96.8633 289.147 96.3967 288.447 95.65C287.747 94.9033 287.397 93.7133 287.397 92.08C287.397 89.2333 288.307 86.2233 290.127 83.05C291.9 79.8767 293.953 76.89 296.287 74.09C298.573 71.29 300.603 68.9333 302.377 67.02C304.337 64.9667 305.317 63.7767 305.317 63.45C305.317 62.9833 305.107 62.1433 304.687 60.93C304.313 59.9967 303.963 58.9467 303.637 57.78C303.357 56.66 303.217 55.5867 303.217 54.56C303.217 52.9733 303.683 51.55 304.617 50.29C305.55 49.03 306.67 47.7933 307.977 46.58C311.71 42.7533 313.577 40.7233 313.577 40.49L313.507 40.42H313.437C312.503 40.42 311.243 40.9333 309.657 41.96C308.07 42.94 306.507 44.0367 304.967 45.25C303.473 46.4167 302.307 47.35 301.467 48.05L300.697 48.68C300.65 48.68 300.58 48.6567 300.487 48.61C300.44 48.5633 300.393 48.5167 300.347 48.47C300.347 48.4233 300.323 48.3767 300.277 48.33V48.26C300.277 47.84 301.14 46.8833 302.867 45.39C304.64 43.85 306.623 42.38 308.817 40.98C311.01 39.58 312.713 38.88 313.927 38.88C315.047 38.88 315.63 39.3 315.677 40.14C315.677 41.2133 315.117 42.4267 313.997 43.78C312.877 45.0867 311.617 46.4167 310.217 47.77C308.863 49.0767 307.65 50.3367 306.577 51.55C305.55 52.7633 305.037 53.8367 305.037 54.77C305.037 55.4233 305.223 56.2867 305.597 57.36C305.97 58.48 306.343 59.4833 306.717 60.37C307.137 61.2567 307.417 61.7 307.557 61.7C307.603 61.7 307.907 61.42 308.467 60.86C309.68 59.74 311.453 58.0833 313.787 55.89C316.12 53.7433 318.43 51.7133 320.717 49.8C323.003 47.9333 324.52 47 325.267 47C325.36 47 325.407 47.0467 325.407 47.14ZM343.531 47C343.624 47 343.671 47 343.671 47C343.718 47 343.741 47.0233 343.741 47.07C343.741 47.1633 343.158 47.7233 341.991 48.75C340.824 49.7767 339.354 50.92 337.581 52.18C335.854 53.4867 334.058 54.63 332.191 55.61C330.324 56.6367 328.714 57.15 327.361 57.15H326.941C326.521 57.15 326.148 57.1033 325.821 57.01C324.001 56.31 323.091 54.8167 323.091 52.53C323.091 51.3633 323.324 50.0333 323.791 48.54C324.211 47.0467 324.748 45.74 325.401 44.62C326.101 43.4533 326.778 42.87 327.431 42.87C327.711 42.9167 327.944 43.0333 328.131 43.22C328.318 43.4067 328.411 43.64 328.411 43.92C328.411 44.4333 328.108 45.2967 327.501 46.51C327.081 47.4433 326.661 48.4467 326.241 49.52C325.821 50.64 325.611 51.7367 325.611 52.81C325.611 53.8367 325.891 54.5367 326.451 54.91C327.058 55.33 327.828 55.54 328.761 55.54C330.254 55.54 332.051 54.84 334.151 53.44C336.298 52.0867 338.234 50.7333 339.961 49.38C341.921 47.7933 343.111 47 343.531 47ZM328.551 39.51C327.991 39.23 327.711 38.8333 327.711 38.32V37.9C327.711 37.2933 327.991 36.8033 328.551 36.43C328.878 36.2433 329.204 36.15 329.531 36.15C329.811 36.15 330.091 36.22 330.371 36.36C330.978 36.78 331.281 37.3167 331.281 37.97C331.281 38.4367 331.094 38.8567 330.721 39.23C330.394 39.5567 329.998 39.72 329.531 39.72C329.204 39.72 328.878 39.65 328.551 39.51ZM351.636 42.94C351.03 42.9867 350.306 43.22 349.466 43.64C348.673 44.06 347.926 44.55 347.226 45.11C346.573 45.6233 346.246 46.0667 346.246 46.44C346.246 46.5333 346.293 46.58 346.386 46.58H346.526C346.853 46.58 347.483 46.4633 348.416 46.23C349.35 45.9967 350.236 45.6467 351.076 45.18C351.916 44.7133 352.336 44.13 352.336 43.43C352.336 43.3367 352.266 43.2433 352.126 43.15C352.033 43.01 351.87 42.94 351.636 42.94ZM366.966 47H367.176C367.223 47 367.27 47 367.316 47C367.363 47 367.386 47.0233 367.386 47.07C367.386 47.21 366.336 47.9333 364.236 49.24C362.136 50.5467 359.64 51.8067 356.746 53.02C353.9 54.2333 351.193 54.9333 348.626 55.12H347.996C346.363 55.12 345.103 54.84 344.216 54.28C343.376 53.72 342.793 53.02 342.466 52.18C342.093 51.3867 341.906 50.5933 341.906 49.8C341.906 48.12 342.466 46.6267 343.586 45.32C344.753 43.9667 346.083 42.9167 347.576 42.17C349.07 41.3767 350.376 40.98 351.496 40.98C352.196 40.98 352.71 41.0967 353.036 41.33C353.363 41.5633 353.55 41.82 353.596 42.1C353.69 42.38 353.736 42.6133 353.736 42.8C353.736 43.9667 353.013 45.1333 351.566 46.3C350.166 47.42 348.3 47.98 345.966 47.98C345.126 47.98 344.636 48.68 344.496 50.08C344.496 52.3667 345.966 53.5333 348.906 53.58C349.233 53.58 349.56 53.5567 349.886 53.51C352.78 53.1833 355.603 52.4133 358.356 51.2C361.11 50.0333 363.35 48.96 365.076 47.98C365.916 47.5133 366.546 47.1867 366.966 47Z"
              fill="#DBE0FC"
            />
          </svg>

          <!-- <img
              class="sign"
              src="images/Lucky Ekezie sign.png"
              width="50%"
              alt=""
            /> -->

          <p class="par5">
            <strong class="strong2"> Lucky Ekezie</strong> <br />
            <span class="design"> Product Designer</span>
          </p>

          <footer class="hei">
            <ul class="foot-ul">
              <li class="li1">
                <a
                  class="a1"
                  href="http://www.linkedin.com/in/lucky-ekezie"
                  
                  >LINKEDIN</a
                >
              </li>
              <li class="li1">
                <a
                  class="a1"
                  href="https://twitter.com/CeejayLucky"
                  >TWITTER</a
                >
              </li>
              <li class="li1">
                <a
                  class="a1"
                  href="https://www.facebook.com/profile.php?id=100070488529526"
                 >FACEBOOK</a
                >
              </li>
              <li class="li1">
                <a
                  class="a1"
                  href="https://www.behance.net/luckyekezie_projects"
                  >BEHANCE</a
                >
              </li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>

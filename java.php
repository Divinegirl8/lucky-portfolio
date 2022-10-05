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
    <title>Document</title>

    <script
      src="https://kit.fontawesome.com/add5a071a1.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <style>
      .rotate {
        transform: scaleX(-1);
      }
      .fa-chevron-right {
        color: #fff;
      }
    </style>

    <div class="fa fa-chevron-right"></div>

    <script type="text/javascript">
      $(".fa-chevron-right").click(function () {
        $(this).toggleClass("rotate");
      });
    </script>
  </body>

  <h1> https://devcenter.heroku.com/articles/upgrading-to-the-latest-stack</h1>
</html>

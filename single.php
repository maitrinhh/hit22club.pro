<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Статья</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Cleaning Company Website Template" name="keywords" />
    <meta content="Cleaning Company Website Template" name="description" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap"
      rel="stylesheet"
    />

    <!-- CSS Libraries -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="wrapper">
      <!-- Header Start -->
      <div class="header home">
        <div class="container-fluid">
          <div class="header-top row align-items-center">
            <div class="col-lg-3">
              <div class="brand">
                <a href="index.php">Сфера продаж</a>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="navbar navbar-expand-lg bg-light navbar-light">
                <a href="#" class="navbar-brand">MENU</a>
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbarCollapse"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                    <a href="index.php" class="nav-item nav-link">Главная</a>
                    <a href="blog.php" class="nav-item nav-link active"
                      >Статьи</a
                    >
                    <a href="contact.php" class="nav-item nav-link">Контакты</a>
                    <a href="policy.php" class="nav-item nav-link">Политика конфиденциальности</a>
                    <a href="terms.php" class="nav-item nav-link">Условия и положения</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hero row align-items-center">
            <div class="col-md-12">
              <h2>Статья</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Blog Start -->
      <div class="blog">
        <div class="container">
          <div class="row">
            <div class="blog-item text-center">
              <img src="./assets/images/bulksplash-alexbemore-k1xf2d7jwus.jpg" alt="Blog" />
              <h3>Максимизация потенциала вашего бизнеса с помощью маркетинга в социальных сетях</h3>
              <p><strong></strong> Маркетинг в социальных сетях - мощный инструмент для бизнеса, позволяющий максимально раскрыть свой потенциал. Это дает возможность установить контакт с новыми клиентами, наладить отношения с существующими и повысить узнаваемость бренда в цифровом мире. Создавая привлекательный контент и используя целевые кампании, компании могут легко расширить охват в Интернете и расширить клиентскую базу. Кроме того, социальные сети позволяют им напрямую взаимодействовать с клиентами, быстро реагируя на запросы или жалобы. Более того, это помогает повышайте лояльность клиентов, поскольку пользователи чувствуют себя более связанными, когда они задействованы в социальных сетях. Кроме того, компании могут использовать аналитические инструменты, предоставляемые различными платформами, такими как Facebook Insights или Twitter Analytics, чтобы измерить производительность и понять, что работает для них лучше всего. Благодаря такому подходу, основанному на данных, они могут соответствующим образом усовершенствовать свои стратегии и обеспечить максимальную отдачу от своих инвестиций в маркетинг в социальных сетях.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog End -->

      <!-- Footer Start -->
      <div class="footer text-center">
        <div class="container copyright">
          <div class="row">
            <div class="col-md-12">
              <p>
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Copyright
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <div class="cookie-banner">
      <p style="color: #000000">
        Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Политикой cookie</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

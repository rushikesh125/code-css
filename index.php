<?php
$CurrentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code CSS </title>
  <?php include 'styleLinks.php' ?>
  <!-- font link  -->

</head>

<body>
  <!-- Navigation Starts  -->
  <?php include 'navbar.php' ?>
  <!-- Navigation Ends  -->
  <!-- First Page ( Home ) Starts  -->
  <div class="container-fluid position-relative main-page">
    <div class="row d-flex justify-content-center position-relative">
      <img src="images/LogoCss.png" class="main-page-Logo col-lg-10 mt-lg-5">
      <h1 class="col-12 text-center Dynamic-text">
        Contents We offer:
        <a href="" class="typewrite" data-period="2000" data-type='[ "Buttons", "Cards", "Tables.", "Margins","Colors","SideBars","Navigations" ]'>
          <span class="wrap"></span>
        </a>
      </h1>
    </div>
    <div class="row d-flex justify-content-center Main-title">
      <h1 class="col-10 text-center">Build fast sites with Code CSS FrameWork </h1>
    </div>

    <div class="row mt-5">
      <center>
        <div class="col-lg-6 mt-5">
          <h3 class="pages-headings fs-1">
            <i class="bi bi-emoji-heart-eyes"></i>
            What is Code Css
            <i class="bi bi-question-diamond-fill"></i>
          </h3>
          <p class="fs-5" style="color:#adadad;">
            Code CSS is FrameWork Purely Built in CSS , let you use all the properties just by using classes ( No Need To Create New CSS File ). <br>
            All The Properties Wraped Into Class With Same Name ( Property name = Class Name) <br>
            <a href="documentation/gettingstarted.php" class="pages-headings fs-3" style="text-decoration:none;">
              <i class="bi bi-github"></i>
              Git Source -> </a>
          </p>

        </div>
      </center>
    </div>

    <!-- Download OR Inluce Links Sections Starts Here  -->
    <div class="row mt-5 ms-1 me-1 mb-1 d-lg-flex justify-content-center Second-Section-of-index">
      <div class="col-lg-5 m-2">
        <div class="row">
          <h3 class="pages-headings">
            <i class="bi bi-cloud-arrow-down-fill"></i>
            Download Zip File
          </h3>
          <p>Install Bootstrap’s source Sass and JavaScript files via npm, RubyGems, Composer, or Meteor. Package managed installs don’t include documentation or our full build scripts. You can also use our npm template repo to quickly generate a Bootstrap project via npm.
          </p>
          <button class="btn m-2 bg-primary col-6 text-white">
            Download
          </button>
        </div>
      </div>

      <div class="col-lg-5 m-2">
        <div class="row">
          <h3 class="pages-headings">
            <i class="bi bi-code-slash"></i>
            Include Links in Header
          </h3>
          <p>When you only need to include Bootstrap’s compiled CSS or JS, you can use jsDelivr. See it in action with our simple quick start, or browse the examples to jumpstart your next project. You can also choose to include Popper and our JS separately.
          </p>
          <!-- <button class="btn m-2 bg-primary col-6 text-white">
          Download
        </button> -->
          <div class="col-12">
            <input class="include-link link-one" type="text" value='<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">'>
            <button class="copy-btn copybtn-1">
              <i class="bi bi-clipboard-fill"></i>
              Copy
            </button>

            <script>
              copyBtn[0] = document.querySelector('.copybtn-1');
              console.log(copyBtn[0]);
              copyText[0] = document.querySelector('.link-one').value;
              copyBtn[0].addEventListener('click', () => {
                navigator.clipboard.writeText(copyText[0]).then(() => {
                  document.querySelector('.cpy-noti').classList.add("disp-block");
                  document.querySelector('.cpy-noti').classList.remove("disp-none");
                  setTimeout(() => {
                    document.querySelector('.cpy-noti').classList.add("disp-none");
                    document.querySelector('.cpy-noti').classList.remove("disp-block");
                  }, 2000)
                  // console.log(copyText[0]);
                }).catch((error) => {
                  console.error('Failed to copy text: ', error);
                });
              });
            </script>
          </div>
          <div class="col-12">
            <input class="include-link link-two" type="text" value='<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>'>
            <button class="copy-btn copybtn-2">
              <i class="bi bi-clipboard-fill"></i>
              Copy
            </button>

            <script>
              copyBtn[1] = document.querySelector('.copybtn-2');
              console.log(copyBtn[0]);
              copyText[1] = document.querySelector('.link-two').value;
              copyBtn[1].addEventListener('click', () => {
                navigator.clipboard.writeText(copyText[1]).then(() => {
                  document.querySelector('.cpy-noti').classList.add("disp-block");
                  document.querySelector('.cpy-noti').classList.remove("disp-none");
                  setTimeout(() => {
                    document.querySelector('.cpy-noti').classList.add("disp-none");
                    document.querySelector('.cpy-noti').classList.remove("disp-block");
                  }, 2000)
                  // console.log(copyText[0]);
                }).catch((error) => {
                  console.error('Failed to copy text: ', error);
                });
              });
            </script>

          </div>
        </div>
      </div>
    </div>

    <!-- Get Started With Documentation  -->
    <div class="row mt-4">
      <center>
        <div class="col-lg-6">
          <h3 class="pages-headings fs-1">
            <i class="bi bi-journal-code"></i>
            Get started any way you want
          </h3>
          <p class="fs-5" style="color:#adadad;">
            Jump right into building with Code Css —use the CDN, or Download the source code. ( ZIP ) <br>
            <a href="documentation/gettingstarted.php" class="text-primary fs-3">Read Documentation -> </a>
          </p>

        </div>
      </center>
    </div>

    <!-- Start With Boiler Plate Code  -->
    <div class="row mt-5 ms-1 me-1 mb-1 d-lg-flex justify-content-center Second-Section-of-index">
      <div class="col-lg-5 m-2">
        <div class="row">
          <h3 class="pages-headings">
            <i class="bi bi-stars"></i>
            Get Started With HTML Starter Code
          </h3>
          <p>This is Just A Simple HTML Code with Included Code Css's CSS and JS Links Copy That Code and Paste it into you Empty HTML File and Get Started Easily with Flexibility
          </p>
          <h1 class="pages-headings text-center mt-lg-5 animation-right-arrow">
            <i class="bi bi-arrow-right-circle"></i>
          </h1>
        </div>
      </div>

      <div class="col-lg-5 m-2">
        <div class="row">
          <h3 class="pages-headings">
            <i class="bi bi-code-slash"></i>
            HTML Boiler Code
          </h3>
          <div class="col-12 code-container m-1">
            <div class="col-12 copybtn-container">
              <button class="copy-btn-text">HTML</button>
              <button class="copy-btn Copy-Btn1">
                <i class="bi bi-clipboard2-fill"></i>
                Copy
              </button>
            </div>
            <div class="code-parent">
              <pre>
                <code class="language-html element-to-copy1">
                  <!-- Source Code Starts  -->
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My 2 Website&lt;/title&gt;
    &lt;!--Code Css : Style Link--&gt;
    &lt;link rel="stylesheet" type="text/css" href="documentation/indexone.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Welcome to my website!&lt;/p&gt;
  &lt;/body&gt;
   &lt!--Code Css : JavaScript Link--&gt;
  &lt;script src="script.js"&gt; &lt;/script&gt;
&lt;/html&gt;
<!-- Sourc Code Ends  -->
                </code>
            </pre>
            </div>
          </div>
          <!-- code For Copy HTML Source Code  -->
          <script>
            copyBtn[3] = document.querySelector('.Copy-Btn1');
            copyText[3] = document.querySelector('.element-to-copy1').textContent;
            copyBtn[3].addEventListener('click', () => {
              navigator.clipboard.writeText(copyText[3]).then(() => {
                document.querySelector('.cpy-noti').classList.add("disp-block");
                document.querySelector('.cpy-noti').classList.remove("disp-none");
                setTimeout(() => {
                  document.querySelector('.cpy-noti').classList.add("disp-none");
                  document.querySelector('.cpy-noti').classList.remove("disp-block");
                }, 2000)
              }).catch((error) => {
                console.error('Failed to copy text: ', error);
              });
            });
          </script>
        </div>
      </div>
    </div>
    
    <!-- footer Starts  -->
    <div class="footer ">
            <center>
              <h3>
                <img src="images/LogoCss1.png" width="100" height="40">
              </h3>
          </center>
    </div>
    <!-- footer ends  -->
  </div>
  </div>
  <!-- </div> -->


</body>



<?php include 'scriptlinks.php'; ?>
<script>
  var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
  };
</script>


</html>
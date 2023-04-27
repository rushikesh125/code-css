<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentation</title>
  <?php include 'docstylelinks.php'; ?>
</head>


<body>

  <?php include 'docnav.php'; ?>
  <?php include 'aside-doc-contents.php'; ?>
  <div class="Doc-Container container-fluid ">
    <div class="row">
      <h1 class="doc-page-title">Getting Started </h1>
      <p class="m-1"> Let's get Started By Adding Simple HTML Basic Boilerplate code into Empty HTML file, it also includes CodeCSS Stylesheet and JavaScript CDN Links into Header and Footer.
        And Start Building Your Site With Less Efforts and More Simplicity .
      </p>
      <!-- Example Code Container Starts Here  -->
      <div class="output-container">


      </div>
      <!-- Example Code Container Ends Here  -->
      <!-- Code Container Starts HEre  -->
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
    &lt;title&gt;Document&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Welcome to my website!&lt;/p&gt;
  &lt;/body&gt;
  &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"&gt;&lt;/script&gt;
&lt;/html&gt;
<!-- Sourc Code Ends  -->
                </code>
            </pre>
        </div>
      </div>
      <!-- code For Copy HTML Source Code  -->
      <script>
        copyBtn[0] = document.querySelector('.Copy-Btn1');
        copyText[0] = document.querySelector('.element-to-copy1').textContent;
        copyBtn[0].addEventListener('click', () => {
          navigator.clipboard.writeText(copyText[0]).then(() => {
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
    <!-- code Container Ends  -->
    <p class="m-1">OR <br>
      You Can Include CDN Links Externally ,<br>
    </p>
    <!-- Example Code Container Starts Here  -->
    <div class="output-container">


    </div>
    <!-- Example Code Container Ends Here  -->
    <div class="col-12 code-container m-1">

      <div class="col-12 copybtn-container"> <button class="copy-btn-text">Stylesheet CND Link</button> <button class="copy-btn Copy-Btn2"><i class="bi
                bi-clipboard2-fill"></i>Copy</button>
      </div>
      <div class="code-parent">
        <pre>
                <code class="language-html element-to-copy2">
&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"&gt;
                </code>
            </pre>
      </div>
    </div>
    <!-- code For Copy HTML Source Code  -->
    <script>
      copyBtn[1] = document.querySelector('.Copy-Btn2');
      copyText[1] = document.querySelector('.element-to-copy2').textContent;
      copyBtn[1].addEventListener('click', () => {
        navigator.clipboard.writeText(copyText[1]).then(() => {
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

    <!-- Example Code Container Starts Here  -->
    <div class="output-container">


    </div>
    <!-- Example Code Container Ends Here  -->
    <div class="col-12 code-container m-1">

      <div class="col-12 copybtn-container"> <button class="copy-btn-text">JavaScript CND Link</button> <button class="copy-btn Copy-Btn3"><i class="bi
                bi-clipboard2-fill"></i>Copy</button>
      </div>
      <div class="code-parent">
        <pre>
                <code class="language-html element-to-copy3">
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"&gt;&lt;/script&gt;
                </code>
            </pre>
      </div>
    </div>
    <!-- code For Copy HTML Source Code  -->
    <script>
      copyBtn[3] = document.querySelector('.Copy-Btn3');
      copyText[3] = document.querySelector('.element-to-copy3').textContent;
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

  <!-- Main Container End Here ! -->
  </div>


</body>
<?php include 'docscriptlinks.php'; ?>

</html>
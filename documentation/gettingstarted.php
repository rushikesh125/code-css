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
    &lt;!--Code Css : Style Link--&gt;
    &lt;link rel="stylesheet" type="text/css" href="https://res.cloudinary.com/dfd8lufs5/raw/upload/v1682667981/maincontainer_ythuvr.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Welcome to my website!&lt;/p&gt;
  &lt;/body&gt;
   &lt!--Code Css : JavaScript Link--&gt;
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
&lt;link rel="stylesheet" href="https://res.cloudinary.com/dfd8lufs5/raw/upload/v1682667981/maincontainer_ythuvr.css"&gt;
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


  </div>

  <!-- Main Container End Here ! -->
  </div>


</body>
<?php include 'docscriptlinks.php'; ?>

</html>
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
            <h1 class="doc-page-title">Display</h1>
            <p class="m-1 fs-4">Create Buttons with in second using <code>buttons</code> classes that we defined.</p>
            <h1 class="doc-page-title"> Variants </h1>
            <p class="m-1" > Bootstrap includes several button variants, each serving its own semantic purpose, with a few extras thrown in for more control.</p>

            <ul class="m-2">
            As such, the classes are named using the format:

                <li class="ms-4"><code>.Btn1 </code> for all type of devices.</li>
                <br>
            </ul>
            <ul>
                Where values are one of:

                <li class="ms-4"><code>.Btn1</code> for first Category for Button Types .</li>
                <li class="ms-4"><code>.Btn2</code> for Second Category for Button Types.</li>
                <li class="ms-4"><code>.Btn3</code> for Thired Category for Button Types.</li>
                
                <br>
            </ul>
            
            <h3 class="doc-page-title">Button Type 1</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <button class="" style="margin:5px;padding:10px 20px; border-radius:5px;border:none;">Btn1</button>
                <button class="" style="margin:5px;padding:10px 20px; border-radius:5px;border:none;background-color:red;color:white;">Btn1</button>
                <button class="" style="margin:5px;padding:10px 20px; border-radius:5px;border:none;background-color:yellow;color:black;">Btn1</button>
                <button class="" style="margin:5px;padding:10px 20px; border-radius:5px;border:none;background-color:lime;color:black;">Btn1</button>
        </div>
<!-- Example Code Container Ends Here  -->
<!-- Code Container Starts HEre  -->
<div class="col-12 code-container m-1">
  <div class="col-12 copybtn-container">
    <button class="copy-btn-text">HTML</button>
    <button class="copy-btn Copy-Btn2">
      <i class="bi bi-clipboard2-fill"></i>
      Copy
    </button>
  </div>
  <div class="code-parent">
    <pre>
          <code class="language-html element-to-copy2">
            <!-- Source Code Starts  -->
&lt;button class="Btn1"&gt;Btn1&lt;/Button&gt;
&lt;button class="Btn1 bgcolor-red"&gt;Btn1&lt;/Button&gt;
&lt;button class="Btn1 bgcolor-yellow"&gt;Btn1&lt;/Button&gt;
&lt;button class="Btn1 bgcolor-lime"&gt;Btn1&lt;/Button&gt;
<!-- Sourc Code Ends  -->
          </code>
      </pre>
  </div>
</div>
<!-- code For Copy HTML Source Code  -->
<script>
  copyBtn[2] = document.querySelector('.Copy-Btn2');
  copyText[2] = document.querySelector('.element-to-copy2').textContent;
  copyBtn[2].addEventListener('click', () => {
    navigator.clipboard.writeText(copyText[2]).then(() => {
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



<h3 class="doc-page-title">Button Type 2</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <button class="" style="margin:5px;padding:7px 20px;border:none;box-shadow:2px 2px 4px gray;">Btn2</button>
                <button class="" style="margin:5px;padding:7px 20px;border:none;box-shadow:2px 2px 4px gray;background-color:green;color:white;">Btn1</button>
                <button class="" style="margin:5px;padding:7px 20px;border:none;box-shadow:2px 2px 4px gray;background-color:blue;color:black;">Btn1</button>
                <button class="" style="margin:5px;padding:7px 20px;border:none;box-shadow:2px 2px 4px gray;background-color:aqua;color:black;">Btn1</button>
        </div>
<!-- Example Code Container Ends Here  -->
<!-- Code Container Starts HEre  -->
<div class="col-12 code-container m-1">
  <div class="col-12 copybtn-container">
    <button class="copy-btn-text">HTML</button>
    <button class="copy-btn Copy-Btn3">
      <i class="bi bi-clipboard2-fill"></i>
      Copy
    </button>
  </div>
  <div class="code-parent">
    <pre>
          <code class="language-html element-to-copy3">
            <!-- Source Code Starts  -->
&lt;button class="Btn2"&gt;Btn2&lt;/Button&gt;
&lt;button class="Btn2 bgcolor-green"&gt;Btn2&lt;/Button&gt;
&lt;button class="Btn2 bgcolor-blue"&gt;Btn2&lt;/Button&gt;
&lt;button class="Btn2 bgcolor-aqua"&gt;Btn2&lt;/Button&gt;
<!-- Sourc Code Ends  -->
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




<h3 class="doc-page-title">Button Type 3</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <button class="" style="margin:5px;padding:5px 30px;border:none;border-radius:50px;;">Btn3</button>
                <button class="" style="margin:5px;padding:5px 30px;border:none;border-radius:50px;;background-color:green;color:white;">Btn3</button>
                <button class="" style="margin:5px;padding:5px 30px;border:none;border-radius:50px;;background-color:yellow;color:black;">Btn3</button>
                <button class="" style="margin:5px;padding:5px 30px;border:none;border-radius:50px;;background-color:lime;color:black;">Btn3</button>
        </div>
<!-- Example Code Container Ends Here  -->
<!-- Code Container Starts HEre  -->
<div class="col-12 code-container m-1">
  <div class="col-12 copybtn-container">
    <button class="copy-btn-text">HTML</button>
    <button class="copy-btn Copy-Btn4">
      <i class="bi bi-clipboard2-fill"></i>
      Copy
    </button>
  </div>
  <div class="code-parent">
    <pre>
          <code class="language-html element-to-copy4">
            <!-- Source Code Starts  -->
&lt;button class="Btn3"&gt;Btn3&lt;/Button&gt;
&lt;button class="Btn3 bgcolor-green"&gt;Btn3&lt;/Button&gt;
&lt;button class="Btn3 bgcolor-yellow"&gt;Btn3&lt;/Button&gt;
&lt;button class="Btn3 bgcolor-lime"&gt;Btn3&lt;/Button&gt;
<!-- Sourc Code Ends  -->
          </code>
      </pre>
  </div>
</div>
<!-- code For Copy HTML Source Code  -->
<script>
  copyBtn[4] = document.querySelector('.Copy-Btn4');
  copyText[4] = document.querySelector('.element-to-copy4').textContent;
  copyBtn[4].addEventListener('click', () => {
    navigator.clipboard.writeText(copyText[4]).then(() => {
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
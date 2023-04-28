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
            <h1 class="doc-page-title">Object Fit Property.</h1>
            <p class="m-1 fs-4">Utilities for controlling how a replaced element's content should be resized.<br>
                use Object fit properties by adding our predefined classes .</p>
            <ul class="m-2">
                As such, the classes are named using the format:

                <li class="ms-4"><code>.object-fit-{value}</code> for all type of devices.</li>
                <br>
            </ul>
            <ul>
                Where values are one of:

                <li class="ms-4"><code>.object-fit-contain</code>.</li>
                <li class="ms-4"><code>.object-fit-cover</code>.</li>
                <li class="ms-4"><code>.object-fit-fill</code>.</li>
                <li class="ms-4"><code>.object-fit-none</code>.</li>
                <br>
            </ul>
            <h2 class="doc-page-title">Examples.</h2>
           

            <div class="output-container">
            <div style="padding:10px;box-sizing: border-box; border-radius:5px;background-color:gray;">
    <div style="box-shadow:2px 2px 5px black;margin:5px 2px;border-radius: 2px;border:none;background-color: blue;color:white;padding:2px;;width:25%">.width-25</div>
    <div style="box-shadow:2px 2px 5px black;margin:5px 2px;border-radius: 2px;border:none;background-color: blue;color:white;padding:2px;;width:50%">.width-50</div>
    <div style="box-shadow:2px 2px 5px black;margin:5px 2px;border-radius: 2px;border:none;background-color: blue;color:white;padding:2px;;width:75%">.width-75</div>
    <div style="box-shadow:2px 2px 5px black;margin:5px 2px;border-radius: 2px;border:none;background-color: blue;color:white;padding:2px;;width:100%">.width-100</div>
   </div> </div>
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
&lt;div class="width-25"&gt; .width-25 &lt;/div&gt;
&lt;div class="width-50"&gt; .width-50 &lt;/div&gt;
&lt;div class="width-75"&gt; .width-75 &lt;/div&gt;
&lt;div class="width-100"&gt; .width-100 &lt;/div&gt;
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

        </div>

        <!-- Main Container End Here ! -->
    </div>



</body>
<?php include 'docscriptlinks.php'; ?>

</html>
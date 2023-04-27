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
            <h1 class="doc-page-title">Text Decoration</h1>
            <p class="m-1 fs-4">user Text deocration properties to decorate the text using our pre defined classes </p>
            <ul>
                the classes are named using the format:
                <li class="ms-4"><code>.text-decoration-{value} </code> for all type of devices.</li>
            </ul>
               
            <ul>
                Values are :
                <li class="ms-4"><code>.text-decoration-none</code>.</li>
                <li class="ms-4"><code>.text-decoration-line-through</code>.</li>
                <li class="ms-4"><code>.text-decoration-underline</code>.</li>
                <li class="ms-4"><code>.text-decoration-overline</code>.</li>
            </ul>
               

            <h3 class="doc-page-title">Example</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <p style="padding:10px 5px;border-radius:5px;background-color:silver;color:black;text-decoration:none">.text-decoration-none<p>
                <p style="padding:10px 5px;border-radius:5px;background-color:silver;color:black;text-decoration:line-through">.text-decoration-line-through<p>
                <p style="padding:10px 5px;border-radius:5px;background-color:silver;color:black;text-decoration:underline;">.text-decoration-underline<p>
                <p style="padding:10px 5px;border-radius:5px;background-color:silver;color:black;text-decoration:overline;">.text-decoration-overline<p>
                
                
                
                
                
                
                
                
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
&lt;p class="text-decoration-none"&gt;.text-decoration-none&lt;/p&gt;
&lt;p class="text-decoration-line-through"&gt;.text-decoration-line-through&lt;/p&gt;
&lt;p class="text-decoration-underline"&gt;.text-decoration-underline&lt;/p&gt;
&lt;p class="text-decoration-overline"&gt;.text-decoration-overline&lt;/p&gt;
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

            <!-- Example Code Container Starts Here  -->

        </div>

        <!-- Main Container End Here ! -->
    </div>



</body>
<?php include 'docscriptlinks.php'; ?>

</html>
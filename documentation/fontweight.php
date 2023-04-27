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
            <h1 class="doc-page-title">Font Weight</h1>
            <p class="m-1 fs-4">Assign Font Weight Propertie to text using Classes we defined </p>
            <ul>
                the classes are named using the format:
                <li class="ms-4"><code>.font-weight-{value} </code> for all type of devices.</li>
            </ul>
               <p class="m-1"> Where values are Ranged From <code>100 </code>to <code>900</code> and 2 more which are <code>bold </code>and<code> bolder.</code></P>

            <h3 class="doc-page-title">Example</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:100">Text with font weight 100</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:200">Text with font weight 200</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:300">Text with font weight 300</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:400">Text with font weight 400</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:500">Text with font weight 500</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:600">Text with font weight 600</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:700">Text with font weight 700</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:800">Text with font weight 800</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:900">Text with font weight 900</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:bold">Text with font weight bold</p>
                <p style="background-color:silver;color:black;border-radius:3px;font-weight:bolder">Text with font weight bolder</p>
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
&lt;p class="font-weight-100"&gt;Text with font weight 100&lt;/p&gt;
&lt;p class="font-weight-200"&gt;Text with font weight 200&lt;/p&gt;
&lt;p class="font-weight-300"&gt;Text with font weight 300&lt;/p&gt;
&lt;p class="font-weight-400"&gt;Text with font weight 400&lt;/p&gt;
&lt;p class="font-weight-500"&gt;Text with font weight 500&lt;/p&gt;
&lt;p class="font-weight-600"&gt;Text with font weight 600&lt;/p&gt;
&lt;p class="font-weight-700"&gt;Text with font weight 700&lt;/p&gt;
&lt;p class="font-weight-800"&gt;Text with font weight 800&lt;/p&gt;
&lt;p class="font-weight-900"&gt;Text with font weight 900&lt;/p&gt;
&lt;p class="font-weight-bold"&gt;Text with font weight bold&lt;/p&gt;
&lt;p class="font-weight-bolder"&gt;Text with font weight bolder&lt;/p&gt;
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
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
            <h1 class="doc-page-title">Opacity</h1>
            <p class="m-1 fs-4">The opacity property sets the opacity level for an element. The opacity level describes the transparency level, where 1 is not transparent at all, .5 is 50% visible, and 0 is completely transparent. </p>
            <ul>
                the classes are named using the format:
                <li class="ms-4"><code>.opacity-{value} </code> for all type of devices.</li>
            </ul>
               <p class="m-1"> Where values are Ranged From <code>01 </code>to <code>1</code>.</P>

            <h3 class="doc-page-title">Example</h3>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.1;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.2;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.3;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.4;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.5;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.6;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.7;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.8;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:0.9;"></p>
                <p style="background-color:silver;color:black;border-radius:3px;padding:10px 0px;opacity:1;"></p>
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
&lt;p class="opacity-01"&gt;&lt;/p&gt;
&lt;p class="opacity-02"&gt;&lt;/p&gt;
&lt;p class="opacity-03"&gt;&lt;/p&gt;
&lt;p class="opacity-04"&gt;&lt;/p&gt;
&lt;p class="opacity-05"&gt;&lt;/p&gt;
&lt;p class="opacity-06"&gt;&lt;/p&gt;
&lt;p class="opacity-07"&gt;&lt;/p&gt;
&lt;p class="opacity-08"&gt;&lt;/p&gt;
&lt;p class="opacity-09"&gt;&lt;/p&gt;
&lt;p class="opacity-01"&gt;&lt;/p&gt;
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
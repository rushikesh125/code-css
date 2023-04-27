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
            <h1 class="doc-page-title">Paddings </h1>
            <p class="m-1">Assign responsive-friendly <code> Padding </code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default <code> CSS</code> map ranging from<code> 0px</code> to<code> 10px.</code></p>
            <h1 class="doc-page-title">Notation </h1>
            <p class="m-1">Spacing <code>utilities </code>that apply to all breakpoints, from <code>sm</code> to <code>
                    xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code> min-width: 576px </code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.<br><br>

                The classes are named using the format <code> {property}{sides}-{size}</code> for <code> xs </code>and <code>{property}{sides}-{breakpoint}-{size}</code> for <code> sm, md, lg, xl </code> <br> <br>
            </p>
            <ul>
                Where property is :

                <li class="ms-4"><code>p</code> - for classes that sets Padding .</li>
                <br>
            </ul>
            <ul>
                Where sides is one of:

                <li class="ms-4"><code>top</code> - for classes that set padding-top .</li>
                <li class="ms-4"><code>bottom</code> - for classes that set padding-bottom .</li>
                <li class="ms-4"><code>left</code> - (start) for classes that set padding-left.</li>
                <li class="ms-4"><code>right</code> - (end) for classes that set padding-right.</li>
                <br>
            </ul>
            <ul>
                Where size is one of:

                <li class="ms-4"><code>0 To 10 </code> - for classes that eliminate the margin by setting it to <code>0</code> To <code>10</code> px.</li>
                    <br>
            </ul>

            <h3 class="doc-page-title">Example </h3>
            <p class="ms-4">Here are some representative examples of these classes:</p>

            <div class="col-12 code-container m-1">
                <div class="col-12 copybtn-container">
                    <button class="copy-btn-text">CSS</button>
                    <button class="copy-btn Copy-Btn1">
                        <i class="bi bi-clipboard2-fill"></i>
                        Copy
                    </button>
                </div>
                <div class="code-parent">
                    <pre>
                <code class="language-css element-to-copy1">
                  <!-- Source Code Starts  -->
/* Padding All Device  */
.p-1{
    padding:1px;
}
/* Padding Small Devices  */
@media (width >=576px) {
.p-sm-1{
    padding:1px;
 }
}
/* Medium Screen {tab} */
@media (width >=768px) {
    .p-md-1{
        padding:1px;
    }
}
/* Large Screen  */
@media (width >=992px) {
    .p-lg-1{
        padding:1px;
    }
}
/* xl Screen Laptop  */
@media (width >=1200px) {
    .p-xl-1{
        padding:1px;
    }
}
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

            <h3 class="doc-page-title">Horizontal / Left Padding Example </h3>
            <p class="m-1">Additionally, Code CSS also includes an <code>.p-1</code> to <code>.p-10</code> class for All Sides Padding.<br>
            </p>

             <!-- Example Code Container Starts Here  -->
        <div class="output-container">
                <button class="p-10" style="padding:10px;border:none;border-radius:4px;background-color:blue;color:white;">Button with 10px padding, all Sides</button>
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
&lt;button class="pleft-10 ptop-5 pright-10 pbottom-5"&gt;click Me&lt;/button&gt;
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
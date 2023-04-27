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
            <p class="m-1 fs-4">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</p>
            <h2 class="doc-page-title"> How it Workds ?</h2>
            <p class="m-1">Change the value of the display property with our responsive display utility classes. We purposely support only a subset of all possible values for <code>display</code>. Classes can be combined for various effects as you need.</p>
            <h2 class="doc-page-title"> Notation</h2>
            <p class="m-1">Display utility classes that apply to all breakpoints, from <code>sm</code> to <code>xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from min-width: 0; and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation. </p>

            <ul>
                As such, the classes are named using the format:

                <li class="ms-4"><code>.display-{value}</code> for all type of devices.</li>
                <li class="ms-4"><code>.display-{breakpoint}-{value}</code> for <code>sm, md, lg, xl,</code> and <code>xxl</code>.</li>
                <br>
            </ul>
            <ul>
                Where value is one of:

                <li class="ms-4"><code>.none</code>.</li>
                <li class="ms-4"><code>.block</code>.</li>
                <li class="ms-4"><code>.inline-block</code>.</li>
                <li class="ms-4"><code>.flex</code>.</li>
                <li class="ms-4"><code>.grid</code>.</li>
                <br>
            </ul>
            <p class="m-1">The media queries affect screen widths with the given breakpoint or larger. For example, <code>.display-lg-none</code> sets <code>display: none;</code> on <code>lg, xl,</code> and<code> xxl</code> screens.</p>

            <h3 class="doc-page-title">Example</h3>

            <div class="output-container">
                <div style="display:inline-block;padding:5px 10px;color:black;background-color:yellow;border-radius:4px;">.display-inline-block</div>
                <div style="display:inline-block;padding:5px 10px;color:black;background-color:yellow;border-radius:4px;">.display-inline-block</div>

            </div>

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
&lt;div class="display-inline-block"&gt;.display-inline-block div&lt;/div&gt;
&lt;div class="display-inline-block"&gt;.display-inline-block div&lt;/div&gt;
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



            <div class="output-container">
                <div style="display:block;padding:5px 10px;color:black;background-color:yellow;border-radius:4px;margin-top:5px;"> .display-block</div>
                <div style="display:block;padding:5px 10px;color:black;background-color:yellow;border-radius:4px;margin-top:5px;"> .display-block</div>

            </div>

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
&lt;div class="display-block"&gt;.display-block div&lt;/div&gt;
&lt;div class="display-block"&gt;.display-block div&lt;/div&gt;
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
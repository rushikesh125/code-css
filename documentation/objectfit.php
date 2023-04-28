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
            <ul>
                Property:

                <li class="ms-4"><code>.object-fit-contain</code>.</li>
                <br>
            </ul>
            <div class="output-container m-3">
                <center><img src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg" style="width:300px;height:210px;border:1px solid aqua;padding:1px;object-fit:contain;"></center>
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
&lt;img class="object-fit-contain" src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg"&gt;
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



            <ul>
                Property:

                <li class="ms-4"><code>.object-fit-cover</code>.</li>
                <br>
            </ul>
            <div class="output-container m-3">
                <center><img src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg" style="width:300px;height:210px;border:1px solid aqua;padding:1px;object-fit:cover;"></center>
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
&lt;img class="object-fit-cover" src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg"&gt;
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



            <ul>
                Property:

                <li class="ms-4"><code>.object-fit-fill</code>.</li>
                <br>
            </ul>
            <div class="output-container m-3">
                <center><img src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg" style="width:300px;height:210px;border:1px solid aqua;padding:1px;object-fit:fill;"></center>
            </div>

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
&lt;img class="object-fit-fill" src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg"&gt;
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


<ul>
                Property:

                <li class="ms-4"><code>.object-fit-none</code>.</li>
                <br>
            </ul>
            <div class="output-container m-3">
                <center><img src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg" style="width:300px;height:210px;border:1px solid aqua;padding:1px;object-fit:none;"></center>
             </div>

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
&lt;img class="object-fit-none" src="https://i.im.ge/2023/04/28/LkWWlT.img5.jpg"&gt;
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
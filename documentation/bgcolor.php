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
            <h1 class="doc-page-title">Background Colors</h1>
            <p class="m-1 fs-4">Convey meaning through color with a handful of<code> color utility </code>classes. Includes support for styling links with hover states, too.</p>
            <h2 class="doc-page-title">Colors</h2>
            <p class="m-1">Colorize background with color utilities. If you want to colorize background, you can use the <code>bgcolor-{color-value}</code> classes which have defined in Framework.</p>
            <ul class="m-2">
            As such, the classes are named using the format:

                <li class="ms-4"><code>.bgcolor-{value}</code> for all type of devices.</li>
                <li class="ms-4"><code>.text-{breakpoint}-{value}</code> for <code>sm,md,lg</code> and<code> xl</code> Screen Size.</li>
                <br>
            </ul>
            <ul>
                Where values are one of:

                <li class="ms-4"><code>.bgcolor-black</code>.</li>
                <li class="ms-4"><code>.bgcolor-silver</code>.</li>
                <li class="ms-4"><code>.bgcolor-gray</code>.</li>
                <li class="ms-4"><code>.bgcolor-white</code>.</li>
                <li class="ms-4"><code>.bgcolor-maroon</code>.</li>
                <li class="ms-4"><code>.bgcolor-red</code>.</li>
                <li class="ms-4"><code>.bgcolor-purple</code>.</li>
                <li class="ms-4"><code>.bgcolor-fuchsia</code>.</li>
                <li class="ms-4"><code>.bgcolor-green</code>.</li>
                <li class="ms-4"><code>.bgcolor-lime</code>.</li>
                <li class="ms-4"><code>.bgcolor-olive</code>.</li>
                <li class="ms-4"><code>.bgcolor-yellow</code>.</li>
                <li class="ms-4"><code>.bgcolor-navy</code>.</li>
                <li class="ms-4"><code>.bgcolor-blue</code>.</li>
                <li class="ms-4"><code>.bgcolor-teal</code>.</li>
                <li class="ms-4"><code>.bgcolor-aqua</code>.</li>
                <br>
            </ul>
                <h2>Example</h2>
            <div class="output-container">
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:black;width:140px;box-shadow:0px 0px 6px silver;color:white;">.bgcolor-black</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:silver;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-silver</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:gray;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-gray</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:white;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-white</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:maroon;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-maroon</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:red;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-red</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:purple;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-purple</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:fuchsia;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-fuchsia</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:green;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-green</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:lime;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-lime</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:olive;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-olive</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:yellow;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-yellow</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:navy;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-navy</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:blue;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-blue</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:teal;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-teal</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:aqua;width:140px;box-shadow:0px 0px 6px silver;color:black;">.bgcolor-aqua</button>
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
&lt;button class="bgcolor-black"&gt;.bgcolor-black&lt;/button&gt;
&lt;button class="bgcolor-silver"&gt;.bgcolor-silver&lt;/button&gt;
&lt;button class="bgcolor-gray"&gt;.bgcolor-gray&lt;/button&gt;
&lt;button class="bgcolor-white"&gt;.bgcolor-white&lt;/button&gt;
&lt;button class="bgcolor-maroon"&gt;.bgcolor-maroon&lt;/button&gt;
&lt;button class="bgcolor-red"&gt;.bgcolor-red&lt;/button&gt;
&lt;button class="bgcolor-purple"&gt;.bgcolor-purple&lt;/button&gt;
&lt;button class="bgcolor-fuchsia"&gt;.bgcolor-fuchsia&lt;/button&gt;
&lt;button class="bgcolor-green"&gt;.bgcolor-green&lt;/button&gt;
&lt;button class="bgcolor-lime"&gt;.bgcolor-lime&lt;/button&gt;
&lt;button class="bgcolor-yellow"&gt;.bgcolor-yellow&lt;/button&gt;
&lt;button class="bgcolor-navy"&gt;.bgcolor-navy&lt;/button&gt;
&lt;button class="bgcolor-blue"&gt;.bgcolor-blue&lt;/button&gt;
&lt;button class="bgcolor-olive"&gt;.bgcolor-olive&lt;/button&gt;
&lt;button class="bgcolor-teal"&gt;.bgcolor-teal&lt;/button&gt;
&lt;button class="bgcolor-aqua"&gt;.bgcolor-aqua&lt;/button&gt;
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

        <!-- Main Container End Here ! -->
    </div>



</body>
<?php include 'docscriptlinks.php'; ?>

</html>
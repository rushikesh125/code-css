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
            <h1 class="doc-page-title">Font Colors</h1>
            <p class="m-1 fs-4">Convey meaning through color with a handful of<code> color utility </code>classes. Includes support for styling links with hover states, too.</p>
            <h2 class="doc-page-title">Colors</h2>
            <p class="m-1">Colorize text with color utilities. If you want to colorize text, you can use the <code>text-{color-value}</code> classes which have defined in Framework.</p>
            <ul class="m-2">
            As such, the classes are named using the format:

                <li class="ms-4"><code>.text-{value}</code> for all type of devices.</li>
                <li class="ms-4"><code>.text-{breakpoint}-{value}</code> for <code>sm,md,lg</code> and<code> xl</code> Screen Size.</li>
                <br>
            </ul>
            <ul>
                Where values are one of:

                <li class="ms-4"><code>.text-black</code>.</li>
                <li class="ms-4"><code>.text-silver</code>.</li>
                <li class="ms-4"><code>.text-gray</code>.</li>
                <li class="ms-4"><code>.text-white</code>.</li>
                <li class="ms-4"><code>.text-maroon</code>.</li>
                <li class="ms-4"><code>.text-red</code>.</li>
                <li class="ms-4"><code>.text-purple</code>.</li>
                <li class="ms-4"><code>.text-fuchsia</code>.</li>
                <li class="ms-4"><code>.text-green</code>.</li>
                <li class="ms-4"><code>.text-lime</code>.</li>
                <li class="ms-4"><code>.text-olive</code>.</li>
                <li class="ms-4"><code>.text-yellow</code>.</li>
                <li class="ms-4"><code>.text-navy</code>.</li>
                <li class="ms-4"><code>.text-blue</code>.</li>
                <li class="ms-4"><code>.text-teal</code>.</li>
                <li class="ms-4"><code>.text-aqua</code>.</li>
                <br>
            </ul>
                <h2>Example</h2>
            <div class="output-container">
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:black;">.text-black</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:silver;">.text-silver</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:gray;">.text-gray</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:white;">.text-white</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:maroon;">.text-maroon</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:red;">.text-red</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:purple;">.text-purple</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:fuchsia;">.text-fuchsia</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:green;">.text-green</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:lime;">.text-lime</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:olive;">.text-olive</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:yellow;">.text-yellow</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:navy;">.text-navy</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:blue;">.text-blue</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:teal;">.text-teal</button>
                <button style="margin:2px 3px;border:none;border-radius:3px;background-color:whitesmoke;width:120px;box-shadow:0px 0px 6px silver;color:aqua;">.text-aqua</button>
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
&lt;button class="text-black"&gt;.text-black&lt;/button&gt;
&lt;button class="text-silver"&gt;.text-silver&lt;/button&gt;
&lt;button class="text-gray"&gt;.text-gray&lt;/button&gt;
&lt;button class="text-white"&gt;.text-white&lt;/button&gt;
&lt;button class="text-maroon"&gt;.text-maroon&lt;/button&gt;
&lt;button class="text-red"&gt;.text-red&lt;/button&gt;
&lt;button class="text-purple"&gt;.text-purple&lt;/button&gt;
&lt;button class="text-fuchsia"&gt;.text-fuchsia&lt;/button&gt;
&lt;button class="text-green"&gt;.text-green&lt;/button&gt;
&lt;button class="text-lime"&gt;.text-lime&lt;/button&gt;
&lt;button class="text-yellow"&gt;.text-yellow&lt;/button&gt;
&lt;button class="text-navy"&gt;.text-navy&lt;/button&gt;
&lt;button class="text-blue"&gt;.text-blue&lt;/button&gt;
&lt;button class="text-olive"&gt;.text-olive&lt;/button&gt;
&lt;button class="text-teal"&gt;.text-teal&lt;/button&gt;
&lt;button class="text-aqua"&gt;.text-aqua&lt;/button&gt;
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
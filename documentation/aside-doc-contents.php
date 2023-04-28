<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Documentation Contents Sidebar Starts -->
<aside class="documentation-aside-container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center flex-column">
            <p class="col-12 aside-Contents-heading ">
                <i class="bi bi-book-half"></i>
                Contents
            </p>
            <ul>
                <li class="aside-contents-items"><a href="gettingstarted.php" class="<?php if ($currentPage == "gettingstarted.php"){ echo " crt-page"; } ?>">Getting Started</a></li>
                <li class="aside-contents-items"><a href="download.php" class="<?php if ($currentPage == "download.php") { echo " crt-page"; } ?>">Download</a></li>
            </ul>
            <p class="col-12 aside-Contents-heading ">
            <i class="bi bi-braces-asterisk"></i>
                Utilities
            </p>
            <ul>
            <li class="aside-contents-items fs-3"><a href="colors.php" class="<?php if ($currentPage == "colors.php"){ echo " crt-page"; } ?>">Colors</a></li>
            <li class="aside-contents-items fs-3"><a href="bgcolor.php" class="<?php if ($currentPage == "bgcolor.php"){ echo " crt-page"; } ?>">bg-colors</a></li>
            <li class="aside-contents-items fs-3"><a href="margin.php" class="<?php if ($currentPage == "margin.php"){ echo " crt-page"; } ?>">Margins</a></li>
            <li class="aside-contents-items fs-3"><a href="padding.php" class="<?php if ($currentPage == "padding.php"){ echo " crt-page"; } ?>">Padding</a></li>
            <li class="aside-contents-items fs-3"><a href="display.php" class="<?php if ($currentPage == "display.php"){ echo " crt-page"; } ?>">Display</a></li>
            <li class="aside-contents-items fs-3"><a href="buttons.php" class="<?php if ($currentPage == "buttons.php"){ echo " crt-page"; } ?>">Buttons</a></li>
            <li class="aside-contents-items fs-3"><a href="fontweight.php" class="<?php if ($currentPage == "fontweight.php"){ echo " crt-page"; } ?>">Font Weight</a></li>
            <li class="aside-contents-items fs-3"><a href="opacity.php" class="<?php if ($currentPage == "opacity.php"){ echo " crt-page"; } ?>">Opacity</a></li>
            <li class="aside-contents-items fs-3"><a href="textdecoration.php" class="<?php if ($currentPage == "textdecoration.php"){ echo " crt-page"; } ?>">Text Decorations</a></li>
            <li class="aside-contents-items fs-3"><a href="objectfit.php" class="<?php if ($currentPage == "objectfit.php"){ echo " crt-page"; } ?>">Object Fit Property</a></li>
            <li class="aside-contents-items fs-3"><a href="sizing.php" class="<?php if ($currentPage == "sizing.php"){ echo " crt-page"; } ?>">Sizing</a></li>


            </ul>
        </div>
    </div>

</aside>
<!-- Documentation Contents Sidebar Ends -->
<!-- Documentation Contents offCanvas Starts -->
<div class="offcanvas-lg offcanvas-start doc-left-menu d-lg-none" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
            <a class="nav-link nav-opt-documentation position-absolute top-0 start-50 translate-middle-x mt-3" href="gettingstarted.php">Documentation</a>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
    </div>
    <hr class="d-lg-none" style="border:1px solid #8dffec;">
    <div class="row " style="overflow:scroll;">
        <div class="col-12 d-flex justify-content-center flex-column ">
            <p class="col-12 aside-Contents-heading text-start">
                <i class="bi bi-book-half"></i>
                Contents
            </p>
            <ul>
            <li class="aside-contents-items"><a href="gettingstarted.php" class="<?php if ($currentPage == "gettingstarted.php") { echo " crt-page";} ?>">Getting Started</a></li>
            <li class="aside-contents-items"><a href="download.php" class="<?php if ($currentPage == "download.php") { echo " crt-page";} ?>">Download</a></li>
            </ul>
            <p class="col-12 aside-Contents-heading text-start">
            <i class="bi bi-braces-asterisk"></i>
                Utilities
            </p>
            <ul>
            <li class="aside-contents-items"><a href="colors.php" class="<?php if ($currentPage == "colors.php"){ echo " crt-page"; } ?>">Colors</a></li>
            <li class="aside-contents-items"><a href="bgcolor.php" class="<?php if ($currentPage == "bgcolor.php"){ echo " crt-page"; } ?>">bg-colors</a></li>
            <li class="aside-contents-items"><a href="margin.php" class="<?php if ($currentPage == "margin.php"){ echo " crt-page"; } ?>">Margins</a></li>
            <li class="aside-contents-items"><a href="padding.php" class="<?php if ($currentPage == "padding.php"){ echo " crt-page"; } ?>">Padidng</a></li>
            <li class="aside-contents-items"><a href="display.php" class="<?php if ($currentPage == "display.php"){ echo " crt-page"; } ?>">Display</a></li>
            <li class="aside-contents-items"><a href="buttons.php" class="<?php if ($currentPage == "buttons.php"){ echo " crt-page"; } ?>">Buttons</a></li>
            <li class="aside-contents-items"><a href="fontweight.php" class="<?php if ($currentPage == "fontweight.php"){ echo " crt-page"; } ?>">Font Weight</a></li>
            <li class="aside-contents-items"><a href="opacity.php" class="<?php if ($currentPage == "opacity.php"){ echo " crt-page"; } ?>">Opacity</a></li>
            <li class="aside-contents-items"><a href="textdecoration.php" class="<?php if ($currentPage == "textdecoration.php"){ echo " crt-page"; } ?>">Text Decoration</a></li>
            <li class="aside-contents-items"><a href="objectfit.php" class="<?php if ($currentPage == "objectfit.php"){ echo " crt-page"; } ?>">Object Fit Property</a></li>
            <li class="aside-contents-items"><a href="sizing.php" class="<?php if ($currentPage == "sizing.php"){ echo " crt-page"; } ?>">Sizing</a></li>

            </ul>
        </div>
        
    </div>
</div>
<!-- Documentation OffCanvas ENds  -->
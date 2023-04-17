<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistem Parkir</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        
        <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
        <link rel="stylesheet" href="assets/css/backend.css?v=1.0.0">
        
        <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="assets/vendor/remixicon/fonts/remixicon.css">
        
        <!-- Viewer Plugin -->
            <!--PDF-->
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/pdf/pdf.viewer.css">
            <!--Docs-->
            <!--PPTX-->
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css">
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css">
            <!--All Spreadsheet -->
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css">
            <!--Image viewer-->
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css">
            <!--officeToHtml-->
            <link rel="stylesheet" href="assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css">  </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
<div class="wrapper">

    @include('layouts.sidebar')
    @include('layouts.menubar')
    @yield('container')
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="backend/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="backend/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">CloudBOX</a>.
            </div>
        </div>
    </div>
</footer>
<!-- Backend Bundle JavaScript -->
<script src="assets/js/backend-bundle.min.js"></script>

<!-- Chart Custom JavaScript -->
<script src="assets/js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script src="assets/js/chart-custom.js"></script>

<!--PDF-->
<script src="assets/vendor/doc-viewer/include/pdf/pdf.js"></script>
<!--Docs-->
<script src="assets/vendor/doc-viewer/include/docx/jszip-utils.js"></script>
<script src="assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js"></script>
<!--PPTX-->
<script src="assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js"></script>
<script src="assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js"></script>
<script src="assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js"></script>
<script src="assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js"></script>
<script src="assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js"></script>
<!--All Spreadsheet -->
<script src="assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js"></script>
<script src="assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js"></script>
<!--Image viewer-->
<script src="assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js"></script>
<!--officeToHtml-->
<script src="assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js"></script>
<script src="assets/js/doc-viewer.js"></script>
<!-- app JavaScript -->
<script src="assets/js/app.js"></script>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Title</h4>
                <div>
                    <a class="btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
            <div class="modal-body">
                <div id="resolte-contaniner" style="height: 500px;" class="overflow-auto">
                    File not found
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
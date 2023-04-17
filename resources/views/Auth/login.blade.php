
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
    <body class=" " style="background-image: url('assets/background.png'); background-repeat: no-repeat; background-size: cover;">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        
        <div class="wrapper">
            <section class="login-content">
                <div class="container h-100">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-sm-12 col-12" style="margin-top: 80px;">
                            <div class="sign-user_card" style="background-color: hsla(0, 100%, 100%, 0.5);">
                                <img src="assets/logo.png" class="img-fluid rounded-normal" alt="logo" action="/login">
                                <h3 class="mb-3 mt-3">Sign In</h3>
                                <p style="color: black">Login to stay connected.</p>
                                <form method="post" id="login-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group" align="left">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder=" ">
                                            </div>
                                            @if (session()->has('loginerror'))
                                                <span>{{ session('loginerror') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group" align="left">
                                                <label>Password</label>
                                                <input class="floating-input form-control" type="password" placeholder=" " id="password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
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
        {{-- <script>
            $(document).ready(function(){
                var form = '#add-user-form';
                $("#login-form").on("submit", function(e){
                    e.preventDefault();
                    
                    var username    = $("#username").val();
                    var password = $("#password").val();
                    
                    if (username != "" && password != "") {
                        if (username != "" && password != "") {
                            $.ajax({
                                method: "POST",
                                url: "/login",
                                dataType: "JSON",
                                data: $("#login-form").serialize(),
                                success: function(data) {
                                    if (data.success==true) {
                                        if(data.code==200){
                                            
                                            setTimeout(function() {
                                                window.location.href = "/"+data.url;
                                            }, 1000)
                                        }else if(data.code == 400){
                                            console.log('error')
                                        }
                                    }else if (data.success==false) {
                                        console.log('error')
                                    }
                                },
                                // success:function(response)
                                // {
                                //     $(form).trigger("reset");
                                //     alert(response.success)
                                // },
                                // error: function(response) {
                                // }
                            });
                        }
                    }
                    // return false;
                });
            });
        </script> --}}
    </body>
</html>
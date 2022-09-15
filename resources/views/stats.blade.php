<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{$asset}}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{$asset}}/assets/css/Google-Style-Text-Input.css">
</head>

<body>
    <div class="row d-flex d-sm-flex d-md-flex d-row-flex" style="height: 100vh;width: 100vw;">
        <div class="col d-sm-flex d-md-flex d-lg-flex flex-column flex-sm-column justify-content-sm-center align-items-sm-center flex-md-column justify-content-md-center flex-lg-column justify-content-lg-center align-items-lg-center justify-content-center d-flex flex-column" style="background: url(&quot;https://s1.1zoom.ru/big3/158/354748-admin.jpg&quot;), var(--bs-blue);background-size: cover, auto;backdrop-filter: blur(100px);">
            <div>
                <h1 style="color: rgb(255,255,255);font-size: 64.88px;">{{$title}}</h1>
            </div>
            <form class="d-flex flex-column justify-content-lg-center align-items-lg-center" style="margin-left: 12px;">
                <div style="margin-top: 4px;">
                    <h1 class="fs-4 fw-light text-start text-light">URL</h1><input class="shadow-none form-control" type="url" style="width: 380px;margin-top: 0px;" value="{{$url}}">
                </div>
                <div style="margin-top: 4px;">
                    <h1 class="fs-4 fw-light text-start text-light">Redirects</h1><input class="shadow-none form-control" type="url" style="width: 380px;margin-top: 0;" readonly="" value="{{$redirects}}" placeholder="Views">
                </div>
                <div style="margin-top: 4px;">
                    <h1 class="fs-4 fw-light text-start text-light">URL Stats</h1><input class="shadow-none form-control" type="url" style="width: 380px;margin-top: 0;" readonly="" value="{{$url_stats}}" placeholder="Views">
                </div>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
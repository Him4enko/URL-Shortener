<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
</head>

<body>
    <div class="row d-flex d-sm-flex d-md-flex d-row-flex" style="height: 100vh;width: 100vw;">
        <div class="col d-sm-flex d-md-flex d-lg-flex flex-column flex-sm-column justify-content-sm-center align-items-sm-center flex-md-column justify-content-md-center flex-lg-column justify-content-lg-center align-items-lg-center justify-content-center d-flex flex-column" style="background: url(&quot;https://s1.1zoom.ru/big3/158/354748-admin.jpg&quot;), var(--bs-blue);background-size: cover, auto;backdrop-filter: blur(100px);">
            <div>
                <h1 style="color: rgb(255,255,255);font-size: 64.88px;">{{$title}}</h1>
            </div>
            <form action='/short' method="POST" class="d-flex justify-content-lg-center align-items-lg-center" style="margin-left: 12px;">
            @csrf
                <input name="source_link" class="form-control" type="url" style="width: 380px;"><button class="btn btn-primary" type="submit" style="margin-left: -8px;background: linear-gradient(148deg, var(--bs-btn-hover-border-color), var(--bs-red)), var(--bs-gray-300);border-radius: 0;border-top-right-radius: 6px;border-bottom-right-radius: 6px;">Short</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
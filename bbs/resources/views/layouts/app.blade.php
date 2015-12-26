<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掲示板</title>

    <!-- materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/materialize_custom.css">

</head>
<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <nav class="light-red lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="/bbs" class="brand-logo">BBS</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>

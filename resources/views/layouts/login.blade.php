<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CampusImmat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="./public/images/logo.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #fff;
            width: 250px;
            /* Largeur de la barre latérale */
        }

        .custom-sidebar {
            overflow-y: auto;
            overflow-x: hidden;
            height: 100%;
        }

        .main-content {
            margin-left: 250px;
            /* Marge à gauche pour laisser de la place à la barre latérale */
        }

        .img-fluid-max-width {
            max-width: 200px;
            /* Remplacez 200px par la largeur maximale souhaitée */
        }
    </style>
</head>

<body>
    <!-- Contenu principal -->
    <main class="main-content">
        <div class="container mt-5">
            @yield('content')
        </div>
    </main>

    <!-- jQuery and Bootstrap JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>

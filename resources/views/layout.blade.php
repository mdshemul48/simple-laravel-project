<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}">

    </script>
</head>

<body>

    <header class="header">
        @section('header')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="users">User List </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create">Create account</a>
                        </li>
                    </ul>
                </div>
        </nav> @show()
    </header>
    <main class="content">
        @section('content')
        @show()

    </main>
    <footer class="footer">
        @section('footer')
            <h1>footer part</h1>
        @show()
    </footer>

</body>

</html>

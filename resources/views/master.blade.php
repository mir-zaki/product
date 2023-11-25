<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                </li>
                
            </ul>
        </nav>
        <h1>My Online Store</h1>
    </header>


    @yield('content')


    <div id="result"></div>

    <footer>
        <p>&copy; 2021 My Online Store. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
<style>
    /* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #f4f4f4;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

form {
    margin: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input, form textarea {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

form input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

footer {
    background-color: #f4f4f4;
    padding: 20px;
    text-align: center;
}

/* Media query for mobile devices */
@media (max-width: 767px) {
    body {
        font-size: 16px;
    }

    header h1 {
        font-size: 24px;
    }

    nav ul li {
        display: block;
        margin-bottom: 5px;
    }

    form {
        margin: 10px;
    }
}
</style>

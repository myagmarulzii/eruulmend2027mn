<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Эрүүл мэндийг дэмжих жил 2027')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            display: inline-block;
            padding: 20px 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .logo h1 {
            color: white;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 10px;
        }

        .logo p {
            color: #f0f0f0;
            font-size: 1.2em;
            font-weight: bold;
        }

        nav {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }

        .content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
        }

        footer {
            text-align: center;
            color: white;
            padding: 20px;
            margin-top: 30px;
        }

        footer p {
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            .logo h1 {
                font-size: 1.8em;
            }

            .logo p {
                font-size: 1em;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
    @yield('extra-css')
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-container">
                <div class="logo">
                    <h1>🏥 Эрүүл мэндийг дэмжих жил</h1>
                    <p>2027</p>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Нүүр хуудас</a></li>
                    <li><a href="{{ route('statistics') }}">Статистик</a></li>
                    <li><a href="{{ route('contact') }}">Холбоо барих</a></li>
                    <li><a href="{{ route('membership') }}">ТББ-д элсэх</a></li>
                </ul>
            </nav>
        </header>

        <main class="content">
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>

        <footer>
            <p>&copy; 2027 Эрүүл мэндийг дэмжих жил. Бүх эрх хуулиар хамгаалагдсан.</p>
        </footer>
    </div>

    @yield('extra-js')
</body>
</html>

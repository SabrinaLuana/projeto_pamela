<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Exemplo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }


        nav {
            background-color: #860043;
            padding: 10px;
            display: flex;
            justify-content: end;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            margin: 0 10px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #6d003e;
        }

        .container {
            flex: 1;
            min-height: 100vh;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .produtos {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
            gap: 10px;
        }

        .produto {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 20px);
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
            /* flex: 1 1 30%; */
            box-sizing: border-box;
            transition: transform 0.3s ease;
            margin-right: 10px;
        }

        .produto:hover {
            transform: scale(1.05);
        }

        .produto img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;

        }

        .produto h3 {
            margin: 10px 0;
            color: #ff7db3;
        }

        .produto p {
            color: #666;
        }



        .admin-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #e74c3c;
            color: white;
            padding: 15px;
            border-radius: 50%;
            font-size: 20px;
            border: none;
            cursor: pointer;
        }

        .admin-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>


    <nav>
        <a href="home.php">Home</a>
        <a href="sobre.html">Sobre Nós</a>
        <a href="catalogo.html">Catálogo</a>
        <a href="contato.html">Contato</a>
    </nav>




    <!-- Botão Admin -->
    <button class="admin-btn" onclick="window.location.href='admin.html'">
        <i class="fas fa-cogs"></i>
    </button>


</body>

</html>

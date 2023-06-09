<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>        
        body {
            background-image: linear-gradient(40deg, #744d4d, #ffffff);
            font-size: 1.2rem;
            line-height: 1.5;
            color: black;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Roboto', sans-serif;
        }

        h1 {
            font-size: 2rem;
            font-weight: 400;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -1rem;
        }

        .col {
            flex: 1 1 100%;
            padding: 0 1rem;
        }

        .center {
            text-align: center;
        }

        .centerbox {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            display: flex;
            align-items: center;
        }

        .btn:hover {
            background-color: #444;
        }

        .btn img {
            width: 2.5rem;
        }

        .logo {
            width: 100%;
            max-width: 300px;
        }

        ::-webkit-scrollbar {
            width: 0.4rem;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="centerbox">
    <img src="https://cdn.discordapp.com/attachments/989920686065725490/1097604721369423953/leravellogo.png" alt="" class="logo" draggable="false">
    <h1 class="center">Leravel</h1>
    <p class="center">Worst php framework</p>
    <a href="https://github.com/lera2od/leravel" class="btn"><img src="https://img.icons8.com/fluency/256/github.png">Github</a>
    </div>
</body>

</html>
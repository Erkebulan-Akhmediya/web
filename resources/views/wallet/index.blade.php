<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
</head>
<body>
    <header>
        <div class="block" id="header">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('wallet.index') }}">Wallet</a>
        </div>
    </header>
    <main>
        <div class="block" id="categories"></div>
    </main>
</body>
</html>
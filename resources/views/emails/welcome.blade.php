<!DOCTYPE html>
<html>
<head>
    <title>Добро пожаловать</title>
    <style>
        .mail{
            display: flex;
            flex-flow:column;
            justify-content:center;
            background-color:red;
        }
    </style>
</head>
<body>
    <h1>Привет, {{ $user->name ?? $user->username }}!</h1>
    <p>Спасибо за регистрацию на нашем сайте!</p>
    <span class="bg-red-600">bu welcome blade php Test</span>
    <div class="mail">
        <div>A</div>
        <div>B</div>
        <div>C</div>
    </div>
</body>
</html>

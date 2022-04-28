<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>create</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div class="bg-slate-200 w-[400px]">
        <form action="{{ route('infomation.store') }}" method="post" class="ml-4">
            @csrf
                <p>名前</p>
                <input type="text" name="name">

                <p>目</p>
                <input type="text" name="order">

                <p>科</p>
                <input type="text" name="family">
                <br>
                <x-button class="mt-4">登録</x-button>
        </form>
    </div>


</body>
</html>

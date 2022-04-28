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

    @if(session('status'))
    <div id="flash_message" class="text-blue-700 p-3 bg-blue-300 rounded mt-16 mb-3 flex justify-center">
        {{ session('status') }}
    </div>
    @endif

    <div class="bg-slate-200 w-[400px]">
        <form action="{{ route('infomation.store') }}" method="post" class="ml-4">
            @csrf
                <p>名前</p>
                <input type="text" name="name" class="rounded-lg border-2">

                <p>目</p>
                <input type="text" name="order" class="rounded-lg border-2">

                <p>科</p>
                <input type="text" name="family" class="rounded-lg border-2">
                <br>
                <x-button class="my-4">登録</x-button>
        </form>
    </div>


</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Chat app</title>
</head>
<body>
<div class="container">
    <div class="row" id="app">
        <div class="col-12">
            <h3 class="text-center mt-5 mb-3">Chat room</h3>
            <ul class="list-group" style="height: 500px; overflow-y: scroll " v-chat-scroll>
                <message-component v-for="value in chat.message" :key=value.index>
                    @{{ value }}
                </message-component>
            </ul>
            <div class="form-group mt-3">
                <input type="text" class="form-control" placeholder="Write message" v-model="message" @keyup.enter="send">
            </div>

        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Voting System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div id="app">
            <router-view></router-view>
        </div>

        <div id="error"></div>

        <script>
            window.config = {
            "API":"{{ url('api/v1') }}/", //URL OF YOUR API LOCATED
                    "baseURL":"{{ url('') }}/", //URL OF YOUR WEBSITE
                    "storageURL":"{{ url('storage') }}/", //URL WHERE YOUR IMAGES and OTHER FILEs stored
                    "debug": {{ env('APP_DEBUG') }}
            }
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

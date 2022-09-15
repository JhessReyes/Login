<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto px-auto" {{-- style="padding: 20%" --}}>
        <div class="form-group col-md-12">
            <div class="row content-center" style="text-align: center">
                <div class="max-h-full content-center glass">
                    <div class="hero min-h-screen min-w-screen">
                        <div class="mockup-window border bg-base-300">
                            <div class="flex justify-center px-4 py-16 bg-base-200">Welcome: {{ $user[0]->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

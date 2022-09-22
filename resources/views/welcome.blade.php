<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="mx-auto px-auto" {{-- style="padding: 20%" --}}>
        <div class="form-group col-md-12">
            <div class="row content-center" style="text-align: center">
                <div class="max-h-full content-center glass">
                    @if (Session::has('message'))
                        <div class="badge badge-success badge-lg gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-4 h-4 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            {{ Session::get('message') }}
                        </div>
                    @endif
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

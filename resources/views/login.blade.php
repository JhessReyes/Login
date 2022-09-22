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
                <div class="max-h-full content-center">
                    @if (Session::has('message-error'))
{{--                         <div class="alert alert-error shadow-md">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ Session::get('message-error') }} </span>
                            </div>
                        </div> --}}
                        <div class="badge badge-error gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-4 h-4 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            {{ Session::get('message-error') }} 
                        </div>
                    @endif
                    <form action="{{ '/login' }}" enctype="multipart/form-data" method="POST">
                        @method('POST')
                        @csrf
                        <div class="hero min-h-screen min-w-screen bg-base-200"
                            style="background-image: url(https://winaero.com/blog/wp-content/uploads/2021/11/Windows-11-lock-screen-backgrounds.jpg);">
                            <div class="hero-content flex-col lg:flex-row-reverse">
                                <div class="text-center lg:text-left" style="padding: 5%">
                                    <h1 class="text-5xl font-bold">Login</h1>
                                    <p class="py-8">Enter credentials.</p>
                                </div>
                                <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2)">
                                        <div class="form-control">
                                            <label class="label">
                                                <span class="label-text">Email</span>
                                            </label>
                                            <input type="email" placeholder="email" name="email" required
                                                class="input input-bordered" />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <span class="label-text">Password</span>
                                            </label>
                                            <input type="password" placeholder="password" name="password" required
                                                class="input input-bordered" />
                                            <label class="text-right">
                                                <a href="{{ '/signup' }}" class="label-text-alt link link-hover">
                                                    Sign Up
                                                </a>
                                            </label>
                                        </div>
                                        <div class="form-control mt-6">
                                            <button class="btn btn-primary">Log in</button>
                                            {{-- <button class="btn btn-primary loading">loading</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

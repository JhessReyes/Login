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
                <div class="max-h-full content-center">

                    <form action="{{ '/register' }}" enctype="multipart/form-data" method="POST">
                        @method('POST')
                        @csrf
                        <div class="hero min-h-screen min-w-screen bg-base-200"
                            style="background-image: url(https://winaero.com/blog/wp-content/uploads/2021/11/Windows-11-lock-screen-backgrounds.jpg);">
                            <div class="hero-content flex-col lg:flex-row-reverse">
                                <div class="text-center lg:text-left" style="padding: 5%">
                                    <h1 class="text-5xl font-bold">Register</h1>
                                    <p class="py-8">Enter your data.</p>
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
                                                <span class="label-text">User name</span>
                                            </label>
                                            <input type="text" placeholder="name" name="name" required
                                                class="input input-bordered" />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <span class="label-text">Password</span>
                                            </label>
                                            <input type="password" placeholder="password" name="password" required
                                                class="input input-bordered" />
                                            <label class="text-right">
                                                {{-- <a href="#" class="label-text-alt link link-hover">
                                                    Sign Up
                                                </a> --}}
                                            </label>
                                        </div>
                                        <div class="form-control mt-6">
                                            <button class="btn btn-primary">Save</button>
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

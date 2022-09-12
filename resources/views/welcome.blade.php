<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto px-10" {{-- style="padding: 20%" --}}>
        <div class="form-group col-md-12">
            <div class="row content-center" style="text-align: center">
                <div class="max-h-full content-center">

                    <div class="">
                        <div class="hero min-h-screen min-w-screen bg-base-200" >
                            <div class="hero-content flex-col lg:flex-row-reverse">
                                <div class="text-center lg:text-left">
                                    <h1 class="text-5xl font-bold">Login</h1>
                                    <p class="py-8">Enter credentials.</p>
                                </div>
                                <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100 glass">
                                    <div class="card-body">
                                        <div class="form-control">
                                            <label class="label">
                                                <span class="label-text">Email</span>
                                            </label>
                                            <input type="text" placeholder="email" class="input input-bordered" />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <span class="label-text">Password</span>
                                            </label>
                                            <input type="text" placeholder="password" class="input input-bordered" />
                                            <label class="label">
                                                <a href="#" class="label-text-alt link link-hover">Forgot
                                                    password?</a>
                                            </label>
                                        </div>
                                        <div class="form-control mt-6">
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

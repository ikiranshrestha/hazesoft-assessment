<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section class="text-center text-lg-start">

        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }

            body {
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                height: 100vh;
            }
        </style>
</head>

<body>


    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 offset-lg-3  mb-5 mb-lg-0">
                <div class="card cascading-right"
                    style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
                    <div class="card-body p-5 shadow-5">
                
                        @include('admin-side.message')
                        <h2 class="fw-bold mb-5 text-center">Login to Proceed</h2>
                        <form action="{{route('loginValidate')}}" method="POST">


                            @csrf

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Username</label>

                                <input type="text" name="username" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Password</label>

                                <input type="password" name="password" class="form-control" />
                            </div>



                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Login
                            </button>
                            <div class="text-center">
                                <small class="text-muted">
                                    {{-- Don't have an account? <a href="{{route('users.create')}}">Sign up Now</a> --}}
                                </small>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->


</body>

</html>

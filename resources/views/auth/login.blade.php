<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholar Login</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <section class="vh-100" >
        <div class="container-fluid h-100 p-0">
            <div class="row h-100 g-0">
                <div class="col-3 d-flex align-items-center justify-content-end bg-warning">
                    <div class="shadow container bg-primary" style="margin-left: 14%; height:70%">
                        <div class="d-flex flex-column h-100">
                            <div class="container " style="padding-top: 30%">
                                <h1 class="fs-5 text-light text-start px-2">Welcome To <span
                                        class="fw-bold text-uppercase">Magkahi<span
                                            class="text-warning">OSA!</span></span>
                                </h1>
                                <hr class="m-2 bg-white text-white" style="height: 2px;" />
                            </div>
                            <div class="container flex-grow-1 pt-1">
                                <p class="text-light text-start px-2" style="font-size: 12px">The University of Science
                                    and Technology of Southern Philippines (USTP) has been handling student organization
                                    processes through the Office of Student Affairs (OSA) for the past few years. Just
                                    recently, in March 2020, all transactions for students have been slowly converted
                                    through online means, which poses a huge gap in terms of communication between the
                                    OSA and the recognized student organizations.
                                </p>
                                <p class="text-light text-start px-2" style="font-size: 12px">Although emails and
                                    contact information have been opened to the public for transactions, students are
                                    still facing delays and backlogs in their activities which include approval of
                                    documents, email responses, and the like. With these ongoing situations, the lack of
                                    a centralized platform to organize the transactions and create a much responsive
                                    communication are left unaddressed.
                                </p>
                            </div>
                            <nav aria-label="" class="">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link fa-thin fa-circle" href="#" tabindex="-1"></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link fa-thin fa-circle" href="#"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-9 d-flex align-items-center justify-content-start bg-white">
                    <div class="shadow container bg-white" style="height: 70%; margin-right: 10%">
                        <div class="container d-flex align-items-center justify-content-center flex-column h-100">
                            <img src="{{asset('images/logo-150x150.png')}}" class="img-fluid" alt="Logo" srcset="">
                            <form class="pt-3 pb-0" style="background: #F7F7F7;width: 35%">
                                <div class="container-fluid px-4">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="container-fluid px-4">
                                    <div class="form-floating mb-5">
                                        <input type="password" class="form-control" id="floatingInput2" placeholder="name@example.com">
                                        <label for="floatingInput2">Password</label>
                                        <div class="my-2 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="#ForgotPassword" target="_blank">Forgot password?</a>
                                            <p style="font-size: 11px">Cookies must be enabled in your browser</p>
                                        </div>
                                    </div>  
                                </div>

                                {{-- <div class="px-4 input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

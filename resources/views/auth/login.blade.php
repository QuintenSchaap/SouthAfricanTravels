<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c51e4834fc.js" crossorigin="anonymous"></script>
<header style="margin-bottom: 25px;">
    @livewireStyles
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="" style="padding-left: 10px">South African Travels</a>
        <div class="navbar-nav">
            <a style="color: white; padding-left: 20px" class="nav-item lead nav-link" href="/">Home</a>
            <a style="color: white; padding-left: 10px" class="nav-item lead nav-link" href="/bestemming">Bestemming</a>
            <a style="color: white; padding-left: 10px" class="nav-item lead nav-link" href="/reis">Reis</a>
            @guest
            <li class="{{ 'login' == request()->path() ? 'font-italic text-white' : ''}}">
            <a style="color: white;" class="nav-item lead nav-link" href="/login">Inloggen</a>
            </li>
            @endguest
            @auth
            <a style="color: white;" class="nav-item lead nav-link" href="/signout">Uitloggen</a>
            @endauth
        </div>
    </nav>
</header>
<div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <h3 class="card-header text-center">South African Travels</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <label>Email:</label>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Vul hier je email in!" id="email" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <label>Wachtwoord:</label>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Vul hier je wachtwoord in!" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Onthoud gegevens
                                </label>
                            </div>
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Inloggen</button>
                        </div>
                    </form>
                </div>
                <a class="btn btn-secondary" style="color: white;" href="/"><i class="fa-solid fa-arrow-left"></i> Terug</a>
            </div>
        </div>
    </div>
</div>
<footer style="margin-top: 25px" class="text-center text-lg-start bg-light text-muted">
    <section class="p-1 border-top">
        <div class="container text-center text-md-start mt-2">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto">
                    <h6 class="text-uppercase fw-bold mb-2">South African Travels</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-2">
                    <h6 class="text-uppercase fw-bold mb-2">Snelle links</h6>
                    <p>
                        <a style="color: #6c757d" href="/" class="text-reset">Home</a><br>
                        <a style="color: #6c757d" href="/bestemming" class="text-reset">Bestemming</a><br>
                        <a style="color: #6c757d" href="/reis" class="text-reset">Reizen</a><br>
                        <a style="color: #6c757d" href="/inlog" class="text-reset">Inloggen</a><br>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                    <h6 class="text-uppercase fw-bold mb-2">Contact</h6>
                    <p>
                        <i class="fa-solid fa-house-chimney" style="margin-right: 5px"></i> Almere, Globeplein 75, 1334 BT<br>
                        <i class="fa-solid fa-envelope" style="margin-right: 10px"></i>southafricantravels@gmail.com<br>
                        <i class="fa-solid fa-phone" style="margin-right: 5px"></i>+06 17281730<br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyrighted by: <a class="text-reset fw-bold">South African Travels</a>
    </div>
</footer>


<!doctype html>
<html lang="fr">
<header>
    <link rel="stylesheet" href="{{asset('css/style-login.css')}}">
    <style>
        body {
            background-image: url(" {{asset('/img/Background_login.png')}}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</header>

<title>Inscription</title>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><img  style="width: 100%;margin-bottom: 10px" src="{{asset('/img/logo.png')}}"></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="nom" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                     @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Adresse Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="password-confirm" placeholder="Confirmer le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary">
                                        Inscription
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary">
                                        <a href="{{ route('login')}}">Connexion</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ url("login") }}">
        
        @csrf
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('login')}}">
            <img src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="150px"><br><br>
        </a>
        <h5>{{ isset($url) ? ucwords($url) : ""}} {{ __('Entrar') }}</h5>
        <div class="form-group">
            <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> {{ __('Remember Me') }} </label>
            </div>            
            <button class="btn btn-lg btn-block" style="background:#D3165B; color:#FFF" type="submit">{{ __('ACESSAR') }}</button>
            @if (Route::has('password.request'))
                <div class="col-md-12 col-12 float-sm-left text-center text-sm-right"><br>
                    <a href="{{ route('password.request') }}" class="card-link" style="color:gray">{{ __('Esqueceu sua senha?') }}</a>
                </div>
            @endif
            <br><p class="mt-5 mb-3 text-muted">© {{ date('Y') }} {{ config('app.name') }}. {{ __('Todos os direitos reservados.') }}</p>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="{{asset('assets-admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/popper.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/moment.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets-admin/js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets-admin/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('assets-admin/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('assets-admin/js/config.js')}}"></script>
    <script src="{{asset('assets-admin/js/apps.js')}}"></script>
@endsection
@extends('layouts.auth')

@section('title', 'Alterar Senha')

@section('content')
    
    <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('login')}}">
                <img src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" width="150px"><br>
            </a>
            <h2 class="my-3">{{ __('Reset Password') }}</h2>
        </div>
        <p class="text-muted">Digite seu endereço de e-mail e enviaremos um e-mail com instruções para redefinir sua senha</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group">
            <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
            <input type="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email address" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button class="btn btn-lg btn-block" style="background:#D3165B; color:#FFF" type="submit">{{ __('Send Password Reset Link') }}</button>
        <p class="mt-5 mb-3 text-muted">© {{ date('Y') }} {{ config('app.name') }}. {{ __('Todos os direitos reservados.') }}</p>
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

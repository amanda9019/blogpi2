@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:15%;">
                <div class="card-header">{{ __('Verificar Seu Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, por favor cheque seu link de verificação em seu e-mail.') }}
                    {{ __('Se você não recebeu o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para mandar outro.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

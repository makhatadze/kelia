@extends('layout.main')
@section('title', 'Chiffrage immédiat')
@section('scripts')
    <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
@section('additional-head')
    @include('panels/styles')
    <link rel="stylesheet" href="{{ asset(mix('fonts/font-awesome/css/font-awesome.min.css'))}}">
    <link rel='stylesheet' id='elementor-post-778-css'
          href='{{asset('css/defaults/custom_page/arrangement_attic.css')}}' type='text/css' media='all'/>
    <style>
        :root {
            --root-green: #25737D;
            --root-yellow: #ffcd00;
            --root-red: #ff1212
        }

        .encr-button {
            width: initial;
            height: initial;
            background: var(--root-yellow) !important;
            border-radius: 0.4rem !important;
            color: #1a1a1a !important;
            padding: 0.2rem 2rem !important;

            border: none !important;
            outline: none !important;
            box-shadow: none !important;
        }

        .encr-button:hover {
            background: #BFA12B !important;
            color: white !important;
        }

        .encr-button:active {
            background: #796000 !important;
        }

        .red-text {
            color: var(--root-red);
        }

        .red-border {
            border: 1px solid var(--root-red) !important;
        }

        .auth-text {
            text-decoration: underline;
            color: var(--root-green) !important;
        }
    </style>
@endsection

@section('content')
    {{-- Content --}}
    <div class="d-flex justify-content-center my-5" style="min-height: 60%">
        <div style="width: 1200px" class="mt-5" id="app">
            <h1>Veuillez remplir un formulaire</h1>

            <form action="{{route('login_auth')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mt-1">
                        <label class="@error('email') red-text @enderror" for="form-email">Email<span class="red-text">*</span></label>
                        <input type="text" id="form-email" placeholder="enter email" name="email" value="{{old('email')}}" class="@error('email') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('password') red-text @enderror" for="form-password">Password<span class="red-text">*</span></label>
                        <input type="password" id="form-password" placeholder="enter password" name="password" value="{{old('password')}}" class="@error('password') red-border @enderror">
                    </div>

                    <div class="col-12 mt-2">
                        <button class="encr-button" type="submit">
                            Login
                        </button>
                    </div>

                    <p class="mt-1">
                        not signed yet, go to
                        <a href="{{route('register_client_page')}}" class="auth-text">register</a>
                    </p>

                    @include('components.error_success_messages')
                </div>
            </form>
        </div>
    </div>
@endsection

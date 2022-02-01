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

            <form action="{{route('register_auth')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mt-1">
                        <label class="@error('name') red-text @enderror" for="form-name">Name<span class="red-text">*</span></label>
                        <input type="text" id="form-name" placeholder="enter name" name="name" value="{{old('name')}}" class="@error('name') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('mail') red-text @enderror" for="form-mail">Email<span class="red-text">*</span></label>
                        <input type="text" id="form-mail" placeholder="enter mail" name="mail" value="{{old('mail')}}" class="@error('mail') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('password') red-text @enderror" for="form-password">Password<span class="red-text">*</span></label>
                        <input type="password" id="form-password" placeholder="enter password" name="password" value="{{old('password')}}" class="@error('password') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('city') red-text @enderror" for="form-city">City<span class="red-text">*</span></label>
                        <input type="text" id="form-city" placeholder="enter city" name="city" value="{{old('city')}}" class="@error('city') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('address') red-text @enderror" for="form-address">Address<span class="red-text">*</span></label>
                        <input type="text" id="form-address" placeholder="enter address" name="address" value="{{old('address')}}" class="@error('address') red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('postalCode') red-text @enderror" for="form-postalCode">Postal code<span class="red-text">*</span></label>
                        <input type="text" id="form-postalCode" placeholder="enter postal-code" name="postalCode" value="{{old('postalCode')}}" class="@error('postalCode')  red-border @enderror">
                    </div>

                    <div class="col-12 mt-1">
                        <label class="@error('phone') red-text @enderror" for="form-phone">Phone number</label>
                        <input type="tel" id="form-phone" placeholder="enter phone" name="phone" value="{{old('phone')}}" class="@error('phone') red-border @enderror">
                    </div>

                    @include('components.error_success_messages')

                    <div class="col-12 mt-2">
                        <button class="encr-button" type="submit">
                            Register
                        </button>
                    </div>

                    <p class="mt-1">
                        already have an account, go to
                        <a href="{{route('login_client_page')}}" class="auth-text">login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection

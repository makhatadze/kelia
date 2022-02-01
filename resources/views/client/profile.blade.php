@extends('layout.main')
@section('title', 'Chiffrage immédiat')
@section('scripts')
    <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
@section('additional-head')
    @include('panels/styles')
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

        .encr-button-danger {
            background-color: var(--root-red) !important;
            color: white !important;
        }

        .encr-button-danger:hover {
            background-color: #9d0000 !important;
        }

        .red-text {
            color: var(--root-red);
        }

        .red-border {
            border: 1px solid var(--root-red) !important;
        }
    </style>
@endsection

@section('content')
    <div class="d-flex justify-content-center my-5" style="min-height: 60%">
        <div style="width: 1200px" class="mt-5" id="app">
            <h1 style="text-align: right">Profile</h1>

            <div class="mt-4">
                <h3 style="font-weight: 300">Chiffrage immédiat</h3>
                @if($chiffrages && $chiffrages->isNotEmpty())
                    <table class="mt-3 datatables-basic table table-sm dataTable no-footer dtr-column table-bordered"
                           id="DataTables_Table_0"
                           role="grid"
                           aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr>
                            <th>pdf</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chiffrages as $chiffrage)
                            <tr>
                                <td>
                                    <form action="">
                                        <a href="{{url($chiffrage['pdf'])}}" class="d-flex align-items-center">
                                            <img src="{{asset('images/icons/file-icons/pdf.png')}}"
                                                 class="pointer mx-2"
                                                 alt=""
                                                 width="30"
                                                 height="30">

                                            <span>view</span>
                                        </a>
                                    </form>
                                </td>
                                <td>
                                    @if($chiffrage['created_at'])
                                        {{\Carbon\Carbon::make($chiffrage['created_at'])->toDateString()}}
                                    @endif
                                </td>
                                <td>
                                    <form
                                        action="{{route('chiffrage_delete', ['id' => $chiffrage['id']])}}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="encr-button encr-button-danger" type="submit">delete</button>
                                    </form>
                                </td>
                        @endforeach
                        </tbody>
                    </table>
                    @if($chiffrages->hasPages())
                        <div class="d-flex justify-content-end mt-2 me-2">
                            {{$chiffrages->render()}}
                        </div>
                    @endif
                @else
                    No Chiffrage detected
                @endif
            </div>

            <div class="mt-5">
                <h3 style="font-weight: 300">Credentials</h3>
                <form action="{{route('client_profile_update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mt-1">
                            <label class="@error('name') red-text @enderror" for="form-name">Name</label>
                            <input type="text" id="form-name" placeholder="enter name" name="name"
                                   value="{{$user['name']}}"
                                   class="@error('name') red-border @enderror">
                        </div>

                        <div class="col-12 mt-1">
                            <label class="@error('city') red-text @enderror" for="form-city">City</label>
                            <input type="text" id="form-city" placeholder="enter city" name="city"
                                   value="{{$user['city']}}"
                                   class="@error('city') red-border @enderror">
                        </div>

                        <div class="col-12 mt-1">
                            <label class="@error('address') red-text @enderror" for="form-address">Address</label>
                            <input type="text" id="form-address" placeholder="enter address" name="address"
                                   value="{{$user['address']}}" class="@error('address') red-border @enderror">
                        </div>

                        <div class="col-12 mt-1">
                            <label class="@error('postalCode') red-text @enderror" for="form-postalCode">Postal
                                code</label>
                            <input type="text" id="form-postalCode" placeholder="enter postal-code" name="postalCode"
                                   value="{{$user['postalCode']}}" class="@error('postalCode')  red-border @enderror">
                        </div>

                        <div class="col-12 mt-1">
                            <label class="@error('phone') red-text @enderror" for="form-phone">Phone number</label>
                            <input type="tel" id="form-phone" placeholder="enter phone" name="phone"
                                   value="{{$user['phone']}}" class="@error('phone') red-border @enderror">
                        </div>

                        @include('components.error_success_messages')

                        <div class="col-12 mt-2">
                            <button class="encr-button" type="submit">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

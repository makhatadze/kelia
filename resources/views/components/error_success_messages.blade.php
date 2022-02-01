@if ($errors->any())
    <div class="col-12">
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            @foreach ($errors->all() as $error)
                <div class="alert-body d-flex align-items-center">
                    {{$error}}
                </div>
            @endforeach
        </div>
    </div>
@endif

@if(session()->has('message'))
    <div class="col-12">
        <div class="alert alert-success mt-1" role="alert">
            <div class="alert-body d-flex align-items-center">
                {{ session()->get('message') }}
            </div>
        </div>
    </div>
@endif

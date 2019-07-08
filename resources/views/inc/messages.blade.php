@if(count($errors) > 0)
    <br><br>
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <br><br>
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <br><br>
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
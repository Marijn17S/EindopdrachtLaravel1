<form action="/cars/{{$car->id}}" method="POST">
    @csrf
    @method('PUT')
    <h3>Name</h3>
    <input name="Name" type="text" value="{{$car->Name}}">
    <br><br>
    <h3>Brand</h3>
    <input name="Brand" type="text" value="{{$car->Brand}}">
    <br><br>
    <h3>Class</h3>
    <input name="Class" type="text" value="{{$car->Class}}">
    <br><br>
    <h3>Horsepower</h3>
    <input name="Horsepower" type="text" value="{{$car->Horsepower}}">
    <br><br>
    <h3>Weight</h3>
    <input name="Weight" type="text" value="{{$car->Weight}}">
    <br><br>
    <h3>Driver</h3>
    <input name="Driver" type="text" value="{{$car->Driver}}">
    <br><br>
    <h3>Last Maintenance</h3>
    <input name="LastMaintenance" type="text" value="{{$car->LastMaintenance}}">
    <br><br>
    <input type="submit">
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert"><br>
                    {{$error}}
                </div>
    @endforeach
    @endif
</form>

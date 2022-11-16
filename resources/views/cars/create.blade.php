<form action="/cars" method="POST">
    @csrf
    <h3>Name</h3>
    <input name="Name" type="text">
    <br><br>
    <h3>Brand</h3>
    <input name="Brand" type="text">
    <br><br>
    <h3>Class</h3>
    <input name="Class" type="text">
    <br><br>
    <h3>Horsepower</h3>
    <input name="Horsepower" type="text">
    <br><br>
    <h3>Weight</h3>
    <input name="Weight" type="text">
    <br><br>
    <h3>Driver</h3>
    <input name="Driver" type="text">
    <br><br>
    <h3>Last Maintenance</h3>
    <input name="LastMaintenance" type="text">
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

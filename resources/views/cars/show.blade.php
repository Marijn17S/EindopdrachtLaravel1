@isset($car)
    <p><strong>Name</strong>: {{$car->Name}}</p>
    <p><strong>Brand</strong>: {{$car->Brand}}</p>
    <p><strong>Class</strong>: {{$car->Class}}</p>
    <p><strong>Horsepower</strong>: {{$car->Horsepower}}</p>
    <p><strong>Weight</strong>: {{$car->Weight}}</p>
    <p><strong>Driver</strong>: {{$car->Driver}}</p>
    <p><strong>Last Maintenance</strong>: {{$car->LastMaintenance}}</p>

    {{--@isset($car->singer)
        {{$car->singer}}
    @endisset
    @empty($car->singer)
        Onbekend
    @endempty--}}
@endisset
{{--@empty($song)--}}
{{--    Onbekend nummer.--}}
{{--@endempty--}}

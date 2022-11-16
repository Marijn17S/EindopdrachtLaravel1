<table>
    @foreach($cars as $car)
        <br>
        <tr>
            <form action="/cars/{{$car->id}}" method="POST">
                @csrf
                @method('DELETE')
                <li><a href="/cars/{{$car->id}}">{{$car->Brand . " " . $car->Name}}</a><a href="/cars/{{$car->id}}/edit" style="margin-left:50px;">Bewerken</a>
                    <button style="margin-left: 50px" type="submit">Delete</button></li>
            </form>
        </tr>
        </ul>
    @endforeach
    <br>
    <a href="/cars/create"><button>Create new</button></a>
</table>

<ul>
    @foreach($boxes as $box)
    <li>
        ID: {{$box->id}} Bananas in box: {{$box->bananas}}
    <a href="{{route('box.edit', $box)}}">EDIT</a>
    <a href="{{route('box.add', $box)}}">ADD</a>
    <form action="{{route('box.destroy', $box)}}" method ="post">
<button type="submit">DELETE</button>
@csrf
    </form>

    </li>

    @endforeach
</ul>

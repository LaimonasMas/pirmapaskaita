<ul>
@foreach($boxes as $box)
    <li>ID: {{$box->id}} Bananas in box: {{$box->bananas}}</li>
@endforeach
</ul>
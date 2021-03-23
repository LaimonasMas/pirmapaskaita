<form action="{{route('box.add_to_box', $box)}}" method="post">
<input type="text" name="add" value="0">

<button type="submit">ADD</button>

@csrf
</form>
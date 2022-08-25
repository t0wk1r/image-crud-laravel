<h1>welcome</h1>
<form action="{{route('imagets.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo"><br>
    <input type="submit">
</form>

<a href="{{url('/imagets')}}">ALL DATA</a>
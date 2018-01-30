@foreach ($inputs as $i)
    <p>{{$i->id}}.{{$i->input}}</p>
@endforeach


<form action="/input" method="POST">
{{csrf_field()}}
<input type="text" name="input">
<input type="submit" value="送出">


</form>

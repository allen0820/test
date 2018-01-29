@foreach ($inputs as $i)
    <p>{{$i->id}}.{{$i->input}}</p>
@endforeach

time 1114
<form action="/input" method="POST">
{{csrf_field()}}
<input type="text" name="in">
<input type="submit" value="送出">
<input type="hidden">
</form>

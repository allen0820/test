<!-- 用foreach顯示出資料庫的資料 -->
@foreach ($inputs as $i)
    <p>{{$i->id}}.{{$i->input}}
    <a href="/input">刪除</a>
    </p>
@endforeach


<form action="/input" method="POST">
{{csrf_field()}}
<input type="text" name="input">
<input type="submit" value="送出">


</form>
{!! Form::open(array('url' => 'foo/bar')) !!}
    //
{!! Form::close() !!}
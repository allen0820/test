<!-- 用foreach顯示出資料庫的資料 -->
@foreach ($inputs as $i)
    <p>{{$i->id}}.{{$i->input}}
    <a href="/input">刪除</a>
    </p>
@endforeach

{{Form::open(array('url' => '/input'))}}<!-- 預設方法為post -->
{{Form::token()}} <!-- CSRF防禦 -->
{{Form::label('input_label','Plase enter the text:')}}
{{Form::text('input')}}
{{Form::submit('sent')}}
{{Form::close()}}
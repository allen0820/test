 <!-- 宣告變數num=1 -->
 @php
$num=1
 @endphp
<!-- 用foreach顯示出資料庫的資料 -->
@foreach ($inputs as $i)
    <!--用delete方法 url後方傳遞id查詢參數 -->
    {{Form::open(array('url'=>"/input/$i->id",'method' => 'delete'))}}
    {{Form::token()}} <!-- CSRF防禦 -->
    {{$num++}}.{{$i->input}}
    {{Form::submit('delete')}}
    <button href="/input" type=button>update</button>
    {{Form::close()}}
    
@endforeach

{{Form::open(array('url' => '/input'))}}<!-- 預設方法為post -->
{{Form::token()}} <!-- CSRF防禦 -->
{{Form::label('input_label','Plase enter the text:')}}
{{Form::text('input')}}
{{Form::submit('sent')}}
{{Form::close()}}
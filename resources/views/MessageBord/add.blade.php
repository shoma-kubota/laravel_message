<h1>入力画面</h1>
<p>伝言を書いてね</p>

@foreach ($errors->all() as $error)
<li><span class="error">{{$error}}</span></li>
@endforeach

<form action="/MessageBord/confirm" method="post">
 <div>
        <label for="name">投稿者</label><br>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        @if($errors->has('name'))
        <span class="error">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div>
        <label for="con_add">投稿者の連絡先</label><br>
        <input type="text" name="con_add" id="con_add" value="{{old('con_add')}}">
        @if($errors->has('con_add'))
        <span class="error">{{$errors->first('con_add')}}</span>
        @endif
    </div>
     <div>
        <label for="add">伝言の宛先</label><br>
        <input type="text" name="add" id="add" value="{{old('add')}}">
        @if($errors->has('add'))
        <span class="error">{{$errors->first('add')}}</span>
        @endif
    </div>
    <div>
        <label for="details">要件・詳細</label><br>
        <input type="text" name="details" id="details" value="{{old('details')}}">
        @if($errors->has('details'))
        <span class="error">{{$errors->first('details')}}</span>
        @endif

        <input type="submit" value="送信">

    </div>
    {{-- <input type="submit" value="送信"> --}}
    @csrf
</form>

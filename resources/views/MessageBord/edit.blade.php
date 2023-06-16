<form action="/MessageBord/edit/{{$kubota->id}}" method="post">
 <div>
        <label for="name">投稿者</label><br>
        <input type="text" name="name" id="name" value="{{old('name',$kubota->name)}}">
        @if($errors->has('name'))
        <p class="error">*{{$errors->first('name')}}</p>
        @endif
    </div>
    <div>
        <label for="con_add">投稿者の連絡先</label><br>
        <input type="text" name="con_add" id="con_add" value="{{old('con_add',$kubota->con_add)}}">
        @if($errors->has('con_add'))
        <p class="error">*{{$errors->first('con_add')}}</p>
        @endif
    </div>
     <div>
        <label for="add">伝言の宛先</label><br>
        <input type="text" name="add" id="add" value="{{old('add',$kubota->add)}}">
        @if($errors->has('add'))
        <p class="error">*{{$errors->first('add')}}</p>
        @endif
    </div>
    <div>
        <label for="details">要件・詳細</label><br>
        <input type="text" name="details" id="details" value="{{old('details',$kubota->details)}}">
        @if($errors->has('details'))
        <p class="error">*{{$errors->first('details')}}</p>
        @endif
    </div>
    <div><input type="submit" value="送信"></div>
    @csrf
</form>

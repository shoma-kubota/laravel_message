<h1>resources/views/MessageForm/confirm.badede.php</h1>
<p>伝言内容確認</p>
<ul>
    <li>
        お名前
        <p>{{$request->name}}</p>
    </li>
    <li>
        連絡先
        <p>{{$request->con_add}}</p>
    </li>
    <li>
        伝言の宛先
        <p>{{$request->add}}</p>
    </li>
    <li>
        要件・詳細
        <p>{{$request->details}}</p>
    </li>
</ul>

<form action="" method="post">
    <input type="hidden" name="name" value="{{$request->name}}">
    <input type="hidden" name="con_add" value="{{$request->con_add}}">
    <input type="hidden" name="add" value="{{$request->add}}">
    <input type="hidden" name="details" value="{{$request->details}}">

    <div>
        <button class="btn btn-primary" type="submit" name="back" value="戻る">
        {{-- <i class="fa-solid fa-caret-left"></i>戻る</button> --}}
        <i class="fa-solid fa-person-praying"></i>戻る
        </button>
        <button class="btn btn-primary" type="submit" name="send" value="送信">
        <i class="fa-solid fa-caret-right"></i>送信
        </button>
    </div>
    @csrf
</form>


<h1>resources/views/MessageBord/list.blade.php</h1>
<h2>伝言板の一覧</h2>
名前検索ができるよ
<form action="/MessageBord/index" method="post">
    <input type="text" name="kensaku" value="">
    <input type="submit" name="send" value="検索">
    @csrf
</form>
@if ($messages->count() > 0)
    <table border="1">
        <tr>
            <th>お名前</th>
            <th>連絡先</th>
            <th>宛先</th>
            <th>要件・詳細</th>
            <th>削除</th>
            <th>編集</th>
        </tr>
        {{-- @foreach ディレクティブで、1件ずつ処理 --}}
        @foreach ($messages as $kubota)
            <tr>
                <td>{{ $kubota->name }}</td>
                <td>{{ $kubota->con_add }}</td>
                <td>{{ $kubota->add }}</td>
                <td>{{ $kubota->details }}</td>
                <td>
                    <form action="/MessageBord/delete/{{$kubota->id}}" method="post">
                        <input type="submit" name="delete" value="削除">
                        @csrf
                    </form>
                </td>
                <td><a href="/MessageBord/edit/{{$kubota->id}}">編集</a></td>
            </tr>
        @endforeach
    </table>
@else
    <p>伝言がありません</p>
@endif
<a href="/MessageBord/add">入力画面に戻る</a>

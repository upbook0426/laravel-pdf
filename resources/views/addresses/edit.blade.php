<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addresses</title>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   
</head>
        <body id="index">
            <h1 class="tile">編集ページ</h1>
            <a class="edit_button" href="{{ route('edit_list')}}" >戻る</a>
            <form>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $address->id }}">
                <label>会社名:<input type="type" name="delivery_companyname" placeholder="会社名"  
                    value={{ $address->companyname ?? ''}}></label><br>
                <label>住所：<input type="text" name="delivery_address" style="width:300px" placeholder="住所"
                    value={{ $address->address ?? '' }} ></label><br>
                <label>電話番号:<input type="text" name="delivery_tel" placeholder="電話番号"
                    value={{ $address->tel ?? '' }}></label><br>
                    <button type="submit" formaction="{{ route('edit_update',['id' => $address->id])}}" formmethod="post">更新</button>
                    <button type="submit" formaction="{{ route('edit_delete',['id' => $address->id])}}" formmethod="post">削除</button>
    
            </form>
        </body>
</html>
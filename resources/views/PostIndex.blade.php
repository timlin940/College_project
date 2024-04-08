<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輸入區</title>
</head>
<body>
    <div class="import_name_comment">
    <i class="bi bi-cart-dash-fill" style='font-size: 100px'></i>
        <form action="{{route('create')}}" method='POST'><!--上傳資料 其他有 Delete update-->
            @csrf
        <div class="name">
            <p>留言人</p>
                <input type="text" name="inputer" >
        </div>
        <div class="comment">
            <p>留言區</p>
            <textarea   name='content'
                        row='6'
                        cols='40'
                        placeholder="想說啥"></textarea>
        </div>
        <div class="sumit_comment">
            <input type="submit" value="送出留言" name="submit">
            </br>
        </div>
    </div>
        </form>
            <!--{$post}會直接輸出物件-->
</body>
</html>
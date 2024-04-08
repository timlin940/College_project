<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言版</title>
</head>
<body>
    <p style="align-center">o0留言紀錄0o</p>
            <table border="1">
                <thread>
                <tr>
                    <th>留言人</th>
                    <th>留言</th>
                    <th>修改</th>
                    <th>刪除</th>
                </tr>
                </thread>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><p>{{$post->inputer}}</p></td>
                    <td>
                        <form action="{{route('change',$post->id)}}" method="POST">
                            @csrf
                        <textarea name='content'> {{$post->content}}</textarea>
                    </td>
                    <td>
                        <input type="submit" name='change' value="修改">
                    </td>
                </form>
                    <td>
                        <form action="{{route('delete',$post->id)}}" method="POST">
                            @csrf
                            <input type="submit" name="刪除" value="刪除">
                        </form>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <form action="{{route('lastpage')}}" method="POST">
            @csrf
            <button name="lastpage">回留言區</button>
        </form>
</body>
</html>
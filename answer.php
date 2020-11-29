<?php

$userId = 0;
$comment = $_POST['comment'];
$message = "";

//初期メッセージ
if($comment == "ルームを作成しました。" || $comment == "You invited the room.") {
    $message = "ルームを作成していただきありがとうございます。本botはAP大生が毎日ランダムに他己紹介をし合うためのbotです。¥n¥n";
    $message = $message."?roomid=(あなたのRoomId) と入力することであなたも参加することができます。このRoomIdはdMessage Webの右上のRoom Infoから確認できます。（入力例）?roomid=12345¥n¥n";
    $message = $message."";
}

//roomidの追加かどうか判定
if(strtolower(mb_substr($comment,0,8)) == "?roomid=") {
    if(is_numeric(mb_substr($comment,8))){
        $message = mb_substr($comment,8)."は数値です";
        AddMember($userId, mb_substr($comment,8));
        $message = "RoomIdの登録が完了しました！以後アナウンスはこのルームにて行いますので、誤って消してしまった場合はお手数ですが管理人の12420 中村までお願い致します。";
    } else {
        $message = mb_substr($comment,8)."は数値ではありません。正しいRoomIdを入力してください。";
    }
}

//それ以外はまず回答対象者か判定します。
if(false == CheckUserId($userId)) {$message = "ぴえん";}

//質問の回答かどうか判定してアップデートしていきます。
switch(mb_substr($comment,0,4)) {
    case "?q1?":
        if(UpdateAnswer($userId, "a1", mb_substr($comment,4))) {
            $message = "Q1の回答を"."¥n¥n".$message."¥n¥n"."に設定しました。";
        } else {
            $message = "Q1の回答の設定に失敗しました。";
        }
    case "?q2?":
        if(UpdateAnswer($userId, "a2", mb_substr($comment,4))) {
            $message = "Q2の回答を"."¥n¥n".$message."¥n¥n"."に設定しました。";
        } else {
            $message = "Q2の回答の設定に失敗しました。";
        }
    case "?q3?":
        if(UpdateAnswer($userId, "a3", mb_substr($comment,4))) {
            $message = "Q3の回答を"."¥n¥n".$message."¥n¥n"."に設定しました。";
        } else {
            $message = "Q3の回答の設定に失敗しました。";
        }
    case "?q4?":
        if(UpdateAnswer($userId, "a4", mb_substr($comment,4))) {
            $message = "Q4の回答を"."¥n¥n".$message."¥n¥n"."に設定しました。";
        } else {
            $message = "Q4の回答の設定に失敗しました。";
        }
}

//確認用機能
if($comment == "?c") {

}

$message = "ぴえん";

//roomIdを格納したcsvファイルに新たなメンバーを追加する関数です。
function AddMember($userId, $roomId) {

}

//紹介用テーブルをアップデートする関数です。
function UpdateAnswer($userId, $columnTitle, $text) {

    return true;
}

function CheckUserId($userId) {

    return true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
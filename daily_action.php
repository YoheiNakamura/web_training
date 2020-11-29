<?php

$introducingId = RandomSelectId();

//紹介する人以外の中から紹介される人を選びます。
do {
    $introducedId = RandomSelectId();
} while ($introducingId != $introducedId);

$q1 = CreateQ1();
$q2 = CreateQ2();
$q3 = CreateQ3();
$q4 = CreateQ4();

$message = CreateMessage($introducedId, $q1, $q2, $q3, $q4);

InsertIntroduction($introducingId, $introducedId, $q1, $q2, $q3, $q4);





DeleteOld();

//メンバーリストからランダムに一人選び出します。
function RandomSelectId() {

}

//選ばれた人と質問を追加します。
function InsertIntroduction($introducingId, $introducedId, $q1, $q2, $q3, $q4) {

}

//一番古いデータを削除します。4日分しか持たない。
function DeleteOld() {

}

//指名した人に送るメッセージを作成します。
function CreateMessage($introducedId, $q1, $q2, $q3, $q4) {

    $message = "おめでとうございます！他己紹介のインタビュアに選ばれました！インタビューする人は".$introducedId."さんです。３営業日後の12時までにインタビューをした上で以下の質問に対する回答を入力してくだい。¥n¥n";
    $message = $message."Q1：".$q1."¥n";
    $message = $message."Q2：".$q2."¥n";
    $message = $message."Q3：".$q3."¥n";
    $message = $message."Q4：".$q4."¥n¥n";
    $message = $message."回答の入力は例えば質問1だと?q1?(相手の回答)というように入力してくだい。また、一度に一つの回答しか受付られませんので注意してください！（質問２の入力例）?q2?家で映画を見ることです！¥n¥n";
    $message = $message."現在の回答状況は?cと話しかけると確認することができます。すべて回答した後に確認していただければと思います。";
    
    return $message;
}

//Q1の質問を返します。
function CreateQ1() {
    return "出身は？";
}

//Q1の質問を返します。
function CreateQ2() {
    return "趣味は？";
}

//Q1の質問を返します。
function CreateQ3() {
    return "最近は何の仕事してる？";
}

//Q1の質問を返します。
function CreateQ4() {
    return "得意技は？";
}

?>
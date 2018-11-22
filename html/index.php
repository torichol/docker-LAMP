<?php
echo("docker-compose による LAMP 環境作成<br />\n");

$dbHOST="mysql";
$dbUSER="root";
$dbPWD="password";
//$dbNAME="zip7";//テスト用の郵便番号DBを使用する場合はこちら
$dbNAME="mysql";

//◆mysqli クラスをオブジェクト化する
$mysqli=new mysqli($dbHOST,$dbUSER,$dbPWD,$dbNAME);

//▼ＤＢ接続チェック
if($mysqli->connect_error){
	echo("MySQLデータベース接続に失敗しました...(-_-)<br />\n");
}else{
	echo("MySQLデータベース接続成功＼(^o^)／<br />\n");
}

phpinfo();

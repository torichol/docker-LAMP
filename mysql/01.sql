-- docker-compose による LAMP 環境の MySQL8.x 用設定 ＠2018/11/21

-- MySQL の root ユーザ用パスワードを従来方式で設定（MySQL8.x用）
ALTER USER 'root'@'%' identified WITH mysql_native_password BY 'password';

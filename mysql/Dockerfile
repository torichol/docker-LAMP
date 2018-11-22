# MySQL コンテナ生成 ＠2018/11/21

# Docker 公式イメージの MySQL8.0.13 を用いる
FROM mysql:8.0.13
#FROM mysql:5.7

# 手元の my.cnf をコンテナ内にコピー
COPY ./my.cnf /etc/mysql/conf.d/

# MySQL の root ユーザ用パスワード設定 SQL をコンテナ内にコピー
COPY ./01.sql /docker-entrypoint-initdb.d/

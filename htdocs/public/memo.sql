# (A1)mydbというデータベースが既にあるなら削除する（危険なSQL）．
drop database if exists user;

# (A2)mydbというデータベースを作る．
create database user charset=utf8mb4;

# (A3)ユーザ名testuser，パスワードpassでmydbにアクセスできるようにする．
grant all on user.* to kou@localhost identified by 'fr1map@ss';

# (A4)mydbを使うことを宣言する．
use user;

# (A5)table1というテーブルが既にあるなら削除する（危険なSQL）．
drop table if exists users;



create table users (
  id int primary key auto_increment, # ここはいつも同じ
  name varchar(64) not null,
  email varchar(191) not null,
  password varchar(191) not null # 最後にはカンマがないことに注意．

);
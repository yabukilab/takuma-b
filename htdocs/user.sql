# (A1)mydbというデータベースが既にあるなら削除する（危険）．
drop database if exists user;

# (A2)mydbというデータベースを作る．
create database user charset=utf8mb4;

# (A3)ユーザ名testuser，パスワードpassでmydbにアクセスできるようにする．
grant all on user.* to kou@localhost identified by 'fur1map@ss';

# (A4)mydbを使う．
use user;

# (A5)table1というテーブルが既にあるなら削除する（危険）．
drop table if exists users;

create table users (
  id int primary key auto_increment, # ここはいつも同じ
  name varchar(64) not null,
  email varchar(191) not null,
  password varchar(191) not null# 最後にはカンマがないことに注意．
);

# (C1)データを作成する．
insert into users (id, name, email, password) values
(9, '田隈', takuma.hironori@it-chiba.ac.jp, $2y$10$XUd4erF.JuzPmOYwEuEhP.lOIXOqTqwiXm45mcr2EXn0XcNuYLThu),
(11, 'kou', s1942121nn@s.chibakoudai.jp, $2y$10$ioiFSrDAgmS5CrRqoGh0i.dV/hg5ucHAUCLkvpbtnt6D8JgkrZQvG);


# (A5)table1というテーブルが既にあるなら削除する（危険）．
drop table if exists product;

create table product (
  id int primary key auto_increment, # ここはいつも同じ
  name varchar(64) not null,
  email varchar(191) not null# 最後にはカンマがないことに注意．
);

# (C1)データを作成する．
insert into users (id, name, email, ) values
(17, 'textbook', s1942121nn@s.chibakoudai.jp),
(18, '教科書', takuma.hironori@it-chiba.ac.jp),
(23, 'textbook', s1942121nn@s.chibakoudai.jp),
(30, '情報処理の教科書', s1942121nn@s.chibakoudai.jp);
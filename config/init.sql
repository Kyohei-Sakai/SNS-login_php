-- データベースの設定

create database dotinstall_sns_php;

grant all on dotinstall_sns_php.* to dbuser@localhost identified by 'htmr821';

use dotinstall_sns_php

drop table if exists users;
create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);


-- select
select * from users;

-- delete
delete from users;

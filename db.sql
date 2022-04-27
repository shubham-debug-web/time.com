create database time;
use time;
create table users(
    email varchar(100) primary key,
    pass varchar(1000)
);

create table article(
    sno int primary key auto_increment,
    category varchar(100),
    subcategory varchar(100),
    heading varchar(1000),
    subheading varchar(1000),
    providedby varchar(1000),
    content varchar(10000),
    uploaddate date,
    img varchar(100)
);
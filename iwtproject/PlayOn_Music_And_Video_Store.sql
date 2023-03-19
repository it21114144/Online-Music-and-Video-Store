create database PlayOn_Music_and_Video_Store;

create table userdetails
(
	UserID int(6) AUTO_INCREMENT PRIMARY KEY,
	UserName varchar (10) not null,
	first_Name varchar (20) not null,
	last_name varchar (20) not null,
	Address varchar(100),
	Date_Of_Birth date,
	UType varchar(10),
	password varchar(20) not null,
	Email varchar(30),
	Phone_Number varchar(10)
)


create table Album
(
	albumID int(6) AUTO_INCREMENT PRIMARY KEY,
	albumName varchar(20) not null,
	album_releaseDate date,
	UserID int(6),
	price varchar(10)
)

create table Files
(
	fileID int(11) AUTO_INCREMENT PRIMARY KEY,
	fileName varchar(20) not null,
	fileType varchar(10),
	releaseDate date,
	UserID char(6),
	albumID char(6),
	price int(10),
	songfile varchar(50)
)


create table advertisment(
	adID int(11) auto increment primary key,
	adTitle varchar(30),
	adDesc varchar(100),
	UserID char(6),
	status char(10),
	ad_Manager char(6)
)


create table feedback(

	fbDesc char(200),
	rating int(11),
	Email varchar(30),
	Name varchar(200),
	feedbackID int(11) AUTO_INCREMENT PRIMARY KEY
)

create table purchase_album(

	UserID char(6),
	albumID char(6),
)

create table images(
	id int(11) auto increment primary key,
	image longblob,
	uploaded datetime
)


insert into files 
values
('','your name','mp3','2021-09-24','1','1','10',''),
('','rose','mp4','2020-03-24','2','2','2',''),
('','scenario','mp4','2021-09-25','1',null,'3',''),
('','heaven','mp3','2016-11-24','2','4','5',''),
('','at my worst','mp3','2020-07-24','2','5','4',''),
('' , 'dark Time' , 'mp3' , '2021-04-30' , '1' , '3','4',''),
('' , 'Aladin' , 'mp4' , '2019-05-24' , '2' , null,'3',''),
('' , 'Paradise' , 'mp3' , '2021-04-30' , '1' , '3','4','')


insert into album
values
('','eternal','2021-09-24','1','12'),
('','face your self','2020-03-24','2','11'),
('','eternal part 2','2019-08-13','1','15'),
('','turbo','2016-11-24','2','9'),
('' , 'Folklore' , '2020-07-24','2','10')

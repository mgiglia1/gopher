--drop table users cascade constraints;

create table users
	(UserID number(3) PRIMARY KEY not null,
	 Password varchar2(8) null,
	 Name varchar2(25) null,
	 Email varchar2(25) not null );

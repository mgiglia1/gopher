--drop table friends cascade constraints;

create table friends
	(UserID1 number(3) not null,
	 UserID2 number(3) not null,
	 CONSTRAINT pk_friends primary key (UserID1, UserID2),
	 CONSTRAINT fk_friends1 FOREIGN KEY (UserID1)
	 REFERENCES users (UserID),
	 CONSTRAINT fk_friends2 FOREIGN KEY (UserID2)
	 REFERENCES users (UserID) ); 

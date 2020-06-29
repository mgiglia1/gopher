--drop table trips cascade constraints;

create table trips
	(TripID number(3) PRIMARY KEY not null,
	 Store varchar2(25) null,
	 DateTime date null, 
	 BuyerID number(3) null,
	 Completed number(1) DEFAULT 0,
	 CONSTRAINT fk_trips FOREIGN KEY (BuyerID)
	 REFERENCES users(UserID) );

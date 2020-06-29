--drop table balance cascade constraints;
create table balance 
  AS (
	select BuyerID, RequesterID, sum(Price) as Balance 
	from items, trips
	where items.TripID = trips.TripID
	group by BuyerID, RequesterID);


  --RequesterID	number(3),
  --BuyerID	number(3),
  --Balance	float,
  --Paid		number(1),
  --CONSTRAINT pk_balance PRIMARY KEY(RequesterID, BuyerID),
  --CONSTRAINT fk_balance1 FOREIGN KEY(RequesterID)
  --REFERENCES users(UserID),
  --CONSTRAINT fk_balance2 FOREIGN KEY(BuyerID)
  --REFERENCES users(UserID)

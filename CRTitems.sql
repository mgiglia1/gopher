--drop table items cascade constraints;
create table items (
  ItemID	number(3),
  TripID	number(3),
  RequesterID	number(3),
  Product	varchar(40),
  Qty		number(2),
  Price		float,
 -- CONSTRAINT pk_items PRIMARY KEY(TripID, RequesterID, Product),
  CONSTRAINT pk_items PRIMARY KEY(ItemID),
  CONSTRAINT fk_items1 FOREIGN KEY(TripID)
  REFERENCES trips(TripID),
  CONSTRAINT fk_items2 FOREIGN KEY(RequesterID)
  REFERENCES users(UserID)
  --ON DELETE CASCADE
);

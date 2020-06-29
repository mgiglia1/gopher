create or replace trigger updateBalance
after update of price on items
for each row
begin
	update balance
	set balance = balance - (:old.price) + (:new.price)
	where RequesterID = :new.RequesterID
	and BuyerID = (
		select BuyerID 
		from trips 
		where trips.TripID = :new.TripID
	);
end;
/

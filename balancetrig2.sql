create or replace trigger updateBalance2
after insert on friends
for each row
begin
	insert into balance
	values (:NEW.UserID1, :NEW.UserID2, 0);
end;
/

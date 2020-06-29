create or replace trigger tripIDtrig
	before insert on trips
	for each row
	begin
		if :new.TripID is null then
			select tripIDseq.nextval
			into :new.TripID
			from dual;
		end if;
	end;
/

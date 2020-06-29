create or replace trigger itemIDtrig
	before insert on items
	for each row
	begin
		select itemIDseq.nextval
		into :new.ItemID
		from dual;
	end;
/

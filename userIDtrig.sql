create or replace trigger userIDtrig
	before insert on users
	for each row
	begin
		if :new.UserID is null then
			select userIDseq.nextval
			into :new.UserID
			from dual;
		end if;
	end;
/

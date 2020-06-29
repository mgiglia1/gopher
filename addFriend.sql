create or replace procedure addFriend (u_email users.email%type, f_email users.email%type)
	is
	
	nothing exception;
	friend number(1);
	u_id users.userID%type;
	f_id users.userID%type;

	begin
		select count(*)
		into friend
		from users
		where email = f_email;

		if friend != 0 then
			select userID
			into u_id
			from users
			where email = u_email;
		
			select userID
			into f_id
			from users
			where email = f_email;
			dbms_output.put_line('ids: ' || u_id || ' ' || f_id);
			insert into friends values(u_id, f_id);
	
		else
			dbms_output.put_line('The user ' || f_email || ' doesn''t exist.');

		end if;

	exception
		when nothing then
			dbms_output.put_line('Friend not found.');
		when DUP_VAL_ON_INDEX then
			dbms_output.put_line('Friendship already exists.');
	end;
/

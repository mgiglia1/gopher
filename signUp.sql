create or replace function signUp (u_email users.email%type, u_password users.password%type, u_name users.name%type)
	return number
	is
	
	uname number(1);
	nothing exception;

	begin
		select count(*)
		into uname
		from users
		where email = u_email;

		return uname;
	exception
		when nothing then
			dbms_output.put_line('User already exists');
	end;
/

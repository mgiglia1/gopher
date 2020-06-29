create or replace function logIn (u_email users.email%type, u_password users.password%type) 
	return number
is
	
	login number;
	nothing exception;

begin
	select count(*)
	into login
	from users
	where email = u_email and password = u_password;
	return login;

	if login != 0 then
		dbms_output.put_line('You have successfully logged in.');
	else
		dbms_output.put_line('Insufficient credentials. Please try again');
	end if;
	
	exception
		when nothing then
			dbms_output.put_line('Error');
			return null;
end;
/		

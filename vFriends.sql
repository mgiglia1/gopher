create or replace function vFriends(id users.UserID%type)
        return sys_refcursor
AS fri sys_refcursor;
BEGIN
open fri for
select u.Name, u.Email
from Users u
join Friends f
on u.UserID = f.UserID2
where f.UserID1 = id;

return fri;
end;
/

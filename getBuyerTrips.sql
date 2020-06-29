create or replace function getBuyerTrips(id users.UserID%type)
        return sys_refcursor
AS trips sys_refcursor;
BEGIN
open trips for
select TRIPID, DATETIME, STORE, COMPLETED
from trips
where BuyerID = id;

return trips;
end;
/

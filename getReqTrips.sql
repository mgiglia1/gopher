create or replace function getReqTrips(id users.UserID%type)
        return sys_refcursor
AS trips sys_refcursor;
BEGIN
open trips for
select u.NAME, t.TripID, t.DATETIME, t.STORE
from trips t
join friends f
on f.UserID1 = t.BuyerID
join users u
on u.UserID = f.UserID1
where f.UserID2 = id
and t.Completed = 0;

return trips;
end;
/

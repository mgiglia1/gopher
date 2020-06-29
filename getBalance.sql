create or replace function getBalance(id users.UserID%type)
	return sys_refcursor
AS bals sys_refcursor;
BEGIN
open bals for
select buyerID, requesterID, u.Name, f.Name as Friend, a.balance from (
select buyerID, requesterID, sum(balance) as balance from
(select buyerID, requesterID, balance
from balance 
union    
select requesterID, buyerID, (-1*balance) as balance
from  balance
)
where buyerID = id
group by buyerID, requesterID) a
join users u 
on u.UserID = a.buyerID
join users f
on f.UserID = a.requesterID
where balance <> 0;

return bals;
end;
/

DiagVN\Freshdesk\Resources\AccessDeniedException
===============

Access Denied

Thrown when the Freshdesk API returns a 403 error code. This indicates that
the agent whose credentials were used in making this request was not authorized to perform this API call.
It could be that this API call requires admin level credentials or perhaps the Freshdesk portal doesn't have
corresponding feature enabled. It could also indicate that the user has reached the maximum number of failed login
attempts or that the account has reached the maximum number of agents


* Class name: AccessDeniedException
* Namespace: DiagVN\Freshdesk\Resources
* Parent class: [DiagVN\Freshdesk\Resources\ApiException](Freshdesk-Exceptions-ApiException.md)







Methods
-------


### getRequestException

    \GuzzleHttp\Exception\RequestException DiagVN\Freshdesk\Resources\ApiException::getRequestException()

Returns the Request Exception

A Guzzle Request Exception is returned

* Visibility: **public**
* This method is defined by [DiagVN\Freshdesk\Resources\ApiException](Freshdesk-Exceptions-ApiException.md)




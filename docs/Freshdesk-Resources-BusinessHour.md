DiagVN\Freshdesk\Resources\BusinessHour
===============

Business Hour resource

This provides access to the business hour resources


* Class name: BusinessHour
* Namespace: DiagVN\Freshdesk\Resources
* Parent class: [DiagVN\Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### all

    mixed DiagVN\Freshdesk\Resources\BusinessHour::all(array|null $query)

Get a list of all agents.

Use filters ($query) to view only specific resources (those which match the criteria that you choose).

* Visibility: **public**


#### Arguments
* $query **array|null**



### view

    array|null DiagVN\Freshdesk\Resources\BusinessHour::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



DiagVN\Freshdesk\Resources\TimeEntry
===============

Time Entry resource

Provide access to time entry resources


* Class name: TimeEntry
* Namespace: DiagVN\Freshdesk\Resources
* Parent class: [DiagVN\Freshdesk\Resources\AbstractResource](Freshdesk-Resources-AbstractResource.md)







Methods
-------


### create

    array|null Freshdesk\Resources\TimeEntry::create(integer $id, array $data)

Create a time entry for a ticket



* Visibility: **public**


#### Arguments
* $id **integer**
* $data **array**



### all

    array|null Freshdesk\Resources\TimeEntry::all(integer $id, array|null $query)

List time entries for a ticket



* Visibility: **public**


#### Arguments
* $id **integer**
* $query **array|null**



### toggle

    array|null Freshdesk\Resources\TimeEntry::toggle(integer $id)

Start / stop the timer



* Visibility: **public**


#### Arguments
* $id **integer**



### view

    array|null Freshdesk\Resources\TimeEntry::view(integer $id, array|null $query)

View a resource

Use 'include' to embed additional details in the response. Each include will consume an additional credit.
For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
See Freshdesk's documentation for details.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $query **array|null**



### update

    array|null Freshdesk\Resources\TimeEntry::update(integer $id, array $data)

Update a resource

Updates the resources for the given $id with the supplied data/.

* Visibility: **public**


#### Arguments
* $id **integer** - &lt;p&gt;The resource id&lt;/p&gt;
* $data **array** - &lt;p&gt;The data&lt;/p&gt;



### delete

    array|null Freshdesk\Resources\TimeEntry::delete(\DiagVN\Freshdesk\Resources\Traits\in $id)

Delete a resource

Delete a resource by $id

* Visibility: **public**


#### Arguments
* $id **Freshdesk\Resources\Traits\in** - &lt;p&gt;The resource id&lt;/p&gt;



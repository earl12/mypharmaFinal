#Mypharma is a web application that is built to simply automate the delivery and distribution of medicines in Cebu City, Philippines#

1. Make the administrator's side work	[ New work to do for august 2,2017..onward.]
Task for today : 
[x] Create a middleware for all the routes for the administrator
[x]Test it 
**Display views**
[x] Display Users List
[x] Display Modal for Editing the User
[x] Show the Sweetalert for deleting the user
[x] Make the Add User view List.
[x] Add the user.. 
[x] Display the social workers. 
[x] Display the medicine inventory
[x] Display the Barangays..
[x] Delete the user
[x] Update the user.. 
[x] Store the medicine dosage..
[] Display the page for showing a user's profile. 

**Main Tasks**
1. 

**App functionalities:** 
* _User Authentication and Authorization_
1.  Elderlies/Clients will be registered by the social workers `(registration)`.
2.  Authorization based on the credentials , therefore the redirection to their dashboard.

*_Administrators Task _*

[x]1. add messengers and social workers and assign them to a barangay. 
[x]2. delete and edit app users.
3. store,edit and delete medicines in the inventory.
4. Store, delete barangays in the application[cannot edit].



##System Tasks##
1. All the elderlies will place their order in a certain week in the first week.
2. After that week, the system will sort out the orders and deliver it based on the time the order was placed.=> First Come First Serve Basis
3. The next week, starting monday the medicines will be delivered. 

*_Automated Tasks _* 


*_Semi Automated Tasks_* 
1. Send SMS to a certain client.


**Core_task**
<!-- 1. Djistkra algorithm for the shortest route to the barangay hall/house of the senior citizen.  -->


*Social_workers_tasks*

=>Earl's task 

_Messengers/Couriers Tasks_
=======
1. Check what he will deliver for that day : 
2. 



2. Map

He will place his current location....

shows the markers for current days delivery.. and information details..

=> Barangay halls are also placed by markers.

=> Markers are placed in the current location in the map

=> Once a marker is clicked in the current location, it will display these : 


1. Confirm delivery. => SENDS SMS to the seniors mobile_phone 
2. Show routes from the barangay hall..
3. Show routes from your current location...
4. Move to pending routes. 

=> Every place should have a letter labeled. Consecutively based on the delivery. 
A => Delivery 1
B -> Delivery 2





Eloquent Relationships: 



Users and Roles
[x] 1. A user has one role.. A Role has Many User => One to Many

Users and Barangays..
[x] 2. A user belongs to a barangay. A barangay has many users. One to Many.. 

Users and Users_informations
[x] 3. A user has one information.. an information belongs to a user.. One to one

Barangays and Cities
[x] 4. A barangay belongs to a city.. A city has many barangay [uninclude].. One to many..

Barangays and Senior Citizens
[x] 5. A barangay has many senior_citizens. A senior citizen belongs to a barangay.. One to Many..


Dosage and Medicines
[x] 6. A dosage belongs to a medicine. A medicine has many dosages.. One to Many..

Medicine and Medicine classes
[x] 7. A medicine belongs To a class.. A medicine_class has many medicines... one to many..





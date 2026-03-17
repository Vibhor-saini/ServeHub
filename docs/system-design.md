Database Schema Entities:-

roles-----------
id
name (admin, provider, customer)


User--------------
id
name
email
password (auth)
role_id ( “role”)
phone
address
created_at
updated_at

service_categories--------------
id
name

Service------------------
id
provider_id
category_id
title
description
price 
duration 
is_active
created_at
updated_at


Booking---------------
id
customer_id
service_id
provider_id
booking_date 
address (service location)
status (pending, confirmed, etc.)
notes
created_at
updated_at
scheduled_time 


Job--------------------------
id
booking_id 
status (assigned, in_progress, completed)
started_at
completed_at
created_at
updated_at


Invoice-----------------
id
booking_id
amount
tax
total
status (pending, paid)
created_at
updated_at



========================================

Users → roles
Services → owned by providers
Booking → request
Job → execution
Invoice → billing



==============Relationships=====================
User (provider) → has many services
User (customer) → has many bookings
Service → belongs to provider
Booking → belongs to service, customer, provider
Job → belongs to booking
Invoice → belongs to booking
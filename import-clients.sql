load data local infile 'clients.csv' into table the_shed.clients
 fields terminated by ','
 enclosed by ''
 lines terminated by '\n'
 (first_name,last_name,gender,inbound_referral,atsi_status,
 date_of_birth,contact_number,email_address,challenges,
 potential_peer_support,outbound_referral,case_management_notes,client_outcomes,
 created_at,created_by,flag_archive)
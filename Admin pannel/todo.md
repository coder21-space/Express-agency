### kaushal project pending work

- [ ]  preloader
- [ ]  image size reduce
- [ ]  dynamic data show
- [ ]  sweetalert ui make better
- [ ]  registration login page ui better(background image)
- [ ]  logout dp image change
- [ ]  chart.js in admin pannel
- [X]  sidebar ui make better(icon add)
- [X]  admin pannel themes match to website
- [ ]  admin pannel manage fully(components base script ,white spaceing ,extra file in folder,extra folder delete,extra code delete,less code,perfect)
- [ ]  title change (not look like used template)


### Database pending work

- [ ]  table ui :- fix(pagination,pdf,overflow,responsive fix ,extra div all database table)
- [ ]  contact us:- loader not working ,404 error single contact:-ui better,name change in folder,previous contact:-delete not working 
- [ ]  staff:-update ,delete,404 error,loader,validation ,not working 
- [ ]  vehical:-update ,delete,404 error,loader,validation, 
- [ ]  customer:-update ,delete,404 error,loader,validation
- [ ]  customer order:-update ,delete,404 error,loader,validation form not complte ,singal page ,payment


### Database pending work

- [ ]  dashboard:- chart js 

- [ ]  contact us:- loader not working ,404 error not working,datatable not working, single contact:-loader not working ,404 error not working,datatable not working,button ui not good

- [ ]  customer: loader not working ,404 error not working ,update email error,not working customer single:-loader not working ,404 error not working,datatable not working

- [ ]  staff:-update ,delete,404 error,loader,validation ,not working 
- [ ]  vehical:-update ,delete,404 error,loader,validation, 

- [ ]  customer order:-update ,delete,404 error,loader,validation form not complte ,singal page ,payment

### kaushal project work list 14/3/22
### Database (transporation logistics managment)

<!-- customer -->

- [ ] customer = id, name, email, phone, address, city, pincode, state, created_at
      customer_list.php , customer_single.php

- [ ] order = id, customer_id, source_address, dest_address, start_datetime, end_datetime, vehicle_id, payment_id, status(0,1), created_at
      customer_order_list.php ,customer_order.php

<!-- employee -->

- [ ] staff_type = id, name(delievery), created_at
- [ ] staff = id, name, email, phone, address, city, pincode, state,salary staff_type_id, created_at
      staff.php staff_single.php

- [ ] payment = id, transection_id, account_no, mode_of_pay, bank, amount, status, created_at

<!-- vehicle -->

- [ ] vehicle = id, vehical_name(tata,maruti,suzuki), vehicle_type_id(vehical_type=truck,car,cng), v_no, trip_type(1=short, 2=long), load_capacity(kg), created_at
      vehicle_list.php , vehicle_single.php

- [ ] vehicle_type = id, vehical_type(truck ,cng), created_at = (truck, CNG, tata...)
      vehicle_type_list.php

- [ ] vehicle_maintenance = id, vehicle_name_id(tata,maruti,suzuki), amount, created_at
      vehicle_main_list.php

- [ ] make UI all table


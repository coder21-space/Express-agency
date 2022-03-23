### kaushal project work list 15/3/2022

- [ ] staff_type_list.php, staff_type_add.php(modals),staff_type_update.php, delete.php
- [ ] staff_list.php, staff_single.php, staff_delete.php, staff_update.php,staff_add.php
- [ ]
- [ ]
- [ ]
- [ ]

### kaushal project work list

- [ ] express website subject add in contact us page
- [ ] admin pannel:subject add in contact us page,single page also add subject,backend complete
- [ ] contactus page:message overflow problem solve
- [ ]

### kaushal project work list 12/3/22

- [ ] pagination fix
- [ ] show data using function method(less code)
- [ ] overflow table solve

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

- [ ] vehicle = id, vehicle_type, v_no, trip_type(1=short, 2=long), load_capacity(kg), created_at
      vehicle_list.php , vehicle_single.php

- [ ] vehicle_type = id, name, created_at = (truck, CNG, tata...)
      vehicle_type_list.php

- [ ] vehicle_maintenance = id, vehicle_id, amount, created_at
      vehicle_main_list.php

- [ ] make UI all table

<form action="" method="post" role="form" id="staff_form">
						<div class="form-wizard-header">
							<ul class="list-unstyled form-wizard-steps clearfix">
								<li class="active"><span>1</span></li>
								<li><span>2</span></li>
							</ul>
						</div>
						<fieldset class="wizard-fieldset show">
							<h5>Account Information</h5>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" name = "username" id="username">
								<label for="fname" class="wizard-form-text-label">user Name*</label>
								<div class="wizard-form-error" id="user_error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" name="email" id="email">
								<label for="lname" class="wizard-form-text-label">Email*</label>
								<div class="wizard-form-error" id="email_error"></div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control wizard-required" name="password" id="password">
								<label for="zcode" class="wizard-form-text-label">Password*</label>
								<div class="wizard-form-error" id="password_error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>Staff Information</h5>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" name="name" id="name">
								<label for="email" class="wizard-form-text-label">Name</label>
								<div class="wizard-form-error" id="name_error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" name="e-mail" id="e-mail">
								<label for="username" class="wizard-form-text-label">Email</label>
								<div class="wizard-form-error" id="address_error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" name="phone" id="phone">
								<label for="pwd" class="wizard-form-text-label">Phone Number</label>
								<div class="wizard-form-error" id="phone_error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<button type="submit"style="margin-left: 620px; border: none; background: #fc1c03; color: #fff;" name="save"><a class="form-wizard-submit float-right">Submit</a></button>
							</div>
						</fieldset>	
					</form>

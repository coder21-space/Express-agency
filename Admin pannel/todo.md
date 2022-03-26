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

- [ ] vehicle = id, name, vehicle_type, v_no, trip_type(1=short, 2=long), load_capacity(kg), created_at
      vehicle_list.php , vehicle_single.php

- [ ] vehicle_type = id, name, created_at = (truck, CNG, tata...)
      vehicle_type_list.php

- [ ] vehicle_maintenance = id, vehicle_id, amount, created_at
      vehicle_main_list.php

- [ ] make UI all table

$('#loader').show();
$('#datatable-buttons').hide();

$(document).ready(function () {
$('#loader').hide();
$('#datatable-buttons').show();

getdata();
function getdata() {

    $.ajax({
      url: "PHP/staff_list.php",
      type: "POST",
      dataType: "json",
      data: { submit: "contact-list" },
      success: function (response) {
        console.log(response);
        output = "";
        output_error = "";
        if (response.success) {
          var output = get_contactlist_html(response.data);
          $("#contact").html(output);
        } else {

          output_error += `

        <div class="my-5 pt-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h1 class="display-1 fw-semibold text-primary" >Sorry</h1>
                        <h4 class="text-uppercase"> no data was found in contact us</h4>
                        <div class="mt-5 text-center">

                        </div>
                    </div>
                </div>
            </div>`;

        }
        $("#contact_error").html(output_error);

      },
      error: function (error) { },
    });

}

function get_contactlist_html(contacts) {
previous = "";
contacts.forEach((contact, index) => {

      previous += `
        <tr>
            <td>${index + 1}</td>

             <td>${contact.name }</td>
            <td>${contact.email}</td>

            <td>${contact.phone}</td>
            <td>${contact.created_at}</td>



            <td>
                <div class="d-flex">


                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-danger delete"data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal" data-id="${contact.id}" id="contact-delete">
                  <i class="fa-solid fa-trash-can" ></i></button>&nbsp

                  <button type="button" class="btn btn-success btn-rounded waves-effect waves-danger update"data-bs-target="#updateModal" data-bs-toggle="modal" data-bs-dismiss="modal" data-id="${contact.id} " data-name="${contact.name}" data-email="${contact.email}" data-phone="${contact.phone}" id="update">
                  <i class="fa-solid fa-pen"></i></button>&nbsp&nbsp

                  <a href="staff_single.php?contact=" base64_encode(urlencode${contact.id})" name="contact_id" class="btn btn-primary btn-rounded waves-effect waves-danger shadow btn-xs sharp me-1 "> <i class="fa-solid fa-eye"></i></a>




                </div>

            </td>
        </tr>
        `;
    });

    return previous;

}

$("#previous-data").on("click",function(){

    $('#loader').hide();
    $('#datatable').show();

    previous_error = "";

$.ajax({
url: "PHP/vehicle_add.php",
type: "POST",
dataType: "json",
data: { submit: "vehicle_maintenance", vehicle_id:vehicle_id },
success: function (response) {
console.log(response);
if (response.success) {
var contact_list = get_contactlist_html(response.data);
$("#previous-contact").html(contact_list);
} else {

        previous_error+=`

        <div class="my-5 pt-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <h1 class="display-1 fw-semibold text-primary">Sorry<span class="text-primary"</h1>
                        <h4 class="text-uppercase"> no data was found in the list</h4>
                        <div class="mt-5 text-center">

                        </div>
                    </div>
                </div>
            </div>`;



      }
      $("#previous_error").html(previous_error);
    },
    error: function (error) {

      error = "some error occured";

    },

});

});

$("#staff-form").on("submit", function (e) {
e.preventDefault();

     var username = $("#username").val();

var email = $("#email").val();
var password = $("#password").val();
var name = $("#name").val();
var e_mail = $("#e-mail").val();
var phone = $("#phone").val();
var address = $("#address").val();
// console.log(address);
var city = $("#city").val();
var pincode = $("#pincode").val();
var state = $("#state").val();
var salary = $("#salary").val();
var staff_type_id = $("#staff_type_id").val();
var error = false;

if (isEmpty(username)) {
error = true;
$('#username_err').text("username should not be blank!");
} else {
$('#username_error').text("");
}
if (isEmpty(name)) {
error = true;
$('#name_err').text("Name should not be blank!");
} else {
$('#name_err').text("");
}
if (isEmpty(phone)) {
error = true;
$('#phone_err').text("Phone number should not be blank!");
} else {
$('#phone_err').text("");
}
if (isEmpty(e_mail)) {
error = true;
$('#e-mail_err').text("Email should not be blank!");
} else {
$('#e-mail_err').text("");
}
if (isEmpty(email)) {
error = true;
$('#email_err').text("E-mail should not be blank!");
} else {
$('#email_err').text("");
}
if (isEmpty(password)) {
error = true;
$('#password_err').text("password should not be blank!");
} else {
$('#password_err').text("");
}
if (isEmpty(address)) {
error = true;
$('#address_err').text("password should not be blank!");
} else {
$('#address_err').text("");
}

if (isEmpty(city)) {
error = true;
$('#city_err').text("city should not be blank!");
} else {
$('#city_err').text("");
}
if (isEmpty(pincode)) {
error = true;
$('#pincode_err').text("pincode should not be blank!");
} else {
$('#pincode_err').text("");
}
if (isEmpty(state)) {
error = true;
$('#state_err').text("This field should not be blank!");
} else {
$('#state_err').text("");
}
if (isEmpty(salary)) {
error = true;
$('#salary_err').html("This field should not be blank!");
} else {
$('#salary_err').html("");
}
if (isEmpty(staff_type_id)) {
error = true;
$('#staff_type_id_err').html("This field should not be blank!");
} else {
$('#staff_type_id_err').html("");
}

if (error) {
return false;
}
// $("#btn").hide();
// $("#contact_submit_loader").show();
$.ajax({
type: "POST",
url: "php/staff_register.php",
data: $(this).serialize() + "&submit=true",
cache: false,
success: function (response) {
// $("#btn").show();
// $("#contact_submit_loader").hide();
response = JSON.parse(response);
if (response.success === true) {
Toastify({
text: response.message,
className: "success",
style: {
background: "#78f76d",
},
close : true,
gravity : top,
duration : 3000,
oldestFirst : true
}).showToast();
$('#staff-form')[0].reset();
} else {
for (const error in response.data) {
$('#' + error + '\_error').text(response.data[error]);
}
}
},
error: function (error) {
swal({
icon: "error",
title: "something went wrong",
text: response.message
});
// $("#btn").show();
// $("#contact_submit_loader").hide();
},
});
});

// update

$('#update-btn').on("click",function (e) {
e.preventDefault();
var id = $("#id").val();
var name = $("#name").val();
var email= $("#email").val();
var phone= $("#phone").val();
console.log(id);

var error = false;

if (isEmpty(name)) {
error = true;
$('#name_err').text("amount should not be blank!");
} else {
$('#name_err').text("");
}
if (isEmpty(email)) {
error = true;
$('#email_err').text("description should not be blank!");
} else {
$('#email_err').text("");
}
if (isEmpty(phone)) {
error = true;
$('#phone_err').text("description should not be blank!");
} else {
$('#phone_err').text("");
}

if (error) {
return false;
}

$.ajax({
url: "PHP/staff_list.php",
type: "POST",
dataType: "json",
data: { submit: 'update', id: id, name:name ,email:email, phone:phone},
success: function (response) {

          $('#updateModal').modal('hide');
          if (response.success === true) {
              Toastify({
                  text: response.message,
                  className: "success",
                  style: {
                      background: "#78f76d",
                  },
                  close: true,
                  gravity: top,
                  duration: 3000,
                  oldestFirst: true
              }).showToast();
                  getdata();
          } else {
              Toastify({
                  text: response.message,
                  className: "info",
                  style: {
                      background: "#ff4e21",
                  }
              }).showToast();
          }
      },

      error: function (error) {
        swal({
            icon: "error",
            title: "something went wrong",
            text: response.message
        });
        // $("#submit-contact").show();
        // $("#loader").hide();
    },



});
});

$(document).on('click', '.update', function () {

var id = $(this).attr('data-id');

var name = $(this).attr('data-name');

var email= $(this).attr('data-email');
var phone= $(this).attr('data-phone');

$("#updateModal").modal('show');
var id = $('#id').val(id);
console.log(id);
var name = $('#name').val(name);
var email = $('#email').val(email);
var phone = $('#phone').val(phone);

});

// delete

$('#contact').on('click', '.delete', function () {
var id = $(this).attr('data-id');
$('#confirm').on("click", function () {

      $.ajax({
        url: "PHP/staff_list.php",
        type: "POST",
        dataType: "json",
        data: { submit: 'delete', id: id },
        success: function (response) {
          $('#secondmodal').modal('hide');
          if (response.success) {
            swal({
              icon: "success",
              title: "success",
              text: response.message
            });
            getdata();
          } else {
            swal({
              icon: "error",
              title: "error",
              text: response.message
            });
          }
        }
      });
    });

});

});

// var username = $("#username").val();

// var email = $("#email").val();
// var password = $("#password").val();
// var name = $("#name").val();
// var e_mail = $("#e-mail").val();
// var phone = $("#phone").val();
// var address = $("#address").val();
// var city = $("#city").val();
// var pincode = $("#pincode").val();
// var state = $("#state").val();
// var salary = $("#salary").val();
// var staff_type_id = $("#staff_type_id").val();
// var error = false;

// if (isEmpty(username)) {
// error = true;
// $('#user_error').text("username should not be blank!");
// } else {
// $('#user_error').text("");
// }
// if (isEmpty(name)) {
// error = true;
// $('#name_error').text("Name should not be blank!");
// } else {
// $('#name_error').text("");
// }
// if (isEmpty(phone)) {
// error = true;
// $('#phone_error').text("Phone number should not be blank!");
// } else {
// $('#phone_error').text("");
// }
// if (isEmpty(e_mail)) {
// error = true;
// $('#e-mail_error').text("Email should not be blank!");
// } else {
// $('#e-mail_error').text("");
// }
// if (isEmpty(email)) {
// error = true;
// $('#email_error').text("E-mail should not be blank!");
// } else {
// $('#email_error').text("");
// }
// if (isEmpty(password)) {
// error = true;
// $('#password_error').text("password should not be blank!");
// } else {
// $('#password_error').text("");
// }
// if (isEmpty(address)) {
// error = true;
// $('#address_error').text("password should not be blank!");
// } else {
// $('#address_error').text("");
// }

// if (isEmpty(city)) {
// error = true;
// $('#city_error').text("password should not be blank!");
// } else {
// $('#city_error').text("");
// }
// if (isEmpty(pincode)) {
// error = true;
// $('#pincode_error').text("password should not be blank!");
// } else {
// $('#pincode_error').text("");
// }
// if (isEmpty(state)) {
// error = true;
// $('#state_error').text("password should not be blank!");
// } else {
// $('#state_error').text("");
// }
// if (isEmpty(salary)) {
// error = true;
// $('#salary_error').html("password should not be blank!");
// } else {
// $('#salary_error').html("");
// }
// if (isEmpty(staff_type_id)) {
// error = true;
// $('#staff_type_id_error').text("password should not be blank!");
// } else {
// $('#staff_type_id_error').text("");
// }
// if (error) {
// return false;
// }

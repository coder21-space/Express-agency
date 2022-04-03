<div class="modal fade" id="updateModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <form id="update">

                        <div class="mb-3">
                            <div class="row">

                                <input type="hidden" class="form-control" id="id" name="id">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> <b> Name </b>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    <h6 class="text-danger" id=name_err></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label"><b> Email </b></label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                    <h6 class="text-danger" id="email_err"></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label"> <b> Phone </b></label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                                    <h6 class="text-danger" id="phone_err"></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label"> <b> Address </b></label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                    <h6 class="text-danger" id=address_err></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label"> <b> City </b></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="city">
                                    <h6 class="text-danger" id=city_err></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label"> <b> Pincode </b> </label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="pincode">
                                    <h6 class="text-danger" id=pincode_err></h6>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label"> <b> State </b></label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="state">
                                    <h6 class="text-danger" id=state_err></h6>
                                </div>


                            </div>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary delete-button" id="update-btn">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
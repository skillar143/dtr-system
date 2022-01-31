
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <form class="needs-validation" action="{{ route('employee.store') }}" method="post" novalidate>
@csrf
        <div class="row g-3">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">First name</label>
              <input type="text" class="form-control" id="validationCustom01" name="firstname" required >
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Middle name</label>
              <input type="text" class="form-control" id="validationCustom02" name="middlename"required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom03">Last name</label>
              <input type="text" class="form-control" id="validationCustom03" name="lastname"required>
            </div>
        </div>
        <div class="md-6 mb-3">
                <label for="validationCustom04">Address</label>
                <input type="messagebox" class="form-control" id="validationCustom04" name="address" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
            <div class="form-row row g-3">
                <div class="col-md-3 mb-3">
                    <label for="validationCustom07">Designation</label>
                    <input type="text" class="form-control" id="validationCustom07" name="designation" required>
                </div>

              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Date of Birth</label>
                <input type="date" class="form-control" id="validationCustom05" name="dob" required>
              </div>
              <div class="col-md-3 mb-3">
                    <label for="validationCustom06">Gender</label>
                    <select class="form-control" name="gender" id="validationCustom06">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
              </div>
              <div class="col-md-3 mb-3">
                    <label for="validationCustom08">Age</label>
                    <input type="text" class="form-control" id="validationCustom08" name="age" required>
                </div>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-outline-primary" >Submit</button>
      </div>
    </div>
  </div>
</div>
</form>

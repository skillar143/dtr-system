
<!-- add modal -->
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

<!-- edit modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <form id="employeeUpdate" method="post">
      @method('PUT')
      @csrf
        <div class="row g-3">
            <div class="col-md-4 mb-3">
              <input type="hidden" name="id" id="id">
              <label for="firstname">First name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required >
            </div>
            <div class="col-md-4 mb-3">
              <label for="middlename">Middle name</label>
              <input type="text" class="form-control" id="middlename" name="middlename"required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="lastname">Last name</label>
              <input type="text" class="form-control" id="lastname" name="lastname"required>
            </div>
        </div>
        <div class="md-6 mb-3">
                <label for="address">Address</label>
                <input type="messagebox" class="form-control" id="address" name="address" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
            <div class="form-row row g-3">
                <div class="col-md-3 mb-3">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" required>
                </div>

              <div class="col-md-3 mb-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
              </div>
              <div class="col-md-3 mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
              </div>
             
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('employeeUpdate').submit()">Update</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- delete modal -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" id="deleteEmployee">
            @method('DELETE')
              @csrf
              
                <div class="container">
                  <p>Are you sure you want to delete this Employee?</p>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('deleteEmployee').submit()">Delete</button>
          </div>
        </div>
      </div>
    </div>
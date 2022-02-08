
<!-- add modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Designation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <form class="needs-validation" action="{{ route('designation.store') }}" method="post" novalidate>
@csrf
        <div class="row g-3">
            <div class="">
              <label for="designationc">Designation Title</label>
              <input type="text" class="form-control" id="designationc" name="designation" required>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Designation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <form id="designationUpdate" method="post">
      @method('PUT')
      @csrf
      <div class="row g-3">
            <div class="">
              <label for="designation">Designation Title</label>
              <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('designationUpdate').submit()">Update</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Delete Designation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" id="deleteDesignation">
            @method('DELETE')
              @csrf
              
                <div class="container">
                  <p>Are you sure you want to delete this Designation?</p>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('deleteDesignation').submit()">Delete</button>
          </div>
        </div>
      </div>
    </div>
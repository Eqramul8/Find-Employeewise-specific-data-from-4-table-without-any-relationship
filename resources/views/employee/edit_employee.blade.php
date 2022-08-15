

    <div class="row">


      <div class="col-3"></div>

      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Employee Edit</h4>
          </div>
          <div class="card-body">
            <form  method="POST" action="{{ route('update.employee') }}" class="form form-vertical">
                @csrf

              <input type="hidden" name="category_id" value="{{ $employee_edit->id }}">
              <div class="row">
                <div class="col-12">
                  <div class="mb-1">
                    <label class="form-label" for="first-name-icon">Employee Name</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="first-name-icon" class="form-control" name="name" value="{{ $employee_edit->name }}">
                    </div>

                  </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Employee Email</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="email"
                        value="{{ $employee_edit->email }}">
                      </div>

                    </div>
                  </div>



                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Address</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="address"
                        value="{{ $employee_edit->address }}">
                      </div>

                    </div>
                  </div>



                <div class="col-12">
                  <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Update</button>
                  <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-3"></div>

    </div>




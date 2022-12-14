<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .employeeTable tr:nth-child(even) {
        background-color: rgb(194, 215, 222)
      }
    </style>
  </head>
  <body>

{{-- <button class="btn btn-primary btn-lg" style="margin-top: 10px; font-weight:bold; border:2px solid black"><a href="{{route('/')}}">Home</a></button><br> --}}



  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">All Employee</h4>
            </div>
            <div class="card-datatable">
              <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" >
                <thead>
                  <tr>
                    <th scope="col"> SN </th>
                    <th scope="col"> Employee Name  </th>
                    <th scope="col"> Employee Email </th>
                    <th scope="col">Employee Address</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
              @php
                  $sn=1;
              @endphp
              @foreach ($employees as $employee)
              <tr>
                    <td scope="row" >{{ $sn++ }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>
                        {{-- <button type="button" class="btn btn-relief-warning"><a href="{{ route('edit.employee',$employee->id) }}"> <i class="fa fa-edit"></i> </a> </button> --}}
                        <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.employee',$employee->id) }}"> <i class="fa fa-trash"></i> </a> </button>
                    </td>
              </tr>
              @endforeach
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Employee Add</h4>
            </div>
            <div class="card-body">
              <form  method="POST" action="{{ route('add.employee') }}" class="form form-vertical">
                  @csrf
                <div class="row">

                  <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="first-name-icon">Employee Name</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Employee Name">
                      </div>
                      @error('cat_name_en')
                            <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>




                  <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Employee Email</label>
                        <div class="input-group input-group-merge">
                          <input type="email" id="first-name-icon" class="form-control" name="email" placeholder="Employee Email">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Employee Address</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="first-name-icon" class="form-control" name="address" placeholder="Employee Address">
                        </div>
                        @error('cat_name_bn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>



                  <div class="col-12">
                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>










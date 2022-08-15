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
  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-8 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">All Employee, Task, Issue & Team</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Employee ID</th>
                            <th>Task ID</th>
                            <th>Issue ID</th>
                            <th>Team ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                                $sn=1;
                            @endphp
                            @foreach ($employee_tasks as $employee_task)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $employee_task->employee_id}}</td>
                                <td>{{ $employee_task->issue_id }}</td>
                                <td>{{ $employee_task->task_id}}</td>
                                <td>{{ $employee_task->team_id }}</td>

                           <td>
                                <button type="button" class="btn btn-relief-danger"><a href="{{ route('delete.employee_task',$employee_task->id) }}">
                                  <i class="fa fa-trash"></i></a> </button>
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
              <h4 class="card-title">Add Employee, Task, Issue & Team</h4>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('add.employee_task')}}" class="form form-vertical">
                    @csrf
                  <div class="row">



                      <div class="col-12">
                        <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Employer ID</label>
                        <div class="input-group">
                            <select class="form-select form-select-lg" id="selectLarge" name="employee_id">
                                <option disabled >Open this select menu</option>
                                @foreach ($employeess as $emp)
                                    <option value="{{ $emp->id}}">
                                    {{  ucwords($emp->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>



                    <div class="col-12">
                        <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Task ID</label>
                        <div class="input-group">
                            <select class="form-select form-select-lg" id="selectLarge" name="task_id">
                                <option disabled >Open this select menu</option>
                                @foreach ($tasks as $task)
                                    <option value="{{ $task->id}}">
                                    {{  ucwords($task->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>




                      <div class="col-12">
                        <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Issue ID</label>
                        <div class="input-group">
                            <select class="form-select form-select-lg" id="selectLarge" name="issue_id">
                                <option disabled >Open this select menu</option>
                                @foreach ($issues as $issue)
                                    <option value="{{ $issue->id}}">
                                    {{  ucwords($issue->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>




                      <div class="col-12">
                        <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Team ID</label>
                        <div class="input-group">
                            <select class="form-select form-select-lg" id="selectLarge" name="team_id">
                                <option disabled >Open this select menu</option>
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id}}">
                                    {{  ucwords($team->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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


  <section id="responsive-datatable">
    <div class="container">
      <div class="row mt-4">

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Find Data According to Employee Name</h4>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{route('add.details')}}" class="form form-vertical">
                    @csrf
                  <div class="row">



                      <div class="col-12">
                        <div class="mb-1">
                        <label class="form-label" for="first-name-icon">Employer Name</label>
                        <div class="input-group">
                            <select class="form-select form-select-lg" id="selectLarge" name="employee_id">
                                <option disabled >Open this select menu</option>
                                @foreach ($employeess as $emp)
                                    <option value="{{ $emp->id}}">
                                    {{  ucwords($emp->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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










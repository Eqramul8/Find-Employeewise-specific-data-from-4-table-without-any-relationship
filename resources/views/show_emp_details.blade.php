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
                  <h4 class="card-title">Employee Detail</h4>
                </div>
                <div class="card-datatable">
                  <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" >
                    <thead>
                      <tr>
                        <th scope="col"> Employee Name  </th>
                        <th scope="col"> Employee Email </th>
                        <th scope="col">Employee Address</th>
                      </tr>
                    </thead>

                    <tbody>
                  <tr>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->address }}</td>
                  </tr>

                    </tbody>

                  </table>
                </div>
              </div>



          <br><br><br><br>

          <div class="card">

            <div class="card-header border-bottom">
              <h4 class="card-title">{{$emp->name}}'s Task</h4>
            </div>
            <div class="card-datatable">
              <table class="table employeeTable dt-responsive table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info" >
                <thead>
                    <tr>
                        <th>Task Name</th>
                        <th>Task Description</th>
                        <th>Task Duration</th>
                    </tr>
                </thead>
                <tbody>
              <tr>
                  <td>{{ $task->name }}</td>
                  <td>{{ $task->description }}</td>
                  <td>{{ $task->duration }}</td>
              </tr>
                </tbody>
              </table>
            </div>
          </div>


          <br><br><br><br>

          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">{{ $task->name }}'s Issue</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead>
                        <tr>
                            <th>Issue Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                                <td>{{ $issue->name }}</td>
                                <td>{{ $issue->date }}</td>

                        </tr>

                    </tbody>
                </table>
            </div>
          </div>


          <br><br><br><br>


          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">{{ $emp->name }}'s Team</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Number OF Members</th>
                            <th>Team Description</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->number_of_members }}</td>
                                <td>{{ $team->description }}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
          </div><br><br><br><br>





          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">All Employee, Task, Issue & Team</h4>
            </div>
            <div class="card-datatable">
                <table class="dt-responsive employeeTable table dataTable dtr-column collapsed" id="DataTables_Table_3" role="grid"aria-describedby="DataTables_Table_3_info">
                    <thead>
                        <tr>

                            <th>Employee ID</th>
                            <th>Task ID</th>
                            <th>Issue ID</th>
                            <th>Team ID</th>

                        </tr>
                    </thead>

                    <tbody>


                            <tr>

                                <td>{{ $employee->employee_id}}</td>
                                <td>{{ $employee->issue_id }}</td>
                                <td>{{ $employee->task_id}}</td>
                                <td>{{ $employee->team_id }}</td>


                        </tr>

                    </tbody>
                </table>
            </div>
          </div><br><br><br><br>


        </div>


      </div>


    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

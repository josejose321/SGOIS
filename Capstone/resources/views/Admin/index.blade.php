@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="container w-75 p-3">
              <div class="card">
                  <div class="card-header">
                    <h2>Sholarhips</h2>
                
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="scholarhipdata">
                          <tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container w-75 p-3">
              <div class="card">
                <div class="card-header">
                    <h2>Discount</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="discountdata">
                          <tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container w-75 p-3">
              <div class="card">
                <div class="card-header">
                    <h2>Loans Applied</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="loanData">
                          <tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
    <br><br><br>
    <section class="">
        <div class="container w-75 p-3">
              <div class="card">
                <div class="card-header">
                    <h2>Government Grantees</h2>
                  </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Department</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">COLUMN</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="granteesdata">
                          <tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
</body>
</html>
@endsection

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
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="scholarhipdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $scholarships->id }}</th>
                            <th scope="col">{{ $scholarships->fullname }}</th>
                            <th scope="col">{{ $scholarships->department }}</th>
                            <th scope="col">{{ $scholarships->course }}</th>
                            <th scope="col">{{ $scholarships->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                            
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
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="discountdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $loans->id }}</th>
                            <th scope="col">{{ $loans->fullname }}</th>
                            <th scope="col">{{ $loans->department }}</th>
                            <th scope="col">{{ $loans->course }}</th>
                            <th scope="col">{{ $loans->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
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
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="loanData">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $discounts->id }}</th>
                            <th scope="col">{{ $discounts->fullname }}</th>
                            <th scope="col">{{ $discounts->department }}</th>
                            <th scope="col">{{ $discounts->course }}</th>
                            <th scope="col">{{ $discounts->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
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
                            <th scope="col">COURSE</th>
                            <th scope="col">YEAR</th>
                            <th scope="col">REQUIREMENTS</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody class="granteesdata">
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">18-08925</th>
                            <th scope="col">Evasco, Jose II V</th>
                            <th scope="col">College of Computer Studies</th>
                            <th scope="col">BSIT</th>
                            <th scope="col">4TH YEAR</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                              <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                          <tr>
                            <th scope="col">{{ $grants->id }}</th>
                            <th scope="col">{{ $grants->fullname }}</th>
                            <th scope="col">{{ $grants->department }}</th>
                            <th scope="col">{{ $grants->course }}</th>
                            <th scope="col">{{ $grants->year }}</th>
                            <th scope="col"><button type="button" class="button btn-secondary">VIEW REQUIREMENTS</button></th>
                            <th scope="col"><button type="submit" class="button btn-primary">Approve</button>
                            <button type="submit" class="button btn-danger">Reject</button> </th>

                          </tr>
                            
                        </tbody>
                      </table>
                </div>
              </div>
        </div>
    </section>
</body>
</html>
@endsection

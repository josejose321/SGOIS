@extends('layouts.student')
@section('title', 'Profile')
@section('content')
    <section class="container">
        <!-- Large modal -->

        <div class="jumbotron">
            <div class="w-50"><img src="{{ Storage::url('avatar/' . $student->avatar) }}" class="rounded w-25"
                    alt="avatar.jpeg"><br></div>
            <h6 class="">
                Hello, Mr./Ms
                {{ $student->firstname }}
                {{ $student->middlename }}
                {{ $student->lastname }} <br>
                {{ $student->user_id }} <br>
            </h6>
            <a href="{{ url('student/' . $student->student_no . '/edit') }}"><button type="button"
                    class="btn btn-primary">Edit Profile</button></a>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet perferendis nisi aut
                voluptate expedita,
                tempora adipisci in dicta quas iusto totam repellat. Corrupti repellendus nobis culpa perferendis sequi ea
                accusantium.
                Numquam deserunt facilis molestiae repudiandae nesciunt architecto excepturi maxime molestias distinctio a
                aliquam dolorem
                vitae doloribus, esse nulla quidem. Quam eligendi totam expedita ipsa accusamus pariatur quos debitis
                architecto cupiditate?</p>
            <hr class="my-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, distinctio temporibus consectetur cum, aperiam
                cupiditate
                architecto enim quibusdam magnam recusandae suscipit labore quod facere nobis? Aspernatur fuga cum ad esse?.
            </p>

            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                        data-target="#addscholar">Scholarship</button>
                    <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal"
                        data-target="#addscholar">Discount</button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                        data-target="#addscholar">Loan</button>
                    <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal"
                        data-target="#addscholar">Government Grant</button>
                </div>
            </div>

        </div>
    </section>
    @include('modals.addScholarship')
    <br><br><br>

    </section>
@endsection

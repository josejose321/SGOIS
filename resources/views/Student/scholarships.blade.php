@extends('layouts.student')

@section('title', 'Student Dashboard')

@section('content')
@section('background')
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("{{ asset('student/sportsDev.jpg') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

    </style>
@stop
<br>
<div class="container w-75">
    <div class="accordion " id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="academicHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#academic" aria-expanded="false" aria-controls="academic">
                    <h2><b>ACADEMIC SCHOLARSHIP</b></h2>
                </button>
            </h2>
            <div id="academic" class="accordion-collapse collapse" aria-labelledby="academicHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?
                    <div class="accordion" id="academicAccordion">
                        @foreach ($academics as $academic)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $academic->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#academic-{{ $academic->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="academic-{{ $academic->categoryNo ?? '' }}">
                                        {{ $academic->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="academic-{{ $academic->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $academic->categoryNo }}"
                                    data-bs-parent="#academicAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $academic->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>


                    <center><button class="btn btn-danger" data-target="#academicModal" data-toggle="modal">
                        Apply Academic Scholarship
                        </button>
                    </center>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="varsityHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#varsity" aria-expanded="false" aria-controls="varsity">
                    <h2><b>VARSITY SCHOLARSHIP</b></h2>
                </button>
            </h2>
            <div id="varsity" class="accordion-collapse collapse" aria-labelledby="varsityHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?
                    <div class="accordion" id="varsityAccordion">
                        @foreach ($sdo_office->categories as $varsity)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $varsity->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#varsity-{{ $varsity->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="varsity-{{ $varsity->categoryNo ?? '' }}">
                                        {{ $varsity->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="varsity-{{ $varsity->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $varsity->categoryNo }}"
                                    data-bs-parent="#varsityAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $varsity->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>
                    <center><button class="btn-lg btn-danger" data-target="#varsityModal" data-toggle="modal">
                            Apply Varsity Scholarship
                        </button></center>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="cultureHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#culture" aria-expanded="false" aria-controls="culture">
                    <h2><b>CULTURE AND ARTS SCHOLARSHIP</b></h2>
                </button>
            </h2>
            <div id="culture" class="accordion-collapse collapse" aria-labelledby="cultureHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?
                    <div class="accordion" id="cultureAccordion">
                        @foreach ($culture_office->categories as $culture)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $culture->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#culture-{{ $culture->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="culture-{{ $culture->categoryNo ?? '' }}">
                                        {{ $culture->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="culture-{{ $culture->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $culture->categoryNo }}"
                                    data-bs-parent="#cultureAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $culture->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>
                    <center><button class="btn-lg btn-danger" data-target="#cultureModal" data-toggle="modal">
                            Apply Culture And Arts Scholarship
                        </button></center>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="studentAssistanceHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#student_assistance" aria-expanded="false" aria-controls="student_assistance">
                    <h2><b>STUDENT ASSISTANCE SCHOLARSHIP</b></h2>
                </button>
            </h2>
            <div id="student_assistance" class="accordion-collapse collapse" aria-labelledby="studentAssistanceHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?

                    <div class="accordion" id="student_assistanceAccordion">
                        @foreach ($hr_office->categories as $student_assistance)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $student_assistance->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#student_assistance-{{ $student_assistance->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="student_assistance-{{ $student_assistance->categoryNo ?? '' }}">
                                        {{ $student_assistance->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="student_assistance-{{ $student_assistance->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $student_assistance->categoryNo }}"
                                    data-bs-parent="#student_assistanceAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $student_assistance->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>
                    <center><a href="{{ route('student.sportsDev') }}" class="btn-lg btn-danger">
                            Apply Student Assistance Scholarship
                        </a></center>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="discountHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#discounts" aria-expanded="false" aria-controls="discounts">
                    <h2><b>AVAILABLE DISCOUNTS</b></h2>
                </button>
            </h2>
            <div id="discounts" class="accordion-collapse collapse" aria-labelledby="discountHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?
                    <div class="accordion" id="discountAccordion">
                        @foreach ($discounts as $discount)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $discount->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#discount-{{ $discount->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="discount-{{ $discount->categoryNo ?? '' }}">
                                        {{ $discount->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="discount-{{ $discount->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $discount->categoryNo }}"
                                    data-bs-parent="#discountAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $discount->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>
                    <center><a href="{{ route('student.sportsDev') }}" class="btn-lg btn-danger">
                            Apply Discounts
                        </a></center>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="externalHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#external" aria-expanded="false" aria-controls="external">
                    <h2><b>EXTERNAL SCHOLARHIPS</b></h2>
                </button>
            </h2>
            <div id="external" class="accordion-collapse collapse" aria-labelledby="externalHeading"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis dicta asperiores
                    consectetur tempora quidem quam quo ut voluptates ad quaerat reiciendis ratione soluta, atque animi
                    maxime quod magni hic. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deleniti.
                    Obcaecati et voluptate ratione! Molestias accusamus delectus qui est totam nobis mollitia
                    temporibus, perspiciatis, a dignissimos deleniti impedit eaque vel?
                    {{-- @foreach ($externals as $external)
                        <strong>
                            <li class="h5">{{ $external->name ?? '' }}</li>
                        </strong>

                        <ul> Proceedure:
                            @foreach (explode('#', $external->instruction) as $item)
                                @if ($item != '')
                                    <li>{{ $item }}</li>
                                @endif
                            @endforeach
                        </ul>
                    @endforeach <br> --}}
                    <div class="accordion" id="externalAccordion">
                        @foreach ($externals as $external)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-{{ $external->categoryNo }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#external-{{ $external->categoryNo ?? '' }}"
                                        aria-expanded="true"
                                        aria-controls="external-{{ $external->categoryNo ?? '' }}">
                                        {{ $external->name ?? '' }}
                                    </button>
                                </h2>
                                <div id="external-{{ $external->categoryNo ?? '' }}"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="heading-{{ $external->categoryNo }}"
                                    data-bs-parent="#externalAccordion">
                                    <div class="accordion-body">
                                        <strong>PROCEEDURE</strong>
                                        @foreach (explode('#', $external->instruction) as $item)
                                            @if ($item != '')
                                                <li>{{ $item }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <br>
                    <center><a href="{{ route('student.sportsDev') }}" class="btn-lg btn-danger">
                            Apply External/Government Scholarships
                        </a></center>
                </div>
            </div>
        </div>
    </div>
</div>

</div> <br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
@include('modals.addVarsity')
@include('modals.addCultureAndArts')
@include('modals.addAcademic')
@endsection

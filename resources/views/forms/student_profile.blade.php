<nav style="--bs-breadcrumb-divider: '>';" class="mt-4 mb-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('student.create') }}">New student</a></li>
        <li class="breadcrumb-item active" aria-current="page">student</li>
    </ol>
</nav>
<div class="buttons mb-3">
    <div class="row">
        <div class="col-auto ml-auto">
            <a href="{{ route('results.create', $student) }}" class="btn btn-sm btn-outline-dark py-2 px-4">Exam
                Results</a>
        </div>
        <div class="col-auto">
            <a href="" class="btn btn-sm btn-outline-success py-2 px-4">Fees</a>
        </div>
    </div>
</div>
<div class="row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">

                    <img src="{{ asset('storage/' . $student->student_profile) }}" alt="{{ $student->firstname }}"
                        class="img-thumbnail">

                </div>

            </div>

        </div>

    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">student ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $student->student_id }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $student->firstname }} {{ $student->surname }} {{ $student->othername }}
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Class</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $student->class }}
                    </div>
                </div>


                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $student->gender }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">D.O.B</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $student->dob }}
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class=" col-auto mr-auto ">
                        <a href="{{ route('student.edit', $student) }}" class="btn btn-success btn-small px-5 py-2 ">
                            <i class="fa fa-edit"></i>
                            Edit</a>
                    </div>

                    <div class="col-auto  ml-auto">

                        <button type="button" id="delete_student" class="btn btn-danger  btn-small px-5 py-2"><i
                                class="fa fa-trash "></i>
                            Delete</button>
                        <form id="form-delete" action="{{ route('student.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>

                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

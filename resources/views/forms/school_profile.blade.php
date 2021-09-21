<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card ">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-sm-5">
                        <h6 class="mb-0">Names</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        {{ $school->school_name }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-5">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        {{ $school->email }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-5">
                        <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        {{ $school->phone }}
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-5">
                        <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                        {{ $school->address }} {{ $school->county }} {{ $school->constituency }}
                    </div>
                </div>
                <hr>

                <div class="form-group col-lg-12 mx-auto">

                    <a href="{{ route('school.edit', $school) }}" class="btn btn2 m-2 p-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

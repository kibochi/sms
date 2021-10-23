<div class="modal fade" id="newexam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=" modal-title ">New Subject</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('exam.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="form-group row">
                        <div class="col-sm-6 ">

                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject_name" @error('subject_name') is-invalid
                                @enderror class="form-control" placeholder="eg Computer">
                        </div>
                        @error('subject_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-sm-6">
                            <label for="marks">Marks</label>
                            <input type="number" class="form-control" @error('marks') is-invalid @enderror
                                name="marks" id="marks" placeholder="eg 80" autofocus required>
                        </div>
                        @error('marks')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <hr>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mt-3">
                        <button type="submit" class="btn btn2 btn-block btn-dark ">save</button>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>

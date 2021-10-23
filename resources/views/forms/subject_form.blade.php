<div class="modal fade" id="newsubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                <form action="{{ route('subject.store') }}" method="POST">
                    @csrf

                    <div class="row mt-2">

                        <div class="col-md-12 ">
                            <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                            <div class="form-group ">

                                <div class="input-group dd">
                                    <div>

                                        <input type="text"
                                            class="form-control  @error('subject_name') is-invalid @enderror"
                                            placeholder=" " name="subject_name" id="subject_name"
                                            value="{{ old('subject_name') ?? $subject->subject_name }}" required />
                                        <label for="classname">Subject Name (eg Physics)</label>


                                        @error('subject_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
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

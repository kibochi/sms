<div class="modal fade" id="newclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=" modal-title ">New Classroom</h5>
                <button class="   close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('classroom.store') }}" method="POST">
                    @csrf

                    <div class="row mt-2">

                        <div class="col-md-12 ">
                            <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                            <div class="form-group ">

                                <div class="input-group dd">
                                    <div>

                                        <input type="text"
                                            class="form-control  @error('classname') is-invalid @enderror"
                                            placeholder=" " name="classname" id="classname"
                                            value="{{ old('classname') }}" required />
                                        <label for="classname">Class Name (eg Grade one)</label>


                                        @error('classname')
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

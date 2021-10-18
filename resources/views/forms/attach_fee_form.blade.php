<div class="modal fade" id="newfee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form action="{{ route('studentfee.store') }}" method="POST">
                    <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">

                    <div class="form-group row">

                        <div class="col-md-12">
                            <label for="amount">Paid Fees Amount</label>
                            <input type="number" class="form-control" @error('amount') is-invalid @enderror
                                name="amount" id="amount" placeholder="eg 80" autofocus required>
                        </div>
                        @error('amount')
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


                    @csrf

                </form>
            </div>
        </div>
    </div>
</div>

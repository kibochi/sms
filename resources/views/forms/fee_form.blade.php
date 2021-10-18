<div class="modal fade" id="newfee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=" modal-title ">New Fee</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fee.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">

                    <div class="form-group row">
                        <div class="col-sm-4">

                            <label for="fee">Fee Name</label>
                            <input type="text" id="fee" name="fee_name" @error('fee_name') is-invalid @enderror
                                class="form-control" placeholder="eg Lunch Fee">
                        </div>
                        @error('fee_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="col-sm-4">
                            <label for="amount">Fees Amount</label>
                            <input type="number" class="form-control" @error('amount') is-invalid @enderror
                                name="amount" id="amount" placeholder="eg 80" autofocus required>
                        </div>
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="col-sm-4">
                            <label for="duration">Fees Duration</label>
                            <input type="text" class="form-control" @error('duration') is-invalid @enderror
                                name="duration" id="duration" placeholder="Monthly,Year," autofocus required>
                        </div>
                        @error('duration')
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

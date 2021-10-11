<div class="row mt-2">

    <div class="col-md-12 ">
        <div class="form-group ">

            <div class="input-group dd">
                <div>

                    <input type="text" class="form-control  @error('classname') is-invalid @enderror" placeholder=" "
                        name="classname" id="classname" value="{{ old('classname') }}" required />
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

<div class="row">
    <div class="col-md-2 ml-auto">
        <button class="btn btn-outline-dark" id="addclass"><i class="fa fa-plus"></i></button>
    </div>
</div>


<hr>

<!-- Submit Button -->
<div class="form-group col-lg-12 mx-auto mt-3">
    <button type="submit" class="btn btn2 btn-block btn-dark ">save</button>
</div>

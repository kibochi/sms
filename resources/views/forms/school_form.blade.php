 <div class="card shadow-lg mb-1 ">
     <div class="card-body">
         <div class="row">
             <div class="col-md-12">
                 <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
             </div>
         </div>
         <div class="row">
             <div class="col-md-7">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>
                             <input type="text" class="form-control @error('school_name') is-invalid @enderror"
                                 placeholder="" name="school_name" id="school_name"
                                 value="{{ old('school_name') ?? $school->school_name }}" autofocus required />
                             <label for="school_name">School Name</label>
                             @error('school_name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="form-group ">

                     <div class="input-group">
                         <div>
                             <input type="text" class="form-control @error('prefix_name') is-invalid @enderror"
                                 placeholder=" school prefix" name="prefix_name" id="prefix_name"
                                 value="{{ old('prefix_name') ?? $school->prefix_name }}" readonly />


                             @error('prefix_name')
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

             <div class="col-md-6">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>
                             <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                 placeholder=" " name="email" id="email" value="{{ old('email') ?? $school->email }}"
                                 autofocus required autocomplete="email" />
                             <label for="email">Email</label>
                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                 </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>
                             <input type="tel" class="form-control  @error('phone') is-invalid @enderror"
                                 placeholder=" " name="phone" id="phone" value="{{ old('phone') ?? $school->phone }}"
                                 autofocus required autocomplete="tel" min="10" max="10" />
                             <label for="phone"> Phone</label>
                             @error('phone')
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
             <div class="col-md-4">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>
                             <input type="text" class="form-control  @error('address') is-invalid @enderror"
                                 placeholder=" " name="address" id="address"
                                 value="{{ old('address') ?? $school->address }}" autofocus required />
                             <label for="address"> Address</label>
                             @error('address')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>
                             <select name="county" id="county"
                                 class="form-control @error('county') is-invalid @enderror">
                                 @foreach ($counties as $county)
                                     <option value="{{ $county->id }}">{{ $county->name }}
                                     </option>
                                 @endforeach
                             </select>
                             <label for="county">County</label>
                             @error('county')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group ">
                     <div class="input-group">
                         <div>

                             <select name="constituency" id="cons"
                                 class="form-control  @error('constituency') is-invalid @enderror">
                                 @foreach ($constituency as $cons)
                                     <option value="{{ $cons->name }}">{{ $cons->name }}
                                     </option>
                                 @endforeach

                             </select>
                             <label for="cons">Constituency</label>
                             @error('constituency')
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
         <div class="clearfix"></div>
         <div class="col-lg-12 mx-auto mt-3">

             <button type="submit" class="btn btn-block btn-dark w-100">Save</button>
         </div>
     </div>

 </div>

 @push('scripts')

 @endpush

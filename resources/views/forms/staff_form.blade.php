 <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
 <div class="row">
     <div class="col-md-3">

         <div class=" card img ">
             <div class="card-body">
                 <div class="file-upload">
                     <div class="image-upload-wrap">
                         <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                         <div class="drag-text">
                             <h5>Drag and drop your profile Picture </h5>
                         </div>
                     </div>
                     <div class="file-upload-content">
                         <figure>
                             <img class="file-upload-image" src="{{ asset('storage/' . $staff->hospital_profile) }}"
                                 alt=" your image" />
                         </figure>
                         <div class="image-title-wrap">
                             <button type="button " onclick="removeUpload()" class="remove-image btn btn-danger">Remove
                                 <span class="image-title">Uploaded Image</span></button>
                         </div>
                     </div>
                     <p class="text-center mt-2"><strong>Or</strong></p>
                     <button class="file-upload-btn btn" type="button"
                         onclick="$('.file-upload-input').trigger( 'click' )">Select Image</button>
                 </div>
                 {{-- <img src="{{ asset('storage/' . $staff->staff_profile) }}" alt="" class=" img-fluid"
                     id="profile-display" width="100%"> --}}

             </div>


         </div>


     </div>
     <div class="col-md-9">
         <div class="card">
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="form-group ">
                             <div class="input-group">
                                 <div>
                                     <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                         placeholder=" " name="firstname" id="firstname"
                                         value="{{ old('firstname') ?? $staff->firstname }}" autofocus required />
                                     <label for="firstname">First Name</label>
                                     @error('firstname')
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
                                     <input type="text" class="form-control @error('surname') is-invalid @enderror"
                                         placeholder=" " name="surname" id="surname"
                                         value="{{ old('surname') ?? $staff->surname }}" autofocus required />
                                     <label for="surname">SurName</label>
                                     @error('surname')
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
                                     <input type="text" class="form-control @error('othername') is-invalid @enderror"
                                         placeholder=" " name="othername" id="othername"
                                         value="{{ old('othername') ?? $staff->othername }}" autofocus required />
                                     <label for="othername">Other Name</label>
                                     @error('othername')
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
                                     <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                         placeholder=" " name="email" id="email"
                                         value="{{ old('email') ?? $staff->email }}" autofocus required
                                         autocomplete="email" />
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
                     <div class="col-md-4">
                         <div class="form-group ">
                             <div class="input-group">
                                 <div>
                                     <input type="tel" class="form-control  @error('phone') is-invalid @enderror"
                                         placeholder=" " name="phone" id="phone"
                                         value="{{ old('phone') ?? $staff->phone }}" autofocus required
                                         autocomplete="tel" min="10" max="10" />
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

                     <div class="col-md-4">
                         <div class="form-group ">
                             <div class="input-group">
                                 <div>
                                     <input type="number" class="form-control  @error('id_number') is-invalid @enderror"
                                         placeholder=" " name="id_number" id="id_number"
                                         value="{{ old('id_number') ?? $staff->id_number }}" autofocus required />
                                     <label for="id_number"> ID Number</label>
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
                                     <input type="text" class="form-control @error('staff_id') is-invalid @enderror"
                                         placeholder=" Staff Id" name="staff_id" id="staff_id"
                                         value="{{ old('staff_id') ?? $staff->staff_id }}" readonly />


                                     @error('staff_id')
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

                             <div class="inputGroupContainer">
                                 <div class="input-group">

                                     <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                         placeholder=" " name="dob" id="dob" value="{{ old('dob') ?? $staff->dob }}"
                                         autofocus required />
                                     <label for="dob">Date of Birth:</label>
                                     @error('dob')
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

                             <div class="inputGroupContainer">
                                 <div class="input-group">

                                     <select name="gender" id="gender"
                                         class="form-control @error('gender') is-invalid @enderror" autofocus>
                                         <option disabled selected>Gender</option>

                                         <option>Male</option>
                                         <option>Female</option>

                                     </select>
                                     <label for="gender">Gender:</label>
                                     @error('gender')
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
                                         value="{{ old('address') ?? $staff->address }}" autofocus required />
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

                 <div class="clearfix"></div>
                 <div class="col-lg-12 mx-auto mt-3">

                     <button type="submit" class="btn btn-block btn-dark w-100">Save</button>
                 </div>

             </div>

         </div>
     </div>

 </div>

 @push('scripts')

 @endpush

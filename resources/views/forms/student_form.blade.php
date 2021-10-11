 <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
 <div class="row">
     <div class="col-md-4">

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
                             <img class="file-upload-image" src="{{ asset('storage/' . $student->hospital_profile) }}"
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
                 {{-- <img src="{{ asset('storage/' . $student->student_profile) }}" alt="" class=" img-fluid"
                     id="profile-display" width="100%"> --}}

             </div>


         </div>


     </div>
     <div class="col-md-8">
         <div class="card">
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="form-group ">
                             <div class="input-group">
                                 <div>
                                     <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                         placeholder=" " name="firstname" id="firstname"
                                         value="{{ old('firstname') ?? $student->firstname }}" autofocus required />
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
                                         value="{{ old('surname') ?? $student->surname }}" autofocus required />
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
                                         value="{{ old('othername') ?? $student->othername }}" autofocus required />
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
                     <div class="col-md-7">
                         <div class="form-group ">

                             <div class="input-group">
                                 <div>
                                     <input type="text" class="form-control @error('student_id') is-invalid @enderror"
                                         placeholder=" student Id" name="student_id" id="student_id"
                                         value="{{ old('student_id') ?? $student->student_id }}" readonly />


                                     @error('student_id')
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
                                     <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                         placeholder=" " name="email" id="email"
                                         value="{{ old('email') ?? $student->email }}" autofocus required
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
                 </div>

                 <div class="row">
                     <div class="col-md-4">
                         <div class="form-group ">

                             <div class="input-group">
                                 <div>
                                     <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                         placeholder=" " name="dob" id="dob"
                                         value="{{ old('dob') ?? $student->dob }}" autofocus required />
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


                             <div class="input-group">
                                 <div>
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
                     <div class="col-md-4">
                         <div class="form-group ">


                             <div class="input-group">
                                 <div>
                                     <select name="class" id="class"
                                         class="form-control @error('class') is-invalid @enderror" autofocus>
                                         <option disabled selected>Class Joining</option>
                                         @foreach ($classroom as $class)
                                             <option value="{{ $class->id }}">{{ $class->classname }}</option>

                                         @endforeach


                                     </select>
                                     <label for="gender">Class Joining</label>
                                     @error('class')
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
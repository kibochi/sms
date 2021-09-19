 <div class="row">
     <!-- First Name -->
     <div class="col-md-6">
         <div class="form-group ">

             <div class="input-group dd">
                 <div>

                     <input type="text" class="form-control  @error('firstname') is-invalid @enderror" placeholder=" "
                         name="firstname" id="firstname" value="{{ old('firstname') ?? $admin->firstname }}" required
                         autocomplete="name" />
                     <label for="firstname">firstname</label>

                     @error('firstname')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
             </div>
         </div>
     </div>

     <!-- Last Name -->
     <div class="col-md-6">
         <div class="form-group ">
             <div class="input-group">
                 <div>
                     <input type="text" class="form-control  @error('lastname') is-invalid @enderror" placeholder=" "
                         name="lastname" id="lastname" value="{{ old('lastname') ?? $admin->lastname }}" required
                         autocomplete="name" />
                     <label for="lastname">lastname</label>
                     @error('lastname')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
                 </div>
             </div>
         </div>
     </div>
 </div>

 {{-- Email --}}
 <div class="row">
     <div class="col-md-7">
         <div class="form-group ">
             <div class="input-group">
                 <div>
                     <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder=" "
                         name="email" id="email" value="{{ old('email') ?? $admin->email }}" required
                         autocomplete="email" />
                     <label for="email">email</label>
                     @error('email')
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
                     <input type="tel" class="form-control @error('phone') is-invalid @enderror" placeholder=" "
                         name="phone" id="phone" value="{{ old('phone') ?? $admin->phone }}" max="10" required />
                     <label for="phone">phone</label>
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

 <!-- Submit Button -->
 <div class="form-group col-lg-12 mx-auto mt-3">

     <button type="submit" class="btn btn2 btn-block btn-dark ">Update</button>
 </div>
 <!-- Already Registered -->

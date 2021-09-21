 <div class="row">
     <div class="col-md-8 mt-4 mx-auto ">
         <div class="card ">
             <div class="card-body">

                 <div class="buttons ">
                     <button class="btn btn-danger w-100 p-3" id="delete_account">Delete Account
                         <i class="px-3 fas fa-trash"></i>
                     </button>



                     <form id="form-delete" action="{{ route('admin.destroy', $admin) }}" method="POST">
                         @csrf
                         @method('DELETE')
                     </form>
                     {{-- <form id="form-suspend" action="{{ route('staff.suspend', $admin) }}" method="POST">
                         @csrf

                     </form> --}}
                 </div>
             </div>
         </div>

     </div>
 </div>

 @push('scripts')
     <script>

     </script>

 @endpush

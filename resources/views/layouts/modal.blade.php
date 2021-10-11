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

                    @include('forms.classroom_form')

                </form>
            </div>

        </div>
    </div>
</div>

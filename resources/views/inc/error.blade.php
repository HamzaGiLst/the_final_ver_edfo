@if(count($errors)>0)
    @foreach($errors->all() as $er)
        <div class="alert alert-warning" role="alert">
            {{$er}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif
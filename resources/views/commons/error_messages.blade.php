@if(count($errors)>0)
    <ul class="alert-danger">
        @foreach($errors->all() as $error)
        <li class="ml-4">{{ $error }}</li></li>
        @endforeach        
    </ul>
@endif
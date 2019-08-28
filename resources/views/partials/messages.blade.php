
@if(isset ($errors) && count($errors) > 0)
      
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
    
@endif

@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            {{ $msg }}
        @endforeach
    @else
        {{ $data }}
    @endif
@endif

<!-- /Custom Notification -->


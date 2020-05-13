{{--<script>
    $(document).ready(function(){
        $('#fade').fadeToggle(5000);
    });
    $('.alert').alert()
</script>--}}

@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-warning alert-dismissible fade show" style="text-align: center" role="alert">
        <strong>@foreach ($errors->all() as $error)
                <p class="notify-messages">{{ $error }}</p>
            @endforeach</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

{{--@if(Session::get('error'))
    <div id="fade" class="notice error">
        <p class="notify-messages">{{ Session::get('error') }}</p>
    </div>
@endif

@if(Session::get('message'))
    <div id="fade" class="notice message">
        <p class="notify-messages">{{ Session::get('message') }}</p>
    </div>
@endif--}}

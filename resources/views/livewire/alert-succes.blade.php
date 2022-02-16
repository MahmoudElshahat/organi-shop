<div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('message') }}
    </div>
@endif
{{-- .......... --}}
<script>
    $(document).ready(function(){
    window.livewire.on('alert_remove',()=>{
        setTimeout(function(){ $(".alert-success").fadeOut('fast');
        }, 3000); // 3 secs
    });
});
</script>
</div>

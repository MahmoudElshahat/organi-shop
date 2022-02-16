 <div class="mes" >
                @if (session()->has('message'))
                    <div class="mes alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif

</div>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}

<script>
    $(".mes").delay(100).hide(0);
</script>

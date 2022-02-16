@include('front.includes.cookie')
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}" type="text/css">


    {{-- =========== live sweet alert ======== --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css" />


    {{-- ================ --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    {{-- ================== --}}
    @livewireStyles

</head>
<body>


@include('front.includes.header');


@yield('content')

@include('front.includes.footer');

{{-- footer --}}
  <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}')}}"></script>
    <script src="{{asset('assets/front/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/front/js/mixitup.min.js')}}"></script>
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/js/main.js')}}"></script>
    {{-- =============================== --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('44ce5863e11f242c2605', {
        cluster: 'mt1'
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        app.messages.push(JSON.stringify(data));
      });

      // Vue application
      const app = new Vue({
        el: '#app',
        data: {
          messages: [],
        },
      });
    </script>


{{-- ================================= --}}
{{-- {{ $slot }} --}}
@include('ajax')

{{-- =================  livewire alerts ==============--}}
@livewireScripts
{{-- ================== test 1========================= --}}
<script>
    window.addEventListener('alert', event => {
                 toastr[event.detail.type](event.detail.message,
                 event.detail.title ?? ''), toastr.options = {
                        "closeButton": true,
                        "progressBar": false,
                    }
                });
</script>
{{-- ============= test 2======================= --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <script>
        const SwalModal = (icon, title, html) => {
            Swal.fire({
                icon,
                title,
                html
            })
        }

        const SwalConfirm = (icon, title, html, confirmButtonText, method, params, callback) => {
            Swal.fire({
                icon,
                title,
                html,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText,
                reverseButtons: true,
            }).then(result => {
                if (result.value) {
                    return livewire.emit(method, params)
                }

                if (callback) {
                    return livewire.emit(callback)
                }
            })
        }

        const SwalAlert = (icon, title, timeout = 7000) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                confirmButtonColor: '#d33',
                timer: timeout,
                onOpen: toast => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon,
                title
            })
        }

        document.addEventListener('DOMContentLoaded', () => {
            this.livewire.on('swal:modal', data => {
                SwalModal(data.icon, data.title, data.text)
            })

            this.livewire.on('swal:confirm', data => {
                SwalConfirm(data.icon, data.title, data.text, data.confirmText, data.method, data.params, data.callback)
            })

            this.livewire.on('swal:alert', data => {
                SwalAlert(data.icon, data.title, data.timeout)
            })
        })
    </script>

  {{-- =========================== --}}
</body>
</html>

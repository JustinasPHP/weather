@extends('welcome')
@section('content')
    <div class="row">
        <div class="col">
            <p id="p_tag">Hello</p>
            <div id="weather_container">
                <p>Temp: {{ $weatherData->main->temp }} C</p>
                <p>Wind speed: {{ $weatherData->wind->speed}} m/s</p>
                <p>Wind direction: {{ $weatherData->wind->deg}} degrees</p>
                <p>Wind direction: {{ $weatherData->wind->degHuman }}</p>
            </div>
        </div>
    </div>
   <div class="row">
       <div class="col-md-6">
           <form action="" id="form_email">
{{csrf_token()  }}
               <div class="form-group">
                   <label for="email" class="custom-control-label">Prenumeruoti</label>
                   <input type="text" id="email" class="form-control mb-2">
                   <button type="submit" id="btn_subscribe" class="btn btn-primary">Prenumeruoti</button>
               </div>
           </form>

       </div>
   </div>

    <script>
        $(function() {
            $('#form_email').on('submit', subscribe);

            function subscribe(e) {
                let email = $('#email').val();
                console.log(e);
                e.preventDefault();
             //   alert(email);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ route('api.subscribe') }}',
                    method: 'POST',
                    data: {email: email},
                    success: function(d) {
                        console.log(d.message);
                        // alert(d.message);
                    },
                    error: function(er) {
                        console.log(er.responseJSON.message);
                        // alert(er);
                    }
                });
            }
        })
    </script>

@endsection

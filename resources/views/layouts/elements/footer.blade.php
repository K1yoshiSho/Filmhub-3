<head>
    <meta name="csrd-token" content="{{ csrf_token() }}">

</head>
<!-- Футер -->
<div class="container-xxl">
    <div class="line-long"></div>
    <div class="subscribe-section">
    <footer class="py-5">
        <!-- Первая часть -->
        <div class="row">
            <div class="col-2">
                <h5>Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Genre</a></li>
                    <li class="nav-item mb-2"><a href="contact_us.html" class="nav-link p-0 text-muted">Our contacts</a></li>
                </ul>
            </div>
            <div class="col-6 ">
                <form id="form1" method="post">
                    @csrf
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of whats new and exciting from us.</p>
                    <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="emailField" name="email" type="email" class="form-control" placeholder="Email address">
                        <button id="submitButton" class="btn btn-danger" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-6 offset-2 "></div>
        </div>
        <!-- Первая часть -->
        <!-- Иконки в телеграм -->
        <div class="d-flex justify-content-between py-2">
            <p>&copy; Yelaman & Elnara.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3">
                    <a class="link-dark" href="https://t.me/K1yoshiSho">Yelaman <img src="{{asset('img/icons/telegram.svg')}}" alt="Telegram" style="width: 25px; height: 25px; " id="icon1"></a>
                </li>
                <li class="ms-3">
                    <a class="link-dark" href="https://t.me/kryska_bolotnaya">Elnara <img src="{{asset('img/icons/telegram.svg')}}" alt="Telegram" style="width: 25px; height: 25px; " id="icon2"></a>
                </li>
            </ul>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(function (){
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#form1').on('submit', function (e){
                    e.preventDefault();
                    $("#submitButton").prop('default', true);
                    $.ajax({
                        type: 'POST',
                        url: 'layouts/elements/footer',
                        data: $(this).serialize(),
                        success: function (data){
                            if (data.success){
                                $('.subscribe-section').html('<div class="alert alert-success" role="alert">Thanks for subscribe!</div>');
                            }
                        },
                        error: function (data) {
                            var errorFromServer = JSON.parse(data.responseText);
                            $("#emailField").addClass('is-invalid');
                            var invalidFeedbackBox = $(".invalid-feedback");
                            invalidFeedbackBox.html(errorFromServer.message);
                            invalidFeedbackBox.removeClass('d-none');
                            $("#submitButton").prop('disabled', false);
                        }
                    });
                });
            });
        </script>
        <!-- Иконки в телеграм -->
    </footer>
</div>
<!-- Футер -->
</div>

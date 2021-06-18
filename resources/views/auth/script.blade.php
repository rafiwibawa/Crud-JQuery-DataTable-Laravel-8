<script>
    $(document).ready(function(){
        @if($errors->has('message'))
            $('#loginModal').modal('show');
        @endif

        $('#forgot-account').on('click', function(event){
            event.preventDefault();

            $('#sendEmailModal').modal('show');
            $('#loginModal').modal('hide');
            $('.email-alert').hide();
        })

        $('#send-email').submit(function(event){
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
            })
            .done(function(res, xhr, meta) {
                if (res.status == 200) {
                    $('.email-alert').removeClass('alert-danger')
                    $('.email-alert').addClass('alert-success')
                    $('.email-alert').text(res.message);
                    $('.email-alert').show();
                }
            })
            .fail(function(res, error) {
                $('.email-alert').removeClass('alert-success')
                $('.email-alert').addClass('alert-danger')
                $('.email-alert').text(res.responseJSON.message);
                $('.email-alert').show();
            });
        })
    })
</script>

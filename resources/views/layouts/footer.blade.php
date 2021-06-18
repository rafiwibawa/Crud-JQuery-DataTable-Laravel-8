
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  {{-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> --}}
  <script src="{{ asset('lib/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('lib/datatables/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('lib/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('lib/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('lib/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('lib/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('lib/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Bootstrap core JavaScript-->
  {{-- <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script> --}}
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  {{-- <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script> --}}

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script> --}}

  <script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            statusCode: {
                403: function(){
                    window.location = '{{url('login')}}';
                },
                419: function(){
                    window.location = '{{url('login')}}';
                }
            }
        });

        function unescapeHtml(text) {
            return text
                .replace(/&amp;/g, "&")
                .replace(/&lt;/g, "<")
                .replace(/&gt;/g, ">")
                .replace(/&quot;/g, '"')
                .replace(/&#039;/g, "'");
        }

        function escapeHtml(text) {
            return text
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, '&quot;')
                .replace(/'/g, "&#039;");
        }

        function time_zone(){
            let tz = Intl.DateTimeFormat().resolvedOptions().timeZone;

            if(tz == 'Asia/Makassar'){
                return 'Asia/Makassar';
            }else if(tz == 'Asia/Jayapura'){
                return 'Asia/Jayapura';
            }else{
                return 'Asia/Jakarta'
            }
        }

        function time_offset(){
            let tz = Intl.DateTimeFormat().resolvedOptions().timeZone;

            if(tz == 'Asia/Makassar'){
                return 'WITA';
            }else if(tz == 'Asia/Jayapura'){
                return 'WIT';
            }else{
                return 'WIB'
            }
        }

        function ellipsis_text(data, length){
            if(data.length > length){
                return `<span title="${data}">${data.substr( 0, length ) +'…'}</span>`
            }else{
                return data
            }
        }

        function string_replace(string){
            if(string){
                return string.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
            }
        }

    function btn_loading(action) {
        if (action == 'start') {
            $('.btn-loading').html('<div id="loading" class="mr-1"></div> Loading...');
            $('.btn-loading').addClass('d-flex align-items-center');
            $('.btn-loading').attr('disabled', true)
        } else {
            $('.btn-loading').html('Submit');
            $('.btn-loading').removeClass('d-flex align-items-center');
            $('.btn-loading').attr('disabled', false)
        }
    }

    window.searchDelay = function (callback, ms) {
        var timer = 0;
        return function () {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

</script>
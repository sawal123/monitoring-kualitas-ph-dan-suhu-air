@extends('master.app')

@section('content')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">


        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            {{-- @include('particle.cardstatus') --}}
            <div class="row items-push" id="card">
            </div>
            <!-- END Overview -->

            <!-- Statistics -->
            <div class="row">
                <div class="block block-rounded col-xl-8 col-xxl-9 d-flex flex-column">
                    @include('particle.tablemonitoring')
                </div>

                <div class="col-xl-4 col-xxl-3  flex-column" id="graphicmonitoring">
                    {{-- @include('particle.graphicmonitoring') --}}
                </div>
            </div>

            <!-- END Recent Orders -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection

<script>
    function card() {
        $.ajax({
            url: "{{ url('/cardstatus') }}",
            type: "GET",
            cache: false,
            success: function(data) {
                // alert(data);
                $('#card').html(data);
            }
        });
    }
    setInterval(card, 1000);

    function tableajax() {
        $.ajax({
            url: "{{ url('/tableajax') }}",
            type: "GET",
            cache: false,
            success: function(data) {
                // alert(data);
                $('#tableajax').html(data);
            }
        });
    }
    setInterval(tableajax, 1000);

    function graphicmonitoring() {
        $.ajax({
            url: "{{ url('/graphicmonitoring') }}",
            type: "GET",
            cache: false,
            success: function(data) {
                // alert(data);
                $('#graphicmonitoring').html(data);
            }
        });
    }
    setInterval(graphicmonitoring, 2000);
</script>

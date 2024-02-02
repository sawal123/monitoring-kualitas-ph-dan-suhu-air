<!-- Last 2 Weeks -->
<!-- Chart.js Charts is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
<!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->

<div class="row items-push flex-grow-1">
    <div class="col-md-6 col-xl-12">
        <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $ph->phair }}</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">PH Air</dd>
                </dl>
                <div>
                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                        <i class="fa fa-caret-up me-1"></i>
                        {{ $ph->deskripsi }}
                    </div>
                </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Orders Chart Container -->
                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-12">
        <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
                <dl class="mb-0">
                    <dt class="fs-3 fw-bold">{{ $sh->suhu }}&deg;</dt>
                    <dd class="fs-sm fw-medium text-muted mb-0">Suhu Air</dd>
                </dl>
                <div>
                    <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                        <i class="fa fa-caret-up me-1"></i>
                        {{ $sh->deskripsi }}
                    </div>
                </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
                <!-- Total Earnings Chart Container -->
                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
            </div>
        </div>
    </div>

</div>
<!-- END Last 2 Weeks -->
@include('particle.jschart')



@php
// error_reporting(0);
    if($stph==0)
    {
        $bg='bg-warning';
        $color="white";
    }
    else {
        $bg = '';
        $color="";
    }
    if($stsuhu==0)
    {
        $bgs="bg-warning";
        $colors="white";
    }
    else {
        $bgs='';
        $colors="";
    }
@endphp
    @foreach ($data as $key => $value)
        <div class="col-sm-6 col-lg-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column h-100 mb-0 {{$key==0 ? $bg : '';}} {{$key==1 ? $bgs : '';}} ">
                <div
                    class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold" style="color:{{$key==0 ? $color : ''; }} {{$key==1 ? $colors : '';}} ">{{ $value }}
                            {{-- {{$key == 1 ? '&deg;' : '';}} --}}
                            @php
                                if ($key == 1 || $key == 3) {
                                    echo '&deg;';
                                } elseif ($key == 2) {
                                    echo 'Kali';
                                }
                                
                            @endphp
                        </dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" >
                           <p style="margin-bottom:0px; color:{{$key==0 ? $color : ''; }} {{$key==1 ? $colors : '';}}"> {{ $stat[$key] }} </p>
                        </dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="{{ $icon[$key] }} fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="javascript:void(0)">
                        <span>{{ $desk[$key] }}</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Pending Orders -->
        </div>
    @endforeach



@foreach ($phtable as $key => $phtables)
                    <tr>
                        <td class="text-center fs-sm">{{ $key + 1 }}</td>
                        <td class="fw-semibold fs-sm"> {{ $shtable[$key]->suhu }} &deg;</td>
                        <td class="fw-semibold fs-sm">
                            {{ $phtables->phair }}
                        </td>
                        <td class="fw-semibold fs-sm text-center">
                            <span
                                class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">
                                @php
                                    if ($phtables->status == '1' && $shtable[$key]->status == '1') {
                                        echo 'Normal';
                                    } elseif ($phtables->status == '0' && $shtable[$key]->status == '1') {
                                        echo 'PH Tidak Normal';
                                    } elseif ($phtables->status == '1' && $shtable[$key]->status == '0') {
                                        echo 'Suhu Tidak Normal';
                                    } else {
                                        echo 'WARNING';
                                    }
                                @endphp</span>
                        </td>
                        <td class="text-center">
                            <span class="text-muted fs-sm">{{ date('Y-m-d', strtotime($phtables->created_at)) }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-muted fs-sm">{{ date('H:i:s', strtotime($phtables->created_at)) }}</span>
                        </td>

                    </tr>
                @endforeach
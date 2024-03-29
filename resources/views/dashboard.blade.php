{{-- @dd($arp); --}}
@extends('app.main')
@section('header')
    <div class="container-xl">
        <div class="row row-deck row-cards mt-1 ">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader"> <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-rotate-clockwise" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4.05 11a8 8 0 1 1 .5 4m-.5 5v-5h5"></path>
                                </svg> system date & time</div>
                        </div>



                        <div class=" mb-1">
                            <div>Time & date : {{ $time }} </div>
                            <span>Uptime : {{ $tim }} </span>
                            <div>Time Zone : {{ $ntp }} </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">75% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader"> <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-info-circle" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg> Info</div>
                        </div>
                        <div class=" mb-1">
                            <div>Name : {{ $identitas }} </div>
                            <div>Model : {{ $router }} </div>
                            <div>Router OS : {{ $versi }} </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                <span class="visually-hidden">75% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-2">RouterBoard</p>
                        <div class="progress progress-separated mb-2">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $cpu }}%; ">
                                {{ $cpu }}% - {{ $frequency }} MHz</div>
                            <div class="progress-bar bg-info" role="progressbar"
                                style="width: {{ \App\Helpers\RouterOs::bytes3($memory, 2) }}%;">
                                {{ \App\Helpers\RouterOs::bytes($memory, 2) }}</div>
                            <div class="progress-bar bg-warning" role="progressbar"
                                style="width: {{ \App\Helpers\RouterOs::bytes3($hdd, 2) }}%;">
                                {{ \App\Helpers\RouterOs::bytes($hdd, 2) }}</div>

                        </div>
                        <div class="row">
                            <div class="col-auto d-flex align-items-center pe-2">
                                <span class="legend me-2 bg-primary"></span>
                                <span>Cpu Load</span>
                                <span
                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">{{ $cpu }}%</span>
                            </div>
                            <div class="col-auto d-flex align-items-center px-2">
                                <span class="legend me-2 bg-info"></span>
                                <span>Free Memory</span>
                                <span
                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">{{ \App\Helpers\RouterOs::bytes($memory, 2) }}</span>
                            </div>
                            <div class="col-auto d-flex align-items-center px-2">
                                <span class="legend me-2 bg-warning"></span>
                                <span>free Hdd</span>
                                <span
                                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">{{ \App\Helpers\RouterOs::bytes($hdd, 2) }}</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-1">
            <div class="row row-cards">
                <div class="col-sm-6 col-lg-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span
                                        class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wifi"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                            <path d="M9.172 15.172a4 4 0 0 1 5.656 0"></path>
                                            <path d="M6.343 12.343a8 8 0 0 1 11.314 0"></path>
                                            <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium" id="hsup">
                                        {{ $hotspot_active }}
                                    </div>
                                    <div class="text-muted">
                                        Hotspot Active
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span
                                        class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium" id="hsuser">
                                        {{ $hotspot_user }}
                                    </div>
                                    <div class="text-muted">
                                        Users Hotspot
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <div class="col-12 mt-1">
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-6">
                <div class="card card-sm ">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span
                                    class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-network"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9a6 6 0 1 0 12 0a6 6 0 0 0 -12 0" />
                                        <path d="M12 3c1.333 .333 2 2.333 2 6s-.667 5.667 -2 6" />
                                        <path d="M12 3c-1.333 .333 -2 2.333 -2 6s.667 5.667 2 6" />
                                        <path d="M6 9h12" />
                                        <path d="M3 20h7" />
                                        <path d="M14 20h7" />
                                        <path d="M10 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M12 15v3" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium" id="hsuser">
                                    {{ $ppp_active }}
                                </div>
                                <div class="text-muted">
                                    PPPoE Aktive
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="card card-sm ">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span
                                    class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-network"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9a6 6 0 1 0 12 0a6 6 0 0 0 -12 0" />
                                        <path d="M12 3c1.333 .333 2 2.333 2 6s-.667 5.667 -2 6" />
                                        <path d="M12 3c-1.333 .333 -2 2.333 -2 6s.667 5.667 2 6" />
                                        <path d="M6 9h12" />
                                        <path d="M3 20h7" />
                                        <path d="M14 20h7" />
                                        <path d="M10 20a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M12 15v3" />
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium" id="hsuser">
                                    {{ $ppp_user }}
                                </div>
                                <div class="text-muted">
                                    Users PPPoE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <div class="col-md-7 mt-1">
        <div class="card ">
            <div class="card-body">
                <select name="interface" id="interface" onchange="requestData()">
                    @foreach ($ether1 as $item)
                        <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
                <div id="graph">
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="nilaiRX" value="{{ \App\Helpers\RouterOs::bytes($rx, 2) }}">
    <input type="hidden" id="nilaiTX" value="{{ \App\Helpers\RouterOs::bytes($tx, 2) }}">

    <div class="col-md-5 mt-1">
        <div class="card " style="height: 29rem">
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                <div class="h5">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter" style="width: 500px;">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>User</th>
                                    <th>Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($log as $data)
                                    <tr>
                                        <td>{{ $data['time'] }}</td>
                                        <td>{{ $data['ipAddress'] }}</td>
                                        <td>{{ $data['message'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

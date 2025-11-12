@extends('dashboard.layouts.master', ['titlePage' => 'لوحة التحكم'])
@section('title', 'لوحة التحكم')
@section('home_active', 'لوحة التحكم')
@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12 mt-4">
                    <div class="card rounded shadow border-0 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h6 class="mb-0">Monthly Sales Report</h6>

                            <div class="text-end">
                                <h5 class="mb-0">2384</h5>
                                <h6 class="text-muted mb-0">September</h6>
                            </div>
                        </div>
                        <div id="sale-chart"></div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-12 mt-4">
                    <div class="card rounded shadow border-0 p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <h6 class="mb-0">Weekly Top Products</h6>

                            <div class="text-end">
                                <h6 class="text-muted mb-0">Last Week</h6>
                            </div>
                        </div>
                        <div id="top-product-chart"></div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end col-->

        <div class="col-xl-8 mt-4">
            <div class="card border-0">
                <div class="d-flex justify-content-between p-4 shadow rounded-top">
                    <h6 class="fw-bold mb-0">Invoice List</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="dropdown dropdown-primary list-inline-item">
                            <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ti ti-dots-vertical"></i></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                <a class="dropdown-item text-dark" href="#"> Paid</a>
                                <a class="dropdown-item text-dark" href="#"> Unpaid</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="table-responsive shadow rounded-bottom" data-simplebar style="height: 545px;">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                            <tr>
                                <th class="border-bottom p-3">No.</th>
                                <th class="border-bottom p-3" style="min-width: 220px;">Client Name
                                </th>
                                <th class="text-center border-bottom p-3">Amount</th>
                                <th class="text-center border-bottom p-3" style="min-width: 150px;">
                                    Generate(Dt.)</th>
                                <th class="text-center border-bottom p-3">Status</th>
                                <th class="text-end border-bottom p-3" style="min-width: 100px;">
                                    Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d01</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/01.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Howard Tanner</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$253</td>
                                <td class="text-center p-3">23th Sept 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d02</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/02.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Wendy Filson</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$482</td>
                                <td class="text-center p-3">11th Sept 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                        Paid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d03</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/03.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Faye Bridger</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$546</td>
                                <td class="text-center p-3">2nd Sept 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d04</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/04.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Ronald Curtis</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$154</td>
                                <td class="text-center p-3">1st Sept 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d05</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/05.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Melissa Hibner</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$458</td>
                                <td class="text-center p-3">1st Sept 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                        Paid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d06</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/06.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Randall Case</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$548</td>
                                <td class="text-center p-3">28th Aug 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                        Paid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d07</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/07.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Jerry Morena</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$658</td>
                                <td class="text-center p-3">25th Aug 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d08</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/08.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Lester McNally</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$457</td>
                                <td class="text-center p-3">20th Aug 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d09</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/09.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Christopher Burrell</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$586</td>
                                <td class="text-center p-3">15th Aug 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                        Paid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Start -->
                            <tr>
                                <th class="p-3">#d10</th>
                                <td class="p-3">
                                    <a href="#" class="text-primary">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('dashboard') }}/assets/images/client/10.jpg"
                                                class="avatar avatar-ex-small rounded-circle shadow" alt="">
                                            <span class="ms-2">Mary Skeens</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center p-3">$325</td>
                                <td class="text-center p-3">10th Aug 2021</td>
                                <td class="text-center p-3">
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        Unpaid
                                    </div>
                                </td>
                                <td class="text-end p-3">
                                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                </td>
                            </tr>
                            <!-- End -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
@endsection

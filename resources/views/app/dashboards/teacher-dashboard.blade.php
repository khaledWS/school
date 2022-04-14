@extends('layouts.dash')
@section('content')
<!-- begin::Container-->
<div id="kt_content_container" class="container-xxl">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xl-6">
            <div class="card card-xl-stretch">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bolder mb-2 text-dark">اعلانات</span>
                    </h3>
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_teacher">Teacher
                                    Notices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_student">Student Notices</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5 hover-scroll  h-200px">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="kt_tab_teacher" role="tabpanel">
                            <!--begin::Timeline-->
                            <div class="timeline-label">
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14/11</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="fw-mormal timeline-content text-muted ps-3">غدا اجازة
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Content-->
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bolder text-gray-800 ps-3">Make
                                        deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                        poorly driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order
                                        placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                        poorly driving and keep structure keep great</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Desc-->
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order
                                        placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="timeline-item mb-9">
                                    <!--begin::Label-->
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                    <!--end::Label-->
                                    <!--begin::Badge-->
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <!--end::Badge-->
                                    <!--begin::Text-->
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI
                                        Mobile app launch preparion meeting</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <div class="tab-pane fade show" id="kt_tab_student" role="tabpanel">
                        </div>
                    </div>
                </div>
                <!--end: Card Body-->
            </div>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
            <div class="card card-xl-stretch">
                <!--begin::Header-->
                <div class="card-header align-items-center border-0">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bolder mb-2 text-dark">الصفوف</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-5 hover-scroll  h-200px">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::table row-->
                                <tr>
                                    <th class="min-w-90px p-0">الصف</th>
                                    <th class="min-w-90px p-0">عدد الطلاب</th>
                                </tr>
                                <!--end::table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td class="fs-6 fw-bolder text-gray-800">1-3</td>
                                    <td class="fs-6 fw-bolder text-gray-400">25</td>
                                </tr>

                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end: Card Body-->
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 g-xl-8 ">
        <!--begin::Col-->
        <div class="col-xl-12">
            <!--begin::card-->
            <div class="card">
                <!--begin::card header-->
                <div class="card-header position-relative py-0 border-bottom-2">
                    <h3 class="card-title fw-bolder mb-2 text-dark">الجدول الدراسي</h3>
                    <!--begin::card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::nav-->
                        <ul class="nav nav-tabs nav-line-tabs d-mt-3">
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0 active" data-bs-toggle="tab" href="#tab_pane_sat">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">السبت</span>
                                    <!--end::Title-->
                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_sun">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">الأحد</span>
                                    <!--end::Title-->
                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_mon">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">الأثنين</span>
                                    <!--end::Title-->
                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_tue">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">الثلاثاء</span>
                                    <!--end::Title-->

                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_wed">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">الأربعاء</span>
                                    <!--end::Title-->

                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_thr">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">الخميس</span>
                                    <!--end::Title-->

                                </a>
                            </li>
                            <!--end::nav item-->

                        </ul>
                        <!--end::nav-->
                    </div>
                    <!--end::card toolbar-->
                </div>
                <!--end::card header-->
                <!--begin::card body-->
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab_pane_sat" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">Class
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">Class
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_sun" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_mon" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_tue" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_wed" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_thr" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                    </div>

                </div>
                <!--end::card body-->
            </div>
            <!--end::card-->
        </div>
        <!--end::col-->
    </div>
    <!--end::Row-->


    <!--begin::Row-->
    <div class="row gy-5 g-xl-8 mt-1">
        <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::card-->
            <div class="card h-xl-100">
                <!--begin::card-header-->
                <div class="card-header position-relative py-0 border-bottom-2">
                    <h3 class="card-title">جدول الأمتحانات</h3>
                    <!--begin::card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::nav-->
                        <ul class="nav nav-tabs nav-line-tabs d-mt-3">
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0 active" data-bs-toggle="tab" href="#tab_pane_mid">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">نصفي</span>
                                    <!--end::Title-->
                                </a>
                            </li>
                            <!--end::nav item-->
                            <!--begin::nav item-->
                            <li class="nav-item p-0 ms-0 me-8">
                                <a class="nav-link px-0" data-bs-toggle="tab" href="#tab_pane_final">
                                    <!--begin::Title-->
                                    <span class="nav-text fw-bold fs-4 mb-3">نهائي</span>
                                    <!--end::Title-->
                                </a>
                            </li>
                            <!--end::nav item-->

                        </ul>
                        <!--end::nav-->
                    </div>
                    <!--end::card toolbar-->
                </div>
                <!--end::card-header-->
                <!--begin::card body-->
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab_pane_sat" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">14/7/2021
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">7:-7:40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">14/7/2021
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">7:-7:40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">14/7/2021
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">7:-7:40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">14/7/2021
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">7:-7:40
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">14/7/2021
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">7:-7:40
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>

                        <div class="tab-pane fade" id="tab_pane_sun" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>

                        <div class="tab-pane fade" id="tab_pane_mon" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_tue" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_wed" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <div class="tab-pane fade" id="tab_pane_thr" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                    </div>
                </div>
                <!--end::card body-->
            </div>
            <!--end::card-->
        </div>
        <!--end::Col-->
        {{-- <!--begin::Col-->
        <div class="col-xl-6">
            <!--begin::card-->
            <div class="card h-xl-100 ">
                <!--begin::card-header-->
                <div class="card-header position-relative py-0 border-bottom-2">
                    <h3 class="card-title">نتائج الأمتحانات</h3>
                </div>
                <!--end::card-header-->
                <!--begin::card body-->
                <div class="card-body  hover-scroll h-150px">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab_pane_sat" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0">العلامة الكاملة</th>
                                            <th class="min-w-100px p-0">درجتك</th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-400">نصفي
                                            </td>

                                            <td class="fs-6 fw-bolder text-gray-800">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-800">10</td>
                                            <td class="fs-6 fw-bolder text-gray-400">10
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>

                        <div class="tab-pane fade" id="tab_pane_sun" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::table row-->
                                        <tr>
                                            <th class="min-w-40px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-90px p-0"></th>
                                            <th class="min-w-100px p-0"></th>
                                        </tr>
                                        <!--end::table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">Break 20min</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fs-6 fw-bolder text-gray-800">1</td>
                                            <td class="fs-6 fw-bolder text-gray-800">7:-7:40
                                            </td>
                                            <td class="fs-6 fw-bolder text-gray-400">Math</td>
                                            <td class="fs-6 fw-bolder text-gray-400">teacher
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-light rounded text-gray-600 fs-8 fw-bolder px-3 py-2"
                                                colspan="4">end</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>

                    </div>
                </div>
                <!--end::card body-->
            </div>
            <!--end::card-->
        </div>
        <!--end::Col--> --}}
    </div>
    <!--end::Row-->


</div>
<!--end::Container -->
@endsection

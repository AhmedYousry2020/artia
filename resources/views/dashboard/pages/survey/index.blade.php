@extends('dashboard.layout.master')
@section('content')

<div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bold my-1 fs-3">servey Listing</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="../../demo2/dist/index.html" class="text-white text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">servey Listing</li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
         <!--begin::Actions-->
         <div class="d-flex align-items-center py-3 py-md-1">
            <!--begin::Wrapper-->
            <div class="me-4">
                <!--begin::Menu-->
                <a href="{{route('dashboard.changeLanguage.ar')}}" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-filter fs-5 me-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Arabic</a>

                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="{{route('dashboard.changeLanguage.en')}}" data-bs-theme="light" class="btn bg-body btn-active-color-primary">English</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>



<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Category-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Category">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_category_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="



                            " style="width: 29.9px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1">
                                </div>
                            </th><th class="min-w-250px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 784.388px;">User Name</th>
                            <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Category Type: activate to sort column ascending" style="width: 208.6px;">Email</th>
                            <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Category Type: activate to sort column ascending" style="width: 208.6px;">Mobile</th>
                            <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1" aria-label="Category Type: activate to sort column ascending" style="width: 208.6px;">Surevy</th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 142.863px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">

                        @foreach($survey as $info)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <p class="text-gray-800 text-hover-primary fs-5  mb-1">{{$info->name}}</p>
                                        <!--end::Title-->

                                    </div>
                                </div>
                            </td>
                            <td>
                                <!--begin::Badges-->
                                <div class="d-flex">
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <p class="text-gray-800 text-hover-primary fs-5 mb-1">{{$info->email}}</p>
                                        <!--end::Title-->

                                    </div>
                                </div>                                <!--end::Badges-->
                            </td>
                            <td>
                                <!--begin::Badges-->
                                <div class="d-flex">
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <p class="text-gray-800 text-hover-primary fs-5 mb-1">{{$info->mobile}}</p>
                                        <!--end::Title-->

                                    </div>
                                </div>                                  <!--end::Badges-->
                            </td>

                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-warning">
                                    <ul class="list mbr-fonts-style display-7">
                                        @foreach(json_decode($info->survey) as $index => $q)

                                    <li class="list-inline-item">{{$index}}:{{$q == 1 ? __('general.agree') : __('general.disagree') }}</li>
                                    @endforeach

                                    </ul>
                                </div>

                                <!--end::Badges-->
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    <!--end::Table body-->
                </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_ecommerce_category_table_length"><label><select name="kt_ecommerce_category_table_length" aria-controls="kt_ecommerce_category_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_ecommerce_category_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_ecommerce_category_table_previous"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_ecommerce_category_table_next"><a href="#" aria-controls="kt_ecommerce_category_table" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Category-->
    </div>
    <!--end::Post-->
</div>
@endsection

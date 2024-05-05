

@extends('dashboard.layout.master')
@section('content')
<div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bold my-1 fs-3">Edit Faq</h1>
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
                <li class="breadcrumb-item text-white opacity-75">Edit Faq</li>
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
                <a href="#" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-filter fs-5 me-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>Filter</a>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac84001338">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac84001338" data-allow-clear="true" data-select2-id="select2-data-7-01ig" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-9-vkng"></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-mi3r" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-hu4z-container" aria-controls="select2-hu4z-container"><span class="select2-selection__rendered" id="select2-hu4z-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1">
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-semibold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="#" data-bs-theme="light" class="btn bg-body btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>

<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <form id="faq-create" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
            @csrf
            @method('PUT')

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Faq Details</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                            <!--begin::Label-->
                            <label class="required form-label form-control-solid">Faq Question English</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="question_en" value="{{$faqs->question_en}}" class="form-control mb-2" placeholder="Faq Question English">
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">A faq question english is required and recommended to be unique.</div>
                            <!--end::Description-->
                            @error('question_en')
                            <div class="fv-plugins-message-container invalid-feedback"><div data-field="title" data-validator="notEmpty">{{$message}}</div> </div>
                            @enderror

                        </div>
                        <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                                <!--begin::Label-->
                                <label class="required form-label form-control-solid">Faq Question Arabic</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="question_ar" value="{{$faqs->question_ar}}" class="form-control mb-2" placeholder="Faq Question Arabic">
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">A doctor name arabic is required and recommended to be unique.</div>
                                <!--end::Description-->
                                @error('question_ar')
                                <div class="fv-plugins-message-container invalid-feedback"><div data-field="title" data-validator="notEmpty">{{$message}}</div> </div>
                                @enderror

                            </div>
                            <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="required form-label form-control-solid">Faq Answer English</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <textarea class="required form-control" name="answer_en"  rows="10" >{{$faqs->answer_en}}</textarea>
                            <!--end::Editor-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set a faq answer english for better visibility.</div>
                            <!--end::Description-->
                            @error('answer_en')
                            <div class="fv-plugins-message-container invalid-feedback"><div data-field="title" data-validator="notEmpty">{{$message}}</div> </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                             <!--begin::Input group-->
                             <div class="mb-10">
                                <!--begin::Label-->
                                <label class="required form-label form-control-solid">Faq Answer Arabic</label>
                                <!--end::Label-->
                                <!--begin::Editor-->
                                <textarea class="required form-control" name="answer_ar"  rows="10" >{{$faqs->answer_ar}}</textarea>
                                <!--end::Editor-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a faq answer arabic for better visibility.</div>
                                <!--end::Description-->
                                @error('answer_ar')
                                <div class="fv-plugins-message-container invalid-feedback"><div data-field="title" data-validator="notEmpty">{{$message}}</div> </div>
                                @enderror
                            </div>
                            <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->

                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="../../demo2/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
    </div>
    <!--end::Post-->
</div>

@endsection
@section('scripts')
<script src="{{asset('dashboard-assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('dashboard-assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
<script src="{{asset('dashboard-assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('dashboard-assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('dashboard-assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('dashboard-assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('dashboard-assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('dashboard-assets/js/custom/utilities/modals/users-search.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#faq-create').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: '{!! route('dashboard.faqs.update',$faqs->id) !!}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the response message
                    if(response.success == true)
                    {
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {

                                // Redirect to customers list page
                                window.location = response.redirect;
                            }
                        });
                    }else{
                        var errorString = '<ul style="list-style-type: none;font-size:large;font-weight:500">';
                        $.each( response.errors, function( key, value) {
                            errorString += '<li style="padding:5px">' + value + '</li>';
                        });
                        errorString += '</ul>';
                        Swal.fire({
                            icon: "error",
                            html: errorString,
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }

                },
                error: function(response) {
                    Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                }
            });
        });
    });
</script>


@endsection
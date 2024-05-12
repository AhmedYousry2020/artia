
@extends('dashboard.layout.master')
@section('content')

					<!--begin::Toolbar-->
					<div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bold my-1 fs-3">Dashboard</h1>
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
									<li class="breadcrumb-item text-white opacity-75">Dashboards</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-white opacity-75 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">Default</li>
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
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac872da93e">
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
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac872da93e" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
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
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
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
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
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
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">

							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-12">
									<!--begin::Mixed Widget 2-->
									<div class="card card-xl-stretch">
										<!--begin::Header-->
										<div class="card-header border-0 bg-danger py-5">
											<h3 class="card-title fw-bold text-white">Statistics</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<i class="ki-duotone ki-category fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>

												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body p-0">
											<!--begin::Chart-->
											<div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
											<!--end::Chart-->
											<!--begin::Stats-->
											<div class="card-p mt-n20 position-relative">
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
														<i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
														<a href="{{route('dashboard.blogs.index')}}" class="text-warning fw-semibold fs-6">Blogs</a>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
														<i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<a href="{{route('dashboard.doctors.index')}}" class="text-primary fw-semibold fs-6">Doctors</a>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row g-0">
													<!--begin::Col-->
													<div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
														<i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<a href="{{route('dashboard.consultations.index')}}" class="text-danger fw-semibold fs-6 mt-2">Consultation</a>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
														<i class="ki-duotone ki-sms fs-2x text-success my-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<a href="{{route('dashboard.services.index')}}" class="text-success fw-semibold fs-6 mt-2">Services</a>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Stats-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Mixed Widget 2-->
								</div>
								<!--end::Col-->

							</div>
							<!--end::Row-->

							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 2-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Doctors</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<i class="ki-duotone ki-category fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.doctors.create')}}" class="menu-link px-3">New Docotor</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.doctors.index')}}" class="menu-link px-3">All Doctors</a>
													</div>
													<!--end::Menu item-->

													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->

												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
                                            @foreach($doctors as $doctor)
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img src="{{asset('storage/uploads/'.$doctor->image)}}" class="" alt="" />
												</div>
												<!--end::Avatar-->
												<!--begin::Text-->
												<div class="flex-grow-1">
													<a href="{{route('dashboard.doctors.index')}}" class="text-dark fw-bold text-hover-primary fs-6">{{$doctor->{'name_'.getLocale()} }}</a>
													<span class="text-muted d-block fw-bold">{{$doctor->{'description_'.getLocale()} }}</span>
												</div>
												<!--end::Text-->
											</div>
											<!--end::Item-->
                                            @endforeach
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 6-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bold text-dark">Consultations</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<i class="ki-duotone ki-category fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Quick Actions</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.consultations.create')}}" class="menu-link px-3">Create Consultation</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.consultations.index')}}" class="menu-link px-3">All Consultations</a>
													</div>
													<!--end::Menu item-->


												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-0">
                                            @foreach($consultations as $consultation)
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
												<i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">{{$consultation->{'name_'.getLocale()} }}</a>
													<span class="text-muted fw-semibold d-block">{{$consultation->created_at->diffForHumans()}}</span>
												</div>
												<!--end::Title-->

											</div>
											<!--end::Item-->
                                            @endforeach
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 6-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 4-->
									<div class="card card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Blogs</span>
												<span class="text-muted mt-1 fw-semibold fs-7">Latest Blogs</span>
											</h3>
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<i class="ki-duotone ki-category fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</button>
												<!--begin::Menu 3-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
													<!--begin::Heading-->
													<div class="menu-item px-3">
														<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Quick Actions</div>
													</div>
													<!--end::Heading-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.blogs.create')}}" class="menu-link px-3">Create Blog</a>
													</div>
													<!--end::Menu item-->

													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{route('dashboard.blogs.create')}}" class="menu-link px-3">All Blogs</a>
													</div>
													<!--end::Menu item-->

													<!--begin::Menu item-->
													<div class="menu-item px-3 my-1">
														<a href="#" class="menu-link px-3">Settings</a>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 3-->
												<!--end::Menu-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
                                            @foreach($blogs as $blog)
											<!--begin::Item-->
											<div class="d-flex align-items-sm-center mb-7">
												<!--begin::Symbol-->
												<div class="symbol symbol-50px me-5">
													<span class="symbol-label">
														<img src="{{asset('storage/uploads/'.$blog->image)}}" class="h-50 align-self-center" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Section-->
												<div class="d-flex align-items-center flex-row-fluid flex-wrap">
													<div class="flex-grow-1 me-2">
														<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{$blog->{'title_'.getLocale()} }}</a>
													</div>
													<span class="badge badge-light fw-bold my-2">{{$blog->created_at->diffForHumans()}}</span>
												</div>
												<!--end::Section-->
											</div>
											<!--end::Item-->
                                            @endforeach
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->

@endsection

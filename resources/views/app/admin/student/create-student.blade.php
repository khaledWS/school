@extends('layouts.dash')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            {{-- e-lg-15 --}}
            <div class="flex-lg-row-fluid m order-2 order-lg-1 mb-10 mb-lg-0">
                <!--begin::Form-->
                <form id="add_student_form"
                    class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ route('create-student') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                            role="tablist">
                            <!--begin:::Tab item-->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#add-student-general" aria-selected="true" role="tab">{{ __("general") }}</a>
                            </li>
                            <!--end:::Tab item-->
                            <!--begin:::Tab item-->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1"
                                    role="tab">{{ __('account') }}</a>
                            </li>
                            <!--end:::Tab item-->
                        </ul>
                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="add-student-general" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>{{ __('general') }}</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body  pt-0">
                                            <div class="row">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="first_name"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'first_name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="first_name" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'first_name') }}"
                                                        value="{{ old('first_name') }}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    {{-- <div class="text-muted fs-7">A product name is required and
                                                    recommended
                                                    to
                                                    be unique.</div> --}}
                                                    <!--end::Description-->
                                                    @error('first_name')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="middle_name"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'middle_name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="middle_name" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'middle_name') }}"
                                                        value="{{ old('middle_name') }}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    {{-- <div class="text-muted fs-7">A product name is required and
                                                    recommended
                                                    to
                                                    be unique.</div> --}}
                                                    <!--end::Description-->
                                                    @error('middle_name')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="last_name"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'last_name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="last_name" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'last_name') }}"
                                                        value="{{ old('last_name') }}">
                                                    <!--end::Input-->
                                                    @error('last_name')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="mother_name"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'mother_name') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="mother_name" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'mother_name') }}"
                                                        value="{{ old('mother_name') }}">
                                                    <!--end::Input-->
                                                    @error('mother_name')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <div class="row">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="gender"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'gender') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="gender" class=" form-control form-select mb-2">
                                                        <option selected disabled>
                                                            {{ getFieldNameFromModel('Student', 'gender') }}</option>
                                                        <option @selected(old('gender') == 1) value="1">
                                                            {{ __('male') }}</option>
                                                        <option @selected(old('gender') == 2) value="2">
                                                            {{ __('female') }}</option>
                                                    </select>
                                                    <!--end::Input-->
                                                    @error('gender')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="religion"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'religion') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="religion" class=" form-control form-select mb-2">
                                                        <option selected disabled>
                                                            {{ getFieldNameFromModel('Student', 'religion') }}</option>
                                                        @isset($religionCollection)
                                                            @foreach ($religionCollection as $religion)
                                                                <option @selected(old('religion') == $religion->id)
                                                                    value="{{ $religion->id }}">
                                                                    {{ getFieldNameFromModel('Religion', $religion->religion_name) }}
                                                                </option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                    <!--end::Input-->
                                                    @error('religion')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="id_number"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'id_number') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="id_number" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'id_number') }}"
                                                        value="{{ old('id_number') }}">
                                                    <!--end::Input-->
                                                    @error('id_number')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-3 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="birth_date"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'birth_date') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="date" name="birth_date" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'birth_date') }}"
                                                        value="{{ old('birth_date') }}">
                                                    <!--end::Input-->
                                                    @error('birth_date')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>

                                            {{-- <!--begin::Input group-->
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span
                                                        class="ql-header ql-picker"><span class="ql-picker-label"
                                                            tabindex="0" role="button" aria-expanded="false"
                                                            aria-controls="ql-picker-options-0"><svg
                                                                viewBox="0 0 18 18">
                                                                <polygon class="ql-stroke"
                                                                    points="7 11 9 13 11 11 7 11"></polygon>
                                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7">
                                                                </polygon>
                                                            </svg></span><span class="ql-picker-options"
                                                            aria-hidden="true" tabindex="-1"
                                                            id="ql-picker-options-0"><span tabindex="0" role="button"
                                                                class="ql-picker-item" data-value="1"></span><span
                                                                tabindex="0" role="button" class="ql-picker-item"
                                                                data-value="2"></span><span tabindex="0" role="button"
                                                                class="ql-picker-item ql-selected"></span></span></span><select
                                                        class="ql-header" style="display: none;">
                                                        <option value="1"></option>
                                                        <option value="2"></option>
                                                        <option selected="selected"></option>
                                                    </select></span><span class="ql-formats"><button type="button"
                                                        class="ql-bold"><svg viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                            </path>
                                                            <path class="ql-stroke"
                                                                d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                            </path>
                                                        </svg></button><button type="button" class="ql-italic"><svg
                                                            viewBox="0 0 18 18">
                                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14">
                                                            </line>
                                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4">
                                                            </line>
                                                        </svg></button><button type="button" class="ql-underline"><svg
                                                            viewBox="0 0 18 18">
                                                            <path class="ql-stroke"
                                                                d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                            </path>
                                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5"
                                                                width="12" x="3" y="15"></rect>
                                                        </svg></button></span><span class="ql-formats"><button
                                                        type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                                            <rect class="ql-stroke" height="10" width="12" x="3" y="4">
                                                            </rect>
                                                            <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                            <polyline class="ql-even ql-fill"
                                                                points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12">
                                                            </polyline>
                                                        </svg></button><button type="button" class="ql-code-block"><svg
                                                            viewBox="0 0 18 18">
                                                            <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11">
                                                            </polyline>
                                                            <polyline class="ql-even ql-stroke"
                                                                points="13 7 15 9 13 11"></polyline>
                                                            <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13">
                                                            </line>
                                                        </svg></button></span></div>
                                            <div id="kt_ecommerce_add_product_description"
                                                name="kt_ecommerce_add_product_description"
                                                class="min-h-200px mb-2 ql-container ql-snow">
                                                <div class="ql-editor ql-blank" data-gramm="false"
                                                    contenteditable="true" data-placeholder="Type your text here...">
                                                    <p><br></p>
                                                </div>
                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1">
                                                </div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                        rel="noopener noreferrer" target="_blank"
                                                        href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a description to the product for better
                                                visibility.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group--> --}}
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::General options-->

                                    <!--begin::communication options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>{{ __('communication') }}</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body  pt-0">
                                            <div class="row">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-4 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="phone"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'phone') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="phone" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'phone') }}"
                                                        value="{{ old('phone') }}">
                                                    <!--end::Input-->
                                                    @error('phone')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-4 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="mobile"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'mobile') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="tel" name="mobile" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'mobile') }}"
                                                        value="{{ old('mobile') }}">
                                                    <!--end::Input-->
                                                    @error('mobile')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-4 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="email"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'email') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="mail" name="email" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'email') }}"
                                                        value="{{ old('email') }}">
                                                    <!--end::Input-->
                                                    @error('email')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <div class="row">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row col-sm-12 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label for="address"
                                                        class="required form-label">{{ getFieldNameFromModel('Student', 'address') }}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="address" class="form-control mb-2"
                                                        placeholder="{{ getFieldNameFromModel('Student', 'address') }}"
                                                        value="{{ old('address') }}">
                                                    <!--end::Input-->
                                                    @error('address')
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::communication options-->

                                    <!--begin::Media-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>{{ __('media') }}</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="row justify-content-sm-between">
                                                <div class="col-6">
                                                    <label for="picture"
                                                        class="form-label">{{ getFieldNameFromModel('Student', 'documents') }}</label>
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-2">
                                                        <!--begin::Dropzone-->
                                                        {{-- <div class="dropzone dz-clickable"
                                                            id="kt_ecommerce_add_product_media">
                                                            <!--begin::Message-->
                                                            <div class="dz-message needsclick">
                                                                <!--begin::Icon-->
                                                                <i
                                                                    class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
                                                                <div class="ms-4">
                                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files
                                                                        here
                                                                        or
                                                                        click to upload.</h3>
                                                                    <span class="fs-7 fw-semibold text-gray-400">Upload up
                                                                        to
                                                                        10
                                                                        files</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                        </div> --}}
                                                        <input class="form-control form-control-solid mt-10"
                                                            type="file" name="files[]" multiple id="">
                                                        <!--end::Dropzone-->
                                                        @error('files[]')
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Description-->
                                                    {{-- <div class="text-muted fs-7">Set the product media gallery.</div> --}}
                                                    <!--end::Description-->
                                                </div>
                                                <div class="col-6">
                                                    <label style="margin-left: 50%;" for="picture"
                                                        class=" form-label">{{ getFieldNameFromModel('Student', 'picture') }}</label>
                                                    <!--begin::Image input-->
                                                    <div style="margin-left: 50%;">
                                                        <!--begin::Image input placeholder-->
                                                        <style>
                                                            .image-input-placeholder {
                                                                background-image: url('{{ asset('assets/media/avatars/blank.png') }}');
                                                            }

                                                            [data-theme="dark"] .image-input-placeholder {
                                                                background-image: url('{{ asset('assets/media/avatars/blank.png') }}');
                                                            }
                                                        </style>
                                                        <!--end::Image input placeholder-->
                                                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                            data-kt-image-input="true">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" aria-label="Change avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="picture"
                                                                    accept=".png, .jpg, .jpeg">
                                                                <input type="hidden" name="avatar_remove">
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" aria-label="Remove avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">
                                                            {{ __(' *.png, *.jpg and *.jpeg image files are accepted') }}
                                                        </div>
                                                        @error('picture')
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <!--end::Description-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Media-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::Inventory-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>{{ __('account') }}</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label for="user_name"
                                                    class="form-label">{{ getFieldNameFromModel('Student', 'user_name') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="user_name" class="form-control mb-2"
                                                    placeholder="{{ getFieldNameFromModel('Student', 'user_name') }}"
                                                    value="">
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <!--end::Description-->
                                                @error('user_name')
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label
                                                    class=" form-label">{{ getFieldNameFromModel('Student', 'password') }}</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="password" class="form-control mb-2"
                                                    placeholder="{{ getFieldNameFromModel('Student', 'user_name') }}"
                                                    value="">
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                {{-- <div class="text-muted fs-7">Enter the product barcode number.</div> --}}
                                                <!--end::Description-->
                                                @error('password')
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Inventory-->
                                </div>
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html"
                                id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
@endsection

<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <!--begin::profile picture settings-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>{{ getFieldNameFromModel('Student', 'picture') }}</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
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
                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                    aria-label="Change avatar" data-kt-initialized="1">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                    <input type="hidden" name="avatar_remove">
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
                <!--begin::Cancel-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                    aria-label="Cancel avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span
                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                    aria-label="Remove avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">{{ __(' *.png, *.jpg and *.jpeg image files are accepted') }}
            </div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::profile picture settings-->
    <!--begin::Status-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Status</h2>
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <div class="rounded-circle bg-success w-15px h-15px"
                    id="kt_ecommerce_add_product_status"></div>
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Select2-->
            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                data-hide-search="true" data-placeholder="Select an option"
                id="kt_ecommerce_add_product_status_select"
                data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1"
                aria-hidden="true" data-kt-initialized="1">
                <option></option>
                <option value="published" selected="selected" data-select2-id="select2-data-11-7atd">
                    Published</option>
                <option value="draft">Draft</option>
                <option value="scheduled">Scheduled</option>
                <option value="inactive">Inactive</option>
            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                data-select2-id="select2-data-10-z8if" style="width: 100%;"><span
                    class="selection"><span
                        class="select2-selection select2-selection--single form-select mb-2"
                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                        aria-disabled="false"
                        aria-labelledby="select2-kt_ecommerce_add_product_status_select-container"
                        aria-controls="select2-kt_ecommerce_add_product_status_select-container"><span
                            class="select2-selection__rendered"
                            id="select2-kt_ecommerce_add_product_status_select-container" role="textbox"
                            aria-readonly="true" title="Published">Published</span><span
                            class="select2-selection__arrow" role="presentation"><b
                                role="presentation"></b></span></span></span><span
                    class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Select2-->
            <!--begin::Description-->
            <div class="text-muted fs-7">Set the product status.</div>
            <!--end::Description-->
            <!--begin::Datepicker-->
            <div class="d-none mt-10">
                <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select
                    publishing date and time</label>
                <input class="form-control flatpickr-input"
                    id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time"
                    type="text" readonly="readonly">
            </div>
            <!--end::Datepicker-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Status-->
    <!--begin::Category & tags-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Product Details</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Input group-->
            <!--begin::Label-->
            <label class="form-label">Categories</label>
            <!--end::Label-->
            <!--begin::Select2-->
            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                data-placeholder="Select an option" data-allow-clear="true" multiple=""
                data-select2-id="select2-data-12-2xey" tabindex="-1" aria-hidden="true"
                data-kt-initialized="1">
                <option></option>
                <option value="Computers">Computers</option>
                <option value="Watches">Watches</option>
                <option value="Headphones">Headphones</option>
                <option value="Footwear">Footwear</option>
                <option value="Cameras">Cameras</option>
                <option value="Shirts">Shirts</option>
                <option value="Household">Household</option>
                <option value="Handbags">Handbags</option>
                <option value="Wines">Wines</option>
                <option value="Sandals">Sandals</option>
            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                data-select2-id="select2-data-13-4pi9" style="width: 100%;"><span
                    class="selection"><span
                        class="select2-selection select2-selection--multiple form-select mb-2"
                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"
                        aria-disabled="false">
                        <ul class="select2-selection__rendered" id="select2-w6k6-container"></ul><span
                            class="select2-search select2-search--inline">
                            <textarea class="select2-search__field" type="search" tabindex="0"
                                autocorrect="off" autocapitalize="none" spellcheck="false"
                                role="searchbox" aria-autocomplete="list" autocomplete="off"
                                aria-label="Search" aria-describedby="select2-w6k6-container"
                                placeholder="Select an option" style="width: 100%;"></textarea>
                        </span>
                    </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Select2-->
            <!--begin::Description-->
            <div class="text-muted fs-7 mb-7">Add product to a category.</div>
            <!--end::Description-->
            <!--end::Input group-->
            <!--begin::Button-->
            <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/add-category.html"
                class="btn btn-light-primary btn-sm mb-10">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                            transform="rotate(-90 11 18)" fill="currentColor"></rect>
                        <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </span>
                <!--end::Svg Icon-->Create new category
            </a>
            <!--end::Button-->
            <!--begin::Input group-->
            <!--begin::Label-->
            <label class="form-label d-block">Tags</label>
            <!--end::Label-->
            <!--begin::Input-->
            <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                <span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;"
                    aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both"
                    aria-multiline="false"></span>
                &ZeroWidthSpace;
            </tags><input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags"
                class="form-control mb-2" value="" tabindex="-1">
            <!--end::Input-->
            <!--begin::Description-->
            <div class="text-muted fs-7">Add tags to a product.</div>
            <!--end::Description-->
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Category & tags-->
    <!--begin::Weekly sales-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Weekly Sales</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <span class="text-muted">No data available. Sales data will begin capturing once product
                has been published.</span>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Weekly sales-->
    <!--begin::Template settings-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Product Template</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Select store template-->
            <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product
                template</label>
            <!--end::Select store template-->
            <!--begin::Select2-->
            <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                data-hide-search="true" data-placeholder="Select an option"
                id="kt_ecommerce_add_product_store_template"
                data-select2-id="select2-data-kt_ecommerce_add_product_store_template" tabindex="-1"
                aria-hidden="true" data-kt-initialized="1">
                <option></option>
                <option value="default" selected="selected" data-select2-id="select2-data-15-bvng">
                    Default template</option>
                <option value="electronics">Electronics</option>
                <option value="office">Office stationary</option>
                <option value="fashion">Fashion</option>
            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                data-select2-id="select2-data-14-1c8z" style="width: 100%;"><span
                    class="selection"><span
                        class="select2-selection select2-selection--single form-select mb-2"
                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                        aria-disabled="false"
                        aria-labelledby="select2-kt_ecommerce_add_product_store_template-container"
                        aria-controls="select2-kt_ecommerce_add_product_store_template-container"><span
                            class="select2-selection__rendered"
                            id="select2-kt_ecommerce_add_product_store_template-container"
                            role="textbox" aria-readonly="true" title="Default template">Default
                            template</span><span class="select2-selection__arrow" role="presentation"><b
                                role="presentation"></b></span></span></span><span
                    class="dropdown-wrapper" aria-hidden="true"></span></span>
            <!--end::Select2-->
            <!--begin::Description-->
            <div class="text-muted fs-7">Assign a template from your current theme to define how a
                single product is displayed.</div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Template settings-->
</div>
<!--end::Aside column-->








                                    <!--begin::Pricing-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required form-label">Base Price</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="price" class="form-control mb-2"
                                                    placeholder="Product price" value="">
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the product price.</div>
                                                <!--end::Description-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">Discount Type
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        aria-label="Select a discount type that will be applied to this product"
                                                        data-kt-initialized="1"></i></label>
                                                <!--End::Label-->
                                                <!--begin::Row-->
                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                                    data-kt-buttons="true"
                                                    data-kt-buttons-target="[data-kt-button='true']"
                                                    data-kt-initialized="1">
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="1"
                                                                    checked="checked">
                                                            </span>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">No
                                                                    Discount</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="2">
                                                            </span>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Percentage
                                                                    %</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col">
                                                        <!--begin::Option-->
                                                        <label
                                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                            data-kt-button="true">
                                                            <!--begin::Radio-->
                                                            <span
                                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                <input class="form-check-input" type="radio"
                                                                    name="discount_option" value="3">
                                                            </span>
                                                            <!--end::Radio-->
                                                            <!--begin::Info-->
                                                            <span class="ms-5">
                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Fixed
                                                                    Price</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row"
                                                id="kt_ecommerce_add_product_discount_percentage">
                                                <!--begin::Label-->
                                                <label class="form-label">Set Discount Percentage</label>
                                                <!--end::Label-->
                                                <!--begin::Slider-->
                                                <div class="d-flex flex-column text-center mb-5">
                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                        <span class="fw-bold fs-3x"
                                                            id="kt_ecommerce_add_product_discount_label">10</span>
                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                    </div>
                                                    <div id="kt_ecommerce_add_product_discount_slider"
                                                        class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                        <div class="noUi-base">
                                                            <div class="noUi-connects"></div>
                                                            <div class="noUi-origin"
                                                                style="transform: translate(-90.9091%, 0px); z-index: 4;">
                                                                <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                                    tabindex="0" role="slider"
                                                                    aria-orientation="horizontal" aria-valuemin="1.0"
                                                                    aria-valuemax="100.0" aria-valuenow="10.0"
                                                                    aria-valuetext="10.00">
                                                                    <div class="noUi-touch-area"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Slider-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a percentage discount to be applied on
                                                    this product.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                <!--begin::Label-->
                                                <label class="form-label">Fixed Discounted Price</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="dicsounted_price" class="form-control mb-2"
                                                    placeholder="Discounted price">
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the discounted product price. The product
                                                    will be reduced at the determined fixed price</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Tax-->
                                            <div class="d-flex flex-wrap gap-5">
                                                <!--begin::Input group-->
                                                <div class="fv-row w-100 flex-md-root fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Tax Class</label>
                                                    <!--end::Label-->
                                                    <!--begin::Select2-->
                                                    <select class="form-select mb-2 select2-hidden-accessible"
                                                        name="tax" data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select an option"
                                                        data-select2-id="select2-data-16-ad2w" tabindex="-1"
                                                        aria-hidden="true" data-kt-initialized="1">
                                                        <option data-select2-id="select2-data-18-fqb9"></option>
                                                        <option value="0">Tax Free</option>
                                                        <option value="1">Taxable Goods</option>
                                                        <option value="2">Downloadable Product</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-17-obvs"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select mb-2"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-tax-nv-container"
                                                                aria-controls="select2-tax-nv-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-tax-nv-container" role="textbox"
                                                                    aria-readonly="true" title="Select an option"><span
                                                                        class="select2-selection__placeholder">Select an
                                                                        option</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <!--end::Select2-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product tax class.</div>
                                                    <!--end::Description-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row w-100 flex-md-root">
                                                    <!--begin::Label-->
                                                    <label class="form-label">VAT Amount (%)</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mb-2" value="">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product VAT about.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end:Tax-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Pricing-->

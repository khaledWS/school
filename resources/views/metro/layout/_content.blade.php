<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">

	<div class="card shadow-sm  ">
		<div class="card-header">
			<h3 class="card-title">إضافة بيانات مؤمن</h3>
			<div class="card-toolbar">
				<!-- <button type="button" class="btn btn-sm btn-light">
            Action
           </button> -->
			</div>
		</div>
		<div class="card-body">
			<div class="d-flex flex-column flex-lg-row-fluid ">
				<div class="flex-lg-row-fluid me-0 me-lg-20">
					<div>بيانات شخصية</div>
					<hr>
					<form action="" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post"
						id="kt_careers_form">
						<div class="row">
							<div class="col-md-4 fv-plugins-icon-container fv-row mt-14">
								<div class="mb-10">
									<label for="id" class="required form-label">رقم الهوية</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container fv-row mt-14">
								<div class="mb-10">
									<label for="card-number" class="required form-label">رقم البطاقة</label>
									<input type="text" name="card-number"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container text-center fv-row">
								<label for="id" class="required form-label mb-2 block table">الصورة</label>
								<!--begin::Image input-->
								<div class="image-input image-input-empty" data-kt-image-input="true"
									style="background-image: url({{ asset('assets/media/avatars/blank.png') }})">
									<!--begin::Image preview wrapper-->
									<div class="image-input-wrapper w-125px h-125px"></div>
									<!--end::Image preview wrapper-->

									<!--begin::Edit button-->
									<label
										class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
										data-kt-image-input-action="change" data-bs-toggle="tooltip"
										data-bs-dismiss="click" title="Change avatar">
										<i class="bi bi-pencil-fill fs-7"></i>

										<!--begin::Inputs-->
										<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Edit button-->

									<!--begin::Cancel button-->
									<span
										class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
										data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
										data-bs-dismiss="click" title="Cancel avatar">
										<i class="bi bi-x fs-2"></i>
									</span>
									<!--end::Cancel button-->

									<!--begin::Remove button-->
									<span
										class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
										data-kt-image-input-action="remove" data-bs-toggle="tooltip"
										data-bs-dismiss="click" title="Remove avatar">
										<i class="bi bi-x fs-2"></i>
									</span>
									<!--end::Remove button-->
								</div>
								<!--end::Image input-->
							</div>

						</div>

						<div class="row mt-2">
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">اسم المشترك</label>
									<input type="text" name="name"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">اسم الأب</label>
									<input type="text" name="father-name"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">اسم الجد</label>
									<input type="text" name="father-name"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">اسم العائلة</label>
									<input type="text" name="father-name"
										class="form-control form-control-solid border border-gray-300 " />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">تاريخ الميلاد</label>
									<input class="form-control form-control-solid border border-gray-300 "
										placeholder="Pick date rage" id="kt_daterangepicker_3" />
								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">الجنس</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر الجنس</option>
										<option value="male">ذكر</option>
										<option value="female">انثى</option>
									</select>
								</div>
							</div>
						</div>
						<div>بيانات التأمين والعمل</div>
						<hr>
						<div class="row">
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">نوع التأمين</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر نوع التأمين</option>
										<option value="male">اختياري</option>
										<option value="female">شؤون اجتماعية</option>
										<option value="female">عمال اسرائيل</option>
										<option value="female">إشتراك جماعي</option>
										<option value="female">بلديــات</option>
										<option value="7">طلاب واطباء امتياز</option>
										<option value="8">موظف حكومة</option>
										<option value="9">وفاء الأحرار</option>
										<option value="10">مقاتلي الثورة</option>
										<option value="11">تأهيل أسرى</option>
										<option value="12">مجاني</option>
										<option value="13">موظفو أوقاف</option>
										<option value="14">مؤسسة الجريح الفلسطيني</option>
										<option value="15">وزارة شؤون الأسرى</option>
										<option value="16">انتفاضة اقصى مجاني</option>
										<option value="17">انتفاضة اقصى برسوم</option>
										<option value="18">اتحاد فلاحين برسوم</option>
										<option value="19">اتحاد فلاحين - مجاني</option>
										<option value="20">رابطة مقاتلي الثورة </option>
										<option value="21">جمعية حدادي فلسطين - مجاني</option>
										<option value="22">أسر الشهداء والجرحى</option>
										<option value="23">جمعية المهندسين الزراعيين - م</option>
										<option value="24"> جمعية الجريح الفلسطيني - م</option>
										<option value="25">جمعية خريجي كليات المجتمع - م</option>
										<option value="26"> تاهيل الاسرى برسوم</option>
										<option value="27">جمعية المحاسبين</option>
										<option value="28">الاطباء الخريجين الجدد</option>
									</select>

								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">وضع التأمين</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر وضع التأمين</option>
										<option value="male">اختياري</option>
										<option value="female">شؤون اجتماعية</option>
										<option value="female">عمال اسرائيل</option>
										<option value="female">إشتراك جماعي</option>
										<option value="female">بلديــات</option>
										<option value="7">طلاب واطباء امتياز</option>
										<option value="8">موظف حكومة</option>
										<option value="9">وفاء الأحرار</option>
										<option value="10">مقاتلي الثورة</option>
										<option value="11">تأهيل أسرى</option>
										<option value="12">مجاني</option>
										<option value="13">موظفو أوقاف</option>
										<option value="14">مؤسسة الجريح الفلسطيني</option>
										<option value="15">وزارة شؤون الأسرى</option>
										<option value="16">انتفاضة اقصى مجاني</option>
										<option value="17">انتفاضة اقصى برسوم</option>
										<option value="18">اتحاد فلاحين برسوم</option>
										<option value="19">اتحاد فلاحين - مجاني</option>
										<option value="20">رابطة مقاتلي الثورة </option>
										<option value="21">جمعية حدادي فلسطين - مجاني</option>
										<option value="22">أسر الشهداء والجرحى</option>
										<option value="23">جمعية المهندسين الزراعيين - م</option>
										<option value="24"> جمعية الجريح الفلسطيني - م</option>
										<option value="25">جمعية خريجي كليات المجتمع - م</option>
										<option value="26"> تاهيل الاسرى برسوم</option>
										<option value="27">جمعية المحاسبين</option>
										<option value="28">الاطباء الخريجين الجدد</option>
									</select>

								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">جهة العمل</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر جهة العمل</option>
										<option value="male">اختياري</option>
										<option value="female">شؤون اجتماعية</option>
										<option value="female">عمال اسرائيل</option>
										<option value="female">إشتراك جماعي</option>
										<option value="female">بلديــات</option>
										<option value="7">طلاب واطباء امتياز</option>
										<option value="8">موظف حكومة</option>
										<option value="9">وفاء الأحرار</option>
										<option value="10">مقاتلي الثورة</option>
										<option value="11">تأهيل أسرى</option>
										<option value="12">مجاني</option>
										<option value="13">موظفو أوقاف</option>
										<option value="14">مؤسسة الجريح الفلسطيني</option>
										<option value="15">وزارة شؤون الأسرى</option>
										<option value="16">انتفاضة اقصى مجاني</option>
										<option value="17">انتفاضة اقصى برسوم</option>
										<option value="18">اتحاد فلاحين برسوم</option>
										<option value="19">اتحاد فلاحين - مجاني</option>
										<option value="20">رابطة مقاتلي الثورة </option>
										<option value="21">جمعية حدادي فلسطين - مجاني</option>
										<option value="22">أسر الشهداء والجرحى</option>
										<option value="23">جمعية المهندسين الزراعيين - م</option>
										<option value="24"> جمعية الجريح الفلسطيني - م</option>
										<option value="25">جمعية خريجي كليات المجتمع - م</option>
										<option value="26"> تاهيل الاسرى برسوم</option>
										<option value="27">جمعية المحاسبين</option>
										<option value="28">الاطباء الخريجين الجدد</option>
									</select>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">تاريخ بداية
										التأمين</label>
									<input class="form-control form-control-solid border border-gray-300 "
										placeholder="Pick date rage" id="kt_daterangepicker_3_2" />
								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">تاريخ نهاية
										التأمين</label>
									<input class="form-control form-control-solid border border-gray-300 "
										placeholder="Pick date rage" id="kt_daterangepicker_3_3" />
								</div>
							</div>
							<div class="col-md-4 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="father-name" class="required form-label">تاريخ انتهاء
										البطاقة</label>
									<input class="form-control form-control-solid border border-gray-300 "
										placeholder="Pick date rage" id="kt_daterangepicker_3_4" />
								</div>
							</div>
						</div>
						<div>بيانات السكن</div>
						<hr>
						<div class="row">
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">المنطقة</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر المنطقة</option>
									</select>

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">البلد</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر البلد</option>
									</select>

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">العيادة</label>
									<select class="form-select form-select-solid border border-gray-300"
										aria-label="Select example">
										<option>اختر العيادة</option>
									</select>

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">العنوان</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">رقم الجوال</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">عدد المرافقين</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">صندوق البريد</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">الرمز البريدي</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
							<div class="col-md-3 fv-plugins-icon-container fv-row">
								<div class="mb-10">
									<label for="name" class="required form-label">محطة العمل</label>
									<input type="text" name="id"
										class="form-control form-control-solid border border-gray-300 " />

								</div>
							</div>
						</div>
						<div class="row">
							<!--begin::solid autosize textarea-->
							<div class="rounded d-flex flex-column">
								<label for="" class="form-label">ملاحظات</label>
								<textarea class="form-control form-control form-control-solid border border-gray-300 "
									data-kt-autosize="true"></textarea>
							</div>
							<!--end::solid autosize textarea-->
						</div>

					</form>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="row">
				<a href="#" class="btn btn-primary">اضافة مؤمن</a>
			</div>
			<div class="d-flex flex-row-reverse bd-highlight mt-3">
				<div class="p-1">
					<a href="#" class="btn btn-info">طباعة طلب النضمام</a>
				</div>

				<div class="p-1">
					<a href="#" class="btn btn-info">طباعة طلب التأمين</a>
				</div>

			</div>
		</div>


	</div>
</div>
<!--end::Container-->
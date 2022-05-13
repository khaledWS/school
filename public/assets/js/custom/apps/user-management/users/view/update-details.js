"use strict";

// Class definition
var KTUsersUpdateDetails = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_update_details');
    const form = element.querySelector('#kt_modal_update_user_form');
    const modal = new bootstrap.Modal(element);
    const Delta = Quill.import('delta');
    const quill = new Quill('#kt_docs_quill_basic', {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
            ]
        },
        placeholder: 'Type your text here...',
        theme: 'snow' // or 'bubble'
    });
    const stdId = $('input[name="std_id"]').val()
    const test = $('#test-button');
    // Init add schedule modal
    var initUpdateDetails = () => {

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on');

            // Disable button to avoid multiple click
            submitButton.disabled = true;

            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            setTimeout(function () {
                // Remove loading indication
                submitButton.removeAttribute('data-kt-indicator');

                // Enable button
                submitButton.disabled = false;

                // Show popup confirmation
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
                        modal.hide();
                    }
                });

                form.submit(); // Submit form
            }, 2000);
        });

        $("#kt_daterangepicker_3").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            drops: 'up',
            maxYear: parseInt(moment().format("YYYY"), 10),
            locale: {
                format: 'YYYY-MM-DD'
            }
        }, function (start, end, label) {
            var years = moment().diff(start, "years");
            // alert("You are " + years + " years old!");
        }
        );
    }

    var initQuillEditor = () => {
        var notes = $('textarea[name=notes]').val();
        var text = notes.length !== 0 ? JSON.parse(notes) : '';
        quill.setContents(text);
        $('#notes-body').html(quill.container.firstChild.innerHTML);
    }

    var initUpdateNotes = () => {
        const notesElem = document.getElementById('kt_modal_edit_notes');
        const notesModal = new bootstrap.Modal(notesElem);
        // Close button handler
        const closeButton = notesElem.querySelector('[data-kt-notes-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();
            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    // form.reset(); // Reset form
                    notesModal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Submit button handler
        const submitButton = notesElem.querySelector('[data-kt-notes-modal-action="save"]');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Show loading indication
            submitButton.setAttribute('data-kt-indicator', 'on');

            // Disable button to avoid multiple click
            submitButton.disabled = true;

            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            setTimeout(function () {
                // Remove loading indication
                submitButton.removeAttribute('data-kt-indicator');

                // Enable button
                submitButton.disabled = false;
                // form.submit(); // Submit form
                var stdId = $('input[name="std_id"]').val()
                $.ajax({
                    type: 'POST',
                    url: '/students/' + stdId + '/update-notes',
                    headers: { 'X-CSRF-TOKEN': $('*[name="_token"]').val() },
                    data: {
                        doc: JSON.stringify(quill.getContents()),
                        std_id: stdId
                    },
                    success: function (data) {
                        if (data == 'success') {
                            $('#notes-body').html(quill.container.firstChild.innerHTML);
                            // Show popup confirmation
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
                                    notesModal.hide();
                                }
                            });
                        }
                        else {
                            // Show popup confirmation
                            Swal.fire({
                                text: "ERROR",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    notesModal.hide();
                                }
                            });
                        }
                    },
                    error: function () {
                        // Show popup confirmation
                        Swal.fire({
                            text: "ERROR",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                notesModal.hide();
                            }
                        });

                    }

                });

            }, 2000);
        });

    }

    var initUpdateFiles = () => {
        const tbody = $('#kt_file_manager_list').children('tbody');
        // const tableRow = '';
        // tableRow += "<tr>";
        // tableRow += "<td>";
        // tableRow += "<div class='d-flex align-items-center'>";
        // tableRow += "<span class='svg-icon svg-icon-2x svg-icon-primary me-4'>";
        // tableRow += ' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">';
        // tableRow += '<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black" />';
        // tableRow += ' <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />';
        // tableRow += '</svg>';
        // tableRow += "</span>";
        // tableRow += "<span class='text-gray-800 text-hover-primary'>";
        // tableRow += key;
        // tableRow += "</span>";
        // tableRow += "</div>";
        // tableRow += "</td>";
        // tableRow += '<td class="text-end" data-kt-filemanager-table="action_dropdown">';
        // tableRow += '<div class="d-flex justify-content-end">';
        // tableRow += '<div class="ms-2">';
        // tableRow += '<button type="button"class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">';
        // tableRow += '<span class="svg-icon svg-icon-5 m-0">';
        // tableRow += '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">';
        // tableRow += '<rect x="10" y="10" width="4" height="4" rx="2" fill="black" />';
        // tableRow += '<rect x="17" y="10" width="4" height="4" rx="2" fill="black" />';
        // tableRow += '<rect x="3" y="10" width="4" height="4" rx="2" fill="black" />';
        // tableRow += '</svg>';
        // tableRow += '</span>';
        // tableRow += '</button>';
        // tableRow += ' <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">';
        // tableRow += '<div class="menu-item px-3">';
        // tableRow += '<a href="';
        // tableRow += fileDownloadUrl;
        // tableRow += '" class="menu-link px-3">';
        // tableRow += 'تنزيل الملف';
        // tableRow += '</a>';
        // tableRow += '</div>';
        // tableRow += '<div class="menu-item px-3">';
        // tableRow += '<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">';
        // tableRow += ' حذف';
        // tableRow += '</a>';
        // tableRow += '</div>';
        // tableRow += '</div>';
        // tableRow += '</div>';
        // tableRow += '</div>';
        // tableRow += "</td>";
        // tableRow += "</tr>";
        test.on('click', function (e) {
            e.preventDefault();

            $.ajax({
                type: 'GET',
                url: '/students/get-files/' + stdId,
                headers: { 'X-CSRF-TOKEN': $('*[name="_token"]').val() },
                success: function (data) {
                    //clears the table
                    tbody.empty()
                    console.log(data);
                    for (let key in data) {
                        let fileDownloadUrl = 'download/' + data[key] + '?disk=student-files$name=' + key;
                        let tableRow = '';
                        tableRow += "<tr>";
                        tableRow += "<td>";
                        tableRow += "<div class='d-flex align-items-center'>";
                        tableRow += "<span class='svg-icon svg-icon-2x svg-icon-primary me-4'>";
                        tableRow += ' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">';
                        tableRow += '<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="black" />';
                        tableRow += ' <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />';
                        tableRow += '</svg>';
                        tableRow += "</span>";
                        tableRow += "<span class='text-gray-800 text-hover-primary'>";
                        tableRow += key;
                        tableRow += "</span>";
                        tableRow += "</div>";
                        tableRow += "</td>";
                        tableRow += '<td class="text-end" data-kt-filemanager-table="action_dropdown">';
                        tableRow += '<div class="d-flex justify-content-end">';
                        tableRow += '<div class="ms-2">';
                        tableRow += '<button type="button"class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">';
                        tableRow += '<span class="svg-icon svg-icon-5 m-0">';
                        tableRow += '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">';
                        tableRow += '<rect x="10" y="10" width="4" height="4" rx="2" fill="black" />';
                        tableRow += '<rect x="17" y="10" width="4" height="4" rx="2" fill="black" />';
                        tableRow += '<rect x="3" y="10" width="4" height="4" rx="2" fill="black" />';
                        tableRow += '</svg>';
                        tableRow += '</span>';
                        tableRow += '</button>';
                        tableRow += ' <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">';
                        tableRow += '<div class="menu-item px-3">';
                        tableRow += '<a href="';
                        tableRow += fileDownloadUrl;
                        tableRow += '" class="menu-link px-3">';
                        tableRow += 'تنزيل الملف';
                        tableRow += '</a>';
                        tableRow += '</div>';
                        tableRow += '<div class="menu-item px-3">';
                        tableRow += '<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">';
                        tableRow += ' حذف';
                        tableRow += '</a>';
                        tableRow += '</div>';
                        tableRow += '</div>';
                        tableRow += '</div>';
                        tableRow += '</div>';
                        tableRow += "</td>";
                        tableRow += "</tr>";
                        tbody.append(tableRow);
                    }

                },
                error: function () {
                    // Show popup confirmation
                    Swal.fire({
                        text: "ERROR",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then(function (result) {
                        if (result.isConfirmed) {
                            notesModal.hide();
                        }
                    });

                }

            });

        });


    }

    return {
        // Public functions
        init: function () {
            initUpdateDetails();
            initQuillEditor();
            initUpdateNotes();
            initUpdateFiles();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersUpdateDetails.init();
});

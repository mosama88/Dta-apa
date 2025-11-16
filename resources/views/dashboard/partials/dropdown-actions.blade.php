        <div class="btn-group dropdown-info me-2 mt-2">
            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                الأجراءات
            </button>
            <div class="dropdown-menu">
                <a href="{{ route('dashboard.' . $name . '.edit', $name_id) }}" class="dropdown-item text-info">
                    <i class="fa-solid fa-pen-to-square"></i>
                    تعديل
                </a>
                <a href="{{ route('dashboard.' . $name . '.show', $name_id) }}" class="dropdown-item text-secendary">
                    <i class="fa-solid fa-eye"></i>
                    عرض
                </a>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0)" id="delete_one" data-id="{{ $name_id }}"
                    class="dropdown-item delete-btn text-danger">
                    <i class="fa-solid fa-trash-can"></i>
                    حذف
                </a>
            </div>
        </div>
        <form id="delete-form-{{ $name_id }}" action="{{ route('dashboard.' . $name . '.destroy', $name_id) }}"
            method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        @push('js')
            <script src="{{ asset('dashboard') }}/assets/js/sweetalert2@11.js"></script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Attach event listener to delete buttons
                    document.querySelectorAll('.delete-btn').forEach(function(button) {
                        button.addEventListener('click', function(event) {
                            event.preventDefault(); // Prevent default behavior

                            // Retrieve the form ID from the button's data attribute
                            const nameId = this.getAttribute('data-id');
                            const form = document.getElementById(`delete-form-${nameId}`);

                            // Display SweetAlert confirmation dialog
                            Swal.fire({
                                title: 'هل انت متأكد؟ انا',
                                text: "لن تتمكن من التراجع عن هذا.!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'نعم احذفه!',
                                cancelButtonText: 'إلغاء'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Perform AJAX request
                                    fetch(form.action, {
                                            method: 'POST',
                                            body: new FormData(form),
                                            headers: {
                                                'X-CSRF-TOKEN': "{{ csrf_token() }}" // Add CSRF token
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                Swal.fire({
                                                    title: "نجاح!",
                                                    text: data
                                                        .message, // هذه الرسالة تأتي من الـ Controller
                                                    icon: 'success',
                                                    timer: 1500,
                                                    showConfirmButton: false
                                                }).then(() => {
                                                    location
                                                        .reload(); // Reload the page
                                                });
                                            } else {
                                                Swal.fire({
                                                    title: "خطأ!",
                                                    text: data.message ||
                                                        "حدث خطأ",
                                                    icon: 'error'
                                                });
                                            }
                                        })
                                        .catch(error => {
                                            Swal.fire({
                                                title: "خطأ!",
                                                text: "حدث خطأ",
                                                icon: 'error'
                                            });
                                        });
                                }
                            });
                        });
                    });
                });
            </script>
        @endpush

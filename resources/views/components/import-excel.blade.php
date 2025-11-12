<div>
    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#empty-cart"
        class="btn btn-soft-success mt-2 me-2"><i class="fa-solid fa-table mx-1"></i> Import</a>

    <!-- Wishlist Popup Start -->
    <div class="modal fade" id="empty-cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded shadow border-0">
                <form action="{{ route('dashboard.import.excel') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="model" value="{{ $model }}" hidden>
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <img src="{{ asset('dashboard') }}/assets/images/import.png"
                                class="avatar avatar-medium rounded-circle shadow" alt="">
                            <br>
                            <strong>تعليمات هامة قبل رفع الملف:</strong>
                            <div class="col-12">
                                <ul class="text-start">
                                    <li>📄 يجب أن يكون ملف الإكسل بصيغة: <code>.xlsx</code> أو <code>.xls</code> أو
                                        <code>.csv</code>.
                                    </li>
                                    <li>✅ تأكد من ترتيب الأعمدة بالشكل التالي: <strong>{{ $columns }}</strong>.
                                    </li>
                                    <li>📌 يجب أن تبدأ البيانات من الصف الأول في الملف.</li>
                                    <li>⚠️ يُرجى عدم ترك أي صفوف فارغة داخل الملف.</li>
                                    <li>🔄 تأكد من أن الملف لا يحتوي على رموز غير مقبولة أو أحرف خاصة.</li>

                                </ul>
                            </div>
                            <div class="mt-4">
                                <label for="formFile" class="form-label">أرفق الملف</label>
                                <input class="form-control  @error('file') is-invalid @enderror" name="file"
                                    type="file" id="formFile" required>
                                @error('file')
                                    <span class="invalid-feedback text-left d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">أرفق الملف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Wishlist Popup End -->
</div>

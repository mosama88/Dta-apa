<div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h5 class="mb-0">خطوط الانترنت</h5>
            <p class="text-muted mb-0">يوجد {{ $data->total() }} خطوط الانترنت</p>
        </div>
        <div class="mb-0 position-relative mb-3">
            <a href="{{ route('dashboard.internet_lines.create') }}" class="btn btn-soft-success mt-2 me-2"><i
                    class="fa-solid fa-square-plus"></i>
                إنشاء</a>
        </div>
    </div>


    <h6 class="text-muted mb-1 mb-4">
        <div class="row col-12">
            <div class="col-4">
                <input wire:model.live="name_search" type="text" class="form-control ps-5" placeholder="Name :">
            </div>

        </div>
    </h6>

    <div class="d-flex align-items-center mb-3">
        <x-import-excel model=InternetLine columns="أسم الجهه" />
        <x-export-excel model=InternetLine />
    </div>

    <div class="table-responsive bg-white shadow rounded">
        <table class="table mb-0 table-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الجهه</th>
                    <th>كود الخط</th>
                    <th>رقم الطلب</th>
                    <th>نوع الخط</th>
                    <th>المحافظة</th>
                    <th>تاريخ الأنشاء</th>
                    <th>الأجراءات</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $info)
                    <tr class="shop-list">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $info->prosecution->name }}</td>
                        <td>{{ $info->code_line }}</td>
                        <td>{{ $info->order_number }}</td>
                        <td>{{ $info->type_line->label() }}</td>
                        <td>{{ $info->governorate->name }}</td>
                        <td>{{ $info->created_at->format('Y-m-d') }}</td>
                        <td>
                            <li class="list-inline-item">
                                @include('dashboard.partials.actions', [
                                    'name' => 'internet_lines',
                                    'name_id' => $info->slug,
                                ])
                            </li>
                        </td>
                    </tr>
                @empty
                    عذرا لا توجد بيانات!
                @endforelse

            </tbody>
        </table>
        <div class="row mt-2 col-12">

            {{ $data->links() }}
        </div>

    </div>

</div>

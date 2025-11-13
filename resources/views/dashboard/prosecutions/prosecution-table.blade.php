<div class="card-body">
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h5 class="mb-0">الجهات</h5>
            <p class="text-muted mb-0">يوجد {{ $data->total() }} الجهات</p>
        </div>
        <div class="mb-0 position-relative mb-3">
            <a href="{{ route('dashboard.prosecutions.create') }}" class="btn btn-soft-success mt-2 me-2"><i
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
        <x-import-excel model=Prosecution columns="أسم الجهه" />
        <x-export-excel model=Prosecution />
    </div>

    <div class="table-responsive bg-white shadow rounded">
        <table class="table mb-0 table-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>أسم الجهه</th>
                    <th>تاريخ الأنشاء</th>
                    <th>الأجراءات</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $info)
                    <tr class="shop-list">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->created_at->format('Y-m-d') }}</td>
                        <td>
                            <li class="list-inline-item">
                                @include('dashboard.partials.actions', [
                                    'name' => 'prosecutions',
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

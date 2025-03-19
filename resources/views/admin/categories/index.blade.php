@extends('admin.layouts.app')

@section('content')
<div class="card tbl-card">
    <div class="card-body">
        <div class="table-responsive">
            <form method="GET" action="{{ route('categories.index') }}">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label>Số lượng hiển thị:</label>
                        <select name="per_page" class="form-control" onchange="this.form.submit()">
                            <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                            <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                            <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Sắp xếp theo:</label>
                        <select name="sort_by" class="form-control" onchange="this.form.submit()">
                            <option value="id" {{ request('sort_by') == 'id' ? 'selected' : '' }}>ID</option>
                            <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Tên</option>
                            <option value="status" {{ request('sort_by') == 'status' ? 'selected' : '' }}>Trạng thái</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Thứ tự:</label>
                        <select name="sort_order" class="form-control" onchange="this.form.submit()">
                            <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Tăng dần</option>
                            <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Giảm dần</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">New</a>
                    </div>
                </div>
            </form>

            <table class="table table-hover table-borderless mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <span class="badge {{ $category->status ? 'bg-primary' : 'bg-warning' }}">
                                {{ $category->status ? 'Hoạt động' : 'Không hoạt động' }}
                            </span>
                        </td>

                        <td>
                            <a href="{{ route('categories.edit', $category->slug) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Sửa
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Hiển thị phân trang -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    @if ($page > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    @endif

                    @for ($i = 1; $i <= $totalPages; $i++)
                    <li class="page-item {{ $i == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                    </li>
                    @endfor

                    @if ($page < $totalPages)
                    <li class="page-item">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection

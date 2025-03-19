@extends('admin.layouts.app')

@section('content')
<div class="card my-5">
    <div class="card-body">
        <h3 class="mb-4"><b>{{ $category ? 'Chỉnh sửa danh mục' : 'Tạo danh mục mới' }}</b></h3>

        <form method="POST" action="{{ $category ? route('categories.update', $category->slug) : route('categories.store') }}">
            @csrf
            @if ($category)
                @method('PUT')
            @endif

            <div class="form-group mb-3">
                <label class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $category->name ?? '') }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label">Icon (Upload)</label>
                <input type="file" class="form-control" id="iconInput">
                <input type="hidden" name="icon" id="iconBase64" value="{{ old('icon', $category->icon ?? '') }}">

                <!-- Hiển thị ảnh -->
                <div class="mt-3" id="imagePreviewContainer" style="{{ $category && $category->icon ? '' : 'display: none;' }}">
                    <img id="imagePreview" src="{{ $category->icon ?? '' }}" class="img-thumbnail" style="max-width: 150px;">
                    <button type="button" class="btn btn-danger btn-sm mt-2" id="removeImage">Xóa ảnh</button>
                </div>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="status" id="status" {{ old('status', $category->status ?? true) ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Trạng thái</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">{{ $category ? 'Cập nhật' : 'Tạo mới' }}</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('iconInput').addEventListener('change', function(event) {
        let file = event.target.files[0];
        let reader = new FileReader();

        reader.onloadend = function() {
            document.getElementById('iconBase64').value = reader.result;
            document.getElementById('imagePreview').src = reader.result;
            document.getElementById('imagePreviewContainer').style.display = 'block';
        };

        if (file) {
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('removeImage').addEventListener('click', function() {
        document.getElementById('iconBase64').value = '';
        document.getElementById('imagePreview').src = '';
        document.getElementById('imagePreviewContainer').style.display = 'none';
    });
</script>

@endsection

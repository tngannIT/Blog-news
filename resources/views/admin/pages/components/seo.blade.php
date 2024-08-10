<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="meta_title">Tiêu đề SEO</label>
            <input type="text" value="{{old('meta_title')}}" name="meta_title" id="meta_title" class="form-control" placeholder="Nhập tiêu đề SEO">
        </div>

        <div class="mb-3">
            <label for="meta_keyword">Từ khóa SEO</label>
            <input type="text" value="{{ old('meta_keyword')}}" name="meta_keyword" id="meta_keyword" autofocus class="form-control" placeholder="Nhập từ khóa SEO">
        </div>

        <div class="mb-3">
            <label for="meta_description">Mô tả SEO</label>
            <textarea type="text" name="meta_description" id="meta_description " class="form-control">{{ old('meta_description')}}</textarea>
        </div>
    </div>
</div>
@csrf
<h4 class="card-title">Basic information</h4>
<p class="card-title-desc">Please fill in all information below</p>
<div class="row mb-3">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="title">Title <span class="text-danger">*</span></label>
            <input id="title" name="title" type="text" class="form-control" placeholder="Title"
                value="{{ old('title', $data_edit->title ?? '') }}">
            {!! $errors->first('title', '<span class="error">:message</span>') !!}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="parent-category-id">Parent category <span class="text-danger">*</span></label>
            <select class="form-control select2" name="parent_category_id"  id="parent-category-id" onchange="getCategory()">
                <option value="">Select parent category</option>
                @foreach (getConst('PARENT_CATEGORY') as $id => $parentCategoryName)
                    <option value="{{ $id }}"
                        {{ old('parent_category_id', $data_edit->parent_category_id ?? '') == $id ? 'selected' : '' }}>
                        {{ $parentCategoryName }}</option>
                @endforeach
            </select>
            {!! $errors->first('parent_category_id', '<span class="error">:message</span>') !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="category-id">Category <span class="text-danger">*</span></label>
            <select class="form-control select2" name="category_id" id="category-id" onchange="getSubCategory()">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $data_edit->category_id ?? '') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('category_id', '<span class="error">:message</span>') !!}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="image">Image @if($routeType == 'create') <span class="error">*</span>@endif</label>
            <input id="image" name="image" type="file" class="form-control">
            {!! $errors->first('image', '<span class="error">:message</span>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="sub-category-id">Sub category <span class="text-danger">*</span></label>
            <select class="form-control select2" name="sub_category_id" id="sub-category-id">
                <option value="">Select sub category</option>
                @foreach ($subCategories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('sub_category_id', $data_edit->sub_category_id ?? '') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('sub_category_id', '<span class="error">:message</span>') !!}
        </div>
    </div>
</div>

<div class="mb-3">
    <label>Summary</label>
    <textarea id="elm1" class="mb-2" name="summary">{{ isset($data_edit->summary) ? $data_edit->summary : '' }}</textarea>
    {!! $errors->first('summary', '<span class="error">:message</span>') !!}
</div>

<div class="mb-3">
    <label>Content</label>
    <textarea id="elm2" class="mb-2" name="content">{{ isset($data_edit->content) ? $data_edit->content : '' }}</textarea>
    {!! $errors->first('content', '<span class="error">:message</span>') !!}
</div>

<div class="mt-3">
    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save</button>
    <a href="{{ route('news.index') }}" class="btn btn-secondary waves-effect">Back</a>
</div>

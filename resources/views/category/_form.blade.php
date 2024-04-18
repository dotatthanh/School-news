@csrf
<h4 class="card-title">Basic information</h4>
<p class="card-title-desc">Please fill in all information below</p>

<div class="row mb-3">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-group">
                <label for="category-name">Category name <span class="text-danger">*</span></label>
                <input id="category-name" name="name" type="text" class="form-control" placeholder="Category name" value="{{ old('name', $data_edit->name ?? '') }}">
                {!! $errors->first('name', '<span class="error">:message</span>') !!}
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="parent_category_id">Parent Category <span class="text-danger">*</span></label>
            <select class="form-control select2" id="parent_category_id" name="parent_category_id">
                <option value="">Select parent category</option>
                @foreach (getConst('PARENT_CATEGORY') as $id => $parentCategoryName)
                    <option value="{{ $id }}"
                        {{ isset($data_edit['parent_category_id']) && $data_edit['parent_category_id'] == $id ? 'selected' : '' }}>
                        {{ $parentCategoryName }}</option>
                @endforeach
            </select>
            {!! $errors->first('parent_category_id', '<span class="error">:message</span>') !!}
        </div>
    </div>
</div>

<div class="mt-3">
    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save</button>
    <a href="{{ route('news.index') }}" class="btn btn-secondary waves-effect">Back</a>
</div>

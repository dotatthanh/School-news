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

    <div class="col-sm-6">
        <div class="form-group">
            <label for="image">Image @if($routeType == 'create') <span class="error">*</span>@endif</label>
            <input id="image" name="image" type="file" class="form-control">
            {!! $errors->first('image', '<span class="error">:message</span>') !!}
        </div>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea id="elm2" class="mb-2" name="description">{{ isset($data_edit->description) ? $data_edit->description : '' }}</textarea>
        {!! $errors->first('description', '<span class="error">:message</span>') !!}
    </div>
</div>

<div class="mt-3">
    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save</button>
    <a href="{{ route('sub-categories.index') }}" class="btn btn-secondary waves-effect">Back</a>
</div>

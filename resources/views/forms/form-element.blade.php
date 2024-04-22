<div class="col-md-3">
    <div class="form-group">
        <label for="elements[name][]"> Name <span class="text-danger">*</span></label>
        <select name="elements[name][]" class="form-control" required>
            @foreach ($formElements as $k => $formElement)
                <option value="{{ $k }}">{{ $formElement }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="elements[label][]"> Label <span class="text-danger">*</span></label>
        <input type="text" name="elements[label][]" class="form-control" required />
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="elements[field_type][]"> Field Type <span class="text-danger">*</span></label>
        <input type="text" name="elements[field_type][]" class="form-control" required />
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="elements[is_require][]" type="checkbox" value="1">
          <label class="form-check-label">Is Required</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="elements[is_email][]" type="checkbox" value="1">
          <label class="form-check-label">Is Email</label>
        </div>
    </div>
</div>

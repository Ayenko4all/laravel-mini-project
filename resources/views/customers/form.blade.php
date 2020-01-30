<div class="form-group pb-3">
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="Enter name" value="{{ old('name') ?? $customer->name }}" class="form-control">
  <div class="text-danger">{{$errors->first('name')}}</div>
</div>

<div class="form-group pb-3">
  <label for="email">Email</label>
  <input type="text" name="email" placeholder="Enter email" value="{{ old('email') ?? $customer->email }}" class="form-control">
  <div class="text-danger">{{$errors->first('email')}}</div>
</div>

<div class="form-group pb-3">
  <label for="status">Status</label>
  <select name="active" id="" class="form-control">
    <option value="" disabled>Select Customer status</option>

    @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)

    <option value="{{ $activeOptionKey }}" {{ $customer->active == '$activeOptionValue' ? 'selected' : ''}}>{{ $activeOptionValue }} </option>

    @endforeach

  </select>
  <div class="text-danger">{{$errors->first('email')}}</div>
</div>

<div class="form-group pb-3">
  <label for="company_id">Company</label>
  <select name="company_id" id="company_id" class="form-control">
    @foreach ($companies as $company)
    <option value="{{ $company->id }}"{{ $company->id == $customer->company_id ? 'selected' : ''}}>{{ $company->name }}</option>
    @endforeach
  </select>
</div>

@csrf
<!-- Banner for error validation -->

  @if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> Please fix these errors and try again!</h4>
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif

<!-- End Banner for error validation -->

<!-- Banner for success -->

@if (session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-check" aria-hidden="true"></i> Success!</h4>
    <ul>
      <li>{{ session('success') }}</li>
    </ul>
</div>
@endif

<!--End  Banner for success -->
@if (session('warning'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="fa fa-exclamation" aria-hidden="true"></i> Warning!</h4>
    <ul>
      <li>{{ session('warning') }}</li>
    </ul>
</div>
@endif

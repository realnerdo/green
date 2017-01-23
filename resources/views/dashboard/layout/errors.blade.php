@if($errors->any())

<ul class="notifications">
@foreach($errors->all() as $error)

  <li class="notification error">
    <div class="message"><span class="typcn typcn-warning"></span> {{ $error }}</div>
  </li>
@endforeach

</ul>
@endif

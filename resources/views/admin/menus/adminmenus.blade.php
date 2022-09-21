{{-- <div class="row">
    <div class="col-12">
        <ul class="d-flex flex-row justify-content-around align-items-center">
        <a href="/dashboard"> <li>Dashboard</li></a>
        @if(Auth::user()->fkrole == 2 )  
       
        <a href="/companies"> <li>Branch</li></a>
        <a href="/products"> <li>Products</li></a>
        <a href="/users"> <li>Users</li></a>
        @endif
            
            <a href="/stock"> <li>stock</li></a>
           <a href="/sales"> <li>Sales</li></a>
            <a href="/expenses"> <li>Expenses</li></a> 
           <a href="/bookings"> <li>Bookings and likes</li></a>
           <a href="/loans"> <li>Items on Loan</li></a>
        </ul>
    </div>
</div>    --}}

<ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/companies">Branch</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/products">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/users">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/stock">Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sales">Sales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bookings">Bookings and likes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loans">Items on Loan</a>
      </li>
  
  </ul>
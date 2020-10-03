<header>

<nav class="navbar links">
  <ul class="brand">

    <li {{ request()->routeIs('home') ? 'active' : '' }}>
      <a src href="{{ route('home') }}">
        <img src="https://camo.githubusercontent.com/3aea95ac8163c1c476c855db08bc0e8671f9c92a/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f677261797363616c652f7468652d7765622d776f726b732e737667" alt="">
      </a>
    </li>

    <li>
      <ul class="pagesLink">
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
        <li class="{{ request()->routeIs('employees-index') ? 'active' : '' }}"><a href="{{ route('employees-index') }}">Our Employees</a></li>
        <li class="{{ request()->routeIs('employee-create') ? 'active' : '' }}"><a href="{{ route('employee-create') }}">Join Our Team!</a></li>
      </ul>
    </li>

  </ul>
</nav>








</header>

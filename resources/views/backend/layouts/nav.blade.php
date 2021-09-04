<nav class="t-header">
	<div class="t-header-brand-wrapper">
		<a href="index.html">
			<img class="logo" src="{{asset('backend/assets/images/stay.svg')}}" alt="">
			<img class="logo-mini" src="{{asset('backend/assets/images/logo_mini.svg')}}" alt="">
		</a>
	</div>
	<div class="t-header-content-wrapper">
        <div class="t-header-content">
			<button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
				<i class="mdi mdi-menu"></i>
			</button>
			<form action="#" class="t-header-search-box">
				<div class="input-group">
				<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
				<button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
				</div>
			</form>
			<ul class="nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false"  href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						<i class="mdi mdi-logout mdi-1x text-primary"></i> Log out
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
         	</ul>
        </div>
    </div> 
</nav>
<header id="header" data-transparent="true" data-fullwidth="true" class="submenu-light">
<div class="header-inner">
<div class="container">

<div id="logo">
<a href="{{asset('')}}">
<span class="logo-default">POLO</span>
<span class="logo-dark">POLO</span>
</a>
</div>


<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
<form class="search-form" action="https://inspirothemes.com/polo/search-results-page.html" method="get">
<input class="form-control" name="q" type="text" placeholder="Type & Search..." />
<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
</form>
</div>


<div class="header-extras">
<ul>
<li>
<a id="btn-search" href="#"> <i class="icon-search"></i></a>
</li>
<li>
<div class="p-dropdown">
<a href="#"><i class="icon-globe"></i><span>EN</span></a>
<ul class="p-dropdown-content">
<li><a href="#">French</a></li>
<li><a href="#">Spanish</a></li>
<li><a href="#">English</a></li>
</ul>
</div>
</li>
</ul>
</div>


<div id="mainMenu-trigger">
<a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
<div class="container">
<nav>
<ul>

<li><a href="{{asset('')}}">Trang chủ</a></li>
@foreach($menu as $val)
<li><a href="{{$val->slug}}">{{$val->name}}</a></li>
@endforeach

<!-- <li class="dropdown"><a href="#">Pages</a>

<ul class="dropdown-menu">
<li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
<ul class="dropdown-menu">
<li><a href="page-gallery-2.html">Two Columns</a></li>
<li><a href="page-gallery-3.html">Three Columns</a></li>
</ul>
</li>

<li><a href="page-services.html">Services</a></li>
<li><a href="page-our-team.html">Our team</a></li>

</ul>

</li> -->


</ul>
</nav>
</div>
</div>

</div>
</div>
</header>
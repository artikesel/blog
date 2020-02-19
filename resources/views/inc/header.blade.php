<header>
    <div class="barMenu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div id="logo"> <a href="/">Artica</a> </div>
    <div class="search">
        <i class="fa fa-search" aria-hidden="true"></i>
    </div>
</header>
<div id="downHeader">
    <a class="{{ Request::is('/')? 'active': '' }}" href="{{route('post.index')}}">home</a>
    <a class="{{ Request::is('#1') ? 'active': '' }}" href="#1">posts</a>
    <a class="{{ Request::is('#2') ? 'active': '' }}" href="#2">about me</a>
    <a class="{{ Request::is('#3') ? 'active': '' }}" href="#3">сhat</a>
</div>

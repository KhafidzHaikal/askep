<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="/dashboard" aria-expanded="false" class="{{ Request::is('dashboard') ? 'active' : '' }}"><i
                        class="icon icon-home"></i><span class="nav-text">Dashboard</span></a></li>

        </ul>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Diagnosa</li>
            <li><a href="/diagnosa" aria-expanded="false" class="{{ Request::is('diagnosa') ? 'active' : '' }}"><i
                        class="icon icon-home"></i><span class="nav-text">Diagnosa</span></a></li>
        </ul>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Askep</li>
            <li><a href="/askep" aria-expanded="false" class="{{ Request::is('askep') ? 'active' : '' }}"><i
                        class="icon icon-home"></i><span class="nav-text">Askep</span></a></li>
        </ul>
    </div>
</div>

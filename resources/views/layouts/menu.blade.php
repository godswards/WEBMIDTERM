<li class="nav-item">
    <a href="{{ route('rotcmembers.index') }}"
       class="nav-link {{ Request::is('rotcmembers*') ? 'active' : '' }}">
        <p>Rotcmembers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>



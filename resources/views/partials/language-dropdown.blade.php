<nav class="navbar" role="navigation" aria-label="dropdown navigation">
    <div class="navbar-item has-dropdown" onclick="this.classList.toggle('is-active')">
        <a class="navbar-link"><img class="image" src="{{asset('/storage/icons/flags/lang.png')}}" alt="choose language"></a>
        <div class="navbar-dropdown">
            <a class="navbar-item he" onclick='setLanguage(this.classList[1])'>
                <img src="{{asset('/storage/icons/flags/il.png')}}" alt="עברית">
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item en" onclick='setLanguage(this.classList[1])'>
                <img src="{{asset('/storage/icons/flags/us.png')}}" alt="English">
            </a>
        </div>
    </div>
</nav>

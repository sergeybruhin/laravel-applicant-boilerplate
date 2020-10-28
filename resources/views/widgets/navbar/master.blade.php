<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Тредиум</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="border-bottom: 2px solid transparent">На главную
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active" style="border-bottom: 2px solid royalblue">
                    <a class="nav-link" href="{{ route('articles') }}">Каталог статей</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<h1 class="header__title">
    <a href="{{ env('APP_URL') }}">
        {{ env('WEBSITE_NAME') }}
        <span class="envlabel">
            {{ app()->environment() === 'production' ? 'prod' : app()->environment() }}
        </span>
        <a href="{{ env('ADMIN_PATH') }}">
            {{ env('WEBSITE_ACTIVITY') }}
    </a>
</h1>

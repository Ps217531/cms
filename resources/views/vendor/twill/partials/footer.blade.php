@include('twill::partials.toaster')
<footer class="footer">
    <div class="container">
        <span class="footer__version">{{ twillTrans('twill::lang.footer.version') . ' ' . config('twill.version', '2.0') }}</span>
    </div>
</footer>

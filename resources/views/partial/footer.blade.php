<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            Todos do direitos reservados a
            <a href="{{ route('home') }}" target="_blank">{{ config('app.name', 'SdManager') }}</a> &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>.
        </div>
    </div>
</footer>

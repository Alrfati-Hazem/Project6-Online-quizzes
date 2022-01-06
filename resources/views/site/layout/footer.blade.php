    <footer>
      <div class="container">
        <div class="logo">
          <a href="{{route("index")}}"><img src="{{asset("site/imgs/logoH.svg")}}" style="width: 80px;"  alt="logo of webiste" /></a>
        </div>
        <div class="social-icon">
          <a
            href="mailto:hazem.alrfati@gmail.com"
            rel="noopener"
            target="_blank"
            class="icon"
          >
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://Youtube.com" target="_blank" class="icon">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="https://www.apple.com/store" target="_blank" class="icon">
            <i class="fab fa-app-store"></i>
          </a>
        </div>
      </div>
    </footer>
    <script src="{{asset("site/js/bootstrap.js")}}"></script>
    @yield("script")
  </body>
</html>

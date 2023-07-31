<div id="entering">
    <div class="logo"></div>
    <div id="menu-wrapper">
      <div class="menu">
        <div onclick="window.location.href='/';">
          <a href="/">Home</a>
        </div>
        <div onclick="window.location.href='/works';">
          <a href="/works">Works</a>
        </div>
        <div onclick="window.location.href='/texts';">
          <a href="/texts">Texts</a>
        </div>
        <div onclick="window.location.href='/biography';">
          <a href="/biography">Biography</a>
        </div>
        <div onclick="window.location.href='/bibliography';">
          <a href="/bibliography">Bibliography</a>
        </div>
        <div onclick="window.location.href='/info';">
          <a href="/info">Contact</a>
        </div>
      </div>
    </div>
    <svg id="menubutton" viewBox="0 0 100 100" fill="none">
      <path stroke="#ffff" stroke-width="4" d="M45 0v89.5M90 45H.5"/>
    </svg>

    <video autoplay muted loop id="mainVideo">
      <?php if ($webvideo = $site->horizonvideo()->toFile()): ?>
      <source src="<?= $webvideo->url() ?>" type="video/mp4" />
      <?php endif ?>
    </video>

    <?php if ($mobilevideo = $site->verticalvideo()->toFile()): ?>
    <img id="mainVideoMobile" src="<?= $mobilevideo->url() ?>" alt="mobile" />
    <?php endif ?>
</div>
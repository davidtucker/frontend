<ul class="button-group">
  <li><a href="/" class="button pill primary icon home">Home</a></li>
  <li><a href="/photos" class="button pill primary icon calendar">Photos</a></li>
  <li><a href="/tags" class="button pill primary icon tag">Tags</a></li>
  <li><a href="#" class="button pill icon search search-bar-toggle">Search</a></li>
  <li><a href="/photos/upload" class="button pill icon arrowup">Upload</a></li>
  <?php if(getSession()->get('email')) { ?>
    <li>&nbsp;You're logged in as <?php echo getSession()->get('email'); ?></li>
  <?php } else { ?>
    <li>&nbsp;<a href="#" id="login"><img src="https://browserid.org/i/sign_in_red.png"></a></li>
  <?php } ?>
</ul>
<div id="searchbar">
  <form method="get" id="form-tag-search">
    <input type="text" name="tags"> &nbsp; <button type="submit" class="pill button">Search</button>
  </form>
</div>

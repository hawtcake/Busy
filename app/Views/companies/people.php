<section id="second-menu" class="visible">
    <h1>Companies</h1>
    <ul>
        <li class="active">Google<span class="notification">23 tasks</span>

        </li>
        <li>Visma<span class="notification">14 tasks</span>

        </li>
        <li>Spotify<span class="notification">1 task</span>

        </li>
    </ul>
</section>
<main>
  <header>
      <nav>
          <ul>
              <li class="icon"><a class="open-menu" href=""><i class="icon-menu"></i></a></li>
              <span class="right">
                  <li class="icon"><a href=""><i class="icon-search"></i><span>Search</span></a></li>
                  <li class="icon"><a href=""><i class="icon-person"></i><span>Kristian</span></a></li>
              </span>
          </ul>
      </nav>
  </header>

      <div class="content-wrapper">
        <section id="base">
            <section class="company-info">
                <h1 class="company-name">Google Norway AS</h1>
                <p class="company-address">
                    Aker Brygge<br>
                    Bryggegata 6<br>
                    0250 Oslo, Norway
                </p>
            </section>
            <nav>
                <ul>
                    <li><a href="/companies">Summary</a></li>
                    <li class="active"><a href="/companies/people">People</a></li>
                    <li><a href="/companies/activity">Activity</a></li>
                </ul>
            </nav>
        </section>
        <section id="data">
            <section class="data-card">
                <h1 class="data-card-title">
                    <i class="icon-person"></i> People
                </h1>
                <div class="data-card-content">
                    <?php var_dump($data); ?>
                </div>
            </section>
        </section>
      </div>
    </main>
  </body>
  <script src="/js/jquery.js"></script>
  <script src="/js/master.js"></script>
</html>

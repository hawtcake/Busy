<section id="second-menu" class="visible">
    <h1>Companies</h1>
    <ul>
        <?php
        foreach($companies as $company) {
            $x = mt_rand(1, 20);
            if($company->name == ACTION) {
                echo '<li class="active"><a href="' . $company->name . '">' . $company->name . '</a>';
            } else {
                echo '<li><a href="' . $company->name . '">' . $company->name . '</a>';
            }
            echo '<span class="notification">' . $x . ' tasks</li>';
        }
        ?>
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
          <div class="grid">
            <section class="company-info grid__col grid__col--1-of-5">
                <h1 class="company-name"><?php echo $first->name; ?></h1>
                <p class="company-address">
                    <?php echo nl2br($first->address); ?>
                </p>
            </section>
            <section class="company-details grid__col grid__col--1-of-5">
                <h1 class="company-detail">Type</h1>
                <p class="company-attribute">
                  <?php echo $first->type; ?>
                </p>
                <h1 class="company-detail">Organization number</h1>
                <p class="company-attribute">
                  <?php echo $first->orgnum; ?>
                </p>
            </section>
            <section class="company-details grid__col grid__col--4-of-7">
                <h1 class="company-detail">Web</h1>
                <p class="company-attribute">
                  <a target="_blank" href="http://<?php echo $first->web ?>">Click to view</a>
                </p>
                <h1 class="company-detail">Phone</h1>
                <p class="company-attribute">
                  +47 <?php echo $first->phone; ?>
                </p>
            </section>
            <nav class="grid__col grid__col--12-of-12">
                <ul>
                    <li class="active"><a href="/companies">Summary</a></li>
                    <li><a href="/companies/people">People</a></li>
                    <li><a href="/companies/activity">Activity</a></li>
                </ul>
            </nav>
          </div>
        </section>
        <section id="data">
            <section class="data-card">
                <h1 class="data-card-title">
                    <i class="icon-data_usage"></i> Statistics
                </h1>
                <div class="data-card-content">
                </div>
            </section>
        </section>
      </div>
    </main>
  </body>
  <script src="/js/jquery.js"></script>
  <script src="/js/master.js"></script>
</html>

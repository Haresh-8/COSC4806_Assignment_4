
<?php 
require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey, <?= $_SESSION['username'] ?? 'User'; ?>!</h1>
                <p class="text-success">You are now logged in.</p>
                
                <?php date_default_timezone_set("America/Toronto"); ?>
                <p class="lead" id="toronto-time">
                    <?= date("F jS, Y") ?> - <?= date("h:i:s A") ?>
                </p>

                <script>
                  function updateTorontoTime() {
                    const options = {
                      timeZone: 'America/Toronto',
                      year: 'numeric',
                      month: 'long',
                      day: 'numeric',
                      hour: '2-digit',
                      minute: '2-digit',
                      second: '2-digit',
                      hour12: true
                    };
                    const formatter = new Intl.DateTimeFormat([], options);
                    document.getElementById('toronto-time').textContent = formatter.format(new Date());
                  }

                  // Update every second
                  setInterval(updateTorontoTime, 1000);
                  updateTorontoTime(); // initial call so time shows immediately
                </script>

                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="/logout" class="btn btn-primary mb-4 mt-4">Click here to logout</a>

        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>


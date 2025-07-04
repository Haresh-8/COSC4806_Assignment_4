<?php require_once 'app/views/templates/headerPublic.php'; ?>
<div class="container text-center mt-5">
    <!-- University Logo -->
    <div class="mt-4">
        <img src="app/views/welcome/ed38f80431059b21460e468f7db43bc8-scaled.jpg" alt="University Logo" style="max-height: 120px;">
    
    <div class="container text-center mt-5">
    <h1 class="display-4 fw-bold text-primary">
        🎓 COSC4806: Smart Reminder App
    </h1>
    <p class="lead text-muted mb-4">
        Your personalized login and reminder management system
    </p>
        </div>
 
    <p class="lead">Choose an option:</p>

    <a class="btn btn-primary m-2" href="/login">Existing User? Login</a>
    <a class="btn btn-success m-2" href="/create">New User? Register</a>

 
    <!-- Live Toronto Time -->
    <div class="mt-3">
        <p class="lead" id="toronto-time"></p>
    </div>

    

    <!-- Alert Section -->
    <div class="alert alert-info mt-4" role="alert">
        You must be logged in to access reminders.
    </div>
</div>

<!-- Live Toronto Time Script -->
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
    document.getElementById('toronto-time').textContent =
      "Current Toronto Time: " + formatter.format(new Date());
  }

  setInterval(updateTorontoTime, 1000);
  updateTorontoTime();
</script>

<?php require_once 'app/views/templates/footer.php'; ?>

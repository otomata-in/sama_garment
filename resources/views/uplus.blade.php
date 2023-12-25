@extends('layouts.app')

@section('content')
<div id="coming-soon" style="min-height: 500px; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: #f8f9fa;">
    <h1 class="display-4 text-center" style="font-size: 3rem; color: #343a40; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Stay tuned!</h1>
    
    <!-- Countdown Timer -->
    <div id="countdown" class="display-4" style="font-size: 2rem; color: #343a40;"></div>
</div>

<script>
// Set the date when your website will be launched
var launchDate = new Date("2023-10-01 00:00:00").getTime();

// Update the countdown every second
var countdown = setInterval(function() {
    var now = new Date().getTime();
    var distance = launchDate - now;

    // Calculate days, hours, minutes, and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    document.getElementById("countdown").innerHTML = "Under Maintenance: " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    // If the launch date has passed, show a message
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "Website Launched!";
    }
}, 1000);
</script>
@endsection

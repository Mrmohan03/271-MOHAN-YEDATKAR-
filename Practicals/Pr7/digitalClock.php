<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #000;
            color: #0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #clock {
            font-size: 60px;
            border: 4px solid #0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px #0f0;
        }
    </style>
</head>
<body>

<div id="clock">
    <?php echo date("H:i:s"); ?>
</div>

<script>
    function updateClock() {
        const clock = document.getElementById("clock");
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-GB'); // 24-hour format
        clock.innerHTML = timeString;
    }

    // Update every second
    setInterval(updateClock, 1000);
</script>

</body>
</html>

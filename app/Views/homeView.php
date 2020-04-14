<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Your PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calendar.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1 id="title">PDF Calendar</h1>

<div class="fastSearch">
<form>
    <div class="row">
        <div class="col">
            <h4>Days</h4>
        </div>
        <div class="col">
            <h4>Months</h4>
        </div>
    </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control fastSearchActivate" placeholder="1, 4, 6, ...">
    </div>
    <div class="col">
      <input type="text" class="form-control fastSearchActivate" placeholder="January, ...">
    </div>
  </div>
  <div class="row mt-3">
        <div class="col">
            <h4>To</h4>
        </div>
        <div class="col">
            <h4>To</h4>
        </div>
    </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control readOnly" placeholder="30" readonly>
    </div>
    <div class="col">
      <input type="text" class="form-control readOnly" placeholder="December" readonly>
    </div>
  </div>
  <div class="form-group form-check mt-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Activate From-To</label>
  </div>
</form>
</div>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      <?= $currentMonth ?><br>
      <span style="font-size:18px"><?= $currentYear ?></span>
    </li>
  </ul>
</div>

<ul class="weekdays">
    <?php foreach($weekDays as $day) : ?>
        <li><?= $day ?></li>
    <?php endforeach; ?>
</ul>

<ul class="days mb-5">
    <?php for ($i = 1 ; $i <= $days; $i++) : ?>
        <li class="day" id=<?= $i ?>> 
            <span class = "<?= ($i < $currentDay) ? 'disabledDays' : ''?>"> <?= $i ?> </span> 
        </li>
    <?php endfor; ?>
  <!-- <li><span class="active">10</span></li> -->
</ul>


<script src="js/calendar.js"></script>
</body>
</html>
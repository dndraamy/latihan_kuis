<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE SEASONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: rgb(254, 236, 241);">
    <?php
        $bulan = $_POST['bulan'];

        if ($bulan == 'december' || $bulan == 'january' || $bulan == 'february') {
    ?>
        <div class="season d-flex justify-content-center" style="margin: 200px">
          <div class="card mb-3" style="max-width: 700px; border-radius: 15px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="winter.png" class="img-fluid rounded-start" alt="winter" style="padding: 15px">
              </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 24pt; font-family: verdana;">It's <span style="font-weight: bold; color: rgb(165, 195, 255)">Winter</span> Time!</h5>
                    <p class="card-text"><small class="text-body-secondary"><em>December - February</em></small></p>
                    <p class="card-text">Winter serves as a time for reflection and
                                        introspection, where the silence of snow offers
                                        us a chance to contemplate the warmth within our hearts.</p>
                    <a href="index.html" class="btn btn-light hover-dark">Back To Menu</a>
                    
                    <style>
                      .btn:hover{
                        background-color :rgb(212, 226, 255) !important;
                      }
                    </style>
                  </div>
                </div> 
            </div>
          </div>
        </div>

    <?php
        } if ($bulan == 'march' || $bulan == 'april' || $bulan == 'may') {
    ?>
        <div class="season d-flex justify-content-center" style="margin: 200px">
          <div class="card mb-3" style="max-width: 700px; border-radius: 15px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="spring.png" class="img-fluid rounded-start" alt="spring" style="padding: 15px">
              </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 24pt; font-family: verdana;">It's <span style="font-weight: bold; color: green">Spring</span> Time!</h5>
                    <p class="card-text"><small class="text-body-secondary"><em>March - May</em></small></p>
                    <p class="card-text">Spring symbolizes hope and renewal,
                                        reminding us that life always finds a way to
                                        return with each blooming flower.</p>
                    <a href="index.html" class="btn btn-light hover-dark">Back To Menu</a>

                    <style>
                      .btn:hover{
                        background-color : #eaffd6 !important;
                      }
                    </style>
                  </div>
                </div> 
            </div>
          </div>
        </div>

    <?php
        } if ($bulan == 'june' || $bulan == 'july' || $bulan == 'august') {
    ?>
        <div class="season d-flex justify-content-center" style="margin: 200px">
          <div class="card mb-3" style="max-width: 700px; border-radius: 15px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="summer.png" class="img-fluid rounded-start" alt="summer" style="padding: 15px">
              </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 24pt; font-family: verdana;">It's <span style="font-weight: bold; color: blue">Summer</span> Time!</h5>
                    <p class="card-text"><small class="text-body-secondary"><em>June - August</em></small></p>
                    <p class="card-text">Summer marks a time of energy and freedom,
                                        where the shining sun encourages us to
                                        celebrate life and our presence in this world.</p>
                    <a href="index.html" class="btn btn-light hover-dark">Back To Menu</a>
                    
                    <style>
                      .btn:hover{
                        background-color : #adc0f7 !important;
                      }
                    </style>
                  </div>
                </div> 
            </div>
          </div>
        </div>

    <?php
        } if ($bulan == 'september' || $bulan == 'october' || $bulan == 'november') {
    ?>
        <div class="season d-flex justify-content-center" style="margin: 200px">
          <div class="card mb-3" style="max-width: 700px; border-radius: 15px">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="autumn.png" class="img-fluid rounded-start" alt="autumn" style="padding: 15px">
              </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 24pt; font-family: verdana;">It's <span style="font-weight: bold; color: orange">Autumn</span> Time!</h5>
                    <p class="card-text"><small class="text-body-secondary"><em>September - November</em></small></p>
                    <p class="card-text">Autumn invites us to reflect on the cycles of
                                          life, as the falling leaves teach us the art of
                                          letting go and embracing change.</p>
                    <a href="index.html" class="btn btn-light hover-dark">Back To Menu</a>

                    <style>
                      .btn:hover{
                        background-color : #ffeecf !important;
                      }
                    </style>
                  </div>
                </div> 
            </div>
          </div>
        </div>
    <?php
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
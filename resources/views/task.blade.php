<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Task</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  
  <link rel="stylesheet" href="{{ asset('assets/css/task.css') }}">
</head>

<body>
<div class="mt-5 text-left">
  <button class="bck" type="button" onclick="window.location.href='{{ url('/homepage') }}'">Back</button>
</div>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card px-3">
                    <div class="card-body">
                        <h4 class="card-title">Availaible Tasks</h4>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div> <label class="form-check-label">Kdiv | Gratitude #gra230 <i class="input-helper"></i></label> 
                                    <p class="description" style="display:none;">This is a description of the item.</p>
                                </div>
                                </li>
                                <li>
                                    <div> <label>Mboy | Today #td531 <i class="input-helper"></i></label> 
                                    <p class="description" style="display:none;">This is a description of the item.</p>
                                </div> 
                                </li>
                                <li>
                                    <div>Ychinz | Lover #lov531 <i class="input-helper"></i></label>
                                    <p class="description" style="display:none;">This is a description of the item.</p>
                                     </div>
                                </li>
                                <li>
                                    <div>Emmycent | Baby #bab403 <i class="input-helper"></i></label>
                                    <p class="description" style="display:none;">This is a description of the item.</p>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const listItems = document.querySelectorAll('li');

listItems.forEach(function(item) {
  item.addEventListener('click', function() {
    const descriptions = document.querySelectorAll('.description');
    descriptions.forEach(function(description) {
      description.style.display = 'none';
    });

    const description = this.querySelector('.description');
    description.style.display = 'block';
  });
});

</script>
<script src="{{ asset('assets/js/task.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
</body>
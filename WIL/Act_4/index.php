<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Email Sender</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div>
          <h2 class="text-center mb-5 shadow-sm p-3">Send an E-mail</h2>
        </div>
        <form class="" action="contact_form.php" method="post">
          <div class="row justify-content-center" >
            <div class="col-md-6 shadow rounded p-5">
              <div class="row">
                <div class="col mb-3">
                  <label class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
                <!-- <div class="col mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name">
                </div> -->
              </div>
              <div class="col mb-3">
                <label class="form-label">E-mail:</label>
                <input type="text" name="mail" class="form-control" placeholder="name@email.com">
              </div>
              <div class="col mb-3">
                <label class="form-label">Subject:</label>
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="col mb-3">
                <label class="form-label">Message:</label>
                <textarea name="message" class="form-control" placeholder="Write Your Message Here..."rows="3"></textarea>
              </div>
              <div class="col mb-3 d-grid gap-2 mx-auto">
                <button type="submit" name="submit" class="btn btn-primary btn-lg ">SEND</button>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>

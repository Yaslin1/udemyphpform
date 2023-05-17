<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charsets="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-comptaible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Get in touch!</h1>
        <div id="error"><?php echo @$error . @$successMessage; ?></div>

        <form method="post">
            <fieldset class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small class="text-muted">We'll never share you e-mail with anyone else.</small>
            </fieldset>

            <fieldset class="form-group"></fieldset>
            <label for="subject">Subject </label>
            <input type="text" class="form-control" id="subject" name="subject">

            <fieldset class="form-group"></fieldset>
            <label for="content">What would you like to ask us?</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form> <!-- end of the form -->
    </div> <!-- end of container div -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="contact form.js"></script>

    </body>
</html>
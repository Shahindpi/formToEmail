<?php include "sendEmail.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

    <?php echo $alert; ?>

  <form action="" class="contact-form-box" method="post">
    <div class="row">
        <div class="col-md-4 form-group">
            <input
                type="text"
                placeholder="Name *"
                class="form-control"
                name="name"
                data-error="Name field is required"
                required
            >
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-4 form-group">
            <input
                type="email"
                placeholder="E-mail *"
                class="form-control"
                name="email"
                data-error="e-mail field is required"
                required
            >
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-md-4 form-group">
            <input
                type="text"
                placeholder="Subject *"
                class="form-control"
                name="subject"
                data-error="Subject field is required"
                required
            >
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <textarea
                placeholder="Write your message*"
                class="textarea form-control"
                name="message"
                id="form-message"
                rows="2"
                cols="20"
                data-error="Message field is required"
                required
            ></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="col-12 form-group">
            <button type="submit" name="submit" value="submit" class="item-btn">
                Send Message
                <i class="flaticon-right-arrow"></i>
            </button>
        </div>
    </div>
  </form>

    <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
            
        }
    </script>

</body>
</html>
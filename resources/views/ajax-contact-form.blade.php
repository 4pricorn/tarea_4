<script>
if ($("#ajax-contact-form").length > 0) {
$("#ajax-contact-form").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 50,
    email: true,
  },
  subject: {
    required: true,
    maxlength: 100
  },  
  description: {
    required: true,
    maxlength: 300
  },   
  },
  messages: {
  name: {
    required: "Please enter name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please enter valid email",
    email: "Please enter valid email",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  subject: {
    required: "Please enter subject",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  description: {
    required: "Please enter description",
    maxlength: "Your description name maxlength should be 300 characters long."
  },
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);

  $.ajax({
    url: "{{url('save')}}",
    type: "POST",
    data: $('#ajax-contact-form').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Ajax form has been submitted successfully');
      document.getElementById("ajax-contact-form").reset(); 
    }
   });
  }
  })
}
</script>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submit using Ajax jQuery in Laravel 8 with Validation</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <style>
    .error{
     color: #FF0000; 
    }
  </style>
</head>
<body>
<div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h2>Laravel 8 Ajax Form Submit with Validation Example</h2>
    </div>
    <div class="card-body">
      <form name="ajax-contact-form" id="ajax-contact-form" method="post" action="javascript:void(0)">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control">
        </div>          
         <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" id="email" name="email" class="form-control">
        </div>           
        <div class="form-group">
          <label for="exampleInputEmail1">Subject</label>
          <input type="text" id="subject" name="subject" class="form-control">
        </div>      
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
      </form>
    </div>
  </div>
</div>    
<script>
if ($("#ajax-contact-form").length > 0) {
$("#ajax-contact-form").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  email: {
    required: true,
    maxlength: 50,
    email: true,
  },
  subject: {
    required: true,
    maxlength: 100
  },  
  description: {
    required: true,
    maxlength: 300
  },   
  },
  messages: {
  name: {
    required: "Please enter name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please enter valid email",
    email: "Please enter valid email",
    maxlength: "The email name should less than or equal to 50 characters",
  },
  subject: {
    required: "Please enter subject",
    maxlength: "Your subject maxlength should be 100 characters long."
  },    
  description: {
    required: "Please enter description",
    maxlength: "Your description name maxlength should be 300 characters long."
  },
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#submit').html('Please Wait...');
  $("#submit"). attr("disabled", true);
  $.ajax({
    url: "{{url('save')}}",
    type: "POST",
    data: $('#ajax-contact-form').serialize(),
    success: function( response ) {
      $('#submit').html('Submit');
      $("#submit"). attr("disabled", false);
      alert('Ajax form has been submitted successfully');
      document.getElementById("ajax-contact-form").reset(); 
    }
   });
  }
  })
}
</script>
</body>
</html>
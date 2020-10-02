<!DOCTYPE html>
  <html lang="en">
  <head>
  <title>Adminstrator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </head>
  <body>

  <div class="header">
    <h1>Viettel Cyber Security</h1>
    <p>BigData and Machine Learning</p>
  </div>

  <ul>
    <li><a href= <?php echo "admin.php" ?> >Home</a></li>
    <li><a href= <?php echo "message_box.php"?> >Mailbox</a></li>
    <li><a href= <?php echo "assignment.php"?> >Assignment</a></li>
    <li><a href="challenge.php">Challenge</a></li>
    <div class="navbar">
      <a href="log_out.php" class="right">Log out</a>
    </div>
  </ul>

  <div class="row">
      <div class="side">
        <h2>About Me</h2>
        <h5>Photo of me:</h5>
        <img src="{{asset('/css/hack.png')}}" width="250px" height="250px">
        <h5>While hack we dev - While dev we hack</h5>
      </div>
    <div class="main">
      <h2 style="text-align:left;float:left;" >Students List</h2>
      <a style="text-align:right;float:right;" href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" 
      onclick="window.open('add_edit_student.php','_self')">New Student<i class="w3-padding fa fa-pencil"></i></a>
          <table class="styled-table">
          <thead>
              <tr>
                  <th>Username</th>
                  <th width="50"></th>
                  <th width="50"></th>
                  <th width="50"></th>
              </tr>
          </thead>
          <tbody>
 

          </tbody>
          </table>
    </div>
  </div>

  <div class="footer">
    <h2>Contact me</h2>
    <p>Viettel Cyber Security, 41st Floor, Keangnam 72 Landmark Building, Pham Hung Str., Nam Tu Liem Dist., Hanoi</p>
  </div>
  </body>
  </html>

  <!--ham xoa sv-->
  <script type="text/javascript">
      function xoa_sv(id) {
        if(confirm('Xác nhận xóa?')) {
          $.post('delete_student.php', {'id': id},
          function(data) {location.reload()})
        }	
      }
  </script>

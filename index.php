<?php
  include("user.php");

  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = new user($email, $password);
  $getUsername = $user->login()
?>

<html>
  <head> 
  <title>Page Order</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  </head>
  <style>
        input[type=text], select {
          width: 80%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=number], select {
          width: 80%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=email], select {
          width: 80%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        button {
          background-color: #7e96c2;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          border-radius: 4px;
          width: 80%;
        }

        button:hover {
          opacity: 0.8;
        }

        body {
          background-color: rgb(209, 219, 231);
          font-family: Helvetica, sans-serif;
        }

        h1{
          font-family: 'Pacifico', cursive;
          color: rgb(41, 68, 117);
        }

        div {
          border-radius: 10px;
          background-color: #f2f2f2;
          padding: 20px;
          padding-left: 100px;
          margin-left: 9cm;
          margin-right: 8cm;
          margin-top: 2cm;
          margin-bottom: 2cm;
          box-shadow: 3px 3px 3px grey;
        }

  </style>
  <body>
  <div class="order"> 
        <h1>Page Order</h1>
        <p> Welcome, dear <?php echo $getUsername ?></p>
        <p>Please choose the streaming plan you desire</p><br>
          <form action="payment.php" method="post">

            <label for="platform">Streaming service</label></td><br />
            <Select name="platform" id="platform">
            <option value='Netflix'>Netflix</option>
            <option value='iFlix'>iFlix</option>
            <option value='Viu'>Viu</option>

            <option value='iQIYI'>iQIYI</option>
            <option value='Youtube Premium'>Youtube Premium</option>
            </Select>
            </br></br>

            <label for="durasi">Choose your plan</label><br />
            <Select name="durasi" id="durasi">
            <option value='1'>1 Month</option>
            <option value='3'>3 Month</option>
            <option value='6'>6 Month</option>
            <option value='12'>12 Month</option>
            </Select>
            </br></br>

            <label for="qty">Quantity</label><br />
            <input type="number" name="qty" required/>
            </br></br>  
                
            <label for="code">Promo code</label><br />
            <input type="text" name="code" />
            <p><small>*If there is any</small></p>

            <label for="email">Email</label><br />
            <input type="email" placeholder="example@gmail.com" name="email" required/>
            <p><small>*Account details will be sent to this email</small></p>
            </br></br>  

            <button type="submit">Checkout</button>
        </form>
       </div>
  </body>
</html>



<html>
    <head>
        <title>Detail Order</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">   
    </head>
    <style>

        body {
          background-color: rgb(209, 219, 231);
          font-family: Helvetica, sans-serif;
        }

        .column {
        float: left;
        width: 28%;
        padding: 1px;
        height: 200px; 
        text-align: left;
        }

        .column1 {
        float: left;
        width: 20%;
        height: 200px; 
        }

        .row:after {
        width: 100%;
        content: "";
        display: table;
        clear: both;
        padding: 1px;
        }

        .column2 {
        float: left;
        width: 30%;
        padding: 1px;
        height: 300px; 
        margin-left: 40mm;
        }

        .row2 {
        content: "";
        display: table;
        clear: both;
        padding: 10px;
        width: 100%;
        }
        

        .detail {
        border-radius: 10px;
        width: 46%;
        background-color: #f2f2f2;
        padding: 30px;
        padding-left: 50px;
        margin-left: 9cm;
        margin-right: 10cm;
        margin-top: 2cm;
        margin-bottom: 2cm;
        box-shadow: 3px 3px 3px grey;
        }

        h1{
        text-align: left;
        margin-left: 2cm;
        font-family: 'Pacifico', cursive;
        color: rgb(41, 68, 117);
        }

        p{
        margin-left: 2cm;
        }
        
    </style>
    <body>
    <?php
                
                $platform = $_POST['platform']; 
                $durasi = $_POST['durasi']; 
                $email = $_POST['email']; 
                $code = $_POST['code']; 
                $harga;
                $total;

                class Total{
                    private $jumlah;
                    public function setJumlah($aJumlah){
                         $this->jumlah = $aJumlah;
                    }
                
                    public function getJumlah(){
                         return $this->jumlah;
                    }
                }   
            
                $total = new Total();
                $total->setJumlah($_POST['qty']);


                if ($_POST['platform'] =="Netflix") { 
                    if ($durasi==1){
                        $harga=10000;
                    }
                    elseif ($durasi==3){
                        $harga=30000;
                    }
                    elseif ($durasi==6){
                        $harga=60000;
                    }
                    else {
                        $harga=120000;
                    }
                 }
                
                 elseif ($_POST['platform'] =="iFlix") { 
                    if ($durasi==1){
                        $harga=11000;
                    }
                    elseif ($durasi==3){
                        $harga=31000;
                    }
                    elseif ($durasi==6){
                        $harga=610000;
                    }
                    else {
                        $harga=1210000;
                    }
                 }

                 elseif ($_POST['platform'] =="Viu") { 
                    if ($durasi==1){
                        $harga=12000;
                    }
                    elseif ($durasi==3){
                        $harga=32000;
                    }
                    elseif ($durasi==6){
                        $harga=620000;
                    }
                    else {
                        $harga=1220000;
                    }
                 }

                 elseif ($_POST['platform'] =="iQIYI") { 
                    if ($durasi==1){
                        $harga=14000;
                    }
                    elseif ($durasi==3){
                        $harga=34000;
                    }
                    elseif ($durasi==6){
                        $harga=640000;
                    }
                    else {
                        $harga=1240000;
                    }
                 }

                 else { 
                    if ($durasi==1){
                        $harga=15000;
                    }
                    elseif ($durasi==3){
                        $harga=35000;
                    }
                    elseif ($durasi==6){
                        $harga=650000;
                    }
                    else {
                        $harga=1250000;
                    }
                 }
                 
                 if ($_POST['code'] =="25OFF") { 
                    $finalprice = 0.75*($harga * $total->getJumlah());
                 }
                 else{
                     $finalprice = $harga * $total->getJumlah();
                 }

                ?>

                <div class="detail">
                <h1>Order Detail</h1>
                <div class="row">
                    <div class="column1">
                        </div>
                        <div class="column">
                            Item<br>
                            Plan<br>
                            Quantity<br>
                            Price<br>
                            Email<br>
                            Promo code<br>
                            Subtotal<br>
                            Total payment
                        </div>
                        <div class="column">
                            : <?php echo $platform ?><br>
                            : <?php echo $durasi ?> month<br>
                            : <?php echo $total->getJumlah() ?><br>
                            : Rp. <?php echo $harga ?><br>
                            : <?php echo $email ?><br>
                            : <?php echo $code ?><br>
                            : Rp. <?php echo $harga * $total->getJumlah() ?><br>
                            : Rp. <?php echo $finalprice ?>
                            
                        </div>
                        <div class="column1">
                    </div>
                </div> 

                <div class="row2">
                <h1>Complete your order</h1>
                <p>Scan barcode below to complete your order</p>
                    <div class="column2">
                    <img src="qr.jpg" id="image" alt="Barcode" />
                    </div>
                </div>
                </div>

    </body>
</html>
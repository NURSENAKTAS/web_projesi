<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style3.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="bg-dark text-white text-center py-2 mt-5 ">
             <h2><i>Bize ulaşın.</i> </h2>
        </div>
        <div class="row">
        
            </div>
            <div class="col-md-6 col-sm-12">
                <form action="kontrol.php" method="post">
                    <div class="card mt-4">
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-user text-info"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="adsoyad" placeholder="Ad Soyad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-envelope text-info"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" name="eposta" placeholder="E-Posta" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-tag text-info"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="konu" placeholder="Konu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-comment text-info"></i>
                                        </div>
                                    </div>
                                    <textarea class="form-control" placeholder="Lütfen Mesajınızı Buraya Yazın.." name="mesaj" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="GÖNDER" class="btn btn-dark btn-block">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</head>
</html>

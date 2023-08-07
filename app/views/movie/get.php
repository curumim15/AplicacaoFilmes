<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Movies app</title>

    
</head>

<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark justify-content-center">
  <a class="navbar-brand" href="http://localhost/PW/TrabPW01/">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  
  
</nav>

    <?php
          foreach ($data['movies'] as $movie){
              $movie=$movie;
          }
    ?>
    <section class="p-3 mb-2 bg-warning text-dark">
        <div class="container mt-5 py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <article>
                            <header class="mb-4">
                                <h1 class="fw-bolder mb-1"> <?php echo $movie['title']?></h1>
                            </header>
                        <?php
                            echo '
                                <figure class="mb-4"> <img class="img-fluid" style="max-width: 40%" src="data:image/jpeg;base64,'.$movie['image'].'" alt="..." /></figure>
                            ';
                            ?>
                            <h2 class="fw-bolder mb-4 mt-5">Autor</h2>
                            <?php
                            echo'<p class="fs-5 mb-4">'.$movie['author'].'</p>
                                ';
                            ?>

                            <h2 class="fw-bolder mb-4 mt-5">Sinopse</h2>
                            <?php
                                echo'<p class="fs-5 mb-4">'.$movie['synopsis'].'</p>
                                ';
                            ?>
                            <section class="mb-5">
                                <h2 class="fw-bolder mb-4 mt-5">Descrição</h2>
                                <?php
                               
                                    echo'<p class="fs-5 mb-4">'.$movie['description'].'</p>
                                    <a href="http://localhost/PW/TrabPW01/movie/update/'.$movie['id'].'" class="btn btn-info">Update</a>
                                 ';
                                
                                  ?>
                            </section>

                        </article>
                        <!-- Comments section-->
                    </div>
                </div>
            </div>
        </section>
        </body>
</html>

<style>
    :root {
        --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
    }

    body {
        background: rgb(49,196,234);
    }

    .card {
        background: #222;
        border: 1px solid #dd2476;
        color: rgba(250, 250, 250, 0.8);
        margin-bottom: 2rem;
    }
    .btn {
        border: 5px solid;
        border-image-slice: 1;
        border-image-source:  var(--gradient) !important;
        text-decoration: none;
        transition: all .4s ease;
    }

    .btn:hover, .btn:focus {
        background: var(--gradient) !important;
        -webkit-background-clip: none !important;
        -webkit-text-fill-color: #fff !important;
        border: 5px solid #fff !important;
        box-shadow: #222 1px 0 10px;
        text-decoration: underline;
    }
</style>


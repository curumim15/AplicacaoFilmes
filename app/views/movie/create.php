

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

<section class="me-5 ms-5 px-5">
    <div class="container-fluid m-5 p-5 me-5">
        <div class="col-12 display-4 text-dark pb-4">
            Adicionar um Filme
        </div>
      <form method="POST" enctype="multipart/form-data" action="http://localhost/PW/TrabPW01/movie/store">
          <div class="form-group me-5">
            <label>Titulo:</label>
            <input name="title" type="text" class="form-control">
          </div>

          <div class="form-group mt-3 me-5">
            <label>IMDB Rating:</label>
            <input name="IMDB_rating" type="text" class="form-control">
          </div>

          <div class="form-group mt-3 me-5">
            <label>Ano que o filme foi feito:</label>
            <input name="release_year" type="text" class="form-control">
          </div>

          <div class="form-group mt-3 me-5">
            <label>Genre Id:</label>
            <input name ="genre_id"  type="text" class="form-control"></input>
          </div>

          <div class="form-group mt-3 me-5">
              <label>Autor:</label>
              <input name="author"  type="text" class="form-control"></input>
          </div>

          <div class="form-group mt-3 me-5">
            <label>Sinopse</label>
            <textarea name="synopsis" class="form-control"  rows="3"></textarea>
          </div>

          <div class="form-group mt-3 me-5">
            <label>Descrição</label>
            <textarea name="description" class="form-control"  rows="3"></textarea>
          </div>

          <div class="form-group mt-3 me-5">
              <label>Image:</label>
              <input name="image" type="file" class="form-control-file">
          </div>

          <button type="submit" class="btn btn-dark mt-5">Insert Movie</button>
      </form>
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


    .btn:hover, .btn:focus {
        background: var(--gradient) !important;
        -webkit-background-clip: none !important;
        -webkit-text-fill-color: #fff !important;
        border: 5px solid #fff !important;
        box-shadow: #222 1px 0 10px;
        text-decoration: underline;
    }
</style>

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
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

    <!-- Movies--------------------------------------------------------------------------------------->
        <section class ="fluid mt-5 py-5 p-3 mb-2 bg-info text-white" >

            <div class="container-fluid py-4">
            <div class="text-center" >
                    <h1 class="display-2 fw-bolder " > App Filmes</h1>
            </div>
                </div>
                <div class="container mx-auto mt-4">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                    <img src="assets/images/Filmes.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Todos os Filmes</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Clique aqui e vê os seus filmes preferidos </h6>
                        <a href="http://localhost/PW/TrabPW01/movie/" class="btn mr-2">
                            <i ></i> Filmes</a>
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
        background: var(--gradient) !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
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



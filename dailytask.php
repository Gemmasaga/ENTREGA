<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./sass/custom.css">
</head>

<body class="fondo">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
      
      <button type="button" class="btn" href="index.html">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
      </button>
      
      <a class="navbar-brand fw-bold text-center">DAILY TASKS</a>
      
      <div class="d-grid d-md-flex justify-content-md-end">
       <button type="button" class="btn" href="index.html class=">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
           <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
         </svg>
       </button>
       <button type="button" class="btn btn-danger">Logout</button>
      </div>
      

      

      
    </div>
    
   

    
  </nav>

  <main class="container d-flex align-items-center vh-100">

    <div class="row">
      <div class="col-lg-4">
        <div class="card bg-light">
          <div class="card-body mb-5 pb-5">
            <h5 class="card-title fw-bold">TO DO</h5>
              
            <div class="card-body rounded border rojo border-dark">
                <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text bg-danger w-50">14 de octubre</p>
              </div>
              <br>

              <div class="card-body rounded border rojo   border-dark">
                <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text bg-danger w-50">14 de diciembre</p>
              </div>
              <br>

              <div class="card-body rounded border rojo   border-dark">
                <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text bg-danger w-50">14 de diciembre</p>
              </div>
              <br>
        
            <button type="button" class="btn bg-light  btn-outline-success">+ Añada una tarea</button>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card bg-light">
          <div class="card-body  mb-5 pb-5">
            <h5 class="card-title fw-bold">DOING</h5>

            <div class="card-body azul rounded border border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-info w-50">16 de octubre</p>
            </div>
            <br>

            <div class="card-body azul border rounded border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-info w-50">16 de octubre</p>
            </div>
            <br>

            <div class="card-body azul border rounded border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-info w-50">16 de octubre</p>
            </div>
            <br>

           
            <button type="button" class="btn bg-light btn-outline-success">+ Añada una tarea</button>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card bg-light">
          <div class="card-body mb-5 pb-5">
            <h5 class="card-title fw-bold">DONE</h5>
            <div class="card-body border amarillo rounded border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-warning w-50">10 de enero</p>
            </div>
            <br>

            <div class="card-body border amarillo rounded border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-warning w-50">10 de enero</p>
            </div>
            <br>

            <div class="card-body border amarillo rounded  border-dark">
              <p class="card-text p-2">With supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text bg-warning w-50">10 de enero</p>
            </div>
            <br>
            <button type="button" class="btn amarillo btn-outline-success">+ Añada una tarea</button>

          </div>
        </div>
      </div>

    </div>

  </main>
</body>

</html>
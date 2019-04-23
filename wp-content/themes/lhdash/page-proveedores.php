<?php
/*
    Template Name: Proveedores
*/

// Advanced Custom Fields
//$         = get_field('');

get_header();
?>

    <!-- Page Heading -->
    <h1 class="h3 mb-1">Solicitudes</h1>
    <p class="mb-4">Ingresar RUT a continuación para ver las solicitudes del usuario.</p>

    <form class="form-inline mb-4">
        <div class="form-check mb-2 mr-sm-2">
            <span class="form-check-label font-weight-bold">RUT</span>
        </div>

        <label class="sr-only" for="inlineFormInputName2">RUT</label>
        <input type="text" class="form-control mb-2 mr-sm-2 border-0" id="inlineFormInputName2" placeholder="00000000-0">

        <button type="submit" class="btn btn-warning mb-2">Buscar solicitudes</button>
    </form>

    <!-- Page Heading -->
    <h3 class="h5 mb-0 mb-3">Lista de solicitudes</h3>

    <!-- DataTales Example -->
    <div class="card mb-4 border-0">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>RUT</th>
                    <th>SOLICITA</th>
                    <th>EMPRESA</th>
                    <th>INGRESO</th>
                    <th>C. SOLICIÓN</th>
                    <th>ESTADO</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NOMBRE</th>
                    <th>RUT</th>
                    <th>SOLICITA</th>
                    <th>EMPRESA</th>
                    <th>INGRESO</th>
                    <th>C. SOLICIÓN</th>
                    <th>ESTADO</th>
                    <th>ID</th>
                </tr>
            </tfoot>
            <tbody>
                
                <tr>
                    <td>Rodrigo Melendez</td>
                    <td>20214532</td>
                    <td>Dentimed</td>
                    <td>BHP</td>
                    <td>09/10/2018</td>
                    <td>14/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">En proceso</a></td>
                    <td>25271261</td>
                </tr>

                <tr>
                    <td>Marcos Salas</td>
                    <td>20214532</td>
                    <td>Mirax</td>
                    <td>Minera escondida</td>
                    <td>09/10/2018</td>
                    <td>12/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Solucionado</a></td>
                    <td>25271261</td>
                </tr>

                <tr>
                    <td>Rodrigo Melendez</td>
                    <td>20214532</td>
                    <td>Dentimed</td>
                    <td>BHP</td>
                    <td>09/10/2018</td>
                    <td>14/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">En proceso</a></td>
                    <td>25271261</td>
                </tr>

                <tr>
                    <td>Marcos Salas</td>
                    <td>20214532</td>
                    <td>Mirax</td>
                    <td>Minera escondida</td>
                    <td>09/10/2018</td>
                    <td>12/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Solucionado</a></td>
                    <td>25271261</td>
                </tr>

                <tr>
                    <td>Rodrigo Melendez</td>
                    <td>20214532</td>
                    <td>Dentimed</td>
                    <td>BHP</td>
                    <td>09/10/2018</td>
                    <td>14/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm">En proceso</a></td>
                    <td>25271261</td>
                </tr>

                <tr>
                    <td>Marcos Salas</td>
                    <td>20214532</td>
                    <td>Mirax</td>
                    <td>Minera escondida</td>
                    <td>09/10/2018</td>
                    <td>12/10/2018</td>
                    <td><a href="#" class="d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Solucionado</a></td>
                    <td>25271261</td>
                </tr>



            </tbody>
            </table>
        </div>
        </div>
    </div>

<?php
get_footer();

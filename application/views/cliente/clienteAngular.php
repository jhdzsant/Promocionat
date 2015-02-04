<div id="page-wrapper">
<div class="container-fluid" ng-app="myApp">
    <!--userlist-->
    <div class="panel panel-default" ng-controller="ClienteController">
        <div class="panel-heading">
            <!-- <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel"><span class="fa fa-refresh"></span></a> -->
            <h4>Clientes</h4>
        </div>

        <div class="panel-body panel-refresh" id="userListPanel">
            <div class="row">
                <div class="col-md-2">Mostrar:
                    <select ng-model="entryLimit" class="form-control">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="col-md-3">Filtrar:
                    <input type="text" ng-model="search" ng-change="filter()" placeholder="Filtrar" class="form-control" />
                </div>
                <div class="col-md-4">
                    <h5>Filtrados {{ filtered.length }} of {{ totalItems}} total de Clientes</h5>
                </div>
            </div>
            <div class="table-responsive" ng-show="filteredItems > 0">
                <table id="user-signups" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="hidden-xs">Id del Cliente&nbsp;<a ng-click="sort_by('idCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">Nombre del Cliente&nbsp;<a ng-click="sort_by('nombre')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">RFC del Cliente&nbsp;<a ng-click="sort_by('rfc')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">Estatus del Cliente&nbsp;<a ng-click="sort_by('estatus')"><i class="glyphicon glyphicon-sort"></i></a></th>
                        <th class="hidden-xs">Telefono del Cliente&nbsp;<a ng-click="sort_by('telefonoCliente')"><i class="glyphicon glyphicon-sort"></i></a></th>
                    </tr>
                    </thead>
                    <tbody class="refresh-container">


                    <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                        <td>{{data.idCliente}}</td>
                        <td>{{data.nombre}}</td>
                        <td>{{data.rfc}}</td>
                        <td>{{data.estatus}}</td>
                        <td>{{data.telefonoCliente}}</td>
                    </tr>

                    </tbody>
                </table>
            </div> <!--/.table-responsive-->
            <div class="col-md-12" ng-show="filteredItems == 0">
                <div class="col-md-12">
                    <h4>No customers found</h4>
                </div>
            </div>
            <div class="col-md-12" ng-show="filteredItems > 0">
                <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>


            </div>
        </div><!--/.panel-body-->
    </div><!--/.panel-->
    <!--/userlist-->
</div>
</div>


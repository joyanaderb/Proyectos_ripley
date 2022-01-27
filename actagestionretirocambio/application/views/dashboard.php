

<div class="container-fluid page-body-wrapper">
<div class="main-panel">
        <div class="content-wrapper">
       
        <button onclick="window.print()">Print</button>   
            <div class="row">
                <div class="col-md-4 grid-margin">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <h4 class="mb-0">Campaña FORM.RETAIL</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0"><?php echo $totalcasoscampanaformularioretail; ?></h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="far fa-clock text-muted"></i>
                                              <?php if ($fechayhoraultimacarga): ?>
                            <?php $i = 1;?>
                            <?php foreach ($fechayhoraultimacarga as $st): ?>
                                            <small class=" ml-1 mb-0">Carga realizada el: <?php echo $st->Fecha_Hora ?></small>
                                            
                     <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
                                        </div>
                                    </div>
                                    <small class="text-gray">IR A VER LOS CASOS</small>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-shopping-bag text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                 
                     
                <div class="col-md-4 grid-margin">
                    <div class="card card-statistics">
                        <div class="card-body">
                               <h4 class="mb-0">Campaña ATC VIRTUAL</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                      <h2 class="mb-0"><?php echo $totalcasoscampanaatcvirtual; ?></h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="far fa-clock text-muted"></i>
                                              <?php if ($fechayhoraultimacarga): ?>
                            <?php $i = 1;?>
                            <?php foreach ($fechayhoraultimacarga as $st): ?>
                                            <small class=" ml-1 mb-0">Carga realizada el: <?php echo $st->Fecha_Hora ?></small>
                                            
                     <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
                                        </div>
                                    </div>
                                    <small class="text-gray">IR A VER LOS CASOS</small>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-laptop text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                      <div class="col-md-4 grid-margin">
                    <div class="card card-statistics">
                        <div class="card-body">
                               <h4 class="mb-0">Campaña MERCADO RIPLEY</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                      <h2 class="mb-0"><?php echo $totalcasoscampanamercadoripley; ?></h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="far fa-clock text-muted"></i>
                                              <?php if ($fechayhoraultimacarga): ?>
                            <?php $i = 1;?>
                            <?php foreach ($fechayhoraultimacarga as $st): ?>
                                            <small class=" ml-1 mb-0">Carga realizada el: <?php echo $st->Fecha_Hora ?></small>
                                            
                     <?php $i++;?>
                            <?php endforeach;?>
                                    <?php endif;?>
                                        </div>
                                    </div>
                                    <small class="text-gray">IR A VER LOS CASOS</small>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-shopping-cart text-danger icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
             
            
          <div class="row grid-margin">
              
              
           
                <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                  
                <div class="card-body">
                   
                    
  
                          <div class="py-0">
                        <p class="clearfix">
                          <span class="float-left h5 text-danger">
                           <b>Tipificaciones</b> 
                          </span>
                          <span class="float-right h5 text-danger">
                           <b> Cantidad de casos</b>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Solicitud
                          </span>
                          <span class="float-right text-muted">
                         <?php echo $CFormularioCFRetailTotalSolicitud; ?>  
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Cambio de Producto                          </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCambioProductoprincipal; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---------> Cambio de Producto                          </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCambioProductoSubCategoria; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Cancelación de mi compra                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCancelaciondemiCompraPrincipal; ?>                             </span>
                        </p>
                              
                              <p class="clearfix">
                          <span class="float-left">
--------> Cancelación de mi compra                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCancelaciondemiCompraSubcategoria; ?>                             </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Despacho                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoPrincipal; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Autorizar a un tercero a retirar mi producto                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoAutorizarAunTeceroRetiroProducto; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Cambiar dirección de mi despacho                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoCambiarDirecciondemiDespacho; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Cobro despacho Silver/Gold                        </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoCobroDespachoSilverGold; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> TOTAL CASOS CARGADOS:                        </span>
                          <span class="float-right text-muted">
<?php echo $totalcasoscampanaformularioretail; ?>                             </span>
                        </p>
                 
                      </div>
                
                 
                  
                </div>
              </div>
            </div>
             
        <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                  
                <div class="card-body">
                   
                    
  
                          <div class="py-0">
                        <p class="clearfix">
                          <span class="float-left h5 text-danger">
                           <b>Tipificaciones</b> 
                          </span>
                          <span class="float-right h5 text-danger">
                           <b> Cantidad de casos</b>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Reclamo
                          </span>
                          <span class="float-right text-muted">
                         <?php echo $CATCvirtualtotalReclamos; ?>  
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Despacho                         </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosDespachoPrincipal; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---------> Desconocimiento                          </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosDespachoDesconocimientoSubcat; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Despacho Retrasado                         </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosDespachoDespachoRetrasadoCat; ?>                             </span>
                        </p>
                              
                              <p class="clearfix">
                          <span class="float-left">
----> Post-Venta                         </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosPostVenta; ?>                             </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Entrega con faltante                        </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosPostVentaEntregaConFaltante; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Entrega Erronea                         </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosPostVentaEntregaErronea; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Producto dañado                         </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosPostVentaProductoDanado; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Producto Fallado                        </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosPostVentaProductoFallado; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> TOTAL CASOS CARGADOS:                        </span>
                          <span class="float-right text-muted">
<?php echo $totalcasoscampanaformularioretail; ?>                             </span>
                        </p>
                 
                      </div>
                
                 
                  
                </div>
              </div>
            </div>     
              
              
              
               <div class="col-lg-4 grid-margin stretch-card">
              <div class="card">
                  
                <div class="card-body">
                   
                    
  
                          <div class="py-0">
                        <p class="clearfix">
                          <span class="float-left">
                           <b>Tipificaciones</b> 
                          </span>
                          <span class="float-right text-muted">
                           <b>Cantidad de casos</b>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Reclamo
                          </span>
                          <span class="float-right text-muted">
                         <?php echo $CFormularioCFRetailTotalSolicitud; ?>  
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Cambio de Producto                          </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCambioProductoprincipal; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---------> Desconocimiento                          </span>
                          <span class="float-right text-muted">
<?php echo $CATCvirtualtotalReclamosDespachoDesconocimientoSubcat; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Cancelación de mi compra                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCancelaciondemiCompraPrincipal; ?>                             </span>
                        </p>
                              
                              <p class="clearfix">
                          <span class="float-left">
--------> Cancelación de mi compra                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudCancelaciondemiCompraSubcategoria; ?>                             </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
---> Despacho                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoPrincipal; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> Autorizar a un tercero a retirar mi producto                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoAutorizarAunTeceroRetiroProducto; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Cambiar dirección de mi despacho                         </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoCambiarDirecciondemiDespacho; ?>                             </span>
                        </p>
                                <p class="clearfix">
                          <span class="float-left">
---> Cobro despacho Silver/Gold                        </span>
                          <span class="float-right text-muted">
<?php echo $CFormularioCFRetailSolicitudDespachoCobroDespachoSilverGold; ?>                             </span>
                        </p>
                               <p class="clearfix">
                          <span class="float-left">
---> TOTAL CASOS CARGADOS:                        </span>
                          <span class="float-right text-muted">
<?php echo $totalcasoscampanaformularioretail; ?>                             </span>
                        </p>
                 
                      </div>
                
                 
                  
                </div>
              </div>
            </div>
              
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-gift"></i>
                    Orders
                  </h4>
                  <canvas id="orders-chart"></canvas>
                  <div id="orders-chart-legend" class="orders-chart-legend"></div>                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-chart-line"></i>
                    Sales
                  </h4>
                  <h2 class="mb-5">56000 <span class="text-muted h4 font-weight-normal">Sales</span></h2>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-chart-pie"></i>
                    Sales status
                  </h4>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="sales-status-chart" class="mt-3"></canvas>
                    <div class="pt-4">
                      <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="far fa-futbol"></i>
                    Activity
                  </h4>
                  <ul class="solid-bullet-list">
                    <li>
                      <h5>4 people shared a post
                        <span class="float-right text-muted font-weight-normal small">8:30 AM</span>
                      </h5>
                      <p class="text-muted">It was an awesome work!</p>
                      <div class="image-layers">
                        <div class="img-sm profile-image-text bg-warning rounded-circle image-layer-item">M</div>
                        <img class="img-sm rounded-circle image-layer-item" src="../../images/faces/face3.jpg" alt="profile"/>
                        <img class="img-sm rounded-circle image-layer-item" src="../../images/faces/face5.jpg" alt="profile"/>
                        <img class="img-sm rounded-circle image-layer-item" src="../../images/faces/face8.jpg" alt="profile"/>
                      </div>
                    </li>
                    <li>
                      <h5>Stella posted in a group
                        <span class="float-right text-muted font-weight-normal small">11:40 AM</span>
                      </h5>
                      <p class="text-muted">The team has done a great job</p>
                    </li>
                    <li>
                      <h5>Dobrick posted in material
                        <span class="float-right text-muted font-weight-normal small">4:30 PM</span>
                      </h5>
                      <p class="text-muted">Great work. Keep it up!</p>
                    </li>
                  </ul>
                  <div class="border-top pt-3">
                    <div class="d-flex justify-content-between">
                      <button class="btn btn-outline-dark">More</button>
                      <button class="btn btn-primary btn-icon-text">
                        Add new task
                        <i class="btn-icon-append fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Daily Sales
                  </h4>
                  <p class="card-description">Daily sales for the past one month</p>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                    <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-envelope"></i>
                    Inbox(31)
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td class="font-weight-bold">
                            Andrew Bowen
                          </td>
                          <td>
                            <label class="badge badge-light badge-pill">Development</label>
                          </td>
                          <td>
                            The required fields are added in the database
                          </td>
                          <td>
                            <i class="fas fa-ellipsis-v"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td class="font-weight-bold">
                            Mae Saunders
                          </td>
                          <td>
                            <label class="badge badge-light badge-pill">Development</label>
                          </td>
                          <td>
                            The application will be completed by tomorrow
                          </td>
                          <td>
                            <i class="fas fa-ellipsis-v"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td class="py-1">
                            <div class="img-sm rounded-circle bg-warning profile-image-text">M</div>
                          </td>
                          <td class="font-weight-bold">
                            Manuel Yates
                          </td>
                          <td>
                            <label class="badge badge-light badge-pill">Design</label>
                          </td>
                          <td>
                            The new design is uploaded in zeplin
                          </td>
                          <td>
                            <i class="fas fa-ellipsis-v"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td class="py-1">
                            <img src="../../images/faces/face11.html" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td class="font-weight-bold">
                            Marguerite Phillips
                          </td>
                          <td>
                            <label class="badge badge-light badge-pill">Development</label>
                          </td>
                          <td>
                            Please send me the latest requirements
                          </td>
                          <td>
                            <i class="fas fa-ellipsis-v"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td class="py-1">
                            <div class="img-sm rounded-circle bg-info profile-image-text">C</div>
                          </td>
                          <td class="font-weight-bold">
                            Clifford Wilson
                          </td>
                          <td>
                            <label class="badge badge-light badge-pill">Testing</label>
                          </td>
                          <td>
                            The issues are documented in the shared sheet
                          </td>
                          <td>
                            <i class="fas fa-ellipsis-v"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-table"></i>
                    Sales Data
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Customer</th>
                          <th>Item code</th>
                          <th>Orders</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-bold">
                            Clifford Wilson
                          </td>
                          <td class="text-muted">
                            PT613
                          </td>
                          <td>
                            350
                          </td>
                          <td>
                            <label class="badge badge-success badge-pill">Dispatched</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Mary Payne
                          </td>
                          <td class="text-muted">
                            ST456
                          </td>
                          <td>
                            520
                          </td>
                          <td>
                            <label class="badge badge-warning badge-pill">Processing</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Adelaide Blake
                          </td>
                          <td class="text-muted">
                            CS789
                          </td>
                          <td>
                            830
                          </td>
                          <td>
                            <label class="badge badge-danger badge-pill">Failed</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Adeline King
                          </td>
                          <td class="text-muted">
                            LP908
                          </td>
                          <td>
                            579
                          </td>
                          <td>
                            <label class="badge badge-primary badge-pill">Delivered</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Bertie Robbins
                          </td>
                          <td class="text-muted">
                            HF675
                          </td>
                          <td>
                            790
                          </td>
                          <td>
                            <label class="badge badge-info badge-pill">On Hold</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-calendar-alt"></i>
                    Calendar
                  </h4>
                  <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-thumbtack"></i>
                    Todo
                  </h4>
                  <div class="add-items d-flex">
										<input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
										<button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
									</div>
									<div class="list-wrapper">
										<ul class="d-flex flex-column-reverse todo-list">
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Meeting with Alisa
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
											<li class="completed">
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Call John
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Create invoice
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Print Statements
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
											<li class="completed">
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" checked>
														Prepare for presentation
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
											<li>
												<div class="form-check">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Pick up kids from school
													</label>
												</div>
												<i class="remove fa fa-times-circle"></i>
											</li>
										</ul>
									</div>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-rocket"></i>
                    Projects
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            Assigned to
                          </th>
                          <th>
                            Project name
                          </th>
                          <th>
                            Priority
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face1.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td>
                            South Shyanne
                          </td>
                          <td>
                            <label class="badge badge-warning badge-pill">Medium</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td>
                            New Trystan
                          </td>
                          <td>
                            <label class="badge badge-danger badge-pill">High</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face3.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td>
                            East Helga
                          </td>
                          <td>
                            <label class="badge badge-success badge-pill">Low</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../images/faces/face4.jpg" alt="profile" class="img-sm rounded-circle"/>
                          </td>
                          <td>
                            Omerbury
                          </td>
                          <td>
                            <label class="badge badge-warning badge-pill">Medium</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-facebook btn-rounded">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Facebook</h5>
                        <p class="mb-0">813 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-twitter btn-rounded">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Twitter</h5>
                        <p class="mb-0">9000 followers</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-google btn-rounded">
                        <i class="fab fa-google-plus-g"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Google plus</h5>
                        <p class="mb-0">780 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <button class="btn btn-social-icon btn-linkedin btn-rounded">
                        <i class="fab fa-linkedin-in"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Linkedin</h5>
                        <p class="mb-0">1090 connections</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
</div>
      <div class="main-panel">
        <div class="content-wrapper">
       
            
            
            <div class="row">
                <div class="col-md-6 grid-margin">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <h4 class="mb-0">Campaña Formulario Retail</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0"><?php echo $totalcasoscampanaformularioretail; ?></h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="far fa-clock text-muted"></i>
                                            <small class=" ml-1 mb-0">Carga realizada a las: 9:10am</small>
                                        </div>
                                    </div>
                                    <small class="text-gray">IR A VER LOS CASOS</small>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-chart-pie text-info icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin">
                    <div class="card card-statistics">
                        <div class="card-body">
                               <h4 class="mb-0">Casos Formulario</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                      <h2 class="mb-0"><?php echo $totalcasoscargaforlumario; ?></h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="far fa-clock text-muted"></i>
                                                 <small class=" ml-1 mb-0">Carga realizada a las: 9:10am</small>
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
           
                <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Campaña FORMULARIO RETAIL</h4>
                 
                  <div class="table-responsive">
                    <table class="table">
                        
                      <thead>
                        <tr>
                          <th>Tipificaciones</th>
                          <th>Casos</th>
                
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            
                            
                          <td><h3>Solicitud</h3></td>
                            
                          
                          <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-ban mr-2"></i><?php echo $CFormularioRetailTotalSolicitud; ?></button></td>
                                               
                  
                        </tr>
                          
                        <tr>
                          <td>Cancelación de mi compra</td>
                    
                             <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioCFRetailCencelaciondemicomprasubcategoria; ?></button></td>
                        </tr>
                        
                        <tr>
                            <td><h5>Despacho</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioCFRetailSolicitudDespacho; ?></button></td>
                        </tr>
                        <tr>
                          <td>Cobro despacho Silver/Gold</td>
                     
                               <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-exclamation-circle mr-2"></i><?php echo $CFormularioCFRetailSolicitudDespachoCobroSilverGold; ?></button></td>
                            
                     
                        </tr>
                           <tr>
                            <td><h5>Gift Card</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioCFRetailSolicitudGiftCard; ?></button></td>
                        </tr>
                          
                        
                           <tr>
                          <td>Extender vigencia Gift Card</td>
                       <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-frown mr-2"></i><?php echo $CFormularioCFRetailSolicitudGiftCardExternerVigenciaGC; ?></button></td>
                     
                               
                               
                        </tr>
                           <tr>
                            <td><h5>Cambio de Producto</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioCFRetailSolicitudCambioProducto; ?></button></td>
                        </tr>
                          
                          
                           <tr>
                          <td>Cambio de Producto</td>
                          <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-meh mr-2"></i><?php echo $CFormularioCFRetailSolicitudCambioProductoSubCategoria; ?></button></td>
                     
                        </tr>
                          
                           <tr>
                            <td><h5>Reclamo, error pagina Ripley.com</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioCFRetailSolicitudErrorComprasEnRipleycom; ?></button></td>
                        </tr>
                       
                            <tr>
                          <td><h5>TOTAL GENERAL</h5></td>
                        <td><button type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit
 mr-2"></i><?php echo $CFormularioCFRetailTotalCasosFormularioRetail; ?></button></td>     
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             
              <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Campaña Formulario Retail, Campaña MERCADO RIPLEY</h4>
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tipificaciones</th>
                          <th>Cantidad Casos</th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><h5>Solicitud</h5></td>
                          
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CMercadoRipleyTotalSolicitud; ?></button></td>
                            
                        </tr>
                           <tr>
                          <td><h5>Arrepentimiento de Compra</h5></td>
                          
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CMercadoRipleySolicitudArrepentimientoCompra; ?></button></td>
                                               
                            
                        </tr>
                        <tr>
                          <td>Post-Venta</td>
                       
                             <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-ban mr-2"></i><?php echo $CMercadoRipleySolicitudArrepentimientoCompraPostVenta; ?></button></td>
                        </tr>
                       
                       
                      
                         
                         
                            <tr>
                          <td><h5>TOTAL GENERAL</h5></td>
                        <td><button type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit
 mr-2"></i><?php echo $CMercadoRipleyTotal; ?></button></td>     
                         
                              
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              
               <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Casos Formulario, Campaña ATC VIRTUAL CCR</h4>
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tipificaciones</th>
                          <th>Cantidad Casos</th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                             <tr>
                          <td><h5>Reclamo</h5></td>
                          
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioTotalReclamos; ?></button></td>
                                               
                            
                        </tr>
                        <tr>
                          <td><h5>->Despacho</h5></td>
                          
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioTotalReclamosDespacho; ?></button></td>
                                               
                       
                        </tr>
                        <tr>
                          <td>Desconocimiento</td>
                       
                             <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-ban mr-2"></i><?php echo $CFormularioTotalReclamosDespachoDesconocimiento; ?></button></td>
                            
                            
                        </tr>
                        <tr>
                          <td>Despacho retrasado</td>
                      
                      
                               <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-clock mr-2"></i><?php echo $CFormularioTotalReclamosDespachoDespachoRetrasado; ?></button></td>
                            
                    
                        </tr>
                        <tr>
                            <td><h5>Post-Venta</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioTotalReclamosPostVenta; ?></button></td>
                        </tr>
                        <tr>
                          <td>Entrega con Faltante</td>
                     
                               <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-exclamation-circle mr-2"></i><?php echo $CFormularioTotalReclamosPostVentaEntregaconFaltante; ?></button></td>
                            
                     
                        </tr>
                           <tr>
                          <td>Entrega Erronea</td>
                       <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-frown mr-2"></i><?php echo $CFormularioTotalReclamosPostVentaEntregaErronea; ?></button></td>
                     
                        </tr>
                           <tr>
                          <td>Producto Dañado</td>
                          <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-meh mr-2"></i><?php echo $CFormularioTotalReclamosPostVentaProductoDanado; ?></button></td>
                     
                        </tr>
                            <tr>
                          <td>Producto Fallado</td>
                     
                              <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-wrench mr-2"></i><?php echo $CFormularioTotalReclamosPostVentaProductoFallado; ?></button></td>     
                   
                        </tr>
                            <tr>
                          <td><h5>TOTAL GENERAL</h5></td>
                        <td><button type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit
 mr-2"></i><?php echo $CFormularioTotalReclamos; ?></button></td>     
                         
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              
               <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Casos Formulario, Campaña MERCADO RIPLEY</h4>
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tipificaciones</th>
                          <th>Cantidad Casos</th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><h5>->Reclamo</h5></td>
                          
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioMercadoRipleyTotalReclamos; ?></button></td>
                                               
                            
                        </tr>
                     
                        <tr>
                          <td>Despacho retrasado</td>
                      
                      
                               <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-clock mr-2"></i><?php echo $CFormularioMercadoRipleyReclamoDespachoRetrasado; ?></button></td>
                        </tr>
                        <tr>
                            <td><h5>Post-Venta</h5></td>
                       
                          <td><button type="button" class="btn btn-primary btn-sm"><?php echo $CFormularioMercadoRipleyReclamoPostVenta; ?></button></td>
                        </tr>
                        <tr>
                          <td>Entrega con Faltante</td>
                     
                               <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-exclamation-circle mr-2"></i>293</button></td>
                            
                     
                        </tr>
                           <tr>
                          <td>Entrega Erronea</td>
                       <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-frown mr-2"></i>293</button></td>
                     
                        </tr>
                           <tr>
                          <td>Producto Dañado</td>
                          <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-meh mr-2"></i>293</button></td>
                     
                        </tr>
                            <tr>
                          <td>Producto Fallado</td>
                     
                              <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-wrench mr-2"></i>293</button></td>     
                   
                        </tr>
                            <tr>
                          <td><h5>TOTAL GENERAL</h5></td>
                        <td><button type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit
 mr-2"></i>293</button></td>     
                         
                        </tr>
                      </tbody>
                    </table>
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
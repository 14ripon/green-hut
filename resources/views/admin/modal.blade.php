@extends('admin.layouts.app')

@section('title', 'Projects - Feature & Amenity')
@push('css')
    <link href="{{ asset('admin/assets/plugins/modals/modal-component.css')}}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper px-4">
                <!-- Main content -->
                <div class="content">
      					<!-- page header-->
      					<div class="content-header">
      					  <div class="header-icon">
      						  <i class="pe-7s-date"></i>
      					  </div>
      					  <div class="header-title">
      						  <h1>Modal</h1>
      						  <small>Modal window examples</small>
      						  <ul class="breadcrumb">
      							  <li><a class="pr-2" href="index.html"><i class="pe-7s-home"></i> Home</a>/</li>
      							  <li><a class="px-2" href="#">UI Elements</a>/</li>
      							  <li class="active px-2">Modal</li>
      						  </ul>
      					  </div>
      				  </div>
      				  <div class="clearfix"></div>
      				  <!-- this page conntent-->
                <!--content header-->
                <div class="content-header py-3 mb-0 border border-top-0 border-right-0 bg-white border-left-0">
                  <h1 class=" text-center">Nifty Modal Window Effects</h1>
                  <h3 class="text-center text-secondary">Some inspiration for different modal window appearances</h3>
                </div>
                <!--content-->
                <div class="p-3 main-conent mb-4 bg-white py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="column">
                                <p class="text-right h2 ml-5">There are many possibilities for modal overlays to appear. Here are some modern ways of showing them using CSS transitions and animations.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="column">
                                <!-- All modals added here for the demo. You would of course just have one, dynamically created -->
                                <!-- Modal fade in & scale effect -->
                                <div class="md-modal md-effect-1" id="modal-1">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal slide in (right) effects -->
                                <div class="md-modal md-effect-2" id="modal-2">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal slide in (bottom) effects -->
                                <div class="md-modal md-effect-3" id="modal-3">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal newspaper effects -->
                                <div class="md-modal md-effect-4" id="modal-4">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal fall effects -->
                                <div class="md-modal md-effect-5" id="modal-5">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal side fall effects -->
                                <div class="md-modal md-effect-6" id="modal-6">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal sticky up effects -->
                                <div class="md-modal md-effect-7" id="modal-7">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D flip (horizontal) effects -->
                                <div class="md-modal md-effect-8" id="modal-8">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D flip (vertical) effects -->
                                <div class="md-modal md-effect-9" id="modal-9">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D sign effects -->
                                <div class="md-modal md-effect-10" id="modal-10">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal super scaled effects -->
                                <div class="md-modal md-effect-11" id="modal-11">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal just Me effects -->
                                <div class="md-modal md-effect-12" id="modal-12">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D slit effects -->
                                <div class="md-modal md-effect-13" id="modal-13">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D rotate bottom effects -->
                                <div class="md-modal md-effect-14" id="modal-14">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal 3D rotate in left effects -->
                                <div class="md-modal md-effect-15" id="modal-15">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal blur effects -->
                                <div class="md-modal md-effect-16" id="modal-16">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal let me in effects -->
                                <div class="md-modal md-effect-17" id="modal-17">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal make way! effects -->
                                <div class="md-modal md-effect-18" id="modal-18">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal slip from top effects -->
                                <div class="md-modal md-effect-19" id="modal-19">
                                    <div class="md-content">
                                        <h3>Modal Dialog</h3>
                                        <div class="n-modal-body">
                                            <p>This is a modal window. You can do the following things with it:</p>
                                            <ul>
                                                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                                                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                                                <li><strong>Close:</strong> click on the button below to close the modal.</li>
                                            </ul>
                                            <button class="btn btn-base md-close">Close me!</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-1">Fade in &amp; Scale</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-2">Slide in (right)</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-3">Slide in (bottom)</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-4">Newspaper</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-5">Fall</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-6">Side Fall</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-7">Sticky Up</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-8">3D Flip (horizontal)</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-9">3D Flip (vertical)</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-10">3D Sign</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-11">Super Scaled</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-12">Just Me</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-13">3D Slit</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-14">3D Rotate Bottom</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-15">3D Rotate In Left</button>
                                <button class="btn btn-base md-trigger mb-2 mr-1" data-modal="modal-16">Blur</button>
                                <!-- special modal that will add a perspective class to the html element -->
                                <button class="btn btn-base md-trigger md-setperspective mr-1 mb-2" data-modal="modal-17">Let me in</button>
                                <button class="btn btn-base md-trigger md-setperspective mr-1 mb-2" data-modal="modal-18">Make way!</button>
                                <button class="btn btn-base md-trigger md-setperspective mr-1 mb-2" data-modal="modal-19">Slip from top</button>
                                <!-- the overlay element -->
                                <div class="md-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                  <div class="col-md-6">
                    <div class="card lobicard" data-sortable="true"><!--lobipanel-->
                    <div class="card-header">
                        <div class="card-title">
                            Modal
                        </div>
                    </div>
                    <div class="card-block p-3"><!--lobipanelbody-->
                        <h4 class="header-title mt0"><b>Modal windows</b></h4>
                        <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
                        <p>Modal contains title, content and footer</p>
                        <div class="">
                            <button type="button" class="btn btn-base mb-3" data-toggle="modal" data-target="#myModal">Lunch demo modal</button>
                        </div>
                        <div class="mt-3">
                            <pre>&lt;button type="button" class="btn btn-base"
                                data-toggle="modal" data-target="#myModal"&gt;
                                Launch demo modal
                        &lt;/button&gt; </pre>
                        </div>
                        <br>

                        <h4 class="header-title m-t-0"><b> Modal size and colors</b></h4>
                        <p>Modals have two optional sizes, available via modifier classes to be placed on a .modal-dialog</p>
                        <div class="mb-2">
                            <button type="button" class="btn btn-purple mb-3" data-toggle="modal" data-target="#modal-lg">Large Modal</button>
                            <button type="button" class="btn btn-purple mb-3" data-toggle="modal" data-target="#modal-sm">Small Modal</button>
                        </div>
                        <p class="mb-2">You can add extra class to color your modal window avalible class (<code>modal-success</code>, <code>modal-primary</code>, <code>mmodal-warning</code>,
                            <code>hmodal-danger</code>)</p>
                        <div class="mb-2">
                            <button type="button" class="btn btn-base mr-1 mb-3" data-toggle="modal" data-target="#modal-success">Success</button>
                            <button type="button" class="btn btn-primary mr-1 mb-3" data-toggle="modal" data-target="#modal-primary">Primary</button>
                            <button type="button" class="btn btn-warning mr-1 mb-3" data-toggle="modal" data-target="#modal-warning">Warning</button>
                            <button type="button" class="btn btn-danger mr-1 mb-3" data-toggle="modal" data-target="#modal-danger">Danger</button>
                        </div>
                        <div class="mt-3">
                            <pre>
  var modalInstance = $modal.open({
  templateUrl: 'views/modal/modal_example2.html',
  controller: ModalInstanceCtrl,
  windowClass: "hmodal-success"
  }); 
                            </pre>
                        </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h1 class="modal-title">Modal title</h1>
                              </div>
                              <div class="modal-body">
                                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                      layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                      using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                      page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                      sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                      purpose (injected humour and the like).</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-base">Save changes</button>
                              </div>
                          </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  <!-- Modal large -->
                            <div class="modal fade" id="modal-lg" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-base">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal small -->
                            <div class="modal fade" id="modal-sm" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-base">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal success -->
                            <div class="modal fade modal-success" id="modal-success" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-base">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal primary -->
                            <div class="modal fade modal-primary" id="modal-primary" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal warning -->
                            <div class="modal fade modal-warning" id="modal-warning" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-warning">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Modal denger -->
                            <div class="modal fade modal-danger" id="modal-danger" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Modal title</h1>
                                        </div>
                                        <div class="modal-body">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                                using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                                sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                                                purpose (injected humour and the like).</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger">Save changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                          </div><!--lobipanel body-->
                      </div><!--lobipanel-->
                    </div><!--col-->

                    <div class="col-md-6">
                      <div class="card lobicard" data-sortable="true"><!--lobipanel-->
                          <div class="card-header">
                              <div class="card-title">
                                  Option
                              </div>
                          </div>
                          <div class="card-block p-3"><!--lobipanelbody-->
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-80p">Name</th>
                                            <th class="w-80p">type</th>
                                            <th class="w-80p">default</th>
                                            <th>description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>backdrop</td>
                                            <td>boolean or the string <code>'static'</code></td>
                                            <td>true</td>
                                            <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
                                        </tr>
                                        <tr>
                                            <td>keyboard</td>
                                            <td>boolean</td>
                                            <td>true</td>
                                            <td>Closes the modal when escape key is pressed</td>
                                        </tr>
                                        <tr>
                                            <td>show</td>
                                            <td>boolean</td>
                                            <td>true</td>
                                            <td>Shows the modal when initialized.</td>
                                        </tr>
                                        <tr>
                                            <td>remote</td>
                                            <td>path</td>
                                            <td>false</td>
                                            <td>
                                                <p><strong class="text-danger">This option is deprecated since v3.3.0 and has been removed in v4.</strong> We recommend instead using client-side templating or a data binding framework, or calling <a href="http://api.jquery.com/load/">jQuery.load</a> yourself.</p>
                                                <p>If a remote URL is provided, <strong>content will be loaded one time</strong> via jQuery's <code>load</code> method and injected into the <code>.modal-content</code> div. If you're using the data-api, you may alternatively use the <code>href</code> attribute to specify the remote source. An example of this is shown below:</p>
                                                <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                                                <figure class="highlight"><pre>
<code class="" data-lang="html"><span class="nt">&lt;a</span> <span class="na">data-toggle=</span> <span class="s">"modal"</span> <span class="na">hre
f=</span><span class="s">"remote.html"</span> <span class="na">data-targe
  t=</span><span class="s">"#modal"</span><span class="nt">&gt;</span>Click me<span class="nt">&lt;/a&gt;</span></code>
                                                </pre></figure>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                          </div><!--lobipanel body-->
                      </div><!--lobipanel-->
                    </div><!--col-->
                  </div><!--/row-->

                </div><!-- /content -->

              </div><!-- /content-wrapper -->
      
@endsection

@push('js')
    <script src="{{ asset('admin/assets/plugins/modals/classie.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/modals/modalEffects.js') }}"></script>
@endpush

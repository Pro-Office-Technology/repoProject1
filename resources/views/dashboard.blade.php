@extends('layouts.app')

@section('title', 'Index Field')
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
  <div class="pcoded-main-container">
    <div class="pcoded-wrapper">
      <div class="pcoded-content">
        <div class="pcoded-inner-content">
          <div class="main-body">
            <div class="page-wrapper">
              <!-- [ breadcrumb ] start -->
              <div class="page-header">
                <div class="page-block">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                      <div class="page-header-title">
                        <h5>Home</h5>
                      </div>
                      <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!"> Dashboard</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- [ breadcrumb ] end -->
              <!-- [ Main Content ] start -->
              <div class="row">
                <div class="col-xl-8 col-md-12">
                  <div class="row">
                    <!-- table card-1 start -->
                    <div class="col-md-6">
                      <div class="card table-card">
                        <div class="row-table">
                          <div class="col-sm-6 card-body-big br">
                            <div class="row">
                              <div class="col-sm-4">
                                <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>10k</h5>
                                <span>Visitors</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 card-body-big">
                            <div class="row">
                              <div class="col-sm-4">
                                <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>100%</h5>
                                <span>Volume</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row-table">
                          <div class="col-sm-6 card-body-big br">
                            <div class="row">
                              <div class="col-sm-4">
                                <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>2000 +</h5>
                                <span>Files</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 card-body-big">
                            <div class="row">
                              <div class="col-sm-4">
                                <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>120</h5>
                                <span>Mails</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- table card-1 end -->
                    <!-- table card-2 start -->
                    <div class="col-md-6">
                      <div class="card table-card">
                        <div class="row-table">
                          <div class="col-sm-6 card-body-big br">
                            <div class="row">
                              <div class="col-sm-4">
                                <i class="icon feather icon-share-2 text-c-purple mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>1000</h5>
                                <span>Shares</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 card-body-big">
                            <div class="row ">
                              <div class="col-sm-4">
                                <i class="icon feather icon-wifi text-c-purple mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>600</h5>
                                <span>Network</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row-table">
                          <div class="col-sm-6 card-body-big br">
                            <div class="row ">
                              <div class="col-sm-4">
                                <i class="icon feather icon-rotate-ccw text-c-purple mb-1 d-block"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>3550</h5>
                                <span>Returns</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6 card-body-big">
                            <div class="row ">
                              <div class="col-sm-4">
                                <i class="icon feather icon-shopping-cart text-c-purple mb-1 d-blockz"></i>
                              </div>
                              <div class="col-sm-8 text-md-center">
                                <h5>100%</h5>
                                <span>Order</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- table card-2 end -->
                    <!-- account-section start -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <h6 class="text-c-blue mb-3">Department wise annual recurring and profit </h6>
                          <div class="row">
                            <div class="col-auto mb-3">
                              <h3>$687,578</h3>
                              <h6><i class="feather icon-trending-down text-c-red mr-2"></i>Marketing Growth</h6>
                              <span>Measure How Fast You're Growing in <br>current Market.<span class="text-c-blue">Learn More</span></span>
                            </div>
                            <div class="col mb-3">
                              <h3>30%</h3>
                              <h6><i class="feather icon-trending-up text-c-blue mr-2"></i>Annual profit/stakeholders</h6>
                              <span>Ave 30% or more profite provide to investor as <br>Anual return.<span class="text-c-blue">Learn More</span></span>
                            </div>
                          </div>
                        </div>
                        <div id="account-chart" style="height:215px;width:100%;"></div>
                      </div>
                    </div>
                    <!-- account-section end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



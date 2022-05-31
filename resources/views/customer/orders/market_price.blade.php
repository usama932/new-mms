@extends('layouts.customer')
@section('content')
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                   <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">Market Price</h3>
                   </div>
                   <!-- .nk-block-head-content -->
                   <!-- .nk-block-head-content -->
                </div>
                <!-- .nk-block-between -->
             </div>
             <!-- .nk-block-head -->
                   <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
              "symbols": [
              {
                  "description": "GOLD/USD",
                  "proName": "TVC:GOLD"
              },
              {
                  "description": "SILVER/USD",
                  "proName": "TVC:SILVER"
              },
              {
                  "description": "PLATINUM/USD",
                  "proName": "TVC:PLATINUM"
              },
              {
                  "description": "PALLADIUM/USD",
                  "proName": "TVC:PALLADIUM"
              },
              {
                  "description": "BTC/USD",
                  "proName": "CRYPTOCAP:BTC"
              }
          ],
              "colorTheme": "light",
              "isTransparent": false,
              "showSymbolLogo": false,
              "locale": "en"
          }
      </script>
  </div>
  <!-- TradingView Widget END -->
             <div class="col-12  ">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container text-center">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                   <h4 class="nk-block-title mx-5 mt-5 mb-2">The world Spot Price - Asia/Europe/NY</h4>
                                </div>
                             </div>
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                {
                                    "width": "100%",
                                    "height": "450",
                                    "symbolsGroups": [
                                    {
                                        "name": "Metals",
                                        "symbols": [
                                            {
                                                "name": "NYSE:GOLD",
                                                "displayName": "GOLD"
                                            },
                                            {
                                                "name": "CURRENCYCOM:SILVER",
                                                "displayName": "SILVER"
                                            },
                                            {
                                                "name": "CURRENCYCOM:PLATINUM",
                                                "displayName": "PLATINUM"
                                            },
                                            {
                                                "name": "CURRENCYCOM:PALLADIUM",
                                                "displayName": "PALLADIUM"
                                            },
                                            {
                                                "name": "LSE:XRH0",
                                                "displayName": "RHODIUM"
                                            }
                                        ]
                                    }
                                ],
                                    "showSymbolLogo": true,
                                    "colorTheme": "light",
                                    "isTransparent": false,
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                   {{-- <div class="col-6">
                      <div class="card mr-5">
                         <div class="nk-block nk-block-lg">
                            <div>
                               <div class="nk-block-head">
                                  <div class="nk-block-head-content">
                                     <h4 class="nk-block-title mx-4 mt-4 mb-2">Gold Indicators</h4>
                                     <div class="nk-block-des  mx-4 mt-4 mb-2">
                                        <p class="text-primary">Index data delayed 10 min.</p>
                                     </div>
                                  </div>
                               </div>
                               <div >
                                  <table  data-auto-responsive="false">
                                     <tbody>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG" alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">XAU</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span>+99.99%</span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">HUI</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span>+99.99%</span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">JSE GOLD</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span>+99.99%</span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">TSX GOLD</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span>+99.99%</span>
                                           </td>
                                        </tr>
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                            <!-- .card-preview -->
                         </div>
                      </div>
                   </div>
                   <div class="col-6 mb-4">
                      <div class="card mr-5">
                         <div class="nk-block nk-block-lg">
                            <div>
                               <div class="nk-block-head">
                                  <div class="nk-block-head-content">
                                     <h4 class="nk-block-title mx-4 mt-3 ">Gold Ratio</h4>
                                     <div class="nk-block-des  mx-4 ">
                                        <p class="text-primary">Index data delayed 10 min.</p>
                                     </div>
                                  </div>
                               </div>
                               <div >
                                  <table  data-auto-responsive="false">
                                     <tbody>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">Silver</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span><br>
                                              <span></span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG" alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">Platinum</span><br>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span></span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">XAU</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span>
                                              <span></span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">Rhodium</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span><br>
                                              <span></span>
                                           </td>
                                        </tr>
                                        <tr class="nk-tb-item">
                                           <td class="nk-tb-col">
                                              <div class="user-card">
                                                 <img src="./images/aaa.PNG"  alt="" class="rounded" width="20%" height="20%">
                                                 <span class="title mx-3">Silver</span>
                                              </div>
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-lg">
                                           </td>
                                           <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                              <span class="tb-amount">172.98</span><br>
                                              <span></span>
                                           </td>
                                        </tr>
                                     </tbody>
                                  </table>
                               </div>
                            </div>
                            <!-- .card-preview -->
                         </div>
                      </div>
                   </div> --}}
                </div>
             </div>
             {{-- <div class="nk-block nk-block-lg">
                <div class="card card-preview">
                   <div class="nk-block-head">
                      <div class="nk-block-head-content">
                         <h4 class="nk-block-title mx-5 mt-5 mb-2">New York Spot Price</h4>
                      </div>
                   </div>
                   <div class="card-inner">
                      <table  data-auto-responsive="false">
                         <thead>
                            <tr class="nk-tb-item nk-tb-head">
                               <th class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid">
                                     <label class="custom-control-label" for="uid"></label>
                                  </div>
                               </th>
                               <th class="nk-tb-col"><span class="sub-text">Metals</span></th>
                               <th class="nk-tb-col tb-col-mb"><span class="sub-text">Date</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Time(EST)</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text"></span></th>
                               <th class="nk-tb-col tb-col-lg"><span class="sub-text">Bid</span></th>
                               <th class="nk-tb-col tb-col-lg"><span class="sub-text">Ask</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Change</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Low</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text ">High</span></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img src="./images/coin.png"  alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead">Gold<span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                            </tr>
                            <!-- .nk-tb-item  -->
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img src="./images/silver.PNG"  alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead">silver<span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                            </tr>
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img src="./images/platinum.PNG"  alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead"> Platinum<span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                            </tr>
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img src="./images/rhodium.PNG" alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead">Rohdium<span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                            </tr>
                            <!-- .nk-tb-item  -->
                         </tbody>
                      </table>
                   </div>
                </div>
                <!-- .card-preview -->
             </div>
             <div class="nk-block nk-block-lg">
                <div class="card card-preview">
                   <div class="nk-block-head">
                      <div class="nk-block-head-content">
                         <h4 class="nk-block-title mx-5 mt-5 mb-2">The world Spot Price - Asia/Europe/NY</h4>
                      </div>
                   </div>
                   <div class="card-inner">
                      <table  data-auto-responsive="false">
                         <thead>
                            <tr class="nk-tb-item nk-tb-head">
                               <th class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid">
                                     <label class="custom-control-label" for="uid"></label>
                                  </div>
                               </th>
                               <th class="nk-tb-col"><span class="sub-text">Metals</span></th>
                               <th class="nk-tb-col tb-col-mb"><span class="sub-text">Date</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Time(EST)</span></th>
                               <th class="nk-tb-col tb-col-lg"><span class="sub-text">Bid</span></th>
                               <th class="nk-tb-col tb-col-lg"><span class="sub-text">Ask</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Change</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">Low</span></th>
                               <th class="nk-tb-col tb-col-md"><span class="sub-text">High</span></th>
                               <th ></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img  src="./images/coin.png" alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead"> Gold <span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td></td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span></span>
                               </td>
                            </tr>
                            <!-- .nk-tb-item  -->
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-avatar">
                                        <img src="./images/silver.PNG"  alt="">
                                     </div>
                                     <div class="user-info">
                                        <span class="tb-lead"> Silver<span class="dot dot-warning d-md-none ml-1"></span></span>
                                     </div>
                                  </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                  <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                                  <span>19.01</span>
                               </td>
                               <!-- <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified"> -->
                               <!-- </td> -->
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                               <td></td>
                               <td class="nk-tb-col tb-col-lg">
                                  <span>1900.01</span>
                               </td>
                            </tr>
                            <tr class="nk-tb-item">
                               <td class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox notext">
                                     <input type="checkbox" class="custom-control-input" id="uid1">
                                     <label class="custom-control-label" for="uid1"></label>
                                  </div>
                               </td>
                               <td class="nk-tb-col">
                                  <div class="user-card">
                                     <div class="user-card">
                                        <div class="user-avatar">
                                           <img src="./images/platinum.PNG"alt="">
                                        </div>
                                        <div class="user-info">
                                           <span class="tb-lead"> Platinum<span class="dot dot-warning d-md-none ml-1"></span></span>
                                        </div>
                                     </div>
                               </td>
                               <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                               <span class="tb-amount">20/10/2022</span>
                               </td>
                               <td class="nk-tb-col tb-col-md">
                               <span>19.01</span>
                               </td>
                               <!-- <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified"> -->
                               <!-- </td> -->
                               <td class="nk-tb-col tb-col-lg">
                               <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                               <span>1900.01</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                               <span>+10.09/+0.00%</span>
                               </td>
                               <td class="nk-tb-col tb-col-lg">
                               <span>1900.01</span>
                               </td>
                               <td></td>
                               <td class="nk-tb-col tb-col-lg">
                               <span>1900.01</span>
                               </td>
                            </tr>
                            <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                            <input type="checkbox" class="custom-control-input" id="uid1">
                            <label class="custom-control-label" for="uid1"></label>
                            </div>
                            </td>
                            <td class="nk-tb-col">
                            <div class="user-card">
                            <div class="user-avatar">
                            <img src="./images/rhodium.PNG" alt="">
                            </div>
                            <div class="user-info">
                            <span class="tb-lead"> Rohdium<span class="dot dot-warning d-md-none ml-1"></span></span>
                            </div>
                            </div>
                            </td>
                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">20/10/2022</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                            <span>19.01</span>
                            </td>
                            <!-- <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified"> -->
                            <!-- </td> -->
                            <td class="nk-tb-col tb-col-lg">
                            <span>1900.01</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                            <span>1900.01</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                            <span>+10.09/+0.00%</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                            <span>1900.01</span>
                            </td>
                            <td></td>
                            <td class="nk-tb-col tb-col-lg">
                            <span>1900.01</span>
                            </td>
                            </tr>
                            <!-- .nk-tb-item  -->
                         </tbody>
                      </table>
                      </div>
                   </div>
                   <!-- .card-preview -->
                </div>
                <!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                   <div class="nk-block-head">
                      <div class="nk-block-head-content">
                         <h5 class="nk-block-title"> Grade the Customer</h5>
                         <div class="nk-block-des">
                            <p>Add information to edit grade.</p>
                         </div>
                      </div>
                   </div>
                   <!-- .nk-block-head -->
                   <div class="nk-block">
                      <div class="row g-3">
                         <div class="col-12">
                            <div class="form-group">
                               <label class="form-label" for="product-title">Grades</label>
                               <div class="nk-tb-col nk-tb-col-check">
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>A+</strong></label>
                                  </div>
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>A</strong></label>
                                  </div>
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>B+</strong></label>
                                  </div>
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>C</strong></label>
                                  </div>
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>D</strong></label>
                                  </div>
                                  <div class="custom-control custom-control-sm custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="com-email">
                                     <label class="custom-control-label" for="com-email"><strong>F</strong></label>
                                  </div>
                               </div>
                               <!-- <div class="form-control-wrap">
                                  <input type="text" class="form-control" id="product-title">
                                  </div> -->
                            </div>
                         </div>
                         <div class="col-12 ">
                            <!-- <button class="btn btn-primary float-right"> <span>Next</span></button> -->
                            <li><a href="html/ecommerce/Customerprofile.html" class="btn btn-primary d-none d-md-inline-flex float-right" ><span>Next</span></a></li>
                            <!-- <a href="html/ecommerce/supports.html" data-target="addProduct"  class="toggle btn btn-icon btn-primary d-md-none"></a> -->
                            <!-- <a href="html/ecommerce/Customerprofile.html" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex float-right"><span>Next</span></a> -->
                         </div>
                      </div>
                   </div>
                   <!-- .nk-block -->
                </div>
             </div> --}}
          </div>
       </div>
    </div>

@endsection

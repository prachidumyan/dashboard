
        @extends('app')

@section('vechile_details')
        <div id="content-page" class="content-page">
           
            <div class="container-fluid">
              
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title" id="flex-box">
                              <h4 class="card-title">All 0  Vehicle Details</h4>
                              <button class="collaspe" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                <img src="{{ asset('images/dash.png') }}" width="15px" height="15px">
                            </button>
                              <button id="close-button"><img src="{{ asset('images/closeIcon.png') }}" width="15px" height="15px"></button>
                           </div>
                        </div>
                        <hr>
                        <div class="iq-card-body" class="collapse" id="collapseExample" aria-labelledby="card-title">
                           <div class="table-responsive">
							   <table class="table table-striped"  id="vehicle_table">
								  <thead>
									 <tr>
                                        <th scope="col">Sl.No.</th>
										<th scope="col">USER</th>
										<th scope="col">REGISTRATION NO</th>
										<th scope="col">MODEL</th>
										<th scope="col">MANUFACTURED DATE</th>
										<th scope="col">REGISTRATION DATE</th>
										<th scope="col" class="actis">ACTION</th>

									 </tr>
								  </thead>
								  
							   </table>
							</div>
                        </div>
                     </div>
					</div>
               </div>
            </div>
         </div>
@endsection
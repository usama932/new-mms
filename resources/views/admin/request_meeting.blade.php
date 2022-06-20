<x-app-layout>
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
           <div class="nk-block-between">
              <div class="nk-block-head-content">
                 <h3 class="nk-block-title page-title">Consultation Meetings</h3>
              </div>
           </div>
           <!-- .nk-block-between -->
           @if(Session::has('danger'))
           <div class="alert alert-danger">
              {{ Session::get('danger') }}
              @php
              Session::forget('danger');
              @endphp
           </div>
           @endif
           @if(Session::has('success'))
           <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
              Session::forget('success');
              @endphp
           </div>
           @endif
        </div>
        <!-- .nk-block-head -->
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        <div class="card card-preview">
           <div class="card-inner">
            <div class="table-responsive">
              <table class="datatable-init table"  data-auto-responsive="false">
                 <thead>
                    <tr>
                        <th>Sr #</th>
                       <th>Client Name</th>
                       <th>Phone</th>
                       <th>Requested Date</th>
                       <th>Requested Time</th>
                       <th>Action</th>

                    </tr>
                 </thead>
                 <tbody>
                    @foreach($meetings as $meeting)
                    <tr>
                        <td>{{$meeting->id}}</td>
                       <td>{{$meeting->client_name}}</td>
                       <td>{{$meeting->phone}}</td>
                       <td>{{ \Carbon\Carbon::parse($meeting->requested_Date)->format('m/d/Y')}}</td>
                       <td>{{$meeting->requested_time}}</td>


                       <td>
                          <div class="nk-tb-col nk-tb-col-tools">
                             <ul class="nk-tb-actions gx-1">
                                <li>
                                   <div class="drodown ">
                                      <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                      <div class="dropdown-menu dropdown-menu-right ">
                                         <ul class="link-list-opt no-bdr">
                                            <li><a href="{{route('meetings.show',$meeting->id)}}"><em class="icon ni ni-eye"></em><span>View </span></a></li>
                                            <li><form action="{{route('meetings.destroy',$meeting->id)}}" method="POST">
                                                @csrf

                                                @method('DELETE')
                                                <a href="">
                                                <button type="submit" class=""><em class="icon ni ni-delete"></em><span>Delete </span></a></button>
                                                </a>
                                            </form>
                                            </li>
                                         </ul>
                                      </div>
                                   </div>
                                </li>

                             </ul>
                          </div>
                       </td>
                    </tr>
                    @endforeach
                 </tbody>
              </table>
</div>
           </div>
        </div>

     </div>
</x-app-layout>

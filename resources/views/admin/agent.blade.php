@extends('admin/app')

@section('content')
    
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">Agent Users Listing</div>
    </div>
 <!--For breadcrump-->    
  <ol class="breadcrumb page-breadcrumb pull-right">
    
      <li><i class="">&nbsp;&nbsp;</i><a href=""></a>
	
      </li>
   
  </ol>  

    <div class="clearfix"></div>
</div>


            <div class="page-content">
                <div id="table-action" class="row">
                    <div class="col-lg-12">
                        
                        <div id="tableactionTabContent" class="tab-content">
                            <div id="table-table-tab" class="tab-pane fade in active">
    
                                <div class="row">
                                    <div class="col-lg-12"><!--<h4 class="box-heading">Agent User Search Panel</h4>-->

                                        <div class="table-container">
                                            <form name="perPageFrm" id="perPageFrm" method="post" action="">
                                            <div class="row mbl">
                                                <div class="col-lg-6">
                                                    <div class="input-group input-group-sm mbs">
                                                    
                                                    <!--<input type="text" id="search_keyword" name="search_keyword" placeholder="Enter here..." class="form-control" value="" />-->
                                                    <span class="input-group-btn">
                                                       <!-- <button type="submit" class="btn btn-success">Search</button>-->
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    
                                                   
                                                    <!--<button class="btn btn-sm btn-primary" name="btn_show_all" id="btn_show_all"><i class="fa "></i>&nbsp;
                                                            Show All
                                                    </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    View
                                                        &nbsp;&nbsp;
                                                        records -->
                                                    
                                                    <div class="tb-group-actions pull-right">
                                                    <div class="actions"><a href="{{ url('/admin/agent_add') }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;
                                                    Add Agent</a>&nbsp;
                                                    </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </form>
                                            
                                           
                                           
                                            <div class="row mbm">
                                                <div class="col-lg-4">
                                                   <div class="pagination-panel">
                                                       
                                                        <!--<span class="showRecCount">Showing  to </span> | Found total  records-->
                                                 </div>
                                                    
                                                </div>
                                                <div class="col-lg-8 text-right">
                                                    <div class="pagination-panel">
                                                        
                                                           
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <form name="frmPages" id="frmPages" action="" method="post">
                                            
                                            <input type="hidden" name="group_mode" id="group_mode" value="" />  
                                            <input type="hidden" name="totalRecord" id="totalRecord" value="">
                                            <input type="hidden" name="startRecord" id="startRecord" value="">
                                            <input type="hidden" name="per_page1" id="per_page1" value="">
                                            <table class="table table-hover table-striped table-bordered table-advanced tablesorter tb-sticky-header">
                                                <thead>
                                                <tr>
                                                   
                                                    <th width="5%" style="text-align:center" >Agent Image</th>
                                                    <th width="10%">First Name</th>
                                                    <th width="10%">Last Name</th>
                                                    <th width="7%">Email</th>
                                                    <th width="5%" align="center">Phone</th>
                                                    <!--<th width="12%">Actions</th>-->
                                                </tr>
                                                <tbody>
                                                @if($agentlList->count() > 0)
                                                @foreach($agentlList AS $r)
                                                <tr>
                                                   
                                                    
                                                    <td style="text-align:center" >
                                                        
                                                        @if($r->image != '')
                                                        @if(file_exists( public_path('upload/agentprofile/' .$r->image) ))
                                                            <img src="{{ asset('upload/agentprofile/'.$r->image) }}" height="50" />
                                                            
                                                        @else
                                                            <img src="{{ asset('backend/images/no_img.jpg') }}" height="60" />
                                                            
                                                        @endif
                                                        @else
                                                        <img src="{{ asset('backend/images/no_img.jpg') }}" height="60" />
                                                        @endif
                                                        
                                                    </td>
                                                    <td>{{ $r->first_name}}</td>
                                                    <td>{{ $r->last_name}}</td>
                                                    <td>{{ $r->email}}</td>
                                                    <td>{{ $r->phone}}</td>
                                                    
                                                    <!--<td>
                                                    <a href="" class="tablectrl_small bDefault tipS" title="Edit">
                                                        <button type="button" class="btn btn-info"><i class="fa fa-edit"></i>
                                                        </button>
                                                    </a>
                                                         &nbsp;
                                                    
                                                        <a href="" class="tablectrl_small bDefault tipS" title="Remove" onclick="return confirm('Are you sure?');">
                                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i>
                                                        </button>
                                                        </a>
                                                        
                                                    </td>-->
                                                </tr>
                                                @endforeach
                                                @else
                            <tr><td colspan="7" align="center">..::..No records found..::..</td></tr>
                            
                                                @endif
                                                </tbody>
                                                </thead></table>
                            
                                            </form>
                                                <div class="row mbm">
                                                <div class="col-lg-6">
                                                    <div class="pagination-panel">
                                                      
                                                        <!--<span class="showRecCount">Showing  to </span> | Found total  records-->
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="pagination-panel">
                                                        
                                                         <?php echo $agentlList->render(); ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>

@endsection
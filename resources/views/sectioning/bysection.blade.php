<style type="text/css">
  small { display: block }
</style>

<div class="box">
                             
                             
                                <div class="box-body">

                                  <div style="margin-top: 5%">
                                    <table id="datatable1" name="datatable1" class="table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                          <th hidden></th>
                                          <th>Division</th>
                                          <th>Level</th>
                                          <th>Section</th>
                                          <th>Session</th>
                                          <th>Number of Students</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($sect as $bysection)
                                        <tr>
                                          <td hidden>{{ $bysection->tblSectionId}}</td>
                                          <td>{{ $bysection->tblDivisionName}}</td>
                                          <td>{{ $bysection->tblLevelName}}</td>
                                          <td>{{ $bysection->tblSectionName}}</td>
                                          <td>{{ $bysection->tblSectionSession}}</td>
                                          <td>{{ $bysection->sectCount}}</td>
                                          <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdlFillSection">Fill Section</button>
                                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mdlViewStud">View Students</button></td>
                                        </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                  </div>


    <div class="modal fade" id="mdlFillSection" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="font-style: bold">Fill Section</h3>
        </div>
        <form action="{{ route('sectioning.store') }}" method="post">
          {{ csrf_field() }}
        <div class="modal-body">
        <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
          <div><input type="hidden" name="txtFillSectionId" id="txtFillSectionId"/></div>
          <div>
            <h1 align="center" style="margin-top: 5%">Are you sure?</h1>
            <h5 align="center">This section would be automatically filled with students randomly.</h5>
          </div>
        </div>         
        </div>
        <div class="modal-footer" style="margin-top: 5%; float: center">
        <button type="submit" class="btn btn-danger" name="btnFillSection" id="btnFillSection">Yes</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="mdlViewStud" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="font-style: bold">View Students</h3>
          <small>These are the list of students inside this section.</small>
        </div>
        <form action="" method="post">
        <div class="modal-body">
        <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
          <table id="datatable3" name="datatable3" class="table table-bordered table-striped">
          <thead>
          <th hidden>Section</th>
          <th>Student Id</th>
          <th>Student Name</th>
          </thead>
          <tbody>
            <td hidden></td>
            <td></td>
            <td></td>
          </tbody>
          </table>
        </div>         
        </div>
        <div class="modal-footer" style="margin-top: 5%; float: center">
          <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
                                </div> <!-- box body -->
                  
                           
                          </div> <!-- box -->
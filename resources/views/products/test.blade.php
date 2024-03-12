<!DOCTYPE html>
<html lang="en">
    <body>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Type</th>
                                @if (auth()->user()->level == 'Admin')
                  <th>Action</th>
                                @endif
                </tr>
              </thead>
              <tbody>
                {{-- @php($no = 1) --}}
                {{-- @foreach ($data as $row) --}}
                  <tr>
                    <th>bella</th>
                    <td>rindu</td>
                    <td>awak</td>
                                    {{-- @if (auth()->user()->level == 'Admin')--}}
                    <td>
                      <a  class="btn btn-warning">Edit</a>
                      <a  class="btn btn-danger">Delete</a>
                    </td>
                                    {{-- @endif
                  </tr> --}}
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
    </body>
</html>


<div class="table-header">
    Results for "Students list"
</div>

<div>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
<thead>
<tr>
    <th class="center">
        <label class="pos-rel">
            <input type="checkbox" class="ace" />
            <span class="lbl"></span>
        </label>
    </th>
    <th>Name</th>
    <th>Email</th>
    <th class="hidden-480">Type</th>

    <th>
        Institute Type
    </th>
    <th class="hidden-480">Mobile number</th>
    <th></th>
</tr>
</thead>

<tbody>

@if(!empty($data))
    @foreach($data as $row)
    <tr>
        <td class="center">
            <label class="pos-rel">
                <input type="checkbox" class="ace" />
                <span class="lbl"></span>
            </label>
        </td>
        <td>{!! $row->name !!}</td>
        <td>{!! $row->email !!}</td>
        <td>{!! $row->type !!}</td>
        <td>{!! $row->institute_type !!}</td>
        <td>{!! $row->mobile_number !!}</td>
<!--        <td>{!! $row->blood_group !!}</td>-->

        <td>
            <div class="hidden-sm hidden-xs action-buttons">
                <a class="blue" href="#">
                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                </a>

                <a href="{{ URL::to('admin/user/'.$row->id.'/edit/' ) }}" class="tooltip-success" data-rel="tooltip" title="Editttt">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>

                <a class="red" href="#">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
            </div>

            <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                        <li>
                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                <span class="blue">
                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::to('admin/user/'.$row->id.'/edit/' ) }}" class="tooltip-success" data-rel="tooltip" title="Editttt">
                                 <span class="green">
                                     <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                 </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                  <span class="red">
                                      <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                  </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
@endif


</tbody>
</table>
</div>
{!! Html::script('js/common.js'); !!}
@extends('layout.app', ['active'=>'differentials','titlePage'=>'Diferenciais'])
@section('content')


<div class='container'>

    <div class='row'>
        <div class='col-sm-6'>
            <h2 class='mb-5'> <i class='fa fa-arrow-right'></i> Status</h2>
        </div>
        <div class='col-sm-6' align='right'>
            <a href='/admin/enterprises/{{$status->first()->enterprise_id}}/edit' class='btn btn-secondary'> <i class='fa fa-arrow-left'></i> Empreeendimento</a>
        </div>

    </div>
</div>

<form enctype='multipart/form-data' action ='/admin/status/update' method='POST'>
    @csrf
    @method('PUT')
    <input type='hidden' name='enterprise_id' value='{{$status->first()->enterprise_id}}'>
    <table class="table" id='tableMessage' data-orderer='0'>
        <thead>
                <th>Status</th>
                <th>Imagem</th>
                <th>Progresso</th>

        </thead>

        <tbody>

            @foreach ($status as $stts)
                <tr>

                    <td>{{App\Models\Status::getLabel($stts->status)}}</td>
                    <td>
                        <label for='img_{{$stts->status}}'><img id='preview_{{$stts->status}}' src="{{$stts->status_image}}" width='80px' height='80px' style='cursor:pointer'></label>
                        <input type='file' class='d-none' id='img_{{$stts->status}}' name='img_{{$stts->status}}'>
                    </td>
                    <td><input type='number' min="0" step="1" name='progress_{{$stts->status}}' value="{{$stts->status_progress}}"> %</td>

                </tr>
            @endforeach

        </tbody>


    </table>

    <div align='center'>
        <button class='btn btn-success' type='submit'>ATUALIZAR</button>
    </div>
</form>

@include('enterprises.status.form-create')
@include('enterprises.status.form-edit')
@endsection

    @extends('layouts.app')
    @section('content')
    <table class="table table-dark">
        <tbody>
            <tr class="ajout">
                <td >
                    <a href="{{ route('category.create') }}">
                        <i class="fa fa-plus fa-lg"></i> @lang('Ajouter une catégorie')
                    </a>
                </td>
            @if (session('ok'))
                <td>
                    <div class="alert alert-dismissible alert-success fade show text-center" role="alert">
                        {{ session('ok') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <td>
            @endif
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>Nom : {{ $category->name }}</td>
                    <td>
                        Créé(e) le : {{ $category->created_at }} <br>
                        Mis(e) à jour le : {{ $category->updated_at }}
                    </td>
                    <td>                            
                        <a type="button" href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger btn-sm pull-right" data-toggle="tooltip" title="@lang('Supprimer la catégorie') {{ $category->name }}"><i class="fa fa-trash fa-lg"></i></a>
                        <a type="button" href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm pull-right mr-2" data-toggle="tooltip" title="@lang('Modifier la catégorie') {{ $category->name }}"><i class="fa fa-edit fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
    @section('script')
        <script>
            $(function() {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                })
                $('[data-toggle="tooltip"]').tooltip()
                $('a.btn-danger').click(function(e) {
                    let that = $(this)
                    e.preventDefault()
                    swal({
                        title: '@lang('Vraiment supprimer cette catégorie ?')',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: '@lang('Oui')',
                        cancelButtonText: '@lang('Non')'
                    }).then(function () {
                        $('[data-toggle="tooltip"]').tooltip('hide')
                        $.ajax({                        
                            url: that.attr('href'),
                            type: 'DELETE'
                        })
                            .done(function () {
                                that.parents('tr').remove()
                            })
                            .fail(function () {
                                swal({
                                    title: '@lang('Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...')',
                                    type: 'warning'
                                })
                            }
                        )
                    })
                })
            })
        </script>
    @endsection
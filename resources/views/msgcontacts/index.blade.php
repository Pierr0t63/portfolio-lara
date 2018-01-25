    @extends('layouts.app')
    @section('content')
    <table class="table table-dark">
        <tbody>
            <tr class="ajout">
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
            @foreach($msgcontacts as $msgcontact)
                <tr>
                    <td>
                        Nom : {{ $msgcontact->last_name }}<br>
                        Prénom : {{ $msgcontact->first_name }}
                    </td>
                    <td>
                        Email :  {{ $msgcontact->email }}<br>
                        @isset($msgcontact->phone)
                            Tél. :  {{ $msgcontact->phone }}
                        @endisset
                    </td>
                    <td>Catégorie : {{ $msgcontact->category->name }}</td>
                    <td>Sujet : {{ $msgcontact->subject }}</td>
                    <td>Message : {{ $msgcontact->message }}</td>
                    <td class="updated_at">
                        Créé(e) le : {{ $msgcontact->created_at }} <br>
                        Mis(e) à jour le : {{ $msgcontact->updated_at }}
                    </td>
                    <td>                            
                        <a type="button" href="{{ route('msgcontact.destroy', $msgcontact->id) }}" class="btn btn-danger btn-sm pull-right" data-toggle="tooltip" title="@lang('Supprimer le message') {{ $msgcontact->name }}"><i class="fa fa-trash fa-lg"></i></a>
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
                        title: '@lang('Vraiment supprimer ce message ?')',
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
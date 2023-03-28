@extends ('voirlistetype')
@section('contenu2')



 <table class="listeLegere">
<caption>Montant pour un type de frais</caption>

    <tr> 
      <th scope="col">Visiteur</th>
      <th scope="col">Mois</th>
      <th scope="col">Montant</th>
    </tr>
    @foreach($lesInfos as $unInfo)
        <tr>
                <td class="qteForfait">{{$unInfo['LeVisiteur']}} </td>

                <td class="qteForfait">{{$unInfo['LeMois']}} </td>

                <td class="qteForfait">{{$unInfo['LeMontant']}} </td>
        </tr>
        @endforeach
</table>


</div>
@endsection
 
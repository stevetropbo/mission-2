@extends ('voirlistetype')
@section('contenu3')

<h3>Fiche de frais du {{$$unVisiteur}} du type {{ $unType }} et de la date du {{ $numMois }}-{{ $numAnnee }} : 
    </h3>
    <div class="encadre">
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
        <tr>
            @foreach($lesFraisForfait as $unFraisForfait)
			    <th> {{$unFraisForfait['libelle']}} </th>
            @endforeach
		</tr>
        <tr>
            @foreach($lesFraisForfait as $unFraisForfait)
                <td class="qteForfait">{{ $unFraisForfait['quantite'] }} 
                </td>
            @endforeach
		</tr>
    </table>
  	</div>
@endsection
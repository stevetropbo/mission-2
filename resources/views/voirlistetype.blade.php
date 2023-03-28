@extends ('sommaireAdmin')
@section('contenu1')

<div id="contenu">
        <h2>Frais par mois et par visiteur pour un type de frais</h2>
       <form action="{{ route('chemin_afficher') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <div class="corpsForm"><p>
          <label for="lstMois" >Type : </label>
          <select id="lstMois" name="type">
              @foreach($lesTypes as $unType)
                    <option  value="{{ $unType['id'] }}">
                        {{ $unType['libelle'] }} 
                    </option>
              @endforeach
          </select>
        </p>
        

          <p><label for="lstMois " >Mois : </label>
          <select id="lstMois" name="lstMois">
              @foreach($lesMois as $mois)
                    <option value="{{ $mois['mois'] }}">
                      {{ $mois['mois'] }} 
                    </option>
              @endforeach
          </select>
        </p>

        <p>
          <label for="lstMois" >Visiteur : </label>
          <select id="lstMois" name="visiteur">
              @foreach($lesVisiteurs as $unVisiteur)
                    <option  value="{{ $unVisiteur['id'] }}">
                        {{ $unVisiteur['id'] }} 
                    </option>
              @endforeach
          </select>
        </p>

        </div>
        <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
          <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 


         </div>

        
          
        </form>
@endsection